<?php
header('Content-type: application/json');
require_once __DIR__ . '/config/db_connect.php';
$db = new DB_CONNECT();

if (isset($_REQUEST['status'])) {
    if ($_REQUEST['status']=="ON"||$_REQUEST['status']=="on"||$_REQUEST['status']=="off"||$_REQUEST['status']=="OFF") {
        $ststus=strtoupper($_REQUEST['status']);
        $sql="UPDATE `status_tbl` SET `motor_status`='$ststus' WHERE 1";
        $inserted=mysqli_query($db->connect(),$sql);
        if ($inserted==1) {
            $response["success"] = 1;
            $response["message"] = $ststus;
            echo json_encode($response);
        } else {
            $response["success"] = 0;
            echo json_encode($response);
            exit();
        }
    }
   
}
error_reporting(E_ERROR | E_PARSE);

?>