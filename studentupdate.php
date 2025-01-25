<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update your student information</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo">Educa.</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">shaikh anas</h3>
         <p class="role">studen</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">login</a>
            <a href="register.html" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">shaikh anas</h3>
      <p class="role">studen</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="teacherupdate.html"><i class="fas fa-wrench"></i><span>Update</span></a>
      <a href="teachernotes.html"><i class="fas fa-book"></i><span>Notes</span></a>
      <a href="teacherquiz.html"><i class="fas fa-pen-fancy"></i><span>Quizzes</span></a>
      <a href="teacherlogin.html"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
   </nav>

</div>

<section class="form-container">
   <form action="" method="post" enctype="multipart/form-data">
      <h3>Enter the required information</h3>
      <p>First Name <span>*</span></p>
      <input type="text" name="firstname" required maxlength="50" class="box">
      <p>Last Name <span>*</span></p>
      <input type="text" name="lastname" required maxlength="50" class="box">
      <p>Current Year<span>*</span></p>
      <input type="number" name="currentyear" required maxlength="20" class="box">
      <p>Phone Number <span>*</span></p>
      <input type="number" name="phoneno" required maxlength="50" class="box">
      <p>Email <span>*</span></p>
      <input type="email" name="email" required maxlength="50" class="box">
      <p>Gender <span>*</span></p>
      <input type="text" name="gender" required maxlength="20" class="box">
      <p>Date of birth <span>*</span></p>
      <input type="date" name="dob" required maxlength="50" class="box">
      <p>Student ID <span>*</span></p>
      <input type="text" name="sid" required maxlength="50" class="box">
      <p>Username <span>*</span></p>
      <input type="text" name="username" required maxlength="20" class="box">
      <p>Password <span>*</span></p>
      <input type="password" name="password" placeholder="Use your Student ID" required maxlength="20" class="box">
      <p>Confirm Password <span>*</span></p>
      <input type="password" name="c_pass" required maxlength="20" class="box">
      <input type="submit" value="Update" name="submit" class="btn">
   </form>
</section>












<footer class="footer">

   &copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>