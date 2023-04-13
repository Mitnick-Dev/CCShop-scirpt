<?php
    session_start();
    
    require_once("../../class/allClass.php");
    // Define variables that do not contain values
    $nickname = $mail = $password = "";
    // Data to be retrieved with ajax
    $nickname_err = $mail_err = $password_err = $repat_password_err = $register_err_message = $message_type = $register_success = "";

    $db = new ccshop\db\Database("ccshop","root","");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty(security('nickName'))){
            $nickname_err = ":::1";
            echo $nickname_err;
        } else{
            $nickname = security('nickName');
            $nickname_err = ":::0";
            echo $nickname_err;
        }

        if(empty(security('mail'))){
            $mail_err = ":::1";
            echo $mail_err;
        } else{
            $mail = security('mail');
            $mail_err = ":::0";
            echo $mail_err;
        }

        if(empty(security('password')) || empty(security('repatPassword'))){
            $password_err = ":::1";
            echo $password_err;
        } else {
            $password = security('password');
            $password_err = ":::0";
            echo $password_err;
            if(security('password') == security("repatPassword")){
                $repat_password_err = ":::0";
                echo $repat_password_err;
            } else {
                $repat_password_err = ":::1";
                echo $repat_password_err;
            }
        }

        if($nickname_err == ":::0" && $mail_err == ":::0" && $repat_password_err == ":::0"){
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                if (strlen($password) < 6) {
                    $register_err_message = ":::Password must be at least 6 characters.";
                    echo $register_err_message;
                    $message_type = ":::danger";
                    echo $message_type;
                } elseif (!preg_match("#[0-9]+#", $password)) {
                    $register_err_message = ":::The password must contain at least one digit.";
                    echo $register_err_message;
                    $message_type = ":::danger";
                    echo $message_type;
                } elseif (!preg_match("#[A-Z]+#", $password)) {
                    $register_err_message = ":::Password must contain at least one capital letter.";
                    echo $register_err_message;
                    $message_type = ":::danger";
                    echo $message_type;
                } elseif (!preg_match("#[a-z]+#", $password)) {
                    $register_err_message = ":::Password must contain at least one lowercase letter.";
                    echo $register_err_message;
                    $message_type = ":::danger";
                    echo $message_type;
                } else {
                    if(strlen($nickname) < 4){
                        $register_err_message = ":::Nick name must be at least 4 letters.";
                        echo $register_err_message;
                        $message_type = ":::danger";
                        echo $message_type;
                    } else {
                        $checkUser = $db->getRow("SELECT * FROM users WHERE nickname=? AND mail=?",array($nickname, $mail));
                        if(empty($checkUser) == "1"){
                            $db->Insert("INSERT INTO users SET
                            nickname=?, 
                            mail=?, 
                            password=?", 
                            array($nickname, $mail, md5(md5(sha1(hash("sha256", $password))))));
                            $register_success = ":::Registration done successfully.";
                            $message_type = ":::success";
                            echo $message_type;
                        } else {
                            $register_err_message = ":::This email address or nick name has been used";
                            echo $register_err_message;
                            $message_type = ":::danger";
                            echo $message_type;
                        }
                    }
                }
            } else {
                $register_err_message = ":::Please enter valid email address";
                echo $register_err_message;
                $message_type = ":::danger";
                echo $message_type;
            }
        }
    }

    function security($text)
    {
        $text = trim($_POST[$text]);
        $text = stripslashes($text);
        $text = htmlspecialchars($text);

        return $text;
    }
?>