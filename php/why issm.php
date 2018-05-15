<?php
if(isset($_POST["txt_email"])){

$to = "mohamedazhar93@gmail.com,sasioodd@gmail.com,harivishnuramar@gmail.com";
$subject = "Contact mail";
$from=$_POST["txt_email"];
$msg=$_POST["txt_email"];
$headers = "From: $from";

mail($to,$subject,$msg,$headers);
echo "<script>alert('Subscribed successfully.')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Why ISSM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="MDB-Free/MDB Free/css/mdb.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/navbar1.css">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/style.css">


  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
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
  <!--first section-->



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

 .navbar-nav
 {
   margin-bottom: 40px;
   margin-top: 25px;
     margin-left: 0px;
     text-align: center;
 }

 .whyhead1

 {
	 font-size:29px;

    text-align: center;
 }

 .innercard
 {
	    padding: 50px;
      padding-top: 50px;
      padding-bottom: 50px;
}




 .navbar-header
 {
  /*height: 55px;*/
 }
}
 @media (min-width: 1080px) and (max-width:1200px)
 {

/*   .harinavbar
 {
   height: 75px;
 }
*/
 }





 </style>


</head>

<body>

<!--<nav class="navbar navbar-default">-->







<!--nav bar-->
<div class="container-fluid harinavbar navbar navbar-fixed-top " >
<div class="container"> <div class="topnav navbar-header">


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
          <li style="" class=" navbtndiv"><a href="Admission.php" class="navbtn subnav"  style="">Admission</a></li>
          <li style="" class="navbtndiv"><a href="placement.php" class="navbtn subnav"  style="">Placement</a></li>
          <li style="" class="current navbtndiv"><a href="why issm.php" class="navbtn"  style="">Why ISSM</a></li>
          <li style="" class="navbtndiv"><a href="Contact us.php" class="navbtn subnav"  style="">Get in touch</a></li>
        </ul>

   </div>
 </div></div>
</div>
  <!--end nav bar-->











  <!--header-->
<div class="container-fluid marginadjust" style="background-color: #084795;" >
  <div class="container">
  <div class="col-lg-7 col-xs-12 col-xs-offset-0 col-md-offset-0 whyfluid mopad">
  <h1 class="whyhead1 mobitextcenter" style="">10 Reasons to Choose Indian School of Science & Management</h1>

  </div>
</div>
</div>

<!--end header-->

<script>
            // init controller
            var controller = new ScrollMagic.Controller();
          </script>

<div class="container pos3" style="">
<!-- 1 row -->
<div class="row  " id="" style=" margin-left:0px;margin-right:0px;">
<div class="col-lg-1 col-md-1 col-xs-0" >
</div>
  <div class="col-lg-5 col-md-5 col-xs-12">

      <div class="card firstleftcard slidetoright" id="leftcard1" style="font-family: 'Montserrat', sans-serif;">
      <h1 class="cardnumber" style="">1</h1>
     <div class="innercard" style=" ">
        <div class="card-block">
       <h2 class="card-title incard" style="">100% Placement (job) guaranteed
</h2>
          <br>
          <p class="card-text" style="">
          We have successfully made placements for 8 years. Around 1500 students have
got satisfied placement till now.</p>
       </div></div>
     </div>
   </div><div class="col-lg-5 col-md-5 col-xs-12">

      <div class="card firstrightcard slidetoright" id="rightcard1" >
      <h1 class="cardnumber" style="font-family: 'Montserrat', sans-serif;" >2</h1>
     <div class="innercard">
        <div class="card-block">
       <h2 class="card-title incard" style="">Quality Education Assured </h2>
          <br>
          <p class="card-text" style="">Our pattern of education meets up his/her education and corporate standards.</p>
       </div></div>
     </div>
   </div>
   </div><!-- 2 row -->
<div class="row " style="margin:0px">
   <div class="col-lg-1 col-md-1">
   </div>
     <div class="col-lg-5 col-md-5 col-xs-12">

      <div class="card leftcard " id="leftcard2"  style=""> <h1 class="cardnumber" style="font-family: 'Montserrat', sans-serif;">3</h1>
     <div class="innercard">
        <div class="card-block">
         <h2 class="card-title incard"  style="">Training under 32 Criteria each Semester

</h2>
          <br>
          <p class="card-text" style="">Training for both Educational and soft skill development.
</p>
       </div>
     </div></div>
   </div>
  <div class="col-lg-5 col-md-5 col-xs-12">

      <div class="card rightcard  " id="rightcard2" style=""> <h1 class="cardnumber" style="font-family: 'Montserrat', sans-serif;" >4</h1>
     <div class="innercard">
        <div class="card-block">
          <h2 class="card-title incard"  style="text-align:left; color:#084795; font-family: 'Montserrat', sans-serif; font-size:25px; font-weight:700;">Practical exposure through “AIM”.
</h2>
          <br>
          <p class="card-text" style="font-size:16px; color:#828282; text-align:left; font-family: 'Open Sans', sans-serif;">
Through AIM we have trained almost 10,00,000 students in south India. This training helps the students to compete in the competitive world.
</p>
       </div></div>
     </div>
   </div>
   </div>
   <!-- 3 row -->
   <div class="row" style="margin:0px">
   <div class="col-lg-1 col-md-1">
   </div>
     <div class="col-lg-5 col-md-5">

      <div class="card leftcard  slideInUp3" id="leftcard3"  style=""> <h1 class="cardnumber" style="font-family: 'Montserrat', sans-serif;">5</h1>
     <div class="innercard">
        <div class="card-block">
         <h2 class="card-title incard"  style="text-align:left; color:#084795; font-family: 'Montserrat', sans-serif; font-size:25px; font-weight:700;">Dual Degree (MBA & PGPM)
</h2>
          <br>
          <p class="card-text" style="font-size:16px; color:#828282; text-align:left; font-family: 'Open Sans', sans-serif;">MBA additional with PGPM makes the student more priority in the current market to get into an MNC company.
</p>
       </div>
     </div></div>
   </div>
  <div class="col-lg-5 col-md-5">

      <div class="card rightcard  slideInUp3" id="rightcard3" style=""> <h1 class="cardnumber" style="font-family: 'Montserrat', sans-serif;" >6</h1>
     <div class="innercard">
        <div class="card-block">
          <h2 class="card-title incard"  style="text-align:left; color:#084795; font-family: 'Montserrat', sans-serif; font-size:25px; font-weight:700;">Air Conditioned Modern Infrastructure
</h2>
          <br>
          <p class="card-text" style="font-size:16px; color:#828282; text-align:left; font-family: 'Open Sans', sans-serif;">All classrooms, LABS, are air conditioned with modern infrastructure.
</p>
       </div></div>
     </div>
   </div>
   </div>



   <div class="row" style="margin:0px">
   <div class="col-lg-1 col-md-1">
   </div>
     <div class="col-lg-5 col-md-5">

      <div class="card leftcard  slideInUp3" id="leftcard4" style=""> <h1 class="cardnumber" style="font-family: 'Montserrat', sans-serif;" >7</h1>
     <div class="innercard">
        <div class="card-block">
         <h2 class="card-title incard"  style="text-align:left; color:#084795; font-family: 'Montserrat', sans-serif; font-size:25px; font-weight:700;">Communication and language training.
</h2>
          <br>
          <p class="card-text" style="font-size:16px; color:#828282; text-align:left; font-family: 'Open Sans', sans-serif;">The training is provided in regular basis and the students developed by Seminars and activities.
</p>
       </div>
     </div></div>
   </div>
  <div class="col-lg-5 col-md-5">

      <div class="card rightcard  slideInUp3" id="rightcard4" style=""> <h1 class="cardnumber" style="font-family: 'Montserrat', sans-serif;">8</h1>
     <div class="innercard">
        <div class="card-block">
          <h2 class="card-title incard"  style="text-align:left; color:#084795; font-family: 'Montserrat', sans-serif; font-size:25px; font-weight:700;">
Mentor- Mentee Session for Students Development.</h2>
          <br>
          <p class="card-text" style="font-size:16px; color:#828282; text-align:left; font-family: 'Open Sans', sans-serif;">
A separate One hour session is conducted every day for the educational and psychological support for the students. </p>
       </div></div>
     </div>
   </div>
   </div>


  <div class="row" style="margin:0px">
   <div class="col-lg-1 col-md-1">
   </div>
     <div class="col-lg-5 col-md-5">

      <div class="card leftcard  slideInUp3" id="leftcard5" style=""> <h1 class="cardnumber" style="font-family: 'Montserrat', sans-serif;" >9</h1>
     <div class="innercard">
        <div class="card-block">
         <h2 class="card-title incard"  style="text-align:left; color:#084795; font-family: 'Montserrat', sans-serif; font-size:25px; font-weight:700;">Live projects with industry exposure
</h2>
          <br>
          <p class="card-text" style="font-size:16px; color:#828282; text-align:left; font-family: 'Open Sans', sans-serif;">The students will be given opportunity to do 9Shortterm project and 1major project.
</p>
       </div>
     </div>
   </div>

   </div>







  <div class="col-lg-5 col-md-5">

      <div class="card rightcard   slideInUp3" id="rightcard5" style=""> <h1 class="cardnumber" style="font-family: 'Montserrat', sans-serif;" >10</h1>
     <div class="innercard">
        <div class="card-block">
          <h2 class="card-title incard"  style="text-align:left; color:#084795; font-family: 'Montserrat', sans-serif; font-size:25px; font-weight:700;">
Compulsory Corporate Lectureship
</h2>
          <br>
          <p class="card-text" style="font-size:16px; color:#828282; text-align:left; font-family: 'Open Sans', sans-serif;">
Corporate lectureship and training on working culture and current trends are imparted to the students..

</p>
       </div></div>
     </div>
   </div>


</div>

</div>




































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
new ScrollMagic.Scene({triggerElement: "#leftcard1", duration: 1080})
.setTween("#leftcard1",{ marginLeft:500,marginTop:50,opacity:0
 })
// animate color and top border in relation to scroll position
//.setClassToggle('#leftcard1','actives')
////.addIndicators({name: "2 (duration: check)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("0");

new ScrollMagic.Scene({triggerElement: "#leftcard1", duration: 1080})
.setTween("#rightcard1",{ marginLeft:500,marginTop:50,opacity:0
 })
// animate color and top border in relation to scroll position
//.setClassToggle('#rightcard1','actives')
////.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("0");




new ScrollMagic.Scene({triggerElement: "#leftcard2", duration: 1080})
.setTween("#leftcard2",{ marginLeft:500,marginTop:50,opacity:0
 })
// animate color and top border in relation to scroll position
//.setClassToggle('#leftcard1','actives')
////.addIndicators({name: "2 (duration: check)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("0");

new ScrollMagic.Scene({triggerElement: "#leftcard2", duration: 1080})
.setTween("#rightcard2",{ marginLeft:500,marginTop:50,opacity:0
 })
// animate color and top border in relation to scroll position
//.setClassToggle('#rightcard1','actives')
////.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("0");






new ScrollMagic.Scene({triggerElement: "#leftcard3", duration: 1080})
.setTween("#leftcard3",{ marginLeft:500,marginTop:50,opacity:0
 })
// animate color and top border in relation to scroll position
//.setClassToggle('#leftcard1','actives')
////.addIndicators({name: "2 (duration: check)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("0");

new ScrollMagic.Scene({triggerElement: "#leftcard3", duration: 1080})
.setTween("#rightcard3",{ marginLeft:500,marginTop:50,opacity:0
 })
// animate color and top border in relation to scroll position
//.setClassToggle('#rightcard1','actives')
////.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("0");






new ScrollMagic.Scene({triggerElement: "#leftcard4", duration: 1080})
.setTween("#leftcard4",{ marginLeft:500,marginTop:50,opacity:0
 })
// animate color and top border in relation to scroll position
//.setClassToggle('#leftcard1','actives')
////.addIndicators({name: "2 (duration: check)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("0");

new ScrollMagic.Scene({triggerElement: "#leftcard4", duration: 1080})
.setTween("#rightcard4",{ marginLeft:500,marginTop:50,opacity:0
 })
// animate color and top border in relation to scroll position
//.setClassToggle('#rightcard1','actives')
////.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("0");








new ScrollMagic.Scene({triggerElement: "#leftcard5", duration: 1080})
.setTween("#leftcard5",{ marginLeft:500,marginTop:50,opacity:0
 })
// animate color and top border in relation to scroll position
//.setClassToggle('#leftcard1','actives')
////.addIndicators({name: "2 (duration: check)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("0");

new ScrollMagic.Scene({triggerElement: "#leftcard5", duration: 1080})
.setTween("#rightcard5",{ marginLeft:500,marginTop:50,opacity:0
 })
// animate color and top border in relation to scroll position
//.setClassToggle('#rightcard1','actives')
////.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("0");







/*
new ScrollMagic.Scene({triggerElement: "#leftcard3", duration: 800})

// animate color and top border in relation to scroll position
.setClassToggle('#leftcard3','is-active')
////.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("onEnter")
.triggerHook("1");

new ScrollMagic.Scene({triggerElement: "#leftcard4", duration: 800})

// animate color and top border in relation to scroll position
.setClassToggle('#leftcard4','is-active')
//.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("onEnter")
.triggerHook("1");

new ScrollMagic.Scene({triggerElement: "#leftcard5", duration: 800})

// animate color and top border in relation to scroll position
.setClassToggle('#leftcard5','is-active')
//.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("onEnter")
.triggerHook("1");

new ScrollMagic.Scene({triggerElement: "#rightcard1", duration: 800})

// animate color and top border in relation to scroll position
.setClassToggle('#rightcard1','is-active')
//.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("onEnter")
.triggerHook("1");

new ScrollMagic.Scene({triggerElement: "#rightcard2", duration: 800})

.setClassToggle('#rightcard2','is-active')
//.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("onEnter")
.triggerHook("1");

new ScrollMagic.Scene({triggerElement: "#rightcard3", duration: 800})

.setClassToggle('#rightcard3','is-active')
//.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("onEnter")
.triggerHook("1");

new ScrollMagic.Scene({triggerElement: "#rightcard4", duration: 800})


.setClassToggle('#rightcard4','is-active')
//.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("onEnter")
.triggerHook("1");

new ScrollMagic.Scene({triggerElement: "#rightcard5", duration: 800})

.setClassToggle('#rightcard5','is-active')
////.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("onLeave")
.triggerHook("0");*/
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/jquery.countup.js"></script>
<script>
$('.count').countUp();
if ($( window ).width() < 1024)
 {
 controller.enabled(false);
 }
</script>

</body>
</html>
