{**
* templates/discoImpactRecommendation.tpl
*
* Copyright (c) 2014-2020 Simon Fraser University
* Copyright (c) 2003-2020 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* TODO text.
*}
{assign var="impactRecommendationsArray" value=$categorizedRequirements["impactRecommendations"]}

<h3>{translate key="plugins.generic.disco.impactRecommendations"}</h3>
<p>{translate key="plugins.generic.disco.impactRecommendations.description"}</p>
<form class="pkp_form" id="discoImpactRecommendationsForm">
    
    {foreach from=$impactRecommendationsArray key=requirement item=services}
        {include file="{$discoItem}" category="impactRecommendations" requirement=$requirement services=$services type="recommendation"}
    {/foreach}
    
    {*{fbvFormSection class="formButtons"}
    {assign var=buttonId value="submitFormButton"|concat:"-"|uniqid}
    {fbvElement type="submit" class="submitFormButton" id=$buttonId label="common.save"}
    {/fbvFormSection}*}
</form>
