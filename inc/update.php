<?php
	session_start();
	if ($_SERVER['REQUEST_METHOD'] == "POST"
		&& ($_POST['submit'] == "Submit-code" || $_POST['submit'] == "Login" || $_POST['submit'] == "Send Info" || $_POST['submit'] == "search")) {
		include_once 'function.php';
		include_once 'db.inc.php';
//		echo "hello Akash";
		try {
			$db = new PDO(DB_INFO, DB_USER, DB_PASS);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                echo "successful";
		} catch (PDOException $e) {
			echo "fail:" .
				$e->getMessage();
		}
		if ($_POST['submit'] == "Submit-code") {
			echo "hello id";
			if (isset($_POST['ID_CODE'])) {
				$code = $_POST['ID_CODE'];
				header('Location:../cust.php?code=' .$code);
			}
		} elseif ($_POST['submit'] == "Login") {
			$user = $_POST['uname'];
			$pass = $_POST['pasw'];
			$flag = checking($db, $user, $pass);
			echo "aa";
			echo "what";
			if ($flag == 1) {
				$_SESSION['uname']=$user;
				header('Location:../admin.php');
			} else {
				echo 'not done';
			}
		} elseif ($_POST['submit'] == 'Send Info') {
			$addre = $_POST['Dist'];
			$addre .= $_POST['post'];
			$addre.=$_POST['State'];
			$name=$_POST['Name']." ".$_POST['Lname'];
			$name=$_POST['Name'];
			$data = array("name" => $name, "mobile" => $_POST['mob'], "addre" => $addre, "pincode" => $_POST['pincode']);
			if(isset($_POST['Email']))
			{
				$data["Email"]=$_POST['Email'];
			}
			else
			{
				$data["Email"]=null;
			}
			insert($db, $data);
			header('Location:../admin.php');
		}
	}

?>
