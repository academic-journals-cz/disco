{**
* templates/discoPolicy.tpl
*
* Copyright (c) 2014-2020 Simon Fraser University
* Copyright (c) 2003-2020 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* TODO text.
*}
<h3>{translate key="plugins.generic.disco.journalPolicy"}</h3>
<p>{translate key="plugins.generic.disco.journalPolicy.description"}</p>

<form class="pkp_form" id="discoJournalPolicyForm">

    {fbvFormArea id="journalPolicyFormAreaNoAPC" class="border"}

    {if $noAPC}
        {assign var="checked" value=true}
    {else}
        {assign var="checked" value=false}
    {/if}
    {fbvElement type="checkbox" name="noAPC" id="noAPC" checked=$checked label="plugins.generic.disco.journalPolicy.noAPC"}
    <div class="info-block">
        <a href="javascript:void(0);" class="toggle-btn" data-target="infoJournalPolicyNoAPC">
            <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
            <span class="toggle-text">More information</span>
        </a>
        <div id="infoJournalPolicyNoAPC" class="info-content" style="display: none;">
            {translate key="plugins.generic.disco.journalPolicy.noAPC.description"}
            <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.redalyc"}, {translate key="plugins.generic.disco.ddh"}</p>
        </div>
    </div>
    {/fbvFormArea}
    
    {fbvFormArea id="journalPolicyFormAreaApcDescribed" class="border"}

    {if $apcDescribed}
        {assign var="checked" value=true}
    {else}
        {assign var="checked" value=false}
    {/if}
    {fbvElement type="checkbox" name="apcDescribed" id="apcDescribed" checked=$checked label="plugins.generic.disco.journalPolicy.apcDescribed"}
    <div class="info-block">
        <a href="javascript:void(0);" class="toggle-btn" data-target="infoJournalPolicyApcDescribed">
            <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
            <span class="toggle-text">More information</span>
        </a>
        <div id="infoJournalPolicyApcDescribed" class="info-content" style="display: none;">
            {translate key="plugins.generic.disco.journalPolicy.apcDescribed.description"}
            <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.redalyc"}, {translate key="plugins.generic.disco.ddh"}, {translate key="plugins.generic.disco.doaj"}, {translate key="plugins.generic.disco.erihplus"}</p>
        </div>
    </div>
    {/fbvFormArea}
    
    {fbvFormArea id="journalPolicyFormAreaNoRegistrationNeed" class="border"}

    {if $noRegistrationNeed}
        {assign var="checked" value=true}
    {else}
        {assign var="checked" value=false}
    {/if}
    {fbvElement type="checkbox" name="noRegistrationNeed" id="noRegistrationNeed" checked=$checked label="plugins.generic.disco.journalPolicy.noRegistrationNeed"}
    <div class="info-block">
        <a href="javascript:void(0);" class="toggle-btn" data-target="infoJournalPolicyNoRegistrationNeed">
            <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
            <span class="toggle-text">More information</span>
        </a>
        <div id="infoJournalPolicyNoRegistrationNeed" class="info-content" style="display: none;">
            {translate key="plugins.generic.disco.journalPolicy.noRegistrationNeed.description"}
            <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.doaj"}</p>
        </div>
    </div>
    {/fbvFormArea}
    
    {fbvFormArea id="journalPolicyFormAreaOaPolicyDescribed" class="border"}

    {if $oaPolicyDescribed}
        {assign var="checked" value=true}
    {else}
        {assign var="checked" value=false}
    {/if}
    {fbvElement type="checkbox" name="oaPolicyDescribed" id="oaPolicyDescribed" checked=$checked label="plugins.generic.disco.journalPolicy.oaPolicyDescribed"}
    <div class="info-block">
        <a href="javascript:void(0);" class="toggle-btn" data-target="infoJournalPolicyOaPolicyDescribed">
            <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
            <span class="toggle-text">More information</span>
        </a>
        <div id="infoJournalPolicyOaPolicyDescribed" class="info-content" style="display: none;">
            {translate key="plugins.generic.disco.journalPolicy.oaPolicyDescribed.description"}
            <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.redalyc"}, {translate key="plugins.generic.disco.doaj"}, {translate key="plugins.generic.disco.erihplus"}</p>
        </div>
    </div>
    {/fbvFormArea}
    
    {fbvFormArea id="journalPolicyFormAreaNoEmbargoPeriod" class="border"}

    {if $noEmbargoPeriod}
        {assign var="checked" value=true}
    {else}
        {assign var="checked" value=false}
    {/if}
    {fbvElement type="checkbox" name="noEmbargoPeriod" id="noEmbargoPeriod" checked=$checked label="plugins.generic.disco.journalPolicy.noEmbargoPeriod"}
    <div class="info-block">
        <a href="javascript:void(0);" class="toggle-btn" data-target="infoJournalPolicyNoEmbargoPeriod">
            <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
            <span class="toggle-text">More information</span>
        </a>
        <div id="infoJournalPolicyNoEmbargoPeriod" class="info-content" style="display: none;">
            {translate key="plugins.generic.disco.journalPolicy.noEmbargoPeriod.description"}
            <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.doaj"}</p>
        </div>
    </div>
    {/fbvFormArea}
    
    {fbvFormArea id="journalPolicyFormAreaCopyrightTerms" class="border"}

    {if $copyrightTerms}
        {assign var="checked" value=true}
    {else}
        {assign var="checked" value=false}
    {/if}
    {fbvElement type="checkbox" name="copyrightTerms" id="copyrightTerms" checked=$checked label="plugins.generic.disco.journalPolicy.copyrightTerms"}
    <div class="info-block">
        <a href="javascript:void(0);" class="toggle-btn" data-target="infoJournalPolicyCopyrightTerms">
            <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
            <span class="toggle-text">More information</span>
        </a>
        <div id="infoJournalPolicyCopyrightTerms" class="info-content" style="display: none;">
            {translate key="plugins.generic.disco.journalPolicy.copyrightTerms.description"}
            <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.doaj"}</p>
        </div>
    </div>
    {/fbvFormArea}
    {fbvFormSection class="formButtons"}
    {assign var=buttonId value="submitFormButton"|concat:"-"|uniqid}
    {fbvElement type="submit" class="submitFormButton" id=$buttonId label="common.save"}
    {/fbvFormSection}
</form>
