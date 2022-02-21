# MSH-TV-Network-Management

The aim of this application is to create a web portal for facilitating an online environment between cable operators and customers.
* The customers can manage their cable network plan without coming to the store.
* The cable operator can also store customer details and modify the customer’s cable network plan.  

**Software Requirements:**
* Front-End: HTML, CSS and Javascript
* Back-End: PHP and MYSQL

**Abstract:**
* This is a web based application and registered users can access this application. Cable Network Management system is developed to facilitate an online environment between the cable operator and the customer.
* The system would be having two separate interfaces and logins :Admin and User login.
* This system contains all the channel list and packages. Using this system user can select his/her prefered channels or packages, view their previous cable network plans ,billing and payment history.
* Once the user has modified i.e.,add or delete his/her channel package, the bill would be generated and the customer can proceed with online payment option in the website.
* Once the bill has been paid, the admin will view the bill and carry out the change in channel package of the customer.
* The admin can manage complete control of the website. He/she can modify the channel list and packages, view payment details of customers subscribing his cable network.

**Flow of Control and Use:**

====SERVER NAME====

The localhost server responsible for hpsting SQL in my Personal computer is:
'localhost:3307', because the default port '3306' was not available.

To make the php files to connect to the localhost SQL server in your own computer,
change the server name in each php file where there is a connection being established 
to the databases.

====AUTHENTICATION====

For Users (Any credentials from the 'user' table from the DB 'login')

Username: (Eg: Manoj123)
Password: (Eg: Password123)
For Admin 
Username : Admin
Password : Admin

====FLOW OF CONTROL====

1.Intro.php is main page
2.After this Choose Login1.php or Registration.php
3.If Logged as Admin you reach Admin.php page which has a navigation bar
4.But if Login as user, directed to user's home page ->home.php

====MODIFICATIONS FOR MAIL MODULE====

To use the email feature, we should do modifications in php.ini and sendmail.ini 

In php.ini file in XAMPP under the [ mail function ] change the content to this:-

[mail function]

SMTP=smtp.gmail.com
smtp_port=587
sendmail_from =smh.cabletv@gmail.com 
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

In sendmail.ini file in XAMPP change the content to:-

[sendmail]

smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=smh.cabletv@gmail.com
auth_password=iznagryigppihkgq
force_sender=smh.cabletv@gmail.com

For reference : https://www.youtube.com/watch?v=9W644cyDyNM  

Note:In the php mysql connection, port number of database server has been changed to 3307, need to be modified based on system.

**FOR PAYMENT MODULE:**

====FLOW OF CONTROL====

After clicking on payment, the user will have confirm payment and select the payment mode
then after entering details and otp validation, the payment status will be displayed in the webpage
1.payment.php - to select payment type
if user chooses card mode
2.card.php -credit/debit card details
card name: Hariharan
card no:1234123412341234
expiry date:any date after current date
email id: harisuperduper@gmail.com     //otp will be sent to this mail 
3.process.php- otp generated
4.otp.php - enter the otp sent in mail and validate
5.success.php - payment successfull
6.failure.php - payment failure

if user chooses netbanking
2.banklogin.php- enter the bank details 
login id:harisuperduper@gmail.com    //otp will be sent to this mail
password:12345678
3.processbank.php- otp generated
4.otpbank.php-enter the otp sent in mail and validate
5.success.php - payment successfull
6.failure.php - payment failure

transaction.php - To view the transaction history of the user 

----------------------------------------------------------------------------------------------------------------------------

**FOR 'My MSH' MODULE:**

====FLOW OF CONTROL====

After clicking on the 'My MSH' option on the top navigation bar:
1. You will be redirected to the file 'index.php', where you can slide through three sliding pages.
2. The first of these options is 'Manage subscriptions (mytv.php):
	2.1 Here you will be able to see two search bars and two tables.
	2.2 One of them are the individual channels you have added.
	2.3 The other one are the packs that you have added.
	2.4 The 'delete' button will trigger either (delete_mytv.php) or (delete_pack.php) file to delete the record from the table.
	2.5 The top of the page shows the amount to be payed (in red font colour).
	2.6 This amount value will be sent to the 'payment' module.
3. The second option 'View Packages' (packs.php):
	2.1 Here you can view a search bar and a table conatining all the packs we can select.
	2.2 The 'add' button will trigger the file (add_pack.php) to add the pack to manage subscriptions page.
4. The third option 'Channel directory' (search1.php):
	2.1 Here you can view a search bar and a table conatining all the channels we can select individually.
	2.2 The 'add' button will trigger the file (add_channel.php) to add the channel to manage subscriptions page.

----------------------------------------------------------------------------------------------------------------------------
