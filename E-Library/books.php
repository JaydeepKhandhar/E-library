<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-library</title>
        <link rel="stylesheet" href="deco.css">
        <link rel="icon" href="icon.png" type="image">
    </head>

    <body>
        <nav class="navbar">
            <div>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="books.php">Books</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
            </div>
        </nav>

        <?php
            include './gujratiBooks.html';

//        <!--<h2 class="gb">Gujrati Books</h2>-->
        
            include './englishBook.html';
            include './hindiBooks.html';
        ?>

        <footer class="footer1">
            website developed by jaydeep khandhar
        </footer>

    </body>

</html>