<?php
  session_start();
  // if($_SESSION["pay"] == "")
  // {
  //  header('location:front.php');
  // }
  // $_SESSION["paypalphp"] = "yes";
?>
<!-- <h1>Please wait we are transferring you in paypal...</h1> -->
<?php
  $paypal_url = '../payment_success.php';
  $pay = $_SESSION['pay'];
  $order_id = $_SESSION["ordr_id"];
?>

<!DOCTYPE html>
<html >
<head>
  <title>PAYMENT | Payment form</title>
      <link rel="stylesheet" href="css/payment.css">
      <link rel="stylesheet" href="responsive/responsive.css">
      <style type="text/css">
        body {
          font-family: calibri, sans-serif;
        }   
        .background-wrap{
          position: fixed;
          z-index: -1000;
          width: 100%;
          height: 100%;
          overflow: hidden;
          top: 0;
          left: 0;
        }

        #video-bg-elem{
          position: absolute;
          top: 0;
          left: 0;
          min-height: 100%;
          min-width: 100%;
        }
      </style>
  
</head>

<body>
  <div class="background-wrap">
    
    <video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
      <source src="video.mp4" type="video/mp4" width="1365" height="760">
      video not supported     



    </video>
  </div>
  <div id="login-box">
  <div class="left">
    <h1>PAYMENT FORM</h1>
    <form action="<?php echo $paypal_url; ?>?id=<?php echo $order_id; ?>" method="post" name="buyCredits" id="buyCredits">
    <input type="text" name="name" placeholder="Username" required />
    <input type="text" name="email" placeholder="E-mail" required />
    <input type="text" name="card" placeholder="Credit card no." required />
    <input type="password" name="password" placeholder="password" required />
    
    <input type="submit" name="submit" value="PAY" />
    </form>
  </div>
  
  <div class="right">
    <span class="loginwith">Join us with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  
  
</body>
</html>
