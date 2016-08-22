@extends('new_website.master')
@section('content')
    <div class="l-titlebar imgsize_cover parallax_ver size_huge color_primary">
        <div class="l-titlebar-img" style="background-image: url({{url("/")}}/website_assets/uploads/picjumbo.com_IMG_6037.jpg)"
             data-img-width="1920" data-img-height="1280"></div>
        <div class="l-titlebar-overlay" style="background-color:rgba(28,28,28,0.3)"></div>
        <div class="l-titlebar-h">
            <div class="l-titlebar-content"><h1 itemprop="headline">Contact</h1></div>
            <div class="g-breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a
                            class="g-breadcrumbs-item" rel="v:url" property="v:title" href="../../index.html">Home</a></span>
                <span class="g-breadcrumbs-separator"></span>  <span class="g-breadcrumbs-item">Contact</span>
            </div>
        </div>
    </div>
    <div class="l-main">
        <div class="l-main-h i-cf">
            <main class="l-content" itemprop="mainContentOfPage">
                <section class="l-section wpb_row height_medium">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_medium">
                            <div class="in_col-sm-8 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="w-form for_cform align_left" id="us_form_1">
                                        <form class="w-form-h" autocomplete="off"
                                              action="http://zephyr.us-themes.com/pages/contact/" method="post">
                                            <div class="w-form-row for_name">
                                                <div class="w-form-row-label">
                                                    <label for="us_form_1_name">Name</label>
                                                </div>
                                                <div class="w-form-row-field">
                                                    <input type="text" name="name" id="us_form_1_name" value=""
                                                           placeholder=""/>
                                                    <span class="w-form-row-field-bar"></span>
                                                </div>
                                                <div class="w-form-row-state"></div>
                                            </div>
                                            <div class="w-form-row for_email required">
                                                <div class="w-form-row-label">
                                                    <label for="us_form_1_email">Email <span
                                                                class="required">*</span></label>
                                                </div>
                                                <div class="w-form-row-field">
                                                    <input type="email" name="email" id="us_form_1_email" value=""
                                                           placeholder="" data-required="true" aria-required="true"/>
                                                    <span class="w-form-row-field-bar"></span>
                                                </div>
                                                <div class="w-form-row-state"></div>
                                            </div>
                                            <div class="w-form-row for_phone">
                                                <div class="w-form-row-label">
                                                    <label for="us_form_1_phone">Phone Number</label>
                                                </div>
                                                <div class="w-form-row-field">
                                                    <input type="text" name="phone" id="us_form_1_phone" value=""
                                                           placeholder=""/>
                                                    <span class="w-form-row-field-bar"></span>
                                                </div>
                                                <div class="w-form-row-state"></div>
                                            </div>
                                            <div class="w-form-row for_message required">
                                                <div class="w-form-row-label">
                                                    <label for="us_form_1_message">Message <span
                                                                class="required">*</span></label>
                                                </div>
                                                <div class="w-form-row-field">
                                                    <textarea name="message" id="us_form_1_message" cols="30" rows="10"
                                                              placeholder="" data-required="true"
                                                              aria-required="true"></textarea>
                                                    <span class="w-form-row-field-bar"></span>
                                                </div>
                                                <div class="w-form-row-state"></div>
                                            </div>
                                            <input type="hidden" name="action" value="us_ajax_cform"/>
                                            <input type="hidden" name="post_id" value="10"/>
                                            <input type="hidden" name="form_index" value="1"/>
                                            <div class="w-form-row for_submit">
                                                <div class="w-form-row-field">
                                                    <button class="w-btn size_large color_white style_raised"
                                                            type="submit"><span class="g-preloader type_1"></span><span
                                                                class="w-btn-label">Send Message</span></button>
                                                </div>
                                            </div>
                                            <div class="w-form-message"></div>
                                        </form>
                                        <div class="w-form-json hidden"
                                             onclick='return {&quot;ajaxurl&quot;:&quot;http:\/\/zephyr.us-themes.com\/wp-admin\/admin-ajax.php&quot;,&quot;success&quot;:&quot;Thank you! Your message was sent.&quot;,&quot;errors&quot;:{&quot;name&quot;:&quot;Please enter your Name&quot;,&quot;email&quot;:&quot;Please enter your Email&quot;,&quot;phone&quot;:&quot;Please enter your Phone Number&quot;,&quot;message&quot;:&quot;Please enter a Message&quot;}}'></div>
                                    </div>
                                </div>
                            </div>
                            <div class="in_col-sm-4 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h3>Get Social</h3>
                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_small thick_1 style_solid color_border cont_none">
                                        <span class="w-separator-h"></span></div>
                                    <div class="w-socials align_left style_colored index_1" style="font-size: 24px;">
                                        <div class="w-socials-list">
                                            <div class="w-socials-item facebook">
                                                <a class="w-socials-item-link" target="_blank" href="#">
                                                    <span class="w-socials-item-link-hover"></span>
                                                </a>
                                                <div class="w-socials-item-popup">
                                                    <span>Facebook</span>
                                                </div>
                                            </div>
                                            <div class="w-socials-item twitter">
                                                <a class="w-socials-item-link" target="_blank" href="#">
                                                    <span class="w-socials-item-link-hover"></span>
                                                </a>
                                                <div class="w-socials-item-popup">
                                                    <span>Twitter</span>
                                                </div>
                                            </div>
                                            <div class="w-socials-item youtube">
                                                <a class="w-socials-item-link" target="_blank" href="#">
                                                    <span class="w-socials-item-link-hover"></span>
                                                </a>
                                                <div class="w-socials-item-popup">
                                                    <span>YouTube</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
                                        <span class="w-separator-h"></span></div>
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h3>Contact Info</h3>
                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_small thick_1 style_solid color_border cont_none">
                                        <span class="w-separator-h"></span></div>
                                    <div class="w-iconbox iconpos_left size_tiny style_default color_light">
                                        <div class="w-iconbox-icon"><i class="mdfi_action_home"></i></div>
                                        <h4 class="w-iconbox-title">Block 11, Bima Road, Mikocheni B, Dar es Salaam, TZ</h4></div>
                                    <div class="w-iconbox iconpos_left size_tiny style_default color_light"><a
                                                class="w-iconbox-link" href="#">
                                            <div class="w-iconbox-icon"><i class="mdfi_content_mail"></i></div>
                                            <h4 class="w-iconbox-title">info@inetstz.com</h4></a></div>
                                    <div class="w-iconbox iconpos_left size_tiny style_default color_light">
                                        <div class="w-iconbox-icon"><i class="mdfi_communication_phone"></i></div>
                                        <h4 class="w-iconbox-title">+255 655 406 004</h4></div>
                                    <div class="w-iconbox iconpos_left size_tiny style_default color_light">
                                        <div class="w-iconbox-icon"><i class="mdfi_action_print"></i></div>
                                        <h4 class="w-iconbox-title">+255 22 278 0228</h4></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
        </div>
    </div>

@stop