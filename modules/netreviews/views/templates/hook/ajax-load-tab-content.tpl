<!--
* 2012-2017 NetReviews
*
*  @author    NetReviews SAS <contact@avis-verifies.com>
*  @copyright 2017 NetReviews SAS
*  @version   Release: $Revision: 7.4.3
*  @license   NetReviews
*  @date      16/11/2017
*  International Registered Trademark & Property of NetReviews SAS
-->
{assign var = 'i' value = 1}
{assign var = 'first' value = true}

{foreach from=$reviews key=k_review item=review}
	{if $i == 1 && !$first}
		<span class="groupAvis">
	{/if}
	<div class="reviewAV" id="review{$p}_{$pages_nb}">
		<ul class="reviewInfosAV">
			<li style="text-transform:capitalize">{$review['customer_name']|escape:'htmlall':'UTF-8'}</li>
			<li>&nbsp;{l s='the' mod='netreviews'} {$review['horodate']|escape:'htmlall':'UTF-8'}</li>
			<li class="rateAV">
			<!-- netreviews product widget new /netreviews stars -->

            {if ($widgetlight eq '2' || $widgetlight eq '1' )}
                     <div class="netreviewsProductWidgetNewRatingWrapper">
                         <div class="netreviewsProductWidgetNewRatingInner" style="width: {$review['rate_percent']|escape:'htmlall':'UTF-8'}%"></div>
                      </div>
           <!--  netreviews product widget -->
            {elseif ($widgetlight eq '3') }
                    <div class="ratingWrapper">
                            <div class="ratingInner" style="width: {$review['rate_percent']|escape:'htmlall':'UTF-8'}%"></div>
                    </div>
            {/if}

			 {$review['rate']|escape:'htmlall':'UTF-8'}/5</li>
		</ul>

		<div class="triangle-border top">{$review['avis']|escape:'htmlall':'UTF-8'}</div>

		{if $review['discussion']}
			{foreach from=$review['discussion'] key=k_discussion item=discussion}

			<div class="triangle-border top answer" {if $k_discussion > 0} review_number={$review['id_product_av']|escape:'htmlall':'UTF-8'} style= "display: none" {/if}>
				<span>&rsaquo; {l s='Comment from' mod='netreviews'}  <b style="text-transform:capitalize;">{$discussion['origine']|escape:'htmlall':'UTF-8'}</b> {l s='the' mod='netreviews'} {$discussion['horodate']|escape:'htmlall':'UTF-8'}</span>
				<p class="answer-bodyAV">{$discussion['commentaire']|escape:'htmlall':'UTF-8'}</p>
			</div>

			{/foreach}

			{if $k_discussion > 0}
				<a href="javascript:switchCommentsVisibility('{$review['id_product_av']|escape:'htmlall':'UTF-8'}')" style="padding-left: 6px;margin-left: 30px; display: block; font-style:italic" id="display{$review['id_product_av']|escape:strip}" class="display-all-comments" review_number={$review['id_product_av']|escape:'htmlall':'UTF-8'} >{l s='Show exchanges' mod='netreviews'}</a>

				<a href="javascript:switchCommentsVisibility('{$review['id_product_av']|escape:'htmlall':'UTF-8'}')" style="padding-left: 6px;margin-left: 30px; display: none; font-style:italic" id="hide{$review['id_product_av']|escape:strip}" class="display-all-comments" review_number={$review['id_product_av']|escape:'htmlall':'UTF-8'} >{l s='Hide exchanges' mod='netreviews'}</a>
				</a>
			{/if}
		{/if}
	</div>


	{if $i == $n && !$first}
		</span>
		{$i = 1}
	{else}
		{if $i == $n && $first}
        	{$first = false}
        	{$i = 1}
        {else}
        	{$i = $i + 1}
        {/if}
	{/if}
{/foreach}








