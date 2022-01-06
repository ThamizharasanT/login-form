<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("location:ui_login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sty.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>




    <div>
        <div class="showcase">
            <div class="showcase-top">
                <img class="img" src="./assets/OTT_Icon/LOGO@2x.png" alt="">
                <div class="btn-sign">
                    <form action="out.php">
                        <button class="out">logout</button>
                    </form>

                    <!-- <a class="sign-btn" href="" class="btn btn-rounded"> logout</a> -->


                    <div class="home-btn">
                        <a class="home" href="#">Home</a>
                        <a class="movies" href="#">Movies</a>
                        <a class="tv" href="#">Tv Shows</a>
                        <a class="wep" href="#">Web series</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="middle">
            <p class="center">Watch Your favorite<span class="span" style="color:#a6ae00;">Movies,Shows,Web
                    series</span></p>
            <p class="center_item">at<span class="span"> Anywhere And Anytime</span></p>
        </div>


        <div class="home_screen_img" style="background-image: url('./home_img/09@2x.png')"> </div>


        <div class="home_screen_img1" style="background-image: url('./home_img/1.png')">
            <h1 class="recent_watch" style="color: white;">Recent Watch</h1>
            <table class="table" style="color: white;">
                <td class="m_name" style="color: #a6ae00 ;">SHADWO</td>
                <td class="crew">crew</td>
                <th class="actror" style="color: #a6ae00 ;">Actor </th>
                <td class="actor_name">Deng Chao</td>
                <th class="colan">: </th>
                <th class="actres" style="color: #a6ae00 ;">Actress :</th>
                <td class="actres_name">Sun li</td>
                <th class="year">Year</th>
                <td class="year_data" style="color: #a6ae00 ;"> Nov 2020</td>
            </table>
        </div>

        <div class="home_screen_img1" style="background-image: url('./home_img/2.png')">
            <table class="table" style="color: white;">
                <td class="m_name" style="color: #a6ae00 ;">SHADOW - CLOUD</td>
                <td class="crew">crew</td>
                <th class="actror" style="color: #a6ae00 ;">Actor </th>
                <td class="actor_name">Lari Mark</td>
                <th class="colan">: </th>
                <th class="actres" style="color: #a6ae00 ;">Actress :</th>
                <td class="actres_name">Swifty</td>
                <th class="year">Year</th>
                <td class="year_data" style="color: #a6ae00 ;"> Nov 2020</td>
            </table>
        </div>

        <div class="home_screen_img1" style="background-image: url('./home_img/3.png')">
            <table class="table" style="color: white;">
                <td class="m_name" style="color: #a6ae00 ;">MATRIX</td>
                <td class="crew">crew</td>
                <th class="actror" style="color: #a6ae00 ;">Actor </th>
                <td class="actor_name">Deng Chao</td>
                <th class="colan">: </th>
                <th class="actres" style="color: #a6ae00 ;">Actress :</th>
                <td class="actres_name">Sun li</td>
                <th class="year">Year</th>
                <td class="year_data" style="color: #a6ae00 ;"> Nov 2021</td>
            </table>
        </div>



        <div class="home_screen_img1" style="background-image: url('./home_img/4.png')">
            <h1 class="recent_watch" style="color: white;">Recommended</h1>
            <table class="table" style="color: white;">
                <td class="m_name" style="color: #a6ae00 ;">CONTRA</td>
                <td class="crew">crew</td>
                <th class="actror" style="color: #a6ae00 ;">Actor </th>
                <td class="actor_name">Sylvester Stallone</td>
                <th class="colan">: </th>
                <th class="actres" style="color: #a6ae00 ;">Actress :</th>
                <td class="actres_name">Sun li</td>
                <th class="year">Year</th>
                <td class="year_data" style="color: #a6ae00 ;"> Nov 2021</td>
            </table>
        </div>

        <div class="home_screen_img1" style="background-image: url('./home_img/5.png')">
            <table class="table" style="color: white;">
                <td class="m_name" style="color: #a6ae00 ;">X-MEN</td>
                <td class="crew">crew</td>
                <th class="actror" style="color: #a6ae00 ;">Actor </th>
                <td class="actor_name">Bryan Singer</td>
                <th class="colan">: </th>
                <th class="actres" style="color: #a6ae00 ;">Actress :</th>
                <td class="actres_name">Simon Kinberg</td>
                <th class="year">Year</th>
                <td class="year_data" style="color: #a6ae00 ;"> Nov 2020</td>
            </table>
        </div>

        <div class="home_screen_img1" style="background-image: url('./home_img/6.png')">
            <table class="table" style="color: white;">
                <td class="m_name" style="color: #a6ae00 ;">DEAD POOL2</td>
                <td class="crew">crew</td>
                <th class="actror" style="color: #a6ae00 ;">Actor </th>
                <td class="actor_name">Deng Chao</td>
                <th class="colan">: </th>
                <th class="actres" style="color: #a6ae00 ;">Actress :</th>
                <td class="actres_name">Sun li</td>
                <th class="year">Year</th>
                <td class="year_data" style="color: #a6ae00 ;"> Nov 2020</td>
            </table>
        </div>


        <div class="home_screen_img1" style="background-image: url('./home_img/7.png')">
            <h1 class="recent_watch" style="color: white;">Tamil Movies</h1>
            <table class="table" style="color: white;">
                <td class="m_name" style="color: #a6ae00 ;">Anbarivu</td>
                <td class="crew">crew</td>
                <th class="actror" style="color: #a6ae00 ;">Actor </th>
                <td class="actor_name">Hip Hop Thamil </td>
                <th class="colan">: </th>
                <th class="actres" style="color: #a6ae00 ;">Actress :</th>
                <td class="actres_name">Sun li</td>
                <th class="year">Year</th>
                <td class="year_data" style="color: #a6ae00 ;"> Nov 2021</td>
            </table>
        </div>

        <div class="home_screen_img1" style="background-image: url('./home_img/8.png')">
            <table class="table" style="color: white;">
                <td class="m_name" style="color: #a6ae00 ;">Valimai</td>
                <td class="crew">crew</td>
                <th class="actror" style="color: #a6ae00 ;">Actor </th>
                <td class="actor_name">Ajith Kumar</td>
                <th class="colan">: </th>
                <th class="actres" style="color: #a6ae00 ;">Actress :</th>
                <td class="actres_name">Huma Qureshi</td>
                <th class="year">Year</th>
                <td class="year_data" style="color: #a6ae00 ;"> Nov 2020</td>
            </table>
        </div>

        <div class="home_screen_img1" style="background-image: url('./home_img/9.png')">
            <table class="table" style="color: white;">
                <td class="m_name" style="color: #a6ae00 ;">Beast</td>
                <td class="crew">crew</td>
                <th class="actror" style="color: #a6ae00 ;">Actor </th>
                <td class="actor_name">Vijay</td>
                <th class="colan">: </th>
                <th class="actres" style="color: #a6ae00 ;">Actress :</th>
                <td class="actres_name">Pooja Hegde</td>
                <th class="year">Year</th>
                <td class="year_data" style="color: #a6ae00 ;"> Nov 2021</td>
            </table>
        </div>


        <div class="home_screen_img1" style="background-image: url('./home_img/10.png')">
            <h1 class="recent_watch" style="color: white;">Malayalam Movies</h1>
            <table class="table" style="color: white;">
                <td class="m_name" style="color: #a6ae00 ;">#HOME</td>
                <td class="crew">crew</td>
                <th class="actror" style="color: #a6ae00 ;">Actor </th>
                <td class="actor_name">Hip Hope Thamil</td>
                <th class="colan">: </th>
                <th class="actres" style="color: #a6ae00 ;">Actress :</th>
                <td class="actres_name">Sun li</td>
                <th class="year">Year</th>
                <td class="year_data" style="color: #a6ae00 ;"> Nov 20201</td>
            </table>
        </div>

        <div class="home_screen_img1" style="background-image: url('./home_img/11.png')">
            <table class="table" style="color: white;">
                <td class="m_name" style="color: #a6ae00 ;">SUNNY</td>
                <td class="crew">crew</td>
                <th class="actror" style="color: #a6ae00 ;">Actor </th>
                <td class="actor_name">Jayasurya</td>
                <th class="colan">: </th>
                <th class="actres" style="color: #a6ae00 ;">Actress :</th>
                <td class="actres_name">Sshivada</td>
                <th class="year">Year</th>
                <td class="year_data" style="color: #a6ae00 ;"> Nov 2021</td>
            </table>
        </div>

        <div class="home_screen_img1" style="background-image: url('./home_img/12.png')">
            <table class="table" style="color: white;">
                <td class="m_name" style="color: #a6ae00 ;">ONE</td>
                <td class="crew">crew</td>
                <th class="actror" style="color: #a6ae00 ;">Actor </th>
                <td class="actor_name">Mamooty</td>
                <th class="colan">: </th>
                <th class="actres" style="color: #a6ae00 ;">Actress :</th>
                <td class="actres_name">-</td>
                <th class="year">Year</th>
                <td class="year_data" style="color: #a6ae00 ;"> Nov 2021</td>
            </table>


        </div>

        <div class="bottom4">
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




</body>

</html>