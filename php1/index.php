<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
<style>

	tr:nth-child(even){
	color:white;
	background-color:lightgreen;   
	}

	input,select,textarea,button{
	margin:10px;
	padding:5px;
	border: 0px solid transparent;
	border-radius:3px;
	}

</style>
</head>
<body>
<?php

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$enrol = $_POST['enrol'];
		$name = $_POST['name'];
		$branch = $_POST['branch'];
		$category = $_POST['category'];
		$feedback = $_POST['feedback'];

		echo $enrol . " " . $name ." " . $branch . " " . $category . " " . $feedback ;
		
		
		$server = "au-cdbr-sl-syd-01.cleardb.net";
		$db = "ibmx_eb6fa0147f4c5b9";
		$port =3306;
		$username = "b6b5e96dbd3471";
		$password = "4d9d531d";
		
		
		try {
			$conn = new PDO("mysql:host=$server;dbname=$db;port=$port", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql_select = "insert into feedback(enrol,name,branch,category,message) VALUES(:enrol,:name,:branch,:category,:feedback)";

			$stmt  = $conn -> prepare($sql_select);
			$stmt -> bindParam(':enrol', $enrol);
			$stmt -> bindParam(':name', $name);
			$stmt -> bindParam(':branch', $branch);
			$stmt -> bindParam(':category', $category);
			$stmt -> bindParam(':feedback', $feedback);
			$stmt->execute();

			

			}
		catch(PDOException $e)
			{
			echo "Connection failed: " . $e->getMessage();
			}
	} 

?>
    <form action="index.php" method="POST">
        <div class="input-box">
            <input type="text" class="form-control" name="enrol" placeholder="Enter Enrolment no" />
        </div>
        <div class="input-box">
            <input type="text" class="form-control" name="name" placeholder="Enter Name" />
        </div>
        <div class="input-box">
            <select name="branch">
                <option value="cba">Cba</option>
                <option value="bba">Bba</option>
                <option value="ma">Ma</option>
            </select>
        </div>
        <div class="input-box">
            <select name="category">
                <option value="suggestion">suggestion</option>
                <option value="feedback">feedback</option>
                
            </select>
            
            </select>
           </div>
        <div class="input-box">
            <textarea name="feedback" rows="7" cols="10" placeholder="Feedback"></textarea>
              
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

<!-- <div>
    <table>
    <thead>
        <th>id</th>
        <th>enrol</th>
        <th>name</th>
        <th>branch</th>
        <th>category</th>
        <th>Message</th>
    </thead>
    
   
    </table>
</div> -->

</body>
</html>

</body>
</html>
