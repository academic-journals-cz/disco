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
{*{fbvElement type="hidden" id="discoCategoryName" value=$category maxlength="255" inline=true size=$fbvStyles.size.LARGE}*}
{if $type != "recommendation"}
    {if $variables[$requirement]}
        {assign var="checked" value=true}
    {else}
        {assign var="checked" value=false}
    {/if}
    {fbvElement type="checkbox" name="{$requirement}" id="{$requirement}" checked=$checked label="plugins.generic.disco.{$category}.{$requirement}" disabled={$disabled} value="true"}
{else}
    <h3>{translate key="plugins.generic.disco.{$category}.{$requirement}"}</h3>
{/if}

{if $metadataQuality[$requirement]}

{/if}
{assign var="autoChecks" value=$automaticChecks[$category]}

{if $autoChecks && array_key_exists($requirement, $autoChecks)} 
    {if $autoChecks[$requirement]}
        {assign var="autoCheck" value=true}
    {else}
        {assign var="autoCheck" value=false}
    {/if}    
    {fbvElement type="checkbox" name="autoCheck_{$requirement}" id="autoCheck_{$requirement}" checked={$autoCheck} label="plugins.generic.disco.{$category}.{$requirement}.autocheck" disabled=true}
{/if}


{if array_key_exists($requirement, $metadataQuality) && $metadataQuality[$requirement] >= 0}
    <span class ="metadataQuality" íd="metadataQuality_{$requirement}">[{$metadataQuality.$requirement} / {$metadataQuality["publishedSubmissionsCount"]}] <em>{translate key="plugins.generic.disco.{$category}.{$requirement}.countCheck"}</em></span>
{/if}
<div class="info-block">
    <a href="javascript:void(0);" class="toggle-btn" data-target="info_{$category}_{$requirement}">
        <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
        <span class="toggle-text">More information</span>
    </a>
    <div id="info_{$category}_{$requirement}" class="info-content" style="display: none;">
        {translate key="plugins.generic.disco.{$category}.{$requirement}.description"}

        {if array_key_exists($requirement, $ojsSettings) && $ojsSettings[$requirement]}
            <p class ="discoOjsSettings" íd="ojsSettings_{$requirement}"><strong>{translate key="plugins.generic.disco.settings"}:</strong></p>
            <ul>
            {foreach $ojsSettings[$requirement] $value}
                <li>{translate key="plugins.generic.disco.settings.{$value}"}</li>
            {/foreach}
            </ul>
        {/if}

        {if $services|@count > 0}
            <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {", "|implode:$services}</p>
        {/if}
    </div>
</div>

{/fbvFormArea}