<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Travel Website | Contact Page</title>
</head>

<body>
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
    <section class="contact-form">
        <div class="container">
            <div class="form-wrapper">
                <div class="company-address">
                    <div class="address-group">
                        <i class="fas fa-map-marker-alt fa-3x text-red"></i>
                        <h2 class="text-gray md-heading">Location</h2>
                        <p>#01, Takka road, Takka colony, Panvel, Navi Mumbai, Maharashtra 410206, India</p>
                    </div>
                    <div class="address-group">
                        <i class="far fa-envelope  fa-3x text-red"></i>
                        <h2 class="text-gray md-heading">Email</h2>
                        <p>satish9619000@gmail.com</p>
                    </div>
                    <div class="address-group">
                        <i class="fas fa-phone-square-alt fa-3x text-red"></i>
                        <h2 class="text-gray md-heading">Call</h2>
                        <p>+918009777605</p>
                    </div>
                    <img src="company-img.jpg" alt="Company image">
                </div>
                <form class="form" action="database.php" method="POST">
                    <h1 class="lg-heading text-black">Contact Us
                    </h1>
                    <p class="text-gray">Let us know your questios, suggestions and concerns by filling out the contact form below.
                    </p>
                    <div class="form-group">
                        <label for="username">Full Name:</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:
                        </label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Contact no.
                        </label>
                        <input type="tels" name="number" id="number" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" placeholder="Ask your question.."></textarea>
                    </div>
                    <button type="submit" class="form-btn" >Submit
                    </button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>