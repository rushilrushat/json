<?php
date_default_timezone_set('Asia/Kolkata');
require_once __DIR__ . '/config/db_connect.php';
$db = new DB_CONNECT();
$sql="SELECT * FROM `schedule_tbl`";
$result =mysqli_query($db->connect(), $sql);
$today = date("Y-m-d");
$count=0;
if ($result->num_rows > 0) {
    // output data of each row
    while(($row = $result->fetch_assoc())!= null) {
        $dbdate=$row["s_date"];
		$str_arr = explode (":", $row["s_stime"]);		
		$dbtime= $str_arr[0].":".$str_arr[1];
		if ($dbdate == $today && $dbtime == date('H:i')) {
             $sql="UPDATE `status_tbl` SET `motor_status`='ON' WHERE 1";
			 $inserted=mysqli_query($db->connect(),$sql);
			 $count++;
        }
	}
} else {
	echo "No data Found";

}
?>
