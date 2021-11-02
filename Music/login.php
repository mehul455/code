<?php

include 'config.php';
if($login == 1){
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}else {

if (isset($_POST["u_btn"])){
    
    $u_email = $_POST["u_email"];
    $u_pass = $_POST["u_pass"];
    if( empty($u_email) || empty($u_pass)){
        echo "<h3  style=color:red;>All Fields Are Required</h3>";
    }else{
        $selectdb = mysqli_query($conn,"SELECT * FROM musicapp WHERE u_email = '$u_email' AND u_pass='$u_pass'");
        $row=mysqli_fetch_array($selectdb);
        if ($row["u_email"] == $u_email && $row["u_pass"] == $u_pass) {
           setcookie('uid',$row['u_id'],time()+(3600*24));
           setcookie('login',1,time()+(3600*24));
           echo " <meta http-equiv='refresh' content='0; url=index.php'>";


        }else{
            echo "<h3 style=color:red;>Email or Password Incorrect</h3>";
        }
    }

}

    ?>
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
.box input[type = "email"],.box input[type = "password"]{
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
.box input[type = "email"]:focus,.box input[type = "password"]:focus{
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
<form action="login.php" class="box" method="post">
       <h1 id="lo"><i>Login</i></h1>
       <input type="email" name="u_email" placeholder="Email">
       <input type="password" name="u_pass" placeholder="Password">
      <input type="submit" name="u_btn" value="Login">
	  <a href="register.php" style="color:#48dbfb;">Click to Signup</a>
    </form>
</body>
</html>
<?php } ?>