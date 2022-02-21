<?php
session_start();
?>
<html>
<head>
    <style>
         .mode{
            margin-top:100px;
            margin-left:80px;
            border-radius: 10px;
            border: 1px white solid;
            width: 400px;
            height: 250px;
            padding: 20px;
            color: black;
            font-weight: bolder;
            font-family: 'Roboto', sans-serif;
            background-color: #05d3fc;
        }
        .input-box{
            margin-left:60px;
            
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
   body
    {
        background: #213c40;
        color:#05d3fc;
    }
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
    </style>

</head>
<div id="profile">
<img src="log1.jpeg">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br>&nbsp;&nbsp;
</div>
<body>
<div class="mode">
    <form method="POST" action="card.php">
<label>Name on card :</label>
<input class="input-box" type="text" id="cname" name="cname" ><br><br>
<label>Card Number :</label>
<input class="input-box" type="text" id="cno" name="cno" ><br><br>
<label>CVV Number :</label>
<input class="input-box" type="text" id="cvv" name="cvv" ><br><br>
<label>Card Expiry date :</label>
    <input class="input-box" type="date" id="cdate" min="<?php echo date("Y-m-d"); ?>"><br><br>
<label>Email Id</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="input-box" type="email" id="em" name="cemail"><br><br>    
    <center>
        <button class="btn" onclick="check()" name="save">Next</button>
    </center>    
</form>
</div>
<?php
if(isset($_POST['save']))
{$t=0;
if(preg_match("/[0-9]{12}$/",$_POST['cno'])==0)
    {
        echo"<script>window.alert('enter valid card number');</script>";
        $t=1;
    }    

    if(preg_match("/([a-zA-Z])+$/",$_POST['cname'])==0)
    {
        echo"<script>window.alert('enter valid card name');</script>";
        $t=1;
    }
if($t==0)
{
    $_SESSION['name']=$_POST['cname'];
    $_SESSION['email']=$_POST['cemail'];
    header("Location: process.php");
}

}
?>
    
<script>
  /*  
function check()
{    
    var s=/[0-9]{12}/;
    var c=/[0-9]{3}/;
    var n=/([a-zA-Z])+/;
    var x=document.getElementById("cno").value;
    if(!x.match(s))
    {
        alert("Please Enter a valid card number");
    }
    var x1=document.getElementById("cname").value;
    if(!x1.match(n))
    {
        alert("Please enter a valid name");
    }
    var c1=document.getElementById("cvv").value;
    if(!c1.match(c))
    {
        alert("Please enter a valid CVV Number");
    }

}*/   
</script>
<br><br><br><br><br><br>
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