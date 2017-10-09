

<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
	<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payroll";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }
// sql to create table
// $sql = "CREATE TABLE student (
// 	stuId INT(4)  AUTO_INCREMENT PRIMARY KEY, 
// 	stuName VARCHAR(40) NOT NULL,
// 	gender VARCHAR(6),
// 	age int(2)
// 	)";
$sql = "CREATE TABLE  employee (
	employee_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(30) NOT NULL,
	gender VARCHAR(30) NOT NULL,
	birth_date VARCHAR(50),
	address VARCHAR(50),
	city VARCHAR(50),
	province VARCHAR(50),
	postal_code VARCHAR(50),
	email VARCHAR(50),
	website VARCHAR(50),
	join_date VARCHAR(50),
	annual_basic_pay VARCHAR(40)
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Table  created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}
// $sql = "INSERT INTO student (stuName, gender, age)
// VALUES ('Arsh', 'male', '23');";
// $sql .= "INSERT INTO student (stuName, gender, age)
// VALUES ('varinder', 'male', '23');";
// $sql .= "INSERT INTO student (stuName, gender, age)
// VALUES ('gurminder', 'male', '23');";

// if ($conn->multi_query($sql) === TRUE) {
// 	$last_id = $conn->insert_id;
//     echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $stmt = $conn->prepare("INSERT INTO student (stuName, gender, age) VALUES (?, ?, ?)");
// $stmt->bind_param("ssi", $stuName, $gender, $age);

// // set parameters and execute
// $stuName = "Johncy";
// $gender = "female";
// $age = 28;
// $stmt->execute();

// $sql = "INSERT INTO student (stuName, gender, age)
// VALUES ('Arsh', 'male', '23');";
// if($conn->query($sql)=== TRUE){
// 	echo "data added";
// }
// //$stmt->close();
// //echo "New records created successfully";

// $sql ="select * from student ";
// $result=$conn->query($sql);
// if($result->num_rows > 0){
// 	echo "<table><tr><th>ID</th><th>Name</th><th>Gender</th><th>Age</th></tr>";
// 	while($row = $result->fetch_assoc()){
// 		echo "<tr><td>" . $row["stuId"]. "</td><td>" . $row["stuName"]. "</td><td> " . $row["gender"]. "</td><td> " . $row["age"]. "</td></tr>";
//     }
//     echo "</table>";
// } else {
//     echo "0 results";
// }

// echo "Today is " . date("Y/m/d") . "<br>";
// echo "Today is " . date("Y.m.d") . "<br>";
// echo "Today is " . date("Y-m-d") . "<br>";
// echo "Today is " . date("l");

// $d=mktime(11, 14, 54, 8, 12, 2014);
// echo "Created date is " . date("Y-m-d h:i:sa", $d);
// class student{
	
// 	var $sid;
// 	var $sname;
	
// 	function __construct()
// 	{
// 		echo "<h1>H1</h1>";
// 	}
// 	function setData($id,$name){
// 		$this->sid=$id;
// 		$this->sname=$name;
// 	}
// 	function getData()
// 	{
// 		return array($this->sid,$this->sname);
// 	}
// 	}


// $conn->close();
?>

	</body>
	
</html>