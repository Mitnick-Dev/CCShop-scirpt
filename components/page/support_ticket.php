<style>
    .__sprt-tckt-vw__wrpr {
        width: 100%;
        min-height: 70%;
        max-height: 75%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        background-color: #fcfcff;
    }
    .__sprt-tckt-vw__ttl {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        box-sizing: border-box;
        padding: 12px 20px 12px 20px;
        border-bottom: 1px solid #eee;
    }
    .__sprt-tckt-vw__ttl > span {
        color: #5c5c5c;
        font-size: 28px;
        font-family: KanitRegular;
    }
    .__sprt-tckt-vw_cntnr {
        width: 92%;
        height: 100%;
        display: flex; 
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        margin-top: 20px;
        margin-bottom: 20px;
        border-radius: 10px;
        border: 1px solid #ddd;
    }
    .__sprt-tckt_ttl {
        width: 100%;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        background-color: #f1f0f6; 
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom: 1px solid #ddd;
    }
    .__sprt-tckt_ttl-icn_wrpr {
        width: 50px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center; 
        border-right: 1px solid #ddd;
    }
    .__sprt-tckt_ttl-icn_wrpr > i {
        color: #303030;
        font-size: 18px;
    }
    .__sprt-tckt_ttl > span {
        color: #303030;
        font-size: 18px;
        font-family: KanitRegular;
        margin-left: 8px;
    }
    .__sprt-tckt-itms_wrpr {
        width: 98%;
        height: 100%;
        display: flex;
        box-sizing: border-box;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        padding-top: 20px;
        overflow: scroll;
    }
    .__sprt-tckt-itms_wrpr::-webkit-scrollbar {
        display: none;
    }
    .__sprt-tckt-itm_wrpr {
        width: 100%;
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        margin-bottom: 20px;
    }
    .__sprt-tckt-itm.prfl-png {
        width: 50px;
        height: 50px;
        border-radius: 5px;
    }
    .__sprt-tckt-itm.msg-bx {
        width: 94%;
        min-height: 50px;
        display: flex;
        position: relative;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        background-color: #e5e5eA;
        border-top-right-radius: 8px;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        margin-top: 6px;
        margin-left: 30px;
        box-sizing: border-box;
        padding: 10px;
    }
    .__sprt-tckt-itm.msg-bx::before {
        content: "";
        width: 0;
        height: 0;
        top: 0;
        left: -14px;
        position: absolute;
        border: .45rem solid transparent;
        border-top-color: #e5e5ea;
        border-right-color: #e5e5ea;
    }
    .__sprt-tckt-itm.msg-bx > span:first-child {
        color: #4f4f4f;
        font-size: 16px;
        font-family: KanitRegular;
        margin-bottom: 5px;
    }
    .__sprt-tckt-itm.msg-bx > span:last-child {
        color: #4f4f4f;
        font-size: 14px;
        font-family: Rubik;
    }
    .__sprt-tckt-inpt_wrpr {
        width: 92%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    .__sprt-tckt-inpt_wrpr > input {
        width: 100%;
        height: 40px;
        font-size: 15px;
        padding-left: 12px;
        box-sizing: border-box;
        font-family: KanitRegular;
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
        border: 1px solid #ddd;
    }
    .__sprt-tckt-inpt_wrpr > input:focus {
        outline: none;
    }
    .__sprt-tckt-inpt_sbmt {
        width: 60px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border-color: #4d8189;
        background-color: #569099;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }
    .__sprt-tckt-inpt_sbmt > i {
        color: #fcfcff;
        font-size: 22px;
    }
</style>
<div class="__sprt-tckt-vw__wrpr">
    <div class="__sprt-tckt-vw__ttl">
        <span>Support</span>
    </div>
    <div class="__sprt-tckt-vw_cntnr">
        <div class="__sprt-tckt_ttl">
            <div class="__sprt-tckt_ttl-icn_wrpr">
                <i class="fa-solid fa-comments"></i>
            </div>
            <span>Support</span>
        </div>
        <div class="__sprt-tckt-itms_wrpr">
            <div class="__sprt-tckt-itm_wrpr">
                <img class="__sprt-tckt-itm prfl-png" src="http://localhost/CCShop/components/icons/user_prfl.jpg" alt="Resim Bulunamadı.">
                <div class="__sprt-tckt-itm msg-bx">
                    <span>Please Help me.</span>
                    <span>10.04.2023 00:15:21</span>
                </div>
            </div>
        </div>
    </div>
    <form class="__sprt-tckt-inpt_wrpr" method="post" onsubmit="return false">
        <input type="text" placeholder="Type a message here." id="" name="">
        <div class="__sprt-tckt-inpt_sbmt">
            <i class="fa-solid fa-check"></i>
        </div>
    </form>
</div>