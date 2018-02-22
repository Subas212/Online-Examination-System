<?php 
try{
	$dsn ='mysql:host=localhost;dbname=pdo_practice;charset=utf8;port=3306';
	$username = 'root';
	$password = '';
	$error = [PDO::ERRMODE_EXCEPTION];
	$conn = new PDO($dsn, $username,$password,$error);
	$sqlquery = 'SELECT * FROM employee_details';
	$result = $conn->query($sqlquery);
	while ($data = $result->fetch(PDO::FETCH_ASSOC)){

	 echo "ID :". $data['id']."<br/>";
	 echo "First Name :".$data['firstname']."<br/>";
	 echo "Last Name :".$data['lastname']."<br/>";
	 echo "Mobile:".$data['mobile']."<br/>";
	 echo "Website:".$data['website']."<br/>";
	 echo "Email:".$data['Eamil']."<br/>";
	 
echo "<p><p/>";

	}
}catch(PDOException $e){
	echo "Error in Database connection :".$e->getMessage();
}

 ?>