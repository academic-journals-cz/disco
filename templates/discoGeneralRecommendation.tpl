{**
* templates/discoGeneralRecommendation.tpl
*
* Copyright (c) 2014-2020 Simon Fraser University
* Copyright (c) 2003-2020 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* TODO text.
*}
{*{capture assign=actionUrl}{url router=$smarty.const.ROUTE_COMPONENT component="plugins.generic.disco.controllers.form.DiscoFormHandler" op="updateGeneralRecommendationsCriteria" contextId=$contextId escape=false}       {/capture}*}
{assign var="generalRecommendationsArray" value=$categorizedRequirements["generalRecommendations"]}

<h3>{translate key="plugins.generic.disco.generalRecommendations"}</h3>
<p>{translate key="plugins.generic.disco.generalRecommendations.description"}</p>
 <form class="pkp_form">   
{foreach from=$generalRecommendationsArray key=requirement item=services}
    {include file="{$discoItem}" category="generalRecommendations" requirement=$requirement services=$services type="recommendation"}
{/foreach}
 </form>
