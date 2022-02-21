<?php
session_start();
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
   .bttn
    {
    width:170px;
    background-color: #4fcaff;
    color:#000;
    border:1.5px outset;
    padding:10px;
    font-size:20px;
    cursor:pointer;
    align-items:center;
    font-family: 'Roboto', sans-serif;
    transition: transform .2s;
    }
    .bttn:hover,.bttn:focus
   {
   cursor: pointer;
   background: #fff;
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

body
    {
        background: url(tv12.jpg);
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
  window.location.href = "payment.php";
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
function change_user(){
  window.location.href = "userprofile.php";
} 
function change_transaction(){
  window.location.href = "transaction.php";
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
<div id="containe">
<br>
<center>
<!--<input type="button" class="bttn" value="User Profile" onclick="change_user()"/> -->
<button class="bttn" onclick="change_user()">User Profile</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--<input type="button" class="bttn" value="Transactions" onclick="change_transaction()"/>-->
<button class="bttn" onclick="change_transaction()">Transactions</button> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
</center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
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