<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courier at your door</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>



<h1>hello customer</h1>
<?php
include_once 'inc/function.php';
include_once 'inc/db.inc.php';
$code = $_GET['code'];
//    $db=new PDO(DB_INFO,DB_USER,DB_PASS);
try {
    $db = new PDO(DB_INFO, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                echo "successful";
} catch (PDOException $e) {
    echo "fail:" .
        $e->getMessage();
}
$sql = "select * from couriers
               where code=$code";
$result = $db->query($sql);
//    echo "success1";
//    $res2=$db->query("select name from $result
//               where code=$code");
//    echo "success2";
//    echo $res2['name'];
echo "helo world \n";
//	echo $result;
foreach ($result as $row) {
    $code = $row['code'];
    $name = $row['name'];
    $date = $row['Date_add'];
    $status = $row['status'];
}

?>

<table id="tabl1">
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Date</th>
        <th>Status</th>
    </tr>
    <tr>
        <td><?php echo $code ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $date ?></td>
        <td><?php echo $status ?></td>
    </tr>

</table>

</body>

