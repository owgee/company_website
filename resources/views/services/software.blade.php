  @include('includes.header')
  <!DOCTYPE>
  <html>
  <head>
  <style>
  hr{
      width: 70px;
      height: 5px;
      background-color:black;
  }

  </style>
  </head>
  <body>

  <div class="container-fluid">
            <div class="row">
                 <img src="<?= photo() ?>/room1.jpg" class="img-responsive" style="margin-top: heignt:200px 30px; width: 100%;" alt="mobile apps">
            </div>
        <div class="row">
           <div class="col-sm-3"></div>
           <div class="col-sm-6">
              <h3 class="text-center">Enterprise software Design and Development</h3>
                <p>In INETS we know that a Great Software Design with the best
                Experience and professional standards Is critical to any organization’s
                success.</p>
                <p class="text-center" >Our enterprise solutions include</p>
                <hr>
           </div>
           <div class="col-sm-3"></div>
        </div>

             <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                   <div class="thumbnail">
                     <img src="" class="img-responsive">
                     <p><strong>Custom software design  for management, control and operation.
                                 </strong></p>
                   </div>
                </div>
                <div class="col-sm-2">
                   <div class="thumbnail">
                     <img src="" class="img-responsive">
                     <p><strong>Software installation and integration
                     with existing software systems.
                              </strong></p>
                   </div>
                </div>

                <div class="col-sm-2">
                   <div class="thumbnail">
                     <img src="" class="img-responsive">
                     <p><strong>Dynamic and Static Website design and development.

                              </strong></p>
                   </div>
                </div>

                <div class="col-sm-2">
                   <div class="thumbnail">
                     <img src="" class="img-responsive">
                     <p><strong>Web hosting services and security features configuration


                                 </strong></p>
                   </div>
                </div>
                <div class="col-sm-2"></div>
             </div>



                          <div class="row">
                           <h3 class="text-center payment-title" >Software installation and integration with existing software systems </h3>
                           <hr>
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">
                                <div class="thumbnail">
                                  <img src="<?= photo() ?>/room1.jpg" alt="check" class="img-responsive ">
                                </div>
                              </div>
                              <div class="col-sm-4">
                                  <p>We design management software/systems from scratch
                                   using best known software development standards
                                   taking into consideration all the user requirements
                                   </p>
                              </div>
                              <div class="col-sm-2"></div>
                          </div>


                <div class="row">
                       <div class="col-sm-2"></div>
                       <div class="col-sm-4">
                       <div class="thumbnail ">
                             <p>We believe that every software that is developed
                              should be able to communicate with other software
                              systems.
                               </p>
                       </div>
                       </div>
                        <div class="col-sm-4">
                           <div class="thumbnail">
                             <img src="<?= photo() ?>/room1.jpg" alt=check software>
                           </div>
                         </div>

                       <div class="col-sm-2"></div>
                </div>
       </div>

   <div class="container-fluid text-center">
              @include('includes.footer')
              </div>







