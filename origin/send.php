<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<?php
		include "connect_db.php";
		session_start();
		$id=$_SESSION['id'];
		if(isset($_GET['value']))
		{
			$piece=explode("-",$_GET['value']);
			$question_number=$piece[0];
			$question_content=$piece[1];

			if($question_number=="five")
			{
				switch ($question_content) {
					case 1:
						$question_content="\"粉絲專頁(FB社群平台)\"";
						break;
					case 2:
						$question_content="\"微軟實習官方網站\"";
						break;
					case 3:
						$question_content="\"海報 / 傳單\"";
						break;
					case 4:
						$question_content="\"宣傳攤位\"";
						break;
					case 5:
						$question_content="\"親友分享\"";
						break;
					default:
						# code...
						break;
				}
			}
			elseif ($question_number=="six") {
				switch ($question_content) {
					case 1:
						$question_content="\"會\"";
						break;
					case 2:
						$question_content="\"不會\"";
						break;
					case 3:
						$question_content="\"不一定\"";
						break;
					default:
						# code...
						break;
				}
			}
			
			$update="UPDATE `questionnaire` SET `$question_number`= $question_content WHERE `id`=$id";
			mysqli_query($connect,$update);
		}
	?>
</body>
</html>
