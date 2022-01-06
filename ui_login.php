<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sty.css">
    <style>
    #emailerr,
    #pwderr {
        display: none;
        padding: 0;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body style="width: 100%;">

    <div class="sign-head">
        <div class="row1">
            <div class="signupbg" style="background-image: url('./assets/homepage_images/02/1@2x.png');"></div>
            <div class="signupbg" style="background-image:  url('./assets/homepage_images/02/2@2x.png');"></div>
            <div class="signupbg" style="background-image:  url('./assets/homepage_images/02/3@2x.png');"></div>
            <div class="signupbg" style="background-image:  url('./assets/homepage_images/02/4@2x.png');"></div>
            <div class="signupbg" style="background-image: url('./assets/homepage_images/02/5@2x.png');"></div>
            <div class="signupbg" style="background-image:  url('./assets/homepage_images/02/6@2x.png');"></div>
            <div class="signupbg" style="background-image:  url('./assets/homepage_images/02/7@2x.png');"></div>
            <div class="signupbg" style="background-image:  url('./assets/homepage_images/02/9@2x.png');"></div>
            <div class="signupbg" style="background-image:  url('./assets/homepage_images/02/10@2x.png');"></div>
            <div class="signupbg" style="background-image:  url('./assets/homepage_images/02/12@2x.png');"></div>
            <div class="signupbg" style="background-image: url('./assets/homepage_images/02/13@2x.png');"></div>
            <div class="signupbg" style="background-image:  url('./assets/homepage_images/02/14@2x.png');"></div>
            <div class="signupbg" style="background-image: url('./assets/homepage_images/02/15@2x.png');"></div>
            <div class="signupbg" style="background-image:  url('./assets/homepage_images/02/16@2x.png');"></div>
            <div class="signupbg row-3" style="background-image: url('./assets/homepage_images/02/18@2x.png');"></div>
            <div class="signupbg row-3" style="background-image:  url('./assets/homepage_images/02/19@2x.png');"></div>
            <div class="signupbg row-3" style="background-image:  url('./assets/homepage_images/02/20@2x.png');"></div>
            <div class="signupbg row-3" style="background-image: url('./assets/homepage_images/02/21@2x.png');"></div>
            <div class="signupbg row-3" style="background-image:  url('./assets/homepage_images/02/23@2x.png');"></div>
            <div class="signupbg row-3" style="background-image:  url('./assets/homepage_images/02/24@2x.png');"></div>
            <div class="signupbg row-3" style="background-image:  url('./assets/homepage_images/02/Bitmap@2x.png');">
            </div>

            <div class="space"></div>


        </div>
        <form action="" id="js" class="form">
            <h3>login</h3>
            <p>Enter your credentials to signup</p>

            <label for="email">Email</label>
            <input type="email" placeholder="Email" id="email" name="email">
            <p id="emailerr" style="color: red;"><img class="alert" src="./assets/OTT_Icon/Alert.png">email is required
            </p>
            <label for="password">Password</label>
            <input type="password" placeholder="password" id="password" name="password" minlength="6">
            <p id="pwderr" style="color: red;"><img class="alert" src="./assets/OTT_Icon/Alert.png">password is required
            </p>
            <p class="forgotpassword" style="color: #A6AE00; text-align:right; transform: translateX(-6%);"><a
                    style="color: #A6AE00;" href="">Forget Password?</a> </p>
            <span id="msg" style="color: #A6AE00;"></span>
            <button class="signup" id="btn">Login</button>

            <p class="signup_link">Don't have an account! <a style="color: #A6AE00;" href="ui_signup.html">Signup</a>
            </p>
        </form>

    </div>
    <div class="bottom2">
        <div class="footer1">
            <p>FAQ </p>
            <P>Terms of use</P>
            <p>Privacy Policy</p>
        </div>
        <div class="footer2">
            <p>Help Center</p>
            <p>Blog</p>
            <p>Watch List</p>
        </div>
        <div class="footer3">
            <p class="mediacenter">Media Center</p>
            <div class="footer-img1">
                <img class="footer-img2" src="./assets/OTT_Icon/You Tube@2x.png" alt="">
                <img class="footer-img2" src="./assets/OTT_Icon/Face book@2x.png" alt="">
                <img class="footer-img2" src="./assets/OTT_Icon/Instagram@2x.png" alt="">
            </div>
            <div class="footer-img2">
                <img class="footer-img" src="./assets/OTT_Icon/App Store@2x.png" alt="">
                <img class="footer-img" src="./assets/OTT_Icon/Google play@2x.png" alt="">
            </div>
        </div>
        <div>
            <p class="rights1"><span style="color: #A6AE00;">Terms and Privacy NoticeSend us
                    feedbackHelp<span>&#169;</span></span> 1996-2021, Watchify.com. Inc. or its affilites</p>
        </div>


    </div>

    <script src="logi.js"></script>
</body>

</html>