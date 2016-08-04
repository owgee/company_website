
<div  style="margin-top: 58px">

  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="<?= photo() ?>/room1.jpg" alt="KaribuSMS" width="460" height="345">
        <div class="carousel-caption">
          <h3>KaribuSMS</h3>
          <p>Advertising and promotion, SMS platform, that let you
           send SMS notifications easily to customers
           inform them about your services/products.</p>
        </div>
      </div>

      <div class="item">
        <img src="<?= photo() ?>/room1.jpg" alt="ShuleSoft" width="460" height="345">
        <div class="carousel-caption">
          <h3>ShuleSoft</h3>
          <p>ShuleSoft is the system for school management with payment
          integration</p>
        </div>
      </div>

      <div class="item">
        <img src="<?= photo() ?>/room1.jpg" alt="file tracking" width="460" height="345">
        <div class="carousel-caption">
          <h3>File Tracking System</h3>
          <p>This is the system for managing file in the various institutions</p>
        </div>
      </div>

      <div class="item">
        <img src="<?= photo() ?>/room1.jpg" alt="Staytz" width="460" height="345">
        <div class="carousel-caption">
          <h3>Staytz</h3>
          <p>StayTz is the android application for finding various apartment and hotels</p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();

    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });

    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>
