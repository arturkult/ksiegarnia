/**
 * 2012-2017 NetReviews
 *
 *  @author    NetReviews SAS <contact@avis-verifies.com>
 *  @copyright 2017 NetReviews SAS
 *  @version   Release: $Revision: 7.4.3
 *  @license   NetReviews
 *  @date      16/11/2017
 *  International Registered Trademark & Property of NetReviews SAS
 */
function loadScript(url, callback) {
    var script = document.createElement("script")
    script.type = "text/javascript";
    if (script.readyState) { //IE
        script.onreadystatechange = function() {
            if (script.readyState == "loaded" || script.readyState == "complete") {
                script.onreadystatechange = null;
                callback();
            }
        };
    } else { //Others
        script.onload = function() {
            callback();
        };
    }
    script.src = url;
    document.getElementsByTagName("head")[0].appendChild(script);
}

var jQueryIsLoaded = false;
try {
    if (typeof jQuery === 'undefined')
        jQueryIsLoaded = false;
    else
        jQueryIsLoaded = true;
} catch (err) {
    jQueryIsLoaded = false;
}

if (!jQueryIsLoaded) {
    //https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js
    loadScript("https://www.avis-verifies.com/review/js/jquery-1.8.2.min.js");
}

if (typeof jQuery !== 'undefined') {
    function av_widget_click() {

        if ($('.netreviews_tab').length) { //prestashop 1.7
            var tagclassname_av = $('.netreviews_tab').attr('id');
            $("a[href='#" + tagclassname_av + "']").click();
            $('html,body').animate({
                scrollTop: $("a[href='#" + tagclassname_av + "']").offset().top
            }, 'slow');
        } else {
            $("a[href='#idTabavisverifies']").click();
            $('html,body').animate({
                scrollTop: $("#idTabavisverifies").offset().top
            }, 'slow');
        }

    }

$( document ).ready(function() {
    $('#av_load_comments').click(function() {
        vnom_group = ($("#nom_group").val()) ? $("#nom_group").val() : 0;
        vid_shop = ($("#id_shop").val()) ? $("#id_shop").val() : 0;
        counted_reviews = $("#reviewCount").val();
        review_per_page = $("#review_per_page").val();
        widgetlight = $("#widgetlight").val();
        maxpage = Math.ceil(counted_reviews / review_per_page);
        current_page = parseInt($(this).attr('rel')) + 1;
        url_link = $("#url").val();

        if ($('.groupAvis:hidden').first().length !== 0) {
            $('.groupAvis:hidden').first().css({
                visibility: "visible",
                display: "block"
            });
            $(this).attr('rel', parseInt(current_page));
            console.log("Page :" + current_page + "/" + maxpage + " Total :" + counted_reviews);
            if (maxpage == parseInt(current_page) && $('.groupAvis:hidden').length === 0) {
                $(this).hide();
            }
            return false;
        }

        $.ajax({
            url: url_link + "netreviews/ajax-load.php",
            type: "POST",
            data: {
                p: current_page,
                id_product: $('input[name="id_product"]').val(),
                count_reviews: counted_reviews,
                id_shop: vid_shop,
                nom_group: vnom_group,
                widgetlight: widgetlight,
                review_per_page: review_per_page
            },
            beforeSend: function() {
                $('#av_loader').show();
            },
            success: function(html) {
                $('#av_loader').hide();
                $("#ajax_comment_content").append(html);
                $('#av_load_comments').attr('rel', parseInt($('#av_load_comments').attr('rel')) + 1);
                if (maxpage == parseInt($('#av_load_comments').attr('rel')) && $('.groupAvis:hidden').length == 0) {
                    $('#av_load_comments').hide();
                }
                console.log("Page :" + parseInt($('#av_load_comments').attr('rel')) + "/" + maxpage + " Total :" + counted_reviews);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('something went wrong...');
            }
        });
        return false;
    });
});

    function switchCommentsVisibility(review_number) {
        comment = $('div[review_number=' + review_number + ']');
        console.log(review_number);
        comment.toggle();

        //Swich entre "afficher les échanges" et "masquer les échanges"
        $('a#display' + review_number + '[review_number=' + review_number + ']').toggle();
        $('a#hide' + review_number + '[review_number=' + review_number + ']').toggle();
    }
}