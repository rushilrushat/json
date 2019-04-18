<?php
header('Content-type: application/json');
require_once __DIR__ . '/config/db_connect.php';
$db = new DB_CONNECT();

if (isset($_REQUEST['id'])) {
        $id=$_REQUEST['id'];
        $sql="DELETE FROM `schedule_tbl` WHERE s_id='$id'";
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