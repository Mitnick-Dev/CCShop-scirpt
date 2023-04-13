<script>
    var SITE_URL = "http://localhost/CCShop/"

    function sendForm(FormID) {
        var rgstrFrmData = $('#'+FormID).serialize();
        var nickname_err = mail_err = password_err = register_err_msg = register_success = register_msg_typ = "";

        $.ajax({
            type: 'post',
            url: 'http://localhost/CCShop/OperationLogin/procces/register_procces.php',
            data: rgstrFrmData,
            success: (data) => {
                data = data.split(":::");
                var nickname_err = data[1];
                var mail_err = data[2];
                var password_err = data[3];
                var repat_password_err = data[4];

                if(data[5] == 'success') {
                    var register_success = data[5];

                } else {
                    var register_err_msg = data[5];
                    var register_msg_typ = data[6];
                }

                function loginMessageBoxAnimation(BoxType) {
                    $(".__rgstr-msg-bx_wrpr").addClass(BoxType)
                    $(".__rgstr-msg-bx_wrpr").css({"transform": "translateX(0)", "opacity": "1"})
                    setTimeout(() => {
                        $(".__rgstr-msg-bx_wrpr").css({"transform": "translateX(380px)", "opacity": "0"})
                        $(".__rgstr-msg-bx_wrpr").removeClass(BoxType)
                    }, 3000);
                }
                if(nickname_err == 1 && mail_err == 1 && password_err == 1) {
                    $(".__rgstr-msg-bx_wrpr").children().eq(0).html("Please fill in the registration form.")
                    loginMessageBoxAnimation("danger");
                }
                if(nickname_err == 1 && mail_err == 0 && password_err == 0) {
                    $(".__rgstr-msg-bx_wrpr").children().eq(0).html("Please fill in the nick name field.")
                    loginMessageBoxAnimation("danger");
                }
                if(nickname_err == 0 && mail_err == 1 && password_err == 0) {
                    $(".__rgstr-msg-bx_wrpr").children().eq(0).html("Please fill in the e-mail address field.")
                    loginMessageBoxAnimation("danger");
                }
                if(nickname_err == 0 && mail_err == 0 && password_err == 1) {
                    $(".__rgstr-msg-bx_wrpr").children().eq(0).html("Please fill in the password field.")
                    loginMessageBoxAnimation("danger");
                }
                if(nickname_err == 0 && mail_err == 0 && password_err == 0 && repat_password_err == 1) {
                    $(".__rgstr-msg-bx_wrpr").children().eq(0).html("Unfortunately the passwords do not match.")
                    loginMessageBoxAnimation("danger");
                }

                if(register_err_msg != "" && nickname_err == 0 && mail_err == 0 && password_err == 0 && repat_password_err == 0){
                    $(".__rgstr-msg-bx_wrpr").children().eq(0).html(register_err_msg)
                    loginMessageBoxAnimation(register_msg_typ);
                }
                if(register_success == "success" && nickname_err == 0 && mail_err == 0 && password_err == 0 && repat_password_err == 0){
                    $(".__rgstr-msg-bx_wrpr").children().eq(0).html("Signing in successfully.")
                    loginMessageBoxAnimation("success");
                    setTimeout(() => {
                        location.href = "http://localhost/CCShop/Login/login.php";
                    }, 1000);
                }
            }
        });
    }
</script>