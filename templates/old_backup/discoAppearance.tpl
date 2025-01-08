{**
* templates/discoAppearance.tpl
*
* Copyright (c) 2014-2020 Simon Fraser University
* Copyright (c) 2003-2020 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* TODO text.
*}


<h3>{translate key="plugins.generic.disco.appearance"}</h3>
<p>{translate key="plugins.generic.disco.appearance.description"}</p>
{capture assign=actionUrl}{url router=$smarty.const.ROUTE_COMPONENT component="plugins.generic.disco.controllers.form.DiscoFormHandler" op="updateAppearanceCriteria" contextId=$contextId escape=false}       {/capture}
<form class="pkp_form" id="discoAppearanceForm" method="post" action="{$actionUrl}">
    {csrf}
    {fbvFormArea id="appearanceFormAreaFullContentAvailable" class="border"}

            {if $fullContentAvailable}
                {assign var="checked" value=true}
            {else}
                {assign var="checked" value=false}
            {/if}
            {fbvElement type="checkbox" name="fullContentAvailable" id="fullContentAvailable" checked=$checked label="plugins.generic.disco.appearance.fullContentAvailable"}
            <div class="info-block">
                <a href="javascript:void(0);" class="toggle-btn" data-target="infoAppearanceFullContentAvailable">
                    <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
                    <span class="toggle-text">More information</span>
                </a>
                <div id="infoAppearanceFullContentAvailable" class="info-content" style="display: none;">
                    {translate key="plugins.generic.disco.appearance.fullContentAvailable.description"}
                    <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.wos.esci"}, {translate key="plugins.generic.disco.scopus"}</p>
                </div>
            </div>
      {/fbvFormArea}
      {fbvFormArea id="appearanceFormAreaFunctionalWebsite" class="border"}

            {if $functionalWebsite}
                {assign var="checked" value=true}
            {else}
                {assign var="checked" value=false}
            {/if}
            {fbvElement type="checkbox" name="functionalWebsite" id="functionalWebsite" checked=$checked label="plugins.generic.disco.appearance.functionalWebsite"}
            <div class="info-block">
                <a href="javascript:void(0);" class="toggle-btn" data-target="infoAppearanceFunctionalWebsite">
                    <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
                    <span class="toggle-text">More information</span>
                </a>
                <div id="infoAppearanceFunctionalWebsite" class="info-content" style="display: none;">
                    {translate key="plugins.generic.disco.appearance.functionalWebsite.description"}
                    <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.wos.esci"}</p>
                </div>
            </div>
      {/fbvFormArea}
      {fbvFormArea id="appearanceFormAreaJournalUrl" class="border"}

            {if $journalUrl}
                {assign var="checked" value=true}
            {else}
                {assign var="checked" value=false}
            {/if}
            {fbvElement type="checkbox" name="journalUrl" id="journalUrl" checked=$checked label="plugins.generic.disco.appearance.journalUrl"}
            <div class="info-block">
                <a href="javascript:void(0);" class="toggle-btn" data-target="infoAppearanceJournalUrl">
                    <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
                    <span class="toggle-text">More information</span>
                </a>
                <div id="infoAppearanceJournalUrl" class="info-content" style="display: none;">
                    {translate key="plugins.generic.disco.appearance.journalUrl.description"}
                    <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.wos.esci"}, {translate key="plugins.generic.disco.doaj"}, {translate key="plugins.generic.disco.pubmed"}</p>
                </div>
            </div>
      {/fbvFormArea}
      {fbvFormArea id="appearanceFormAreaEIssn" class="border"}

            {if $eIssn}
                {assign var="checked" value=true}
            {else}
                {assign var="checked" value=false}
            {/if}
            {fbvElement type="checkbox" name="eIssn" id="eIssn" checked=$checked label="plugins.generic.disco.appearance.ojsCheck.eIssn" disabled=true}
            <div class="info-block">
                <a href="javascript:void(0);" class="toggle-btn" data-target="infoAppearanceEIssn">
                    <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
                    <span class="toggle-text">More information</span>
                </a>
                <div id="infoAppearanceEIssn" class="info-content" style="display: none;">
                    {translate key="plugins.generic.disco.appearance.ojsCheck.eIssn.description"}
                    <p><a href='{$contextSettingsUrl}' target='_blank'>{translate key="plugins.generic.disco.settings"}</a> (<strong>{translate key="plugins.generic.disco.settings.eISSN"}</strong>)</p>
                    <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.wos.esci"}, {translate key="plugins.generic.disco.scopus"}, {translate key="plugins.generic.disco.doaj"}, {translate key="plugins.generic.disco.erihplus"}, {translate key="plugins.generic.disco.redalyc"}, {translate key="plugins.generic.disco.ddh"}</p>
                </div>
            </div>
      {/fbvFormArea}
      {fbvFormArea id="appearanceFormAreaFullContentAvailableChecked" class="border"}

            {if $fullContentAvailableChecked}
                {assign var="checked" value=true}
            {else}
                {assign var="checked" value=false}
            {/if}
            {fbvElement type="checkbox" name="fullContentAvailableChecked" id="fullContentAvailableChecked" checked=$checked label="plugins.generic.disco.appearance.ojsCheck.fullContentAvailable" disabled=true}
            <div class="info-block">
                <a href="javascript:void(0);" class="toggle-btn" data-target="infoAppearanceFullContentAvailableChecked">
                    <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
                    <span class="toggle-text">More information</span>
                </a>
                <div id="infoAppearanceFullContentAvailableChecked" class="info-content" style="display: none;">
                    {translate key="plugins.generic.disco.appearance.ojsCheck.fullContentAvailable.description"}
                    <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.doaj"}</p>
                </div>
            </div>
      {/fbvFormArea}
      {fbvFormArea id="appearanceFormAreaJournalTitle" class="border"}

            {if $journalTitle}
                {assign var="checked" value=true}
            {else}
                {assign var="checked" value=false}
            {/if}
            {fbvElement type="checkbox" name="journalTitle" id="journalTitle" checked=$checked label="plugins.generic.disco.appearance.ojsCheck.journalTitle" disabled=true}
            <div class="info-block">
                <a href="javascript:void(0);" class="toggle-btn" data-target="infoAppearanceJournalTitle">
                    <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
                    <span class="toggle-text">More information</span>
                </a>
                <div id="infoAppearanceJournalTitle" class="info-content" style="display: none;">
                    {translate key="plugins.generic.disco.appearance.ojsCheck.journalTitle.description"}
                    <p><a href='{$contextSettingsUrl}' target='_blank'>{translate key="plugins.generic.disco.settings"}</a> (<strong>{translate key="plugins.generic.disco.settings.journalTitle"}</strong>)</p>
                    <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.wos.esci"}, {translate key="plugins.generic.disco.redalyc"}</p>
                </div>
            </div>
      {/fbvFormArea}
      {fbvFormArea id="appearanceFormAreaQualityEnHomepage" class="border"}

            {if $qualityEnHomepage}
                {assign var="checked" value=true}
            {else}
                {assign var="checked" value=false}
            {/if}
            {fbvElement type="checkbox" name="qualityEnHomepage" id="qualityEnHomepage" checked=$checked label="plugins.generic.disco.appearance.qualityEnHomepage"}
            <div class="info-block">
                <a href="javascript:void(0);" class="toggle-btn" data-target="infoAppearanceQualityEnHomepage">
                    <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
                    <span class="toggle-text">More information</span>
                </a>
                <div id="infoAppearanceQualityEnHomepage" class="info-content" style="display: none;">
                    {translate key="plugins.generic.disco.appearance.qualityEnHomepage.description"}
                    <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.scopus"}</p>
                </div>
            </div>
      {/fbvFormArea}
    {fbvFormSection class="formButtons"}
            {assign var=buttonId value="submitFormButton"|concat:"-"|uniqid}
            {fbvElement type="submit" class="submitFormButton" id=$buttonId label="common.save"}
    {/fbvFormSection}
</form>
