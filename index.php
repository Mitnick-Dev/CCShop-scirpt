<?php
    $pagename = "";
    if(isset($_GET['pg_nm'])){
        $pagename = strip_tags(trim($_GET['pg_nm']));
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CC Shop</title>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    </head>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #fcfcfc;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb {
            background: #4c4c4c;
            border-radius: 4px;
        }
        .main_wrpr {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .app_cntnr {
            width: 100%;
            height: 100%;
            display: flex;
            position: relative;
            flex-direction: column;
            justify-content: flex-start;
        }
    </style>
    <div class="main_wrpr">
        <?php 
            include "components/header/header.php"
        ?>
        <div class="app_cntnr">
            <?php
                include "components/sidebar/sidebar.php";
                if($pagename == "" || $pagename == "News" || $pagename == "Home") {
                    include "components/page/news.php";
                }
                elseif($pagename == "CardsCredit") {
                    include "components/page/cards_credit.php";
                }
                elseif($pagename == "BinCheck") {
                    include "components/page/bin_check.php";
                }
                elseif($pagename == "MyCards") {
                    include "components/page/mycards.php";
                }
                elseif($pagename == "AddBalance") {
                    include "components/page/addbalance.php";
                }
                elseif($pagename == "FAQ") {
                    include "components/page/faq.php";
                }
                elseif($pagename == "Support") {
                    include "components/page/support_ticket.php";
                } else {
                    $url = "http://localhost/CCShop/error/404";
                    echo "<script>window.location.replace('$url');</script>";
                }
            ?>
            <style>
                
            </style>
        </div>
    </div>
    <script>
        $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            if(scroll >= 1) {
                $(".header_wrpr").css({"position": "fixed"})
                $(".app_cntnr").css({"margin-top":"64px"})
            }
            else {
                $(".header_wrpr").css({"position": "relative"})
                $(".app_cntnr").css({"margin-top":"0"})
            }
        });
    </script>
</html>