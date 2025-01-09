{**
* templates/discoSeo.tpl
*
* Copyright (c) 2014-2020 Simon Fraser University
* Copyright (c) 2003-2020 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* TODO text.
*}
{assign var="seoArray" value=$categorizedRequirements["seo"]}

<h3>{translate key="plugins.generic.disco.seo"}</h3>
<p>{translate key="plugins.generic.disco.seo.description"}</p>
<form class="pkp_form">

    {foreach from=$seoArray key=requirement item=services}
        {include file="{$discoItem}" category="seo" requirement=$requirement services=$services type="recommendation"}
    {/foreach}
</form>

