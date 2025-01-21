{**
* templates/discoTab.tpl
*
* Copyright (c) 2014-2020 Simon Fraser University
* Copyright (c) 2003-2020 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* Discoverability companion plugin -- displays the Discoverability companion list.
*}
<div class="pkp_structure_footer_wrapper disco_footer_badges">
    <div class="pkp_structure_footer">
        {foreach $badgesAvailability key="badge" item="availability"}
            <span {if !$availability}style="opacity: 0.2;"{/if}>
            {include file={$badges.$badge}}
            </span>
        {/foreach}       
    </div>
</div>
