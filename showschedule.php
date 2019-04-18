<?php
header('Content-type: application/json');
require_once __DIR__ . '/config/db_connect.php';
$db = new DB_CONNECT();
$sql="SELECT * FROM `schedule_tbl`";
$result =mysqli_query($db->connect(), $sql);
$responce['data'] = array();
if ($result->num_rows > 0) {
    // output data of each row
    while(($row = $result->fetch_assoc())!= null) {
        $data=array();
        $data["s_id"]=$row["s_id"];
		$data["s_date"]=$row["s_date"];
		$data["s_time"]=$row["s_stime"];
		$data["e_time"]=$row["e_time"];
		array_push($responce["data"],$data);
		$output[]=$row;
    }
	$responce["success"] = 1;
} else {
	$responce["success"] = 0;
    $responce["message"] = "No data found";
	echo json_encode($responce);
	exit();
}
echo json_encode($responce);
?>