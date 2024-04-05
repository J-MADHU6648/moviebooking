<?php
session_start();
if(!isset($_SESSION["name"]))
header("location:../login.php");
$name=$gender=$phone=$email=$city = "";
$name=$_SESSION["name"];
$gender=$_SESSION["gender"];
$phone=$_SESSION["phone"];
$city=$_SESSION["city"];
$email=$_SESSION["email"];
$gold=$_SESSION["member"];
$movie=$_SESSION["movie"];
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
    <title>Home-DW Cinemas</title>
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

.booking-details {
    display: flex;
    margin-top: 30px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: bold;
}

.book-photo {
    margin-left: 100px;
}

.display-movie-info {
    line-height: 40px;
    margin-left: 30px;
    font-size: 24px;
}

.options {
    display: flex;
    margin-bottom: 20px;
}

.the-option {
    font-weight: lighter;
    margin-right: 30px;
    margin-left: 10px;
    text-align: center;
    font-size: 20px;
    border: 2px solid black;
    padding-right: 3px;
    padding-left: 3px;
    cursor: pointer;
}

.the-time {
    padding-right: 20px;
    padding-left: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 16px;
}

.continue-align {
    margin-left: 240px;
    margin-top: 30px;
    font-size: 20px;
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
    <header class="wholenavbar">
        <a id="top"></a>
        <nav class="navbar">
            <div class="logo"><img src="../img/logo2.png" alt="login" height="80" width="100" class="dwlogo"></div>
            <div class="item hover" id="a1"><a href="#" class="remove-link">Home</a></div>
            <div class="item hover" id="a3"><a href="#" class="remove-link">Dining</a></div>
            <div class="item hover" id="a4"><a href="../membership/membership.php" class="remove-link">Membership</a></div>
            <div class="item" id="hiddenlogotitle">DreamWorld Cinemas</div>
            <div class="item hover" id="a5">About Us</div>
            <div class="item welcome">Welcome 
            <?php 
            if($gold=="gold")
            echo "<div class='gold'>".$name."</div>";
            else if($gold=="silver")
            echo "<div class='silver'>".$name."</div>";
            else
            echo $name; ?></div>
            <div class="item"><i class="fas fa-sign-out-alt"></i><a href="../logout.php" class="logoutlink">Log Out</a></div>
        </nav>
    </header>
    <br>
    <main class="booking-part1">
    <h2 class="booking-title">Movie Booking</h2>
        <div class="booking-details">
            <form method="POST" name="bookingdetails">
                <div class="display-movie-info">Theatre Name : DreamWorld Cinemas<br>
                    Movie Name &nbsp;&nbsp;: <?php echo $movie;?><br>
                Membership &nbsp;&nbsp;: <?php if($gold=="gold")
                echo "Gold";
                else if($gold=="silver")
                echo "Silver";
                else
                echo "Not a Member";
                ?><br>
            <br><div class="options">Select the Date : 
                <div class="the-option" onclick="datetimeselect('augone')" id="augone">August 1st<input type="checkbox" class="augone" hidden value="aug1" name="date"></div>
            <div class="the-option" onclick="datetimeselect('augtwo')" id="augtwo">August 2nd<input type="checkbox" class="augtwo" hidden value="aug2" name="date"></div>
            <div class="the-option" onclick="datetimeselect('augthree')" id="augthree">August 3rd<input type="checkbox" class="augthree" hidden value="aug3" name="date"></div><br></div>
        Select the Time : <select name="time" class="the-time">
            <option value="morn">4:30 PM</option>
            <option value="even">7:30 PM</option>
        </select><br>
        <input type="submit" value="Continue" class="continue-button continue-align">
            </form>
        </div>
        <?php 
        echo "<img class='book-photo' src='../img/movies/".$moviecode;
        if($moviecode=="endgame")
        {
            echo ".jfif' alt='image' height='350' width='250'>";
        }
        else{
            echo ".jpg' alt='image' height='350' width='250'>";
        }
        
        ?>
    </main>
    <?php
    if(isset($_POST["date"]) && isset($_POST["time"]))
    {
        $_SESSION["date"]=$_POST["date"];
        $_SESSION["time"]=$_POST["time"];
        header("location:seat.php");
    }
    ?>
</body>
</html>