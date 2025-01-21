{**
* templates/discoRegularity.tpl
*
* Copyright (c) 2014-2020 Simon Fraser University
* Copyright (c) 2003-2020 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* TODO text.
*}

{assign var="badgesArray" value=$categorizedRequirements["badges"]}

<h3>{translate key="plugins.generic.disco.badges"}</h3>
<p>{translate key="plugins.generic.disco.badges.description"}</p>
{foreach $badgesAvailability key="badge" item="availability"}
        <span class="badge" {if !$availability}style="opacity: 0.2;"{/if}>
        {include file={$badges.$badge}}
        </span>
    {/foreach} 
<form class="pkp_form" method="put" action="{$actionUrl}">
    {csrf}
    {if $discoId}
        <input type="hidden" name="discoId" value="{$discoId|escape}" />
    {/if}
    <input type="hidden" name="category" value="badges" />
    {foreach from=$badgesArray key=badges item=services}
        {include file="{$discoItem}" category="badges" requirement=$badges}
    {/foreach}
    
      
        
    {fbvFormSection class="formButtons"}

    {assign var=buttonId value="submitFormButton"|concat:"-"|uniqid}
    {fbvElement type="submit" class="submitFormButton" id=$buttonId label="common.save"}

     
    {/fbvFormSection}
    
</form>

