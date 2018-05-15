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
  <title>About ISSM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

 <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/navbar1.css">

 <link rel="stylesheet" href="MDB-Free/MDB Free/css/mdb.min.css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />


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
/*  height: 70px;
*/}

@media (min-width: 1080px) and (max-width:1200px)
{
  /*.harinavbar
{
  height: 75px;
}*/
}

</style>






</head>
<body>












  <!--nav bar-->
  <div class="container-fluid harinavbar navbar navbar-fixed-top " >
  <div class="container">   <div class="topnav navbar-header">


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
            <li style="" class="current navbtndiv"><a href="About us.php" class="navbtn subnav"  style="" >About</a></li>
            <li style="" class="navbtndiv"><a href="Acadamics.php"  class="navbtn subnav"  style="">Academics</a></li>
            <li style="" class="navbtndiv"><a href="Admission.php" class="navbtn subnav"  style="">Admission</a></li>
            <li style="" class="navbtndiv"><a href="placement.php" class="navbtn subnav"  style="">Placement</a></li>
            <li style="" class="navbtndiv"><a href="why issm.php" class="navbtn"  style="">Why ISSM</a></li>
            <li style="" class="navbtndiv"><a href="Contact us.php" class="navbtn subnav"  style="">Get in touch</a></li>
          </ul>

     </div>
   </div>
</div>
  <!--end nav bar-->















<!--header banner-->
<div class="container-fluid aboutheadbanner marginadjust" style="" >
  <div class="container">
<div class="col-lg-12 col-xs-12 mobilenopad">
<div class="text-center " style="">
<h1 class="aboutheadtxt" style="">
  ISSM believe in imparting students with corporate related academic inputs.
</h1>
</div></div></div>
<div class="col-lg-12 col-xs-12">
<div class="abtimagepos">
<img src="images/About-us-SeparateArtboard-1.png" class="abtimgsize" alt="...">
</div>
</div>
</div>

</div>
<!--end header banner close-->


<script> var controller = new ScrollMagic.Controller(); </script>


<!--second set of content-->
<div class="container aboutcontent" style="">

<div id="bg-abt">
  <p id="bg-abt1">About</p>
</div>
<div class="col-lg-4 col-md-4 col-sm-10 col-xs-10 abtcontenthead pos1">
<p style="">ISSM employs the finest brains in management education to lead its students to a fruitful learning.</p>
</div>


<div class="col-lg-4 col-md-4 col-xs-11 col-sm-11 col-xs-offset-1 col-sm-offset-1 col-md-offset-0">
<p class="abtcontentpara"style="">ISSM is an institution guided by its motto to educate, empower and excel in management and in this direction every effort is taken to provide infinite opportunities to students for their professional development ahead. ISSM employs the finest brains in management education to lead its students to a fruitful learning.</p>
</div>

<div class="col-md-4 col-xs-11 col-sm-11 col-xs-offset-1 col-sm-offset-1 col-md-offset-0">
<p class="abtcontentpara" style="">Our academic team is competent and committed with rich experience in industry and academics and is keen to help students to achieve their goals. ISSM also organizes regular guest lecturers from ranking universities. IIM's and executives from the Industry in furtherance of its commitment to provide quality education to its students.</p>
</div>
</div>
<!-- end second set of content-->



<!--third section-->
<div class="container about-thirdsec stopoverflow" style="">
  	<div id="bg-chr">
 	 <p id="bg-chrt">Chairman</p>
	</div>

  <div class="col-lg-4 col-md-4  col-xs-11 col-xs-offset-1 col-sm-offset-0">

<div class=" text-left">
<img src="images/Kathir Chairman.jpg" class="profileimg">
<br>
<h2 class="about-thirdsec-head" style="">Kathir Ganapathiappan</h2>
<p class="about-thirdsec-tag" style="">Chairman- ISSM</p>
</div>

  </div>

<div class="col-lg-4 col-md-4  col-xs-12">
  <div class="col-sm-12 col-md-12 col-xs-10 paraalin">
  <h2 class="abtparasep abt-sec-head" style="">
  “Our mantra is to advance the learning, the learning process and perpetuate it to Posterity,”
  </h2>
</div>
  <div class="col-sm-11 col-md-12 col-md-offset-0  col-xs-11 col-xs-offset-1 col-sm-offset-1 paraalin">
  <p class="abt-sec-para" style="">Hello, and welcome to ISSM. We believe that it is people make
     ISSM great, so whether you are a prospective student,current student, professor,
      researcher, staff member, alumnus, associate, vendor, graduate, parent, neighbor, or
       visitor, your interest and enthusiasm in us are greatly valued and appreciated.
     </p>
     <p class="abt-sec-para" style="">
        ISSM endeavors to build a generation of leaders for the new millennium—men and
        women who will be capable of shaping future with a vision, sense of justice,
         charity and concern for all of the human family.
 </p>
</div>
</div>



  <div class="col-lg-4 col-md-4 col-xs-12">
  <div class="col-sm-11 col-md-12 col-xs-11 col-xs-offset-1 col-sm-offset-1 paraalin">
 <p class="abt-sec-para" style="">
   ISSM has been established with the objective of producing
   high quality executives and managers. The challenge in today’s
    globalized world is to produce managers who can operate across
     the globe. Further we aim to benchmark ourselves on a global
      scale on par with the best management institutions, and become
       the institution of choice for aspiring managers of India. I have
       no doubt that this objective will be achieved and exceeded.
     </p><p class="abt-sec-para" style="">Today, change is so rapid that the educational system
       has to keep itself abreast of the latest developments in the industry.
       To understand the dynamics of change, ISSM students are acquainted with
        the current global economic business trends as well the best management
        practices. ISSM provides the students an interactive learning environment
         that allows them to think and to reflect, to explore and express themselves .
  </p>
  </div>


</div></div>

<!--end third section-->




<!--section-->
<div class="container about-director ordering stopoverflow" style="">
 <div id="bg-dir">
 	 <p id="bg-dirt">Director</p>
 </div>
<div class="col-lg-4 col-md-4 col-xs-12">
  <div class="col-sm-12 col-md-12 col-xs-10 paraalin">
<h2 class="abtcontenthead " style="">
The institution believes in interactive teaching,
professional management and close interaction with the industry.</h2>
</div>
<div class="col-xs-11 col-md-12 col-xs-offset-1 col-sm-offset-0 paraalin">
<p class="abtcontentpara " style="">
A warm greeting to you.</p>
<p class="abtcontentpara ">This institution has a
vision to excel in the field of management and produce
 high quality leader - managers, proposed to be achieved
 by adapting ourselves to the changing times while maintaining
 focus on social responsibilities.</p><p class="abtcontentpara "> ISSM offers a 2 years
 regular Intensive MBA programme with specialisation like Marketing,
  Finance and Human Resources to develop and nurture the talents in
   the respective expertise.
</p>
</div>
</div>


<div class="col-lg-4 col-md-4 col-xs-11 col-xs-offset-1 col-sm-offset-0">
<p class="abtcontentpara" style="">
The core values at ISSM are</p>
<ul class="mobiforparagap"><li><span class="abtcontentpara" style="">Trust and Confidence.</span></li>
  <li><span class="abtcontentpara" style="">Transparency and Honesty.</span></li>
  <li><span class="abtcontentpara" style="">Perfection and Excellence.</span></li></ul>
  <p class="abtcontentpara" style="">The institution believes in interactive teaching,
     professional management and close interaction with the industry. ISSM offers a unique
     blend of knowledge, training and research opportunities. The active involvement of
     management and faculty will reflect in introduction of new courses and course modules
     year after year, not only as a reactive endeavour responding to changing needs ,
     but also a proactive initiative.</p><p class="abtcontentpara"> At ISSM we educate, empower and train our
     students to excel with key positions in top organizations both in India and abroad.
      They are groomed to act as ambassadors of constructive change wherever they work.
</p>
</div>

<div class="col-lg-4 col-md-4 col-xs-10 col-xs-offset-1 col-sm-offset-0" >
<div class=" text-right tableftpos">
<img src="images/Parkavi Directore.jpg" class="profileimg1">
</div>
<div class="text-left name-left tableftpos">
<h2 class="name-header tableftpos" style="">Dr. Parkavi Mahalingham</h2>
<p  class="name-text tableftpos"style="">Director - ISSM</p>
</div>
</div>
</div>
</div>
<!--end section-->

<!--card design-->

<div class="container about-card" style="">

   <div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-0  col-xs-12 paraalin">
     <div class="card about-card-layout cardvision" style="">

        <div class="card-block">

        <img src="images/Vision _ Mission_Working skills copy.svg"  class="abtvisionimg">


          <h2 class="card-title about-card-header" style=""> Vision</h2>

          <p class="about-card-para" style="">"ISSM is dedicated to the cause of providing world class business education to aspiring managers and executive by fostering performance levels validated by the industry at large through qualitative learning standards that are aimed at leveraging the institution to among the top ranked business schools in india"</p>
       </div>
     </div>
   </div>


   <div class="col-md-6 col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-0 paraalin cardpos">
     <div class="card about-card-layout cardvision" style="">

        <div class="card-block">

        <img src="images/Vision _ Mission_Working skills copy 2.svg" class="visioncarimg">


          <h2 class="card-title about-card-header" style="">Mission</h2>

          <p class="about-card-para" style="">ISSM's has as its mission the objective
            of evolving a globally renowned school of business that will turn out
            leaders who will shape the course of management practice in india and
            the world over by providing, entrepreneurship as well as organizational
            excellence through ethical, dependable and socially sensitive processes.</p>
       </div>
     </div>
   </div>


</div>

<!--end big card deisgn-->


<!--last section-->
<div class="container-fluid about-last" style="">

<div class="col-lg-2 col-xs-0">
</div>

<div class="col-lg-6 col-lg-offset-1 col-xs-10 col-xs-offset-1">

<div class="text-center aboutbtnpad" style="">
  <h1 class="about-last-text" style="">10 Reasons to choose Indian School of Science and Management!</h1>
  <a  class="btnca noleftpad" style="" href="why issm.html">Know more</a>
</div>


</div>

<!--end last section-->


</div>

<!--end header-->








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
   var scene = new ScrollMagic.Scene({triggerElement: "#bg-abt", duration: 1000})
                    // animate color and top border in relation to scroll position
                    .setTween("#bg-abt",{ marginLeft:400
                     }) // the tween durtion can be omitted and defaults to 1
                    //////.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                    .addTo(controller)
                    .triggerHook("onEnter")
                    .triggerHook(0.7);
	var scene = new ScrollMagic.Scene({triggerElement: "#bg-chr", duration: 1000})
                    // animate color and top border in relation to scroll position
                    .setTween("#bg-chr",{ marginLeft:300
                     }) // the tween durtion can be omitted and defaults to 1
                    //////.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                    .addTo(controller)
                    .triggerHook("onEnter")
                    .triggerHook(0.8);
	var scene = new ScrollMagic.Scene({triggerElement: "#bg-dir", duration: 1000})
                    // animate color and top border in relation to scroll position
                    .setTween("#bg-dir",{ marginLeft:300
                     }) // the tween durtion can be omitted and defaults to 1
                    ////////.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                    .addTo(controller)
                    .triggerHook("onEnter")
                    .triggerHook(0.8);

</script>
<script>
if ($( window ).width() < 1124)
{
controller.enabled(false);
}</script>


</body>
</html>
