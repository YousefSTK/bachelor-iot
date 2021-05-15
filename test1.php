<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

$sqli=mysqli_connect($host,$user,$password,$db,"3306");


if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from Login where User='".$uname."'AND Pass='".$password."' limit 1";

    $result=mysqli_query($sqli,$sql);

    if(mysqli_num_rows($result)==1){
        echo "You have successfully logged in";
        exit();
    }
    else{
    echo " You have entered incorrect pasword ";
    exit();
}


}







?>


<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
}  
button {   
       background-color: #000000;   
       width: 100%;  
        color: white;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid black;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: grey;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> Your Smart Home </h1> </center>   
    <form method="POST" action="#">  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">Login</button>   
            <input type="checkbox" checked="checked"> Remember me   
   
        </div>   
    </form>     
</body>     
</html>
