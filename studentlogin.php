<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log in as Student</title>
</head>
<body>
    <section class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
           <h3>Login</h3>
           <p>Username</p>
           <input type="username" name="username" required maxlength="50" class="box">
           <p>Password</p>
           <input type="password" name="password" required maxlength="20" class="box">
           <input type="submit" value="Submit" name="submit" class="btn">
        </form>
     </section>
     <section class="form-container">
        <div class="links">
            Haven't been registered ? Register here 
            <a href="studentregistration.html">Register</a>
        </div>
     </section>
</body>
</html>