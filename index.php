<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full height of the viewport */
            background-color: rgb(231, 231, 231); /* Optional background color */
            font-family: 'Poppins', sans-serif; /* Ensure this matches CSS */
        }

        .heading {
            font-size: 3em; /* Increase font size */
            text-align: center; /* Center the text */
            color: var(--black); /* Use CSS variable for color */
        }

        .welcome-message {
            font-size: 1.5em; /* Increase font size */
            text-align: center; /* Center the text */
            margin: 20px 0; /* Add some margin */
        }

        .flex-btn {
            display: flex;
            justify-content: center; /* Center buttons */
            gap: 20px; /* Space between buttons */
            margin: 10px 0; /* Add some margin */
        }

        .btn, .option-btn {
            font-size: 1.2em; /* Increase font size for buttons */
            padding: 10px 20px; /* Add padding for better click area */
            border-radius: 5px; /* Rounded corners */
            text-decoration: none; /* Remove underline */
            background-color: #8e44ad; /* Purple button color */
            color: white; /* Text color */
            transition: background-color 0.3s; /* Smooth transition */
        }

        .btn:hover, .option-btn:hover {
            background-color: #732d91; /* Darker shade of purple on hover */
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="flex">
            <div class="logo">Welcome to Our Platform</div>
        </div>
    </header>

    <section>
        <div class="heading">Welcome!</div>
        <p class="welcome-message">Join us to enhance your learning experience.</p>
        
        <div class="flex-btn">
            <a href="studentlogin.html" class="btn">Student Login</a>
            <a href="teacherlogin.html" class="btn">Teacher Login</a>
        </div>
        
        <div class="flex-btn">
            <a href="studentregistration.html" class="option-btn">Student Registration</a>
            <a href="teacherregistration.html" class="option-btn">Teacher Registration</a>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Group 2. All rights reserved.</p>
    </footer>
</body>
</html>l