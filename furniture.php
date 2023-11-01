<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Furniture</title>
</head>

<body>

    <?php
    include "section/navbar.php";
    ?>

    <div class="jStart" style="margin: 30px 600px;">
        <div class="formcard">
            <h1>Contacts</h1>
            <form action="" method="post">
                <input type="text" name="namef1" placeholder="Azizbek"><br>
                <input type="email" name="emailf1" placeholder="....@gmail.com"><br>
                <input type="number" name="phonenumf1" placeholder="+9989......"><br>
                <input type="text" name="messagef1" placeholder="You can write smth here..."><br>
                <input type="submit" name="f1" value="SEND">
            </form>
        </div>

        <?php

        if (isset($_POST["f1"])) {
            $con = mysqli_connect("localhost", "root", "root", "furniture") or die("Error occurred (f1)");

            $nameF1 = mysqli_real_escape_string($con, $_POST["namef1"]);
            $emailF1 = mysqli_real_escape_string($con, $_POST["emailf1"]);
            $phonenumF1 = mysqli_real_escape_string($con, $_POST["phonenumf1"]);
            $messageF1 = mysqli_real_escape_string($con, $_POST["messagef1"]);

            $sqlF1 = "INSERT INTO contacts (name, email, telnumber, message) VALUES ('{$nameF1}', '{$emailF1}', '{$phonenumF1}', '{$messageF1}')";

            $resultF1 = mysqli_query($con, $sqlF1);

        }

        ?>



        <div class="formcard">
            <h1>OnTop</h1>
            <form action="" method="post">
                <input type="text" name="titlef2" placeholder="title"><br>
                <input type="text" name="messagef2" placeholder="You can write smth here..."><br>
                <input type="text" name="imgf2" placeholder="Enter the name of image"><br>
                <input type="submit" name="f2" value="SEND">
            </form>
        </div>


        <?php

        if (isset($_POST["f2"])) {
            $con = mysqli_connect("localhost", "root", "root", "furniture") or die("Error occurred (f1)");

            $titleF2 = mysqli_real_escape_string($con, $_POST["titlef2"]);
            $messageF2 = mysqli_real_escape_string($con, $_POST["messagef2"]);
            $imgF2 = mysqli_real_escape_string($con, $_POST["imgf2"]);

            $sqlF2 = "INSERT INTO ontop (title, message, img) VALUES ('{$titleF2}', '{$messageF2}', '{$imgF2}')";

            $resultF2 = mysqli_query($con, $sqlF2);

            
        }


        ?>

        <div class="formcard">
            <h1>Works</h1>
            <form action="" method="post">
                <input type="text" name="namef3" placeholder="Azizbek"><br>
                <input type="text" name="imgf3" placeholder="Enter the name of image"><br>
                <input type="number" name="pricef3" placeholder="200$"><br>
                <input type="submit" name="f3" value="SEND">
            </form>
        </div>

        <?php
        if(isset($_POST["f3"])){

            $con = mysqli_connect("localhost","root","root","furniture") or die("Error occured (f3)");

            $nameF3 = $_POST["namef3"];
            $imgF3 = $_POST["imgf3"];
            $priceF3 = $_POST["pricef3"];

            // $nameF3 = mysqli_real_escape_string($con,$_POST["namef3"]);
            // $imgF3 = mysqli_real_escape_string($con,$_POST["imgf3"]);
            // $priceF3 = mysqli_real_escape_string($con,$_POST["pricef3"]);

            $sqlF3 = "INSERT INTO worku(name,img,price) VALUES('$nameF3','$imgF3','$priceF3')";

            $resultF3 = mysqli_query($con,$sqlF3);


        }
        ?>


    </div>
</body>

</html>