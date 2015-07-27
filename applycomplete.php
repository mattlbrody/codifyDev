<?php  include('head.php');  ?> 
  
<body>
  
  <?php  include('social.php');  ?> 
  <?php  include('header.php');  ?> 

  <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1 h1course">APPLICATION SUBMITTED!</h1>
            </div>
        </div>
    </div>
  </div>

  <!-- <div class=" row rowwidth">
    <div class="col-lg-2 col-lg-offset-1">
        <div class="circleimage">
          <img src="demos/sam.jpg" class="img-circle" style="height:116px" "width:116px"/>
        </div>
    </div>
    <div class="col-lg-9">
      <h2>Questions about the process?<h2>
      <h3>Give Sam a ring, <a href="tel:5185214189">(518) 521-4189</a></h3>
    </div>
  </div>
  <br>
  <hr> -->

  <div class="container rowwidth">
    <form accept-charset="UTF-8" action="https://formkeep.com/f/618ef2a75979" method="POST">
      <div class="row">
          <h4 style="font-weight:bold; font-style:italic;">Admissions for classes are done on a rolling basis, so the earlier you apply, the better.</h4>
      </div>

      <!-- Basic Info -->
      <div class="row">
          <h2>Basic Information</h2>
          <label>*Full Name:</label>
          <input required type="text" name="Full Name" class="formfield form-control">

          <label>*Email:</label>
          <input required type="email" name="Email" class="formfield form-control">
          <br>

          <label>*Phone Number:</label>
          <input required type="text" name="Phone Number"class="formfield form-control">
      </div>

      <!-- CITY -->
      <!-- <div class="row">
          <h2>Which city would you like to attend?</h2>
          <input type="radio" name="City" value="Manhattan Class"> Manhattan - 25 Broadway, New York, NY 10004
          <br>
          <input type="radio" name="City" value="San Francisco Class"> San Francisco - 156 2nd Street, San Francisco, CA 94105
      </div> -->

      <!-- Application Questions -->
      <div class="row"> 
        <h2> Application Questions</h2>
        <label>Why are you applying to Codify Academy?</label>
        <textarea name="Why Apply?" class="formfield1 form-control"></textarea>
        <br>
        <label>The ability to think in a structured way, both creatively and quantitatively, to solve complex problems is an important element of being a successful developer. Can you tell us anything that demonstrates your abilities in that realm? <br> (anything from standardized test scores to experience playing a musical instrument counts) *</label>
        <textarea name="Student Ability" class="formfield1 form-control"></textarea>
        <br>
        <label>Do you have any previous coding experience? (Knowing your starting point will help us better craft your learning experience.)</label>
        <textarea name="Previous Experience" class="formfield1 form-control"></textarea>
        <br>
        <label>Is there anything else you'd like us to know?</label>
        <textarea name="Anything Else" class="formfield1 form-control"></textarea>
      </div>


      <div class="row">
        <input type="hidden" name="utf8" value="✓">
        <button class="button large" type="submit">Submit Application</button>
      </div>
    </form>
  </div>
 
  <?php include('footer.php');?>

</body>
</html>