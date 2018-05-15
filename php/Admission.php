<?php
if(isset($_POST["txt_email"])){

$to = "mohamedazhar93@gmail.com,sasioodd@gmail.com,harivishnuramar@gmail.com ";
$subject = "Contact mail";
$from=$_POST["txt_email"];
$msg=$_POST["txt_email"];
$headers = "From: $from";
mail($to,$subject,$msg,$headers);
echo "<script>alert('Subscribed successfully.')</script>";
}
if(isset($_POST['submit'])){
    $to = "mohamedazhar93@gmail.com,sasioodd@gmail.com,harivishnuramar@gmail.com "; // this is your Email address
    $name = $_POST['Admname']; // this is the sender's Email address
    $address = $_POST['Admaddress'];
    $contactnumber = $_POST['Admcontactnumber'];
    $email = $_POST['Admemail'];
    $score = $_POST['AdmScore'];

    $subject = "Academics Query";
    $message = "Name: ".$name .
    "\n Address:"  .$address.
    "\n Contact number :" .$contactnumber.
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
  <title>Admission ISSM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="MDB-Free/MDB Free/css/mdb.min.css" rel="stylesheet" />
	<link href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/navbar1.css" rel="stylesheet" />
	<link href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/style.css" rel="stylesheet" />

  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
	<script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/javascript.js"></script><!--scroll magic-->
	<script type="text/javascript" src="scroll/js/lib/jquery.min.js"></script><script type="text/javascript" src="scroll/js/lib/highlight.pack.js"></script><script type="text/javascript" src="scroll/js/lib/modernizr.custom.min.js"></script>
	<script type="text/javascript" src="scroll/js/examples.js"></script>
	<script type="text/javascript" src="scroll/js/lib/greensock/TweenMax.min.js"></script><script type="text/javascript" src="scroll/scrollmagic/uncompressed/ScrollMagic.js"></script><script type="text/javascript" src="scroll/scrollmagic/uncompressed/plugins/animation.gsap.js"></script><script type="text/javascript" src="scroll/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script><!--scroll magic-->
  <!--scroll magic-->



 <style>
 .span
 {
	font-size:16px;
	font-family: 'Open Sans', sans-serif;
	color:#707070;

 }
 @media (min-width:1200px)and (max-width:1920px){

#background
{
margin-top:225px;margin-left:1500px;}

#background1
{
  margin-left: -1000px;
}
#background2
{
  margin-left: 1250px;
}
}
 @media (min-width: 300px) and (max-width:500px){
 .navbar-toggle .icon-bar
 {
   background-color: red;

 }
 #background
 {
   margin-top: 0px;
  margin-left: 0px;
  position: relative;
      line-height: 0.8;
}
#bg-text1
{
  font-size: 75px;
}
 #background1
 {
   margin-left: 0px;
   margin-top: -426px;
 }
 #background2
 {
   margin-left: 0px;
   margin-top: -65px;
 }
 #bg-text2
 {
   font-size: 75px;
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
 }

 .navbar-header
 {
/*   height: 55px;
*/}

 @media (min-width: 1080px) and (max-width:1200px)
 {
/*
   .harinavbar
 {
   height: 75px;
 }
*/
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
            <li style="" class="navbtndiv"><a href="About us.php" class="navbtn subnav"  style="" >About</a></li>
            <li style="" class="navbtndiv"><a href="Acadamics.php"  class="navbtn subnav"  style="">Academics</a></li>
            <li style="" class="current navbtndiv"><a href="Admission.php" class="navbtn subnav"  style="">Admission</a></li>
            <li style="" class="navbtndiv"><a href="placement.php" class="navbtn subnav"  style="">Placement</a></li>
            <li style="" class="navbtndiv"><a href="why issm.php" class="navbtn"  style="">Why ISSM</a></li>
            <li style="" class="navbtndiv"><a href="Contact us.php" class="navbtn subnav"  style="">Get in touch</a></li>
          </ul>

     </div></div>
   </div>
  </div>
  <!--end nav bar-->


<!--header banner-->
<div class="container-fluid admission-banner marginadjust" style="" >
<div class="container">
<div class="row">

<div class="col-lg-7 col-xs-12 textpos mopad headposition" style="" >

<h2> "Every successful journey starts with a first step driven by devotion and intelligence".
</h2>

</div>
</div>
<div class="row">
<div class="col-lg-4 sidenavdiv">
<div class="text-left" style="" >
<ul class="sidenav" >
<li class="firstitem"><a href="#1">Selection Criterion</a></li>
<li class="centeritem"> <a href="#6"> Entrance Score</a></li>
<li class="centeritem"><a a href="#3"> Group Discussion</a></li>
<li class="centeritem"><a href="#4"> General Instructions</a></li>
<li class="lastitem"><a href="#5"> Queries?</a></li>
</ul>
</div>
<div class="arrow2" style="">
<a href="#1" class="DirectionalArrow2">
</a>
</div>

</div>

<div class="col-lg-7 col-xs-12 imgalin mopad">

<div class=" text-right" style="" >
    <img src="images/AcademicsAdmisiion.png" alt="..." class="mobiimg">
</div>

</div>
</div>


</div>
</div>
<!--header banner close-->

<script> var controller = new ScrollMagic.Controller(); </script>





<div class="container automargin ">



<div id="background" style="">
  <p id="bg-text" class="bgadm" >Admission</p>
</div>


<div class="col-lg-4 col-md-4 col-xs-10 admission-text mopad " style="">
<h1 style="">The Programs at ISSM are aimed at all young graduates who are keen
   of specializing in the different areas of Management.</h1>
</div>

<div class="col-lg-8">
</div>



</div>

<!--thrid content-->



<div class="container">




<!--right side content-->
  <div class="col-lg-6 col-md-6 col-xs-12 admission-content mopad" id="1" style="">

  <h2 class="" style="">Selection Criterion</h2>

<div class="col-sm-12 col-xs-11 col-xs-offset-1 col-sm-offset-0 paraalin">
   <p class="admission-para" style="">The candidate should be a graduate in any discipline from
      a recognized university, of Association of Indian Universities (AIU) and should have
   secured a minimum of 50% marks in aggregate.</p>
   <p class="admission-para"> A candidate who is in the
   final year of bachelor's degree/equivalent qualification can also apply,
   and if selected, will be allowed to join the program only if a provisional
   certificate is submitted from the Principal/Registrar of the college/institute
   stating that the candidate has completed all the requirements (The results may,
   however, be awaited for obtaining the bachelor's degree/equivalent qualification).

 </p><p class="admission-para">Personal traits anticipated from a candidate
    <ul class="mobiforparagap"><li><span style=""> Intelligence & general understanding</span></li>
    <li><span style="">Keen Learner</span></li><li><span style=""> Attitude & Aptitude</span></li>
    <li><span style=""> Team player & Leadership quality</span></li>
    <li><span style=""> Desireness and Motivation to fulfill corporate expectations.</span></li>
    <li><span style=""> Analytical ability</span></li></ul></p>
  <h1 class="admission-h1 Downloadpad" style=""><strong>Download Application Form</strong></h1>
  </div>


</div>

<div class="col-md-1 col-xs-0">
</div>



   <div class="col-md-5 col-xs-12 adpos1" style="">


    <div class="panel-group" id="accordion">

    <div class="panel-heading admission-panel-heading mobilr0pad" style="">
      <h4 class="panel-title admission-panel-title" style="">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" aria-controls="#collapseOne" data-target="#collapseOne">
         Application Procedure
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse ">
      <div class="panel-body">
       <p class="admission-span-para" style="">The admission form should be duly filled in and must be
         accompanied with the following supporting documents.<br><br><ul><li><span>
Attested Photocopies of all marks sheets (starting with standard X up to graduation)</span></li><li><span>
Photocopies of Proof of Work Experience</span></li><li><span>
Medical Record Form</span></li><li><span>
Scholarship Form (if applying for scholarship)</span></li><li><span>
Six address labels with your correct mailing address (this will be used by ISSM for correspondence)</span></li><li><span>
Six passport photographs.</span></li></ul><br>
Please do not send original certificates.<br>
The last date of submission of applications (online/paper-based form) is june 30 of every academic year.</p>
      </div>
    </div>




    <div class="panel-heading admission-panel-heading mobilr0pad" style="">
      <h4 class="panel-title admission-panel-title" style="">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo" aria-controls="#collapseTwo">
         Where to send application?
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse ">
      <div class="panel-body">
      <p class="admission-span-para" style="">
        Completed applications must be sent to Indian School of Science and Management, Chennai along with a DD of Rs.1000/- favouring "Indian School of Science & Management" payable at Chennai, towards application processing charges, at the address below-
  Admissions Coordinator Indian School of Science and Management,<br><br>
  No.28, Venkateswara Colony,<br>
  3rd Cross Street, Nehru Nagar,<br>
  Chennai - 600041. (Opposite to Taramani Cognizant)<br><br>
  Phone : 044-45516061 / 45516062 / +91 - 97899 31111<br>
  Fax : 044-43593558<br>
  Email : admissions@issm.in<br><br>
  All admission related correspondence must be addressed as above.
         </p>
      </div>
    </div>


</div>


</div>
<!--accordian-->






</div>
<!--end third content-->







<!--thrid content-->

<div class="container reverse stopoverflow">

<div id="background1" class="bgadm2" style=" ">

  <p id="bg-text1" class="bgadm1">Selection</p>

  </div>

   <div class="col-md-5 col-xs-12 selectpos1 " style="">


    <div class="panel-group" id="accordion">

    <div class="panel-heading admission-panel-heading mobilr0pad" style="">
      <h4 class="panel-title admission-panel-title" style="">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#01" aria-controls="#01">
        Content of the examination
        </a>
      </h4>
    </div>

    <div id="01" class="panel-collapse collapse">

      <div class="panel-body">
      <p class="admission-para" style=""> Adding value to organization worldwide by helping them recruit students from ISSM.<br><br> Providing short term industrial and academic project teams to companies through summer internships.<br><br> Fostering long term relations with organizations through industry defined projects dedicated student chapters and dedicated student research groups.<br><br> Providing promotional services for organizations through workshops and interaction.</p>
      </div>

    </div>




    <div class="panel-heading admission-panel-heading mobilr0pad" style="">
      <h4 class="panel-title admission-panel-title" style="">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#2" aria-controls="#2">
        Who can take up the test
        </a>
      </h4>
    </div>
    <div id="2" class="panel-collapse collapse">
      <div class="panel-body">
        <p class="admission-span-para" style="">

          <ul><li><span>The objectives of Placement & training cell are manifold. They include:
        </span>  </li>
           <li><span>Developing the student’s Technical Knowledge and soft skills to meet the corporate recruitment process.
           </span></li>
           <li><span>
              To motivate students to develop their overall personality in terms of career planning, goal setting and re-skilling which will stand them in good stead even after getting the job.</li>
</span>
          <li> <span>Aiming to place all students through on-campus & off-campus interviews conducted by the top notch companies.</p>
    </span>  </li></ul></div>
    </div>



</div>


</div>
<!--accordian-->

<div class="col-md-1">
</div>

<!--right side content-->
  <div class="col-md-6 admission-content testpos" id="6" style="">
  <h2 style="">Entrance Test Scores</h2>
  <p class="admission-para" style="">ISSM uses standardized management entrance
    test scores as a part of its overall selection process. The following test
    scores are accepted: CAT, XAT & MAT, among other AICTE approved test scores.
     Submit an attested copy of your Test Score Card along with the application
     form. If you have not received your test score, give details of Test Registration Number,
      Test Centre Code, etc.</p><p class="admission-para">Talent Reward Exam (TRE)
      is a real reward for talent a student who secure above 96% in
      the TRE and clears up the personal interview with the remark of
      exceeding expectation will be eligibile for complete free education at ISSM.</p>







   </div>

</div>
<!--end third content-->


<!--end session-->

<!--start next section-->
<div id="background2" style="">
  <p id="bg-text2" class="">Process</p>
</div>

<div class="container">




<div class="col-lg-1">

</div>

<div class="col-lg-5 col-md-6 col-xs-12 admission-gd" id="3"style="">
<h1 style="">Group Discussion/<br>Personal Interview</h1>
<p class="admission-para" style="">Group Discussion & Personal Interview lists
   will be released in phases from January onwards. Call letters for Group
    Discussion and Interviews are sent through courier, post and e-mail.
     The selection criteria for calling candidates for Group Discussion &
     Personal Interviews and final admission is based on multiple factors:</p>
     <ul class="admission-ul mobiforparagap"><li><span style="">Past Academic Performance</span></li>
       <li><span style=""> Quality & content of the answers in the application form</span></li>
       <li><span style=""> Work experience, in terms of job content & organization</span></li>
       <li><span style=""> Group Discussion & Interview performance (applicable for final admissions only)</span></li>
      <li><span style="">Extra curricular activities, other interests &  accomplishments</span></li>
      <li><span style=""> Entrance Test (CAT/XAT/MAT) score if not take an aptitude test with us</span></li></ul>
<p class="admission-para">A combination of all the above factors are used to determine the eligibility of candidates to be called for interview/group discussion and offered final admission. A high Entrance Test Score above does not guarantee a call for Group Discussion/Interview or admission offer.</p>
</div>




<div class="col-lg-6 col-xs-12 adcardpos" id="4" style="">
 <div class="card admcardstyle" style="background-color:#FFF; float:right;">

        <div class="card-block">

       <h2 class="admission-card-head" style="">General Instructions</h2>


          <p class="card-text admission-card-para" style="">
          <ul class="admission-ul" style=""><li><span style="">Please quote your name, date of birth and
          form serial number in all your communications with us
          </span></li><li><span style="">It is recommended that applicants and parents visit Indian School of Science and Management to get a first hand
          opinion of the facilities offered.</span></li><li> <span style="">Admission to ISSM is based largely on the performance of the candidate in the
          GD / PI and their academic record.</span></li></ul></p>
          <p class="admission-card-para" style=""> Any dispute arising from matters given in this document are subject to Chennai jurisdiction and no other court shall have jurisdiction in this matter.</p>
        </div>


     </div>

</div>
</div>

<!--end nexr section-->


<!--form section-->
<div class="container admission-form" id="5"style="">
<div class="col-lg-1">
</div>

<div class="col-lg-4 col-md-5 col-xs-12 mopad">
<div class="text-justify">
<h1 style="">Queries?<br>Fix an<br>appointment</h1>
</div>
</div>


<div class="col-lg-6 col-md-6 col-xs-12" style="">
<form method="post" action="">

  <div class="form-group" >
    <label style="">Name</label>
    <input type="Name" class="form-control admbox" id="admname" name="admname" aria-describedby="Name" placeholder="Enter your name" style=" ">
   </div>

  <div class="form-group">
    <label style="">Address</label>
    <input type="Address" class="form-control admbox" id="Admaddress" name="Admaddress" placeholder="Address " style="">
  </div>

  <div class="form-group">
   <label style="">Contact number</label>
    <input type="Address" class="form-control admbox" id="Admcontactnumber" name="Admcontactnumber" placeholder="Contact Number" style="">
  </div>

   <div class="form-group">
    <label style="">Email ID</label>
     <input type="Address" class="form-control admbox" id="Admemail" name="Admemail" placeholder="Email ID" style="">
  </div>

  

  <button class="btnc btncas btncpos btnmobred" style="" value="Submit" type="submit">Submit</button></form>
</form>
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
              // build scene
              var scene = new ScrollMagic.Scene({triggerElement: "#background", duration: 1000})
                      // animate color and top border in relation to scroll position
                      .setTween("#background",{ marginLeft:200
                       }) // the tween durtion can be omitted and defaults to 1
                      //.addIndicators({name: "2 (duration: 1000)"}) // add indicators (requires plugin)
                      .addTo(controller)
                      .triggerHook("onEnter")
                      .triggerHook(1);


                      var scene1 = new ScrollMagic.Scene({triggerElement: "#background1", duration: 1000})
                      // animate color and top border in relation to scroll position
                      .setTween("#background1",{ marginLeft:200
                       }) // the tween durtion can be omitted and defaults to 1
                      //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                      .addTo(controller)
                      .triggerHook("onEnter")
                      .triggerHook(0.8);

                      var scene2 = new ScrollMagic.Scene({triggerElement: "#background2", duration: 1000})
                      // animate color and top border in relation to scroll position
                      .setTween("#background2",{ marginLeft:400
                       }) // the tween durtion can be omitted and defaults to 1
                      ////.addIndicators({name: "2 (duration: 800)"}) // add indicators (requires plugin)
                      .addTo(controller)
                      .triggerHook("onEnter")
                      .triggerHook(0.9);

         if ($( window ).width() < 1024)
  {
  controller.enabled(false);
  }


		    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/jquery.countup.js"></script>
<script>
$('.count').countUp();
</script>

<script>
if ($( window ).width() < 1114)
{
controller.enabled(false);
}
</script>


</body>
</html>
