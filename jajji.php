<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jajji</title>
</head>

<body>
    <?php
    include "section/navbar.php";
    ?>

    <div class="jStart" style="margin: 30px 600px;">
        <div class="formcard">
            <h1>Article</h1>
            <form action="" method="post">
                <input type="text" name="imgj1" placeholder="Enter the name of image"><br>
                <input type="text" name="titlej1" placeholder="title"><br>
                <input type="text" name="messagej1" placeholder="You can write smth here..."><br>
                <input type="text" name="artown" placeholder="Article owner"><br>
                <input type="submit" name="j1" value="SEND">
            </form>
        </div>
        <?php

        if (isset($_POST["j1"])) {

            $con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");

            $imgJ1 = $_POST["imgj1"];
            $titleJ1 = $_POST["titlej1"];
            $messageJ1 = $_POST["messagej1"];
            $artownJ1 = $_POST["artown"];

            $sqlJ1 = "insert into articles(img,title,message,articleOwner) values('$imgJ1','$titleJ1','$messageJ1','$artownJ1')";

            $resultJ1 = mysqli_query($con, $sqlJ1);
        }

        ?>



        <div class="formcard">
            <h1>Book a class</h1>
            <form action="" method="post">
                <input type="text" name="namej2" placeholder="name"><br>
                <input type="number" name="phonenumj2" placeholder="+9989......"><br>
                <select name="class" id="" style="margin-bottom: 10px;">
                    <option value="bo'g'irsoq">Bogirsoq</option>
                    <option value="pahlavon">Pahlavon</option>
                    <option value="bo'taloq">Botaloq</option>
                </select>
                <input type="submit" name="j2" value="SEND">
            </form>
        </div>

        <?php

        if (isset($_POST["j2"])) {
            $con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occurred (j2)");

            $nameJ2 = mysqli_real_escape_string($con, $_POST["namej2"]);
            $phonenumJ2 = mysqli_real_escape_string($con, $_POST["phonenumj2"]);
            $classJ2 = mysqli_real_escape_string($con, $_POST["class"]);

            $sqlJ2 = "INSERT INTO bookClass (name, phoneNum, class) VALUES ('$nameJ2', '$phonenumJ2', '$classJ2')";

            $resultJ2 = mysqli_query($con, $sqlJ2);
        }

        // if(isset($_POST["j2"])){

        //     $con  = mysqli_connect("localhost","root","root","jajji") or die("Error occured (j2)");

        //     $nameJ2 = $_POST["namej2"];
        //     $phonenumJ2 = $_POST["phonenumj2"];
        //     $classJ2 = $_POST["class"];

        //     $sqlJ2 = "insert into bookClass(name,phoneNum,class) values('$nameJ2','$phonenumJ2','$classJ2')";

        //     $resultJ2 = mysqli_query($con,$sqlJ2);
        // }
        ?>





        <div class="formcard">
            <h1>Facilities</h1>
            <form action="" method="post">
                <input type="text" name="imgj3" placeholder="Enter the name of image"><br>
                <input type="text" name="titlej3" placeholder="title"><br>
                <input type="text" name="messagej3" placeholder="You can write smth here..."><br>
                <input type="submit" name="j3" value="SEND">
            </form>
        </div>

        <?php
        if (isset($_POST["j3"])) {
            $con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j3)");

            $imgJ3 = $_POST["imgj3"];
            $titleJ3 = $_POST["titlej3"];
            $messageJ3 = $_POST["messagej3"];

            $sqlJ3 = "insert into facilities(img,title,message) values('$imgJ3','$titleJ3','$messageJ3')";

            $resultJ3 = mysqli_query($con, $sqlJ3);
        }
        ?>


    </div>

    <div class="jStart" style="margin: 30px 600px;">
        <div class="formcard">
            <h1>Group</h1>
            <form action="" method="post">
                <input type="text" name="imgj4" placeholder="Enter the name of image"><br>
                <input type="text" name="titlej4" placeholder="title"><br>
                <input type="text" name="messagej4" placeholder="You can write smth here..."><br>
                <input type="text" name="agej4" placeholder="4-5"><br>
                <input type="number" name="seat" placeholder="40"><br>
                <input type="text" name="time" placeholder="14:00-15:00"><br>
                <input type="number" name="pricej4" placeholder="200$"><br>
                <input type="submit" name="j4" value="SEND">
            </form>
        </div>
        <?php

        if (isset($_POST["j4"])) {
            $con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occurred (j4)");

            $imgJ4 = mysqli_real_escape_string($con, $_POST["imgj4"]);
            $titleJ4 = mysqli_real_escape_string($con, $_POST["titlej4"]);
            $messageJ4 = mysqli_real_escape_string($con, $_POST["messagej4"]);
            $ageJ4 = mysqli_real_escape_string($con, $_POST["agej4"]);
            $seatJ4 = mysqli_real_escape_string($con, $_POST["seat"]);
            $timeJ4 = mysqli_real_escape_string($con, $_POST["time"]);
            $priceJ4 = mysqli_real_escape_string($con, $_POST["pricej4"]);

            $sqlJ4 = "INSERT INTO `group` (img, title, message, age, orindiq, darsTime, tutionFee) VALUES ('$imgJ4', '$titleJ4', '$messageJ4', '$ageJ4', '$seatJ4', '$timeJ4', '$priceJ4')";

            $resultJ4 = mysqli_query($con, $sqlJ4);
        }

        // if(isset($_POST["j4"]))
        // {
        //     $con = mysqli_connect("localhost","root","root","jajji") or die("Error occured (j2)");

        //     $imgJ4 = $_POST["imgj4"];
        //     $titleJ4 = $_POST["titlej4"];
        //     $messageJ4 = $_POST["messagej4"];
        //     $ageJ4 = $_POST["agej4"];
        //     $seatJ4 = $_POST["seat"];
        //     $timeJ4 = $_POST["time"];
        //     $priceJ4 = $_POST["pricej4"];



        //     $priceJ4 = $_POST["pricej4"];
        //     $sqlJ4 = "INSERT INTO group(img,title,message,age,orindiq,darsTime,tutionFee) VALUES('$imgJ4','$titleJ4','$messageJ4','$ageJ4','$seatJ4','$timeJ4','$priceJ4')";

        //     $resultJ3 = mysqli_query($con,$sqlJ4);

        // }
        ?>


        <div class="formcard">
            <h1>Teachers</h1>
            <form action="" method="post">
                <input type="text" name="namej5" placeholder="title"><br>
                <input type="text" name="jobj5" placeholder="teacher"><br>
                <input type="text" name="imgj5" placeholder="Enter the name of image"><br>
                <input type="text" name="telegram" placeholder="telegram"><br>
                <input type="text" name="facebook" placeholder="facebook"><br>
                <input type="text" name="instagram" placeholder="instagram"><br>
                <input type="submit" name="j5" value="SEND">
            </form>
        </div>
        <?php

        if(isset($_POST["j5"]))
         {
             $con = mysqli_connect("localhost","root","root","jajji") or die("Error occured (j5)");

            $nameJ5 = $_POST["namej5"];
            $jobJ5 = $_POST["jobj5"];
            $imgJ5 = $_POST["imgj5"];
            $telegramJ5 = $_POST["telegram"];
            $facebookJ5 = $_POST["facebook"];
            $instagramJ5 = $_POST["instagram"];
           


            $sqlJ5 = "INSERT INTO teachers(name,occupation,rasm,telegram,facebook,instagram) VALUES('$nameJ5','$jobJ5','$imgJ5','$telegramJ5','$facebookJ5','$instagramJ5')";

             $resultJ5 = mysqli_query($con,$sqlJ5);
         }
             ?>


        <div class="formcard">
            <h1>Testimonial</h1>
            <form action="" method="post">
                <input type="text" name="messagej6" placeholder="You can write smth here..."><br>
                <input type="text" name="namej6" placeholder="Azizbek"><br>
                <input type="text" name="jobj6" placeholder="teacher"><br>
                <input type="submit" name="j6" value="SEND">
            </form>
        </div>


        <?php

        if(isset($_POST["j6"]))
         {
             $con = mysqli_connect("localhost","root","root","jajji") or die("Error occured (j6)");

            $messageJ6 = $_POST["messagej6"];
            $nameJ6 = $_POST["namej6"];
            $jobJ6 = $_POST["jobj6"];
            
           


            $sqlJ6 = "INSERT INTO testimonial(message,name,kasbi) VALUES('$messageJ6','$nameJ6','$jobJ6')";

             $resultJ6 = mysqli_query($con,$sqlJ6);
         }
             ?>


    </div>


</body>

</html>