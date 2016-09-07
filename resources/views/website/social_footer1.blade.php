<?php
/**
 * Description of social_footer
 *
 *  -----------------------------------------------------
 *  Copyright: INETS COMPANY LIMITED
 *  Website: www.inetstz.com
 *  Email: info@inetstz.com
 *  -----------------------------------------------------
 * @author Ephraim Swilla
 */
?>


<section class="l-section for_sharing col-md-6 ">
    <div class="l-section-h i-cf">
        <div class="w-sharing type_fixed align_center color_default">

            <p class="w-sharing-item fa fa-share" title="Share this"

               data-sharing-url="{{'www.inetstz.com' . $_SERVER['REQUEST_URI']}}"
               data-sharing-image="" style="color: black; background-color: white; ">
                <span
                        class="w-sharing-icon " ></span>Share this Page</p>
            <a class="w-sharing-item email" title="Email this"
               href="javascript:void(0)"
               data-sharing-url="{{'www.inetstz.com' . $_SERVER['REQUEST_URI']}}"
               data-sharing-image="">
                <span
                        class="w-sharing-icon"></span></a><a class="w-sharing-item facebook" title="Share this"
                                                             href="javascript:void(0)"
                                                             data-sharing-url="{{'www.inetstz.com' . $_SERVER['REQUEST_URI']}}"
                                                             data-sharing-image="website_assets/uploads/2014/09/island_of_lost_ships_by_alexandreev-d5p0x8j.jpg"><span
                        class="w-sharing-icon"></span><span class="w-sharing-count">1</span></a><a
                    class="w-sharing-item twitter" title="Tweet this" href="javascript:void(0)"
                    data-sharing-url=""
                    data-sharing-image="website_assets/uploads/2014/09/island_of_lost_ships_by_alexandreev-d5p0x8j.jpg"><span
                        class="w-sharing-icon"></span></a><a class="w-sharing-item gplus" title="Share this"
                                                             href="javascript:void(0)"
                                                             data-sharing-url="{{'www.inetstz.com' . $_SERVER['REQUEST_URI']}}"
            ><span
                        class="w-sharing-icon"></span></a><a class="w-sharing-item linkedin" title="Share this"
                                                             href="javascript:void(0)"
                                                             data-sharing-url="{{'www.inetstz.com' . $_SERVER['REQUEST_URI']}}"
            ><span
                        class="w-sharing-icon"></span></a></div>
    </div>
</section>
{{--<section class="l-section wpb_row height_medium color_default">--}}
{{--<hr/>--}}
{{--<div class="l-section-h i-cf">--}}
{{--<div class="g-cols wpb_row offset_medium vc_inner ">--}}
{{--<div class="vc_col-sm-3 wpb_column vc_column_container">--}}
{{--<div class="vc_column-inner">--}}
{{--<div id="modal-trg-txt-wrap-5363" class="ult-modal-input-wrapper ult-adjust-bottom-margin  ">Share--}}
{{--this Page--}}
{{--</div>--}}
{{--</div>--}}

{{--</div>--}}
{{--<div class="vc_col-sm-3 wpb_column vc_column_container">--}}
{{--<div class="vc_column-inner">--}}
{{--<div id="modal-trg-txt-wrap-8334" class="ult-modal-input-wrapper ult-adjust-bottom-margin  ">--}}

{{--<div--}}
{{--class="fb-like"--}}
{{--data-share="true"--}}
{{--data-width="450"--}}
{{--data-show-faces="true">--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}
<?php $url = 'www.inetstz.com' . $_SERVER['REQUEST_URI']?>
<script>
    document.getElementById('shareBtn').onclick = function () {
        FB.ui({
            method: 'share',
            display: 'popup',
            href: '<?=$url?>',
        }, function (response) {
        });
    }
</script>
<script>

    window.fbAsyncInit = function () {
        FB.init({
            appId: '299111130448732',
            xfbml: true,
            version: 'v2.7'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!--<div class="w-sharing type_fixed align_right color_default" style="margin-top: -149px;">
    <a class="w-sharing-item email" title="Email this" href="javascript:void(0)" data-sharing-url="<?=$url?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    <a class="w-sharing-item facebook" title="Share this" href="javascript:void(0)" data-sharing-url="<?=$url?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    <a class="w-sharing-item twitter" title="Tweet this" href="javascript:void(0)" data-sharing-url="<?=$url?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    
    <a class="w-sharing-item gplus" title="Share this" href="javascript:void(0)" data-sharing-url="<?=$url?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    <a class="w-sharing-item linkedin" title="Share this" href="javascript:void(0)" 
       data-sharing-url="<?=$url?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
   
</div>-->