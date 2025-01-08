{**
* templates/discoLandingPages.tpl
*
* Copyright (c) 2014-2020 Simon Fraser University
* Copyright (c) 2003-2020 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* TODO text.
*}

    <h3>{translate key="plugins.generic.disco.lpGalleys"}</h3>
    <p>{translate key="plugins.generic.disco.lpGalleys.description"}</p>
<form class="pkp_form" id="discoAppearanceForm">
    
    {fbvFormArea id="lpGalleysFormAreaReferences" class="border"}

            {if $references}
                {assign var="checked" value=true}
            {else}
                {assign var="checked" value=false}
            {/if}
            {fbvElement type="checkbox" name="references" id="references" checked=$checked label="plugins.generic.disco.lpGalleys.references"}
            <div class="info-block">
                <a href="javascript:void(0);" class="toggle-btn" data-target="infoLpGalleysReferences">
                    <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
                    <span class="toggle-text">More information</span>
                </a>
                <div id="infoLpGalleysReferences" class="info-content" style="display: none;">
                    {translate key="plugins.generic.disco.lpGalleys.references.description"}
                    <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.wos.esci"}</p>
                </div>
            </div>
      {/fbvFormArea}
      {fbvFormArea id="lpGalleysFormAreaFullBio" class="border"}

            {if $fullBio}
                {assign var="checked" value=true}
            {else}
                {assign var="checked" value=false}
            {/if}
            {fbvElement type="checkbox" name="fullBio" id="fullBio" checked=$checked label="plugins.generic.disco.lpGalleys.fullBio"}
            <div class="info-block">
                <a href="javascript:void(0);" class="toggle-btn" data-target="infoLpGalleysFullBio">
                    <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
                    <span class="toggle-text">More information</span>
                </a>
                <div id="infoLpGalleysFullBio" class="info-content" style="display: none;">
                    {translate key="plugins.generic.disco.lpGalleys.fullBio.description"}
                    <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.crossref"}</p>
                </div>
            </div>
      {/fbvFormArea}
      {fbvFormArea id="lpGalleysFormAreaLpDoi" class="border"}

            {if $lpDoi}
                {assign var="checked" value=true}
            {else}
                {assign var="checked" value=false}
            {/if}
            {fbvElement type="checkbox" name="lpDoi" id="lpDoi" checked=$checked label="plugins.generic.disco.lpGalleys.lpDoi"}
            <div class="info-block">
                <a href="javascript:void(0);" class="toggle-btn" data-target="infoLpGalleysLpDoi">
                    <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
                    <span class="toggle-text">More information</span>
                </a>
                <div id="infoLpGalleysLpDoi" class="info-content" style="display: none;">
                    {translate key="plugins.generic.disco.lpGalleys.lpDoi.description"}
                    <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.crossref"}</p>
                </div>
            </div>
      {/fbvFormArea}
      {fbvFormArea id="lpGalleysFormArealinkToFulltext" class="border"}

            {if $linkToFulltext}
                {assign var="checked" value=true}
            {else}
                {assign var="checked" value=false}
            {/if}
            {fbvElement type="checkbox" name="linkToFulltext" id="linkToFulltext" checked=$checked label="plugins.generic.disco.lpGalleys.linkToFulltext"}
            <div class="info-block">
                <a href="javascript:void(0);" class="toggle-btn" data-target="infoLpGalleysLinkToFulltext">
                    <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
                    <span class="toggle-text">More information</span>
                </a>
                <div id="infoLpGalleysLinkToFulltext" class="info-content" style="display: none;">
                    {translate key="plugins.generic.disco.lpGalleys.linkToFulltext.description"}
                    <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.crossref"}</p>
                </div>
            </div>
      {/fbvFormArea}
      {fbvFormArea id="lpGalleysFormAreauniqueUrlArticles" class="border"}

            {if $uniqueUrlArticles}
                {assign var="checked" value=true}
            {else}
                {assign var="checked" value=false}
            {/if}
            {fbvElement type="checkbox" name="uniqueUrlArticles" id="uniqueUrlArticles" checked=$checked label="plugins.generic.disco.lpGalleys.uniqueUrlArticles"}
            <div class="info-block">
                <a href="javascript:void(0);" class="toggle-btn" data-target="infoLpGalleysUniqueUrlArticles">
                    <span class="arrow">&#9654;</span> <!-- Šipka doprava -->
                    <span class="toggle-text">More information</span>
                </a>
                <div id="infoLpGalleysUniqueUrlArticles" class="info-content" style="display: none;">
                    {translate key="plugins.generic.disco.lpGalleys.uniqueUrlArticles.description"}
                    <p><strong>{translate key="plugins.generic.disco.services"}:</strong> {translate key="plugins.generic.disco.doaj"}, {translate key="plugins.generic.disco.gs"}, {translate key="plugins.generic.disco.crossref"}</p>
                </div>
            </div>
      {/fbvFormArea}
      
    {fbvFormSection class="formButtons"}
            {assign var=buttonId value="submitFormButton"|concat:"-"|uniqid}
            {fbvElement type="submit" class="submitFormButton" id=$buttonId label="common.save"}
    {/fbvFormSection}
</form>
