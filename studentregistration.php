<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register as Student</title>
</head>
<body>
       <section class="form-container">

       <?php

         include('php/config.php');
         if(isset($_POST['submit'])){
             $firstname = $_POST['firstname'];
             $lastname = $_POST['lastname'];
             $currentyear = $_POST['currentyear'];
             $phoneno = $_POST['phoneno'];
             $email = $_POST['email'];
             $gender = $_POST['gender'];
             $dob = $_POST['dob'];
             $sid = $_POST['sid'];
             $username = $_POST['username'];
             $password = $_POST['password'];
             $c_pass = $_POST['c_pass'];

                //verifying the unique email
            $verify_query = mysqli_query($con,"SELECT Email FROM student WHERE Email='$email'");

            if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
            }
            else{
                mysqli_query($con,"INSERT INTO student(FirstName,LastName,CurrentYear,PhoneNo,Email,Gender,DateOfBirth,StudentID,Username,Password,ConfirmPassword) VALUES('$firstname','$lastname','$currentyear','$phoneno','$email','$gender','$dob','$sid','$username','$password','$c_pass')") or die("Error Occured");

                echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
                echo "<a href='index.php'><button class='btn'>Login Now</button>";
         
            }
        }else{
       ?>       
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
                <button type="submit" class="btn" name="submit">Register</button>
             </form>
       </section>
         <?php } ?>
</body>
</html>
