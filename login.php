<?php include ( "inc/connect.inc.php" ); ?>

<?php
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
}
else {
	header("location: index.php");
}
$emails = "";
$passs = "";
if (isset($_POST['login'])) {
	if (isset($_POST['email']) && isset($_POST['password'])) {
		$user_login = mysqli_real_escape_string($con, $_POST['email']);
		$user_login = mb_convert_case($user_login, MB_CASE_LOWER, "UTF-8");	
		$password_login = mysqli_real_escape_string($con, $_POST['password']);		
		$num = 0;
		$password_login_md5 = md5($password_login);
		$result = mysqli_query($con, "SELECT * FROM user WHERE (email='$user_login') AND password='$password_login_md5' AND activation='yes'");
		$num = mysqli_num_rows($result);
		$get_user_email = mysqli_fetch_assoc($result);
			$get_user_uname_db = $get_user_email['id'];
		if ($num>0) {
			$_SESSION['user_login'] = $get_user_uname_db;
			setcookie('user_login', $user_login, time() + (365 * 24 * 60 * 60), "/");
			
			if (isset($_REQUEST['ono'])) {
				$ono = mysqli_real_escape_string($con, $_REQUEST['ono']);
				header("location: orderform.php?poid=".$ono."");
			}else {
				header('location: index.php');
			}
			exit();
		}
		else {
			$result1 = mysqli_query($con, "SELECT * FROM user WHERE (email='$user_login') AND password='$password_login_md5' AND activation='no'");
		$num1 = mysqli_num_rows($result1);
		$get_user_email1 = mysqli_fetch_assoc($result1);
			$get_user_uname_db1 = $get_user_email1['id'];
		if ($num1>0) {
			$emails = $user_login;
			$activacc ='';
		}else {
			$emails = $user_login;
			$passs = $password_login;
			$error_message = '<br><br>
				<div class="maincontent_text" style="text-align: center; font-size: 18px;">
				<font face="bookman">Email or Password incorrect.<br>
				</font></div>';
		}
			
		}
	}

}
$acemails = "";
$acccode = "";
if(isset($_POST['activate'])){
	if(isset($_POST['actcode'])){
		$user_login = mysqli_real_escape_string($con, $_POST['acemail']);
		$user_login = mb_convert_case($user_login, MB_CASE_LOWER, "UTF-8");	
		$user_acccode = mysqli_real_escape_string($con, $_POST['actcode']);
		$result2 = mysqli_query($con, "SELECT * FROM user WHERE (email='$user_login') AND confirmCode='$user_acccode'");
		$num3 = mysqli_num_rows($result2);
		echo $user_login;
		if ($num3>0) {
			$get_user_email = mysqli_fetch_assoc($result2);
			$get_user_uname_db = $get_user_email['id'];
			$_SESSION['user_login'] = $get_user_uname_db;
			setcookie('user_login', $user_login, time() + (365 * 24 * 60 * 60), "/");
			mysqli_query($con, "UPDATE user SET confirmCode='0', activation='yes' WHERE email='$user_login'");
			if (isset($_REQUEST['ono'])) {
				$ono = mysqli_real_escape_string($con, $_REQUEST['ono']);
				header("location: orderform.php?poid=".$ono."");
			}else {
				header('location: index.php');
			}
			exit();
		}else {
			$emails = $user_login;
			$error_message = '<br><br>
				<div class="maincontent_text" style="text-align: center; font-size: 18px;">
				<font face="bookman">Code not matched!<br>
				</font></div>';
		}
	}else {
		$error_message = '<br><br>
				<div class="maincontent_text" style="text-align: center; font-size: 18px;">
				<font face="bookman">Activation code not matched!<br>
				</font></div>';
	}

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="comicicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<style>
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: rgb(221, 221, 221);
        background-color: #212121;
        margin-left: 50px;
        overflow-x: hidden;
        position: relative;
        margin-right: 50px;
    }

    #login {
        font-size: 250px;
        font-family: "Poppins", sans-serif;
        font-weight: 900;
        color: transparent;
        -webkit-text-stroke: 2.5px #ffffff;
        width: 100%;
        text-align: center;
        padding-top: 150px;
        position: relative;
    }

    #mrvel-video {
        width: 200px;  /* Make the video larger to fit the "O" */
        height: 200px; /* Height same as width for a circular effect */
        border-radius: 50%;
        position: absolute;
        top: 240px; /* Adjust positioning to place it inside the "O" */
        left: 30.4%; /* Center the video horizontally */
        z-index: 1;
        border: solid 2px white;
    }

    #form{
        background-image: url(USERNAME\ ................................png);
        background-size: 60%;
        background-position: center;
        background-repeat: no-repeat;
        height: 900px;
        transform: rotate(355deg);
    }

    input{
    padding: 15px;
    width: 300px;
    font-size: larger;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    border: none;
    background-color: #ecf0ec;
    transition: 0.3s;
    margin-top: 342px;
    margin-left: 300px;
    transform: rotate(360deg);
    }

    #input2{
        position: absolute;
        top: 80px;
        left: 410px;
    }

    input:hover, input:focus {
    background-color: white;
    border: none;
    } 

    button{
    height: 100px;
    border: 4px solid #4dd0e1;
    padding: 20px;
    width: 250px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    background-color: #4dd0e1;
    font-size: larger;
    font-weight: 700;
    color: white;
    position: absolute;
    top: 555px;
    left: 880px;
    transform: rotate(359.5deg);
    }

    footer{
        background-color: black;
        margin-left: -50px;
        margin-right: -50px;
        padding: 250px;
        padding-top: 100px;
        padding-bottom: 100px;
        background-image: url();
        background-repeat: no-repeat;
        background-size: 80%;
        display: flex;
        justify-content: space-between;
        color: white;}

    #fimage{
        width: 200px;}

    .card {
        width: fit-content;
        height: fit-content;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        }

    .socialContainer {
        width: 52px;
        height: 52px;
        background-color: rgb(44, 44, 44);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        transition-duration: .3s;
        }

    .containerOne:hover {
        background-color: #d62976;
        transition-duration: .3s;
        }

    .containerTwo:hover {
        background-color: #00acee;
        transition-duration: .3s;
        }

    .containerThree:hover {
        background-color: #0072b1;
        transition-duration: .3s;
        }

    .containerFour:hover {
        background-color: #25d366;
        transition-duration: .3s;
        }

    .socialSvg {
        width: 17px;
        }

    .socialSvg path {
        fill: rgb(255, 255, 255);
        }
        
    #f1, #f2, #f3 {
            flex: 1;
            padding-left: 100px;
        }

    #f1{
            padding-top: 28px;
            padding-left: -250px;
        }

</style>
<body>

    <h1 id="login">L<span style="position: relative;">O</span>GIN</h1>
    <div id="v1">
        <video align="center" id="mrvel-video" src="marvel-intro-hd-1080p-sd_uBsuU6Y1.mp4" autoplay muted loop></video>
    </div>
    

    <form action="login.php" method="POST" align = "center">
        <div id="form">
        <input type="text" name="username"><br><br><br>
        <input type="password" name="password" id="input2"><br><br><br>
        <button type="submit" name="submit" value="GOOOOO">GOOOOO</button>
        </div>
    </form>

    <footer>
        <img src="https://w0.peakpx.com/wallpaper/597/510/HD-wallpaper-nice-try-spiderman-comics-marvel-spider-stan-lee.jpg" alt="" id="fimage">
        <div id="f1">
            MADE BY VELAN
            <br><br>
            &copy; 2024 COMICPHILE | All Rights Reserved
        </div>
        <div id="f2">
            <h4>QUICK LINKS</h4>
            <li>ABOUT</li>
            <li>COMICS</li>
            <li>NEW</li>
            <li>FAQS</li>
        </div>
        <div id="f3">
            <h4>LEGAL</h4>
            <li>TERMS & CONDITIONS</li>
            <li>PRIVACY POLICY</li>
            <br><br>
            <h4>CONTACT US</h4>
            <div class="card">
            <a href="https://www.instagram.com/_vlon_11/" class="socialContainer containerOne">
                <svg class="socialSvg instagramSvg" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path> </svg>
            </a>
            
            <a href="" class="socialContainer containerTwo">
                <svg class="socialSvg twitterSvg" viewBox="0 0 16 16"> <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path> </svg>              </a>
                
            <a href="https://www.linkedin.com/in/velan-e-40141721b/" class="socialContainer containerThree">
                <svg class="socialSvg linkdinSvg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
            </a>
            
            <a href="#" class="socialContainer containerFour">
                <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path> </svg>
            </a>
            </div>             


        </div>
    </footer>
</body>
</html>
