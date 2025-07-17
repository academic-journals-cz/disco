<?php

/**
 * @file plugins/generic/disco/DiscoPlugin.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class DiscoPlugin
 * @ingroup plugins_generic_disco
 *
 * @brief Discoverability companion plugin
 */
import('lib.pkp.classes.plugins.GenericPlugin');

/*
 * Services links to knowledge base
 */
define('SERVICE_BASE', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFT-OA-doc-BASE.md" target="_blank">BASE</a>');
define('SERVICE_CEEOL', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFT-OA-doc-CEEOL.md" target="_blank">CEEOL</a>');
define('SERVICE_CORE', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFT-OA-doc-CORE.md" target="_blank">CORE</a>');
define('SERVICE_CROSSREF', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFT-OA-doc-Crossref.md" target="_blank">Crossref</a>');
define('SERVICE_EBSCO', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFT-OA-doc-EBSCO.md" target="_blank">EBSCO</a>');
define('SERVICE_ERIHPLUS', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFTOA-doc-ERIH-PLUS.md" target="_blank">ERIH Plus</a>');
define('SERVICE_DDH', '<a href="https://www.craft-oa.eu/ddh/" target="_blank">Diamond Discovery Hub</a>');
define('SERVICE_DOAJ', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFTOA-doc-DOAJ.md" target="_blank">DOAJ</a>');
define('SERVICE_GOTRIPLE', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFTOA-doc-GoTriple.md" target="_blank">GoTriple</a>');
define('SERVICE_GS', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFTOA-doc-Google_Scholar.md" target="_blank">Google Scholar</a>');
define('SERVICE_OPENAIRE', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFTOA-doc-OpenAIRE.md" target="_blank">OpenAIRE Graph</a>');
define('SERVICE_OPENALEX', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFTOA-doc-OpenAlex.md" target="_blank">OpenAlex</a>');
define('SERVICE_PUBMED', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFTOA-doc-PubMed.md" target="_blank">PubMed</a>');
define('SERVICE_REDALYC', '<a href="https://www.redalyc.org/postulacion.oa?q=criterios" target="_blank">REDALYC</a>');
define('SERVICE_SEMANTIC_SCHOLAR', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFT-OA-doc-EBSCO.md" target="_blank">Semantic Scholar</a>');
define('SERVICE_SCOPUS', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFTOA-doc-Scopus.md" target="_blank">Scopus</a>');
define('SERVICE_WOS_ESCI', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFTOA-doc-WOS.md" target="_blank">Web of Science (ESCI)</a>');
define('SERVICE_WOS', '<a href="https://github.com/operas-eu/craft-oa-ScholIndexes-doc/blob/main/CRAFTOA-doc-WOS.md" target="_blank">Web of Science</a>');
define('SERVICE_GOOGLE', '<a href="https://developers.google.com/search/docs/appearance/ranking-systems-guide" target="_blank">Search Engine: Google</a>');
define('SERVICE_BING', '<a href="https://www.bing.com/webmasters/help/webmaster-guidelines-30fba23a" target="_blank">Search Engine: Bing</a>');
define('SERVICE_YAHOO', '<a href="https://help.yahoo.com/kb/SLN2216.html" target="_blank">Search Engine: Yahoo! Search</a>');
define('SERVICE_DUCKDUCKGO', '<a href="https://www.elegantthemes.com/blog/wordpress/duckduckgo-seo" target="_blank">Search Engine: DuckDuckGo</a>');

/*
 * Application links
 */
define('SERVICE_BASE_APPLICATION_LINK', 'https://www.base-search.net/about/en/suggest.php');
define('SERVICE_CEEOL_APPLICATION_LINK', 'https://www.ceeol.com/for-publishers-editors/CEEOL-for-publishers/apply-to-include-your-journal');
define('SERVICE_CORE_APPLICATION_LINK', 'https://core.ac.uk/benefits#join-core');
define('SERVICE_CROSSREF_APPLICATION_LINK', 'https://www.crossref.org/_apply/member/');
define('SERVICE_EBSCO_APPLICATION_LINK', 'https://www.ebsco.com/publishers-partnerships/full-text-licensed-databases-contact-form');
define('SERVICE_ERIHPLUS_APPLICATION_LINK', 'https://kanalregister.hkdir.no/publiseringskanaler/erihplus/login.action');
define('SERVICE_DDH_APPLICATION_LINK', 'https://www.craft-oa.eu/ddh/');
define('SERVICE_DOAJ_APPLICATION_LINK', 'https://doaj.org/account/login?redirected=apply');
define('SERVICE_GOTRIPLE_APPLICATION_LINK', 'https://pipeline.gotriple.eu/user/login?destination=/');
define('SERVICE_OPENAIRE_APPLICATION_LINK', 'https://provide.openaire.eu/home');
define('SERVICE_PUBMED_APPLICATION_LINK', 'https://www.ncbi.nlm.nih.gov/medline/publisherportal/');
define('SERVICE_REDALYC_APPLICATION_LINK', 'https://www.redalyc.org/postulacion.oa?q=proceso');
define('SERVICE_SCOPUS_APPLICATION_LINK', 'https://suggestor.step.scopus.com/suggestTitle/step1.cfm');
define('SERVICE_WOS_APPLICATION_LINK', 'https://clarivate.com/academia-government/scientific-and-academic-research/publisher-solutions/new-users/');

class DiscoPlugin extends GenericPlugin {

    /** @var int disco setting ID */
    var $_discoId = null;

    /** @var int Context (press / journal) ID */
    var $_contextId;   
  
    var $_categorizedRequirements = array();
    
    var $_knowledgeBase = array(
        'base' => array("name" => SERVICE_BASE, "application" => SERVICE_BASE_APPLICATION_LINK),
        'ceeol' => array("name" => SERVICE_CEEOL, "application" => SERVICE_CEEOL_APPLICATION_LINK, "requirements" => array('editorialBoardPage', 'authorsAffiliations', 'titlesAbstractsInEnglish')),
        'core' => array("name" => SERVICE_CORE, "application" => SERVICE_CORE_APPLICATION_LINK),
        'crossref' => array("name" => SERVICE_CROSSREF, "application" => SERVICE_CROSSREF_APPLICATION_LINK, "requirements" => array('fullBio', 'linkToFulltext', 'lpDoi', 'references', 'uniqueUrlArticles')),
        'ebsco' => array("name" => SERVICE_EBSCO, "application" => SERVICE_EBSCO_APPLICATION_LINK),
        'erihplus' => array("name" => SERVICE_ERIHPLUS, "application" => SERVICE_ERIHPLUS_APPLICATION_LINK, "requirements" => array('eIssn', 'aimsAndScopeDescribed', 'editorialBoardPage', 'peerReviewDescribed', 'publicationEthicsDescribed', 'authorsAffiliations', 'usingDOIs', 'titlesAbstractsInEnglish', 'apcDescribed', 'oaPolicyDescribed', 'publishingHistory')),
        'ddh' => array("name" => SERVICE_DDH, "application" => SERVICE_DDH_APPLICATION_LINK, "requirements" => array('persistantIdentification', 'scholarlyJournal', 'openLicence', 'noCharges', 'openAuthorship', 'ownershipScience')),
        'doaj' => array("name" => SERVICE_DOAJ, "application" => SERVICE_DOAJ_APPLICATION_LINK, "requirements" => array('journalUrl', 'eIssn', 'aimsAndScopeDescribed', 'authorGuidelinesDescribed', 'editorialBoardPage', 'contactDetailsAvailable', 'peerReviewDescribed', 'uniqueUrlArticles', 'apcDescribed', 'noRegistrationNeed', 'oaPolicyDescribed', 'copyrightTerms', 'noEmbargoPeriod', 'publishingHistory')),
        'gotriple' => array("name" => SERVICE_GOTRIPLE, "application" => SERVICE_GOTRIPLE_APPLICATION_LINK, "requirements" => array('oaiPMHEnabled')),
        'gs' => array("name" => SERVICE_GS, "requirements" => array('uniqueUrlArticles', 'machineReadableMetadataFormat', 'markingReferences')),
        'openaire' => array("name" => SERVICE_OPENAIRE, "application" => SERVICE_OPENAIRE_APPLICATION_LINK, "requirements" => array('oaiPMHEnabled', 'metadataFormatOpenAIRE')),
        'openalex' => array("name" => SERVICE_OPENALEX),
        'pubmed' => array("name" => SERVICE_PUBMED, "application" => SERVICE_PUBMED_APPLICATION_LINK, "requirements" => array('journalUrl', 'aimsAndScopeDescribed', 'journalPublisherNameAvailable', 'authorsAffiliations', 'publishingHistory')),
        'redalyc' => array("name" => SERVICE_REDALYC, "application" => SERVICE_REDALYC_APPLICATION_LINK, "requirements" => array('eIssn', 'journalTitle', 'aimsAndScopeDescribed', 'authorGuidelinesDescribed', 'editorialBoardPage', 'contactDetailsAvailable', 'journalPublisherNameAvailable', 'peerReviewDescribed', 'publicationEthicsDescribed', 'scholarlyArticles', 'noCharges', 'apcDescribed', 'oaPolicyDescribed', 'periodicity', 'publishingHistory')),
        'semanticscholar' => array("name" => SERVICE_SEMANTIC_SCHOLAR),
        'scopus' => array("name" => SERVICE_SCOPUS, "application" => SERVICE_SCOPUS_APPLICATION_LINK, "requirements" => array('fullContentAvailable', 'eIssn', 'qualityEnHomepage', 'aimsAndScopeDescribed', 'editorialBoardPage', 'peerReviewDescribed', 'publicationEthicsDescribed', 'periodicity')),
        'wos' => array("name" => SERVICE_WOS, "application" => SERVICE_WOS_APPLICATION_LINK, "requirements" => array('fullContentAvailable', 'functionalWebsite', 'journalUrl', 'eIssn', 'journalTitle', 'aimsAndScopeDescribed', 'bibliographicInformation', 'editorialBoardPage', 'contactDetailsAvailable', 'journalPublisherNameAvailable', 'peerReviewDescribed', 'publicationEthicsDescribed', 'scholarlyArticles', 'authorsAffiliations', 'timeliness')),
        'google' => array("name" => SERVICE_GOOGLE),
        'bing' => array("name" => SERVICE_BING),
        'yahoo' => array("name" => SERVICE_YAHOO),
        'duckduckgo' => array("name" => SERVICE_DUCKDUCKGO)
        );
        
    /**
     * @copydoc Plugin::getName()
     */
    function getName() {
        return 'DiscoPlugin';
    }

    /**
     * @copydoc Plugin::getDisplayName()
     */
    function getDisplayName() {
        return __('plugins.generic.disco.displayName');
    }

    /**
     * @copydoc Plugin::getDescription()
     */
    function getDescription() {
        return __('plugins.generic.disco.description');
    }

    /**
     * @copydoc Plugin::register()
     */
    function register($category, $path, $mainContextId = null) {
        if (!parent::register($category, $path, $mainContextId))
            return false;

        if ($this->getEnabled()) {
            import('plugins.generic.disco.classes.DiscoDAO');
            $discoDao = new DiscoDAO();
            DAORegistry::registerDAO('DiscoDAO', $discoDao);

            import('plugins.generic.disco.classes.DiscoMetadataQualityDAO');
            $discoMetadataQualityDAO = new DiscoMetadataQualityDAO();
            DAORegistry::registerDAO('DiscoMetadataQualityDAO', $discoMetadataQualityDAO);

            HookRegistry::register('Template::Settings::website', array($this, 'callbackShowWebsiteSettingsTabs'));
            HookRegistry::register('TemplateManager::display', array($this, 'addDiscoStylesBackend'));
            HookRegistry::register('TemplateManager::display', array($this, 'addDiscoStylesFrontend'));

            HookRegistry::register('Templates::Common::Footer::PageFooter', array($this, 'callbackTemplateCommonPageFooter'));

            HookRegistry::register('TemplateManager::display', array($this, 'addDiamondTexts'));

            // Register the components this plugin implements to
            // permit administration of disco.
            HookRegistry::register('LoadComponentHandler', array($this, 'setupHandler'));
        }
        return true;
    }

    public function addDiamondTexts($hookName, $args) {
        $templateMgr = $args[0];
        $template = $args[1];

        $request = Application::get()->getRequest();
        $context = $request->getContext();
        $contextId = $context->getId();

        // Get the disco settings
        $discoDao = DAORegistry::getDAO('DiscoDAO');
        $discoIterator = $discoDao->getByContextId($contextId);
        $disco = $discoIterator->next();
        
        if ($template !== "frontend/pages/about.tpl") return false;

        // Get "about" page content
        $currentContext = $templateMgr->getTemplateVars('currentContext');
        $currentLocale = AppLocale::getLocale();
        
        error_log(print_r($currentContext,true));
        if ($currentContext) {
            $aboutText = $currentContext->getLocalizedSetting('about');

            // Add own text to about context part
            if ((bool) $disco->getOpenAuthorship()){
                $aboutText .= __('plugins.generic.disco.about.openToAllAuthors', array('contextTitle' => $currentContext->getLocalizedData('name')));
            }           
            if ((bool) $disco->getOwnershipScience()){
                if($disco->getOrganisationType()=="nonprofit"){
                    $organisationType = __('plugins.generic.disco.diamond.organisationType.nonProfit');
                } else {
                    $organisationType = __('plugins.generic.disco.diamond.organisationType.public');
                }
                $aboutText .= __('plugins.generic.disco.about.communityOwned', array('contextTitle' => $currentContext->getLocalizedData('name'), 'publisherInstitution' => $currentContext->getData('publisherInstitution'), 'organisationType' => $organisationType));
            }
            // Content update inside object
            $currentContext->setData('about', $aboutText, $currentLocale);
        }

        // Assign whole updated object to template
        $templateMgr->assign(array(
            'currentContext' => $currentContext,            
        ));

        return false;
    }

    /**
     * Extend the website settings tabs to include static pages
     * @param $hookName string The name of the invoked hook
     * @param $args array Hook parameters
     * @return boolean Hook handling status
     */
    function callbackShowWebsiteSettingsTabs($hookName, $args) {
        $templateMgr = $args[1];
        $output = &$args[2];
        $request = Application::get()->getRequest();
        $context = $request->getContext();
        $contextId = $context->getId();
        $this->_contextId = $contextId;

        // Get the disco settings
        $discoDao = DAORegistry::getDAO('DiscoDAO');
        $discoIterator = $discoDao->getByContextId($contextId);
        $disco = $discoIterator->next();
        if ($disco) {
            $discoId = $disco->getId();
        }
        if ($discoId > 0) {
            $this->_discoId = $discoId;
        }

        $automaticChecks = $this->getAutomaticChecks($context);
        // Assign disco variables to template
        $this->assign($disco);

        $templateMgr->assign('metadataQuality', $this->getMetadataQuality($contextId));
        $templateMgr->assign("categorizedRequirements", $this->getCategorizedRequirements());
        $templateMgr->assign("ojsSettings", $this->getOJSSettings());
        $templateMgr->assign("automaticChecks", $automaticChecks);
        $templateMgr->assign("resultsKnowledgeBase", $this->getResultsKnowledgeBase($disco, $automaticChecks)); 
        $templateMgr->assign("requirementsCategory", $this->getRequirementsCategory());  
        $templateMgr->assign("discoAppearance", $this->getTemplateResource('discoAppearance.tpl'));
        $templateMgr->assign("discoDiamond", $this->getTemplateResource('discoDiamond.tpl'));
        $templateMgr->assign("discoGeneralRecommendation", $this->getTemplateResource('discoGeneralRecommendation.tpl'));
        $templateMgr->assign("discoImpactRecommendation", $this->getTemplateResource('discoImpactRecommendation.tpl'));
        $templateMgr->assign("discoJournalDescription", $this->getTemplateResource('discoJournalDescription.tpl'));
        $templateMgr->assign("discoLandingPages", $this->getTemplateResource('discoLandingPages.tpl'));
        $templateMgr->assign("discoMetadata", $this->getTemplateResource('discoMetadata.tpl'));
        $templateMgr->assign("discoMetadataQuality", $this->getTemplateResource('discoMetadataQuality.tpl'));
        $templateMgr->assign("discoRegularity", $this->getTemplateResource('discoRegularity.tpl'));
        $templateMgr->assign("discoResults", $this->getTemplateResource('discoResults.tpl'));
        $templateMgr->assign("discoPolicy", $this->getTemplateResource('discoPolicy.tpl'));
        $templateMgr->assign("discoSeo", $this->getTemplateResource('discoSeo.tpl'));
        $templateMgr->assign("discoItem", $this->getTemplateResource('discoItem.tpl'));
        $templateMgr->assign("discoBadges", $this->getTemplateResource('discoBadges.tpl'));
        $this->assignBadges();
        $templateMgr->assign("badgesAvailability", $this->badgesAvailability($disco, $context));

        $output .= $templateMgr->fetch($this->getTemplateResource('discoTab.tpl'));

        // Permit other plugins to continue interacting with this hook
        return false;
    }
    
    function getRequirementsCategory(){
        $requirementsCategory = array();
        foreach($this->_categorizedRequirements as $category => $requiremens){
            foreach($requiremens as $requirement => $values){
                $requirementsCategory[$requirement] = $category;
            }
        }
        error_log(print_r($requirementsCategory,true));
        return $requirementsCategory;
    }

    //
    // View level hook implementations.
    //

    /**
     * 
     */
    function callbackTemplateCommonPageFooter($hookName, $args) {
        $templateMgr = $args[1];
        $output = &$args[2];
        $request = Application::get()->getRequest();
        $context = $request->getContext();
        $contextId = $context->getId();

        // Get the disco settings
        $discoDao = DAORegistry::getDAO('DiscoDAO');
        $discoIterator = $discoDao->getByContextId($contextId);
        $disco = $discoIterator->next();
        if ($disco) {
            $discoId = $disco->getId();
        }
        if ($discoId > 0) {
            $this->_discoId = $discoId;
        }
        error_log(print_r($disco, true));

        if ($disco && $disco->getBadgesAvailable()) {
            $this->assignBadges();
            $bagesAvailability = $this->badgesAvailability($disco, $context);
            $templateMgr->assign("badgesAvailability", $bagesAvailability);
            $output .= $templateMgr->fetch($this->getTemplateResource('badgesFooter.tpl'));
        } else {
            return false;
        }

        return false;
    }

    function assignBadges() {
        $templateMgr = TemplateManager::getManager();
        $badges = array("badgesAvailableContent" => $this->getTemplateResource('badges/availableContent.svg')
            , "badgesCommunityOwned" => $this->getTemplateResource('badges/communityOwned.svg')
            , "badgesDiamondJournal" => $this->getTemplateResource('badges/diamondJournal.svg')
            , "badgesDoiUsed" => $this->getTemplateResource('badges/doiUsed.svg')
            , "badgesGeographicalDiversity" => $this->getTemplateResource('badges/geographicalDiversity.svg')
            , "badgesNoApc" => $this->getTemplateResource('badges/noApc.svg')
            , "badgesOpenToAllAuthors" => $this->getTemplateResource('badges/openToAllAuthors.svg')
            , "badgesPlagiarismCheckImplemented" => $this->getTemplateResource('badges/plagiarismCheckImplemented.svg')
            , "badgesRegularPeriodicity" => $this->getTemplateResource('badges/regularPeriodicity.svg')
            , "badgesScholarlyJournal" => $this->getTemplateResource('badges/scholarlyJournal.svg'));

        $templateMgr->assign("badges", $badges);
        return true;
    }

    function badgesAvailability($disco, $context) {
        $badgesAvailability = array();

        $automaticChecks = $this->getAutomaticChecks($context);
        if ($disco) {
            $variables = $this->getVariables($disco);
        }

        $badgesAvailability["badgesAvailableContent"] = false;
        $badgesAvailability["badgesCommunityOwned"] = false;
        $badgesAvailability["badgesDiamondJournal"] = false;
        $badgesAvailability["badgesDoiUsed"] = false;
        $badgesAvailability["badgesGeographicalDiversity"] = false;
        $badgesAvailability["badgesNoApc"] = false;
        $badgesAvailability["badgesOpenToAllAuthors"] = false;
        $badgesAvailability["badgesPlagiarismCheckImplemented"] = false;
        $badgesAvailability["badgesRegularPeriodicity"] = false;
        $badgesAvailability["badgesScholarlyJournal"] = false;

        if ($variables["fullContentAvailable"] && $automaticChecks["appearance"]["fullContentAvailable"]) {
            $badgesAvailability["badgesAvailableContent"] = true;
        }

        if ($variables["ownershipScience"]) {
            $badgesAvailability["badgesCommunityOwned"] = true;
        }

        if ($variables['persistantIdentification'] && $variables['scholarlyJournal'] && $variables['openLicence'] && $variables['noCharges'] && $variables['openAuthorship'] && $variables['ownershipScience']) {
            $badgesAvailability["badgesDiamondJournal"] = true;
        }

        if ($variables["usingDOIs"] && $automaticChecks["metadataRequirements"]["usingDOIs"]) {
            $badgesAvailability["badgesDoiUsed"] = true;
        }

        $badgesAvailability["badgesGeographicalDiversity"] = false;

        if ($variables["noApc"] || $variables["noCharges"]) {
            $badgesAvailability["badgesNoApc"] = true;
        }

        if ($variables["openAuthorship"]) {
            $badgesAvailability["badgesOpenToAllAuthors"] = true;
        }

        if ($automaticChecks["generalRecommendations"]["plagiarismCheck"]) {
            $badgesAvailability["badgesPlagiarismCheckImplemented"] = true;
        }

        if ($variables["scholarlyJournal"]) {
            $badgesAvailability["badgesScholarlyJournal"] = true;
        }

        if ($variables["periodicity"]) {
            $badgesAvailability["badgesRegularPeriodicity"] = true;
        }

        return $badgesAvailability;
    }

    /**
     * 
     */
    function addDiscoStylesBackend($hookName, $params) {
        $templateMgr = $params[0];
        $request = $this->getRequest();
        $discoStyles = $this->getStyleSheetURL($request, false) . DIRECTORY_SEPARATOR . 'disco.less';

        $templateMgr->addStylesheet(
                'DiscoStyles',
                $discoStyles,
                array('contexts' => 'backend')
        );
        return false;
    }

    /**
     * 
     */
    function addDiscoStylesFrontend($hookName, $params) {
        $templateMgr = $params[0];
        $request = $this->getRequest();
        $discoStyles = $this->getStyleSheetURL($request, false) . DIRECTORY_SEPARATOR . 'discoFrontend.less';

        $templateMgr->addStylesheet(
                'DiscoStyles',
                $discoStyles,
                array('contexts' => 'frontend')
        );
        return false;
    }

    function getMetadataQuality($contextId) {
        $discoMetadataQualityDAO = DAORegistry::getDAO('DiscoMetadataQualityDAO');
        $metadataQuality = array();

        $metadataQuality['publishedSubmissionsCount'] = $discoMetadataQualityDAO->getCountByContextId($contextId);
        $metadataQuality["title"] = $discoMetadataQualityDAO->getCountByPublicationSettings($contextId, "title");
        $metadataQuality["authors"] = $discoMetadataQualityDAO->getCountByAuthors($contextId);
        $metadataQuality["publicationDate"] = $discoMetadataQualityDAO->getCountByPublicationDate($contextId);
        $metadataQuality["resourceType"] = $discoMetadataQualityDAO->getCountByResourceType($contextId);
        $metadataQuality["abstract"] = $discoMetadataQualityDAO->getCountByPublicationSettings($contextId, "abstract");
//        $metadataQuality["resourceIdentifier"] =;
//        $metadataQuality["accessRights"] =;
//        $metadataQuality["contributors"] =;
//        $metadataQuality["fundingReferences"] =;
        $metadataQuality["embargoPeriodDate"] = $discoMetadataQualityDAO->getCountByEmbargoPeriod($contextId);
        $metadataQuality["language"] = $discoMetadataQualityDAO->getCountByArticleLocale($contextId);
//        $metadataQuality["subject"] =;
//        $metadataQuality["fileLocation"] =;
        $metadataQuality["alternateIdentifier"] = $discoMetadataQualityDAO->getCountByPublicationSettings($contextId, "pub-id::doi", false);
//        $metadataQuality["relatedIdentifier"] =;
//        $metadataQuality["format"] =;
        $metadataQuality["source"] = $discoMetadataQualityDAO->getCountByPublicationSettings($contextId, "source");
        $metadataQuality["licenseCondition"] = $discoMetadataQualityDAO->getCountByPublicationSettings($contextId, "licenseUrl", false);
        $metadataQuality["coverage"] = $discoMetadataQualityDAO->getCountByPublicationSettings($contextId, "coverage");
//        $metadataQuality["resourceVersion"] =;
        $metadataQuality["size"] = $discoMetadataQualityDAO->getCountByPublicationSettings($contextId, "pages", false);
//        $metadataQuality["geoLocation"] =;
//        $metadataQuality["journalTitle"] =;
//        $metadataQuality["issueVolume"] =;
//        $metadataQuality["issueNumber"] =;
//        $metadataQuality["articleEndPage"] =;
//        $metadataQuality["articleStartPage"] =;
//        $metadataQuality["audience"] =;

        return $metadataQuality;
    }

    function getAutomaticChecks($context) {
        $enabled = $context->getEnabled();
        $locale = $context->getPrimaryLocale();
        $publishingMode = $context->getData("publishingMode");
        $licenseUrl = $context->getData("licenseUrl");
        $onlineIssn = $context->getData('onlineIssn');
        $name = $context->getLocalizedData('name', $locale);
        $authorGuidelines = $context->getLocalizedData('authorGuidelines', $locale);
        $editorialTeam = $context->getLocalizedData('editorialTeam', $locale);
        $contactName = $context->getData('contactName');
        $contactEmail = $context->getData('contactEmail');
        $mailingAddress = $context->getData('mailingAddress');
        $publisherInstitution = $context->getData('publisherInstitution');
        $enableOai = $context->getData('enableOai');
        $copyrightNotice = $context->getLocalizedData('copyrightNotice', $locale);
        $delayedOpenAccessDuration = $context->getData('delayedOpenAccessDuration');
        $contextId = $context->getId();

        $automaticChecks = array(
            "diamond" => array(),
            "appearance" => array(),
            "journalDescription" => array(),
            "metadataRequirements" => array(),
            "metadataQuality" => array(),
            "journalPolicy" => array(),
            "regularity" => array(),
            "generalRecommendations" => array(),
        );

        if ($enabled && $publishingMode == 0 && $this->licenceTest($licenseUrl)) {
            $openLicence = true;
        } else {
            $openLicence = false;
        }

        /* Diamond criteria */
        $automaticChecks["diamond"] = array(
            "openLicence" => ($enabled && $publishingMode == 0 && $this->licenceTest($licenseUrl)) ? true : false,
        );

        /* Appearance */
        $automaticChecks["appearance"] = array(
            "fullContentAvailable" => ($enabled && $publishingMode == 0 && $this->licenceTest($licenseUrl)) ? true : false,
            "eIssn" => $onlineIssn ? true : false,
            "journalTitle" => $name ? true : false,
        );

        /* Journal description */
        $automaticChecks["journalDescription"] = array(
            "authorGuidelinesDescribed" => $authorGuidelines ? true : false,
            "editorialBoardPage" => $editorialTeam ? true : false,
            "contactDetailsAvailable" => ($contactName && $contactEmail && $mailingAddress) ? true : false,
            "journalPublisherNameAvailable" => $publisherInstitution ? true : false,
        );

        /* Metadata Requirements */
        $automaticChecks["metadataRequirements"] = array(
            "machineReadableMetadataFormat" => ($this->checkPlugin('generic', 'dublinCoreMeta', $contextId) && $this->checkPlugin('generic', 'googleScholar', $contextId)),
            "oaiPMHEnabled" => $enableOai,
            "usingDOIs" => $this->checkPlugin('pubIds', 'doi', $contextId),
            "metadataFormatOpenAIRE" => $this->checkPlugin('generic', 'openAIREstandard', $contextId),
        );

        /* Metadata Quality */
        $automaticChecks["metadataQuality"] = array(
            "publisher" => $publisherInstitution ? true : false,
            "journalTitle" => $name ? true : false,
        );

        /* Journal policy */
        $automaticChecks["journalPolicy"] = array(
            "noRegistrationNeed" => ($enabled && $publishingMode == 0) ? true : false,
            "oaPolicyDescribed" => $this->licenceTest($licenseUrl),
            "copyrightTerms" => $copyrightNotice ? true : false,
            "noEmbargoPeriod" => ($publishingMode == 1 && $delayedOpenAccessDuration && $delayedOpenAccessDuration > 0) ? false : true
        );

        /* General Recommendations */
        $automaticChecks["generalRecommendations"] = array(
            "plagiarismCheck" => $this->checkPlugin('generic', 'plagiarism', $contextId)
        );
        return $automaticChecks;
    }

    function getOJSSettings() {
        $ojsSettings = array();
        $ojsSettings["fullContentAvailable"] = array("publishingMode", "ccLicense");
        $ojsSettings["eIssn"] = array("eIssn");
        $ojsSettings["journalTitle"] = array("journalTitle");
        $ojsSettings["aimsAndScopeDescribed"] = array("about");
        $ojsSettings["authorGuidelinesDescribed"] = array("authorGuidelines");
        $ojsSettings["editorialBoardPage"] = array("editorialTeam");
        $ojsSettings["contactDetailsAvailable"] = array("contact");
        $ojsSettings["journalPublisherNameAvailable"] = array("publisher");
        $ojsSettings["peerReviewDescribed"] = array("about");
        $ojsSettings["publicationEthicsDescribed"] = array("ethics");
        $ojsSettings["oaiPMHEnabled"] = array("oai");
        $ojsSettings["usingDOIs"] = array("pluginDOI");
        $ojsSettings["metadataFormatOpenAIRE"] = array("pluginOpenAIRE");
        $ojsSettings["machineReadableMetadataFormat"] = array("pluginDC", "pluginGS");
        $ojsSettings["publisher"] = array("publisher");
        $ojsSettings["journalTitle"] = array("journalTitle");
        $ojsSettings["apcDescribed"] = array("about");
        $ojsSettings["noRegistrationNeed"] = array("siteAccess");
        $ojsSettings["oaPolicyDescribed"] = array("about");
        $ojsSettings["copyrightTerms"] = array("copyrightNote", "copyrightHolder");
        $ojsSettings["noEmbargoPeriod"] = array("publishingMode");

        return $ojsSettings;
    }

    function getCategorizedRequirements() {
        $categorizedRequirements = array(
            "diamond" => array(),
            "appearance" => array(),
            "journalDescription" => array(),
            "lpGalleys" => array(),
            "metadataRequirements" => array(),
            "metadataQuality" => array(),
            "journalPolicy" => array(),
            "regularity" => array(),
            "generalRecommendations" => array(),
            "impactRecommendations" => array(),
            "seo" => array(),
        );

        /* Diamond criteria */
        $categorizedRequirements["diamond"] = array(
            "persistantIdentification" => array(SERVICE_DDH),
            "scholarlyJournal" => array(SERVICE_DDH),
            "openLicence" => array(SERVICE_DDH),
            "noCharges" => array(SERVICE_DDH, SERVICE_REDALYC),
            "openAuthorship" => array(SERVICE_DDH),
            "ownershipScience" => array(SERVICE_DDH),
        );

        /* Appearance */
        $categorizedRequirements["appearance"] = array(
            "fullContentAvailable" => array(SERVICE_WOS_ESCI, SERVICE_SCOPUS),
            "functionalWebsite" => array(SERVICE_WOS_ESCI),
            "journalUrl" => array(SERVICE_WOS_ESCI, SERVICE_DOAJ, SERVICE_PUBMED),
            "eIssn" => array(SERVICE_WOS_ESCI, SERVICE_SCOPUS, SERVICE_ERIHPLUS, SERVICE_REDALYC, SERVICE_DOAJ),
            "journalTitle" => array(SERVICE_WOS_ESCI, SERVICE_REDALYC),
            "qualityEnHomepage" => array(SERVICE_SCOPUS),
        );

        /* Journal description */
        $categorizedRequirements["journalDescription"] = array(
            "aimsAndScopeDescribed" => array(SERVICE_WOS_ESCI, SERVICE_SCOPUS, SERVICE_ERIHPLUS, SERVICE_PUBMED, SERVICE_REDALYC, SERVICE_DOAJ),
            "authorGuidelinesDescribed" => array(SERVICE_REDALYC, SERVICE_DOAJ),
            "bibliographicInformation" => array(SERVICE_WOS_ESCI),
            "editorialBoardPage" => array(SERVICE_WOS_ESCI, SERVICE_SCOPUS, SERVICE_ERIHPLUS, SERVICE_REDALYC, SERVICE_DOAJ, SERVICE_CEEOL),
            "contactDetailsAvailable" => array(SERVICE_WOS_ESCI, SERVICE_REDALYC, SERVICE_DOAJ),
            "journalPublisherNameAvailable" => array(SERVICE_WOS_ESCI, SERVICE_PUBMED, SERVICE_REDALYC),
            "peerReviewDescribed" => array(SERVICE_WOS_ESCI, SERVICE_SCOPUS, SERVICE_ERIHPLUS, SERVICE_REDALYC, SERVICE_DOAJ),
            "publicationEthicsDescribed" => array(SERVICE_WOS_ESCI, SERVICE_SCOPUS, SERVICE_ERIHPLUS, SERVICE_REDALYC),
            "scholarlyArticles" => array(SERVICE_WOS_ESCI, SERVICE_REDALYC),
        );

        /* Landing Pages / Galleys */
        $categorizedRequirements["lpGalleys"] = array(
//            "dataInJats" => array(),
            "fullBio" => array(SERVICE_CROSSREF),
            "linkToFulltext" => array(SERVICE_CROSSREF),
            "lpDoi" => array(SERVICE_CROSSREF),
            "references" => array(SERVICE_CROSSREF),
            "uniqueUrlArticles" => array(SERVICE_DOAJ, SERVICE_GS, SERVICE_CROSSREF),
        );

        /* Metadata Requirements */
        $categorizedRequirements["metadataRequirements"] = array(
            "authorsAffiliations" => array(SERVICE_WOS_ESCI, SERVICE_ERIHPLUS, SERVICE_PUBMED, SERVICE_CEEOL),
            "machineReadableMetadataFormat" => array(SERVICE_GS),
            "oaiPMHEnabled" => array(SERVICE_GOTRIPLE, SERVICE_OPENAIRE),
//            "systemLanguageCheck" => array(),
            "usingDOIs" => array(SERVICE_ERIHPLUS),
            "titlesAbstractsInEnglish" => array(SERVICE_ERIHPLUS, SERVICE_CEEOL),
            "markingReferences" => array(SERVICE_GS),
            "metadataFormatOpenAIRE" => array(SERVICE_OPENAIRE)
        );

        /* SEO recommendations */
        $categorizedRequirements["metadataQuality"] = array(
            "title" => array(SERVICE_OPENAIRE, SERVICE_CROSSREF),
            "authors" => array(SERVICE_OPENAIRE, SERVICE_PUBMED),
            "publicationDate" => array(SERVICE_OPENAIRE, SERVICE_PUBMED, SERVICE_CROSSREF),
            "resourceType" => array(SERVICE_OPENAIRE),
            "abstract" => array(SERVICE_OPENAIRE, SERVICE_WOS_ESCI, SERVICE_WOS, SERVICE_SCOPUS, SERVICE_PUBMED),
            "resourceIdentifier" => array(SERVICE_OPENAIRE),
            "accessRights" => array(SERVICE_OPENAIRE),
            "contributors" => array(SERVICE_OPENAIRE, SERVICE_PUBMED),
            "fundingReferences" => array(SERVICE_OPENAIRE, SERVICE_PUBMED),
            "embargoPeriodDate" => array(SERVICE_OPENAIRE),
            "language" => array(SERVICE_OPENAIRE),
            "publisher" => array(SERVICE_OPENAIRE, SERVICE_WOS_ESCI, SERVICE_WOS, SERVICE_SCOPUS),
            "subject" => array(SERVICE_OPENAIRE, SERVICE_SCOPUS),
            "fileLocation" => array(SERVICE_OPENAIRE),
            "alternateIdentifier" => array(SERVICE_OPENAIRE, SERVICE_PUBMED, SERVICE_CROSSREF),
            "relatedIdentifier" => array(SERVICE_OPENAIRE),
            "format" => array(SERVICE_OPENAIRE),
            "source" => array(SERVICE_OPENAIRE),
            "licenseCondition" => array(SERVICE_OPENAIRE),
            "coverage" => array(SERVICE_OPENAIRE),
            "resourceVersion" => array(SERVICE_OPENAIRE),
            "size" => array(SERVICE_OPENAIRE),
            "geoLocation" => array(SERVICE_OPENAIRE),
            "journalTitle" => array(SERVICE_OPENAIRE, SERVICE_WOS_ESCI, SERVICE_WOS, SERVICE_SCOPUS, SERVICE_PUBMED, SERVICE_CROSSREF),
            "issueVolume" => array(SERVICE_OPENAIRE, SERVICE_PUBMED, SERVICE_CROSSREF),
            "issueNumber" => array(SERVICE_OPENAIRE, SERVICE_PUBMED, SERVICE_CROSSREF),
            "articleEndPage" => array(SERVICE_OPENAIRE, SERVICE_PUBMED),
            "articleStartPage" => array(SERVICE_OPENAIRE, SERVICE_PUBMED),
            "audience" => array(SERVICE_OPENAIRE),
        );

        /* Journal policy */
        $categorizedRequirements["journalPolicy"] = array(
            //"noAPC" => array(SERVICE_REDALYC, SERVICE_DDH),
            "apcDescribed" => array(SERVICE_REDALYC, SERVICE_DDH, SERVICE_DOAJ, SERVICE_ERIHPLUS),
            "noRegistrationNeed" => array(SERVICE_DOAJ),
            "oaPolicyDescribed" => array(SERVICE_DOAJ, SERVICE_REDALYC, SERVICE_ERIHPLUS),
            "copyrightTerms" => array(SERVICE_DOAJ),
            "noEmbargoPeriod" => array(SERVICE_DOAJ),
        );

        /* Regularity */
        $categorizedRequirements["regularity"] = array(
            "periodicity" => array(SERVICE_SCOPUS, SERVICE_REDALYC),
            "publishingHistory" => array(SERVICE_DOAJ, SERVICE_ERIHPLUS, SERVICE_PUBMED, SERVICE_REDALYC),
            "timeliness" => array(SERVICE_WOS_ESCI),
        );

        /* General recommendations */
        $categorizedRequirements["generalRecommendations"] = array(
            "clarityOfLanguage" => array(SERVICE_WOS_ESCI),
            "communityStandardsAdherence" => array(SERVICE_WOS_ESCI),
            "statementsValidity" => array(SERVICE_WOS_ESCI),
            "grantSupportDetails" => array(SERVICE_WOS_ESCI),
            "internalSystemInUse" => array(),
            "plagiarismCheck" => array(SERVICE_DOAJ),
        );

        /* Impact recommendations */
        $categorizedRequirements["impactRecommendations"] = array(
            "authorsDiversity" => array(SERVICE_WOS_ESCI, SERVICE_SCOPUS, SERVICE_DOAJ, SERVICE_ERIHPLUS, SERVICE_REDALYC),
            "citedAuthors" => array(SERVICE_WOS),
            "citedEditorialBoard" => array(SERVICE_WOS),
            "citedness" => array(SERVICE_WOS, SERVICE_SCOPUS),
            "contentSignificance" => array(SERVICE_WOS, SERVICE_SCOPUS),
            "editorsDiversity" => array(SERVICE_WOS_ESCI, SERVICE_SCOPUS),
        );

        /* SEO recommendations */
        $categorizedRequirements["seo"] = array(
            "accurateTitles" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "altTextImages" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "covers" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "crosslinks" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "h1Title" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "keyTerms" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "noTextInImages" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "pageLoadingTime" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "readableURLs" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "robotsFile" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "robotsMetadata" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "seoCompliant" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "sitemapAvailable" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "submitSitemap" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "submitSitemap" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
            "unhideJScontent" => array(SERVICE_GOOGLE, SERVICE_BING, SERVICE_YAHOO, SERVICE_DUCKDUCKGO),
        );

        /* Badges */
        $categorizedRequirements["badges"] = array(
            "badgesAvailable" => array(),
        );

        $this->_categorizedRequirements = $categorizedRequirements;
        return $categorizedRequirements;
    }

    function getResultsKnowledgeBase($disco, $automaticChecks) {
        $knowledgeBase = $this->_knowledgeBase;

        if ($disco) {
            $databases = array_keys($this->_knowledgeBase);
            foreach ($databases as $database) {
                if(array_key_exists("requirements", $knowledgeBase[$database])){
                    $score = $this->countScoreForDatabase($database, $disco, $automaticChecks);
                    $knowledgeBase[$database]["score"] = $score["score"];
                    $knowledgeBase[$database]["count"] = $score["count"];
                    $knowledgeBase[$database]["fulfilledCriteria"] = $score["fulfilledCriteria"];
                }
            }
        }

        return $knowledgeBase;
    }

    function countScoreForDatabase($database, $disco, $automaticChecks) {
        $output = array();
        $variables = $this->_knowledgeBase[$database]["requirements"];
        $scoreFromAutomaticChecks = $this->scoreFromAutomaticChecks($variables, $automaticChecks);
        $scoreFromSelfAssessment = $this->scoreFromSelfAssessment($variables, $disco);

        $output["score"] = $scoreFromAutomaticChecks["score"] + $scoreFromSelfAssessment["score"];
        $output["count"] = $scoreFromAutomaticChecks["count"] + $scoreFromSelfAssessment["count"];
        $output["fulfilledCriteria"] = array_merge($scoreFromAutomaticChecks["fulfilledCriteria"],$scoreFromSelfAssessment["fulfilledCriteria"]);
        $output["requirements"] = $variables;
        return $output;
    }

    function scoreFromAutomaticChecks($variables, $automaticChecks) {
        $score = 0;
        $count = 0;
        $fulfilledCriteria = array();
        foreach ($automaticChecks as $category => $requirements) {
            foreach ($requirements as $requirement => $value) {
                if (array_key_exists($requirement, $variables)) {
                    $count++;
                    if ($value) {
                        $fulfilledCriteria[] = $requirement;
                        $score++;
                    }
                }
            }
        }
        return array("score" => (int) $score, "count" => (int) $count, "fulfilledCriteria" => $fulfilledCriteria);
    }

    function scoreFromSelfAssessment($variables, $disco) {
        $score = 0;
        $count = sizeof($variables);
        $fulfilledCriteria = array();
        foreach ($variables as $variable) {
            if ($disco->getData($variable)) {
                $fulfilledCriteria[] = $variable;
                $score++;
            }
        }
        return array("score" => (int) $score, "count" => (int) $count, "fulfilledCriteria" => $fulfilledCriteria);
    }

    /**
     * @copydoc Plugin::getInstallSchemaFile()
     */
    function getInstallSchemaFile() {
        return $this->getPluginPath() . '/schema.xml';
    }

    /**
     * Get the JavaScript URL for this plugin.
     */
    function getJavaScriptURL() {
        return Application::get()->getRequest()->getBaseUrl() . DIRECTORY_SEPARATOR . $this->getPluginPath() . DIRECTORY_SEPARATOR . 'js';
    }

    /**
     * Get the StyleSheet URL for this plugin.
     */
    function getStyleSheetURL() {
        return Application::get()->getRequest()->getBaseUrl() . DIRECTORY_SEPARATOR . $this->getPluginPath() . DIRECTORY_SEPARATOR . 'styles';
    }

    function licenceTest($licenseUrl) {
        $licenseKeyMap = array(
            '|http[s]?://(www\.)?creativecommons.org/licenses/by-nc-nd/4.0[/]?|',
            '|http[s]?://(www\.)?creativecommons.org/licenses/by-nc/4.0[/]?|',
            '|http[s]?://(www\.)?creativecommons.org/licenses/by-nc-sa/4.0[/]?|',
            '|http[s]?://(www\.)?creativecommons.org/licenses/by-nd/4.0[/]?|',
            '|http[s]?://(www\.)?creativecommons.org/licenses/by/4.0[/]?|',
            '|http[s]?://(www\.)?creativecommons.org/licenses/by-sa/4.0[/]?|',
            '|http[s]?://(www\.)?creativecommons.org/licenses/by-nc-nd/3.0[/]?|',
            '|http[s]?://(www\.)?creativecommons.org/licenses/by-nc/3.0[/]?|',
            '|http[s]?://(www\.)?creativecommons.org/licenses/by-nc-sa/3.0[/]?|',
            '|http[s]?://(www\.)?creativecommons.org/licenses/by-nd/3.0[/]?|',
            '|http[s]?://(www\.)?creativecommons.org/licenses/by/3.0[/]?|',
            '|http[s]?://(www\.)?creativecommons.org/licenses/by-sa/3.0[/]?|'
        );
        foreach ($licenseKeyMap as $pattern) {
            if ($licenseUrl && preg_match($pattern, $licenseUrl)) {
                return true;
            }
        }
        return false;
    }

    public function checkPlugin($category, $pluginName, $contextId) {
        $plugin = PluginRegistry::loadPlugin($category, $pluginName, $contextId);
        if ($plugin && $plugin->getCurrentVersion() && $plugin->getSetting($contextId, 'enabled')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Permit requests to the disco handler
     * @param $hookName string The name of the hook being invoked
     * @param $params array The parameters to the invoked hook
     */
    function setupHandler($hookName, $params) {
        $component = & $params[0];
        if ($component == 'plugins.generic.disco.controllers.DiscoHandler') {
            // Allow the disco handler to get the plugin object
            import($component);
            DiscoHandler::setPlugin($this);
            return true;
        }
        return false;
    }

    /**
     * Initialize form data from current group group.
     */
    function assign($disco) {
        $templateMgr = TemplateManager::getManager();
        $templateMgr->assign("contextId", $this->_contextId);
        if ($disco) {
            $templateMgr->assign('discoId', $this->_discoId);
            $variables = $this->getVariables($disco);
            $templateMgr->assign('variables', $variables);
        }
        return true;
    }

    function getVariables($disco) {
        $variables = array();
        $variables['persistantIdentification'] = (bool) $disco->getPersistantIdentification();
        $variables['scholarlyJournal'] = (bool) $disco->getScholarlyJournal();
        $variables['noCharges'] = (bool) $disco->getNoCharges();
        $variables['openAuthorship'] = (bool) $disco->getOpenAuthorship();
        $variables['ownershipScience'] = (bool) $disco->getOwnershipScience();
        $variables['openLicence'] = (bool) $disco->getOpenLicence();
        $variables['fullContentAvailable'] = (bool) $disco->getFullContentAvailable();
        $variables['functionalWebsite'] = (bool) $disco->getFunctionalWebsite();
        $variables['journalUrl'] = (bool) $disco->getJournalUrl();
        $variables['qualityEnHomepage'] = (bool) $disco->getQualityEnHomepage();
        $variables['aimsAndScopeDescribed'] = (bool) $disco->getAimsAndScopeDescribed();
        $variables['authorGuidelinesDescribed'] = (bool) $disco->getAuthorGuidelinesDescribed();
        $variables['bibliographicInformation'] = (bool) $disco->getBibliographicInformation();
        $variables['editorialBoardPage'] = (bool) $disco->getEditorialBoardPage();
        $variables['contactDetailsAvailable'] = (bool) $disco->getContactDetailsAvailable();
        $variables['peerReviewDescribed'] = (bool) $disco->getPeerReviewDescribed();
        $variables['publicationEthicsDescribed'] = (bool) $disco->getPublicationEthicsDescribed();
        $variables['scholarlyArticles'] = (bool) $disco->getScholarlyArticles();
        $variables['fullBio'] = (bool) $disco->getFullBio();
        $variables['linkToFulltext'] = (bool) $disco->getLinkToFulltext();
        $variables['lpDoi'] = (bool) $disco->getLpDoi();
        $variables['references'] = (bool) $disco->getReferences();
        $variables['uniqueUrlArticles'] = (bool) $disco->getUniqueUrlArticles();
        $variables['authorsAffiliations'] = (bool) $disco->getAuthorsAffiliations();
        $variables['titlesAbstractsInEnglish'] = (bool) $disco->getTitlesAbstractsInEnglish();
        $variables['markingReferences'] = (bool) $disco->getMarkingReferences();
//        $variables['noAPC'] = (bool) $disco->getNoAPC();
        $variables['apcDescribed'] = (bool) $disco->getApcDescribed();
        $variables['oaPolicyDescribed'] = (bool) $disco->getOaPolicyDescribed();
        $variables['copyrightTerms'] = (bool) $disco->getCopyrightTerms();
        $variables['periodicity'] = (bool) $disco->getPeriodicity();
        $variables['publishingHistory'] = (bool) $disco->getPublishingHistory();
        $variables['timeliness'] = (bool) $disco->getTimeliness();
        $variables['eIssn'] = (bool) $disco->getEIssn();
        $variables['journalTitle'] = (bool) $disco->getJournalTitle();
        $variables['machineReadableMetadataFormat'] = (bool) $disco->getMachineReadableMetadataFormat();
        $variables['oaiPMHEnabled'] = (bool) $disco->getOaiPMHEnabled();
        $variables['usingDOIs'] = (bool) $disco->getUsingDOIs();
        $variables['metadataFormatOpenAIRE'] = (bool) $disco->getMetadataFormatOpenAIRE();
        $variables['noRegistrationNeed'] = (bool) $disco->getNoRegistrationNeed();
        $variables['noEmbargoPeriod'] = (bool) $disco->getNoEmbargoPeriod();
        $variables['journalPublisherNameAvailable'] = (bool) $disco->getJournalPublisherNameAvailable();
        $variables['badgesAvailable'] = (bool) $disco->getBadgesAvailable();
        
        $variables['organisationType'] = $disco->getOrganisationType();
        return $variables;
    }

}
