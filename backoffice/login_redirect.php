<?php session_start();
   
    include '../administrator/administrator/connection.php';
	$pdo = new PDO($dsn, $user, $pass, $opt);
	$user = $_REQUEST['user'];
	$email = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];
	$role = $_REQUEST['role'];



	
		// check if the user has selected the role or not?
		if ($role=="") {
			header('Location:index.php?choice=error&value=Please Select a Role ');
			exit();
		}
		try {
		    $stmt = $pdo->prepare('SELECT * FROM `admin_backoffice` WHERE `username` = "'.$email.'" AND `pass`="'.$pass.'" AND `status`="Approved"');
		   } catch(PDOException $ex) {
		    echo "An Error occured!"; 
		    print_r($ex->getMessage());
		}
		
		$stmt->execute();
		$user = $stmt->fetch();
		$row_count = $stmt->rowCount();	

		if($row_count>0){	
			$_SESSION['user'] = $email;
			$_SESSION['role'] = "user";
		 	$_SESSION['loged_primitives'] = md5($pass);
			header('Location:dashboard.php?choice=success&value=Login Successful, Welcome to User Panel');
			exit();
		}
		//header('Location:index.php?choice=error&value=Login Error, Please Try Again!');
		exit();

?>