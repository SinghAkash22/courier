<script type="text/javascript" src="script.js"></script>
<?php
	//    include_once 'script.js';
	function checking($db, $uname, $ups)
	{
		$sql = "select uname,pass
              from Admin";
		$result = $db->query($sql);
		
		foreach ($result as $row) {
			if (
					$row['uname'] == $uname &&
					$row['pass'] == $ups
			) {
				return 1;
			} else {
				return 0;
			}
		}
	}
	
	function retrivedata_code($db, $code)
	{
		$sql = 'select *
        from couriers
        where code=$code';
		$result = $db->query($sql);
		return $result;
	}
	
	function insert($db, $data)
	{
		echo "hello function   ";
		$name = $data["name"];
		$mob = $data["mobile"];
		$pin = $data["pincode"];
		$addre = $data["addre"];
		$email = $data["Email"];
//		echo "function 2  ";
		echo "\n";
		echo $name;
//		$nam='ankit';
		$sql = "insert into couriers(name,mob_no,pin,address,email,Date_add) values (?,?,?,?,?,current_date ())";
//		$sql = "insert into couriers(name,mob_no,pin,address,email,Date_add) value ('ankit',1223455,13244,'dffgd','ghsh',current_date ())";
//		$resul=$db->prepare($sql);
		$result = $db->prepare($sql);
		$result->execute(array($name, $mob, $pin, $addre, $email));
		$result->closeCursor();
//		$rs=$db->query($sql);
		echo "function 3 ";
//		if ($db->query($sql) === TRUE) {
//			echo "success";
////			echo '<script type="text/javascript">','Info_Submitted();','</script>';
//		} else {
//			echo " not submitted";
////			echo '<script type="text/javascript">','Info_Submit_fail();','</script>';
//		}
	}
	
	function isvalidDate($date)
	{
		if (false === strtotime($date)) {
			return false;
		}
		list($year, $month, $day) = explode('_', $date);
		return checkdate($month, $day, $year);
	}

    function retrivedata($db,$POST)
    {
        $flag=0;
        echo $POST["code"];
//        echo $POST["status"];
        $sub_sql = "select * from couriers as cu Left join shipped as sh on cu.code=sh.SUnId left join comple as comp on cu.code=comp.UnId where ";
//        echo $sub_sql;
        $code=$POST['code'];
        $name=$POST["name"];
        $status=$POST["status"];
        $mobile=$POST["mobile"];
        $pincode=$POST["pincode"];
        $date_add=$POST["date_add"];
        $date_shi=$POST["date_shipped"];
        $date_comp=$POST["date_complete"];
        if($POST['code']!=null)
        {
            $sub_sql .= "$code=code";
            $flag=1;
        }
if($POST["name"]!=null)
{
    if($flag==1)
    {
        $sub_sql.=" and";
    }
    $sub_sql.="'$name'=name";
    $flag=1;
}
   if($POST["mobile"]!=null)
{
    if($flag==1)
    {
        $sub_sql.=" and";
    }
    $sub_sql.=" $mobile=mob_no";
}
   if($POST["pincode"]!=null)
{
    echo "hellllllllllli";
    if($flag==1)
    {
        $sub_sql.=" and";
    }
    $sub_sql.=" $pincode=pin";
}
        if($POST["status"]!='null')
        {
            echo $POST['status'];
            if($flag==1)
    {
        $sub_sql.=" and";
    }
    $sub_sql.="  '$status'=status";
}
   if($POST["date_add"]!=null)
{
    if($flag==1)
    {
        $sub_sql.=" and";
    }
    $sub_sql.=" '$date_add'=Date_add";
}
   if($POST["date_shipped"]!=null)
{
    if($flag==1)
    {
        $sub_sql.=" and";
    }
    $sub_sql.=" '$date_shi'=Shi_Date";
}
   if($POST["date_complete"]!=null)
{
    if($flag==1)
    {
        $sub_sql.=" and";
    }
    $sub_sql.=" '$date_comp'=Com_Date";
}
        echo $sub_sql;
        $result = $db->query($sub_sql);
        $rw=$result->rowCount();
        if($rw==0)
        {
            echo '';
        }
        $infodata = $result->fetchAll(PDO::FETCH_ASSOC);
//        $result->free();
        echo "jjjjj";
        return $infodata;
    }


//	function retrivedata($db,$_POST)
//	{
////		$table = $_POST['status'];
//		$date = "";
////		echo "hello";
//		if (!empty($_POST['code'])) {
//			echo "    my code    ";
////			echo $_POST['code'];
//		}
//		if (!empty($_POST['date_shipped'])) {
//			$da = $_POST['date_shipped'];
//			if (!isvalidDate($da)) {
//				echo " wrong date";
////				return 0;
//			}
////			echo "shiopped";
////			echo "\n";
//			$date = 'date_ship';
//		}
//		if (!empty($_POST['date_complete'])) {
//			$da = $_POST['date_complete'];
//			if (!isvalidDate($da)) {
//				echo " wrong date";
////				return 0;
//			}
////
//			$date = 'date_complete';
//		}
////		echo $_POST['pincode'];
//		if (!empty($_POST['status'])) {
//			if ($_POST['status'] == 'Shipped') {
//				$date = 'date_ship';
//			}
//			if ($_POST['status'] == 'Completed') {
//				$date = 'date_complete';
//			}
//		}
//
////		echo $date ;
////		if (!empty($date)) {
////			echo " switch entry ";
////			switch ($date) {
////				case "date_complete":
////					$sub_sql .= ' ';
////					$sub_sql .= '';
////					break;
////				case "shipped":
////					$sub_sql .= ' ';
////					$sub_sql .= 'Left join shipped as sh on cu.code=sh.UnId';
////					break;
////				default:
////					break;
////			}
////		}
//		$flag = false;
//		$sql = "select * from($sub_sql)sub where";
////		$sql2="select * from couriers as cu where cu.code=5";
//		if (!empty($_POST['code'])) {
//			$flag = false;
//			$code = $_POST['code'];
//			$sql .= " ";
//			$sql .= "code=$code";
////			echo $sql;
//			$result = $db->query($sql);
////			echo "good";
//			$infodata = $result->fetchAll(PDO::FETCH_ASSOC);
//			echo "<br>";
////			foreach ($infodata as $r)
////			{
////				$key = array_keys($r);
////				break;
////			}
////			foreach ($key as $row)
////			{
////			echo $row;
////			echo "<br>";
////			}
//			return $infodata;
//		}
//		if(!empty($_POST['status']))
//		{
//			$sta=$_POST['status'];
//			if($sta!='null')
//			{
//				$sql.= " ";
//				$sql.= "'$sta'=status";
//				$flag=true;
//			}
//		}
//		if (!empty($_POST['pincode'])) {
//			if ($flag) {
//				$sql.=" ";
//				$sql .= "and";
//			}
//			$pin = $_POST['pincode'];
//			$sql .= " ";
//			$sql .= "$pin=pin";
//			$flag = true;
//		}
//		if (!empty($_POST['date_add'])) {
////			echo "hello";
//			if ($flag) {
//				$sql.=" ";
//				$sql .= "and";
//			}
//			$da = $_POST['date_add'];
//			$da2=date("Y-m-d",strtotime($da));
//			$_SESSION['date']= $da2;
//			$sql .= " ";
//			$sql .= "Date_add='$da2'";
//			$flag = true;
//		}
//		if (!empty($_POST['date_shipped'])) {
//			if ($flag) {
//				$sql.=" ";
//				$sql .= "and";
//			}
//			$da = $_POST['date_shipped'];
//			$da2=date("Y-m-d",strtotime($da));
//			$sql .= " ";
//			$sql .= "$'da2'=Shi_Date";
//			$flag = true;
//		}
//
//		if (!empty($_POST['date_complete'])) {
//			if ($flag) {
//				$sql.=" ";
//				$sql .= "and";
//			}
//			$da = $_POST['date_complete'];
//			$da2=date("Y-m-d",strtotime($da));
//			$sql .= " ";
//			$sql .= "'$da2'=Com_Date";
//			$flag = true;
//		}
//		if (!empty($_POST['name'])) {
//			if ($flag) {
//				$sql.=" ";
//				$sql .= "and";
//			}
//			$name = $_POST['name'];
//			$sql .= " ";
//			$sql .= "$name=name";
//			$flag = true;
//		}
//		if (!empty($_POST['mobile'])) {
//			if ($flag) {
//				$sql.=" ";
//				$sql .= "and";
//			}
//			$mob = $_POST['mobile'];
//			$sql .= " ";
//			$sql .= "$mob=mob_no";
//			$flag = true;
//		}
//		echo $sql;

//		return $infodata;
////		echo $res['code'];
//
//	}
