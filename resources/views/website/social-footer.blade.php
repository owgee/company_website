<?php
/**
 * Description of social-footer
 *
 *  -----------------------------------------------------
 *  Copyright: INETS COMPANY LIMITED
 *  Website: www.inetstz.com
 *  Email: info@inetstz.com
 *  -----------------------------------------------------
 * @author Ephraim Swilla
 */
?>
<?php $url = 'www.inetstz.com' . $_SERVER['REQUEST_URI'] ?>
<section class="l-section wpb_row height_medium color_default">
    <div class="l-section-h i-cf">
        <div class="g-cols wpb_row offset_medium vc_inner ">
            <div class="in_col-sm-6 wpb_column in_column_container">
                {{--<p>Connect on Social Media</p>--}}
                {{--<div class="w-sharing type_solid align_center color_default">--}}
                    {{--<a class="w-sharing-item facebook" title="Connect on Facebook"--}}
                       {{--href="javascript:void(0)"--}}
                       {{--data-sharing-url="https://www.facebook.com/inets"--}}
                       {{--data-sharing-image=""><span--}}
                                {{--class="w-sharing-icon"></span></a>--}}
                    {{--<a--}}
                            {{--class="w-sharing-item twitter" title="Connect on Twitter" href="javascript:void(0)"--}}
                            {{--data-sharing-url="https://twitter.com/inetstz"--}}
                            {{--data-sharing-image=""><span class="w-sharing-icon"></span></a>--}}
                    {{--<a--}}
                            {{--class="w-sharing-item gplus" title="Connect on Google Plus" href="javascript:void(0)"--}}
                            {{--data-sharing-url="https://plus.google.com/u/0/b/104456943072957926887/104456943072957926887/about"--}}
                            {{--data-sharing-image=""><span class="w-sharing-icon"></span></a>--}}
                    {{--<a--}}
                            {{--class="w-sharing-item linkedin" title="Connect on LinkedIn" href="javascript:void(0)"--}}
                            {{--data-sharing-url="https://www.linkedin.com/company/inets"--}}
                            {{--data-sharing-image=""><span class="w-sharing-icon"></span></a>--}}
                   {{--</div>--}}
            </div>

            <div class="">

                <div class="w-sharing type_solid color_default">
                    <div id="modal-trg-txt-wrap-5363" class="ult-modal-input-wrapper ult-adjust-bottom-margin  ">Share
                        this Page
                    </div>
                    <div
                            class="fb-like "
                            data-share="true"
                            data-width="50"
                            data-show-faces="true">
                    </div>

                    <a class="w-sharing-item twitter" title="Tweet this" href="javascript:void(0)"
                       data-sharing-url="<?=$url?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
                    <a id="twitter_button" title="twitter"  data-height="20" href="https://twitter.com/inetstz"
                       class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @inetstz</a>
                    <!-- Place this tag in your head or just before your close body tag. -->
                    <script src="https://apis.google.com/js/platform.js" async defer></script>
                    <link rel="canonical" href="<?=$url?>"/>
                    <!-- Place this tag where you want the +1 button to render. -->
                    <div class="g-plusone" data-annotation="inline" data-width="300"></div>
                    <a class="w-sharing-item gplus" title="Share this" href="javascript:void(0)"
                       data-sharing-url="<?=$url?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('shareBtn').onclick = function () {
        FB.ui({
            method: 'share',
            display: 'popup',
            href: '<?= $url ?>',
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
<script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = "//platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, "script", "twitter-wjs");</script>

<!--<div class="w-sharing type_fixed align_right color_default" style="margin-top: -149px;">
    <a class="w-sharing-item email" title="Email this" href="javascript:void(0)" data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    <a class="w-sharing-item facebook" title="Share this" href="javascript:void(0)" data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    <a class="w-sharing-item twitter" title="Tweet this" href="javascript:void(0)" data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    
    <a class="w-sharing-item gplus" title="Share this" href="javascript:void(0)" data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    <a class="w-sharing-item linkedin" title="Share this" href="javascript:void(0)" 
       data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
   
</div>-->