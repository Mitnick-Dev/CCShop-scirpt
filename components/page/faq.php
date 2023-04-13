<style>
    .__faq-vw_wrpr {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        background-color: #fcfcff;
    }
    .__faq-vw__ttl {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        box-sizing: border-box;
        padding: 12px 20px 12px 20px;
        border-bottom: 1px solid #eee;
    }
    .__faq-vw__ttl > span {
        color: #5c5c5c;
        font-size: 28px;
        font-family: KanitRegular;
    }
    .__faq-vw__cntnr {
        width: 90%;
        height: 100%;
        display: flex;
        position: relative;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        margin-top: 20px;
        margin-bottom: 35px;
        border-radius: 10px;
        border-top-left-radius: 0;
        border: 1px solid #ddd;
        margin-left: 80px;
        box-sizing: border-box;
        padding: 15px 10px;
    }
    .__faq-vw__cntnr::before {
        content: "Refund";
        width: 65px;
        height: 37px;
        top: -1px;
        left: -66px;
        display: flex;
        color: #303030;
        font-size: 15px;
        font-family: KanitRegular;
        position: absolute;
        border: 1px solid #ddd;
        border-right: 0;
        background-color: #fcfcff;
        border-left: 2px solid #569099;
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
        align-items: center;
        justify-content: center;
    }
    .__faq-itm_wrpr {
        width: 100%;
        height: 50px;
        display: flex;
        overflow: hidden;
        flex-direction: column;
        align-items: center;
        transition: all .3s;
        justify-content: flex-start;
        margin-bottom: 10px;
    }
    .__faq-itm_ttl {
        width: 98%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        box-sizing: border-box;
        cursor: pointer;
        padding: 8px 5px;
        transition: all .3s;
        border-left: 2px solid transparent;
        background-color: #f3f7f8;
        padding-left: 15px;
        margin-bottom: 5px;
    }
    .__faq-itm_ttl > i {
        color: #606060;
        font-size: 14px;
        margin-top: 1px;
        margin-right: 6px;
        transition: all .3s;
    }
    .__faq-itm_ttl > span {
        color: #606060;
        font-size: 16px;
        font-family: KanitRegular;
    }
    .__faq-itm_cntnt {
        width: 98%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
    }
    .__faq-itm_cntnt > span {
        color: #4f4f4f;
        margin: 8px;
        margin-left: 10px;
        font-size: 16px;
        font-family: SourceSansPro;
    }
</style>
<div class="__faq-vw_wrpr">
    <div class="__faq-vw__ttl">
        <span>FAQ</span>
    </div>
    <div class="__faq-vw__cntnr">
        <div class="__faq-itm_wrpr">
            <div class="__faq-itm_ttl">
                <i class="fa-solid fa-angle-right"></i>
                <span>Card Refund</span>
            </div>
            <div class="__faq-itm_cntnt">
                <span>Refund for Card Number incorrect or Card Exp incorrect</span>
                <span>Check Refundable Yes or No(Check in my cards within 5mins when refundable is Yes)</span>
                <span>Real Valid rate.If you want buy valid 100% cards send your telegram to support</span>
            </div>
        </div>
    </div>
</div>
<script>
    setTimeout(() => {
        $(".__faq-itm_wrpr").css({"height": "153px"})
        $(".__faq-itm_ttl").css({"border-left-color": "#569099"})
        $(".__faq-itm_ttl").children().eq(0).css({"transform": "rotateZ(90deg)"})
    }, 200);
    $(".__faq-itm_wrpr").click(() => {
        if($(".__faq-itm_wrpr").css("height") == "50px") {
            $(".__faq-itm_wrpr").css({"height": "153px"})
            $(".__faq-itm_ttl").css({"border-left-color": "#569099"})
            $(".__faq-itm_ttl").children().eq(0).css({"transform": "rotateZ(90deg)"})
        } else {
            $(".__faq-itm_wrpr").css({"height": "50px"})
            $(".__faq-itm_ttl").css({"border-left-color": "transparent"})
            $(".__faq-itm_ttl").children().eq(0).css({"transform": "rotateZ(0deg)"})
        }
    });
</script>