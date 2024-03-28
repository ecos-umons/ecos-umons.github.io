<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">
<head>
<title>Data-Intensive Software System Evolution</title>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="gila-screen.css" media="screen" title="BENEVOL 2013 (screen)" />
<link rel="stylesheet" type="text/css" href="gila-print.css" media="print" />
</head>
<body>
<!-- For non-visual user agents: -->
<div id="top"><a href="#main-copy" class="doNotDisplay doNotPrint">Skip to main content.</a></div>
<!-- ##### Header ##### -->
<div id="header">
  <h1 class="headerTitle"> <a href="index.php">Data-Intensive Software System Evolution</a></h1>
  <div class="subHeader"> <span class="doNotDisplay">Navigation: </span></div>
</div>
<div id="side-bar">
  <!-- ##### Left Sidebar ##### -->
  <div class="leftSideBar">
    <p class="sideBarTitle">Menu</p>
    <ul>
      <li><a href="index.php">Home</a></li>
	<?php
		if($_GET['page'] == 'team')
		{
			?></ul><p class="sideBarTitle">Team</p><ul><?
		}
		else
		{
			?><li><a href="index.php?page=team">Team</a></li><?
		}
		
		if($_GET['page'] == 'events')
		{
			?></ul><p class="sideBarTitle">Events</p><ul><?
		}
		else
		{
			?><li><a href="index.php?page=events">Events</a></li><?
		}
		
		if($_GET['page'] == 'publications')
		{
			?></ul><p class="sideBarTitle">Publications</p><ul><?
		}
		else
		{
			?><li><a href="index.php?page=publications">Publications</a></li><?
		}
		
		if($_GET['page'] == 'links')
		{
			?></ul><p class="sideBarTitle">Links</p><ul><?
		}
		else
		{
			?><li><a href="index.php?page=links">Links</a></li><?
		}
	?>     
    </ul>
 
    </div>
  <!-- ##### Right Sidebar ##### -->
  <div class="rightSideBar">
    <p class="sideBarTitle">News</p>

	<a class="twitter-timeline" width="230" href="https://twitter.com/search?q=%23DISSEproject"  data-widget-id="365787645160325122">Tweets about "#DISSEproject"</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
  </div>
</div>
<!-- ##### Main Copy ##### -->
<div id="main-copy">
	<?php 
		switch($_GET['page'])
		{
			case 'team':
				include 'team.php';
				break;
			case 'events':
				include 'events.php';
				break;
			case 'publications':
				include 'publications.php';
				break;
			case 'links':
				include 'links.php';
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
