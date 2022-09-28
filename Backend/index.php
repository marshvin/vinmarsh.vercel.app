<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.js">  
        <title>vincentmarsh</title>
        <link rel="stylesheet" href="styles.css" />
        <script src="https://kit.fontawesome.com/64b6e3e86b.js" crossorigin="anonymous"></script>
    
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
 <body>
   
    <h1 class="h1c"> Get in touch</h1>
    <section class="get-in-touch">
        <h1 class="title">Send a message</h1>
        <form class="contact-form row" name="frmContact" action="insert.php" method="post">
           <div class="form-field col-lg-6">
              <input id="txtName" name="txtName" class="input-text js-input" type="text" required>
              <label class="label" for="Name">Name</label>
           </div>
           <div class="form-field col-lg-6 "> 
              <input id="txtEmail" name="txtEmail" class="input-text js-input" type="text" required>
              <label class="label" for="Email">E-mail</label>
           </div>

            <div class="form-field col-lg-6 ">
              <input id="txtPhone" name="txtPhone" class="input-text js-input" type="text" required>
              <label class="label" for="Phone">Contact Number</label>
           </div>
           <div class="form-field col-lg-12">
              <input id="txtMessage" name="txtMessage" class="input-text js-input" type="text" required>
              <label class="label" for="Message">Message</label>
           </div>
           <button type="submit" name="Submit" id="Submit" class="btn btn-success"> Submit</button>
        </form>
     </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>    
 </body>
   
</html>