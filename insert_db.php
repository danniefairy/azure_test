<?php
	if(isset($_GET['six']))
		$insert=array($_GET['name'],$_GET['phone'],$_GET['one'],$_GET['two'],$_GET['three'],$_GET['four'],$_GET['five'],$_GET['six'],$_GET['comment'] );
		foreach ($insert as $key => $value) {
			echo $value."<br>";
		}

    include "connect_db.php";
	session_start();
	$id=$_SESSION['id'];
	$name="\"$insert[0]\"";
	$phone=$insert[1];
	foreach ($insert as $key => $value) {
		if(empty($value)){
			$insert[$key]=null;
			echo $key."<br>";
		}
	}
	$update="UPDATE `questionnaire` SET `name`=$name,`phone`=$phone,`one`=$insert[2],`two`=$insert[3],`three`=$insert[4],`four`=\"$insert[5]\",`five`=\"$insert[6]\",`six`=\"$insert[7]\",`seven`=\"$insert[8]\" WHERE `id`=$id";
	mysqli_query($connect,$update);
	/*echo "<script>
				var url=\"finish_page.php?name=$insert[0]&phone=$insert[1]\";
				window.location.href=url;
			</script>";*/
?>