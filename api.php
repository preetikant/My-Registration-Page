<?php 
// ######### Get post value #########
	include('congi.php'); 
	if(isset($_GET["action"])){
		$action=$_GET["action"];		
	}
	elseif(isset($_POST["action"])){
		$action=$_POST["action"];
	}	
	// Start API 	
	if($action=='register_enquiry')
	{		
			//print_r($_POST);
			$Name=$_POST['name'];
			$Father_Name=$_POST['fathername'];
			$Postal_address=$_POST['paddress'];
			$query=mysqli_query($conn,"SELECT name from student WHERE name='$Name';");
			$rowcount=mysqli_num_rows($query);
				if($rowcount>0)
						{
							$arr = array('message' => 'Data already exist','status' => '2');
							
						}
				else 
				{
					function UpperString($Name)
						{

						return strtoupper($Name);
						}
					$CName= UpperString($Name);


							$query=mysqli_query($conn,"INSERT INTO student(name,father_name,postal_address) VALUES 
							('$CName','$Father_Name','$Postal_address')");
									if($query)
									{
											$arr = array('message' => 'Data Inserted Successfully','status' => '1');
									} 
									else
									{
											$arr =array('message'=> 'Something Went Wrong','status' => '0');
									}
				}
	}	

			if($action=='ViewS')
								{
							$query=mysqli_query($conn,"SELECT name,father_name,postal_address from student");
							$data = array();
							while($row=mysqli_fetch_assoc($query)) {
							   $data[] = $row;   
								}
									$arr = array('data' => $data); 
}
						
	echo json_encode($arr);

?>

