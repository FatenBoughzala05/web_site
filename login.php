<?php
$servername="localhost";
$userserver="root";
$password="";
$dbname="di";
// create connection
$conn=mysqli_connect($servername,$userserver,$password,$dbname);
if(!$conn){
echo "connection failed".mysqli_connect_error();
}
if (isset($_POST)&& $_POST !=[]) {
   
    $email=$_POST["email"];
    $pwd =$_POST["pwd"];
    $sql="SELECT * FROM users WHERE email='$email'AND password='$pwd'";
    $querry = mysqli_query($conn,$sql);//envoie la requette a la bd
   
    //test 
    
    if (mysqli_num_rows($querry)>0) { //num_rows :  ychouf mawjoud fil base de donne wala le w 9adech min mara
        session_start(); // tasna3 session
        $_SESSION['username']='di'; //cration session
        header("location: index.html");//redirection /verification
    }
    else{
        $error = "login or password doesn't exist";
    }
}



?>
<html>

<head>
    <title>formulaire</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <section id="reg_section">
        <div class="left">
            <!--<img src="reunion.jpg" alt="register image" width="400px " height="400px;"/> <br>-->
            <img src="images/banner.jpg" alt="image" />
        </div>
        <div class="right">
            <form method="POST">
                <h3> <b> Get more things done with Loggin platform .</b> </h3></br>
                <p> Access to the most powerfull tool in the entire design and web industry </p>
                <label id="Login"> Login</label> <br> <br>
                <p style="color: red;"><?= (isset($error))? $error:"" ?></p><!--php fi wost p ki tabda 3andek if = t3awed php echo-->
                <input type="email" placeholder="E-mail Address" class="inputs"  id="email" name="email"/></br>
                <input type="password" placeholder="Password" class="inputs"  name="pwd"/></br>
                <input type="submit" value="Login" name="" id="btn_login"  />
                <a href="#">Forget password?</a> 
                 <a href="registre.php">Create Account</a>
            </form>
        </div>
    </section>
</body>

</html>