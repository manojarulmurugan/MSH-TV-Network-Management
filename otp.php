<?php
session_start();

$rno=$_SESSION['otp'];
$em=$_SESSION['email'];
//echo "the otp is ".$rno;
$to = $em;
$subject = "Payment Verification OTP";
$txt = "Hello Subscriber Your OTP is ".$rno;
mail($to,$subject,$txt);
echo "<h3>"."<center>"."verification mail has been sent"."</center>"."</h3>"; 
$servername="localhost:3307";
$username="root";
$password="";
$dbname="login";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("connection failed: ".mysqli_connect_error());
}

if(isset($_POST['otpsave']))
{
    $rno=$_SESSION['otp'];
    $urno=$_POST['otpvalue'];
    //$name=$_SESSION['name'];
    //$em=$_SESSION['email'];
    $d1=date("Y-m-d");
    //$r=$_SESSION['rec'];// session variable for recharge
    
    if(!strcmp($rno,$urno))
    {
        
        $sql= "INSERT INTO transactionhistory(email_id, recharge_amount, mode,t_date,status)VALUES('$em', '200', 'card','$d1','success')";

        //$stmt = $mysqli->prepare($sql);
        //$stmt->bind_param("ss", $email);
        //$stmt->execute();
        echo "<script>alert('Your OTP is valid');</script>";
        if (mysqli_query($conn,$sql))
        { 
        mysqli_close($conn);    
        header("Location: success.php");
        //echo "<p>"."your otp is valid ". $name."</p>";  
        }  
    }
else
{
    $sql= "INSERT INTO transactionhistory(email_id, recharge_amount, mode, t_date,status)VALUES('$em', '200','card','$d1', 'failed')";
    if (mysqli_query($conn,$sql))
    {
        echo"<script>alert('Sorry invalid otp');</script>";
        mysqli_close($conn);
        header("Location: failure.php");
    }    

}

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
    
    #profile
    {
    padding-right:40px;
    padding-top:40px;
    padding-bottom:10px;
    padding-left:40px;
    border:1px dashed grey;
    font-size:20px;
    background-color: #0c2326;
    color: #fff;
    font-size: 30px;
    }
    #logout
    {
    float:right;
    padding:5px;
    border:dashed 1px #fff;
    color:#000;
    }
    input[type=button]
    {
    width:170px;
    background-color: #0c2326;
    color:#fff;
    border:1.5px outset;
    padding:10px;
    font-size:20px;
    cursor:pointer;
    align-items:center;
    font-family: 'Roboto', sans-serif;
    transition: transform .2s;
    }
    input[type="button"]:hover
   {
   cursor: pointer;
   background: #4fcaff;
   color: #000;
   transform: scale(1.25);
   }

   .welc{
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        text-align: center;
        font-style: italic;
        font-weight: bold;
        color: #4fcaff;
   }

.blue_bt {
    width: 255px;
    height: 58px;
    background: #4fcaff;
    color: rgb(255, 255, 255);
    float: center;
    text-align: center;
    line-height: 58px;
    font-size: 20px;
    font-weight: 300;
    transition: transform .2s;
}
.blue_bt:hover,
.blue_bt:focus {
    background: #fff;
    color: #0c2326;
    transform: scale(1.2);
}
body
    {
        background: #213c40;
        color:#05d3fc;
    }

/* footer */
footer, footer a {
    color: white;
}
footer {
    display: block;
    overflow: hidden;
    background-color: #0c2326;
}
footer a:hover {
    color: #4fcaff;
}
footer .container > ul {
    overflow: hidden;
    margin: 30px 0;
    padding-left: 0;
}
footer .container > ul li {
    float: left;
    padding-right: 25px;
}
footer .item h4 {
    margin-bottom: 20px
}
footer .item p.address {
    line-height: 1.2;
    font-size: 16px;
}
footer .item ul {
    padding-left: 0;
}
footer .item ul li {
    margin-bottom: 3px;
    font-size: 16px;
}
footer .date p {
    margin-bottom: 5px;
    font-size: 16px;
    font-weight: 300;
}
footer .item form {
    overflow: hidden;
}
footer .item form input {
    width: 100%;
    margin-bottom: 15px;
    padding: 5px 10px;
}
footer .item form input[type="submit"] {
    width: 100px;
    height: 40px;
    line-height: 4px;
    background-color: #ef44f8;
    border: none;
    float: right;
    color: #FFF;
    padding: 0
}
footer .copyright {
    padding: 15px 0;
}
footer .copyright p {
    margin-bottom: 0;
    font-size: 16px;
}
.btn{
            margin-left:100px;
            padding:10px;
            background-color: #0c2326;
            font-weight: bolder;
            color:white;
            border-radius: 10px;
            border: 1px solid;
            transition: transform .2s;
    }
    .btn:hover
   {
   cursor: pointer;
   background: #4fcaff;
   color: #000;
   transform: scale(1.25);
   }
   .otpbox{
        margin:200px;
        padding:20px;
        color:black;
        font-weight:bolder;
        line-height:17px;
        font-family: 'Roboto', sans-serif;
        background-color: #05d3fc;
        
    }
</style>
</head>
<body>
<script>
function change_home(){
  window.location.href = "home.php";
} 
function change_mytv(){
  window.location.href = "index.php";
} 
function change_payment(){
  window.location.href = "index.php";
} 
function change_admin(){
  window.location.href = "packs.php";
} 
function change_help(){
  window.location.href = "faq.php";
} 
function change_about(){
  window.location.href = "about.php";
} 
</script>
<div id="profile">
    <img src="log1.jpeg">
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="Home page" onclick="change_home()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="My MSH" onclick="change_mytv()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="Payment" onclick="change_payment()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="About" onclick="change_about()"/>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="Help" onclick="change_help()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b id="logout"><a href="logout2.php">Log Out</a></b> 
    <br>&nbsp;&nbsp;
</div>
<br><br><br><br>
<div class="otpbox">
    <form method="post" action="otp.php">
        <br>
        <br>
        
        <label>Enter otp</label>
        <input type="text" placeholder="OTP" name="otpvalue">
        <br>
        <br>
        <button class="btn" name="otpsave">Validate otp</button>
</div>
</form>
</div>
<br><br><br><br><br><br><br>
      <footer>
          <br>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer_blog_section">
                     <img src="log1.jpeg" alt="#" />
                     <p style="margin-top: 5px;">M S H Limited is a joint venture Corporation.
Incorporated in 2022 and with services launched recently, leading content distribution platform providing Pay TV and services.</p>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Navigation</h4>
                     <ul>
                        <li><a href="#" onclick="change_home()">Home</a></li>
                        <li><a href="#" onclick="change_mytv()">My MSH</a></li>
                        <li><a href="#" onclick="change_payment()">Payment</a></li>
                        <li><a href="#" onclick="change_help()">Help</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Contact Info</h4>
                     <p><strong>Corporate Office Address:</strong></p>
                     <p><img src="phone_icon.png" alt="#" /> VIT Chennai, Kelambakkam Road Chennai-132</p>
                     <p><strong>Customer Service:</strong></p>
                     <p><img src="location.png" alt="#" /> +91 9876543210</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Discover</h4>
                     <ul>
                        <li><a href="#" onclick="change_help()">Help</a></li>
                        <li><a href="#" onclick="change_about()">About Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright text-center">
            <p>Copyright 2020</p>
         </div>
      </footer>
</body>
</html>