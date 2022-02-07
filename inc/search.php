<?php
	session_start();
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		include_once 'function.php';
		include_once 'db.inc.php';
		try {
			$db = new PDO(DB_INFO, DB_USER, DB_PASS);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo "fail:" .
					$e->getMessage();
		}
		if ($_POST['submit'] = "search" || (!empty($_POST['code'])) || (!empty($_POST['name'])) || (!empty($_POST['mobile'])) || (!empty($_POST['pincode'])) || (!empty($_POST['date_add'])) || (!empty($_POST['date_shipped'])) || (!empty($_POST['date_complete'])) || $_POST['status'] != 'null') {
            echo "hello";
			$info = retrivedata($db,$_POST);
			$_SESSION["data"] = $info;
			if ($info) {
				foreach ($info as $row) {
					foreach ($row as $inf => $info_value) {
						echo "key=" . $inf . " ,value=" . $info_value;
						echo "<br>";
					}
				}
			}
//			echo $_SESSION['date'];
			header("Location:../action.php");
		}
		else
		{
			echo '<script> alert("please fill any entry") </script>';
		}
	}
?>
|| (!empty($_POST['name']) || (!empty($_POST['mobile']) || (!empty($_POST['pincode']) || (!empty($_POST['date_add']) || (!empty($_POST['date_shipped']) || (!empty($_POST['date_complete']) || ($_POST['status'] != "null")
