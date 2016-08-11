 @extends('includes.header')

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
      <img src="<?= photo() ?>/room1.jpg" class="img-responsive" style="margin-top: 30px; width: 100%;" alt="mobile apps">
          </div>
 </div>

     <div class="container-fluid">

<!--start Payment -->
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
               <div class="text-center">
               <h3 class="payment-title">Introduction</h3>
                <p class="service_desc">Integrated payment solution is to improve effectiveness
                in Payment Process and Payment Reconciliation
                </p>
                <hr>
                 </div>
            </div>
             <div class="col-sm-4"></div>
        </div>

        <div class="row">
             <div class="col-sm-2"> </div>
             <div class="col-sm-4">
             <h4 class="payment-title">First Step</h4>
                 <p>User visit a bank BRANCH and deposit amount of money
                 requested to a specified institution BANK NUMBER and get
                 a BANK paying slip.</p>
             </div>

             <div class="col-sm-4">
             <div class="thumbnail">
              <img src="<?= photo() ?>/room1.jpg" class="img-responsive myimg"/>
             </div>
                          </div>

             <div class="col-sm-2"> </div>

        </div>

        <div class="row">
         <div class="col-sm-2"> </div>

          <div class="col-sm-4">
                  <div class="thumbnail">
                   <img src="<?= photo() ?>/room1.jpg" class="img-responsive myimg"/>
                  </div>
              </div>
         <div class="col-sm-4">
         <h4 class="payment-title">Second Step</h4>
             <p> User finds a bursar/accountant office and
              submit a bank paying slip. Bursar / accountant take that
               BANK paying slip and provide back institutional receipt.</p>
         </div>

         <div class="col-sm-2"> </div>

                </div>



            <div class="row">
             <div class="col-sm-2"> </div>
             <div class="col-sm-4">
             <h4 class="payment-title">Third Step</h4>
                 <p>Bursar /accountant reconcile the amount
                   received from received BANK paying slips with the
                   amount received in organization BANK Account and close
                   transactions.</p>
             </div>

             <div class="col-sm-4">
             <div class="thumbnail">
              <img src="<?= photo() ?>/room1.jpg" class="img-responsive myimg"/>
             </div>
                          </div>

             <div class="col-sm-2"> </div>

           </div>

           <!-- end of Payment -->

                 <div class="row">

                     <h3 class="text-center payment-title">The Problem</h3>
                        <p class="service_desc text-center">The solutions you need to succeed
                        </p>
                        <hr>
                        <div class="col-sm-1"> </div>
                     <div class="col-sm-5">
                          <div class="steps">
                            <h4 class="payment-title">Inaccurate and hard methods  in reconciliation
                                </h4>
                            <p class="service_desc">
                            Reconciliation require physical comparison
                            of data from what appear in organization to those
                            appears in bank. As number of users continue to grow,
                             this process continue to be hard and un accurate
                            </p>
                          </div>

                      </div>
                        <div class="col-sm-5">
                          <div class="steps">
                             <h4 class="payment-title">Forgery
                                 </h4>
                             <p class="service_desc">
                            With the current process, users can
                            forge BANK paying slip and submit to bursar/accountant
                             and even bursar can forge a receipt and provide to user
                              without any organization notice.

                             </p>
                          </div>

                          </div>
               <div class="col-sm-1"></div>
                      </div>



                  <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                          <div class="steps">
                      <h4 class="payment-title">Low Data Security
                                                 
                          </h4>
                      <p class="service_desc">
                     With the current process, when one proprietary
                     software crash or computer (server) crash, the chance
                      of loosing all organization data is high
                      

                      </p>
                   </div>

                        </div>
                        <div class="col-sm-5">

                        </div>
                        <div class="col-sm-1"></div>

                  </div>


                <div class="row">
                 <h3 class="text-center payment-title">Our solution </h3>
                 <p class=" text-center">The solutions you need to succeed </p>
                 <hr>
                   <div class="col-sm-2"></div>
                       <div class="col-sm-4">
                          <div class="thumbnail  soln ">
                              <img src="<?= photo() ?>/petit.png"  alt="solution"class="img-responsive">
                          </div>
                       </div>
                       <div class="col-sm-4">
                          <h3 class="payment-title">What is this?</h3>
                         <p class="service_desc">
                              Is the integrated software approach with
                               core banking system  provided by INETS Company
                                which automate the payment process
                              </p>

                         </div>
                          <div class="col-sm-2"></div>
                   </div>



                <div class="row">
                 <h3 class="text-center payment-title">Benefits of this solution</h3>
                   <hr/>
                     <div class="col-sm-2"></div>
                     <div class="col-sm-4">
                        <div class="steps">
                          <h4 class="payment-title">No manual receipt generation </h4>
                          <p class="service_desc"><span class="glyphicon glyphicon-chevron-right"></span>
                          System removes the process of bank slip submission
                          to cashier/bursar. Upon each payment, user will be
                          issued with electronic receipt
                          </p>
                          </div>
                      </div>

                      <div class="col-sm-4">
                            <div class="steps">
                            <h4 class="payment-title">Easy in reconciliation
                             </h4>
                            <p class="service_desc"><span class="glyphicon glyphicon-chevron-right"></span>
                            With this system, reconciliation with bank
                            is just a process of looking into the statistics
                             provided.  No forgery can be done by any part
                             since software communicate  with other software
                             with no human intervention

                            </p>
                            </div>
                            </div>
                        <div class="col-sm-2"></div>
                            </div>


                  <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-4">
                      <div class="steps">
                      <h4 class="payment-title">Flexibility in payment
                           </h4>
                      <p class="service_desc"><span class="glyphicon glyphicon-chevron-right"></span>
                      Users can pay with different banking channels
                      including BANK MOBILE banking (e.g SIM BANKING, BANK
                       branch, BANK agents and other means. In all cases,
                        the system work the same

                      </p>
                      </div>
                  </div>
                  <div class="col-sm-4"></div>
                   <div class="col-sm-2"></div>
                  </div>

            <div class="row">
            <h3 class="text-center payment-title">Our Case Studies</h3>
            <hr>
                <div class="col-sm-2"></div>
                <div class="col-sm-4 ">
                   <div class="thumbnail  ">
                       <p><strong>BRELA</strong></p>
                       <p >On the system developed by INETS COMPANY LIMITED personnel,
                        <a href=" htttps://ors.brela.go.tz" target="_blank">htttps://ors.brela.go.tz</a> , the system was integrated with
                        this approach and remove all manual  payment process.
                        </p>


                   </div>
                </div>
                <div class="col-sm-4 ">
                 <div class="thumbnail ">

                   <p><strong>PSPF</strong></p>
                  <p >Our payment solution can be extended to allow
                  users to pay via Debit /Credit Cards and also to pay via
                   PayPal as done to PSPF
                     </p>


               </div>

                </div>
                <div class="col-sm-2"></div>
            </div>






 </div>

 <div class="container-fluid text-center">
        @include('includes.footer')
        </div>

