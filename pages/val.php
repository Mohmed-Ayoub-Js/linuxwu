<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'app';

$conn = mysqli_connect($host, $user, $password, $database);

$id = $_GET['id'];
$stmt2 = $conn->query("SELECT * FROM chat WHERE id='$id'");

$data = mysqli_fetch_array($stmt2);

$text = $_POST['give'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    <style>
        .form-container {
  width: 300px;
  height: 500px;
  background: linear-gradient(#212121, #212121) padding-box,
              linear-gradient(145deg, transparent 35%,#e81cff, #40c9ff) border-box;
  border: 2px solid transparent;
  padding: 32px 24px;
  font-size: 14px;
  font-family: inherit;
  color: white;
  display: flex;
  flex-direction: column;
  gap: 20px;
  box-sizing: border-box;
  border-radius: 16px;
}

.form-container button:active {
  scale: 0.95;
}

.form-container .form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-container .form-group {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.form-container .form-group label {
  display: block;
  margin-bottom: 5px;
  color: #717171;
  font-weight: 600;
  font-size: 12px;
}

.form-container .form-group input {
  width: 100%;
  padding: 12px 16px;
  border-radius: 8px;
  color: #fff;
  font-family: inherit;
  background-color: transparent;
  border: 1px solid #414141;
}

.form-container .form-group textarea {
  width: 100%;
  padding: 12px 16px;
  border-radius: 8px;
  resize: none;
  color: #fff;
  height: 96px;
  border: 1px solid #414141;
  background-color: transparent;
  font-family: inherit;
}

.form-container .form-group input::placeholder {
  opacity: 0.5;
}

.form-container .form-group input:focus {
  outline: none;
  border-color: #e81cff;
}

.form-container .form-group textarea:focus {
  outline: none;
  border-color: #e81cff;
}

.form-container .form-submit-btn {
  display: flex;
  align-items: flex-start;
  justify-content: center;
  align-self: flex-start;
  font-family: inherit;
  color: #717171;
  font-weight: 600;
  width: 40%;
  background: #313131;
  border: 1px solid #414141;
  padding: 12px 16px;
  font-size: inherit;
  gap: 8px;
  margin-top: 8px;
  cursor: pointer;
  border-radius: 6px;
}

.form-container .form-submit-btn:hover {
  background-color: #fff;
  border-color: #fff;
}
body{
    background-color: #313131;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-color: #333;
    font-family: 'Cairo', sans-serif;
    color: white;
}
.title{
    color: black;
}
.header{
    background-color: white;
    box-shadow: 0 0 20px 0 white;
}
.link{
    margin: 40px;
}
.login-box {
    margin-top: 200px;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 300px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgba(24, 20, 20, 0.987);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px;
    width: 300px;
  }
  
  .login-box .user-box {
    position: relative;
  }
  
  .login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
  }
  
  .login-box .user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
  }
  
  .login-box .user-box input:focus ~ label,
  .login-box .user-box input:valid ~ label {
    top: -20px;
    left: 0;
    color: #bdb8b8;
    font-size: 12px;
  }
  
  .login-box form a {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #ffffff;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px
  }
  
  .login-box a:hover {
    background: #03f40f;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #03f40f,
                0 0 25px #03f40f,
                0 0 50px #03f40f,
                0 0 100px #03f40f;
  }
  
  .login-box a span {
    position: absolute;
    display: block;
  }
  
  @keyframes btn-anim1 {
    0% {
      left: -100%;
    }
  
    50%,100% {
      left: 100%;
    }
  }
  
  .login-box a span:nth-child(1) {
    bottom: 2px;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #03f40f);
    animation: btn-anim1 2s linear infinite;
  }
  .button {
    margin-top: 500px;
    padding: 0.6em 1.3em;
    font-weight: 900;
    font-size: 18px;
    background: linear-gradient(to right, rgb(231, 71, 132), 
    rgb(0, 170, 255));
    /* Gradient background */
    border-radius: 10px;
    border: none;
    color: aliceblue;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
    /* Text shadow effect */
    box-shadow: 0 0 10px rgba(55, 0, 255, 0.5);
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease, color 0.3s ease;
  }
  
  .button:hover {
    transform: scale(1.1);
    box-shadow: 0 0 15px rgb(231, 71, 132);
    color: white;
  }


  .card {
    width: 190px;
    height: 254px;
    background-image: linear-gradient(144deg,#8608b4, #492fed 60%,#bd6fda);
    border: none;
    border-radius: 10px;
    padding-top: 10px;
    position: relative;
    margin: auto;
    font-family: inherit;
  }
  
  .card span {
    font-weight: 600;
    color: white;
    text-align: center;
    display: block;
    padding-top: 10px;
    font-size: 1.3em;
  }
  
  .card .job {
    font-weight: 400;
    color: white;
    display: block;
    text-align: center;
    padding-top: 5px;
    font-size: 1em;
  }
  
  .card .img {
    width: 70px;
    height: 70px;
    background: #e8e8e8;
    border-radius: 100%;
    margin: auto;
    margin-top: 20px;
  }
  
  .card button {
    padding: 8px 25px;
    display: block;
    margin: auto;
    border-radius: 8px;
    border: none;
    margin-top: 30px;
    background: #e8e8e8;
    color: #111111;
    font-weight: 600;
  }
  
  .card button:hover {
    background: #212121;
    color: #ffffff;
  }
  #margin{
    margin-top: 40px;
  }
  .submit-button{
    position: relative;
    width: 120px;
    height: 40px;
    background-color: #000;
    display: flex;
    align-items: center;
    color: white;
    flex-direction: column;
    justify-content: center;
    border: none;
    padding: 12px;
    gap: 12px;
    border-radius: 8px;
    cursor: pointer;
  }
  
  .submit-button::before {
    content: '';
    position: absolute;
    inset: 0;
    left: -4px;
    top: -1px;
    margin: auto;
    width: 128px;
    height: 48px;
    border-radius: 10px;
    background: linear-gradient(-45deg, #e81cff 0%, #40c9ff 100% );
    z-index: -10;
    pointer-events: none;
    transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  
  .submit-button::after {
    content: "";
    z-index: -1;
    position: absolute;
    inset: 0;
    background: linear-gradient(-45deg, #fc00ff 0%, #00dbde 100% );
    transform: translate3d(0, 0, 0) scale(0.95);
    filter: blur(20px);
  }
  
  .submit-button:hover::after {
    filter: blur(30px);
  }
  
  .submit-button:hover::before {
    transform: rotate(-180deg);
  }
  
  .submit-button:active::before {
    scale: 0.7;
  }
  
  
  .like-dislike-container {
  --dark-grey: #353535;
  --middle-grey: #767676;
  --lightest-grey: linear-gradient(#fafafa,#ebebeb);
  --shadow: 0 5px 15px 0 #00000026;
  --shadow-active: 0 5px 5px 0 #00000026;
  --border-radius-main: 10px;
  --border-radius-icon: 50px;
  position: relative;
  display: flex;
  text-align: center;
  flex-direction: column;
  align-items: center;
  cursor: default;
  color: var(--dark-grey);
  opacity: .9;
  margin: auto;
  padding: 1.5rem;
  font-weight: 600;
  background: var(--lightest-grey);
  max-width: 30rem;
  border-radius: var(--border-radius-main);
  -webkit-border-radius: var(--border-radius-main);
  -moz-border-radius: var(--border-radius-main);
  -ms-border-radius: var(--border-radius-main);
  -o-border-radius: var(--border-radius-main);
  box-shadow: var(--shadow);
  -moz-box-shadow: var(--shadow);
  -webkit-box-shadow: var(--shadow);
  transition: .2s ease all;
  -webkit-transition: .2s ease all;
  -moz-transition: .2s ease all;
  -ms-transition: .2s ease all;
  -o-transition: .2s ease all;
}

.like-dislike-container:hover {
  box-shadow: var(--shadow-active);
  -moz-box-shadow: var(--shadow-active);
  -webkit-box-shadow: var(--shadow-active);
}

.like-dislike-container .tool-box {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 2.5rem;
  height: 2.5rem;
  top: 0;
  right: 0;
  border-radius: var(--border-radius-main);
  -webkit-border-radius: var(--border-radius-main);
  -moz-border-radius: var(--border-radius-main);
  -ms-border-radius: var(--border-radius-main);
  -o-border-radius: var(--border-radius-main);
}

.like-dislike-container .btn-close {
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  width: .8rem;
  height: .8rem;
  color: transparent;
  font-size: 0;
  cursor: pointer;
  background-color: #ff000080;
  border: none;
  border-radius: var(--border-radius-main);
  -webkit-border-radius: var(--border-radius-main);
  -moz-border-radius: var(--border-radius-main);
  -ms-border-radius: var(--border-radius-main);
  -o-border-radius: var(--border-radius-main);
  transition: .2s ease all;
  -webkit-transition: .2s ease all;
  -moz-transition: .2s ease all;
  -ms-transition: .2s ease all;
  -o-transition: .2s ease all;
}

.like-dislike-container .btn-close:hover {
  width: 1rem;
  height: 1rem;
  font-size: 1rem;
  color: #ffffff;
  background-color: #ff0000cc;
  box-shadow: var(--shadow-active);
  -moz-box-shadow: var(--shadow-active);
  -webkit-box-shadow: var(--shadow-active);
}

.like-dislike-container .btn-close:active {
  width: .9rem;
  height: .9rem;
  font-size: .9rem;
  color: #ffffffde;
  --shadow-btn-close: 0 3px 3px 0 #00000026;
  box-shadow: var(--shadow-btn-close);
  -moz-box-shadow: var(--shadow-btn-close);
  -webkit-box-shadow: var(--shadow-btn-close);
}

.like-dislike-container .text-content {
  margin-bottom: 1rem;
  font-size: 18px;
  line-height: 1.6;
  cursor: default;
}

.like-dislike-container .icons-box {
  display: flex;
}

.like-dislike-container .icons {
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: .6;
  margin: 0 0.5rem;
  padding: 0 0.5rem;
  cursor: pointer;
  border: 1px solid var(--middle-grey);
  border-radius: var(--border-radius-icon);
  -webkit-border-radius: var(--border-radius-icon);
  -moz-border-radius: var(--border-radius-icon);
  transition: .2s ease all;
  -webkit-transition: .2s ease all;
  -moz-transition: .2s ease all;
  -ms-transition: .2s ease all;
  -o-transition: .2s ease all;
}

.like-dislike-container .icons:hover {
  opacity: .9;
  box-shadow: var(--shadow);
  -moz-box-shadow: var(--shadow);
  -webkit-box-shadow: var(--shadow);
}

.like-dislike-container .icons:active {
  opacity: .9;
  box-shadow: var(--shadow-active);
  -moz-box-shadow: var(--shadow-active);
  -webkit-box-shadow: var(--shadow-active);
}

.like-dislike-container .like-label {
  border-right: 0.1rem solid var(--dark-grey);
  padding: 0 0.6rem 0 0.5rem;
  pointer-events: none;
}

.like-dislike-container .dislike-label {
  border-left: 0.1rem solid var(--dark-grey);
  padding: 0 0.5rem 0 0.6rem;
  pointer-events: none;
}

.like-dislike-container .icons .svgs {
  width: 1.3rem;
  fill: #000000;
  box-sizing: content-box;
  padding: 10px 10px;
  transition: .2s ease all;
  -webkit-transition: .2s ease all;
  -moz-transition: .2s ease all;
  -ms-transition: .2s ease all;
  -o-transition: .2s ease all;
}

.like-dislike-container .icons:hover #icon-like {
  animation: rotate-icon-like 0.7s ease-in-out both;
}

.like-dislike-container .icons #icon-dislike {
  transform: rotate(180deg);
}

.like-dislike-container .icons:hover #icon-dislike {
  animation: rotate-icon-dislike 0.7s ease-in-out both;
}

/* Shake Animation */
@keyframes rotate-icon-like {
  0% {
    transform: rotate(0deg) translate3d(0, 0, 0);
  }

  25% {
    transform: rotate(3deg) translate3d(0, 0, 0);
  }

  50% {
    transform: rotate(-3deg) translate3d(0, 0, 0);
  }

  75% {
    transform: rotate(1deg) translate3d(0, 0, 0);
  }

  100% {
    transform: rotate(0deg) translate3d(0, 0, 0);
  }
}

@keyframes rotate-icon-dislike {
  0% {
    transform: rotate(180deg) translate3d(0, 0, 0);
  }

  25% {
    transform: rotate(183deg) translate3d(0, 0, 0);
  }

  50% {
    transform: rotate(177deg) translate3d(0, 0, 0);
  }

  75% {
    transform: rotate(181deg) translate3d(0, 0, 0);
  }

  100% {
    transform: rotate(180deg) translate3d(0, 0, 0);
  }
}
body{
    background-color: #333;
}
.input {
 background-color: #383838;
 border: 1ex solid none;
 border-top-width: 1.7em;
 margin: 0;
 padding: 0;
 color: #383838;
 word-wrap: break-word;
 outline: 7px solid #383838;
 height: 30px;
 font-size: 17px;
 text-align: center;
 transition: all 1s;
 max-width: 190px;
 font-weight: bold;
 font-family: 'Courier New', Courier, monospace;
}

.input:hover {
 border-top-width: 0.2em;
 background-color: #f1e8e8;
}

.input:focus {
 border-top-width: 0.2em;
 background-color: #f1e8e8;
}
    </style>
</head>
<body>

    <style>
        .card {
 width: 100%;
 margin-top: 20px;
 height: 254px;
 border-radius: 30px;
 background: #212121;
 box-shadow: 15px 15px 30px rgb(25, 25, 25),
             -15px -15px 30px rgb(60, 60, 60);
}

body{
    background-color: #333;
} 
    </style>
    <center>
    <div class="app">
    <center>        
        <div class="header">
            <div class="title-application">
                <h1 class="title">
                    Linux WU
                </h1>
            </div>

            <div class="icons">
                <a href="pages/chat.html" class="link">
                    <img src="img/comment-solid.svg" alt="" srcset="" width="50px" height="50px">
                </a>
                <a href="pages/download.html" class="link">
                    <img src="img/download-solid.svg" alt="" width="50px" height="50px">
                </a>
            </div>
        </div>
        

        <?php 
    foreach ($stmt2 as $row) {
        echo '<div class="card" style="margin-top:"200px"">';
        echo '<div class="card-header">' . "<h1> التوزيعة : " . $row['t'] . "</h1>" . '</div>';
        echo '<div class="card-body">'. "<h2> المشكلة :  " . $row['q'] .  "<h2>" .'</div>';
        echo '<br>';
        echo '</div>';
        echo '<form method="post">';
        echo ' <input type="text" name="give" class="input" placeholder="أقترح حلا">';
        echo "<button type='submit' class='submit-button'> ارسال حل</button>";
        echo "</form>" ;
        echo "<h1> الحلول المقترحة :  </h1>";

        echo '<div class="card-body">' . $row['h'] . '</div>';

    }
    ?>	                
    </center>
