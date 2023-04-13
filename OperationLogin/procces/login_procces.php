<?php 
    session_start();
    require_once("../../class/allClass.php");

    // Define variables that do not contain values
    $nickname = $mail = $password = "";
    // Data to be retrieved with ajax
    $nickname_err = $mail_err = $password_err = $login_err = $login_success = "";

    $db = new ccshop\db\Database("ccshop","root","");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(security('nickName'))){
            $nickname_err = ":::1";
            echo $nickname_err;
        } else {
            $nickname = security('nickName');
            $nickname_err = ":::0";
            echo $nickname_err;
        }

        if(empty(security('mail'))){
            $mail_err = ":::1";
            echo $mail_err;
        } else {
            $mail = security('mail');
            $mail_err = ":::0";
            echo $mail_err;
        }

        if(empty(security('password'))){
            $password_err = ":::1";
            echo $password_err;
        } else {
            $password = security('password');
            $password_err = ":::0";
            echo $password_err;
        }

        if($nickname_err == ":::0" && $mail_err == ":::0"){
            $user = $db->getRow("SELECT * FROM users WHERE nickname=? AND mail=?",array($nickname, $mail));

            if(empty($user) == "1") {
                $login_err = ":::1";
                echo $login_err;
            } else {
                $id = $user->user_id;
                $mail = $user->mail;
                if(md5(md5(sha1(hash("sha256", $password)))) == $user->password){
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["mail"] = $mail;

                    $login_success = ":::success";
                    echo $login_success;
                }else{
                    $password_err = ":::1";
                    echo $password_err;
                }
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