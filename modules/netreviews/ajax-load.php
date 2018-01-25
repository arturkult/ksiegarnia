<?php
/**
 * 2012-2017 NetReviews
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    NetReviews SAS <contact@avis-verifies.com>
 *  @copyright 2017 NetReviews SAS
 *  @version   Release: $Revision: 7.4.3
 *  @license   NetReviews
 *  @date      16/11/2017
 *  @category  api
 *  International Registered Trademark & Property of NetReviews SAS
 */

require(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');
require_once(dirname(__FILE__).'/models/NetReviewsModel.php');
$Module_attr = Module::getInstanceByName('netreviews');
$o_av = new NetReviewsModel();

$widgetlight = Tools::getValue('widgetlight'); 
$id_product = Tools::getValue('id_product');
$nb_comments = (int)Tools::getValue('count_reviews');
$review_per_page = Tools::getValue('review_per_page');
$nom_group = (Tools::getValue('nom_group'))?(int)Tools::getValue('nom_group'):null;
$id_shop = (Tools::getValue('id_shop'))?(int)Tools::getValue('id_shop'):null;
$shop_name = Configuration::get('PS_SHOP_NAME');
$p = (int)Tools::getValue('p'); //current_page

if (empty($id_product)) {
   echo "something went wrong...";
}

$pages_nb = ceil($nb_comments / (int)$review_per_page);
if ($p > $pages_nb) {
    echo "something went wrong...";
}
$pack_review_ajax = ceil($review_per_page*$p / (int)$o_av->reviews_by_page); //the number of reviews in a Pack is defined in NetReviewsModel.php

$reviews = $o_av->getProductReviews((int)$id_product, $nom_group, $id_shop, false, $pack_review_ajax);

        $reviews_list = array(); //Create array with all reviews data
        $my_review = array(); //Create array with each reviews data
        foreach ($reviews as $review) {
                //Create variable for template engine
                $my_review['ref_produit'] = $review['ref_product'];
                $my_review['id_product_av'] = $review['id_product_av'];
                $my_review['rate'] = $review['rate'];
                $my_review['rate_percent'] = $review['rate']*20;
                $my_review['avis'] = html_entity_decode(urldecode($review['review']));
                if (Tools::strlen($review['horodate'])=='10') {
                    $date = new DateTime();
                    $date->setTimestamp($review['horodate']);
                    $my_review['horodate'] = $date->format('d/m/Y') ;
                } else {
                    $my_review['horodate'] = date('d/m/Y', strtotime($review['horodate']));
                }
                $my_review['customer_name'] = urldecode($review['customer_name']);
                $my_review['discussion'] = array();

                //renverser le nom et le prénom
                $customer_name= urldecode($review['customer_name']);
                $customer_name=(explode(' ',$customer_name));
                $prenom = $customer_name[1];
                $nom = $customer_name[0];
                $my_review['customer_name'] = $prenom." ".$nom;

                $unserialized_discussion = Tools::jsonDecode(NetReviewsModel::acDecodeBase64($review['discussion']), true);
                if ($unserialized_discussion) {
                    foreach ($unserialized_discussion as $k_discussion => $each_discussion) {
                         $my_review['discussion'][$k_discussion] = array();
                        if (Tools::strlen($each_discussion['horodate'])=='10') {
                            $date = new DateTime();
                            $date->setTimestamp($each_discussion['horodate']);
                            $my_review['discussion'][$k_discussion]['horodate'] = $date->format('d/m/Y') ;
                        } else {
                            $my_review['discussion'][$k_discussion]['horodate'] = date('d/m/Y', strtotime($each_discussion['horodate']));
                        }
                        $my_review['discussion'][$k_discussion]['commentaire'] = $each_discussion['commentaire'];
                        if ($each_discussion['origine'] == 'ecommercant') {
                            $my_review['discussion'][$k_discussion]['origine'] = $shop_name;
                        } else if ($each_discussion['origine'] == 'internaute') {
                            $my_review['discussion'][$k_discussion]['origine'] = $my_review['customer_name'];
                        } else {
                            $my_review['discussion'][$k_discussion]['origine'] = $Module_attr->l('Moderator');
                        }
                    }
                }
                array_push($reviews_list, $my_review);
        }


$smarty->assign(array(
    'modules_dir' => _MODULE_DIR_,
    'reviews' => $reviews_list,
    'p' => (int)$p,
    'n' => $review_per_page,
    'widgetlight' => $widgetlight,
    'pages_nb' => $pages_nb
));
echo $smarty->fetch(dirname(__FILE__).'/views/templates/hook/ajax-load-tab-content.tpl');
