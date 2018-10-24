<?php 
	//get connection established yo! 
	require("dbconfig.php");


	$poster = $_POST;
	$sql = "SELECT * FROM elements";
	$result = $conn->query($sql);
	$resultArr = array();

	if ($result->num_rows > 0) {
		$rowNum = 0;
	    while($row = mysqli_fetch_assoc($result)) {
	        $resultArr[$rowNum] = array(
	         'id' => $row['id'], 
	         'slug' => $row['slug'], 
	         'json' => $row['json']);
	    	$rowNum++;
		}
	}

	$response['post'] = $poster;
	$response['result'] = $resultArr;
	echo json_encode($response);	

?>