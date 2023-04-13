<?php
    session_start();
    
    if(empty($_SESSION["loggedin"]) == "" && $_SESSION["loggedin"] == true){
        $url = "http://localhost/CCShop/Home";
        echo "<script>window.location.replace('$url');</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CC Shop Register</title>
        <link rel="stylesheet" href="http://localhost/CCShop/components/style/font.css">
        <link rel="stylesheet" href="http://localhost/CCShop/components/style/register.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/249993b9b0.js" crossorigin="anonymous"></script>
    </head>
    <div class="__rgstr-pg_wrpr">
        <div class="__rgstr-pg-wbst-lg_wrpr">
            <div class="__rgstr-pg-wbst-lg_cntnr">
                <img src="http://localhost/CCShop/components/icons/CCShopLogo.svg" alt="CCShop">
                <span class="website_name">CC Shop</span>                
            </div>
        </div>
        <div class="__rgstr-bx_wrpr">
            <div class="__rgstr-bx_ttl">
                <span>Sign up</span>
                <span>Enter your personal details below.</span>
            </div>
            <form method="post" id="rgstrFrm" class="__rgstr-bx_inpt_wrpr" onsubmit="return false">
                <div class="__rgstr-bx_inpt-itm">
                    <span>Nick Name:</span>
                    <input type="text" placeholder="Nick name" name="nickName" id="nickName">
                </div>
                <div class="__rgstr-bx_inpt-itm">
                    <span>E-Mail:</span>
                    <input type="email" placeholder="E-mail" name="mail" id="mail">
                </div>
                <div class="__rgstr-bx_inpt-itm">
                    <span>Password:</span>
                    <input type="password" placeholder="Password" name="password" id="password">
                </div>
                <div class="__rgstr-bx_inpt-itm">
                    <span>Repat password:</span>
                    <input type="password" placeholder="Repat password" name="repatPassword" id="repatPassword">
                </div>
                <div class="__rgstr-bx-frm-snd_wrpr">
                    <div class="__rgstr-bx-frm-rd_btn">
                        <label class="__rgstr-bx-frm-chckbx">
                            <input type="checkbox" />
                            <svg viewBox="0 0 21 18">
                                <symbol id="tick-path" viewBox="0 0 21 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.22003 7.26C5.72003 7.76 7.57 9.7 8.67 11.45C12.2 6.05 15.65 3.5 19.19 1.69" fill="none" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                                </symbol>
                                <defs>
                                    <mask id="tick">
                                        <use class="tick mask" href="#tick-path" />
                                    </mask>
                                </defs>
                                <use class="tick" href="#tick-path" stroke="currentColor" />
                                <path fill="white" mask="url(#tick)" d="M18 9C18 10.4464 17.9036 11.8929 17.7589 13.1464C17.5179 15.6054 15.6054 17.5179 13.1625 17.7589C11.8929 17.9036 10.4464 18 9 18C7.55357 18 6.10714 17.9036 4.85357 17.7589C2.39464 17.5179 0.498214 15.6054 0.241071 13.1464C0.0964286 11.8929 0 10.4464 0 9C0 7.55357 0.0964286 6.10714 0.241071 4.8375C0.498214 2.39464 2.39464 0.482143 4.85357 0.241071C6.10714 0.0964286 7.55357 0 9 0C10.4464 0 11.8929 0.0964286 13.1625 0.241071C15.6054 0.482143 17.5179 2.39464 17.7589 4.8375C17.9036 6.10714 18 7.55357 18 9Z" />
                            </svg>
                            <svg class="lines" viewBox="0 0 11 11">
                                <path d="M5.88086 5.89441L9.53504 4.26746" />
                                <path d="M5.5274 8.78838L9.45391 9.55161" />
                                <path d="M3.49371 4.22065L5.55387 0.79198" />
                            </svg>
                        </label>
                        <span>I agree to the Terms of Service and Privacy Policy</span>
                    </div>
                    <button onclick="sendForm('rgstrFrm')" class="__rgstr-bx-frm-snd_btn">
                        <span>Register</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <style>
        .__rgstr-msg-bx_wrpr {
            display: flex;
            top: 20px;
            right: 15px;
            opacity: 0;
            position: absolute;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            box-sizing: border-box;
            border-radius: 5px;
            padding: 15px 10px 15px 10px;
            transition: all .5s;
            transform: translateX(380px);
        }
        .__rgstr-msg-bx_wrpr > span {
            font-size: 16px;
            font-family: KanitRegular;
            margin-right: 30px;
        }
        .__rgstr-msg-bx_wrpr > i {
            font-size: 18px;
            margin-right: 4px;
        }
        .__rgstr-msg-bx_wrpr.success {
            border: 1px solid #0f5132;
            background-color: #0d4029;
        }
        .__rgstr-msg-bx_wrpr.success > i,
        .__rgstr-msg-bx_wrpr.success > span {
            color: #75b798;
        }
        .__rgstr-msg-bx_wrpr.danger {
            border: 1px solid #842029;
            background-color: #481217;
        }
        .__rgstr-msg-bx_wrpr.danger > i,
        .__rgstr-msg-bx_wrpr.danger > span {
            color: #ea868f;
        }
    </style>
    <div class="__rgstr-msg-bx_wrpr">
        <span></span>
        <i class="fa-solid fa-xmark"></i>
    </div>
    <?php 
        include "ajax/register_ajax.php";
    ?>
</html>