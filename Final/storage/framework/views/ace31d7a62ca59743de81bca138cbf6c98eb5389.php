<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Thank you for looking at Shru's Dance Classes! We assist in all types of
                    dances such as: indian folk, bollywood, hip-hop, ballet, jazz, contempary, salsa, ballroom,
                    and much more! We provide one on one or group lessons at our studio.
                    No matter the age the time is right to dance!
                    <br>
                    


                </div>
                <style type="text/css">
                          body {
                              background-color: gold;
                              }
                  </style>
                  <html>
<body>

  <form action="action_page.php">
    <div class="col-md-offset-2">
      <br>
      <br>
  <fieldset>
    <legend>Fill in the below form for any questions:</legend>
    First name:<br>
    <input type="text" name="firstname" value="">
    <br>
    Last name:<br>
    <input type="text" name="lastname" value="">
    <br><br>
    Email<br>
    <input type="text" name="email" value="">
    <br><br>
    Questions?<br>
    <input type="text" name="email" value="">
    <br><br>
    <input type="submit" value="Submit"><br>
    <br>
    We will contact you within 24 hours!<br>
    <br>
    Thanks for choosing Shru's Dance Classes!
    <br><br>
    <br>
  </fieldset>
</form>

</body>
</html>
            </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>