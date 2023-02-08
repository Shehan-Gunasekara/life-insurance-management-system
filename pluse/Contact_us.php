<!DOCTYPE html>
<html>
<head>
	<title>contact us</title>
	<link rel="stylesheet" href="css/contact_us.css">
	<link rel="stylesheet" href = "css/style.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

</head>
<body>
<!--------header-------->
<header>
       <div class = "navbar">
        <a href="#" class="logo"><img src="img/pulse.png" alt="Logo" style="width: 375px; height:100px"></a>
           <ul class= "menu" >
               <li class= "menu"><a href="#">Home</a></li>
               <li class= "menu"><a href="#">My Profile</a></li>
               <li class= "menu"><a href="#">Investor Relations</a></li>
               <li class= "menu"><a href="#">Careers</a></li>
               <li class= "menu"><a href="#">About Us</a></li>
               <li class= "menu active"><a href="#">Contact Us</a></li> 
           </ul>
           <input class="search" type="text" placeholder="Search..">
       </div> 
    </header>
 

<!--------body-------->


<div id="bod">

	<center>
		<br>
        <h1><b><u>CONTACT US</u></b></h1> 
		<h2>Have a question or need help?</br>We are here to help you with anything you need</h2>
    </center>
	
<hr class= "hr1">	

<table>	
<td class="tab">	
<br>
<br>
<form>
        <input class= "col2" type="text" name="contactname" placeholder="Enter your Name" required><br/><br/>
        <input class= "col2" type="text" name="contactemail" placeholder="Enter your Email Address" required><br/><br/>
        <textarea class= "col2" name="message" rows= "5" col= "1" placeholder="Please enter your message"></textarea><br/><br>
        <input id="submit" class="submit" type="submit" onclick="show_alert();" value="submit">
</form>
		

</td>
<td class="tab2">				

      
		<h4 ><i class="fa fa-phone"> +94 112310310</i></h4>
        <br>
		<h4 ><i class="fa fa-envelope-open"> info@pulse.com</i></h4>
        <br>
        <h4 ><i class="fa fa-location-arrow">  No.62, Dharmapala Mawatha</i></h4>
                       

</td>
</table>
</div>

<!--------footer-------->
<footer>
        <div class="row">
            <div class="column" >
                <h2>Contact Us</h2>
                <p>+94 112310310<br><br>
                    No.62,<br>
                    Dharmapala Mawatha,<br>
                    Colombo 7.<br><br>
                    Email : info@pulse.com


                </p>
            </div>
           <div class="column">
            <div class="column-logo">
                <img src="img/fb.png" alt="fblogo" class="social" ;height:"50px"><img src="img/linkedin.png" alt="linkedinlogo" class="social">
                <img src="img/yt.png" alt="ytlogo" class="social">
                <img src="img/insta.png" alt="instalogo" class="social">
            </div>
           </div>
           <div class="column">
                <h2>Quick Links</h2>
                <p ><a href="#" class="qlinks">FAQ</a><br>
                 <a href="#" class="qlinks">Employee Login</a><br>
                <a href="#" class="qlinks">Privacy Policy</a>
                </p>
           </div>
        </div>
    </footer>

</body>

</html>