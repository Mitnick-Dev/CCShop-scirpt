<?php 
    $admnPagename = "";
    if(isset($_GET['admn_pg_nm'])){
        $admnPagename = strip_tags(trim($_GET['admn_pg_nm']));
    }    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CCShop-Admin</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        .__admn-pnl_app__wrpr {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .__admn-pnl_app__cntnr {
            width: 100%;
            height: 100%;
            display: flex;
            position: relative;
            flex-direction: column;
            justify-content: flex-start;
        }
    </style>
    <div class="__admn-pnl_app__wrpr">
        <?php 
            include "header/admin_header.php";
        ?>
        <div class="__admn-pnl_app__cntnr">
            <?php 
                include "sidebar/sidebar.php";
                if($admnPagename == "" || $admnPagename == "Dashboard" || $admnPagename == "Home") {
                    include "page/home.php";
                } 
                elseif($admnPagename == "AddCard"){
                    include "page/addCard.php";
                } 
                elseif($admnPagename == "AddNew"){
                    include "page/addNew.php";
                } 
                elseif($admnPagename == "HelpTickets"){
                    include "page/helpTickets.php";
                } 
                else {
                    $url = "http://localhost/CCShop/error/404";
                    echo "<script>window.location.replace('$url');</script>";
                }
            ?>
        </div>
    </div>
</html>