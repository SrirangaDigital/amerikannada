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
			<div id="nav"><a href="../ebooks">ಇ-ಪುಸ್ತಕಗಳು&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
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
				
				<?php
				$cat = array("lek"=>"ಲೇಖನಗಳು",
							"poem"=>"ಕವನಗಳು",
							"rev"=>"ಪುಸ್ತಕ ವಿಮರ್ಶೆ",
							"habba"=>"ಹಬ್ಬ - ಹರಿದಿನ ",
							"person"=>"ವ್ಯಕ್ತಿ ಪರಿಚಯ ",
							"hombelaku"=>"ಹೊಂಬೆಳಕು"
							);
				$aid = $_GET['aid'];
				include("connect.php");
			
				$queryg = "select * from latest_authors where aid='$aid'";
				$resultg = $mysqli->query($queryg);
				$num_rowsg = $resultg->num_rows;
				if($num_rowsg)
				{
					for($ig=1;$ig<=$num_rowsg;$ig++)
					{
						$rowg=$resultg->fetch_assoc();
						$aid=$rowg['aid'];
						$author=$rowg['author'];
					}
				}
				$author = trim($author);
				echo("<span class=\"title\">$author</span>");
				
				$query7 = "select * from latest_authors where author='$author'";
				$result7 = $mysqli->query($query7);
				$num_rows7 = $result7->num_rows;
				if($num_rows7)
				{
					for($i7=1;$i7<=$num_rows7;$i7++)
					{
						$row7=$result7->fetch_assoc();
						$about=$row7['about'];
						$imagepath=$row7['imagepath'];
						echo("<div class=\"authorbox\">");
							echo "<div class=\"para11\"><img src=\"../html/authors/$aid.jpg\"/></div>";
							echo "<div class=\"para\">$about</div>";
						echo("</div>");
					}
				}
				
				
				$query11 = "select distinct category from latest_articles where author='$author'";
				$result11 = $mysqli->query($query11);
				$num_rows11 = $result11->num_rows;
				if($num_rows11)
				{
					for($i11=1;$i11<=$num_rows11;$i11++)
					{
						$row11=$result11->fetch_assoc();
						$category=$row11['category'];
						
						$query111 = "select * from latest_articles where author='$author' and category='$category' order by artid desc";
						$result111 = $mysqli->query($query111);
						$num_rows111 = $result111->num_rows;
						if($num_rows111)
						{
							echo("<ul class=\"center\">");
							echo("<span class=\"titletag\">$cat[$category]</span>");
							for($i111=1;$i111<=$num_rows111;$i111++)
							{
								$row111=$result111->fetch_assoc();
								$title=$row111['title'];
								$date=$row111['date'];
								list($a,$b,$c) = explode("-",$date);
								$disdate = "$c"."-"."$b"."-"."$a";
								$artid=$row111['artid'];
								echo("<li><a href=\"latest_articles.php?artid=$artid\"><span class=\"titlespan\">$title</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<span class=\"date\">($disdate)</span></li>");
							}
							echo"</ul>";
						}
					}
				}

/*
				$query11 = "select * from latest_articles where author like '%$authorname%' order by artid desc";
				$result11 = $mysqli->query($query11);
				$num_rows11 = $result11->num_rows;
				if($num_rows11)
				{
					echo("<ul class=\"center\">");
					for($i11=1;$i11<=$num_rows11;$i11++)
					{
						$row11=$result11->fetch_assoc();
						$title=$row11['title'];
						$date=$row11['date'];
						$category = $row11['category'];
						$artid=$row11['artid'];
						echo("<li><a href=\"latest_articles.php?artid=$artid\"><span class=\"titlespan\">$title($category)</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<span class=\"date\">($date)</span></li>");
					}
					echo("</ul>");
				}
*/
				?>
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
