<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.goooleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<?php require 'partials/_nav.php'?>






<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"><b>Contact Us</b></h2>
    </div>

    <div class="w-50 m-auto">
       <form action="userinfo.php" method="post">
         <div class="form-group">
            <lable><b>Username</b></label>
            <input type="text" name="user" placeholder="Enter your full name" autocomplete="off" class="form-control border border-dark" style="background-color: #353b48; color: white;">
         </div>
         <div class="form-group">
            <lable><b>Email Id</b></label>
            <input  type="text" name="email" placeholder="Enter your email ID" autocomplete="off" class="form-control border border-dark" style="background-color: #353b48; color: white;">
         </div>
         <div class="form-group">
            <lable><b>Mobile<b></label>
            <input  type="text" name="mobile" placeholder="Enter your mobile number" autocomplete="off" class="form-control border border-dark" style="background-color: #353b48; color: white;">
         </div>
         <div class="form-group">
            <lable><b>Comments</b></label>
            <textarea  class="form-control border border-dark"  name="comments" placeholder="Enter your comment" style="background-color: #353b48; color: white;">
            </textarea>
         </div>
        <button type="submit" class="btn btn-info">Submit</button>
       </form>
    </div>
</section>
</body>
</html>