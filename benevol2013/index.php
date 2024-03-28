<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">
<head>
<title>12th Belgian-NEtherlands software eVOLution seminar (BENEVOL 2013)</title>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="gila-screen.css" media="screen" title="BENEVOL 2013 (screen)" />
<link rel="stylesheet" type="text/css" href="gila-print.css" media="print" />
</head>
<body>
<!-- For non-visual user agents: -->
<div id="top"><a href="#main-copy" class="doNotDisplay doNotPrint">Skip to main content.</a></div>
<!-- ##### Header ##### -->
<div id="header">
  <h1 class="headerTitle"> <a href="index.php">BENEVOL <span>2013</span></a> </h1>
  <div class="subHeader"> <span class="doNotDisplay">Navigation: </span> <a href="index.php">Home</a> | <a href="index.php?page=contact">Contact Us</a></div>
</div>
<div id="side-bar">
  <!-- ##### Left Sidebar ##### -->
  <div class="leftSideBar">
    <p class="sideBarTitle">Menu</p>
    <ul>
      <li><a href="index.php">Home</a></li>
	<?php
		if($_GET['page'] == 'program')
		{
			?></ul><p class="sideBarTitle">Program</p><ul><?
		}
		else
		{
			?><li><a href="index.php?page=program">Program</a></li><?
		}
		
		if($_GET['page'] == 'submission')
		{
			?></ul><p class="sideBarTitle">Submittion</p><ul><?
		}
		else
		{
			?><li><a href="index.php?page=submission">Submissions</a></li><?
		}
		
		if($_GET['page'] == 'register')
		{
			?></ul><p class="sideBarTitle">Register</p><ul><?
		}
		else
		{
			?><li><a href="index.php?page=register">Register</a></li><?
		}
		
		if($_GET['page'] == 'location')
		{
			?></ul><p class="sideBarTitle">Location</p><ul><?
		}
		else
		{
			?><li><a href="index.php?page=location">Location</a></li><?
		}
		
		if($_GET['page'] == 'hotels')
		{
			?></ul><p class="sideBarTitle">Hotels</p><ul><?
		}
		else
		{
			?><li><a href="index.php?page=hotels">Hotels</a></li><?
		}
		
		if($_GET['page'] == 'sponsors')
		{
			?></ul><p class="sideBarTitle">Sponsors</p><ul><?
		}
		else
		{
			?><li><a href="index.php?page=sponsors">Sponsors</a></li><?
		}
		
		if($_GET['page'] == 'committees')
		{
			?></ul><p class="sideBarTitle">Committees</p><ul><?
		}
		else
		{
			?><li><a href="index.php?page=committees">Committees</a></li><?
		}
	?>     
    </ul>
 
    </div>
  <!-- ##### Right Sidebar ##### -->
  <div class="rightSideBar">
    <p class="sideBarTitle">News</p>

	<a class="twitter-timeline" width="230" href="https://twitter.com/search?q=%23benevol2013"  data-widget-id="356761629586780160">Tweets about "#benevol2013"</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
</div>
<!-- ##### Main Copy ##### -->
<div id="main-copy">
	<?php 
		switch($_GET['page'])
		{
			case 'program':
				include 'program.php';
				break;
			case 'submission':
				include 'submission.php';
				break;
			case 'contact':
				include 'contact.php';
				break;
			case 'location':
				include 'location.php';
				break;
			case 'hotels':
				include 'hotels.php';
				break;
			case 'register':
				include 'register.php';
				break;
			case 'sponsors':
				include 'sponsors.php';
				break;
			case 'committees':
				include 'committees.php';
				break;			
				
			default:
				include 'home.php';
		}
	 ?>

  
</div>
<!-- ##### Footer ##### -->
<div id="footer">
  <!--<div class="doNotPrint"> <a href="http://www.free-css.com/">Tell a Friend</a> | <a href="http://www.free-css.com/">Privacy Policy</a> | <a href="http://www.free-css.com/">Site Map</a> | <a href="http://www.free-css.com/">Feedback</a> | <a href="http://www.free-css.com/">Help</a> </div>
  <div>Modified on July, 15 2013</div> -->
</div>
</body>
</html>
