<?php 
include 'inc/db.inc.php';
	$db = new PDO(DB_INFO, DB_USER, DB_PASS);
$order = $db->query("SELECT * FROM couriers where code = {$_GET['id']}");
	$infodata = $order->fetchAll(PDO::FETCH_ASSOC);
foreach($infodata as $row){
	$name=$row['name'];
	$id=$row['code'];
	$mob=$row['mob_no'];
	$date=$row['Date_add'];
}
//$items = $db->query("SELECT o.*,p.name FROM billed_items o inner join products p on p.id = o.product_id where o.bill_id = $id ");
?>

<style>
	.flex{
		display: inline-flex;
		width: 100%;
	}
	.w-50{
		width: 50%;
	}
	.text-center{
		text-align:center;
	}
	.text-right{
		text-align:right;
	}
	table.wborder{
		width: 100%;
		border-collapse: collapse;
	}
	table.wborder>tbody>tr, table.wborder>tbody>tr>td{
		border:1px solid;
	}
	p{
		margin:unset;
	}

</style>
<div class="container-fluid">
	<hr>
	<div class="flex">
		<div class="w-100">
			<p>Reference Number: <b><?php echo $id ?></b></p>
			<p>Date: <b><?php echo date("M d, Y",strtotime($date)) ?></b></p>
			<p>Name: <b><?php echo $name ?><b></p>
			<p>Mobile No: <b><?php echo $mob ?><b></p>
		</div>
	</div>

</div>
