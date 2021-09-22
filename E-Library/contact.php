<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>E-library</title>
        <link rel="icon" href="./icon.png" type="image">
        <link rel="stylesheet" href="deco.css">


    </head>
    <body>
        <header>
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
        </header>
        <!-- <img src="img2.jpg" alt="" width="400px" height="400px"> -->

        <form class="form1" method="POST">
            <table>
                <tr>
                    <td><label for="name">Your name</label></td>
                    <td><input type="text" placeholder="Enter name" id="name" name="name"></td>
                </tr>
                <tr>
                    <td><label for="suggestion">Suggestion</label></td>
                    <td><input type="text" id="suggestion" placeholder="Any suggestion" name="suggestion"></td>
                </tr>
                <tr>
                    <td><label for="number">Mobile number</label></td>
                    <td><input type="phone" id="mnum" placeholder="contact number" name="number"></td>
                </tr>
                <br>
                <tr>
                    <td><label for="mail">Email</label></td>
                    <td><input type="email" id="mail" placeholder="Email" name="mail"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="reset" value="reset">Reset</button>
                        <button type="submit" value="submit" name="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
        <footer class="footer1">
            website developed by jaydeep khandhar
        </footer>

    </body>
</html>
<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $suggestion = $_POST['suggestion'];
    $number = $_POST['number'];
    $email = $_POST['mail'];

    $iq = "insert into user_data(user_name, user_number, user_suggestion, user_mail)"
            ."values ('$name','$number','$suggestion','$email')";

    $res = mysqli_query($conn, $iq);
    if ($res) {
        ?>
        <script>
            alert("Your suggestion submitted successfully");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("server down");
        </script>
        <?php
    }
}
?>