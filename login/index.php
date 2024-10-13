<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Awesome Form</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel="stylesheet" href="..\style.css"> -->
     <link rel="stylesheet" href="login.css">
</head>

<body>
<header class="header">
        <nav class="navbar">
            <div class="container">
                <h1 class="navtext md-heading">WT
                    </h1>
                <ul class="navitems">
                    <li class="navitem one"><a href="index.php">Home</a>
                    </li>
                    <li class="navitem two"><a href="contact.php">Contact</a>
                    </li>
                    <li class="navitem three"><a href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </nav>
        </header>
    <div class="login_form">
    <form method="#" id="login-form" class="login-form" autocomplete="off" role="main">
        <h1 class="a11y-hidden">Login Form</h1>
        <div>
            <label class="label-email">
                <input type="email" class="text" name="email" placeholder="Email" tabindex="1" required />
                <span class="required">Email</span>
            </label>
        </div>
        <input type="checkbox" name="show-password" class="show-password a11y-hidden" id="show-password" tabindex="3" />
        <label class="label-show-password" for="show-password">
            <span>Show Password</span>
        </label>
        <div>
            <label class="label-password">
                <input type="text" class="text" name="password" placeholder="Password" tabindex="2" required />
                <span class="required">Password</span>
            </label>
        </div>
        <input type="submit" value="Log In" />
        <div class="email">
            <a href="#">Forgot password?</a>
        </div>
        <!-- <figure aria-hidden="true">
            <div class="person-body"></div>
            <div class="neck skin"></div>
            <div class="head skin">
                <div class="eyes"></div>
                <div class="mouth"></div>
            </div>
            <div class="hair"></div>
            <div class="ears"></div>
            <div class="shirt-1"></div>
            <div class="shirt-2"></div>
        </figure> -->
    </form>
    </div>
    
     <footer class="footer_box">
        <div class="footer">
            <a href="contact.php">
                <i class="fa-regular fa-envelope fa-2x"></i>
            </a>
            <a href="contact.php"><i class="fa-solid fa-paper-plane fa-2x"></i>
            </a>
            <a href="contact.php">  <i class="fa-brands fa-facebook fa-2x"></i>
            </a>
            <a href="contact.php"><i class="fa-brands fa-linkedin fa-2x"></i>
            </a>
        </div>
        <div class="footer2">
          <p>© 2023-2024, <a href="contact.php"><i class="fa-solid fa-globe"></i> WorldTravel.com</a>, Enjoy your self.</p>
            </div>
    </footer>
</body>

</html>