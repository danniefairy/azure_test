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
		//submit
		if(isset($_GET['finish'])){
			if($_GET['other']!="")
			{
				$other="\"".$_GET['other']."\"";
				$update="UPDATE `questionnaire` SET `five`=$other  WHERE `id`=$id";
				mysqli_query($connect,$update);
			}
			if($_GET['comment']!="")
			{
				$comment="\"".$_GET['comment']."\"";
				$update="UPDATE `questionnaire` SET `seven`=$comment  WHERE `id`=$id";
				mysqli_query($connect,$update);
			}
		}

		echo "<script>
				var url='finish_page.php';
				window.location.href=url;
			</script>";
	?>
</body>
</html>
