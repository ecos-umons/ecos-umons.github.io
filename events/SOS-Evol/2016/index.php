<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<title>SOS-Evol Seminar on Open Source Evolution</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" title="" />
<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<META NAME='TITLE' CONTENT='SOS-Evol Seminar on Open Source Evolution'>
<META NAME="DESCRIPTION" CONTENT="SOS-Evol is a seminar for anyone interested in how open source ecosystems and distributions evolve over time.">
<META NAME='KEYWORDS' CONTENT='software evolution, open source software, libre software, software engineering'>
<META NAME='OWNER' CONTENT='Tom Mens'>
<META NAME='AUTHOR' CONTENT='UMONS - Tom Mens'>
<META NAME='LANGUAGE' CONTENT='en'>

</head>

<body>

<div id="enveloppe-globale">
<!--<div class="t_fond"><div class="b_fond"><div class="l_fond"><div class="r_fond"><div class="bl_fond"><div class="br_fond">
<div class="tl_fond"><div class="tr_fond">-->
<!--<div><p>&nbsp;</p></div>-->
<div><br /></div>
<br />
<br />
<div id="en-tete"> <!--entete-->
	
    <table width="100%"  border="0" cellspacing="1" cellpadding="0"><tr><td width="100%" align="center">
      	<br />

     	 <h1><font color="#951E2D">SOS-Evol Research Seminar</font></h1><br />
		 <img src="../images/SOS.png"/>
     </td></tr></table>
    
    <table width="100%"  border="0" cellspacing="1" cellpadding="0"><tr>
 <!--       <td><div align="center"><img src="../images/penta4.jpg" height="105" align="absbottom" /></div></td> -->
 <!-- ><td><div align="center"><img src="../images/wordle.jpg" height="105" align="absmiddle" /></div></td> -->
 <!--         <td><div align="center"><img src="../images/penta01s.jpg" height="105" align="absbottom" /></div></td> -->
    </tr></table>

</div><!-- fin d'entete-->

<div id="banniere">

</div>

<div id="enveloppe-exterieure">

  <div id="enveloppe">

<div id="contenu">
<div id="enveloppe_menu">       <!-- begin of menu -->

<div class="menu_box"><div class="tl"><div class="tr">
<!-- begin of the box -->
<h1>Menu</h1>
<ul>
	<li><a href="?page=home">Home</a></li>
	<li><a href="?page=program">Program</a></li>
	<li><a href="?page=register">Register</a></li>
	<li><a href="?page=location">Location</a></li>
</ul>
<br/>
<!-- end of the box -->
</div></div></div>

</div> <!-- end of menu -->

<div id="principal"> <!-- begin of the main part-->

<?php

	switch($_GET['page'])
	{
		case 'program': 
			include 'program.php';
			break;
		case 'register':
			include 'register.php';
			break;
		case 'location':
			include 'location.php';
			break;			
		default: 
			include 'home.php';
	}
?>


</div>                        <!-- end of the main part-->
</div></div>
<div class="deblayage">&nbsp;</div>
  </div>
  
<!--</div>-->

<div id="pied-de-page">
<!--<div class="bl_piedpage"><div class="br_piedpage">-->
  <table width="60%"  border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td><div align="center"><span class="FormBackgroundColor"></span></div></td>
      <td><div align="center"><span class="center"><a href="http://www.umons.ac.be" target="_blank"><img src="../images/umons-logo.jpg" alt="Universit&eacute; de Mons" width="125" border="0" /></a></span></div></td>
      <td><div align="center"><span class="FormBackgroundColor"></span></div></td>
       <td><div align="center"><span class="FormBackgroundColor"></span></div></td>
      <td><div align="center"><span class="center"><a href="http://www.umons.ac.be/complexys" target="_blank"><img src="../images/logo-complexysUK.png" alt="COMPLEXYS Research Institute of UMONS" width="125" border="0" /></a></span></div></td>
      <td><div align="center"><span class="FormBackgroundColor"></span></div></td>
     <td><div align="center"><span class="center"><a href="http://www.umons.ac.be/infortech" target="_blank"><img src="../images/infortechuk.png" alt="INFORTECH Research Institute of UMONS" width="125" border="0" /></a></span></div></td>

      <td><div align="center"><span class="FormBackgroundColor"></span></div></td>
     <td><div align="center"><span class="center"><a href="http://www.grascomp.be" target="_blank"><img src="../images/grascomp.jpg" alt="GRASCOMP" width="125" border="0" /></a></span></div></td>
    </tr>
  </table>

  <!--</div></div>-->

  
</div><!--fin du pied-->
  
 <!-- 
<div><p>&nbsp;</p></div>
-->
<!--
</div></div></div></div></div></div></div></div>
-->


</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3568571-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>
