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
    function getContextId() {
        return $this->getData('contextId');
    }

    /**
     * Set context ID
     * @param $contextId int
     */
    function setContextId($contextId) {
        return $this->setData('contextId', $contextId);
    }

    /**
     * Get category
     * @return string
     */
//    function getCategory() {
//        return $this->getData('category');
//    }

    /**
     * Set category
     * @param $category string
     */
//    function setCategory($category) {
//        return $this->setData('category', $category);
//    }

    /**
     * Get name.
     * @return boolean
     */
    function getPersistantIdentification() {
        return $this->getData('persistantIdentification');
    }

    /**
     * Set name.
     * @param $persistantIdentification boolean
     */
    function setPersistantIdentification($persistantIdentification) {
        return $this->setData('persistantIdentification', $persistantIdentification);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getScholarlyJournal() {
        return $this->getData('scholarlyJournal');
    }

    /**
     * Set name.
     * @param $scholarlyJournal boolean
     */
    function setScholarlyJournal($scholarlyJournal) {
        return $this->setData('scholarlyJournal', $scholarlyJournal);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getOpenLicence() {
        return $this->getData('openLicence');
    }

    /**
     * Set name.
     * @param $scholarlyJournal boolean
     */
    function setOpenLicence($openLicence) {
        return $this->setData('openLicence', $openLicence);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getNoCharges() {
        return $this->getData('noCharges');
    }

    /**
     * Set name.
     * @param $noCharges boolean
     */
    function setNoCharges($noCharges) {
        return $this->setData('noCharges', $noCharges);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getOpenAuthorship() {
        return $this->getData('openAuthorship');
    }

    /**
     * Set name.
     * @param $openAuthorship boolean
     */
    function setOpenAuthorship($openAuthorship) {
        return $this->setData('openAuthorship', $openAuthorship);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getOwnershipScience() {
        return $this->getData('ownershipScience');
    }

    /**
     * Set name.
     * @param $ownershipScience boolean
     */
    function setOwnershipScience($ownershipScience) {
        return $this->setData('ownershipScience', $ownershipScience);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getFunctionalWebsite() {
        return $this->getData('functionalWebsite');
    }

    /**
     * Set name.
     * @param $functionalWebsite boolean
     */
    function setFunctionalWebsite($functionalWebsite) {
        return $this->setData('functionalWebsite', $functionalWebsite);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getJournalUrl() {
        return $this->getData('journalUrl');
    }

    /**
     * Set name.
     * @param $journalUrl boolean
     */
    function setJournalUrl($journalUrl) {
        return $this->setData('journalUrl', $journalUrl);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getQualityEnHomepage() {
        return $this->getData('qualityEnHomepage');
    }

    /**
     * Set name.
     * @param $qualityEnHomepage boolean
     */
    function setQualityEnHomepage($qualityEnHomepage) {
        return $this->setData('qualityEnHomepage', $qualityEnHomepage);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getAimsAndScopeDescribed() {
        return $this->getData('aimsAndScopeDescribed');
    }

    /**
     * Set name.
     * @param $aimsAndScopeDescribed boolean
     */
    function setAimsAndScopeDescribed($aimsAndScopeDescribed) {
        return $this->setData('aimsAndScopeDescribed', $aimsAndScopeDescribed);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getAuthorGuidelinesDescribed() {
        return $this->getData('authorGuidelinesDescribed');
    }

    /**
     * Set name.
     * @param $authorGuidelinesDescribed boolean
     */
    function setAuthorGuidelinesDescribed($authorGuidelinesDescribed) {
        return $this->setData('authorGuidelinesDescribed', $authorGuidelinesDescribed);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getBibliographicInformation() {
        return $this->getData('bibliographicInformation');
    }

    /**
     * Set name.
     * @param $bibliographicInformation boolean
     */
    function setBibliographicInformation($bibliographicInformation) {
        return $this->setData('bibliographicInformation', $bibliographicInformation);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getEditorialBoardPage() {
        return $this->getData('editorialBoardPage');
    }

    /**
     * Set name.
     * @param $editorialBoardPage boolean
     */
    function setEditorialBoardPage($editorialBoardPage) {
        return $this->setData('editorialBoardPage', $editorialBoardPage);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getContactDetailsAvailable() {
        return $this->getData('contactDetailsAvailable');
    }

    /**
     * Set name.
     * @param $contactDetailsAvailable boolean
     */
    function setContactDetailsAvailable($contactDetailsAvailable) {
        return $this->setData('contactDetailsAvailable', $contactDetailsAvailable);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getPeerReviewDescribed() {
        return $this->getData('peerReviewDescribed');
    }

    /**
     * Set name.
     * @param $peerReviewDescribed boolean
     */
    function setPeerReviewDescribed($peerReviewDescribed) {
        return $this->setData('peerReviewDescribed', $peerReviewDescribed);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getPublicationEthicsDescribed() {
        return $this->getData('publicationEthicsDescribed');
    }

    /**
     * Set name.
     * @param $publicationEthicsDescribed boolean
     */
    function setPublicationEthicsDescribed($publicationEthicsDescribed) {
        return $this->setData('publicationEthicsDescribed', $publicationEthicsDescribed);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getScholarlyArticles() {
        return $this->getData('scholarlyArticles');
    }

    /**
     * Set name.
     * @param $scholarlyArticles boolean
     */
    function setScholarlyArticles($scholarlyArticles) {
        return $this->setData('scholarlyArticles', $scholarlyArticles);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getFullBio() {
        return $this->getData('fullBio');
    }

    /**
     * Set name.
     * @param $fullBio boolean
     */
    function setFullBio($fullBio) {
        return $this->setData('fullBio', $fullBio);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getLinkToFulltext() {
        return $this->getData('linkToFulltext');
    }

    /**
     * Set name.
     * @param $linkToFulltext boolean
     */
    function setLinkToFulltext($linkToFulltext) {
        return $this->setData('linkToFulltext', $linkToFulltext);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getLpDoi() {
        return $this->getData('lpDoi');
    }

    /**
     * Set name.
     * @param $lpDoi boolean
     */
    function setLpDoi($lpDoi) {
        return $this->setData('lpDoi', $lpDoi);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getReferences() {
        return $this->getData('references');
    }

    /**
     * Set name.
     * @param $references boolean
     */
    function setReferences($references) {
        return $this->setData('references', $references);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getUniqueUrlArticles() {
        return $this->getData('uniqueUrlArticles');
    }

    /**
     * Set name.
     * @param $uniqueUrlArticles boolean
     */
    function setUniqueUrlArticles($uniqueUrlArticles) {
        return $this->setData('uniqueUrlArticles', $uniqueUrlArticles);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getAuthorsAffiliations() {
        return $this->getData('authorsAffiliations');
    }

    /**
     * Set name.
     * @param $authorsAffiliations boolean
     */
    function setAuthorsAffiliations($authorsAffiliations) {
        return $this->setData('authorsAffiliations', $authorsAffiliations);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getTitlesAbstractsInEnglish() {
        return $this->getData('titlesAbstractsInEnglish');
    }

    /**
     * Set name.
     * @param $titlesAbstractsInEnglish boolean
     */
    function setTitlesAbstractsInEnglish($titlesAbstractsInEnglish) {
        return $this->setData('titlesAbstractsInEnglish', $titlesAbstractsInEnglish);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getNoAPC() {
        return $this->getData('noAPC');
    }

    /**
     * Set name.
     * @param $noAPC boolean
     */
    function setNoAPC($noAPC) {
        return $this->setData('noAPC', $noAPC);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getApcDescribed() {
        return $this->getData('apcDescribed');
    }

    /**
     * Set name.
     * @param $apcDescribed boolean
     */
    function setApcDescribed($apcDescribed) {
        return $this->setData('apcDescribed', $apcDescribed);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getOaPolicyDescribed() {
        return $this->getData('oaPolicyDescribed');
    }

    /**
     * Set name.
     * @param $oaPolicyDescribed boolean
     */
    function setOaPolicyDescribed($oaPolicyDescribed) {
        return $this->setData('oaPolicyDescribed', $oaPolicyDescribed);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getCopyrightTerms() {
        return $this->getData('copyrightTerms');
    }

    /**
     * Set name.
     * @param $copyrightTerms boolean
     */
    function setCopyrightTerms($copyrightTerms) {
        return $this->setData('copyrightTerms', $copyrightTerms);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getPeriodicity() {
        return $this->getData('periodicity');
    }

    /**
     * Set name.
     * @param $periodicity boolean
     */
    function setPeriodicity($periodicity) {
        return $this->setData('periodicity', $periodicity);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getPublishingHistory() {
        return $this->getData('publishingHistory');
    }

    /**
     * Set name.
     * @param $publishingHistory boolean
     */
    function setPublishingHistory($publishingHistory) {
        return $this->setData('publishingHistory', $publishingHistory);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getTimeliness() {
        return $this->getData('timeliness');
    }

    /**
     * Set name.
     * @param $timeliness boolean
     */
    function setTimeliness($timeliness) {
        return $this->setData('timeliness', $timeliness);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getFullContentAvailable() {
        return $this->getData('fullContentAvailable');
    }

    /**
     * Set name.
     * @param $fullContentAvailable boolean
     */
    function setFullContentAvailable($fullContentAvailable) {
        return $this->setData('fullContentAvailable', $fullContentAvailable);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getEIssn() {
        return $this->getData('eIssn');
    }

    /**
     * Set name.
     * @param $eIssn boolean
     */
    function setEIssn($eIssn) {
        return $this->setData('eIssn', $eIssn);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getJournalTitle() {
        return $this->getData('journalTitle');
    }

    /**
     * Set name.
     * @param $journalTitle boolean
     */
    function setJournalTitle($journalTitle) {
        return $this->setData('journalTitle', $journalTitle);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getMachineReadableMetadataFormat() {
        return $this->getData('machineReadableMetadataFormat');
    }

    /**
     * Set name.
     * @param $machineReadableMetadataFormat boolean
     */
    function setMachineReadableMetadataFormat($machineReadableMetadataFormat) {
        return $this->setData('machineReadableMetadataFormat', $machineReadableMetadataFormat);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getOaiPMHEnabled() {
        return $this->getData('oaiPMHEnabled');
    }

    /**
     * Set name.
     * @param $oaiPMHEnabled boolean
     */
    function setOaiPMHEnabled($oaiPMHEnabled) {
        return $this->setData('oaiPMHEnabled', $oaiPMHEnabled);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getUsingDOIs() {
        return $this->getData('usingDOIs');
    }

    /**
     * Set name.
     * @param $usingDOIs boolean
     */
    function setUsingDOIs($usingDOIs) {
        return $this->setData('usingDOIs', $usingDOIs);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getMarkingReferences() {
        return $this->getData('markingReferences');
    }

    /**
     * Set name.
     * @param $markingReferences boolean
     */
    function setMarkingReferences($markingReferences) {
        return $this->setData('markingReferences', $markingReferences);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getMetadataFormatOpenAIRE() {
        return $this->getData('metadataFormatOpenAIRE');
    }

    /**
     * Set name.
     * @param $metadataFormatOpenAIRE boolean
     */
    function setMetadataFormatOpenAIRE($metadataFormatOpenAIRE) {
        return $this->setData('metadataFormatOpenAIRE', $metadataFormatOpenAIRE);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getNoRegistrationNeed() {
        return $this->getData('noRegistrationNeed');
    }

    /**
     * Set name.
     * @param $noRegistrationNeed boolean
     */
    function setNoRegistrationNeed($noRegistrationNeed) {
        return $this->setData('noRegistrationNeed', $noRegistrationNeed);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getNoEmbargoPeriod() {
        return $this->getData('noEmbargoPeriod');
    }

    /**
     * Set name.
     * @param $noEmbargoPeriod boolean
     */
    function setNoEmbargoPeriod($noEmbargoPeriod) {
        return $this->setData('noEmbargoPeriod', $noEmbargoPeriod);
    }

    /**
     * Get name.
     * @return boolean
     */
    function getJournalPublisherNameAvailable() {
        return $this->getData('journalPublisherNameAvailable');
    }

    /**
     * Set name.
     * @param $journalPublisherNameAvailable boolean
     */
    function setJournalPublisherNameAvailable($journalPublisherNameAvailable) {
        return $this->setData('journalPublisherNameAvailable', $journalPublisherNameAvailable);
    }
    
    /**
     * Get badges availability.
     * @return boolean
     */
    function getBadgesAvailable() {
        return $this->getData('badgesAvailable');
    }

    /**
     * Set badges availability.
     * @param $badgesAvailable boolean
     */
    function setBadgesAvailable($badgesAvailable) {
        return $this->setData('badgesAvailable', $badgesAvailable);
    }    
    
    /**
     * Get organisation typ.
     * @return boolean
     */
    function getOrganisationType() {
        return $this->getData('organisationType');
    }

    /**
     * Set organisation typ.
     * @param $organisationType boolean
     */
    function setOrganisationType($organisationType) {
        return $this->setData('organisationType', $organisationType);
    }

}
