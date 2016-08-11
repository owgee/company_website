@include('includes.header')


@include('includes.topslider')


<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h3>SERVICES</h3>
  <h4>The solutions you need to succeed.</h4>
  <br>
  <div class="row slideanim slideborder">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-phone logo-small"></span>
      <h4>Mobile Apps</h4>
      <p>We develop,design and deploy <br/>android,iphone ,windows mobile apps</p>
      <a href="<?= route('mobile'); ?>">Explore</a>
    </div>
    <div class="col-sm-4 slideborder">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>Payment Integration</h4>
       <p>We develop,design and deploy <br/>android,iphone ,windows mobile apps</p>
       <a href="<?= route('payment'); ?>">Explore</a>
    </div>
    <div class="col-sm-4 slideborder">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>Linux Systems</h4>
       <p>We develop,design and deploy <br/>android,iphone ,windows mobile apps</p>
       <a href="<?= route('linux'); ?>">Explore</a>
    </div>
  </div>
  <br><br>
  <div class="row slideanim ">
    <div class="col-sm-4 slideborder" >
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>Enterprise Software</h4>
      <p>We develop,design and deploy <br/>android,iphone ,windows mobile</p>
      <a href="<?= route('software'); ?>">Explore</a>
    </div>
    <div class="col-sm-4 slideborder">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>Database Design</h4>
       <p> We develop,design and deploy <br/>android,iphone ,windows mobile</p>
       <a href="<?= route('database'); ?>">Explore</a>
    </div>
    <div class="col-sm-4 slideborder">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">Website Design</h4>
       <p>We develop,design and deploy <br/>android,iphone ,windows mobile</p>
       <a href="<?= route('website'); ?>">Explore </a>
    </div>
  </div>


</div>



@include('includes.portfolio')

@include('includes.testimonialslider')

@include('includes.technology')


<!--partners-->



    <div class="container-fluid text-center bg-partner">
        <h2 class="partner">Our Partners</h2><br>
        <h4 class="partner">We collaborate with the following companies and institutions </h4>
        <div class="row  slideanim">
            <div class="col-sm-2" >

            </div>
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
                <div class="thumbnail">
                <a href="<?= route('costech'); ?>" target="_blank">
                    <img src="<?= photo() ?>/thecostech.png" alt="San Francisco" width="400" height="300">
                    <p><strong>COSTECH</strong></p>

                    </a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="thumbnail">
                <a href="<?= route('rigel'); ?>" target="_blank">
                    <img src="<?= photo() ?>/rigellogos.png" alt="San Francisco" width="400" height="300">
                    <p><strong>RIGEL NETWORK</strong></p>

                    </a>
                </div>
              </div>
            <div class="col-sm-2">
             </div>
            <div class="col-sm-2">

            </div>
        </div>

        </div>

        <hr>
        <div class="container-fluid text-center">
        @include('includes.footer')
        </div>


<!-- end partners-->


