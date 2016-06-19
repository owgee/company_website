
<header>
    <nav class="navigation navigation-header">
	<div class="container">
	    <div class="navigation-brand">
		<div class="brand-logo">
		    <a href="<?= HOME ?>" class="logo"></a>
		    <span class="sr-only">Inets Company</span>
		</div>
		<button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown" data-target=".navigation-navbar">
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		</button>
	    </div>
	    <div class="navigation-navbar">
		<ul class="navigation-bar navigation-bar-left">
		    <li <?= header_state('') ?>><a href="<?= HOME ?>">Home</a></li>
		    <li <?= header_state('about') ?>><a href="<?= HOME ?>about" >About</a></li>
		    <li <?= header_state('service') ?>><a href="<?= HOME ?>service">Service</a></li>
		  <li <?= header_state('client') ?>><a href="<?= HOME ?>client">Clients</a></li>
		    <li <?= header_state('project') ?>><a href="<?= HOME ?>project">Project</a></li>
		    <!--<li <?= header_state('news') ?>><a href="<?= HOME ?>news">News</a></li>-->
		    <li <?= header_state('contact') ?>><a href="<?= HOME ?>contact">Contacts</a></li>
		</ul> 
	    </div>
	</div>
    </nav>
</header>
