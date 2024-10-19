<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
    <link rel="stylesheet" href="mycss/contactus.css">
</head>
<body>
    <header class="bg-warning text-center py-3 m-0">
        <div class="container">
          <h1 class="fw-light text-white"> <img src="img/foodlogo.jpg" alt="..." height="54"> Meet the Team</h1>
        </div>
      </header>

    <div class="contact_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/office/24/000000/iphone.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Phone</div>
                                <div class="contact_info_text"><a href="tel:+916969696969"> 6910869108</a></div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/ultraviolet/24/000000/filled-message.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Email</div>
                                <div class="contact_info_text"><a href="mailto:contactfooder@gmail.com">contactfooder@gmail.com</a></div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/ultraviolet/24/000000/map-marker.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Address</div>
                                <div class="contact_info_text">EM-4/2, SECTOR 5,KOLKATA- 700 091</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form -->

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Get in Touch</div>

                        <form action="#" id="contact_form" method="POST">
                            <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                <input type="text" id="contact_form_name" name="name" class="contact_form_name input_field" placeholder="Your name" required="required" data-error="Name is required.">
                                <input type="text" id="contact_form_email" name="email" class="contact_form_email input_field" placeholder="Your email" required="required" data-error="Email is required.">
                                <input type="text" id="contact_form_phone" name="phone" class="contact_form_phone input_field" placeholder="Your phone number">
                            </div>
                            <div class="contact_form_text">
                                <textarea id="contact_form_message" class="text_field contact_form_message" name="msg" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                            </div>
                            <div class="contact_form_button">
                                <button type="submit" name="submit" class="button contact_submit_button">Send Message</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div><br><br><div class="text-center"><a href="index.php">Home</a></div><br><br><br>
        <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <footer class="page-footer font-small blue bg-warning bg-opacity-75">
        
                  <div class="footer-copyright text-center py-2">
                    <img src="img/foodlogo.jpg" alt="..." height="45">
                    © 2022 Copyright:
                    OrderEat.inc</a>
                  </div>
                </footer>
              </div>
            </div>
          </div>
    </div>

</body>
</html>

<?php
      include('db_connect.php');
      if (isset($_POST['submit']))
      {
          $name=$_POST['name'];
          $phone=$_POST['phone'];
          $email=$_POST['email'];
          $msg=$_POST['msg'];
         
          $sql="insert into contact_us (name,email,phoneno,message) values ('$name','$email','$phone','$msg')";

          $query=mysqli_query($con,$sql);
          
       }
       
  ?>