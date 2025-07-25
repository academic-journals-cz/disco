{**
 * templates/discoDescription.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Display description fr Discoverability Companion
 *}
{include file="frontend/components/header.tpl" pageTitleTranslated=$title}
<div class="page disco_description">
<h2>{$title|escape}</h2>
{translate key="plugin.generic.disco.page.description"}
<div class="badge-container">
    {foreach $badges key="badgeName" item="badge"}
        <div class="badge-item" id="{$badgeName}">
            <span class="badge-icon">
                {include file=$badge}
            </span>
            <div class="badge-text">
                <h3 class="badge-title">
                    {translate key="plugins.generic.disco.badges.{$badgeName}"}
                </h3>
                <p class="badge-description">
                    {translate key="plugins.generic.disco.badges.{$badgeName}.description"}
                </p>
            </div>
        </div>
    {/foreach}    
</div>
        <p>{translate key="plugin.generic.disco.page.description.footer"}</p>
</div>
{include file="frontend/components/footer.tpl"}
