<?php
$output = array();
if($_SERVER["REQUEST_METHOD"] == "POST")
{	
	$emp_id=$_POST['emp_id'];
	$emp_password=$_POST['emp_password'];
	
//============== FOR ERROR MSG =======================
	if( (!isset($_POST['emp_password'])) || (!isset($_POST['emp_id'])) )
	{
		$output[]=["error"=>true,"error_code"=>101,"message"=>"Invalid parameter"];
		echo json_encode($output);
		return;
	}

	if( (empty($_POST['emp_password'])) || (empty($_POST['emp_id'])) )
	{
		$output[]=["error"=>true,"error_code"=>101,"message"=>"Empty parameter"];
		echo json_encode($output);
		return;
	}

//============== FOR ERROR MSG =======================   

	if ($_POST['emp_id']=="Ris123" && $_POST['emp_password']=="12345") {
		$response[]=["error"=>false,"message"=>"Password Successfully Matched ","error_code"=>100,
                    		"org_id"=>"my_org_1234"];
                    		echo json_encode($response);
	}else
         {

            	$response[] =["error_code"=>101,"message"=>"Enter username Ris123 and password 12345"]; 
            	echo json_encode($response);
          }
      }
?>