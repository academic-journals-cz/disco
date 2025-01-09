{**
* templates/discoMetadataQuality.tpl
*
* Copyright (c) 2014-2020 Simon Fraser University
* Copyright (c) 2003-2020 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* TODO text.
*}


<h3>{translate key="plugins.generic.disco.metadataQuality"}</h3>
<p>{translate key="plugins.generic.disco.metadataQuality.description"}</p>
{assign var="metadataQualityArray" value=$categorizedRequirements["metadataQuality"]}
<form class="pkp_form">
    {foreach from=$metadataQualityArray key=requirement item=services}
        {include file="{$discoItem}" category="metadataQuality" requirement=$requirement services=$services type="recommendation"}
    {/foreach}
</form>

