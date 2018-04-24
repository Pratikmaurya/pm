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


    <form action="index.php" method="POST">
    	<h1>Login Form</h1>
        
        <div class="input-box">
            <input type="text" class="form-control" name="name" placeholder="Enter Name" />
        </div>
        <div class="input-box">
            <input type="password" class="form-control" name="name" placeholder="Enter Password" />
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        <div>
        	<a href="index.php">For Registration click here!!!!</a>

        </div>
    </form>
</div>


</body>
</html>

</body>
</html>
