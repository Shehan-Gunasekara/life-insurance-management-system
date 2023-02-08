<?php
    require 'config.php';
    if(isset($_POST['btn_submit'])){
        $aid = $_POST['AID'];
        $nic = $_POST['nic'];
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $password = $_POST['password1'];

        $img_name  = $_FILES['img']['name'];
        $temp_name = $_FILES['img']['tmp_name'];
        
        $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
        $img_ex_lc=strtolower($img_ex);

        $new_name = $aid.'.'.$img_ex_lc;
        $img_upload_path ='images/profilepic/'.$new_name;
        move_uploaded_file($temp_name,$img_upload_path);

        $sql = "insert into agent  values ('".$aid."','".$nic."','".$Fname."','".$Lname."','".$password."','".$new_name."')";
        $con->query($sql);
        header('refresh:0;url=Manage_Agent.php');
        $message="Account created successfully!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add agent</title>

	<link rel="stylesheet" href = "css/HS.css">
  <link rel="stylesheet" href = "css/slidebar.css">
  <link rel="stylesheet" href = "css/add_agent.css">
  <link rel="stylesheet" href = "css/Remove_agent.css">
  <script src="js/Add_Agent.js"></script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />


</head>
<body>
<!--------header-------->
<header>
       <div class = "navbar">
        <a href="#" class="logo"><img src="img/pulse.png" alt="Logo" style="width: 375px; height:100px"></a>
           <ul class= "menu" >
               <li class= "menu"><a href="#">Home</a></li>
               <li class= "menu active"><a href="#">My Profile</a></li>
               <li class= "menu"><a href="#">Investor Relations</a></li>
               <li class= "menu"><a href="#">Careers</a></li>
               <li class= "menu"><a href="#">About Us</a></li>
               <li class= "menu"><a href="#">Contact Us</a></li> 
           </ul>
           <input class="search" type="text" placeholder="Search..">
       </div> 
    </header>
 
 


<!--------body-------->


      <div class="col-2 sidebar">
        
        <ul class="nav flex-column nav-pills">
          <li class="nav-item ">
            <a class="nav-link  sidebar-link" href="AdminDashboard.jsp"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active toggle sidebar-link"  href="Manage_Agent.php"><i class="fa-solid fa-user "></i> Manage Agent</a>
          
          </li>
          <li class="nav-item">
            <a class="nav-link sidebar-link" href="AdminProfile.jsp"><i class="fa-solid fa-calendar"></i> Claims</a>
          </li>
          <li class="nav-item">
            <a class="nav-link sidebar-link logout-btn" href="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
          </li>
        </ul>
      </div>

   

<div class="region-main2">

<h1>Enter the details</h1>

<div class="container">

<form action="" onsubmit="return PasswordValidation()" method="post" enctype="multipart/form-data">
       
        	
        	<lable class="txt">Agent ID</lable><br>
          <input class="fill" type="text" name="AID" ><br><br>
        
        
          <lable class="txt">	NIC </lable><br>
          <input class="fill" type="text" name="nic"><br><br>
        
       
          <lable class="txt">First_Name</lable><br>
          <input class="fill" type="text" name="Fname"><br><br>
        
        
          <lable class="txt">Last_name</lable></td><br>
          <input class="fill" type="text" name="Lname" maxlength="10" ><br><br>
        
      
          <lable class="txt">Enter new Password </lable><br>
          <input class="fill" type="password" name="password1" id="password1"><br><br>

        	
          <lable class="txt">Confirm the password</lable><br>
          <input class="fill" type="password" name="password2" id="password2"><br><br>

          <lable class="txt">Upload profile picture</lable>
          <input type="file" name="img" id="img" onchange="return Validation()"><br><br>

			    <input type="submit" name="btn_submit" class="btn" >
        	
        	
        </form>

</div>
</div>




</body>

</html>