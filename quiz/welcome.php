<?php

@include '../login_system/config.php';

session_start();


if(isset($_SESSION['user_name'])){
  $username = $_SESSION['user_name'];
} else if (isset($_SESSION['admin_name'])){
  $username = $_SESSION['admin_name'];
}
else{
  $username = 'Connect';
}


//<a href="login_system/admin_page.php"> <?php echo $_SESSION['admin_name']? > </a>
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<title>quiz</title>
   <link rel="icon" type="image/x-icon" href="../Wecan/images/logo.png">
   <!-- css dev-->
	<link rel="stylesheet" href="../style.css">
   <!-- css wecan -->
  <link rel="stylesheet" href="css/style.css">
  <!-- css gallery 
  <link rel="stylesheet" href="../gallery_home/gallery.css"> -->
  
</head>

<style>

  .box-container {
      width: 300px;
      background-color: #f2f2f2;
      padding: 20px;
      margin: 150px auto;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
      display:inline-block;
    transition:transform 0.3s;
    justify-content: center;
    align-items: center;
    
    
     
  }
  .box-container:hover {
      transform: scale(1.05);
    background-color: rgb(117, 165, 255);
  }
  
  
  .box-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
      text-align: center;
      
  }
  
  .box-image {
      width: 100%;
      height: auto;
      margin-bottom: 10px;
      border-radius: 10px;
      
  }
  
  .box-text {
      font-size: 25px;
      line-height: 1.5;
      text-align: justify;
      font-weight: bold;
      text-align: center;
  }
  
  .box-container:nth-child(n+2) {
      margin-left: 20px;
  }
  
  /*title our quiizes*/
  
  .title {
      font-size: 48px;
      font-weight: bold;
      text-align: center;
      color: rgb(5, 5, 22);
      text-shadow: 2px 2px 4px rgba(0,0,0,0.5), 0px 0px 10px rgba(255,255,255,0.5);
      animation: title-animation 3s infinite;
    border-style: inset;
    padding: 20px;

      
  }
  
  @keyframes title-animation {
      0% {
          text-shadow: 2px 2px 4px rgba(0,0,0,0.5), 0px 0px 10px rgba(255,255,255,0.5);
      }
      50% {
          text-shadow: 4px 4px 8px rgba(0,0,0,0.5), 0px 0px 20px rgba(255,255,255,0.5);
      }
      100% {
          text-shadow: 2px 2px 4px rgba(0,0,0,0.5), 0px 0px 10px rgba(255,255,255,0.5);
      }
  }
  /*...................*/
  
  
  
  
  .box-link {
      display: block;
      text-decoration: none;
      color: black;
  }
  .main{
    display: flex;
    justify-content: center;
    align-items: center;
  }

 
  
</style>


<body>
  <header>
    <nav>
        <div class="container">
            <img src="../Wecan/images/logo.png" alt="logo" width="60px">
            <a href="../index.php" class="brand" style="text-transform: capitalize;">DevWay</a>

            <ul class="nav-menu">

                <li>
                    <a href="../index.php">Home</a>
                </li>

                <li>
                    <a  href="../Wecan/courses.php">Courses</a>
                </li>

                <li>
                  <!-- class="active"-->
                    <a class="active" href="welcome.php">Quiz</a>
                </li>

                <li>
                    <a href="../Wecan/about.php">About Us</a>
                </li>

                <li>
                    <a href="../Wecan/contact.php">Contact</a>
                </li>

                <li>
                <?php             
            if(isset($_SESSION['user_name'])){
                 echo '<a href="../login_system/user_page.php">'.$username.'</a>';
            } else if (isset($_SESSION['admin_name'])){
                  echo '<a href="../login_system/admin_page.php">'.$username.'</a>';
            }
            else{
                 echo '<a href="../login_system/login_form.php">'.$username.'</a>';
               }
            ?>                </li>
            </ul>
            
        </div>
    </nav>
</header>
<!--=================================================================-->

<h1 class="title" >Welcome To DevWay Quiz</h1>


<div class="main">
<div class="box-container">
    
  <a href="../introduction-quiz/intro.php" class="box-link">
    <img src="welcome.png" alt="Image 1" class="box-image">
  </a>
    <p class="box-text">Take Quiz</p>
</div>
</div>


<!--Footer-->

<footer class="footer" >
   <ul class="social-icon">
     <li class="social-icon__item"><a class="social-icon__link" href="#">
         <ion-icon name="logo-facebook"></ion-icon>
       </a></li>
     <li class="social-icon__item"><a class="social-icon__link" href="#">
         <ion-icon name="logo-twitter"></ion-icon>
       </a></li>
     <li class="social-icon__item"><a class="social-icon__link" href="#">
         <ion-icon name="logo-linkedin"></ion-icon>
       </a></li>
     <li class="social-icon__item"><a class="social-icon__link" href="#">
         <ion-icon name="logo-instagram"></ion-icon>
       </a></li>
   </ul>
   <ul class="menu">
     <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
     <li class="menu__item"><a class="menu__link" href="#">About Us</a></li>
     <li class="menu__item"><a class="menu__link" href="#">Courses</a></li>
     <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
     <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

   </ul>
   <p style="font-size: 15px;"> <strong> &copy; Copyright</strong>. All Rights Reserved</p>
 </footer>


 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   
   <a href="#top-courses"><button class="button">
      <svg class="svgIcon" viewBox="0 0 384 512">
     <path
       d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0
        17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
      ></path>
   </svg>
   </button></a>




</body>
</html>