<?php

/**
 * @file classes/disco.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @package plugins.generic.disco
 * @class Disco
 * Data object representing a disco object.
 */
namespace APP\plugins\generic\disco\classes;

class Disco extends \PKP\core\DataObject {
//
// Get/set methods
//

    /**
     * Get context ID
     * @return string
     */
    public function getContextId() {
        return $this->getData('contextId');
    }

    /**
     * Set context ID
     * @param $contextId int
     */
    public function setContextId($contextId) {
        return $this->setData('contextId', $contextId);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getScholarlyJournal() {
        return $this->getData('scholarlyJournal');
    }

    /**
     * Set name.
     * @param $scholarlyJournal boolean
     */
    public function setScholarlyJournal($scholarlyJournal) {
        return $this->setData('scholarlyJournal', $scholarlyJournal);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getOpenLicence() {
        return $this->getData('openLicence');
    }

    /**
     * Set name.
     * @param $openLicence boolean
     */
    public function setOpenLicence($openLicence) {
        return $this->setData('openLicence', $openLicence);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getNoCharges() {
        return $this->getData('noCharges');
    }

    /**
     * Set name.
     * @param $noCharges boolean
     */
    public function setNoCharges($noCharges) {
        return $this->setData('noCharges', $noCharges);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getOpenAuthorship() {
        return $this->getData('openAuthorship');
    }

    /**
     * Set name.
     * @param $openAuthorship boolean
     */
    public function setOpenAuthorship($openAuthorship) {
        return $this->setData('openAuthorship', $openAuthorship);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getOwnershipScience() {
        return $this->getData('ownershipScience');
    }

    /**
     * Set name.
     * @param $ownershipScience boolean
     */
    public function setOwnershipScience($ownershipScience) {
        return $this->setData('ownershipScience', $ownershipScience);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getFunctionalWebsite() {
        return $this->getData('public functionalWebsite');
    }

    /**
     * Set name.
     * @param $public functionalWebsite boolean
     */
    public function setFunctionalWebsite($functionalWebsite) {
        return $this->setData('functionalWebsite', $functionalWebsite);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getJournalUrl() {
        return $this->getData('journalUrl');
    }

    /**
     * Set name.
     * @param $journalUrl boolean
     */
    public function setJournalUrl($journalUrl) {
        return $this->setData('journalUrl', $journalUrl);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getQualityEnHomepage() {
        return $this->getData('qualityEnHomepage');
    }

    /**
     * Set name.
     * @param $qualityEnHomepage boolean
     */
    public function setQualityEnHomepage($qualityEnHomepage) {
        return $this->setData('qualityEnHomepage', $qualityEnHomepage);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getAimsAndScopeDescribed() {
        return $this->getData('aimsAndScopeDescribed');
    }

    /**
     * Set name.
     * @param $aimsAndScopeDescribed boolean
     */
    public function setAimsAndScopeDescribed($aimsAndScopeDescribed) {
        return $this->setData('aimsAndScopeDescribed', $aimsAndScopeDescribed);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getAuthorGuidelinesDescribed() {
        return $this->getData('authorGuidelinesDescribed');
    }

    /**
     * Set name.
     * @param $authorGuidelinesDescribed boolean
     */
    public function setAuthorGuidelinesDescribed($authorGuidelinesDescribed) {
        return $this->setData('authorGuidelinesDescribed', $authorGuidelinesDescribed);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getBibliographicInformation() {
        return $this->getData('bibliographicInformation');
    }

    /**
     * Set name.
     * @param $bibliographicInformation boolean
     */
    public function setBibliographicInformation($bibliographicInformation) {
        return $this->setData('bibliographicInformation', $bibliographicInformation);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getEditorialBoardPage() {
        return $this->getData('editorialBoardPage');
    }

    /**
     * Set name.
     * @param $editorialBoardPage boolean
     */
    public function setEditorialBoardPage($editorialBoardPage) {
        return $this->setData('editorialBoardPage', $editorialBoardPage);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getContactDetailsAvailable() {
        return $this->getData('contactDetailsAvailable');
    }

    /**
     * Set name.
     * @param $contactDetailsAvailable boolean
     */
    public function setContactDetailsAvailable($contactDetailsAvailable) {
        return $this->setData('contactDetailsAvailable', $contactDetailsAvailable);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getPeerReviewDescribed() {
        return $this->getData('peerReviewDescribed');
    }

    /**
     * Set name.
     * @param $peerReviewDescribed boolean
     */
    public function setPeerReviewDescribed($peerReviewDescribed) {
        return $this->setData('peerReviewDescribed', $peerReviewDescribed);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getPublicationEthicsDescribed() {
        return $this->getData('publicationEthicsDescribed');
    }

    /**
     * Set name.
     * @param $publicationEthicsDescribed boolean
     */
    public function setPublicationEthicsDescribed($publicationEthicsDescribed) {
        return $this->setData('publicationEthicsDescribed', $publicationEthicsDescribed);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getScholarlyArticles() {
        return $this->getData('scholarlyArticles');
    }

    /**
     * Set name.
     * @param $scholarlyArticles boolean
     */
    public function setScholarlyArticles($scholarlyArticles) {
        return $this->setData('scholarlyArticles', $scholarlyArticles);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getFullBio() {
        return $this->getData('fullBio');
    }

    /**
     * Set name.
     * @param $fullBio boolean
     */
    public function setFullBio($fullBio) {
        return $this->setData('fullBio', $fullBio);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getLinkToFulltext() {
        return $this->getData('linkToFulltext');
    }

    /**
     * Set name.
     * @param $linkToFulltext boolean
     */
    public function setLinkToFulltext($linkToFulltext) {
        return $this->setData('linkToFulltext', $linkToFulltext);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getLpDoi() {
        return $this->getData('lpDoi');
    }

    /**
     * Set name.
     * @param $lpDoi boolean
     */
    public function setLpDoi($lpDoi) {
        return $this->setData('lpDoi', $lpDoi);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getReferences() {
        return $this->getData('references');
    }

    /**
     * Set name.
     * @param $references boolean
     */
    public function setReferences($references) {
        return $this->setData('references', $references);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getUniqueUrlArticles() {
        return $this->getData('uniqueUrlArticles');
    }

    /**
     * Set name.
     * @param $uniqueUrlArticles boolean
     */
    public function setUniqueUrlArticles($uniqueUrlArticles) {
        return $this->setData('uniqueUrlArticles', $uniqueUrlArticles);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getAuthorsAffiliations() {
        return $this->getData('authorsAffiliations');
    }

    /**
     * Set name.
     * @param $authorsAffiliations boolean
     */
    public function setAuthorsAffiliations($authorsAffiliations) {
        return $this->setData('authorsAffiliations', $authorsAffiliations);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getTitlesAbstractsInEnglish() {
        return $this->getData('titlesAbstractsInEnglish');
    }

    /**
     * Set name.
     * @param $titlesAbstractsInEnglish boolean
     */
    public function setTitlesAbstractsInEnglish($titlesAbstractsInEnglish) {
        return $this->setData('titlesAbstractsInEnglish', $titlesAbstractsInEnglish);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getNoAPC() {
        return $this->getData('noAPC');
    }

    /**
     * Set name.
     * @param $noAPC boolean
     */
    public function setNoAPC($noAPC) {
        return $this->setData('noAPC', $noAPC);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getApcDescribed() {
        return $this->getData('apcDescribed');
    }

    /**
     * Set name.
     * @param $apcDescribed boolean
     */
    public function setApcDescribed($apcDescribed) {
        return $this->setData('apcDescribed', $apcDescribed);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getOaPolicyDescribed() {
        return $this->getData('oaPolicyDescribed');
    }

    /**
     * Set name.
     * @param $oaPolicyDescribed boolean
     */
    public function setOaPolicyDescribed($oaPolicyDescribed) {
        return $this->setData('oaPolicyDescribed', $oaPolicyDescribed);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getCopyrightTerms() {
        return $this->getData('copyrightTerms');
    }

    /**
     * Set name.
     * @param $copyrightTerms boolean
     */
    public function setCopyrightTerms($copyrightTerms) {
        return $this->setData('copyrightTerms', $copyrightTerms);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getPeriodicity() {
        return $this->getData('periodicity');
    }

    /**
     * Set name.
     * @param $periodicity boolean
     */
    public function setPeriodicity($periodicity) {
        return $this->setData('periodicity', $periodicity);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getPublishingHistory() {
        return $this->getData('publishingHistory');
    }

    /**
     * Set name.
     * @param $publishingHistory boolean
     */
    public function setPublishingHistory($publishingHistory) {
        return $this->setData('publishingHistory', $publishingHistory);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getTimeliness() {
        return $this->getData('timeliness');
    }

    /**
     * Set name.
     * @param $timeliness boolean
     */
    public function setTimeliness($timeliness) {
        return $this->setData('timeliness', $timeliness);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getFullContentAvailable() {
        return $this->getData('fullContentAvailable');
    }

    /**
     * Set name.
     * @param $fullContentAvailable boolean
     */
    public function setFullContentAvailable($fullContentAvailable) {
        return $this->setData('fullContentAvailable', $fullContentAvailable);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getEIssn() {
        return $this->getData('eIssn');
    }

    /**
     * Set name.
     * @param $eIssn boolean
     */
    public function setEIssn($eIssn) {
        return $this->setData('eIssn', $eIssn);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getJournalTitle() {
        return $this->getData('journalTitle');
    }

    /**
     * Set name.
     * @param $journalTitle boolean
     */
    public function setJournalTitle($journalTitle) {
        return $this->setData('journalTitle', $journalTitle);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getMachineReadableMetadataFormat() {
        return $this->getData('machineReadableMetadataFormat');
    }

    /**
     * Set name.
     * @param $machineReadableMetadataFormat boolean
     */
    public function setMachineReadableMetadataFormat($machineReadableMetadataFormat) {
        return $this->setData('machineReadableMetadataFormat', $machineReadableMetadataFormat);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getOaiPMHEnabled() {
        return $this->getData('oaiPMHEnabled');
    }

    /**
     * Set name.
     * @param $oaiPMHEnabled boolean
     */
    public function setOaiPMHEnabled($oaiPMHEnabled) {
        return $this->setData('oaiPMHEnabled', $oaiPMHEnabled);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getUsingDOIs() {
        return $this->getData('usingDOIs');
    }

    /**
     * Set name.
     * @param $usingDOIs boolean
     */
    public function setUsingDOIs($usingDOIs) {
        return $this->setData('usingDOIs', $usingDOIs);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getMarkingReferences() {
        return $this->getData('markingReferences');
    }

    /**
     * Set name.
     * @param $markingReferences boolean
     */
    public function setMarkingReferences($markingReferences) {
        return $this->setData('markingReferences', $markingReferences);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getMetadataFormatOpenAIRE() {
        return $this->getData('metadataFormatOpenAIRE');
    }

    /**
     * Set name.
     * @param $metadataFormatOpenAIRE boolean
     */
    public function setMetadataFormatOpenAIRE($metadataFormatOpenAIRE) {
        return $this->setData('metadataFormatOpenAIRE', $metadataFormatOpenAIRE);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getNoRegistrationNeed() {
        return $this->getData('noRegistrationNeed');
    }

    /**
     * Set name.
     * @param $noRegistrationNeed boolean
     */
    public function setNoRegistrationNeed($noRegistrationNeed) {
        return $this->setData('noRegistrationNeed', $noRegistrationNeed);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getNoEmbargoPeriod() {
        return $this->getData('noEmbargoPeriod');
    }

    /**
     * Set name.
     * @param $noEmbargoPeriod boolean
     */
    public function setNoEmbargoPeriod($noEmbargoPeriod) {
        return $this->setData('noEmbargoPeriod', $noEmbargoPeriod);
    }

    /**
     * Get name.
     * @return boolean
     */
    public function getJournalPublisherNameAvailable() {
        return $this->getData('journalPublisherNameAvailable');
    }

    /**
     * Set name.
     * @param $journalPublisherNameAvailable boolean
     */
    public function setJournalPublisherNameAvailable($journalPublisherNameAvailable) {
        return $this->setData('journalPublisherNameAvailable', $journalPublisherNameAvailable);
    }
    
    /**
     * Get badges availability.
     * @return boolean
     */
    public function getBadgesAvailable() {
        return $this->getData('badgesAvailable');
    }

    /**
     * Set badges availability.
     * @param $badgesAvailable boolean
     */
    public function setBadgesAvailable($badgesAvailable) {
        return $this->setData('badgesAvailable', $badgesAvailable);
    }    
    
    /**
     * Get organisation typ.
     * @return boolean
     */
    public function getOrganisationType() {
        return $this->getData('organisationType');
    }

    /**
     * Set organisation typ.
     * @param $organisationType boolean
     */
    public function setOrganisationType($organisationType) {
        return $this->setData('organisationType', $organisationType);
    }

}
