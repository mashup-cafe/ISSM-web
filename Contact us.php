<?php
if(isset($_POST["txt_email"])){

$to = "mohamedazhar93@gmail.com, sasiood@gmail.com, harivishnuramar@gmail.com";
$subject = "Contact mail";
$from=$_POST["txt_email"];
$msg=$_POST["txt_email"];
$headers = "From: $from";

mail($to,$subject,$msg,$headers);
echo "<script>alert('Subscribed successfully.')</script>";
}
if(isset($_POST['submit']))
{
    $to = "mohamedazhar93@gmail.com,sasioodd@gmail.com,harivishnuramar@gmail.com "; // this is your Email address
    $name = $_POST['Admname']; // this is the sender's Email address
    $address = $_POST['Admaddress'];
    $contactnumber = $_POST['Admcontactnumber'];
    $email = $_POST['Admemail'];
    $score = $_POST['AdmScore'];

    $subject = "Academics Query";
    $message = "Name: ".$name .
    "\n Address:"  .$address.
      "\n Admcontactnumber :" .$Admcontactnumber.
    "\n email :" .$email.
    "\n Score:" .$score;

    $headers = "Academic Enquiry from:" . $from;
    mail($to,$subject,$message,$headers);
    echo "<script>alert('Enquiry Sent. Thank you ' . $name . ', we will contact you shortly.')</script>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <head>
  <title>Contact ISSM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/style.css">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/navbar.css">


  <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

 <link rel="stylesheet" href="MDB-Free/MDB Free/css/mdb.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
 <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/javascript.js"></script>

  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/navbar1.css">
  <!--scroll magic-->
  <script type="text/javascript" src="scroll/js/lib/jquery.min.js"></script>
  <script type="text/javascript" src="scroll/js/lib/highlight.pack.js"></script>
  <script type="text/javascript" src="scroll/js/lib/modernizr.custom.min.js"></script>
  <script type="text/javascript" src="scroll/js/examples.js"></script>

  <script type="text/javascript" src="scroll/js/lib/greensock/TweenMax.min.js"></script>
  <script type="text/javascript" src="scroll/scrollmagic/uncompressed/ScrollMagic.js"></script>
  <script type="text/javascript" src="scroll/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
  <script type="text/javascript" src="scroll/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
  <!--scroll magic-->


 <style>
  span
  {
	  font-family: 'Montserrat', sans-serif;
	  color:#828282;
  }

  li
  {
	  line-height:1.6;
  }

 </style>


 <style>

 @media (min-width: 300px) and (max-width:500px){
 .navbar-toggle .icon-bar
 {
   background-color: red;
 }


 .navbar-brand {
     margin-left: 10px;
     margin-top: -1px;
   }

 .topnav-right {
      float: none;
      height: auto;
 }

 .navbtndivs
 {
   padding-left: 0px;

 }
 .navbtndiv
 {
   margin-left: 0px;
 }

 .navbtndiv::after
 {
   display: none;
 }

 .current>*
 {
   text-decoration: underline;

 }
 .navbar-nav {
   margin-bottom: 40px;
   margin-top: 25px;
     margin-left: 0px;
     text-align: center;
 }



 }

 .navbar-header
 {
   /*height: 55px;*/
 }

 @media (min-width: 1080px) and (max-width:1200px)
 {
   /*.harinavbar
 {
   height: 75px;
 }*/
 }
 </style>



   <script>
        function initMap() {
          var uluru = {lat:12.9761342, lng: 80.2469067};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 19,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
      </script>



     <script async defer
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeSTGdomoWamopl_-RqPwCIMYuw1nStRA&callback=initMap">
     </script>
   }

</head>
<body>
<script> var controller = new ScrollMagic.Controller(); </script>


  <!--nav bar-->
  <div class="container-fluid harinavbar navbar navbar-fixed-top " >
  <div class="container"><div class="topnav navbar-header">


    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar spl"></span>
    </button>
    <a class="navbar-brand" href="#" style=""> <img class="navlogo" src="images/EB2-01.png" ></a>
  </div>

     <div class="collapse navbar-collapse topnav-right" id="myNavbar">
   <ul class="nav navbar-nav" >
           <li class="subnav navbtndivs"><a href="index.php" style="" class="navbtn ">Home</a></li>
            <li style="" class="navbtndiv"><a href="About us.php" class="navbtn subnav"  style="" >About</a></li>
            <li style="" class="navbtndiv"><a href="Acadamics.php"  class="navbtn subnav"  style="">Academics</a></li>
            <li style="" class="navbtndiv"><a href="Admission.php" class="navbtn subnav"  style="">Admission</a></li>
            <li style="" class="navbtndiv"><a href="placement.php" class="navbtn subnav"  style="">Placement</a></li>
            <li style="" class="navbtndiv"><a href="why issm.php" class="navbtn"  style="">Why ISSM</a></li>
            <li style="" class="current navbtndiv"><a href="Contact us.php" class="navbtn subnav"  style="">Get in touch</a></li>
          </ul>

     </div>
   </div></div>

  <!--end nav bar-->


<!--header banner-->
<div class="container-fluid aboutheadbanner marginadjust1" style="" >
<div class="container">
<div class="col-lg-12 col-xs-12 mobilenopad">
<div class="text-center " style="">
<h1 class="aboutheadtxt" style="">
 Today is the day let's bring brilliance together.</h2>
</div>
</div>
</div>
<!--<div class="col-lg-12 col-xs-12">
<div class="abtimagepos">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.933045687319!2d80.2447126507148!3d12.976134190807983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525d6ef468b1a9%3A0x52069238c2411291!2sISSM+Business+School!5e0!3m2!1sen!2sin!4v1520656969384" width="748" height="408" frameborder="0" class="iframecont"  allowfullscreen>
    </iframe>
  </div>
  </div>
  </div>

  </div></div>


-->


  <div class="container contact-map">
  	<div class="col-lg-2 col-sm-2 col-xs-0"></div>
  <div class="col-lg-7 col-xs-12 col-sm-8 ">
  <div class="text-right contactss" style="">
  	<div style="width: 100%">
      <div id="map"></div>
    </div>
      <!--<img src="images/AcademicsAcademics.png" alt="...">-->
  </div>
  </div>
  </div>
</div>

<!--header banner close-->

<div class="container contact-info" >
<div id="bg-con1" class="contactlbl" style="">
  		<p id="bg-tcon1">Contact</p>
	</div>


<div class="col-lg-4 col-xs-12 col-lg-offset-5 contacts mopad" style="">
<h1 style=""> Get in touch </h1>
<p class="cont-para pad15" style="">
<span style="">Address:</span><br>No.34,Venkateswara Colony,<br> 3rd Cross Street,<br> Nehru Nagar, Taramani.<br>Chennai – 600041</p>
<span style="" class="pad15">Landmark: </span>
 <p class="pad15" style="">Near Sun Direct and opposite to <br>Cognizant Technologies</p>
 <span style="" class="pad15"> Email: </span>
 <p style="" class="pad15"> admin@issm.in</p>
 <span style="" class="pad15">Phone number:</span>
 <p style="" class="pad15">+ 91 - 044 - 24540073<br> +91 - 97899 31111</p>
 <p style="" class="pad15">
 <span style="" class=""> Fax: </span>
 <br>+91 - 044 - 43593558</p>
</div>


</div>


<div class="container">
<div id="bg-con2" class="enquirylbl" style="">
  		<p id="bg-tcon2">Enquiry</p>
	</div>
<div class="col-lg-1 col-md-1 col-xs-12 enquiry-form mopad" style="">
<h1  style="">Enquiry Form</h1>

</div>

<div class="col-lg-2 col-md-2 col-xs-0">
</div>



<div class="col-lg-6 col-md-6 enquirybox" style="">

<form method="post" action="">

  <div class="form-group" >
    <label style="" class="acadlabel">Name</label>
    <input type="Name" class="form-control admbox" id="admname" name="admname" aria-describedby="Name" placeholder="Enter your name" style="">
   </div>

  <div class="form-group">
    <label style="" class="acadlabel">Address</label>
    <input type="Address" class="form-control admbox" id="Admaddress" name="Admaddress" placeholder="Address" style="">
  </div>

  <div class="form-group">
   <label style="" class="acadlabel">Contact number</label>
    <input type="Address" class="form-control admbox" id="Admcontactnumber" name="Admcontactnumber" placeholder="Contact number" style="border-color:#F65E5E; border-color:#F65E5E; padding-top:17px; padding-left:30px; padding-bottom:17px; color: rgba(130,130,130,.55);font-family: 'Open Sans', sans-serif;">
  </div>


   <div class="form-group">
    <label style="" class="acadlabel">Email ID</label>
     <input type="Address" class="form-control admbox" id="Admemail" name="Admemail" placeholder="Email ID" style="border-color:#F65E5E; border-color:#F65E5E; padding-top:17px; padding-left:30px; padding-bottom:17px; color: rgba(130,130,130,.55);font-family: 'Open Sans', sans-serif;">
  </div>

  
  <button class="btnc btncas btncpos" style="" value="Submit" type="submit">Submit</button></form>
</div>

</div>
<!--end form section-->




<!--footer-->

<div class="container-fluid footersec" style="">
<div class=" container">
<div class="col-lg-3 col-md-3 col-xs-12 footerlogodiv nopad" style="">
<img src="images/footlogo.png" class="footerlogoimg">
</div>

<div class="col-lg-2 col-md-2">
</div>


<div class="col-lg-3 col-md-3 col-xs-12 footercentersec"  style="">

<h3 class="footerhead"> CONTACT US</h3>
<p style="" class="footerpara fpara1">
	No.34,Venkateswara Colony,<br> 3rd Cross Street, <br>Nehru Nagar, Taramani.<br> Chennai – 600041</p><p style="" class="footerpara fpara2"> admin@issm.in </p><p style=" " class=" footerpara fpara2">+ 91 - 044 - 24540073<br> +91 - 97899 31111</p>

</div>



<div class="col-lg-4 col-md-4 col-xs-10 footerright nopad" style="">
<h3 style="" class="footerhead">SUBSCRIBE</h3>
<p  class="footerpara fpara1" style="">Enter your email to get notified about<br> our events & admission</p>
 <div class="form-group">
      <input type="email" class="form-control footbox" id="email" placeholder="Enter your email id" name="email" style=""/>
<button class="btncb btnpositionfooter btnnew" name="submit" type="submit" style=" " value="submit">Submit</button>

  </div>
  <i class="fa fa-facebook"></i>
  <i class="fa fa-instagram"></i>
    </div>








</div>






<div class=" container" style="margin-top:32px;">
<hr>
<div class="col-lg-3 col-md-3 nopad" >
<p class="bottompara copyfoot" style="">© 2018 ISSM, All rights reserved.</p>
</div>
<div class="col-lg-4 col-md-4">
</div>

<div class="col-lg-5 col-md-5 nopad footcop" >
<p class="bottompara compfoot" style="">Designed & Developed by OUT OF DABBA CREATIVES</p>
</div>



</div>
</div>

<!--end footer-->




<script>
   	var scene = new ScrollMagic.Scene({triggerElement: "#bg-con1", duration: 1000})
                    // animate color and top border in relation to scroll position
                    .setTween("#bg-con1",{ marginLeft:600
                     }) // the tween durtion can be omitted and defaults to 1
//                    .addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                    .addTo(controller)
                    .triggerHook("onEnter")
                    .triggerHook(0.6);
	var scene = new ScrollMagic.Scene({triggerElement: "#bg-con2", duration: 1000})
                    // animate color and top border in relation to scroll position
                    .setTween("#bg-con2",{ marginLeft:400
                     }) // the tween durtion can be omitted and defaults to 1
                   // .addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                    .addTo(controller)
                    .triggerHook("onEnter")
                    .triggerHook(1);
 if ($( window ).width() < 1114)
  {
  controller.enabled(false);
  }


</script>

</body>
</html>
