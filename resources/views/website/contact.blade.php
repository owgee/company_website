@include('includes.header')

 <div class="jumbotron" style="height: 400px" id="jumbotron-top">
    <div class="container text-center">
        <h1 style="font-size: 25px; margin-top: 50px;">Contact Us</h1>
        <p>We’re here to help move your business forward.</p>
    </div>
 </div>

<div class="container-fluid contact">

    <div class="row">

      <div class="col-sm-6" style="margin-left: 30px" >

        <h1 style="font-size: 28px;">Connect with Us</h1>

        <p>Our product experts are available to help
         you find the right solution to meet your organization’s specific needs.
         Please complete the form and a member of our team will call you.</p>
         <p>NOTE: This service is available between 0800 hours to 1900 hours. EAT for customers located in the Tanzania,Kenya,Uganda,Rwanda and Burundi. For customers in other countries,
         we will call you as soon as possible.</p>
         <p>Want to get in touch sooner? Call<b> +255 655 406 004.</b></p>
         <p>Need more help? You can also <a href="#">contact support</a> </p>

      </div>

      <div class="col-sm-4" style="margin-top: 20px">
        <form role="form" class="form">
        <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" name="firstname">
        </div>

         <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" name="lastname">
                </div>

          <div class="form-group">
               <label for="email">Email Address</label>
              <input type="email" class="form-control" name="email">
            </div>

             <div class="form-group">
                <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone">
                            </div>

             <div class="form-group">
                <label for="firslname">How can we help you?</label>
                </div>
              <div class="form-group">
             <textarea class="form-control"></textarea>
                 </div>
              <button type="submit" class="btn btn-default " id="btn-submit">Submit</button>

             </form>
        </div>
        <div class="col-sm-2"></div>

      </div>

    </div>
     <hr>
      @include('includes.footer')



