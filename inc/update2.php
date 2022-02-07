
<?php
	session_start();
//	$_SESSION['res']=-1;
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		include_once 'function.php';
		include_once 'db.inc.php';
		try {
			$db = new PDO(DB_INFO, DB_USER, DB_PASS);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                echo "successful";
		} catch (PDOException $e) {
			echo "fail:" .
				$e->getMessage();
		}
//		echo " entr";
		if ($_POST['submit'] == 'Ship') {
			$cod = $_POST['code'];
			echo "<br>";
			$sql = "insert into shipped select code,(select curdate()) from couriers where code=$cod";
			$sql2 = "UPDATE couriers SET status='Shipped' where code=$cod";
			if ($db->query($sql) && $db->query($sql2)) {
				$_SESSION['res']=1;
				$_SESSION['massage']="Successfully Shipped";
				header('Location:../action.php?$res='.$resul);
			} else {
				$_SESSION['res']=0;
				$_SESSION['massage']="Failed";
				header('Location:../action.php?$res='.$resul);
			}
//			echo $_POST['code'];
		}
		if (($_POST['submit'] == 'Complete')) {
			$cod = $_POST['code'];
			$sql = "insert into comple(UnId, Com_Date)  select code,(select curdate()) from couriers where code=$cod";
			$sql2 = "UPDATE couriers SET status='Completed' where code=$cod";
			$sql3 = "Delete from shipped where SUnId=$cod";
			echo "stop at this";
			if ($db->query($sql) && $db->query($sql2) && $db->query($sql3)) {
//				echo "stop at this";
				$_SESSION['res']=1;
//				$_SESSION['massage']="Successfully recived";
				header('Location:../action.php');
			} else {
//				echo "stop at this";
				$_SESSION['res']=0;
//				$_SESSION['massage']="Failed";
				header('Location:../action.php');
			}
		}
	}
?>

	