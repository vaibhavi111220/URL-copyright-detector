<?php

$db = mysqli_connect("localhost","root","","data");

if(isset($_POST['submit'])){
$url = file_get_contents($_POST['link']);
$key = 'Copyright';
 if(strpos($url, $key) == false) {
     $yes = 'No';
    }
               
else {
    $yes = 'Yes';
     }
         
    $name = $_POST['name'];
    $cname = $_POST['cname'];
    $link = $_POST['link'];
    
     
    
    $query = "INSERT INTO details(name,cname,urls,yorn)VALUE('$name','$cname','$link','$yes')";
    mysqli_query($db,$query);
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Link Checker</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
<!--
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
-->
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div  class="head_top">
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="#"> Home  </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#https://en.wikipedia.org/wiki/User:Dispenser/Checklinks">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">
               <div class="container">
                  <div class="row d_flex">
                     <div class=" col-xl-8 col-lg-8 col-md-8 col-12-9">
                        <div class="text-bg">
                           <h1>Link Checker <br> <span class="white1">Landing Page</span></h1>
                           <p>URL checker is a free tool to detect malicious URLs including malware and phishing links.
Safe link checker scan URLs for malware, viruses, and phishing links.</p>
                           <a href="https://en.wikipedia.org/wiki/User:Dispenser/Checklinks">Read More</a>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-4 col-12-3">
                        <div class="text-img">
                           <figure><img src="images/box_img.png" alt="#"/></figure>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </header>
      <!-- end banner -->
      
    
      <!-- Testimonial -->
      <div class="section">
        
            <div id="" class="Testimonial">
                <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="titlepage">
                        <h2 style="color: black">Comprehensive report and analysis capabilities</h2>
                     </div>
                  </div>
               </div>
               <div class="row d_flex">
                  <div class="col-md-3">
                     <div class="Testimonial_box">
                        <i><img src="images/plan1.png" alt="#"/></i>
                     </div>
                  </div>
                  <div class="col-md-9">
                     <div class="Testimonial_box">
                        
                        <p style="color: black">From a high-level report summarizing the results all the way down to the exact locations of the found links in the code, URL Checker provides easy access to the information you need to locate and fix the links on your website.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
      <!-- end Testimonial -->
      <!-- contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Broken links are bad for business.</h2>
					 <span>"... I tried three different link checkers online and yours was by far the easiest to use and produced the most useful report data." </span>
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <form class="main_form" action="index.php" method="post"> 
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="form_contril" placeholder="Name " type="text" name="name">
                        </div>
                        <div class="col-md-12">
                           <input class="form_contril" placeholder="Company Name" type="text" name="cname">
                        </div>                  
                         <div class="col-md-12">
                           <input class="form_contril" placeholder="URL" type="text" name="link">
                        </div>
                        <div class="col-sm-12">
                           <input type="submit" value="Submit" name="submit" class="send_btn">
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
       
       
           <div class="container">

<table class="table table-dark mt-5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Company Name</th>
            <th>URL</th>
            <th>Copyrights</th>
            <th>Delete</th>
        
        </tr>
    </thead>
    

<?php 
mysqli_select_db($db,'data');
$queryy = "select * from details";
if(!$queryy){
    die("Query Failed" . mysqli_error($db));
}
$queryform = mysqli_query($db,$queryy);
    
if(mysqli_num_rows($queryform) > 0){
    while($result= mysqli_fetch_array($queryform)){
?>

<tr>
    <td><?php echo $result['id']?></td>
    <td><?php echo $result['name']?></td>
    <td><?php echo $result['cname']?></td>
    <td><?php echo $result['urls']?></td>
    <td><?php echo $result['yorn']?></td>
    <td><a href="delete.php?del=<?php echo $result['id'] ?>"> <button class="btn btn-danger">Delete</button></td>

</tr>

<?php
    }
}

?>
    
    </table>
    </div>
       
       
       
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 ">
                     <div class="cont">
                        
                     </div>
                  </div>
                  <div class="col-md-12">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

