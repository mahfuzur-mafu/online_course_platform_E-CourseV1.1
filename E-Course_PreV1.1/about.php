<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>you choose our online course platform because it offers a diverse range of high-quality courses that align with our users' interests and needs. Additionally, your platform provides a user-friendly interface, making it easy for our community to navigate and access the courses. Lastly, your strong track record of positive feedback and successful learning outcomes convinced us that your platform is the ideal choice for our users.</p>
         <a href="courses.php" class="inline-btn">our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+500</h3>
            <span>Courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+5k</h3>
            <span>Students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+200</h3>
            <span>Teachers</span>
         </div>
      </div>



</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
                  <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Raisa</h3>
      
            </div>
         </div>
         <p>They did Really well</p>
 
      </div>

      <div class="box">
              <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Abidur</h3>
        
            </div>
         </div>
         <p>your platform provides a user-friendly interface, making it easy for our community to navigate and access the courses. Lastly, your strong track record of positive feedback and successful learning outcomes convinced us that your platform is the ideal choice for our users.</p>
     
      </div>

      <div class="box">
                 <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Rahman</h3>
      
            </div>
         </div>
         <p>it offers a diverse range of high-quality courses that align with our users' interests and needs.</p>
  
      </div>






   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>