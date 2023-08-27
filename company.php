//Insert Values to Company Database

<?php
	$servername="localhost:3308";
	$username="";
	$password="";
	$dbname="project";
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	
	if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
		$phone=$_POST['phone'];
		$location=$_POST['location'];
		$ceo=$_POST['ceo'];
		$hr=$_POST['hr'];
		$worth=$_POST['worth'];
		$founder=$_POST['founder'];
		
		$sql="INSERT into companys(name,email,pwd,phone,location,ceo,hr,worth,founder) 
		   values('$name','$email','$pwd','$phone','$location','$ceo','$hr','$worth','$founder')";
		if($conn->query($sql) === TRUE){
			$GLOBALS['conn']->close();
		
		echo "<SCRIPT type='text/javascript'> //not showing me this
								alert('Account Created!');
								window.location.replace(\"index.html\");
							</SCRIPT>";
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
	}
	
	
	

?>
