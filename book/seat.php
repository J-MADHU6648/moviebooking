<?php
$conn=new mysqli("localhost","root","","movietheatredb");
session_start();
if(!isset($_SESSION["name"]))
header("location:../login.php");
$name=$gender=$phone=$email=$city = "";
$name=$_SESSION["name"];
$gender=$_SESSION["gender"];
$phone=$_SESSION["phone"];
$city=$_SESSION["city"];
$email=$_SESSION["email"];

$movie=$_SESSION["movie"];
$date = $_SESSION["date"];
$time = $_SESSION["time"];
$moviecode = $_SESSION["moviecode"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Login Page">
    <meta name="keywords" content="DreamWorld Cinemas,Movies">
    <meta name="author" content="Arunachalam M">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Selection</title>
    <link href='../css/style.css' rel="stylesheet">
    <link rel="icon" href="../img/logo2.png">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d3a7f46eb0.js" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>

</head>
<style>
* {
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
    overflow-x: hidden;
}

    .booking-part1 {
    background-color: rgb(202, 193, 193);
    padding-top: 10px;
    padding-bottom: 40px;
}

.booking-title {
    margin-top: 60px;
    margin-bottom: 30px;
    text-align: center;
    font-family: 'oswald';
    font-size: 30px;
}

.legend {
    margin-bottom: 20px;
    text-align: center;
    margin-top: -10px;
}

.legend {
    margin-bottom: 20px;
    text-align: center;
    margin-top: -10px;
}

.display-seats {
    margin-left: 270px;
    margin-top: -10px;
}

.all-the-seats {
    border: 2px solid black;
    padding-right: 60px;
    padding-left: 60px;
    padding-top: 6px;
}

.rowno {
    text-align: center;
    padding-bottom: 20px;
}

.column {
    padding-right: 20px;
}

.align2 {
    margin-top: 20px;
    margin-left: 200px;
}

.continue-button {
    padding-right: 40px;
    padding-left: 40px;
    padding-top: 10px;
    padding-bottom: 10px;
    color: white;
    background-color: black;
    cursor: pointer;
    border-radius: 30px;
}
    </style>
<body>
  
    <br>
    <main class="booking-part1">
        <h2 class="booking-title">Seat Selection</h2>
    <div class="legend">
        <i class='fas fa-couch seat red'></i> - Booked Seat&nbsp;&nbsp;&nbsp;
        <i class='fas fa-couch seat'></i> - Available Seat&nbsp;&nbsp;&nbsp;
        <i class='fas fa-couch seat green'></i> - Selected Seat
    </div>
    <div class="legend">
        Cost of 1 ticket = &#8377;200
    </div>
    <div class="display-seats">
        <table class="all-the-seats">
            <form method="POST" name="allseat">
        <?php
        $k="A";
        echo "<tr class='rowno'><td></td><td>1</td><td>2</td><td></td><td>3</td><td>4</td><td>5</td><td>6</td><td></td><td>7</td><td>8</td><td>9</td><td>10</td></tr>";
        for($i=1;$i<=10;$i++)
        {
            echo "<tr><td class='column'>".$k."</td>";
            for($j=1;$j<=10;$j++)
            {   
                $tocheck = "select * from ".$date.$time.$moviecode." where seat='".$i.$j."'";
                $result = $conn->query($tocheck);
                if($result->num_rows>0)
                {
                while($row=$result->fetch_assoc())
                {
                    if($row["booked"]!="not")
                    {
                        if($j==3 || $j==7)
                        echo "<td>&nbsp;&nbsp;&nbsp;</td><td><input type='checkbox' hidden name='seat[]' class='".$i.$j."' value=".$i.$j."><i class='fas fa-couch seat red' id=".$i.$j."></i></td>";
                        else
                        echo "<td><input type='checkbox' name='seat[]' class='".$i.$j."' value=".$i.$j." hidden><i class='fas fa-couch seat red' id=".$i.$j."></i></td>";
                    }
                    else{
                        if($j==3 || $j==7)
                        echo "<td>&nbsp;&nbsp;&nbsp;</td><td><input type='checkbox' hidden name='seat[]' class='".$i.$j."' value=".$i.$j."><i class='fas fa-couch seat' onclick='selected(".$i.$j.")' id=".$i.$j."></i></td>";
                        else
                        echo "<td><input type='checkbox' name='seat[]' class='".$i.$j."' value=".$i.$j." hidden><i class='fas fa-couch seat' onclick='selected(".$i.$j.")' id=".$i.$j."></i></td>";
                    }
                }
            }
                
            }
            echo "</tr>";
            $k=chr(ord($k)+1);
        }
        ?>
        <tr><td>&nbsp;</td><td rowspan="3" colspan="8"><i class="fas fa-arrow-down"></i></td><td rowspan="3" colspan="3"><i class="fas fa-arrow-down"></i></td></tr>
        <tr></tr>

        </table>
        
        <input type="submit" name="submit" value="Continue" class="continue-button align2">
        </form>
        <?php
            if(isset($_POST["submit"]))
            {
                foreach($_POST["seat"] as $item)
                {
                    $booking = "update ".$date.$time.$moviecode." set booked='booked',name ='".$name."' where seat='".$item."'";
                    $result=$conn->query($booking);
                }
                echo "<script>window.location.replace('food.php');</script>";
            }
    
        ?>
    </div>
    </main>

    <!-- <footer class="wholefooter">
       <div class="gototop"><a href="#top" class="gotop">Go Back To Top</a></div> 
       <div class="footer-container">
           <div class="to-flex">
            <h2 class="footer-title">
                DreamWorld <br>Cinemas
            </h2>
            <br><div class="address">
                <i class="fas fa-phone-alt"></i>
                <div class='the-actualadd'>+91 9876543210</div>
            </div>
            <br><div class="address">
                <i class="fas fa-envelope"></i>
                <div class='the-actualadd'><a href="mailto:donotreplydwcinemas@gmail.com" class="mail">dreamworldcinemas@gmail.com</a></div>
            </div>
            <br><div class="address">
                <i class="fas fa-map-marker-alt"></i>
                <div class='the-actualadd'>No 21 Ramnagar Street<br>Adyar<br>Chennai-600020<br>Tamilnadu</div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62203.19846790429!2d80.1820296191794!3d12.991036042861277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52674a257d782b%3A0xa5e84dc8a4337528!2sDream%20World!5e0!3m2!1sen!2sin!4v1625224787116!5m2!1sen!2sin" width="300" height="200" style="border:0;" loading="lazy" class="iframe"></iframe>
           </div>
           <div class="to-flex">
               <br>
               <span class="equip">Our Theatres are equipped with</span><br><br><br>
               <img src="../img/loginpage/dolby.png" alt="image"><br><br><br>
               <img src="../img/loginpage/imax.png" alt="image" class="imaxx" width="250"><br>
               <img src="../img/loginpage/fourdx.png" alt="image" width="250" height="100" class="fourdx"><br><br>
                <span class="diningpartner">Meet Our Dining Partners</span>
                <br><br><br>
                <div class="photoflex">
                    <img src="../img/loginpage/blackburger.png" alt="image" width="70" class="burger1">
                    <img src="../img/loginpage/blackdomino.png" alt="image" width="70">
                    <img src="../img/loginpage/blackstar.jfif" alt="image" width="70" class="star1">
                </div>
            </div>
            <div class="to-flex">
                <br>
                <div class="Subscribe">Subscribe To Our Newsletter</div>
                <input type="email" placeholder="Enter your email" class="subscribe-email"><br>
                <input type="submit" value= "Subscribe"  onclick="mail()" class="subbutton"><br>
                <div class="welovesocial">Because,We Love Social Media</div>
                <div class="theicons">
                    <a href="http://facebook.com" target="_blank" class="iconlink"><i class="fab icon fa-facebook-f"></i></a>
                    <a href="http://twitter.com" target="_blank" class="iconlink"><i class="fab icon fa-twitter"></i></a>
                    <a href="http://instagram.com" target="_blank" class="iconlink"><i class="fab icon fa-instagram"></i></a>
                    <a href="http://youtube.com" target="_blank" class="iconlink"><i class="fab icon fa-youtube"></i></a>
                </div>
                <div class="download-app">Download Our Official DW App<br>Now Available on</div>
                <div class="theicons">
                    <a href="https://play.google.com/store/apps" target="_blank" class="iconlink"><i class="fab store fa-google-play"></i></a>
                    <a href="https://www.apple.com/in/app-store/" target="_blank" class="iconlink"><i class="fab store fa-apple"></i></a>
                </div>
            </div>
       </div>
       <div class="copy-right">
            COPYRIGHT &copy; 2021 DREAMWORLD CINEMAS. ALL RIGHTS RESERVED. Refer <a href="#" class="terms">Terms and Conditions</a>
       </div>
    </footer> -->
</body>
</html>