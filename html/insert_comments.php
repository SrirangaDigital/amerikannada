<div class="main_comments">

<?php

include("connect.php");

$com_name=$_POST['com_name'];
$com_email=$_POST['com_email'];
$com_text=$_POST['com_text'];
$email_error = 0;

if (($com_name != "") && ($com_email != "") && ($com_text != ""))
{
	if(preg_match('/^[a-z0-9\-_\.]+@([a-z0-9][a-z0-9\-]*\.)+[a-z]+$/', $com_email))
	{
		$repeat = $mysqli->query("select * from comments where name='$com_name' and email='$com_email' and text='$com_text'");
		$num_rows1 = $repeat->num_rows;
	
		if($num_rows1 == 0)
		{	
			$my_t=getdate();
			$dt = "$my_t[weekday], $my_t[month] $my_t[mday], $my_t[year]";
/*
			$result = $mysqli->query("insert into comments values('$artid', '$com_name', '$com_email', '$com_text', '$dt', '')");
*/
		}
		$com_name = "";
		$com_email = "";
		$com_text = "";
	}
	else
	{
		$email_error = 1;
	}
}

$query = "select * from comments where num='$artid' order by cid";
$result = $mysqli->query($query);
$num_rows = $result->num_rows;

if($num_rows)
{
	echo "<span class=\"title\">ಅನಿಸಿಕೆ - ಅಭಿಪ್ರಾಯ</span><br/>";
	echo "<span class=\"com_title\">$num_rows comments</span><br/>";
					
	for($i=1;$i<=$num_rows;$i++)
	{
		$row=$result->fetch_assoc();
		$name=$row[name];
		$text=$row[text];
		$dt=$row[dt];
		$cid=$row[cid];
		
		echo "<div class=\"comment\" id=\"$cid\">
					<span class=\"com_author\">$name</span><br />
					<span class=\"com\">$text</span><br />
					<span class=\"com_date\">$dt</span>
				</div>\n";
	}
}
?>
<a id="comments"></a>
				<br /><span class="title">
					ನಿಮ್ಮ ಪ್ರತಿಕ್ರಿಯೆ
				</span><br/><br/>				
<?php
echo "				<form method=\"POST\" action=\"latest_articles.php?artid=$artid#comments\">
					<input name=\"com_name\" type=\"text\" class=\"com_name\" id=\"com_name\" value=\"$com_name\"/>&nbsp;&nbsp;<span class=\"com_title\">ಹೆಸರು*</span><br />
					<input name=\"com_email\" type=\"text\" class=\"com_email\" id=\"com_email\" value=\"$com_email\"/>&nbsp;&nbsp;<span class=\"com_title\">ಇ-ಮೇಲ್*</span><br />
					<span class=\"com_title\"><span class=\"com_title\">Type in Kannada (Press Ctrl+g to toggle between English and Kannada)</span></span>
					<textarea name=\"com_text\" rows=\"4\" class=\"com_text\" id=\"com_text\">$com_text</textarea><br />";

if (!(($com_name == "") && ($com_email == "") && ($com_text == "")))
{
	if ($com_name == "")
	{
		echo "<span class=\"com_title\">ಹೆಸರನ್ನು ಕಡ್ಡಾಯವಾಗಿ ನಮೂದಿಸಬೇಕು</span><br />";
	}	
	
	if ($com_email == "")
	{
		echo "<span class=\"com_title\">ಇ-ಮೇಲ್ ಅಂಚೆಯನ್ನು ಕಡ್ಡಾಯವಾಗಿ ನಮೂದಿಸಬೇಕು</span><br />";
	}
	elseif ($email_error == 1)
	{
		echo "<span class=\"com_title\">ಸರಿಯಾದ ಇ-ಮೇಲ್ ಅಂಚೆಯನ್ನು ನಮೂದಿಸಬೇಕು</span><br />";
	}
		
	if ($com_text == "")
	{
		echo "<span class=\"com_title\">ನಿಮ್ಮ ಅನಿಸಿಕೆಗಳನ್ನು ನಮೂದಿಸಬೇಕು</span><br />";
	}
}

?>
		<input name="com_button" type="submit" class="com_submit" id="com_button" value="Post Comment"/>
	</form>
</div>
