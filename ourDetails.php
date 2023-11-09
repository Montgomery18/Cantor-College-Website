<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cantor College | Our Details</title>
    <meta name="viewport" content="width=device-width", intial-scale=1.0>
    <link href="css\mobile.css" rel="stylesheet">
    <link media="only screen and (min-width:720px)" href="css\mobilelarger.css" rel="stylesheet">
    <link media="only screen and (min-width:1027px)" href="css/desktop.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <header>
        <?php
        include("php-includes\header.php");
        ?>
    </header>
    <main>
        <div class="Style2 ContactVariant">
            <h1>Our Details</h1>
            <h2 id="FindUs">How to find us</h2>
            <p>Cantor College</p>
            <p>Main Street</p>
            <p>Sheffield</p>
            <p>SC4 2BB</p>
            <h2>Our Campus</h2>
            <img src="images\872SHUSpaceCitymap.jpg" alt="Campus map">
            <h2 id="ContactUs">Contact Us</h2>
            <p>Tel:(01321) 2340 235</p>
            <p>Fax:(01321) 2340 236</p>
            <p>Email:info@cantorcollege.ac.uk</p>
            <form action="" method="POST" id="ContactUsForm">
                <fieldset>
                    <legend>Contact Us Form</legend>
                        <div>
                            <label for="name">Name:</label>
                            <br>
                            <input type="text" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                        <div>
                            <label for="email">Email:</label>
                            <br>
                            <input type="email" name="email" id="email" placeholder="example123@example.com" required>
                        </div>
                        <div>
                            <label for="number">Phone number(optional):</label>
                            <br>
                            <input type="tel" name="number" id="number" placeholder="Enter your phone number">
                        </div>
                        <div>
                            <label for="query">Enter your question:</label>
                            <br>
                            <textarea name="query" id="query" cols="25" rows="10" placeholder="What is your question?" required ></textarea>
                        </div>
                        <div>
                            <input type="submit" name="query">
                        </div>
                </fieldset>
            </form>
        </div>
    </main>
    <footer>
        <?php
        include("php-includes\\footer.php");
        ?>
    </footer>
    </div>
    <script src="javascript\navbar.js"></script>
    <script src="javascript\contactForm.js"></script>
</body>
</html>