<!-- HEADER WITH CONTACT BAR
================================================== -->
<div class="top-bar light-header navbar-fixed-top">
    <div class="container">
        <div class="row-fluid">
            <div class="span6 header-contact-info">
                <i class="icomoon-phone"></i> +255-714-825-469			
		<span class="header-divider">|</span>
                <i class="icomoon-envelop"></i> info@inetstz.com									</div>
            <div class="span6 text-right header-socials">
                <a href="http://www.twitter.com/inetstz" target="_blank" title="Share on Twitter">
		    <i class="icomoon-twitter-3"></i></a>
                <a href="http://www.facebook.com/inets" target="_blank" title="Share on Facebook">
		    <i class="icomoon-facebook-3"></i></a>

                <a href="http://plus.google.com/#" target="_blank" title="Share on Google+">
		    <i class="icomoon-google-plus-4"></i></a>

            </div>
        </div>
    </div>
</div>

<?php

function highligh_tab($tab_name) {
    $hightlight = isset($_GET['pg']) && $_GET['pg'] == $tab_name ? 'nav-active' : '';
    $tab_panel = $hightlight != '' ? '<i class="nav-active-arrow" style="top: 95px;"></i>' : '';
    return array($hightlight, $tab_panel);
}
?>
<!-- BEGIN NAVIGATION
================================================== -->
<div class="navbar navbar-inverse top-contact-bar-header navbar-fixed-top">
    <div class="navbar-inner" style="min-height: 95px; height: 95px;">
        <div class="container">
            <a class="brand" href="<?= HOME ?>">
                <img src="media/images/logo-black.png" alt="Inets Company Limited" style="margin-top: 25px; max-height: 75px;">
            </a>
            <div class="nav-collapse collapse">
                <ul id="header-menu" class="sf-menu nav sf-js-enabled sf-arrows l_tinynav1">
                    <li id="menu-item-1819" class="menu-item menu-item-type-post_type menu-item-object-page   <?= empty($_GET['pg']) ? 'nav-active' : '' ?>">	<?= empty($_GET['pg']) ? '<i class="nav-active-arrow" style="top: 95px;"></i>' : '' ?>		
                        <a href="<?= HOME ?>" style="padding: 38px 15px;">HOME</a></li>
		    <li id="menu-item-1812" 
			class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1812 <?= highligh_tab('about')[0] ?>"><?= highligh_tab('about')[1] ?>
			<a href="<?= HOME ?>about" class="sf-with-ul" style="padding: 38px 15px;">ABOUT</a>
                        <ul class="sub-menu" style="display: none;">

			    <li id="menu-item-1823" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1823">
				<a href="<?= HOME ?>about">Executive</a></li>
                            <li id="menu-item-1826" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1826"><a href="<?= HOME ?>about">Our  Expertise</a></li>
			    <li id="menu-item-1821" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1821"><a href="<?= HOME ?>about">Our Vision</a></li>
                            <li id="menu-item-1822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1822"><a href="<?= HOME ?>about">Our mission</a></li>
                            <li id="menu-item-1825" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1825"><a href="<?= HOME ?>about">Our Culture</a></li>

                        </ul>
                    </li>
                    <li id="menu-item-1813" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1813 <?= highligh_tab('service')[0] ?>"><?= highligh_tab('service')[1] ?>
			<a href="<?= HOME ?>service" class="sf-with-ul" style="padding: 38px 15px;">SERVICES</a>
                        <ul class="sub-menu" style="display: none;">


                            <li id="menu-item-1897" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1897"><a href="#">Software development</a></li>
                            <li id="menu-item-1886" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1886"><a href="#">Web design</a></li>
			    <li id="menu-item-1886" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1886"><a href="#">Mobile application</a></li>
			    <li id="menu-item-1886" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1886"><a href="#">Electronics application</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1861" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1861 <?= highligh_tab('project')[0] ?>">
	<?= highligh_tab('project')[1] ?><a href="<?= HOME ?>project" class="sf-with-ul" style="padding: 38px 15px;">PROJECTS</a>
                        <ul class="sub-menu" style="display: none;">
                            <li id="menu-item-1855" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1855"><a href="http://preview.themique.com/ventus/shortcodes/accordions/">ACCORDIONS</a></li>
                            <li id="menu-item-1856" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1856"><a href="http://preview.themique.com/ventus/shortcodes/data-tables/">DATA TABLES</a></li>
                            <li id="menu-item-1845" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1845"><a href="http://preview.themique.com/ventus/shortcodes/image-box/">IMAGE BOX</a></li>
                            <li id="menu-item-1844" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1844"><a href="http://preview.themique.com/ventus/shortcodes/portfolio/">PORTFOLIO</a></li>
                            <li id="menu-item-1869" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1869"><a href="http://preview.themique.com/ventus/shortcodes/clients-carousel/">CLIENTS CAROUSEL</a></li>
                            <li id="menu-item-1849" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1849"><a href="http://preview.themique.com/ventus/shortcodes/price-tables/">PRICE TABLES</a></li>
                            <li id="menu-item-1848" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1848"><a href="http://preview.themique.com/ventus/shortcodes/1584-2/">SERVICES</a></li>
                            <li id="menu-item-1853" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1853"><a href="http://preview.themique.com/ventus/shortcodes/1609-2/">TABS &amp; TOUR</a></li>
                            <li id="menu-item-1843" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1843"><a href="http://preview.themique.com/ventus/shortcodes/team-members/">TEAM MEMBERS</a></li>
                            <li id="menu-item-1852" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1852"><a href="http://preview.themique.com/ventus/shortcodes/testimonials/">TESTIMONIALS</a></li>
                            <li id="menu-item-1862" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1862"><a href="http://preview.themique.com/ventus/shortcodes/video/">VIDEO</a></li>
                            <li id="menu-item-1865" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1865"><a href="http://preview.themique.com/ventus/shortcodes/audio/">AUDIO</a></li>
                            <li id="menu-item-1818" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1818"><a href="http://preview.themique.com/ventus/shortcodes/elements/">MORE ELEMENTS</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1817" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1817 <?= highligh_tab('public')[0] ?>"><?= highligh_tab('public')[1] ?><a href="<?= HOME ?>public" class="sf-with-ul" style="padding: 38px 15px;">PUBLICITY</a>
                        <ul class="sub-menu" style="display: none;">
                            <li id="menu-item-1840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1840"><a href="http://preview.themique.com/ventus/features/">OVERVIEW</a></li>
                            <li id="menu-item-1866" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1866"><a href="http://preview.themique.com/ventus/features/admin-panel/">ADMIN PANEL</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1814" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1814 <?= highligh_tab('contact')[0] ?>"><?= highligh_tab('contact')[1] ?><a href="<?= HOME ?>contact" style="padding: 38px 15px;">JOBS & INVESTMENTS</a></li>
                </ul>
		<select tabindex="1" class="default tinynav tinynav1" name="dropkick" id="tinynav1">
		    <option value="http://preview.themique.com/ventus/" selected="selected">HOME</option>
		    <option value="undefined">PAGES</option>
		    <option value="http://preview.themique.com/ventus/blog/">- BLOG</option>
		    <option value="http://preview.themique.com/ventus/pages/about/">- ABOUT</option>
		    <option value="http://preview.themique.com/ventus/pages/what-we-do/">- WHAT WE DO</option>
		    <option value="http://preview.themique.com/ventus/pages/our-team/">- OUR TEAM</option>
		    <option value="http://preview.themique.com/ventus/pages/faq/">- FAQ</option>
		    <option value="http://preview.themique.com/ventus/pages/testimonials/">- TESTIMONIALS</option>
		    <option value="http://preview.themique.com/ventus/pages/pricing/">- PRICING</option>
		    <option value="http://preview.themique.com/ventus/pages/comparison-table/">- COMPARISON TABLE</option>
		    <option value="http://preview.themique.com/ventus/pages/contact/">- CONTACT</option>
		    <option value="undefined">PORTFOLIO</option>
		    <option value="http://preview.themique.com/ventus/portfolios/portfolio-3-col/">- PORTFOLIO 3-COL</option>
		    <option value="http://preview.themique.com/ventus/portfolios/portfolio-2-col/">- PORTFOLIO 2-COL</option>
		    <option value="http://preview.themique.com/ventus/portfolios/filtered-portfolio/">- FILTERED PORTFOLIO</option>
		    <option value="http://preview.themique.com/ventus/blog/portfolio/project-10/">- PORTFOLIO SINGLE</option>
		    <option value="http://preview.themique.com/ventus/blog/portfolio/project-11/">- PORTFOLIO SINGLE 2</option>
		    <option value="http://preview.themique.com/ventus/portfolio-slider/">- PORTFOLIO SLIDER</option>
		    <option value="http://preview.themique.com/ventus/shortcodes/">SHORTCODES</option>
		    <option value="http://preview.themique.com/ventus/shortcodes/accordions/">- ACCORDIONS</option>
		    <option value="http://preview.themique.com/ventus/shortcodes/data-tables/">- DATA TABLES</option><option value="http://preview.themique.com/ventus/shortcodes/image-box/">- IMAGE BOX</option>
		    <option value="http://preview.themique.com/ventus/shortcodes/portfolio/">- PORTFOLIO</option>
		    <option value="http://preview.themique.com/ventus/shortcodes/clients-carousel/">- CLIENTS CAROUSEL</option>
		    <option value="http://preview.themique.com/ventus/shortcodes/price-tables/">- PRICE TABLES</option>
		    <option value="http://preview.themique.com/ventus/shortcodes/1584-2/">- SERVICES</option>
		    <option value="http://preview.themique.com/ventus/shortcodes/1609-2/">- TABS &amp; TOUR</option>
		    <option value="http://preview.themique.com/ventus/shortcodes/team-members/">- TEAM MEMBERS</option>
		    <option value="http://preview.themique.com/ventus/shortcodes/testimonials/">- TESTIMONIALS</option>
		    <option value="http://preview.themique.com/ventus/shortcodes/video/">- VIDEO</option>
		    <option value="http://preview.themique.com/ventus/shortcodes/audio/">- AUDIO</option>
		    <option value="http://preview.themique.com/ventus/shortcodes/elements/">- MORE ELEMENTS</option>
		    <option value="undefined">FEATURES</option>
		    <option value="#">- OVERVIEW</option>
		    <option value="#">- ADMIN PANEL</option>
		    <option value="#" selected="selected">PURCHASE</option>
		</select>	
	    </div><!--/.nav-collapse -->
        </div>
    </div>
</div>