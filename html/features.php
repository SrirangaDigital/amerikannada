<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Amerikannada</title>
<link href="style/reset.css" media="screen" rel="stylesheet" type="text/css" />
<link href="style/indexstyle.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="page">
	<div class="header">
		<div class="logo">
			<img class="logo_img" src="images/logo.png" alt="Logo" title="Logo"/>
		</div>
		<div class="title">
			ಅಮೆರಿಕನ್ನಡ
		</div>
		<div class="subtitle">
			Amerikannada
		</div>				
	</div>
	<div class="body">
		<div class="column1">
			<div id="nav"><a href="../index.php">ಮುಖಪುಟ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
			<div id="nav"><a href="hari.html">ಹರಿಹರೇಶ್ವರ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
			<div id="nav"><a href="books.html">ಪುಸ್ತಕಗಳು&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
			<div id="nav"><a href="gallery.html">ಗ್ಯಾಲರಿ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
			<div class="archive_widget">
				<div class="title">ಅಮೆರಿಕನ್ನಡ</div>
				<a href="issues.php"><img src="images/archive.png" alt="archive" border="0"/></a>
				<div class="text"><a href="issues.php">ಹಿಂದಿನ ಸಂಚಿಕೆಗಳು</a></div>
			</div>
		</div>
		<div class="column2">						
			<div id="headnav">
				<ul>
					<li><a href="font_help.html">Font Help</a></li>
					<li>|</li>
					<li><a href="sitemap.html">Site Map</a></li>
					<li>|</li>
					<li><a href="#">Register</a></li>
					<li>|</li>				
					<li><a href="contact.html">Contact us</a></li>				
				</ul>
			</div>
			<div class="maintext">
				<div id="archive_nav">
					<ul>
						<li><a href="articles.php">ಲೇಖನಗಳು</a></li>
						<li><a href="authors.php">ಲೇಖಕರು</a></li>
						<li><a href="issues.php">ಸಂಚಿಕೆಗಳು</a></li>
						<li><a class="active" href="features.php">ಸ್ಥಿರ ಶೀರ್ಷಿಕೆಗಳು</a></li>
					</ul>
				</div>
				<div class="archive_title">
					<span>ಸ್ಥಿರ ಶೀರ್ಷಿಕೆಗಳ ಪಟ್ಟಿ</span>
				</div>
				<div class="archive">
					<ul>
					
<?php


include("connect.php");

$query1 = "select distinct feature from article order by feature";
$result1 = $mysqli->query($query1);
$num_rows1 = $result1->num_rows;

if($num_rows1)
{
	for($i1=1;$i1<=$num_rows1;$i1++)
	{	
		$row1=$result1->fetch_assoc();
		$feature=$row1['feature'];
		
		if($feature != '')
		{
			echo "<li><span class=\"titlespan\"><a href=\"feat.php?feature=$feature\">$feature</a></span></li>";
		}
	}
}	
		
?>					
					
					</ul>
				</div>
			</div>				
		</div>
	</div>
	<div class="footer">
		<div class="foot_box">
			<div class="left">
				<ul>
					<li><a href="#">Terms of Use</a></li>
					<li>|</li>
					<li><a href="#">Privacy Policy</a></li>
					<li>|</li>		
					<li><a href="contact.html">Contact us</a></li>				
				</ul>
			</div>
			<div class="right">
				&copy;2011 Amerikannada, All Rights Reserved
			</div>
		</div>
	</div>
</div>

</body>
</html>
