<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Amerikannada</title>
<link href="html/style/reset.css" media="screen" rel="stylesheet" type="text/css" />
<link href="html/style/indexstyle.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="page">
	<div class="header">
		<div class="logo">

			<img class="logo_img" src="html/images/logo.png" alt="Logo" title="Logo"/>
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
			<div id="nav"><a class="active" href="index.php">ಮುಖಪುಟ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
			<div id="nav"><a href="html/hari.html">ಹರಿಹರೇಶ್ವರ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
			<div id="nav"><a href="html/books.html">ಪುಸ್ತಕಗಳು&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
			<div id="nav"><a href="html/gallery.html">ಗ್ಯಾಲರಿ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
			<div class="archive_widget">
				<div class="title">ಅಮೆರಿಕನ್ನಡ</div>

				<a href="html/issues.php"><img src="html/images/archive.png" alt="archive" border="0"/></a>
				<div class="text"><a href="html/issues.php">ಹಿಂದಿನ ಸಂಚಿಕೆಗಳು</a></div>
			</div>
			<div class="counter">
				<div class="title">Visitors</div>
				<div class="text">
<?php

include("html/count.php");
?>
				</div>
			</div>
		</div>
		<div class="column2">
			<div id="headnav">
				<ul>
					<li><a href="html/font_help.html">Font Help</a></li>

					<li>|</li>
					<li><a href="html/sitemap.html">Site Map</a></li>
					<li>|</li>
					<li><a href="#">Register</a></li>
					<li>|</li>
					<li><a href="html/contact.html">Contact us</a></li>

				</ul>
			</div>
			<div class="maintext">
				<div class="about">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&apos;ಅಮೆರಿಕನ್ನಡ&apos; ಪತ್ರಿಕೆಯು 1984ರ ಆಗಸ್ಟ್ ತಿಂಗಳಲ್ಲಿ ಅಮೆರಿಕಾದ 32 ರಾಜ್ಯಗಳಲ್ಲಿ ಒಂದೇ ದಿನ ಬಿಡುಗಡೆಯಾಯಿತು. ಇದು ಸಾಹಿತ್ಯ ಪತ್ರಿಕೆ. ಇದರಲ್ಲಿ ಕಥೆ, ಕವನ, ಪ್ರಬಂಧ, ಕನ್ನಡ ಕಾರ್ಯಕ್ರಮಗಳ ಸುದ್ದಿ, ವ್ಯಕ್ತಿ ಪರಿಚಯ, ಕನ್ನಡ ಪಾಠ, ಪದಬಂಧ ಮೊದಲಾದ ವಿಷಯಗಳನ್ನು ಒಳಗೊಂಡಿರುತ್ತಿತ್ತು. ಈ ಪತ್ರಿಕೆಯು 1992ರ ವರೆಗೂ ನಿರಾತಂಕವಾಗಿ ಸಾಗಿತ್ತು. ಈಗ ಹರಿಯ ಸವಿನೆನಪಿನಲ್ಲಿ  ಅಂತರ್ಜಾಲ ತಾಣದಲ್ಲಿ ಈ ಪತ್ರಿಕೆಯನ್ನು ಪುನರ್ ಪ್ರಾರಂಭಿಸಲಾಗುತ್ತಿದೆ. 
					ಈ ಕಾರ್ಯವನ್ನು ಪರಮಪೂಜ್ಯ ಜಗದ್ಗುರು ಶ್ರೀ ಶ್ರೀ ಶಿವರಾತ್ರಿ ದೇಶೀಕೇಂದ್ರ ಮಹಾಸ್ವಾಮಿಗಳು ನಡೆಸಿಕೊಟ್ಟರು. ಕಾರ್ಯಕ್ರಮದ ವಿವರ ಹಾಗು ಚಿತ್ರಗಳು <a href="html/latest_articles.php?artid=007" target="_blank">ಇಲ್ಲಿ ಲಭ್ಯವಿದೆ.</a>
					<div class="week">
						<div class="title">ಈ ವಾರದ ವಿಶೇಷ</div><br />
						<ul>
						<?php
							$cat = array("lek"=>"ಲೇಖನಗಳು",
										"poem"=>"ಕವನಗಳು",
										"rev"=>"ಪುಸ್ತಕ ವಿಮರ್ಶೆ",
										"habba"=>"ಹಬ್ಬ - ಹರಿದಿನ ",
										"person"=>"ವ್ಯಕ್ತಿ ಪರಿಚಯ ",
										"hombelaku"=>"ಹೊಂಬೆಳಕು",
										"recipe"=>"ಪಾಕಶಾಲೆ"
										);
							include("html/connect.php");
							$query = "select * from latest_articles where display=1 order by artid desc";
							$result = $mysqli->query($query);
							$num_rows = $result->num_rows;
							if($num_rows)
							{
								for($i=1;$i<=$num_rows;$i++)
								{
									$row=$result->fetch_assoc();
									$title=$row['title'];
									$artid=$row['artid'];
									$author=$row['author'];
									$date=$row['date'];
									$content=$row['content'];

									$queryg = "select * from latest_authors where author='$author'";
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
									echo "<li><a href=\"html/latest_articles.php?artid=$artid\"><span class=\"titlespan\">$title</span></a>&nbsp;-&nbsp;<a href=\"html/authart.php?aid=$aid\"><span class=\"authorspan\">$author</span></a></li>";
								}
							}
							else
							{
								$query11 = "select distinct date from latest_articles order by date desc limit 1";
								$result11 = $mysqli->query($query11);
								$num_rows11 = $result11->num_rows;
								if($num_rows11)
								{
									for($i11=1;$i11<=$num_rows11;$i11++)
									{
										$row11=$result11->fetch_assoc();
										$date11=$row11['date'];
									}
								}
								$query = "select * from latest_articles where date='$date11' order by date desc";
								$result = $mysqli->query($query);
								$num_rows = $result->num_rows;
								if($num_rows)
								{
									for($i=1;$i<=$num_rows;$i++)
									{
										$row = $result->fetch_assoc();
										$title=$row['title'];
										$artid=$row['artid'];
										$author=$row['author'];
										$date=$row['date'];
										$content=$row['content'];
										$author = preg_replace('/^-/i','',$author);
										list($tuned_author,$waste) = explode(",",$author);
										echo "<li><a href=\"html/latest_articles.php?artid=$artid\"><span class=\"titlespan\">$title</span></a>&nbsp;-&nbsp;<a href=\"html/authart.php?authorname=$tuned_author\"><span class=\"authorspan\">$author</span></a></li>";
									}
								}
							}
						?>
						</ul>
					</div>
					<div class="news">
						<div class="title">News</div>
						<ul>
							<li><span class="authorspan"><a href="html/news_09.html" target="_blank">ಬಿ.ಎಸ್. ದೊರೆಸ್ವಾಮಿ ರವರ ಪತಂಜಲಿ ಯೋಗ ಶಿಕ್ಷಣ ಸಮಿತಿ (ರಿ).</a></span></li>
						</ul>
					</div>
					<div class="djvulink">
						ಲೇಖನಗಳನ್ನು ಡೆಜವೂ (DjVu) ರೂಪದಲ್ಲಿಟ್ಟಿದೆ. ಅವುಗಳನ್ನು<br />
						ನೋಡಲು ಡೆಜವೂ ಪ್ಲಗಿನ್ ಅಗತ್ಯ. ಇದು ಮುಕ್ತವಾಗಿ ಇಲ್ಲಿ ಸಿಗುತ್ತದೆ:<br />
						<a href="http://www.caminova.net/en/downloads/download.aspx?id=1"><img src="html/images/djvu.gif" alt="djvu_download"/></a>
					</div>
				</div>	
				<div class="widget">
					<div class="title">ಶಿಕಾರಿಪುರ ಹರಿಹರೇಶ್ವರ</div>
					<img src="html/images/hariwidget.jpg" alt="hari"/>
					<div class="text">1936 - 2010</div>
					<div class="text"><a href="html/djvu/bio_data.djvu">ಜೀವನ ಮತ್ತು ಸಾಧನೆ</a></div>
				</div>
				<div class="classify">
					<div class="title">ಅಮೆರಿಕನ್ನಡ</div>
					<?php
							$query11 = "select distinct category from latest_articles";
							$result11 = $mysqli->query($query11);
							$num_rows11 = $result11->num_rows;
							
							if($num_rows11)
							{
								for($i11=1;$i11<=$num_rows11;$i11++)
								{
									$row11=$result11->fetch_assoc();
									$category=$row11['category'];
									
									if($category != "hombelaku" && $category != "")
									{
										echo("<div class=\"text\"><a href=\"html/categories.php?category=$category\">$cat[$category]</a></div>");
									}
								}
							}
					?>
					<div class="title_bottom"><span class="authorspan"><a href="html/latest-authors.php" target="_blank">ಲೇಖಕರ ಪಟ್ಟಿ</a></span></div>
				</div>
				<div class="classify">
					<div class="title">ಹೊಂಬೆಳಕು</div>
					<?php
							$query11 = "select * from latest_articles where category=\"hombelaku\" order by artid desc limit 10";
							$result11 = $mysqli->query($query11);
							$num_rows11 = $result11->num_rows;
							if($num_rows11)
							{
								for($i11=1;$i11<=$num_rows11;$i11++)
								{
									$row11 = $result11->fetch_assoc();
									$few=$row11['few'];
									$artid=$row11['artid'];
									echo("<div class=\"text\"><span class=\"authorspan\"><a href=\"html/latest_articles.php?artid=$artid\">$few...</a></span></div>");
									$finalfew='';
								}
							}
					?>
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
					<li><a href="html/contact.html">Contact us</a></li>
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
