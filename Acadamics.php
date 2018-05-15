<?php
if(isset($_POST['submits'])){

$to = "mohamedazhar93@gmail.com,sasioodd@gmail.com,harivishnuramar@gmail.com ";
$subject = "Contact mail";
$from=$_POST["txt_email"];
$msg=$_POST["txt_email"];
$headers = "From: $from";

mail($to,$subject,$msg,$headers);
echo "<script>alert('Subscribed successfully.')</script>";
}
if(isset($_POST['admsubmit'])){
    $to = "mohamedazhar93@gmail.com,sasioodd@gmail.com,harivishnuramar@gmail.com  "; // this is your Email address
    $name = $_POST['Admname']; // this is the sender's Email address
    $address = $_POST['Admaddress'];
		$contactnumber = $_POST['Admcontactnumber'];
    $email = $_POST['Admemail'];
    $score = $_POST['AdmScore'];

    $subject = "Academics Query";
    $message = "Name: ".$name .
    "\n Address:"  .$address.
    "\n contactnumner:"  .$contactnumber.
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
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Academics ISSM</title>
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
	<style type="text/css">
	span
  {
	  font-family: 'Montserrat', sans-serif;
	  color:#828282;
  }
small{color:#fff;}
  li
  {
	  line-height:1.6;

  }

	</style>
	<style type="text/css">@media (min-width: 300px) and (max-width:500px){
/* .navbar-toggle .icon-bar
 {
   background-color: red;
 }*/


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
/*	 height: 55px;*/
}

 @media (min-width: 1080px) and (max-width:1200px)
 {
	 /*.harinavbar
 {
   height: 75px;
 }*/
 }
	</style>






</head>
<body style=""><!--nav bar-->
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
            <li style="" class=" navbtndiv"><a href="About us.php" class="navbtn subnav"  style="" >About</a></li>
            <li style="" class="current navbtndiv"><a href="Acadamics.php"  class="navbtn subnav"  style="">Academics</a></li>
            <li style="" class="navbtndiv"><a href="Admission.php" class="navbtn subnav"  style="">Admission</a></li>
            <li style="" class="navbtndiv"><a href="placement.php" class="navbtn subnav"  style="">Placement</a></li>
            <li style="" class="navbtndiv"><a href="why issm.php" class="navbtn"  style="">Why ISSM</a></li>
            <li style="" class="navbtndiv"><a href="Contact us.php" class="navbtn subnav"  style="">Get in touch</a></li>
          </ul>

     </div>

   </div>
 </div></div>
<!--end nav bar--><!--header banner-->

<div class="container-fluid headbanner marginadjust" style=" ">
<div class="container mopad">
<div class="row">
<div class="col-lg-8 col-xs-12 col-xs-offset-1 col-md-offset-0 headposition" style="">
<h2 class="bannerhead2" style="">
	ISSM believe in imparting students with corporate related academic inputs for today’s corporate world.
</h2>
</div>
</div>

<div class="row">
<div class="col-lg-4 sidenavdiv">
<div class="text-left" style="">
<ul class="sidenav">
	<li class="firstitem"><a href="#1">Overview</a></li>
	<li class="centeritem"><a href="#2">Program Structure</a></li>
	<li class="centeritem"><a href="#3">Grading</a></li>
	<li class="centeritem"><a href="#4">Teaching Methodolegy</a></li>
	<li class="lastitem"><a href="#5">Academic Team</a></li>
</ul>
</div>

<div class="arrow1" style="">
<a href="#1" class="DirectionalArrow1">
</a></div>
</div>

<div class="col-lg-7 col-xs-12">
<div class="text-right mobiimgpos" style=""><img alt="..." class="acadimgsize" src="images/AcademicsAcademics.png" /></div>
</div>
</div>
</div>
</div>
<!--header banner close--><script> var controller = new ScrollMagic.Controller(); </script>

<div class="container paraalin " id="1">
<div id="bgaca">
<p id="bg-text" class="bgacad">Overview</p>
</div>

<div class="col-lg-4 col-md-6 col-xs-10  opos" style="">
<h1 class="mainhead mainhead1 overviewforpos" style="">Overview</h1>

<p class="subpara3" style="">The MBA Programme is the Flagship Programme of &quot;Indian School of Science &amp; Management&quot;.
	 The programme aims to produce world-class business leaders, attention will be paid to see that they are matured
	  enough to work in work group &amp; teams.</p>

<p class="subpara5" style=" ">This
	me lays the foundation for conceptual and analytical
	 reasoning and gives the students an insight into the
	  dynamics of business environment. The course material
		and design are oriented towards current and emerging
		issues in management.</p>
</div>

<div class="col-lg-8"></div>
</div>

<div class="container">
<div class="col-lg-1"></div>

<div class="col-lg-11 col-xs-12 paraalin acdobjpos" style="">
<h1 class="mainhead mainhead1" style="">Objectives</h1>
</div>
</div>









<!--second section-->
<div class="container paraalin">
<div class="col-lg-1 col-xs-0"></div>

<div class="col-md-4 col-xs-10 col-xs-offset-1 col-md-offset-0 objinner" style="">

	<img src="images/Artboard 1 copy 3.png" class="handmobiimgsize" />
<p class="whypara objmargin" style="">To impart and develop the right kind of values and attitude to function
	effectively in Managerial and administrative positions business, industry, public system and the government.</p>

<img src="images/Artboard 1 copy 7.png"  class="handmobiimgsize handmobiimgpos" style="" />
<p class="whypara objmargin" style="">To provide opportunities to the students for developing necessary managerial skills.</p>
</div>

<div class="col-lg-1"></div>

<div class="col-lg-4 col-md-4 col-xs-10 col-xs-offset-1 objinner" style="">
	<img src="images/Artboard 1 copy 6.png" class="handmobiimgsize" />

<p class="whypara objmargin" style="">To impart the students with current and relevant knowledge
	from the field of management theory and practice.</p>

<img src="images/Artboard 1 copy 5.png"  class="handmobiimgsize handmobiimgpos1" style="" />
<p class="whypara objmargin" style="">Contributors to national development by promising a better quality of life.</p>
</div>
</div>
<!--end second section--><!--start 3rd section-->












<div class="container stopoverflow" id="2">
<div id="bg-aca1">
<p id="bg-taca1">Program</p>
</div>

<div class="col-lg-1 col-xs-0"></div>

<div class="col-lg-10 col-xs-11 col-sm-12 col-xs-offset-1 col-lg-offset-0 col-sm-offset-0  programpos paraalin">
<h1 class="mainhead acadtpos mainhead1" style="">Program Structure</h1>

<p class="whypara objmargin acadfont forpadT10" style="">See yourself at ISSM today, and here&#39;s where you will
	see yourself two years down the line.</p>

</div>
</div>
<!--end 3rd section--><!--start 4th section-->

<div class="container">
<div class="col-lg-1"></div>

<div class="col-md-5 col-sm-11 col-xs-10 col-xs-offset-1 col-md-offset-0 col-sm-offset-1 paraalin">
<p class="whypara objmargin acadfont1" style="">The prestigious programme of Master
	of Business Administration (MBA) is spread over two years and consist four semester,
	 each approximately of 6 months. The entire package consists of 29 theoretical papers
	 and 2 projects.<br />
<br />
Guest lecturers supplement regular course work. Students are encouraged to take up
dissertation work and do projects on &quot;Contemporary Concerns&quot; under the
guidance of faculty.<br />
<br />
There is a strong emphasis on project work as a part of regular course. While
working on projects students are required to interact with managers from the industry.
 A student graduating from &quot;ISSM&quot; would have carried out one major project,
 2 mini projects and one summer internship.</p>
</div>

<div class="col-lg-1"></div>

<div class="col-lg-2 col-md-2 col-xs-4 col-xs-offset-1 col-lg-offset-0 poscount" style="">
<h1 class="count numberfont" style="">02</h1>

<p class="subcountfont"style="">Years</p>

<h1 class="count numberfont1">29</h1>

<p class="subcountfont" style="">Theory Papers</p>
</div>

<div class="col-lg-1"></div>

<div class="col-lg-2 col-md-2 col-xs-6 poscount1" style="">
<h1 class="count numberfont" style="">4</h1>

<p class="subcountfont" style="">Semesters</p>

<h1 class="count numberfont1" style="">9</h1>

<p class="subcountfont" style="">Projects</p>
</div>
</div>
<!--end 4th section--><!--thrid content-->

<div class="container" id="3"><!--right side content-->
<div class="col-lg-1"></div>

<div class="col-md-5 col-sm-10 col-xs-10 col-xs-offset-1 col-md-offset-0 col-sm-0 firstpos paraalin" style="">
<h2 class="firstyear" style="">First year</h2>

<p class="firstyearpara" style="">The first year of the course presents the
	students with a comprehensive view of the management discipline.
	 A broad perspective of the industrial environment is presented and
	  a sound foundation is laid for advanced learning in the second year.
		 All the courses in the first year are core courses and compulsory.
		  At the end of First year students have to undergo a summer
			internship program (SIP) for 45 days in organization,
			working on a project on a significant aspect or problem
			relating to any functional area. The main purpose of SIP
			is to provide students with the opportunity to closely
			observe the operations and environment of an organization
			and relate what they have learnt in the classroom to actual practice.</p>
</div>

<div class="col-md-1"></div>

<div class="col-md-5 col-sm-10 col-sm-offset-1 col-md-offset-0 pos2 tabnopad" style="">
<div class="panel-group nobmargin" id="accordion">
<div class="panel-heading dropsizep" style="">
<h4 class="panel-title dropsize" style=""><a aria-controls="#01" class="accordion-toggle collapsed" data-parent="#accordion" data-target="#01" data-toggle="collapse">Semester I</a></h4>
</div>

<div class="panel-collapse collapse" id="01">
<div class="panel-body">
<p class="droppara"style="font-family: 'Open Sans', sans-serif;"></p>

<ul>
	<li><span>Management principles and Practice </span></li>
	<li><span>Organizational Behavior </span></li>
	<li><span>Managerial Economics </span></li>
	<li><span>Financial and Management </span></li>
	<li><span>Accounting Quantitative</span></li>
	<li><span>Methods for Management </span></li>
	<li><span>Executive Communication</span></li>
</ul>

<p></p>

<p style="font-size:18px; color:#084795; font-family: 'Montserrat', sans-serif;">Elective 1</p>

<ul>
	<li><span>Entrepreneur Development</span></li>
</ul>
</div>
</div>

<div class="panel-heading dropsizep" style="">
<h4 class="panel-title dropsize1" style="">
<a aria-controls="#02" class="accordion-toggle collapsed" data-parent="#accordion" data-target="#02" data-toggle="collapse"> Semester II </a></h4>
</div>

<div class="panel-collapse collapse" id="02">
<div class="panel-body">
<p style="font-family: 'Open Sans', sans-serif;"></p>

<ul>
	<li><span>Operations Management</span></li>
	<li><span>Marketing Management Financial</span></li>
	<li><span>Management Human Resource</span></li>
	<li><span>Management Quantitative</span></li>
	<li><span>Techniques Research </span></li>
	<li><span>Methods for management</span></li>
	<li><span>Business Environment &amp; Ethics.</span></li>
</ul>

<p></p>

<p style="font-size:18px; color:#084795; font-family: 'Montserrat', sans-serif;">Elective II</p>

<ul>
	<li><span>Entrepreneurship &amp; Innovations</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!--accordian--><!--end third content--><!--thrid content-->

<div class="container psyeartwo reverse" style="">
<div class="col-lg-1 col-xs-0"></div>

<div class="col-lg-5 col-md-5 col-md-offset-0 col-xs-11 col-sm-10 col-sm-offset-1 col-lg-offset-0 col-xs-offset-0 paraalin paralink semIIIpos tabnopad" style="">
<div class="panel-group" id="accordion">
<div class="panel-heading dropsizep" style="">
<h4 class="panel-title dropsize" style="">
<a aria-controls="#03" class="accordion-toggle collapsed" data-parent="#accordion" data-target="#03" data-toggle="collapse" >
	 Semester III </a></h4>
</div>

<div class="panel-collapse collapse" id="03">
<div class="panel-body">
<p style="font-family: 'Open Sans', sans-serif;"></p>

<ul>
	<li><span>International Business</span></li>
	<li><span>Management Information System</span></li>
	<li><span>Elective</span></li>
	<li><span>Elective</span></li>
	<li><span>Elective</span></li>
	<li><span>Elective</span></li>
	<li><span>Computer Applications: Integrating</span></li>
	<li><span>Business Process through SAP</span></li>
	<li><span>Summer Placement Project </span></li>
	<li><span>Report &amp; VIVA</span></li>
</ul>

<p></p>

<p style="font-size:18px; color:#084795; font-family: 'Montserrat', sans-serif;">Elective III- Students can choose any<br />
four of the following:</p>

<p></p>

<ul>
	<li><span>Legal Aspects of Business </span></li>
	<li><span>Integrated Marketing Communication<br />
	(Promotion Management) Export</span></li>
	<li><span>ManagementConsumer BehaviourRural</span></li>
	<li><span>MarketingFinancial Services</span></li>
	<li><span>Equity research &amp; Portfolio Management </span></li>
	<li><span>Human Resource Development </span></li>
	<li><span>Managing of Interpersonal Effectiveness </span></li>
	<li><span>Events Management</span></li>
	<li><span>Advanced Production Management </span></li>
	<li><span>Electronic Commerce </span></li>
	<li><span>System Analysis and Design</span></li>
	<li><span>Integrated Materials Management</span></li>
	<li><span>Quality management Systems </span></li>
	<li><span>Retail Management </span></li>
	<li><span>Hospital Operations Management </span></li>
	<li><span>Hospital Architecture and design </span></li>
	<li><span>Hospitality Management</span></li>
</ul>

<p></p>

<p></p>
</div>
</div>

<div class="panel-heading dropsizep" style="">
<h4 class="panel-title dropsize1" style="">
<a aria-controls="#04" class="accordion-toggle collapsed" data-parent="#accordion" data-target="#04" data-toggle="collapse"> Semester IV </a></h4>
</div>

<div class="panel-collapse collapse" id="04">
<div class="panel-body">
<p></p>

<ul>
	<li><span>Strategic Management: Indian Global context </span></li>
	<li><span>Elective</span></li>
	<li><span>Elective</span></li>
	<li><span>Elective</span></li>
	<li><span>Elective</span></li>
	<li><span>Computer Applications: Integrating</span></li>
	<li><span>Business Process through SAP </span></li>
	<li><span>Practical</span></li>
</ul>
1. Management Practice<br />
2. Comprehensive Viva-Voice (Internal)
<p></p>

<p style="font-size:18px; color:#084795; font-family: 'Montserrat', sans-serif;">Elective III- Students can choose any four of the following :</p>

<p></p>

<ul>
	<li><span>Business Plan </span></li>
	<li><span>Supply Chain Management </span></li>
	<li><span>Services Marketing </span></li>
	<li><span>Brand Management </span></li>
	<li><span>Distribution Management </span></li>
	<li><span>International Financial Management </span></li>
	<li><span>Risk Management and Insurance </span></li>
	<li><span>Cost Management </span></li>
	<li><span>(Strategic)Organizational Development</span></li>
	<li><span>Labour Welfare and Industrial Relations </span></li>
	<li><span>Software Project Management</span></li>
	<li><span>Data Mining </span></li>
	<li><span>Technology Management</span></li>
	<li><span>Total Productive Maintenance </span></li>
	<li><span>Total Quality Managemente-Marketing</span></li>
	<li><span>Public Health System &amp; health insurance</span></li>
	<li><span>International Health Management </span></li>
	<li><span>Cross cultural Management</span></li>
</ul>

<p></p>
</div>
</div>
</div>
</div>
<!--accordian-->

<!--right side content-->

<div class="col-lg-5 col-md-5 col-md-offset-1 col-xs-11  col-lg-offset-1 col-xs-offset-0 col-sm-10 col-sm-offset-1  tabnopad">
<h2 class="firstyear">Second year</h2>

<p class="firstyearpara">The first year of the course presents the students with a comprehensive view of the management discipline. A broad perspective of the industrial environment is presented and a sound foundation is laid for advanced learning in the second year. All the courses in the first year are core courses and compulsory.</p>

<p class="firstyearpara">At the end of First year students have to undergo a summer internship program (SIP) for 45 days in organization, working on a project on a significant aspect or problem relating to any functional area. The main purpose of SIP is to provide students with the opportunity to closely observe the operations and environment of an organization and relate what they have learnt in the classroom to actual practice.</p>
</div>
</div>
<!--end third content--><!--end session--><!--new section--><!--<div class="container">
<div class="col-lg-1">
</div>

<div class="col-lg-10" style="margin-top:63px; margin-bottom:100px;">
<h1 style="font-size:25px; font-family: 'Montserrat', sans-serif; font-weight:700; color:#084795;">Optional course (CFP)</h1>
<p style="font-size:16px; color:#707070; font-family: 'Open Sans', sans-serif; font-weight:400; margin-top:20px;"> Certified financial planner is an international certificate conferred by finanical planning Standards Board,India.The cerficate is recongnized across 23 countries in the world and the charter members of FPSB,India include reputed MNC like Citibanks,HSBC,HDFC,Max NewYork Life,Deutsche Bank.etc..Who have declared in public that first preference would be given to CFP certificate as and when recruitment needs arises in the area of financial planning.</p>

</div>


</div>
<!--end new section--><!--second color accodian-->

<div class="container-fluid" style="background-color:#084795;">
<div class="container" id="4">
<div id="bg-aca2">
<p id="bg-taca2">Teaching</p>
</div>

<div class="col-lg-1"></div>

<div class="col-lg-5 col-md-5 col-xs-11 col-sm-10 col-lg-offset-0 col-xs-offset-0 col-sm-offset-1 paraalin teachingsec" style="">
<h1 class="fonttech" style="">Teaching Methodology</h1>

<p class="teachpara"style="">The faculty employs the latest techniques in teaching and training the students. The methods used are: Classroom Lecture, well prepared teaching contents with OHP, Power point presentations, Case Studies, Seminars, Group Exercises, take home Assignment, Presentation of written reports, business and behavioural games. There are guest lectures from professors from leading universities and corporate leaders.</p>
</div>

<div class="col-lg-1"></div>

<div class="col-lg-5 col-md-5 col-xs-12 col-sm-10 col-sm-offset-1 col-lg-offset-0 col-xs-offset-0 mobilenopad posattendance tabnopad" style="">
<div class="panel-group nobmargin" id="accordion">
<div class="panel-heading dropsizew" style="">
<h4 class="panel-title acadattendancefont" style=""><a aria-controls="#6" class="accordion-toggle collapsed" data-parent="#accordion" data-target="#6" data-toggle="collapse"> Attendance &amp; Grading </a></h4>
</div>

<div class="panel-collapse collapse" id="6">
<div class="panel-body">
<p class="whitetext" style="">In order to inculcate organizational discipline among the student and to make the learning process more effective, attendance has made compulsory. Each class session is for 90 minutes. A student must have at least 75% attendance in each course in order to be allowed to sit in the examination in the respective course.</p>

<p class="whitetext" style="">Performance of the students in each course is evaluated thoroughly and continuously through devices such as:</p>

<p class="whitetext" style=""></p>

<ul style="color:#FFF;">
	<li><span style="color:#FFF;">Class Participations </span></li>
	<li><span style="color:#FFF;">Written Examination </span></li>
	<li><span style="color:#FFF;">Online Exams</span></li>
	<li><span style="color:#FFF;">Quiz Competition Seminar </span></li>
	<li><span style="color:#FFF;">Home Assignments </span></li>
	<li><span style="color:#FFF;">Group Discussion</span></li>
	<li><span style="color:#FFF;">Case Presentations </span></li>
	<li><span style="color:#FFF;">Projects and Final </span></li>
	<li><span style="color:#FFF;">Comprehensive Examination.</span></li>
</ul>

<p></p>

<p style="font-family: 'Open Sans', sans-serif; color:#FFF;">The maximum marks allotted for each course is 100. These 100 marks are distributed between internals and final examination in the ratio of 25:75</p>
</div>
</div>
</div>
</div>
</div>

<div class="container" id="5">
<div class="col-lg-1 col-xs-0">
</div>

<div class="col-lg-4 col-md-4 col-sm-10 col-sm-offset-1 col-lg-offset-0 paraalin martop" style="">
<h1 class="whitetext1" style="">Academic Team</h1>

<p class="teachpara"style="">ISSM appoints faculty from among the best available sources across the continents to provide world class learning experience to the students acquire professional and academic excellence. They actively participate in developing curriculum, designing innovative course, deciding upon the method of delivery and process of evaluation.
	The faculties assesses their performance on the basis of innovation in course design and development, nurturing productive institutional</p>
</div>
<div class="col-md-1"></div>
<div class="col-lg-4 col-md-4 col-xs-11 col-sm-10 col-sm-offset-1 col-lg-offset-0 col-xs-offset-0 mobilenopad tabtoppad1 tabnopad" style="">
<p class="whitetext2"style="">alliances, industry orientation through consultancy, generation of industry support, setting up of facilities through industry, support of research projects and other scholarly activities.</p>

<p class="whitetext3" style="">Fostering healthy collaboration between the faculty and the students, building mutual trust and respect are the hall marks of the faculty in ISSM.</p>
</div>

<div class="col-lg-2"></div>
</div>

<div class="container">
<div class="col-lg-1"></div>

<div class="col-lg-11 col-md-11 paraalin OURTEM1" style="">
<h1 class="whitetext4"style="">Our Team</h1>
</div>
</div>

<div class="container paraalin OURTEAMPOS" style="">
<div class="col-lg-1 "></div>

<div class="col-lg-4 col-md-4 col-xs-12">
<p class="staffhead" style="">Dr.M.Parkavi <small style="font-size: 12px;">MBA,M.Phil,Ph.D </small></p>

<p class="staffdes" style="">Director</p>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<p class="staffhead" style="">Dr.V. Nagarajan</p>

<p class="staffdes" style="">Professor</p>
</div>
<div class="col-lg-3 col-md-3 col-xs-12">

<p class="staffhead" style="">Dr.V.S. Murali</p>

<p class="staffdes" style="">Professor</p>
</div>
<div class="col-lg-1 "></div>

<div class="col-lg-4 col-md-4 col-xs-12">

<p class="staffhead" style="">Dr.Maya Rathnaswamyi <small style="font-size: 12px;"> </small></p>

<p class="staffdes" style="">Professor</p>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">

<p class="staffhead" style="">Dr.Sukumar raju</p>

<p class="staffdes" style="">Profosser</p>
</div>
<div class="col-lg-3 col-md-3 col-xs-12">

<p class="staffhead" style="">Prof. U.V Bhanu</p>

<p class="staffdes" style="">Profosser</p>
</div>
<div class="col-lg-1 "></div>
<div class="col-lg-4 col-md-4 col-xs-12">

<p class="staffhead" style="">Prof.S. Krishnamurthy</p>

<p class="staffdes" style="">Profosser</p>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">

<p class="staffhead" style="">Prof.V. Sridharan</p>

<p class="staffdes" style="">Profosser</p>
</div>
<div class="col-lg-3 col-md-3 col-xs-12">

<p class="staffhead" style="">Prof.A.V. Srinivasan</p>

<p class="staffdes" style="">Professor</p>
</div>
<div class="col-lg-1 "></div>
<div class="col-lg-4 col-md-4 col-xs-12">

<p class="staffhead" style="">Prof. P. Appalaraju</p>

<p class="staffdes" style="">Professor</p>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">

<p class="staffhead" style="">Prof. Murali<small style="font-size: 12px;"> </small></p>

<p class="staffdes" style="">Professor</p>
</div>
<div class="col-lg-3 col-md-3 col-xs-12">

<p class="staffhead" style="">Prof. T. Krishnan</p>

<p class="staffdes" style="">Profosser</p>
</div>
<div class="col-lg-1 "></div>
<div class="col-lg-4 col-md-4 col-xs-12">

<p class="staffhead" style="">Prof.V.Manoj</p>

<p class="staffdes" style="">Profosser</p>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">

<p class="staffhead" style="">Prof. Shiju Radhakrishnan</p>

<p class="staffdes" style="">Profosser</p>
</div>
<div class="col-lg-3 col-md-3 col-xs-12">

<p class="staffhead" style="">Prof. R. Subramanian</p>

<p class="staffdes" style="">Profosser</p>
</div>
<div class="col-lg-1 "></div>

<div class="col-lg-4 col-md-4 col-xs-12">
<p class="staffhead" style="">Mr.N.Arun Kumar <small style="font-size: 12px;">M.Com, MBA </small></p>

<p class="staffdes" style="">Asst.Profosser</p>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<p class="staffhead" style="">Mr.R.Paul Godwin <small style="font-size: 12px;">Bsc,MBA.,</small></p>

<p class="staffdes" style="">Asst.Profosser</p>
</div>
<div class="col-lg-3 col-md-3 col-xs-12">

<p class="staffhead" style="">Mrs.N.Usha <small style="font-size: 12px;">M.Com,M.Phil </small></p>

<p class="staffdes" style="">Asst.Profosser</p>
</div>
<div class="col-lg-1 "></div>
<div class="col-lg-4 col-md-4 col-xs-12">

<p class="staffhead" style="">Mr.B. Nagendran <small style="font-size: 12px;">MBA,M.Phil </small></p>

<p class="staffdes" style="">Asst.Profosser</p>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">

<p class="staffhead" style="">Mrs.E.Rekha <small style="font-size: 12px;">MBA </small></p>

<p class="staffdes" style="">Asst.Profosser</p>
</div>
<div class="col-lg-3 col-md-3 col-xs-12">

<p class="staffhead" style="">Dr.V .Nagarajan</p>

<p class="staffdes" style="">Asst.Profosser</p>
</div>

</div>
</div>
</div>



<!--containr fluid end --><!--form section-->

<div class="container queriesfix">
<div class="col-lg-1"></div>

<div class="col-lg-4 col-md-5 col-sm-12 col-md-12 col-xs-11 paraalin acdtabbpad" style="">
<div class="text-justify">
<h1 class="specialhead" style="">Queries?<br/>
Fix an<br/>
appointment</h1>
</div>
</div>

<div class="col-lg-6 col-md-6 tabnopad" style="">
<form method="post" action="">
<div class="form-group"><label class="acadlabel">Name</label>
	 <input aria-describedby="Name" class="form-control admbox" id="admname" name="admname" placeholder="Enter your name" style="" type="Name" /></div>

<div class="form-group"><label class="acadlabel">Address</label>
	<input class="form-control admbox" id="Admaddress" name="Admaddress" placeholder="Address" style="" type="Address" /></div>

	<div class="form-group"><label class="acadlabel">Contact Number</label>
		 <input class="form-control admbox" id="Admcontactnumber" name="Admcontactnumber" placeholder="Contact Number" style="" type="Address" /></div>

<div class="form-group"><label class="acadlabel">Email ID</label>
	 <input class="form-control admbox" id="Admemail" name="Admemail" placeholder="Email ID" style="" type="Address" /></div>

<button class="btnc btncas btncpos btnmobred" style="" value="Submit" type="submit">Submit</button></form>

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
  var scene = new ScrollMagic.Scene({triggerElement: "#bgaca", duration: 1000})
                   // animate color and top border in relation to scroll position
                   .setTween("#bgaca",{ marginLeft:200
                    }) // the tween durtion can be omitted and defaults to 1
                   //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                   .addTo(controller)
                   .triggerHook("onEnter")
                   .triggerHook(0.7);
 var scene1 = new ScrollMagic.Scene({triggerElement: "#bg-aca1", duration: 1000})
                   // animate color and top border in relation to scroll position
                   .setTween("#bg-aca1",{ marginLeft:100
                    }) // the tween durtion can be omitted and defaults to 1
                   //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                   .addTo(controller)
                   .triggerHook("onEnter")
                   .triggerHook(0.8);
 var scene1 = new ScrollMagic.Scene({triggerElement: "#bg-aca2", duration: 1000})
                   // animate color and top border in relation to scroll position
                   .setTween("#bg-aca2",{ marginLeft:400
                    }) // the tween durtion can be omitted and defaults to 1
                 //  //.addIndicators({name: "2 (duration: 500)"}) // add indicators (requires plugin)
                   .addTo(controller)
                   .triggerHook("onEnter")
                   .triggerHook(0.8);
 if ($( window ).width() < 1114)
  {
  controller.enabled(false);
  }


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/jquery.countup.js"></script>
<script>
$('.count').countUp();
</script>

</body>
</html>
