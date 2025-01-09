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
{assign var="appearanceArray" value=$categorizedRequirements["appearance"]}

<form class="pkp_form" method="put" action="{$actionUrl}">
    {csrf}
    {if $discoId}
        <input type="hidden" name="discoId" value="{$discoId|escape}" />
    {/if}
    <input type="hidden" name="category" value="appearance" />
    {foreach from=$appearanceArray key=requirement item=services}
        {include file="{$discoItem}" category="appearance" requirement=$requirement services=$services}
    {/foreach}

    {fbvFormSection class="formButtons"}
    {assign var=buttonId value="submitFormButton"|concat:"-"|uniqid}
    {fbvElement type="submit" class="submitFormButton" id=$buttonId label="common.save"}
    {/fbvFormSection}
</form>
