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
  <title>Placement ISSM</title>
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
    <div class="container">     <div class="topnav navbar-header">


      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar spl"></span>
      </button>
      <a class="navbar-brand" href="#" style=""> <img class="navlogo" src="images/EB2-01.png" ></a>
    </div>

       <div class="navbar-collapse topnav-right collapse" id="myNavbar">
     <ul class="nav navbar-nav" >
             <li class="subnav navbtndivs"><a href="index.php" style="" class="navbtn ">Home</a></li>
              <li style="" class="navbtndiv"><a href="About us.php" class="navbtn subnav"  style="" >About</a></li>
              <li style="" class="navbtndiv"><a href="Acadamics.php"  class="navbtn subnav"  style="">Academics</a></li>
              <li style="" class="navbtndiv"><a href="Admission.php" class="navbtn subnav"  style="">Admission</a></li>
              <li style="" class="current navbtndiv"><a href="placement.php" class="navbtn subnav"  style="">Placement</a></li>
              <li style="" class="navbtndiv"><a href="why issm.php" class="navbtn"  style="">Why ISSM</a></li>
              <li style="" class="navbtndiv"><a href="Contact us.php" class="navbtn subnav"  style="">Get in touch</a></li>
            </ul>

       </div></div>
     </div>

    <!--end nav bar-->



<!--header banner-->
<div class="container-fluid aboutheadbanner marginadjust" style="" >
  <div class="container">
<div class="col-lg-12 col-xs-12">
<div class="text-center " style="">
<h1 class="aboutheadtxt" style="">This strength of placement committee can be measured from the strong corporate from different industries.

</h1>
</div></div></div>
<div class="col-lg-12 col-xs-12">
<div class="abtimagepos">
    <img src="images/About-us-SeparatePlacement-cell.png"  alt="..." class="placementimgsize">
  </div>
  </div>
  </div>

  </div>
<!--header banner close-->

<script> var controller = new ScrollMagic.Controller(); </script>


<!--second set of content-->
<div class="container placement-content stopoverflow" style="">

<div class="col-lg-3 col-xs-6">
<div class="text-center mobiplace">
<h1 style="" class="count">10</h1>
<p style="">Years of ISSM</p>
</div>
</div>


<div class="col-lg-3 col-xs-5 col-xs-offset-1 col-lg-offset-0">
<div class="text-center">
<h1 style="" class="count">1150</h1>
<p style="">Students placed</p>
</div>
</div>

<div class="col-lg-3 col-xs-6">
<div class="text-center mobiplace ">
<h1 style="" class="count">250</h1>
<p style="">Companies</p>
</div>
</div>

<div class="col-lg-3 col-xs-5 col-xs-offset-1 col-lg-offset-0">
<div class="text-center">
<h1 style="" class="count">100</h1>
<p style="">%Placements</p>
</div>
</div>

</div>
<!-- end second set of content-->

<!--thrid content-->

<div class="container placement-content2 forpaddding orderingpl stopoverflow">
<!--  <div id="background" style=" margin-top: -160px;">

  <p id="bg-text">Placement</p>

  </div>
-->
<div id="bgplcm" style=" ">

<p id="bg-text" class="bgplcm22">Placement</p>

</div>



   <div class="col-md-6 col-lg-5 col-xs-12 tabplace momarg" style="">


    <div class="panel-group ourgoalpos" id="accordion">

    <div class="panel-heading placement-panel-header mopad"  style="">
      <h4 class="panel-title placement-panel-title mobispacingplacement" style="">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-controls="#collapseOne">
          Our goals
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
       <p class="placement-goals-para" style="">Adding value to organization worldwide by helping them recruit students from ISSM.<br><br> Providing short term industrial and academic project teams to companies through summer internships.<br><br> Fostering long term relations with organizations through industry defined projects dedicated student chapters and dedicated student research groups.<br><br> Providing promotional services for organizations through workshops and interaction.</p>
      </div>
    </div>




    <div class="panel-heading placement-panel-header mopad"  style="">
      <h4 class="panel-title placement-panel-title" style="">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo" aria-controls="#collapseTwo" >
         Objectives
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body mopad">
         <p class="placement-goals-para" style="">
           The objectives of Placement & training cell are manifold.
           They include:<br><ul><li><span>Developing the student’s Technical Knowledge and soft skills to meet the corporate recruitment process.</span></li><li><span>To motivate students to develop their overall personality in terms of career planning, goal setting and re-skilling which will stand them in good stead even after getting the job.</span></li><li><span>Aiming to place all students through on-campus & off-campus interviews conducted by the top notch companies.</span></li></ul></p>
      </div>
    </div>



  <div class="panel-heading placement-panel-header mopad"  style="">
      <h4 class="panel-title placement-panel-title" style="">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree" aria-controls="collapseThree">
         Training and development
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body mopad">
        <p class="placement-goals-para" style=""> Each course has 60 hrs of training programme (yearly) Career Planning<br><ul><li><span>Resume Writing</span></li><li><span>Interview Skills</span></li><li><span>Presentation skills</span></li><li><span>Communication skills Team Building</span></li><li><span>Time Management</span></li><li><span>Creativity</span></li><li><span>Stress management</span></li><li><span>Corporate attire and manneris</span></li><li><span>Decision making and problem solving</span></li><li><span>Managing cultural diversity in corporate</span></li><li><span>Corporate relationship</span></li><li><span>Conflict relationship</span></li><li><span>Overcoming politics in corporate</span></li></ul></p>
      </div>
    </div>
  </div>


</div>
<!--accordian-->

<div class="col-md-0 col-lg-1 col-xs-0">
</div>

<!--right side content-->
  <div class="col-md-5 col-xs-11 placement-right-content2 " style=" ">
  <h1 style="">Our placement cell is overseen by the Director of ISSM.</h1>
  <p class="p1" style="">Placements are the strategic component of postgraduate
     programme at ISSM. The placement cell is overseen by the Director 'ISSM'
      and assisted by the placement committee consisting of Placement
      Coordinator, Assistant Placement Coordinator and Student Representatives
       to manage these activities.</p>
 <hr style="border-top: 2px solid #f00;">



  <h2 style="">Industry awareness program</h2>
  <p style=""> Students will be given opportunity to do 9 Short term projects in the following industries.<ul style="">
    <li><span class="placement-span" style="">Banking Industry</span></li><li>
    <span class="placement-span" style="">Automobile Industry</span></li>
    <li><span class="placement-span">Telecom industry</span></li>
    <li><span class="placement-span">FMCG</span></li>
    <li><span class="placement-span">Retail</span></li>
    <li><span class="placement-span">IT & ITES</span></li>
    <li><span class="placement-span">Manufacturing</span></li>
    <li><span class="placement-span">Hospitality </span></li>
    <li> <span class="placement-span" style="">Shipping & logistics</span></li></ul></p>






  <h2 style="">Summer Internship Programme</h2>
  <p style=""> The students undergo a summer internship in various
     companies in the month of July and August. The students should
     be prepared to accept the challenges of the industry and correlate
      theory and practice. The institute believes that Summer Internship
       provides an excellent opportunity for assessing the students and
       encourages progressive Corporate to make Pre Placement Offers based
        on the performance of the students during their summer internship.
        It provides the students with on the job training with the corporate
         houses and gives them experiential training at an early stage.</p>

  <h2 style="">Final Placement</h2>
  <p class="plcamentpadding"style=""> The graduating students will be launching their
    way into the corporate world through the final placement programme.
    It in the in month January begins with a formal interaction between
     the student community and participating companies through Pre-Placement
     Talk (PPT). The objective of PPT is to provide the students with an
     opportunity to understand the organization, the job profile ad career
     prospects.</p>
   </div>




</div>
<!--end third content-->


<!--end session-->


<div class=" container-fluid" style=" background-color:#084795;">

<div class="container placement-end-cont stopoverflow" style="">

  <div id="bgplcmt1" style=" ">

   <p id="bg-text1">Recruiters</p>

 </div><!--
  <div id="background1 bgplcmt1" style=" margin-top: -266px; margin-left: 0px;">

  <p id="bg-text1">Recruiters</p>

</div> wasim-->

<div class="col-lg-6 col-md-6 col-xs-12 mopad">
<h1 style="" class="plcmrechead">Our Recruiters</h1>
</div>



<div class="col-lg-6 col-md-6 col-xs-12 mopad" >
<p style="" class="plcmrecpara">Placement committee contacts corporate organizations through visits and placement brochures and make sure every ISSM candidate get placement by invited companies.</p>
</div>


</div>

</div>
<!--end session-->

<!--testnimonials
<div class="container placement-test" style="">
<div class="col-lg-12">
<div class="text-center">
<h1 style="">Employers Testimonial</h1>
</div>
</div>
<div class="container placement-testimonial">
    <div class="row" id="" style="margin-top:90px;">
        <div class="loop owl-carousel owl-theme " id="">
            <div class="card ">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar">
                    <img src="images/Parkavi Directore.jpg" alt="" />
                </div>
                <div class="content">
                    <h3  style="">Rahul</h3> <p class="test-tag" style="">CEO @ Zealous</p>

                       <p style=""> Placement committee contacts<br> corporate organizations through <br>visits and placement brochures <br>and make sure every ISSM <br>candidate get placement by<br> invited companies.</p>

                </div>
            </div>


            <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar">
                    <img src="images/Parkavi Directore.jpg" alt="" />
                </div>
                <div class="content">
                    <h3  style="">Rahul</h3> <p class="test-tag" style="">CEO @ Zealous</p>

                       <p style=""> Placement committee contacts<br> corporate organizations through <br>visits and placement brochures <br>and make sure every ISSM <br>candidate get placement by<br> invited companies.</p>

                </div>
            </div>


            <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar" style="border:none;">
                    <img src="images/Parkavi Directore.jpg" alt="" />
                </div>
                <div class="content">
                     <h3  style="">Rahul</h3> <p class="test-tag" style="">CEO @ Zealous</p>

                       <p style=""> Placement committee contacts<br> corporate organizations through <br>visits and placement brochures <br>and make sure every ISSM <br>candidate get placement by<br> invited companies.</p>

                </div>
            </div>


            <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar" style="border:none;">
                    <img src="images/Parkavi Directore.jpg" alt="" />
                </div>
                <div class="content">
                     <h3  style="">Rahul</h3> <p class="test-tag" style="">CEO @ Zealous</p>

                       <p style=""> Placement committee contacts<br> corporate organizations through <br>visits and placement brochures <br>and make sure every ISSM <br>candidate get placement by<br> invited companies.</p>

                </div>
            </div>

            <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar" style="border:none;">
                    <img src="images/Parkavi Directore.jpg" alt="" />
                </div>
                <div class="content">
                     <h3  style="">Rahul</h3> <p class="test-tag" style="">CEO @ Zealous</p>

                       <p  style=""> Placement committee contacts<br> corporate organizations through <br>visits and placement brochures <br>and make sure every ISSM <br>candidate get placement by<br> invited companies.</p>

                </div>
            </div>

            <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar" style="border:none;">
                    <img src="images/Parkavi Directore.jpg" alt="" />
                </div>
                <div class="content">
                     <h3  style="">Rahul</h3>
                     <p class="test-tag" style="">CEO @ Zealous</p>

                       <p style=""> Placement committee contacts<br> corporate organizations through <br>visits and placement brochures <br>and make sure every ISSM <br>candidate get placement by<br> invited companies.</p>

                </div>
            </div>
        </div>
   </div>

</div>
</div>
-->
<!--end Testimonial-->










<div class="container placement-end" style="">
<div id="myCarousel1" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
 <ol class="carousel-indicators plcmtcar">
    <li data-target="#myCarousel1" class="plcarind active" data-slide-to="0"></li>
    <li data-target="#myCarousel1" class=" plcarind" data-slide-to="1" ></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/plcmtlogo2.png" >
    </div>

    <div class="item">
      <img src="images/plcmtlogo2.png">
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
   var scene = new ScrollMagic.Scene({triggerElement: "#bgplcm", duration: 1000})
                    // animate color and top border in relation to scroll position
                    .setTween("#bgplcm",{ marginLeft:100
                     }) // the tween durtion can be omitted and defaults to 1
                    //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                    .addTo(controller)
                    .triggerHook("onEnter")
                    .triggerHook("1");


/*//                       var scene = new ScrollMagic.Scene({triggerElement: "#contabc", duration: 1000})
                                        // animate color and top border in relation to scroll position
  //                      //                .setClassToggle("#wrap", "navbar-fixed-top"
                                          // the tween durtion can be omitted and defaults to 1
                                        //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
    //                                  //  .addTo(controller)
      //                                 // .triggerHook("onEnter")
        //                                //.triggerHook("0");
*/
                    var scene = new ScrollMagic.Scene({triggerElement: "#bgplcmt1", duration: 1000})
                    // animate color and top border in relation to scroll position
                    .setTween("#bgplcmt1",{ marginLeft:400
                     }) // the tween durtion can be omitted and defaults to 1
                    ////.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                    .addTo(controller)
                    .triggerHook("onEnter")
                    .triggerHook(0.8);
                     if ($( window ).width() < 1024)
                      {
                      controller.enabled(false);
                      }
</script>



<script>
if ($( window ).width() < 1114)
{
controller.enabled(false);
}</script>


</body>
</html>
