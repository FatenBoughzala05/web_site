<?php
$servername="localhost";
$username="root";
$password="";
$dbname="di";
//create connection
$conn= mysqli_connect($servername,$username,$password ,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}
if (isset($_POST)&& $_POST !=[]) {
    $name = $_POST["fullname"];
    $email =$_POST["email"];
    $password =$_POST["pwd"];
    $sql="INSERT INTO users(name, email ,password)VALUES('$name','$email','$password')";
    if (mysqli_query($conn,$sql)) {
    echo" Added Successfully ";      
    }
    else{
        echo" Error ". mysqli_error($conn) ;
    }
}
   
     
?>
<html>

<head>
    <link rel="stylesheet" href="assets/css/registre.css">
    <!--<style>
        h1{
            text-align: center;
        }
        .right{
            display: flex;
        }
        #btn_register{
            background-color: aqua;
        }
    </style>-->
</head>

<body>
    <section id="reg_section">
        <div class="left">
            <!--<img src="reunion.jpg" alt="register image" width="400px " height="400px;"/> <br>-->
            <img src="images/pic01.jpg" alt="register image" />
        </div>
        <div class="right">
            <form  method="POST">
                <!--<h1 style="text-align:center;font-size:15px">123</h1>-->
                <h1 ><b> Get more things done with loggin platform .</b> </h1></br>
                <p> Access to the most powerfull tool in the entire design and web industry </p>
                <label> Register </label> </br>
                <input type="radio" value="" name="gendre" /><label> M </label>
                <input type="radio" value="" name="gendre" />
                <label> F </label> </br>
                <input type="checkbox" value="" name="role" /><label> appr </label>
                <input type="checkbox" value="" name="role" /> <label> ensg </label></br>
                <input name="fullname" type="text" placeholder="full name" class="inputs" /></br>
                <input name="email" type="email" placeholder="E-mail Address" class="inputs" /></br>
                <input name="pwd" type="password" placeholder="password" class="inputs" /></br>
                <input type="submit" value="Register" name="" id="btn_register" />
              <!--  <input type="reset" value="cancel" name="" >-->
              
            </form>
        </div>
    </section>
</body>

</html>