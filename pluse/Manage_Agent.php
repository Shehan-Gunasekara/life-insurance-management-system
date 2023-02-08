<?php
    require 'config.php';
    if(isset($_POST['btn_submit'])){
        $aid = $_POST['AID'];
        $nic = $_POST['nic'];
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $password = $_POST['password1'];

        $sql = "insert into agent  values ('".$aid."','".$nic."','".$Fname."','".$Lname."','".$password."')";
        $con->query($sql);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mannage agent</title>

	<link rel="stylesheet" href = "css/HS.css">
    <link rel="stylesheet" href = "css/slidebar.css">
    <link rel="stylesheet" href = "css/Manage_agent.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />


</head>
<body>
<!--------header-------->
<header>
       <div class = "navbar">
        <a href="#" class="logo"><img src="img/pulse.png" alt="Logo" style="width: 375px; height:100px"></a>
           <ul class= "menu" >
               <li class= "menu"><a href="#">Home</a></li>
               <li class= "menu active" ><a href="#">My Profile</a></li>
               <li class= "menu"><a href="#">Investor Relations</a></li>
               <li class= "menu"><a href="#">Careers</a></li>
               <li class= "menu"><a href="#">About Us</a></li>
               <li class= "menu "><a href="#">Contact Us</a></li> 
           </ul>
           <input class="search" type="text" placeholder="Search..">
       </div> 
    </header>
 
    <div >


<!--------body-------->


      <div class="col-2 sidebar">
        
        <ul class="nav flex-column nav-pills">
          <li class="nav-item ">
            <a class="nav-link  sidebar-link" href="AdminDashboard.jsp"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active toggle sidebar-link"  href="ManageUsers.jsp"><i class="fa-solid fa-user "></i> Manage Agent</a>
          
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


<a href="Add_Agent.php"><button class="button button1" >Create new account</button></a>
<a href="Remove_Agent.php"><button class="button button2">Remove agent</button></a>




</div>



</body>

</html>