<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
	<head>
		<title> Final Grade Calculator </title>
		<link rel = "stylesheet" href = "main.css" type="text/css" />
			<link rel = "stylesheet" href = "main2.css" type="text/css" />
	</head>
	<body>

	 <div class = "header"> 
		<!--#include virtual="header.inc" -->
		<div class = "headerleft">
		<h2> Samuel Berhe </h2>
		<p> <b> <a href="mailto:sberhe2@gmu.edu"> sberhe2@gmu.edu </a> </b> </p>
		<?php
		echo "Last modified: ".date ("H:i:s F d Y T.", getlastmod());
		?>
		</div>
		<div class = "headerright">
		<p> <b> IT207 Spring 2022 </b> <br /> <br />
			Prof. Erhan Uyar <br /> <br />
			George Mason University </p>
		</div>
	 </div> 
	 <div class = "menu"> 
	 <!--#include virtual="menu.inc" -->
		<h3> Assignments </h3>
			<div class = "links" >
			<ul>
				<li><a href="http://helios.vse.gmu.edu/~sberhe2/IT207"> Homepage</a></li>
				<li><a href="http://helios.vse.gmu.edu/~sberhe2/IT207/LAB1/"> Assignment 1</a></li>
				<li><a href="http://helios.vse.gmu.edu/~sberhe2/IT207/LAB2/"> Assignment 2</a></li>
				<li><a href="http://helios.vse.gmu.edu/~sberhe2/IT207/LAB3/"> Assignment 3</a></li>
				<li><a href="http://helios.vse.gmu.edu/~sberhe2/IT207/LAB4/"> Assignment 4</a></li>
			</ul>
			</div>
			<h3> Lab Practica </h3>
			<div class = "links">
			<ul>
				<li><a href="http://helios.vse.gmu.edu/~sberhe2/IT207/LABP1/"> Lab Practicum 1</a></li>
				<li><a href="http://helios.vse.gmu.edu/~sberhe2/IT207/LABP2/"> Lab Practicum 2</a></li>
			
			</ul>
			</div> 
	 </div>
	 <div class = "content"> 
	 <h2> Welcome to my Final Grade Calculator.<br />Input the following: </h2>
		<form action='finalgrade.php' method="post">
		<h3> Participation </h3>
		Earned: <input type='text' name='earnedParticipation'/>
		Max: <input type='text' name='maxParticipation'/>
		Weight (percentage): <input type='text' name='weightParticipation' />
		<h3> Quizzes </h3>
		Earned: <input type='text' name='earnedQuizzes'/>
		Max: <input type='text' name='maxQuizzes'/>
		Weight (percentage): <input type='text' name='weightQuizzes' />
		<h3> Lab Assignments </h3>
		Earned: <input type='text' name='earnedLab'/>
		Max: <input type='text' name='maxLab'/>
		Weight (percentage): <input type='text' name='weightLab' />
		<h3> Practica </h3>
		Earned: <input type='text' name='earnedPracticum'/>
		Max: <input type='text' name='maxPracticum'/>
		Weight (percentage): <input type='text' name='weightPracticum' />
		<br /><br />
		<input type='submit'>
		</div>
	 </div>
	  
		<div class = "footer">
		  <!--#include virtual="footer.inc" -->
		<p>  This web site is entirely original work and full academic copyright is retained. This web site complies
			with the <a href="http://oai.gmu.edu/mason-honor-code/"> Mason Honor Code.</a> 
			<?php
			print "Copyright © 2022 Samuel Berhe" 
			?>
		</p>
		</div>
</body>
</html>
