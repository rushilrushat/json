<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="project";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="select * from status_tbl";
$result = $conn->query($sql);
$responce['data'] = array();
if ($result->num_rows > 0) {
    // output data of each row
    while(($row = $result->fetch_assoc())!= null) {
        $data=array();
		$data["motor_status"]=$row["motor_status"];
		$data["s_time"]=$row["s_time"];
		$data["valve_status"]=$row["valve_status"];
		$data["pressure_status"]=$row["pressure_status"];
		$data["flow_status"]=$row["flow_status"];
		array_push($responce["data"],$data);
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