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
  <title>Home ISSM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="issm, indian school of science and management,best mba colleges in india,best mba colleges, best mba college in chennai,top 10 mba college,top 10 business school,business school in chennai,FULL-TIME PGDM PROGRAMME,Part-TIME PGDM PROGRAMME,DOCTORAL PROGRAMME,EXECUTIVE DIPLOMA PROGRAMME,EXECUTIVE EDUCATION,CERTIFICATE PROGRAMME,placement,BUSINESS ETHICS & CORPORATE GOVERNANCE">
  <meta name="keywords" content="MBA,Business,school,diploma,pgdm,course,full-time,issm,management,marketing,part-time,mba,chennai,top,placements,STUDENT, ACHIEVERS,">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/navbar1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />



<link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/style.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
   <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/javascript.js"></script>

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
#preimg{
	margin-left:600px;margin-top:250px}
#afterload{
	transition:linear;
	transition-duration:0.5s;
	}
#Loader
{
	transition:linear 0s;

}
/* home pic hover*/
.homepic1:hover
{
}


/* CAROUSAL INNER*/


.carousel-inner
{
/*width:500px;
*/}
/*testimonial slider*/
	</style>
    <script>
    $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>




<style>
@media (min-width: 300px) and (max-width:500px){

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
 .navbtndivs::after
 {
   display: none;
 }

 .current>*
 {
   text-decoration: underline;
   text-decoration-position:under;

 }

 .navbar-nav
 {
   margin-bottom: 40px;
   margin-top: 25px;
     margin-left: 0px;
     text-align: center;
 }
 }

/* .navbar/-header
 {
   height: 70px;
 }
*/
 @media (min-width: 1080px) and (max-width:1200px)
 {

/*   .harinavbar
 {
   height: 75px;
 }*/

 }
 @media (min-width: 300px) and (max-width:500px){



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



 }

/* .navbar-header
 {
   height: 70px;
 }
*/
 @media (min-width: 1080px) and (max-width:1200px)
 {
   .harinavbar
 {
   height: 75px;
 }
 }



</style>
<script type="text/javascript">
   function sendEnquiryform(){
       var email=$('#txt_email').val();
       $.post("mail_sub.php",'&email='+email,function(result,status,xhr) {
               if( status.toLowerCase()=="error".toLowerCase() )
               { alert("An Error Occurred.."); }
               else {
                   //alert(result);
//                   $('#sucessMessage').html(result);
alert("success");
               }
           })
           .fail(function(){ alert("something went wrong. Please try again") });
   }
</script>

  </head>














<!--<body onload="myFunction()" style="padding-top:1px;margin:0; background-color:#ffffff;"-->
<body>

<!--<div id="Loader" style="align-content:center;align-items:center; opacity:0">
<!--<img src="images/preloader.gif" id="preimg" style=""/>
-></div>-->
<div id="afterload" style="opacity:1">

<!--nav bar-->
<div class="container-fluid harinavbar navbar navbar-fixed-top " >
<div class="container"> <div class="topnav navbar-header ">


  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar spl"></span>
  </button>
  <a class="navbar-brand col-xs-4" href="#" style=""> <img class="navlogo" src="images/EB2-01.png" ></a>
</div>

   <div class="collapse navbar-collapse topnav-right" id="myNavbar">
 <ul class="nav navbar-nav" >
         <li class="subnav current navbtndivs"><a href="index.php" style="" class="navbtn ">Home</a></li>
          <li style="" class="navbtndiv"><a href="About us.php" class="navbtn subnav"  style="" >About</a></li>
          <li style="" class="navbtndiv"><a href="Acadamics.php"  class="navbtn subnav"  style="">Academics</a></li>
          <li style="" class="navbtndiv"><a href="Admission.php" class="navbtn subnav"  style="">Admission</a></li>
          <li style="" class="navbtndiv"><a href="placement.php" class="navbtn subnav"  style="">Placement</a></li>
          <li style="" class="navbtndiv"><a href="why issm.php" class="navbtn"  style="">Why ISSM</a></li>
          <li style="" class="navbtndiv"><a href="Contact us.php" class="navbtn subnav"  style="">Get in touch</a></li>
        </ul>

   </div></div>
 </div>
<!--end nav bar-->



  <div id="myCarousel" class="carousel  slide" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators sliderlist col-lg-2 ">

  <li data-target="#myCarousel " data-slide-to="0" class="slidercar active" style=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class="slidercar">
      </li>
      <li data-target="#myCarousel" data-slide-to="2" class="slidercar"></li>

  </ol>
    <div class="container">
      <div class="col-lg-1 col-xs-0">
      </div>

</div>

    <div class="carousel-inner" role="listbox">
      <div class="item active background a" style="" id="contabc">
        <div class="covertext container mopad" >
          <div id="slider" class="col-lg-6 col-md-5 col-xs-8  slideInUp4 slideInUp " style="">
            <h3 class="bannerhead" style="">
            ISSM ranks one among the TOP 10 MBA Business Schools in Chennai.
            </h3>
            <a  class="btnca btnmobwh btnposition headbtn " style="" href="Admission.html">Know more</a>
          </div>
         </div>

      </div>
      <div class="item background b">
        <div class="covertext container mopad">

          <div id="slider1" class="col-lg-6 col-md-5 col-xs-8  slideInUp4 slideInUps " style=" ">
            <h3 class="bannerhead" style="">ISSM assures 100% placement for their students
            </h3>
            <a  class="btnca btnposition headbtn btnmobwh" href="placement.html" style="">Know more</a>
          </div>
         </div>

      </div>
      <div class="item background c">
        <div class="covertext container mopad">
          <div id="slider2" class="col-lg-6 col-md-5 col-xs-8  slideInUp4 slideInUps " style="">
            <h3 class="bannerhead" style="">ISSM is the First B-school to Provide Dual Degree in Chennai.</h3>
            <a  class="btnca btnposition headbtn btnmobwh" style="" href="Acadamics.html">Know more</a>
          </div>
         </div>

      </div>
    </div>
  </div>

  <div class=" container">
      <div class="arrow" style="">
        <span>Scroll down</span>
<a href="#test1" class="DirectionalArrow">
</a>
</div>

  </div>



<!--first section-->
<script>
						// init controller
						var controller = new ScrollMagic.Controller();
					</script>
<style>
</style>
<div class="container-fluid stopoverflow custom1" style="padding-left:0px;padding-right:0px;position:relative">
<div class="bgleft">
<img src="images/Artboard1.png"/>
</div>
<div class="bgright">
<img src="images/Artboard2.png"/>
</div>

<div class="container">
  <div class="col-lg-1 col-md-0 col-xs-0">
  </div>


<div id="test1" class="col-lg-4 col-md-5 col-sm-9 col-xs-12	 secabout mopad" style="" >
<h1 id="headsec1"   class="slideInUp2 slideInUp mainhead" style="">About ISSM</h1>
<p  id="parasec1"   class="slideInUp2 slideInUp mainpara" style="">
  ISSM is an institution guided by its motto to educate,empower and excel
  in management and in this direction every effort is taken to provide
  infinite opportunities to students for their professional development ahead.
  ISSM is one of the top rated B School in chennai.</p>
<a id="btnsec1" href="About us.html"  class="slideInUp2 slideInUp btnc btnposition4 btnmobred" style="">Know more</a>
</div>
<div class="col-xs-12 col-md-5 col-sm-12 col-lg-5 " style="position:static">



<div class="slideInUp2 slideInUp" id="homediv1" >
<div class="" style="position:absolute">
  <div id="background" style="">

    <p id="hbg-text" class="bghometext" style="">Educate</p>

  </div>
<img src="images/ISSM Education.jpg"  style="" id="homeimg1">

</div>



<div class="" style="position:absolute">
  <div id="background11" style="">

    <p id="hbg-text1" class="bghometext" style="">
    Empower
    </p>

    </div>

<img src="images/ISSM Empower.png" style="" id="homeimg2">

</div>

<div class="" style="position:absolute">
  <div id="background22">

    <p id="hbg-text2" class="bghometext	" style="">
    Excel
    </p>

    </div>

<img src="images/ISSM Excel.png" style="" id="homeimg3">

</div>
</div>
<div class="col-lg-2 col-xs-4">
</div>

</div></div>
<!--end first sectoin-->

<!--start second section-->
<div class="bgleftmob">
<img src="images/leftmob.png"/>
</div>
<div class="bgrightmob">
<img src="images/rightmob.png"/>
</div>

<div class="container padadjust">

<div class="col-lg-1 col-xs-0">
  </div>


<div class="col-lg-4 col-md-5 col-xs-12 col-sm-9 whyhmalign" style="">

<h1 id="headsec2" class="slideInUp2 slideInUp mainhead"  style="">Why ISSM?</h1>
<p id="parasec2" class="slideInUp2 slideInUp mainpara " style="">ISSM provides peaceful ambience, holistic learning and wise faculties to form tomorrow’s managers who for not only creative but also innovative. ISSM is ranked among top 10 colleges in Chennai which has impact compact college campus with all the facilities for and affordable fees.
</p>
<a id="btnsec2" class="slideInUp2 slideInUp btnc btnposition4 btnmobred" href="why issm.html" style="">Know more</a>
</div>


<div class="col-lg-1 col-xs-0">
</div>

<!--hari edit code-->
<div class="col-lg-6 col-md-6 nopad top100pad" style="">

<div class="col-lg-12 col-md-11 col-xs-12 whyalign tabwhypos" style="">
<div id="sec3" class=" col-xs-5 slideInUp slideInUp2">
        <img src="images/100 Placement.png">
        <h1 class="whyhead whyheadalign whyheadspl" style="">100%<br/>placement</h1>
        <p class="whypara" style="">Quality training & Guaranteed placementsfor a great career ahead!</p>
</div>
<div class="col-xs-1"></div>
<div id="sec5" class="col-xs-5 slideInUp slideInUp3">
        <img src="images/Educational Loan.png">
        <h1 style="" class="whyhead whyheadalign">Educational <br/>Loan Assistance</h1>
        <p class="whypara" style="">Tie-ups with banks to assist you fulfill your dreams!</p>
</div>

</div>
<div class="col-lg-12 col-xs-12 whyalign "  style="">

<div id="sec4" class="col-xs-5 slideInUp slideInUp2">
      <img src="images/Dual Degree.png" class="whyalign1" style="">
        <h1 class="whyhead whyheadalign" >Dual Degree <br/>MBA & PGPM</h1>
        <p class="whypara" style="">Two are better than one; Get yourself tagged with dual degree!</p>
</div>
<div class="col-xs-1"></div>

<div id="sec6" class="col-xs-5 slideInUp slideInUp3">
        <img src="images/Skill.png" class="whyalign1" style="">
        <h1 style="" class="whyhead whyheadalign">Soft skill<br/> development</h1>
        <p class="whypara" style="">Soft skills are today’s power skill. We help and train you skill your skills.</p>
</div></div></div>

</div>
<!--end second section-->
</div>


<!--start third section-->
<div class="container mobacad">
<div class="row">
<div class="col-lg-5 col-md-5 col-sm-7 col-xs-10 col-sm-12 col-xs-offset-1 col-md-offset-1 slideInUp slideInUp3 acadleft tabnopad" id="sec7" style="">
<div id="" class="" style="    overflow: hidden;">

<!--<img src="images/Academics.jpg"-->
<div  class="acadimg"></div>
</div>
</div>

<div class="col-lg-5 col-md-5 col-sm-7 col-xs-10 col-sm-12 col-xs-offset-1 col-md-offset-0 col-sm-offset-0 slideInUp slideInUp3 acadpos nopad is-active" id="sec8" style="">
<div class="acadright">
<div id="" class="acadrightinner" style="">


<p style="" class="subhead"> Academics</p>
<p style="" class="subpara"> ISSM believe in imparting students with corporate related academic inputs which is really expected in today’s world. To meet up, ISSM has experienced and knowledge based faculties.</p>
<a  class="btnca btnposition2 btnmobwh"  href="Acadamics.html" style="">Know more</a>
</div>
</div>

<div class="col-lg-1 col-xs-0">
</div>
</div>

</div>

</div>
<!--end third section-->



<!--fourth section-->
<div class="container mobadm">
<div class="row reverse">

<div id="sec9" class=" col-lg-5 col-md-5 col-sm-7 col-xs-10 col-xs-offset-1 col-md-offset-1 col-sm-offset-3 slideInUp slideInUp2 admpos tabnopad" style="">
<div class="admleft">
<div  class="admleftinner" style="">


<p class="subhead" style="">Admission</p>
<p class="subpara" style="">
The Programs at ISSM are aimed at all young graduates who are keen of specializing in the different areas of Management. The admission starts from January 1st for every year. The student willing student can contact the admission team regarding it.</p>
<a  class="btnca btnposition2 btnmobwh" href="Admission.html" style="">Know more</a>
</div>
</div>
</div>

<div class="col-xs-0"></div>
<div  id="sec10" class="col-lg-5 col-md-5 col-sm-7 col-xs-10 col-xs-offset-1 col-md-offset-0  col-sm-offset-0  slideInUp slideInUp2 admpos nopad" style="">
<div class="admright" style="    overflow: hidden;">

<div  class="admimg" ></div>
</div>
</div></div>

</div>
<!--end fourth section-->






<!--start fifth section-->
<div class="container-fluid hplacement" style="background-image: url(images/100%20Placement.jpg); ">

<div class="container mopad">


<div class="col-lg-4 col-md-4 col-xs-11 col-xs-offset-1 col-sm-offset-0 plcmtsec" style=" ">
<div id="sec12" class="slideInUp slideInUp3">


<h1 class="mainhead plcmhead" style="/*color:#FFFFFF; margin-top:20px;*/">Placement</h1>
<p class="subpara2 plcmpara" style="">
  Placements are the bloodstream of ISSM. We know the importance of creating high standard future for our budding managers, that’s why ISSM have created a vibrant placement committee headed by our proficient DIRECTOR and very efficiently executed by our placement officer and student representatives.
</p>
<a  class="btnca btnposition2 btnmobwh" href="Admission.html" style="">Know more</a>

</div>
</div>


<div class="col-lg-3 col-md-3 col-xs-0" style=" margin-top:px;">

</div>
<div class="col-lg-5 col-md-5 col-xs-11 col-xs-offset-1 col-sm-offset-0  plcmtsec2" style="">
<div class="">
<div id="sec11" class="slideInUp slideInUp3">

<div class="row">
<div class=" col-lg-6 col-xs-6 col-sm-7 mopad tableftpad">

<h1 style="" class="count plcmtfont" data-counter-time="2000" data-counter-delay="10">
10
</h1>
<p style="" class="plcmtfont2">
Years of ISSM
</p>
</div>

<div class=" col-lg-5 col-xs-6 col-sm-3 plcrightpos mopad">
<h1 style="" class="count plcmtfont" data-counter-time="2000" data-counter-delay="10">
1150
</h1>
<p style="" class="plcmtfont2">
Students Placed
</p>
</div>

</div>
<div class="row plcmmargin">

<div class=""><div class=" col-lg-6 col-xs-6 col-sm-7 mopad tableftpad">
<h1 style="" class="count plcmtfont plcmtfontpos" data-counter-time="2000" data-counter-delay="10">
250
</h1>
<p style="" class="plcmtfont2">
Companies
</p>
</div></div>
<div class=" col-lg-5 col-xs-6 col-sm-3 plcrightpos1 mopad">
<h1 style="" class="count plcmtfont plcmtfontpos" data-counter-time="2000" data-counter-delay="10">
100
</h1>
<p style="" class="plcmtfont2">
%Placement
</p>
</div>

</div>

</div>
</div>
</div>

</div>

</div>
<!--end fifth section-->


<!--start sixth section-->
<div class="container-fluid testsec" style="">

<!--<div class="col-lg-3">
</div>

<div class=" col-lg-6" style="margin-top:176px;">
<div class="text-center">
<img src="images/Chrysanthemum.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100">

<p style="padding-top:20px; font-family:'Open Sans'; font-size:20px;">Excepteur sint occaecat cupidatat non proident,<br> sunt in culpa qui officia deserunt mollit anim id est<br> eopksio laborum. Sed ut perspiciatis unde omnis<br> istpoe natus error sit voluptatem accusantium</p>
<p style="padding-top:20px; font-family: 'Raleway', sans-serif; font-size:16px;"> Sudha Nagarajan (2012-14)</p>
</div>
</div>

<div class="col-lg-3">
</div>

-->

<!--new Testimonial-->
<div class="container">
<div class="row">
  <p class="testimonialfont">Testimonial</p>

                   <div class="col-md-10 col-xs-10 col-xs-offset-1 " >
  <div class="bgleftquote">
<img src="images/quoteup.png"/>
</div>
                        <div class="carousel slide testcarousal " data-ride="carousel" id="quote-carousel" style="position:absolute;">
                            <!-- Bottom Carousel Indicators -->

                            <ol class="carousel-indicators">
<li data-target="#quote-carousel " data-slide-to="0" class="imgind1 active" style="">
  <img class="img-responsive " src="images/Kishore.png" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1" class="imgind2">
                                  <img class="img-responsive" src="images/Sree roopa.png" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2" class="imgind3">
                                  <img class="img-responsive" src="images/Pavani.png" alt="">
                                </li>
<li data-target="#quote-carousel " data-slide-to="3" class="imgind4" style="">
  <img class="img-responsive " src="images/Nanaksree.png" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="4" class="imgind5">
                                  <img class="img-responsive" src="images/Karthik.png" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="5" class="imgind6">
                                  <img class="img-responsive" src="images/Reshmathi.png" alt="">
                                </li>

</ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="text-center carousel-inner col-lg-7 col-lg-offset-5 col-xs-12   testcar " style="">

                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="testimonialdiv " style="">
<div class="testimg">
<img class="img-responsive " src="images/Kishore.png" alt="">
</div>
<p class="testimonialpara">It is a great pleasure to be a part of ISSM family. After coming to ISSM,I gained a good leadership quality and organizing skills I thank our Director mam and Chairman sir for giving this wonderful opportunity.
</p>
                                                <small style="">Mr.Kishore (2017-19)</small>
                                        </div></div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="testimonialdiv" style="">
<div class="testimg">
<img class="img-responsive " src="images/Sree roopa.png" alt="">
</div>

                                                <p class="testimonialpara">I am very happy for being as part of ISSM Business School. After joining in this I improved my communication skills and developed organizing skills and leadership quality.
                                              <br/>  <br/></p>
                                                <small>Ms.Sree Roopa (2017-19)</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="testimonialdiv" style="">
<div class="testimg">
<img class="img-responsive " src="images/Pavani.png" alt="">
</div>

                                                <p class="testimonialpara">
I am happy to say that I am ISSM student. After coming to ISSM I learned organizing skills and I overcome my stage fear would like to thank my director madam and my faculty this great opportunity.</p>
                                                <small>Ms.Pavani (2017-19)</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 4 -->
                               <div class="item ">
                                    <blockquote>
                                        <div class="row">
                                            <div class="testimonialdiv" style="">
<div class="testimg">
<img class="img-responsive " src="images/Nanaksree.png" alt="">
</div>

                                                <p class="testimonialpara">I'm proud to say that I belong to this wonderful institution of management,  ISSM.  The college environment provides us a platform where we can develop ourselves uniquely and prove to be an expert in highly competitive world.  </p>
                                                <small style="">Ms.Nanak Shree (2017-19)</small>
                                        </div></div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="testimonialdiv" style="">
<div class="testimg">
<img class="img-responsive " src="images/Karthik.png" alt="">
</div>

                                                <p class="testimonialpara">
                                                  Great course, I feel very proud to study in ISSM B school. Our director madam helps
me to gain knowledge and great experience which is useful for my career.<br/><br/></p>
                                                <small>Mr.Karthick (2017-19)</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="testimonialdiv" style="">
<div class="testimg">
<img class="img-responsive " src="images/Reshmathi.png" alt="">
</div>

                                                <p class="testimonialpara">“I am happy to say that I am an ISSMite. I thank all my teaching staffs, my college
director and chairman for helping me to get into my career. I get best experience here.
Thank you ISSM for the bright future.”</p>
                                                <small>Ms.Reshmathi <br/>(2017-19)</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>

                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                 <!--          <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>

        -->    </div>
  <div class="bgrightquote">
<img src="images/quoteup.png"/>
</div>

                    </div>
    </div>

</div></div>
<!--end sixth section-->


<!--start seventh section-->
<div class="container-fluid hcontact " style="">
<div class=" text-center col-xs-10 col-md-6 col-sm-10 col-md-offset-3 col-sm-offset-1 col-xs-offset-1 mopad">
<h1 class="splhead" style=""> Today is the day let's bring the brilliance together!</h1>
<a  class="btnca btninvert btnposition4 btnmobred" href="Contact us.html"style=" ">CONTACT US</a>
</div>

</div>

<!--end sevent section-->








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

            if ($( window ).height() > 1100)
            {
              var scenebg = new ScrollMagic.Scene({triggerElement: "#background", duration: 1800})
                      .setTween("#background",{ marginLeft:175
                       }) // the tween durtion can be omitted and defaults to 1
                      .addTo(controller)
                      .triggerHook("onEnter")
                      .triggerHook(0.8);


                      var scenebg1 = new ScrollMagic.Scene({triggerElement: "#background11", duration: 1800})
                      .setTween("#background11",{ marginLeft:180
                       }) // the tween durtion can be omitted and defaults to 1
                      .addTo(controller)
                      .triggerHook("onEnter")
                      .triggerHook(0.8);

                      var scenebg2 = new ScrollMagic.Scene({triggerElement: "#background22", duration: 1800})
                      .setTween("#background22",{ marginLeft:274
                       }) // the tween durtion can be omitted and defaults to 1
                      .addTo(controller)
                      .triggerHook("onEnter")
                      .triggerHook(0.8);



              // build scene
          /*		var scene = new ScrollMagic.Scene({triggerElement: "#homeimg1", duration: 1200})
                      // animate color and top border in relation to scroll position
                      .setTween("#homeimg1",{ marginTop:277.16,
                       }) // the tween durtion can be omitted and defaults to 1
                      .addTo(controller);

              var scene1 = new ScrollMagic.Scene({triggerElement: "#homeimg2", duration: 1200})
                      // animate color and top border in relation to scroll position
                      .setTween("#homeimg2",{ marginTop:482.82,
                       }) // the tween durtion can be omitted and defaults to 1
                      //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);



              var scene2 = new ScrollMagic.Scene({triggerElement: "#homeimg3", duration: 1200})
                      // animate color and top border in relation to scroll position
                      .setTween("#homeimg3",{ marginTop:505.44,
                       }) // the tween durtion can be omitted and defaults to 1
                      //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);



              scene.triggerHook("onEnter");
              scene.triggerHook("0.8");

              scene1.triggerHook("onEnter");
              scene1.triggerHook("0.9");

              scene2.triggerHook("onEnter");
              scene2.triggerHook("0.9");*/


       /*       var scene3 = new ScrollMagic.Scene({triggerElement: "#sec1", duration: 1200})
                      // animate color and top border in relation to scroll position
                      .setTween("#sec1",{ marginTop:200,
                       }) // the tween durtion can be omitted and defaults to 1
                      //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);
  */

  /*why issm left
      */				var sceneab = new ScrollMagic.Scene({triggerElement: "#headsec1", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#headsec1','is-active')
            //  //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                      .addTo(controller);


                          var sceneabc = new ScrollMagic.Scene({triggerElement: "#parasec1", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#parasec1','is-active')
          //    //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                      .addTo(controller);


                       var sceneabd = new ScrollMagic.Scene({triggerElement: "#btnsec1", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#btnsec1','is-active')
        //      //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                      .addTo(controller);
  /*why issm left*/

              sceneab.triggerHook("onEnter");
              sceneab.triggerHook("1");

              sceneabc.triggerHook("onEnter");
              sceneabc.triggerHook("1");

              sceneabd.triggerHook("onEnter");
              sceneabd.triggerHook("1");

  /*            sceneb.triggerHook("onEnter");
              sceneb.triggerHook("1");
              scenec.triggerHook("onEnter");
              scenec.triggerHook("1");
  */



                          var scenea = new ScrollMagic.Scene({triggerElement: "#homediv1", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#homediv1','is-active')
          //    //.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
                      .addTo(controller);

  /*why issm right*/

  var sceneab = new ScrollMagic.Scene({triggerElement: "#headsec2", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#headsec2','is-active')
        //      //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                      .addTo(controller);


                          var sceneabc = new ScrollMagic.Scene({triggerElement: "#parasec2", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#parasec2','is-active')
        //      //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                      .addTo(controller);


                       var sceneabd = new ScrollMagic.Scene({triggerElement: "#btnsec2", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#btnsec2','is-active')
              //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                      .addTo(controller);
  /*why issm left*/

              sceneab.triggerHook("onEnter");
              sceneab.triggerHook("1");

              sceneabc.triggerHook("onEnter");
              sceneabc.triggerHook("1");

              sceneabd.triggerHook("onEnter");
              sceneabd.triggerHook("1");



             /* var scene4 = new ScrollMagic.Scene({triggerElement: "#sec2", duration: 1000})
                      // animate color and top border in relation to scroll position
              .setClassToggle('#sec2','is-active')

              //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);*/
  /*why issm right*/

              var scene5 = new ScrollMagic.Scene({triggerElement: "#sec3", duration: 1500})
                      // animate color and top border in relation to scroll position
              .setClassToggle('#sec3','is-active')


          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);
              var scene6 = new ScrollMagic.Scene({triggerElement: "#sec4", duration: 1500})
                      // animate color and top border in relation to scroll position
              .setClassToggle('#sec4','is-active')

          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);
              var scene7 = new ScrollMagic.Scene({triggerElement: "#sec5", duration: 1500})
                      // animate color and top border in relation to scroll position
              .setClassToggle('#sec5','is-active')

          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);
              var scene8 = new ScrollMagic.Scene({triggerElement: "#sec6", duration: 1500})
                      // animate color and top border in relation to scroll position
              .setClassToggle('#sec6','is-active')

            //	//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);

  /*carousel*/
              var scene9 = new ScrollMagic.Scene({triggerElement: "#sec7", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec7','is-active')
            //	//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller)

                        .triggerHook("onEnter")
                      .triggerHook("1");




              var scene10 = new ScrollMagic.Scene({triggerElement: "#sec8", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec8','is-active')
        //			//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller).triggerHook("onEnter")
                      .triggerHook("1");
  ;
              var scene11 = new ScrollMagic.Scene({triggerElement: "#sec9", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec9','is-active')
      //				//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller).triggerHook("onEnter")
                      .triggerHook("1");
  ;

 new ScrollMagic.Scene({triggerElement: "#sec10", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec10','is-active')
          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller)
                      .triggerHook("onEnter")
                      .triggerHook("1");
  ;

   new ScrollMagic.Scene({triggerElement: "#sec11", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec11','is-active')
             .triggerHook("1")
        //			//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

                      .addTo(controller);

               new ScrollMagic.Scene({triggerElement: "#sec12", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec12','is-active')
             .triggerHook("1")

          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

                      .addTo(controller);

               new ScrollMagic.Scene({triggerElement: "#sec12", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec12','is-active')

          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

                      .addTo(controller);

          /*		var scene11 = new ScrollMagic.Scene({triggerElement: "#sec13", duration: 500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec13','is-active')

              //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

                      .addTo(controller);

                      */

              var sceneslide = new ScrollMagic.Scene({triggerElement: "#slider", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#slider','is-active')
          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

                      .addTo(controller)
                        .triggerHook("onEnter")
                      .triggerHook("1");

/*              var scenenav = new ScrollMagic.Scene({triggerElement: "#secnav", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#secnav','is-active')
        //			//.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
                      .addTo(controller);


*/
/*                var scenelogo= new ScrollMagic.Scene({triggerElement: "#seclogo", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#seclogo','is-active')
        //			//.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
                      .addTo(controller);
*/


  /*						var scene12 = new ScrollMagic.Scene({triggerElement: "#seclogo", duration: 500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#seclogo','is-active')
              //.addIndicators({name: "2 (logo)"}) // add indicators (requires plugin)
                      .addTo(controller);

            /*	var scene9 = new ScrollMagic.Scene({triggerElement: "#slider", duration: 500})
                      // animate color and top border in relation to scroll position


                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#slider','is-active')
              //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);
      */
            /*	scene4.triggerHook("onEnter");
              scene4.triggerHook("1");*/
              scene5.triggerHook("onEnter");
              scene5.triggerHook("1");
              scene6.triggerHook("onEnter");
              scene6.triggerHook("1");
              scene7.triggerHook("onEnter");
              scene7.triggerHook("1");
              scene8.triggerHook("onEnter");
              scene8.triggerHook("1");
              scene9.triggerHook("onEnter");
              scene9.triggerHook("1");
              scene10.triggerHook("onEnter");
              scene10.triggerHook("1");
              scene11.triggerHook("onEnter");
              scene11.triggerHook("1");


            }

          else  if ($( window ).width() > 1700)
            {
              var scenebg = new ScrollMagic.Scene({triggerElement: "#background", duration: 1500})
                      // animate color and top border in relation to scroll position
                      .setTween("#background",{ marginLeft:180
                       }) // the tween durtion can be omitted and defaults to 1
                //      //.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
                      .addTo(controller)
                      .triggerHook("onEnter")
                      .triggerHook(0.8);
  //test1
/*  new ScrollMagic.Scene({triggerElement: "#myCarousel"})
          // animate color and top border in relation to scroll position
          .setClassToggle('#nav','navbar-fixed-top')
        // the tween durtion can be omitted and defaults to 1
    //      //.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
          .addTo(controller)
          .triggerHook("onLeave")
          .triggerHook("1");

  *///

                      var scenebg1 = new ScrollMagic.Scene({triggerElement: "#background11", duration: 1500})
                      // animate color and top border in relation to scroll position
                      .setTween("#background11",{ marginLeft:180
                       }) // the tween durtion can be omitted and defaults to 1
                //      //.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
                      .addTo(controller)
                      .triggerHook("onEnter")
                      .triggerHook(0.8);

                      var scenebg2 = new ScrollMagic.Scene({triggerElement: "#background22", duration: 1500})
                      // animate color and top border in relation to scroll position
                      .setTween("#background22",{ marginLeft:274
                       }) // the tween durtion can be omitted and defaults to 1
              //        //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller)
                      .triggerHook("onEnter")
                      .triggerHook(0.8);



              // build scene
          /*		var scene = new ScrollMagic.Scene({triggerElement: "#homeimg1", duration: 500})
                      // animate color and top border in relation to scroll position
                      .setTween("#homeimg1",{ marginTop:277.16,
                       }) // the tween durtion can be omitted and defaults to 1
                      //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);
              var scene1 = new ScrollMagic.Scene({triggerElement: "#homeimg2", duration: 500})
                      // animate color and top border in relation to scroll position
                      .setTween("#homeimg2",{ marginTop:482.82,
                       }) // the tween durtion can be omitted and defaults to 1
                      //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);



              var scene2 = new ScrollMagic.Scene({triggerElement: "#homeimg3", duration: 500})
                      // animate color and top border in relation to scroll position
                      .setTween("#homeimg3",{ marginTop:505.44,
                       }) // the tween durtion can be omitted and defaults to 1
                      //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);



              scene.triggerHook("onEnter");
              scene.triggerHook("0.8");

              scene1.triggerHook("onEnter");
              scene1.triggerHook("0.9");

              scene2.triggerHook("onEnter");
              scene2.triggerHook("0.9");*/


       /*       var scene3 = new ScrollMagic.Scene({triggerElement: "#sec1", duration: 500})
                      // animate color and top border in relation to scroll position
                      .setTween("#sec1",{ marginTop:200,
                       }) // the tween durtion can be omitted and defaults to 1
                      //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);
  */

  /*why issm left
      */				var sceneab = new ScrollMagic.Scene({triggerElement: "#headsec1", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#headsec1','is-active')
            //  //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                      .addTo(controller);


                          var sceneabc = new ScrollMagic.Scene({triggerElement: "#parasec1", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#parasec1','is-active')
          //    //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                      .addTo(controller);


                       var sceneabd = new ScrollMagic.Scene({triggerElement: "#btnsec1", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#btnsec1','is-active')
        //      //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                      .addTo(controller);
  /*why issm left*/

              sceneab.triggerHook("onEnter");
              sceneab.triggerHook("1");

              sceneabc.triggerHook("onEnter");
              sceneabc.triggerHook("1");

              sceneabd.triggerHook("onEnter");
              sceneabd.triggerHook("1");

  /*            sceneb.triggerHook("onEnter");
              sceneb.triggerHook("1");
              scenec.triggerHook("onEnter");
              scenec.triggerHook("1");
  */



                          var scenea = new ScrollMagic.Scene({triggerElement: "#homediv1", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#homediv1','is-active')
          //    //.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
                      .addTo(controller);

  /*why issm right*/

  var sceneab = new ScrollMagic.Scene({triggerElement: "#headsec2", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#headsec2','is-active')
        //      //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                      .addTo(controller);


                          var sceneabc = new ScrollMagic.Scene({triggerElement: "#parasec2", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#parasec2','is-active')
        //      //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                      .addTo(controller);


                       var sceneabd = new ScrollMagic.Scene({triggerElement: "#btnsec2", duration: 1500})

                      // animate color and top border in relation to scroll position
              .setClassToggle('#btnsec2','is-active')
              //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                      .addTo(controller);
  /*why issm left*/

              sceneab.triggerHook("onEnter");
              sceneab.triggerHook("1");

              sceneabc.triggerHook("onEnter");
              sceneabc.triggerHook("1");

              sceneabd.triggerHook("onEnter");
              sceneabd.triggerHook("1");



             /* var scene4 = new ScrollMagic.Scene({triggerElement: "#sec2", duration: 1000})
                      // animate color and top border in relation to scroll position
              .setClassToggle('#sec2','is-active')

              //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);*/
  /*why issm right*/

              var scene5 = new ScrollMagic.Scene({triggerElement: "#sec3", duration: 1500})
                      // animate color and top border in relation to scroll position
              .setClassToggle('#sec3','is-active')


          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);
              var scene6 = new ScrollMagic.Scene({triggerElement: "#sec4", duration: 1500})
                      // animate color and top border in relation to scroll position
              .setClassToggle('#sec4','is-active')

          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);
              var scene7 = new ScrollMagic.Scene({triggerElement: "#sec5", duration: 1500})
                      // animate color and top border in relation to scroll position
              .setClassToggle('#sec5','is-active')

          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);
              var scene8 = new ScrollMagic.Scene({triggerElement: "#sec6", duration: 1500})
                      // animate color and top border in relation to scroll position
              .setClassToggle('#sec6','is-active')

            //	//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);

  /*carousel*/
              var scene9 = new ScrollMagic.Scene({triggerElement: "#sec7", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec7','is-active')
            //	//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller)

                        .triggerHook("onEnter")
                      .triggerHook("1");




              var scene10 = new ScrollMagic.Scene({triggerElement: "#sec8", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec8','is-active')
        //			//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller).triggerHook("onEnter")
                      .triggerHook("1");
  ;
              var scene11 = new ScrollMagic.Scene({triggerElement: "#sec9", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec9','is-active')
      //				//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller).triggerHook("onEnter")
                      .triggerHook("1");
  ;

              var scene11 = new ScrollMagic.Scene({triggerElement: "#sec10", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec10','is-active')
          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller)
                      .triggerHook("onEnter")
                      .triggerHook("1");
  ;

              var scene11 = new ScrollMagic.Scene({triggerElement: "#sec11", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec11','is-active')
             .triggerHook("1")
        //			//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

                      .addTo(controller);

              var scene11 = new ScrollMagic.Scene({triggerElement: "#sec12", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec12','is-active')
             .triggerHook("1")

          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

                      .addTo(controller);

              var scene11 = new ScrollMagic.Scene({triggerElement: "#sec12", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec12','is-active')

          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

                      .addTo(controller);

          /*		var scene11 = new ScrollMagic.Scene({triggerElement: "#sec13", duration: 500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#sec13','is-active')

              //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

                      .addTo(controller);

                      */

              var sceneslide = new ScrollMagic.Scene({triggerElement: "#slider", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#slider','is-active')
          //		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

                      .addTo(controller)
                        .triggerHook("onEnter")
                      .triggerHook("1");

          /*    var scenenav = new ScrollMagic.Scene({triggerElement: "#secnav", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#secnav','is-active')
        //			//.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
                      .addTo(controller);



                var scenelogo= new ScrollMagic.Scene({triggerElement: "#seclogo", duration: 1500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#seclogo','is-active')
        //			//.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
                      .addTo(controller);
*/


  /*						var scene12 = new ScrollMagic.Scene({triggerElement: "#seclogo", duration: 500})
                      // animate color and top border in relation to scroll position

                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#seclogo','is-active')
              //.addIndicators({name: "2 (logo)"}) // add indicators (requires plugin)
                      .addTo(controller);

            /*	var scene9 = new ScrollMagic.Scene({triggerElement: "#slider", duration: 500})
                      // animate color and top border in relation to scroll position


                       // the tween durtion can be omitted and defaults to 1
              .setClassToggle('#slider','is-active')
              //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller);
      */
            /*	scene4.triggerHook("onEnter");
              scene4.triggerHook("1");*/
              scene5.triggerHook("onEnter");
              scene5.triggerHook("1");
              scene6.triggerHook("onEnter");
              scene6.triggerHook("1");
              scene7.triggerHook("onEnter");
              scene7.triggerHook("1");
              scene8.triggerHook("onEnter");
              scene8.triggerHook("1");
              scene9.triggerHook("onEnter");
              scene9.triggerHook("1");
              scene10.triggerHook("onEnter");
              scene10.triggerHook("1");
              scene11.triggerHook("onEnter");
              scene11.triggerHook("1");


            }














            else {

            var scenebg = new ScrollMagic.Scene({triggerElement: "#background", duration: 800})
                    // animate color and top border in relation to scroll position
                    .setTween("#background",{ marginLeft:180
                     }) // the tween durtion can be omitted and defaults to 1
              //      //.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
                    .addTo(controller)
                    .triggerHook("onEnter")
                    .triggerHook(0.8);



var scene = new ScrollMagic.Scene({triggerElement: "#contabc", duration: 1000})
  // animate color and top border in relation to scroll position
.setClassToggle("#nav ", "navbar-fixed-top"
) // the tween durtion can be omitted and defaults to 1
//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
.addTo(controller)
.triggerHook("onEnter")
  .triggerHook("0");



//test1
new ScrollMagic.Scene({triggerElement: "#myCarousel"})
        // animate color and top border in relation to scroll position
        .setClassToggle('#nav','navbar-fixed-top')
      // the tween durtion can be omitted and defaults to 1
  //      //.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
        .addTo(controller)
        .triggerHook("onLeave")
        .triggerHook("1");

//

                    var scenebg1 = new ScrollMagic.Scene({triggerElement: "#background11", duration: 800})
                    // animate color and top border in relation to scroll position
                    .setTween("#background11",{ marginLeft:180
                     }) // the tween durtion can be omitted and defaults to 1
              //      //.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
                    .addTo(controller)
                    .triggerHook("onEnter")
                    .triggerHook(0.8);

                    var scenebg2 = new ScrollMagic.Scene({triggerElement: "#background22", duration: 800})
                    // animate color and top border in relation to scroll position
                    .setTween("#background22",{ marginLeft:274
                     }) // the tween durtion can be omitted and defaults to 1
            //        //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                    .addTo(controller)
                    .triggerHook("onEnter")
                    .triggerHook(0.9);



						// build scene
				/*		var scene = new ScrollMagic.Scene({triggerElement: "#homeimg1", duration: 500})
										// animate color and top border in relation to scroll position
										.setTween("#homeimg1",{ marginTop:277.16,
										 }) // the tween durtion can be omitted and defaults to 1
										//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
										.addTo(controller);
						var scene1 = new ScrollMagic.Scene({triggerElement: "#homeimg2", duration: 500})
										// animate color and top border in relation to scroll position
										.setTween("#homeimg2",{ marginTop:482.82,
										 }) // the tween durtion can be omitted and defaults to 1
										//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
										.addTo(controller);



						var scene2 = new ScrollMagic.Scene({triggerElement: "#homeimg3", duration: 500})
										// animate color and top border in relation to scroll position
										.setTween("#homeimg3",{ marginTop:505.44,
										 }) // the tween durtion can be omitted and defaults to 1
										//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
										.addTo(controller);



						scene.triggerHook("onEnter");
						scene.triggerHook("0.8");

						scene1.triggerHook("onEnter");
						scene1.triggerHook("0.9");

						scene2.triggerHook("onEnter");
						scene2.triggerHook("0.9");*/


     /*       var scene3 = new ScrollMagic.Scene({triggerElement: "#sec1", duration: 500})
                    // animate color and top border in relation to scroll position
                    .setTween("#sec1",{ marginTop:200,
                     }) // the tween durtion can be omitted and defaults to 1
                    //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                    .addTo(controller);
*/

/*why issm left
		*/				var sceneab = new ScrollMagic.Scene({triggerElement: "#headsec1", duration: 1000})

										// animate color and top border in relation to scroll position
						.setClassToggle('#headsec1','is-active')
          //  //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
										.addTo(controller);


                        var sceneabc = new ScrollMagic.Scene({triggerElement: "#parasec1", duration: 1000})

                    // animate color and top border in relation to scroll position
            .setClassToggle('#parasec1','is-active')
        //    //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                    .addTo(controller);


                     var sceneabd = new ScrollMagic.Scene({triggerElement: "#btnsec1", duration: 1000})

                    // animate color and top border in relation to scroll position
            .setClassToggle('#btnsec1','is-active')
      //      //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                    .addTo(controller);
/*why issm left*/

            sceneab.triggerHook("onEnter");
            sceneab.triggerHook("1");

            sceneabc.triggerHook("onEnter");
            sceneabc.triggerHook("1");

            sceneabd.triggerHook("onEnter");
            sceneabd.triggerHook("1");

/*            sceneb.triggerHook("onEnter");
            sceneb.triggerHook("1");
            scenec.triggerHook("onEnter");
            scenec.triggerHook("1");
*/



                        var scenea = new ScrollMagic.Scene({triggerElement: "#homediv1", duration: 1000})

                    // animate color and top border in relation to scroll position
            .setClassToggle('#homediv1','is-active')
        //    //.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
                    .addTo(controller);

/*why issm right*/

var sceneab = new ScrollMagic.Scene({triggerElement: "#headsec2", duration: 1000})

                    // animate color and top border in relation to scroll position
            .setClassToggle('#headsec2','is-active')
      //      //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                    .addTo(controller);


                        var sceneabc = new ScrollMagic.Scene({triggerElement: "#parasec2", duration: 1000})

                    // animate color and top border in relation to scroll position
            .setClassToggle('#parasec2','is-active')
      //      //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                    .addTo(controller);


                     var sceneabd = new ScrollMagic.Scene({triggerElement: "#btnsec2", duration: 1000})

                    // animate color and top border in relation to scroll position
            .setClassToggle('#btnsec2','is-active')
            //.addIndicators({name: "2 (duration: fff)"}) // add indicators (requires plugin)
                    .addTo(controller);
/*why issm left*/

            sceneab.triggerHook("onEnter");
            sceneab.triggerHook("1");

            sceneabc.triggerHook("onEnter");
            sceneabc.triggerHook("1");

            sceneabd.triggerHook("onEnter");
            sceneabd.triggerHook("1");



           /* var scene4 = new ScrollMagic.Scene({triggerElement: "#sec2", duration: 1000})
										// animate color and top border in relation to scroll position
						.setClassToggle('#sec2','is-active')

						//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
										.addTo(controller);*/
/*why issm right*/

						var scene5 = new ScrollMagic.Scene({triggerElement: "#sec3", duration: 1000})
										// animate color and top border in relation to scroll position
						.setClassToggle('#sec3','is-active')


				//		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
										.addTo(controller);
						var scene6 = new ScrollMagic.Scene({triggerElement: "#sec4", duration: 1000})
										// animate color and top border in relation to scroll position
						.setClassToggle('#sec4','is-active')

				//		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
										.addTo(controller);
						var scene7 = new ScrollMagic.Scene({triggerElement: "#sec5", duration: 1000})
										// animate color and top border in relation to scroll position
						.setClassToggle('#sec5','is-active')

				//		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
										.addTo(controller);
						var scene8 = new ScrollMagic.Scene({triggerElement: "#sec6", duration: 1000})
										// animate color and top border in relation to scroll position
						.setClassToggle('#sec6','is-active')

					//	//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
										.addTo(controller);

/*carousel*/
						var scene9 = new ScrollMagic.Scene({triggerElement: "#sec7", duration: 1200})
										// animate color and top border in relation to scroll position

										 // the tween durtion can be omitted and defaults to 1
						.setClassToggle('#sec7','is-active')
					//	//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
										.addTo(controller)

									    .triggerHook("onEnter")
										.triggerHook("1");




						var scene10 = new ScrollMagic.Scene({triggerElement: "#sec8", duration: 1200})
										// animate color and top border in relation to scroll position

										 // the tween durtion can be omitted and defaults to 1
						.setClassToggle('#sec8','is-active')
			//			//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
										.addTo(controller).triggerHook("onEnter")
										.triggerHook("1");
;
						var scene11 = new ScrollMagic.Scene({triggerElement: "#sec9", duration: 1000})
										// animate color and top border in relation to scroll position

										 // the tween durtion can be omitted and defaults to 1
						.setClassToggle('#sec9','is-active')
		//				//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
										.addTo(controller).triggerHook("onEnter")
										.triggerHook("1");
;

						var scene11a = new ScrollMagic.Scene({triggerElement: "#sec10", duration: 1000})
										// animate color and top border in relation to scroll position

										 // the tween durtion can be omitted and defaults to 1
						.setClassToggle('#sec10','is-active')
				//		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
										.addTo(controller)
                    .triggerHook("onEnter")
										.triggerHook("1");
;

						var scene11b = new ScrollMagic.Scene({triggerElement: "#sec11", duration: 1000})
										// animate color and top border in relation to scroll position

										 // the tween durtion can be omitted and defaults to 1
						.setClassToggle('#sec11','is-active')
           .triggerHook("1")
			//			//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

										.addTo(controller);

						var scene11c = new ScrollMagic.Scene({triggerElement: "#sec12", duration: 1000})
										// animate color and top border in relation to scroll position

										 // the tween durtion can be omitted and defaults to 1
						.setClassToggle('#sec12','is-active')
           .triggerHook("1")

				//		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

										.addTo(controller);

						var scene11 = new ScrollMagic.Scene({triggerElement: "#sec12", duration: 1000})
										// animate color and top border in relation to scroll position

										 // the tween durtion can be omitted and defaults to 1
						.setClassToggle('#sec12','is-active')

				//		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

										.addTo(controller);

				/*		var scene11 = new ScrollMagic.Scene({triggerElement: "#sec13", duration: 500})
										// animate color and top border in relation to scroll position

										 // the tween durtion can be omitted and defaults to 1
						.setClassToggle('#sec13','is-active')

						//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

										.addTo(controller);

										*/

						var sceneslide = new ScrollMagic.Scene({triggerElement: "#slider", duration: 1000})
										// animate color and top border in relation to scroll position

										 // the tween durtion can be omitted and defaults to 1
						.setClassToggle('#slider','is-active')
				//		//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)

										.addTo(controller)
									    .triggerHook("onEnter")
										.triggerHook("1");

				/*		var scenenav = new ScrollMagic.Scene({triggerElement: "#secnav", duration: 500})
										// animate color and top border in relation to scroll position

										 // the tween durtion can be omitted and defaults to 1
						.setClassToggle('#secnav','is-active')
			//			//.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
										.addTo(controller);



							var scenelogo= new ScrollMagic.Scene({triggerElement: "#seclogo", duration: 500})
										// animate color and top border in relation to scroll position

										 // the tween durtion can be omitted and defaults to 1
						.setClassToggle('#seclogo','is-active')
			//			//.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
										.addTo(controller);
*/


/*						var scene12 = new ScrollMagic.Scene({triggerElement: "#seclogo", duration: 500})
										// animate color and top border in relation to scroll position

										 // the tween durtion can be omitted and defaults to 1
						.setClassToggle('#seclogo','is-active')
						//.addIndicators({name: "2 (logo)"}) // add indicators (requires plugin)
										.addTo(controller);

					/*	var scene9 = new ScrollMagic.Scene({triggerElement: "#slider", duration: 500})
										// animate color and top border in relation to scroll position


										 // the tween durtion can be omitted and defaults to 1
						.setClassToggle('#slider','is-active')
						//.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
										.addTo(controller);
		*/
					/*	scene4.triggerHook("onEnter");
						scene4.triggerHook("1");*/
						scene5.triggerHook("onEnter");
						scene5.triggerHook("1");
						scene6.triggerHook("onEnter");
						scene6.triggerHook("1");
						scene7.triggerHook("onEnter");
						scene7.triggerHook("1");
						scene8.triggerHook("onEnter");
						scene8.triggerHook("1");
						scene9.triggerHook("onEnter");
						scene9.triggerHook("1");
						scene10.triggerHook("onEnter");
						scene10.triggerHook("1");
						scene11.triggerHook("onEnter");
						scene11.triggerHook("1");

            scene11a.triggerHook("onEnter");
            scene11b.triggerHook("onEnter");
            scene11c.triggerHook("onEnter");

          }
					/*	scene12.triggerHook("onEnter");
						scene12.triggerHook("1");
*/
	/*					scene5.triggerHook("onEnter");
						scene5.triggerHook("0.6");
	*/

  if ($( window ).width() < 1024)
  {
  controller.enabled(false);
  }

					</script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/ScrollToPlugin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("Loader").style.opacity = "0";
  document.getElementById("afterload").style.opacity = "1";
  document.getElementById("preimg").style.display = "none";

}



</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/jquery.countup.js"></script>
<script>
$('.count').countUp();

if ($( window ).width() < 1124)
{
controller.enabled(false);}
</script>

</body>
</html>
