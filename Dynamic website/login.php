<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=-1.0">
        <title>Animated Login form</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link  rel="stylesheet" href="https://fonts.goooleapis.com/css?family=Josefin+Sans&display=swap">
  <link href="https://fonts.goooleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="ppp/particles.min.js"></script>
  <script type="text/javascript" src="ppp/app.js.js"></script>

        
		<style type="text/css">
            body{

margin: 0;
padding: 0;
font-family: sans-serif;
background-color: #16c5ae ;
   
}
.box{
width: 400px;    
padding: 40px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
background-color: #191919;
text-align: center;
}
.box input[type = "text"],.box input[type = "password"]{
   border: 0;
   background: none;
   display: block;
   margin: 20px auto;
   text-align: center;
   border: 2px solid #0999ec;
   padding: 14px 10px;
   outline: none;
   color: white;
   border-radius: 24px;
   transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
   width: 280px;
   border-color: #2ecc71;
}
.box input[type = "submit"]{
   border: 0;
   background: none;
   display: block;
   margin: 20px auto;
   text-align: center;
   border: 2px solid #21cc71;
   padding: 14px 40px;
   outline: none;
   color: white;
   border-radius: 24px;
   transition: 0.25s;
   cursor: pointer;
}
.box input[type = "submit"]:hover{
   background: #2ecc71;
   box-shadow: 0 0 10px #2ecc71, 0 0 40px #2ecc71,  0 0 80px #2ecc71;
    transition-delay: 0.5ms;
}
.box h1{
   color: white;
   font-weight: 500;
   text-transform: uppercase;
}
#lo{
   color: #09ec82;
   text-shadow: 0 0 10px #2ecc71, 0 0 40px #2ecc71,  0 0 80px #2ecc71;
    transition-delay: active;
}
::placeholder{
   color: #09ec82;
   text-shadow: 0 0 10px #2ecc71, 0 0 40px #2ecc71,  0 0 80px #2ecc71;
    transition-delay: active;
}

        </style>
    </head>
<body>
<?php require 'partials/_nav.php'?>
<form class="box" method="post">
       <h1 id="lo"><i>Login</i></h1>
       <input type="text" name="user_name" placeholder="Username">
       <input type="password" name="password" placeholder="Password">
      <input type="submit" name="" value="Login">
	  <a href="signup.php" style="color:#48dbfb;">Click to Signup</a>
    </form>
</body>
</html>
