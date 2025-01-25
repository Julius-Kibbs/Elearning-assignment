<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register as Teacher</title>
</head>
<body>
    <section class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
           <h3>Enter the required information</h3>
           <p>First Name <span>*</span></p>
           <input type="text" name="firstname" required maxlength="50" class="box">
           <p>Last Name <span>*</span></p>
           <input type="text" name="lastname" required maxlength="50" class="box">
           <p>Residence <span>*</span></p>
           <input type="text" name="residence" required maxlength="20" class="box">
           <p>Phone Number <span>*</span></p>
           <input type="number" name="phoneno" required maxlength="50" class="box">
           <p>Email <span>*</span></p>
           <input type="email" name="email" required maxlength="50" class="box">
           <p>Gender <span>*</span></p>
           <input type="text" name="gender" required maxlength="20" class="box">
           <p>Date of birth <span>*</span></p>
           <input type="date" name="dob" required maxlength="50" class="box">
           <p>Teacher ID <span>*</span></p>
           <input type="text" name="tid" required maxlength="50" class="box">
           <p>Department <span>*</span></p>
           <input type="text" name="department" required maxlength="50" class="box">
           <p>Username <span>*</span></p>
           <input type="text" name="username" required maxlength="20" class="box">
           <p>Password <span>*</span></p>
           <input type="password" name="password" placeholder="Use your Teacher ID" required maxlength="20" class="box">
           <p>Confirm Password <span>*</span></p>
           <input type="password" name="c_pass" required maxlength="20" class="box">
           <input type="submit" value="register new" name="submit" class="btn">
        </form>
  </section>
</body>
</html>