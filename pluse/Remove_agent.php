<?php
    require 'config.php';
?>
<?php
    if(isset($_GET['Agentid'])){
        
        $id=$_GET['Agentid'];
        $sql = "delete
        from agent
        where A_ID='".$id."'";
    $con->query($sql);
    $message="Account deleted successfully!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>contact us</title>

	<link rel="stylesheet" href = "css/HS.css">
  <link rel="stylesheet" href = "css/slidebar.css">
  <link rel="stylesheet" href = "css/remove_agent.css">
   
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
               <li class= "menu "><a href="#">Contact Us</a></li> 
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

   

<div class="region-main3">

<?php
                        $sql = "select * from agent";
                        $result = $con->query($sql);
                        
                        if($result->num_rows > 0){
                            //read data
                                while($row = $result->fetch_assoc()){
                                    //Read and utilize the row data
                                    
                                    echo "
                                    <div class='four-col-profile'>
                                        <center>"
                                    ?>

                                    <img src="images/profilepic/<?=$row['imgName']?>"  style='border : px solid #ddd ; border-radius : 60px ; padding : 3px ; width : 150px; height : 180px ;'>
                                    <?php echo"   <h3 class='profile-names-grid'>".$row['A_ID']."<br> ".$row['A_Frist_Name']."</h3>
                                        <a href = 'Remove_agent.php?Agentid=".$row['A_ID']."'><button  class='btn'>Remove Profile</button></a>
                                        </center>
                                    </div>
                                    ";
                                }    
                            }else{
                                echo "No Bookings";
                            }
                            $con->close();
                                    ?>
</div>




</body>

</html>