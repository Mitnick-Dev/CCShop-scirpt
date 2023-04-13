<script>
    var SITE_URL = "http://localhost/CCShop/"

    function sendForm(FormID) {
        var lgnFrmData = $('#'+FormID).serialize();
        var nickname_err = mail_err = password_err = login_success = login_err = "";

        $.ajax({
            type: 'post',
            url: 'http://localhost/CCShop/OperationLogin/procces/login_procces.php',
            data: lgnFrmData,
            success: (data) => {
                data = data.split(":::");

                var nickname_err = data[1];
                var mail_err = data[2];
                var password_err = data[3];
                if(data[4] == 'success') {
                    var login_success = data[4];

                } else {
                    var login_err = data[4];
                }
                function loginMessageBoxAnimation(BoxType) {
                    $(".__lg-msg-bx_wrpr").addClass(BoxType)
                    $(".__lg-msg-bx_wrpr").css({"transform": "translateX(0)", "opacity": "1"})
                    setTimeout(() => {
                        $(".__lg-msg-bx_wrpr").css({"transform": "translateX(380px)", "opacity": "0"})
                        $(".__lg-msg-bx_wrpr").removeClass(BoxType)
                    }, 3000);
                }
                if(nickname_err == 1 && mail_err == 1 && password_err == 1){
                    $(".__lg-msg-bx_wrpr").children().eq(0).html("Please fill in the registration form.")
                    loginMessageBoxAnimation("danger")
                }
                if(nickname_err == 1 && mail_err == 0 && password_err == 0){
                    $(".__lg-msg-bx_wrpr").children().eq(0).html("Please fill in the nick name field.")
                    loginMessageBoxAnimation("danger")
                }
                if(nickname_err == 0 && mail_err == 1 && password_err == 0){
                    $(".__lg-msg-bx_wrpr").children().eq(0).html("Please fill in the e-mail address field")
                    loginMessageBoxAnimation("danger")
                }
                if(nickname_err == 0 && mail_err == 0 && password_err == 1){
                    $(".__lg-msg-bx_wrpr").children().eq(0).html("Please fill in the password field.")
                    loginMessageBoxAnimation("danger")
                }
                if((nickname_err == 1 && mail_err == 1 && password_err == 0) || (nickname_err == 0 && mail_err == 1 && password_err == 1) || (nickname_err == 1 && mail_err == 0 && password_err == 1)){
                    $(".__lg-msg-bx_wrpr").children().eq(0).html("Please fill in the required fields")
                    loginMessageBoxAnimation("danger")
                }
                if(login_err == 1 && nickname_err == 0 && mail_err == 0 && password_err == 0){
                    $(".__lg-msg-bx_wrpr").children().eq(0).html("Sorry, wrong nick name, email or password.")
                    loginMessageBoxAnimation("danger")
                }
                if(login_success == "success" && nickname_err == 0 && mail_err == 0 && password_err == 0){
                    $(".__lg-msg-bx_wrpr").children().eq(0).html("Signing in successfully.")
                    loginMessageBoxAnimation("success")
                    setTimeout(() => {
                        location.href = "http://localhost/CCShop/Home";
                    }, 1500);
                }
            }
        });
    }
</script>