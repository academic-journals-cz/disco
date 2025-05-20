<?php

/**
 * @file classes/DiscoMetadataQualityDAO.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @package plugins.generic.disco
 * @class DiscoMetadataQualityDAO
 * Operations for retrieving metadata quality information.
 */
namespace APP\plugins\generic\disco\classes;

use APP\core\Application;
use PKP\db\DAOResultFactory;
use APP\plugin\generic\disco\classes\Disco;

//import('lib.pkp.classes.db.DAO');
//import('plugins.generic.disco.classes.disco');

class DiscoMetadataQualityDAO extends \PKP\db\DAO {

    /**
     * Get a published submissions count by context ID
     * @param $contextId int Context ID
     */
    function getCountByContextId($contextId) {
        return $this->getCount($contextId);
    }

    function getCountByPublicationSettings($contextId, $publicationSettings = null, $locale = true) {
        return $this->getCount($contextId, $publicationSettings, $locale);
    }
    
    function getCountByArticleLocale($contextId) {
        return $this->getCount($contextId, null, false, true);
    }
    
    function getCountByPublicationDate($contextId) {
        return $this->getCount($contextId, null, false, false, true);
    }
    
    function getCountByResourceType($contextId) {
        return $this->getCount($contextId, null, false, false, false, true);
    }
    
    function getCountByAuthors($contextId) {
        return $this->getCount($contextId, null, false, false, false, false, true);
    }
    
    function getCountByEmbargoPeriod($contextId) {
        return $this->getCount($contextId, null, false, false, false, false, false, true);
    }
    
    function getCount($contextId, $publicationSettings = null, $locale = false, $articleLocale = false, $publicationDate = false, $resourceType = false, $authors = false, $embargoPeriod = false) {
        $params[] = STATUS_PUBLISHED;
        $params[] = $contextId;
        
        $request = Application::get()->getRequest();
        $context = $request->getContext();
        $primaryLocale = $context->getPrimaryLocale();
        if ($publicationSettings) {
            $params[] = $publicationSettings;
        }
        if($locale){
            $params[] = $primaryLocale;
        }

        $result = $this->retrieve(
                'SELECT	COUNT(DISTINCT s.submission_id) AS count
			FROM    submissions s
				LEFT JOIN publications p ON s.current_publication_id = p.publication_id
				LEFT JOIN publication_settings ps ON p.publication_id = ps.publication_id'
                . ($resourceType ? ' LEFT JOIN section_settings secs ON p.section_id = secs.section_id' : '')
                . ($authors ? ' LEFT JOIN authors a ON p.publication_id = a.publication_id' : '')
                . ($embargoPeriod ? ' LEFT JOIN issues i ON (i.issue_id = ps.setting_value AND ps.setting_name=\'issueId\')' : '')
                . ' WHERE s.status = ?
                                AND s.context_id = ?'
                . ($publicationSettings != null ? ' AND ps.setting_name = ? AND TRIM(ps.setting_value) <> \'\' AND TRIM(ps.setting_value) IS NOT NULL' : '')
                . ($locale ? ' AND ps.locale = ?' : '') 
                . ($articleLocale ? ' AND TRIM(s.locale) <> \'\' AND TRIM(s.locale) IS NOT NULL' : '') 
                . ($publicationDate ? ' AND TRIM(p.date_published) <> \'\' AND TRIM(s.locale) IS NOT NULL ' : '') 
                . ($resourceType ? ' AND secs.setting_name = \'resourceType\' AND TRIM(secs.setting_value) <> \'\' AND TRIM(secs.setting_value) IS NOT NULL' : '')
                . ($authors ? ' AND TRIM(a.email) <> \'\' AND TRIM(a.email) IS NOT NULL' : '')
                . ($embargoPeriod ? ' AND i.open_access_date IS NOT NULL AND p.access_status = 0' : '')
                .' ORDER BY MAX(p.date_published) DESC, s.submission_id DESC',                
                $params
        );

        $row = (array) $result->current();        
        return $row ? $row["count"] : null;
    }

}
