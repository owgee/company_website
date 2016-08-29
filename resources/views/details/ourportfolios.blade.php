@include('includes.header')

<div class="jumbotron" id="jumbotron-top">
    <div class="container text-center">
        <h1>Our Portfolios</h1>
        <p>Every day , we help our customers move their business forward.</p>
    </div>
</div>

<div class="container-fluid bg-portfolio text-center">
            <h3>Our Products</h3><br>
            <div class="row">
                       <div class="col-sm-3">
                           <div class="thumbnail port">
                               <img src="<?= photo() ?>/laravel.png" alt="Paris" width="400" height="300">
                               <p><strong>Prayer Request</strong></p>
                               <p class="text-center">Online prayer request application that allow
                                people to share prayer and pray one another. </p>
                                <a href="<?= route('prayer'); ?>" target="_blank" >Explore</a>
                           </div>
                       </div>
                       <div class="col-sm-3">
                           <div class="thumbnail port">
                               <img src="<?= photo() ?>/codeigniter.png" alt="New York" width="400" height="300">
                               <p><strong>Prepaid Energy Meter Remote Recharging</strong></p>
                               <p>A system that will allow keypad prepaid meters to remotely recharge
                               and receive SMS notification via their phones without being
                               in physical contact or nearby a meter</p>
                               <a href="#">Explore</a>
                           </div>
                       </div>
                       <div class="col-sm-3">
                           <div class="thumbnail port">
                               <img src="<?= photo() ?>/ionic-frame.png" alt="San Francisco" width="400" height="300">
                               <p><strong>Hotleo</strong></p>
                               <p>This is a web application that automatically fetches real time
                                news from all reputable sources including BBC, CNN and Aljazeer
                                and display them in one for someone to easily read.</p>
                                <a href="<?= route('hotleo'); ?>" target="_blank">Explore</a>
                           </div>
                       </div>
                       <div class="col-sm-3">
                           <div class="thumbnail port">
                               <img src="<?= photo() ?>/codeigniter.png" alt="San Francisco" width="400" height="300">
                               <p><strong>karibuSMS</strong></p>
                               <p>Advertising and promotion, SMS platform, that let
                                you send SMS notifications easily to customers
                                inform them about your services/products.</p>
                                <a href="<?= route('karibusms'); ?>" target="_blank">Explore</a>
                           </div>
                       </div>
              </div>
        </div>

<div class="jumbotron">
    <div class="container text-center">
        <h3>Our Projects</h3>
        <p>project that are developed by inets company ltd</p>
    </div>
</div>

<div class="container-fluid bg-portfolio text-center">
<br>
                  <div class="row">

                       <div class="col-sm-3" >
                           <div class="thumbnail port">
                               <img src="<?= photo() ?>/laravel.png" alt="Paris" width="400" height="300">
                               <p><strong>Prayer Request</strong></p>
                               <p class="text-center">Online prayer request application that allow
                                people to share prayer and pray one another. </p>
                                <a href="<?= route('prayer'); ?>" target="_blank" >Explore</a>
                           </div>
                       </div>
                       <div class="col-sm-3">
                           <div class="thumbnail port">
                               <img src="<?= photo() ?>/codeigniter.png" alt="New York" width="400" height="300">
                               <p><strong>Prepaid Energy Meter Remote Recharging</strong></p>
                               <p>A system that will allow keypad prepaid meters to remotely recharge
                               and receive SMS notification via their phones without being
                               in physical contact or nearby a meter</p>
                               <a href="<?= route('meter'); ?>" target="_blank">Explore</a>
                           </div>
                       </div>
                       <div class="col-sm-3">
                           <div class="thumbnail port">
                               <img src="<?= photo() ?>/ionic-frame.png" alt="San Francisco" width="400" height="300">
                               <p><strong>Hotleo</strong></p>
                               <p>This is a web application that automatically fetches real time
                                news from all reputable sources including BBC, CNN and Aljazeer
                                and display them in one for someone to easily read.</p>
                                <a href="<?= route('hotleo'); ?>" target="_blank">Explore</a>
                           </div>
                       </div>
                       <div class="col-sm-3">
                           <div class="thumbnail port">
                               <img src="<?= photo() ?>/codeigniter.png" alt="San Francisco" width="400" height="300">
                               <p><strong>karibuSMS</strong></p>
                               <p>Advertising and promotion, SMS platform, that let
                                you send SMS notifications easily to customers
                                inform them about your services/products.</p>
                                <a href="<?= route('karibusms'); ?>" target="_blank">Explore</a>
                           </div>
                       </div>
                  </div>

                  </div>
                     <hr>
                   <div class="container-fluid text-center">
                           @include('includes.footer')
                           </div>








