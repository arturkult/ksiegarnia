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

{if $page_name == 'category'}
    {if $count_reviews != 0}

        {if ($rs_choice eq "2")}
            <script type="application/ld+json">
                {
                "@context": "http://schema.org/",
                "@type": "Product",
                "name": "{$nom_category|escape:'htmlall':'UTF-8'}",
                "description": "{$description_category|strip_tags|escape:'htmlall':'UTF-8'}",
                 "offers":
            [
                {foreach from=$products_av item=product name=products_av}
                {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "price": "{$product.price}",
                    "availability": "http://schema.org/InStock",
                    "name": "{$product.name|escape:'html':'UTF-8'}"
                }
                {if not $smarty.foreach.products_av.last} , {/if} 
                {/foreach}
            ],
                "aggregateRating": { 
                "@type": "AggregateRating", 
                "ratingValue": "{$average_rate|escape:'htmlall':'UTF-8'}", 
                "reviewCount": "{$count_reviews|escape:'htmlall':'UTF-8'}",
                "worstRating": "1", 
                "bestRating": "5"
                } 
                }
            </script>

        {elseif ($rs_choice eq "1")}
            <div id="netreviews_category_review" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                <meta itemprop="itemreviewed" content="{$nom_category|escape:'htmlall':'UTF-8'}" />
                    <span>
                        <meta itemprop="ratingValue" content="{$average_rate|escape:'htmlall':'UTF-8'}" />
                        <meta itemprop="bestRating" content="5" />
                        <meta itemprop="worstRating" content="1" />
                        <meta itemprop="reviewCount" content="{$count_reviews|escape:'htmlall':'UTF-8'}" />
                    </span>
            </div>
        {/if}

    {/if}
{/if}






