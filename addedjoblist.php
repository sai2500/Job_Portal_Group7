<?php include("config.php");
   

    $id = $_GET['id'];
    $jobid = $_POST['Joblistid'];
    $company=$_POST['Company'];
    $joblist=$_POST['Job_title'];
    $skills=$_POST['Skills'];

	// $value = $_POST['tests'];




$query = "CALL Addjob($jobid, '$company', '$joblist', '$skills')";
$result = mysqli_query($db, $query);

if(!$result){
    die("query failed".mysqli_error($db));
}
else{
        header('location:recruiterprofile.php?id='.$id);
		// echo "Success";
}
?>