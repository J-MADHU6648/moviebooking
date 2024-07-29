<?php
session_start();
if(!isset($_SESSION['user'])) {
    header('location:login.php');
    exit; // Make sure to exit after redirecting
}
include('config.php');
extract($_POST);

// OTP Code
if($otp == "123456") {
    $bookid = "BKID" . rand(1000000, 9999999);
    $query = "INSERT INTO tbl_bookings VALUES (NULL, '$bookid', '{$_SESSION['theatre']}', '{$_SESSION['user']}', '{$_SESSION['show']}', '{$_SESSION['screen']}', '{$_SESSION['seats']}', '{$_SESSION['amount']}', '{$_SESSION['date']}', CURDATE(), '1')";

    if(mysqli_query($con, $query)) {
        $_SESSION['success'] = "Booking Done!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($con);
    }
} else {
    $_SESSION['error'] = "Payment Failed";
}
?>

<body>
    <table align='center'>
        <tr>
            <td><strong>Transaction is being processed,</strong></td>
        </tr>
        <tr>
            <td><font color='blue'>Please Wait <i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only"></font></td>
        </tr>
        <tr>
            <td>(Do not 'RELOAD' this page or 'CLOSE' this page)</td>
        </tr>
    </table>
    <h2>
    <script>
        setTimeout(function(){ window.location="orders.php"; }, 3000);
    </script>
</body>
