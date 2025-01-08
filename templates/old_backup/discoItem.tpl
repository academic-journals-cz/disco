{**
* templates/discoAppearance.tpl
*
* Copyright (c) 2014-2020 Simon Fraser University
* Copyright (c) 2003-2020 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* TODO text.
*}

{fbvFormArea id="{$category}_{$requirement}_FormArea"}
{if $type != "recommendation"}
    {if $variables[$requirement]}
        {assign var="checked" value=true}
    {else}
        {assign var="checked" value=false}
    {/if}
    {fbvElement type="checkbox" name="{$requirement}" id="{$requirement}" checked=$checked label="plugins.generic.disco.{$category}.{$requirement}" disabled={$disabled}}
{else}
    <h3>{translate key="plugins.generic.disco.{$category}.{$requirement}"}</h3>
{/if}
<div class="info-block">
    <a href="javascript:void(0);" class="toggle-btn" data-target="info_{$category}_{$requirement}">
        <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
        <span class="toggle-text">More information</span>
    </a>
    <div id="info_{$category}_{$requirement}" class="info-content" style="display: none;">
        {translate key="plugins.generic.disco.{$category}.{$requirement}.description"}
        {if $services|@count > 0}
            <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {", "|implode:$services}</p>
        {/if}
    </div>
</div>

{/fbvFormArea}