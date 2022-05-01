<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course</title>
    <link rel="stylesheet" href="CSS/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   

</head>
<body>
    <!-- navbar -->

    <?php
        $selected = "contact";
        $current_id = ' class="active"';
        include "nav.php";
    ?>
     <!-- Home -->

     <section id="about-home">
        <h2>Contact us</h2>
    </section>

     <!-- Contact -->

     <section id="contact">
         <div class="getin">
             <h2>Get in touch</h2>
             <p>Looking for help? Fill the form and start a new journey.</p>

            <div class="getin-details">
             <h3>Headquaters</h3>
             <div>
                 <i class="far fa-home get"></i>
                 <p>Chetana college :)</p>
             </div>
            
             <h3>Phone</h3>
             <div>
                 <i class="fas fa-phone-alt get"></i>
                 <p>(+91) 987654321 <br> (+91) 987654321  </p>
             </div>
                
             <h3>Support</h3>
                <div>
                 <i class="fal fa-envelope-open-text get"></i>
                 <p>skillsharp@support.com <br> help@skrp</p>
                </div>
             <h3>Follow us</h3>
                <div class="pro-links">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>    
         </div>
         

<div class="form">

            <h4>Contact Us</h4>
            <p>Feel free to contact us.</p>
            <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                        <form action="contact/mail.php" method="post">

            <div class="form-row">
            
                <input name="UName" type="text" placeholder="Your name" required>
                <input  name="Email" type="email" placeholder="email" required>
            </div>
            <div class="form-col">
                <input name="Subject" type="text" placeholder="Subject" required>
            </div>
            <div class="form-col">
                <textarea name="msg" id="" cols="30" rows="8" placeholder="How can we help?"></textarea>
            </div>
            <div class="form-col">
                
                
                <button class="btn btn-success" name="btn-send"> Send </button>
            </div>

            </form>
        </div> 
     </section>

     <section id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.06272512201!2d72.84601861534011!3d19.060979587096533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9000496fab9%3A0x225542a39da6c430!2sChetana&#39;s%20Institute%20of%20Management%20%26%20Research!5e0!3m2!1sen!2sin!4v1649331236686!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </section>

   
    <!-- Footer -->

    <?php
    include "footer.php";
    ?>

</body>
</html>