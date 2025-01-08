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
{assign var="journalPolicyArray" value=$categorizedRequirements["journalPolicy"]}

<form class="pkp_form" method="put" action="{$actionUrl}">

    {csrf}
    {if $discoId}
        <input type="hidden" name="discoId" value="{$discoId|escape}" />
    {/if}
    <input type="hidden" name="category" value="journalPolicy" />
    {foreach from=$journalPolicyArray key=requirement item=services}
        {include file="{$discoItem}" category="journalPolicy" requirement=$requirement services=$services}
    {/foreach}

    {fbvFormSection class="formButtons"}
    {assign var=buttonId value="submitFormButton"|concat:"-"|uniqid}
    {fbvElement type="submit" class="submitFormButton" id=$buttonId label="common.save"}
    {/fbvFormSection}
</form>
