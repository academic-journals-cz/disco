{**
* templates/discoMetadata.tpl
*
* Copyright (c) 2014-2020 Simon Fraser University
* Copyright (c) 2003-2020 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* TODO text.
*}
{*<form class="pkp_form" id="discoAppearanceForm">*}
<h3>{translate key="plugins.generic.disco.metadataRequirements"}</h3>
<p>{translate key="plugins.generic.disco.metadataRequirements.description"}</p>

<h3>{translate key="plugins.generic.disco.metadataRequirements.titlesAbstractsInEnglish"}</h3>
<div class="info-block">
    <a href="javascript:void(0);" class="toggle-btn" data-target="infoMetadataRequirementsTitlesAbstractsInEnglish">
        <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
        <span class="toggle-text">More information</span>
    </a>
    <div id="infoMetadataRequirementsTitlesAbstractsInEnglish" class="info-content" style="display: none;">
        {translate key="plugins.generic.disco.metadataRequirements.titlesAbstractsInEnglish.description"}
        <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.wos.esci"}, {translate key="plugins.generic.disco.scopus"}, {translate key="plugins.generic.disco.erihplus"}</p>
    </div>
</div>
    
    <h3>{translate key="plugins.generic.disco.metadataRequirements.authorsAffiliations"}</h3>
<div class="info-block">
    <a href="javascript:void(0);" class="toggle-btn" data-target="infoMetadataRequirementsAuthorsAffiliations">
        <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
        <span class="toggle-text">More information</span>
    </a>
    <div id="infoMetadataRequirementsAuthorsAffiliations" class="info-content" style="display: none;">
        {translate key="plugins.generic.disco.metadataRequirements.authorsAffiliations.description"}
        <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.wos.esci"}, {translate key="plugins.generic.disco.pubmed"}, {translate key="plugins.generic.disco.erihplus"}</p>
    </div>
</div>
    
    <h3>{translate key="plugins.generic.disco.metadataRequirements.machineReadableMetadataFormat"}</h3>
<div class="info-block">
    <a href="javascript:void(0);" class="toggle-btn" data-target="infoMetadataRequirementsMachineReadableMetadataFormat">
        <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
        <span class="toggle-text">More information</span>
    </a>
    <div id="infoMetadataRequirementsMachineReadableMetadataFormat" class="info-content" style="display: none;">
        {translate key="plugins.generic.disco.metadataRequirements.machineReadableMetadataFormat.description"}
        <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.gs"}</p>
    </div>
</div>
    
    
   <h3>{translate key="plugins.generic.disco.metadataRequirements.ojsCheck.usingDOIs"}</h3>
<div class="info-block">
    <a href="javascript:void(0);" class="toggle-btn" data-target="infoMetadataRequirementsUsingDOIs">
        <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
        <span class="toggle-text">More information</span>
    </a>
    <div id="infoMetadataRequirementsUsingDOIs" class="info-content" style="display: none;">
        {translate key="plugins.generic.disco.metadataRequirements.ojsCheck.usingDOIs.description"}
        <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.erihplus"}</p>
    </div>
</div>
    
    <h3>{translate key="plugins.generic.disco.metadataRequirements.markingReferences"}</h3>
<div class="info-block">
    <a href="javascript:void(0);" class="toggle-btn" data-target="infoMetadataRequirementsMarkingReferences">
        <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
        <span class="toggle-text">More information</span>
    </a>
    <div id="infoMetadataRequirementsMarkingReferences" class="info-content" style="display: none;">
        {translate key="plugins.generic.disco.metadataRequirements.markingReferences.description"}
        <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.gs"}</p>
    </div>
</div>
    <h3>{translate key="plugins.generic.disco.metadataRequirements.ojsCheck.oaiPMHEnabled"}</h3>
<div class="info-block">
    <a href="javascript:void(0);" class="toggle-btn" data-target="infoMetadataRequirementsOaiPMHEnabled">
        <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
        <span class="toggle-text">More information</span>
    </a>
    <div id="infoMetadataRequirementsOaiPMHEnabled" class="info-content" style="display: none;">
        {translate key="plugins.generic.disco.metadataRequirements.ojsCheck.oaiPMHEnabled.description"}
        <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.gotrible"}, {translate key="plugins.generic.disco.openaire"}</p>
    </div>
</div>

{*{fbvFormSection class="formButtons"}
{assign var=buttonId value="submitFormButton"|concat:"-"|uniqid}
{fbvElement type="submit" class="submitFormButton" id=$buttonId label="common.save"}
{/fbvFormSection}*}
{*</form>*}
