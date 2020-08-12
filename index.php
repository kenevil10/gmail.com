<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/471px-Google_%22G%22_Logo.svg.png" type="image/x-icon">
  <meta charset="UTF-8">
  <title>Gmail Login page || by jillur rahamn</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/google_faceicon.png">
</head>

<body>
  <div id="login_area">
    <div class="login_center_box">
      <img src="https://developerjillur.xyz/mypractice/gimg/images/logo.png" alt="">
      <h2> One account. All of Google. </h2>
      <h3> Sign in to continue to Gmail </h3>
      <div class="login_box">
        <div class="log_center">
          <img src="https://developerjillur.xyz/mypractice/gimg/images/avatar_2x.png" alt="">
          <p style="font-size:5"><?php
              if(isset($_POST['email'])) { 
                $link = mysqli_connect('localhost', 'root', ''); 
                if (!$link) 
                { 
                  $output = 'Unable to connect to the database server.'; 
                  echo $output;
                }
                else {
                  $output = 'Successfully connected to the database server.'; 
                  echo $output;
                }
              } 
          ?> </p>
          <form action="" method='POST'>
            <input class="emailaddress" type="email" name="" id="email" placeholder="Enter your email">
            <button type="submit" name='email' class="next_button">Next</button>
          </form>
          <a href="#">Need help?</a>
        </div>
      </div>

      <div class="under_box">
        <a href="#"> Create account </a>
        <p> One Google Account for everything Google </p>
        <img src="https://developerjillur.xyz/mypractice/gimg/images/allinone.png" alt="">
      </div>

    </div>
  </div>
  <div id="footer_area">
    <div class="footer_center">
      <div class="left_menu">
        <ul>
          <li><a href="#">About Google</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
      <div class="right_menu">
        <img src="https://developerjillur.xyz/mypractice/gimg/images/lang.png" alt="">
        <select class="langues">
          <option value="af"> ‪Afrikaans‬ </option>
          <option value="az"> ‪azərbaycan‬ </option>
          <option value="in"> ‪Bahasa Indonesia‬ </option>
          <option value="ms"> ‪Bahasa Melayu‬ </option>
          <option value="ca"> ‪català‬ </option>
          <option value="cs"> ‪Čeština‬ </option>
          <option value="da"> ‪Dansk‬ </option>
          <option value="de"> ‪Deutsch‬ </option>
          <option value="et"> ‪eesti‬ </option>
          <option value="en-GB"> ‪English (United Kingdom)‬ </option>
          <option selected="selected" value="en"> ‪English (United States)‬ </option>
          <option value="es"> ‪Español (España)‬ </option>
          <option value="es-419"> ‪Español (Latinoamérica)‬ </option>
          <option value="eu"> ‪euskara‬ </option>
          <option value="fil"> ‪Filipino‬ </option>
          <option value="fr-CA"> ‪Français (Canada)‬ </option>
        </select>
      </div>
    </div>
  </div>
</body>

</html>