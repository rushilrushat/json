<?php
header('Content-type: application/json');
require_once __DIR__ . '/config/db_connect.php';
$db = new DB_CONNECT();

if (isset($_REQUEST['date'])&&isset($_REQUEST['stime'])&&isset($_REQUEST['etime'])) {
        $date=$_REQUEST['date'];
        $stime=$_REQUEST['stime'];
        $etime=$_REQUEST['etime'];
        $sql="INSERT INTO `schedule_tbl` (`s_date`, `s_stime`, `e_time`) VALUES ( '$date', '$stime', '$etime');";
        $inserted=mysqli_query($db->connect(),$sql);
        
        if ($inserted==1) {
            $response["success"] = 1;
            echo json_encode($response);
        } else {
            $response["success"] = 0;
            echo json_encode($response);
            exit();
        }
    
   
}
error_reporting(E_ERROR | E_PARSE);

?>