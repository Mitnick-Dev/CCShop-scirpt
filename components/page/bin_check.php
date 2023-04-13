<style>
    .__bn-chck-vw__wrpr {
        width: 100%;
        min-height: 60%;
        max-height: 65%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        background-color: #fcfcff;
    }
    .__bn-chck-vw__ttl {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        box-sizing: border-box;
        padding: 12px 20px 12px 20px;
        border-bottom: 1px solid #eee;
    }
    .__bn-chck-vw__ttl > span {
        color: #5c5c5c;
        font-size: 28px;
        font-family: KanitRegular;
    }
    .__bn-chck-vw__cntnr {
        width: 100%;
        height: 100%;
        display: flex; 
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        border-radius: 10px;
        border: 1px solid #ddd;
    }
    .__bn-chck_ttl {
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
    .__bn-chck_ttl > span {
        color: #303030;
        font-size: 18px;
        font-family: KanitRegular;
        margin-left: 8px;
    }
    .__bn-chck_ttl-icn_wrpr {
        width: 50px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center; 
        border-right: 1px solid #ddd;
    }
    .__bn-chck_ttl-icn_wrpr > i {
        color: #303030;
        font-size: 18px;
    }
    .__bn-chck-txtarea {
        width: 100%;
        height: 100%;
        resize: none;
        color: #4f4f4f;
        font-size: 16px;
        font-family: Rubik;
        box-sizing: border-box;
        padding: 8px;
        border: none;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    .__bn-chck-txtarea:focus {
        outline: none;
        border-color: #07f;
        box-shadow: 0 0 0 2px #0077ff33;
    } 
    .__bn-chck-dscrpt_wrpr {
        width: 92%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-sizing: border-box;
        padding-bottom: 15px;
        border-bottom: 1px solid #ddd;
        margin-top: 15px;
    }
    .__bn-chck-exmpl_wrpr {
        width: 55%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
    }
    .__bn-chck-exmpl_wrpr > span {
        color: #4f4f4f;
        font-size: 20px;
        font-family: KanitRegular;
        margin-bottom: 8px;
    }
    .__bn-chck-exmpl-bx {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        background-color: #f5f5f5;
        border-radius: 10px;
        border: 1px solid #e3e3e3;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
        box-sizing: border-box;
        padding: 10px;
    }
    .__bn-chck-exmpl-bx > span {
        color: #4f4f4f;
        font-size: 16px;
        font-family: Rubik;
        margin-bottom: 8px;
    }
    .__bn-chck-exmpl-bx > span:last-child {
        margin-right: 0;
    } 
    .__bn-chck-dscrpt_cntnr {
        width: 40%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
    }
    .__bn-chck-dscrpt_cntnr > span {
        color: #4f4f4f;
        font-size: 20px;
        font-family: KanitRegular;
        margin-bottom: 8px;
    }
    .__bn-chck-dscrpt-bx {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #f5f5f5;
        border-radius: 10px;
        border: 1px solid #e3e3e3;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
        box-sizing: border-box;
        padding: 10px;
    }
    .__bn-chck-dscrpt-bx > span {
        color: #4f4f4f;
        font-size: 36px;
        font-family: KanitRegular;
    }
    .__bn-chck-dscrpt-bx-bttm {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 10px;
        background-color: none !important;
    }
    .__bn-chck-dscrpt-bx-bttm > span {
        color: #4f4f4f;
        font-size: 16px;
        font-family: KanitRegular;
    }  
    .__bn-chck-frm-vw__cntnr {
        width: 92%;
        height: 100%;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .__bn-chck-frm-vw__cntnr > button {
        width: 100%;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 30px;
        color: #fcfcff;
        font-size: 20px;
        font-family: KanitRegular;
        cursor: pointer;
        border: none;
        border-radius: 8px;
        transition: all .3s;
        background-color: #90c91d;
    }
    .__bn-chck-frm-vw__cntnr > button:hover {
        background-color: #85bb19;
    }
</style>
<div class="__bn-chck-vw__wrpr">
    <div class="__bn-chck-vw__ttl">
        <span>Bin Checker</span>
    </div>
    <div class="__bn-chck-dscrpt_wrpr">
        <div class="__bn-chck-exmpl_wrpr">
            <span>Example:</span>
            <div class="__bn-chck-exmpl-bx">
                <span>5457497</span>
                <span>5457497921800000</span>
                <span>5457497921800000|03|15|416</span>
                <span>5457497921800000;0315;416;Maria De La Torre;Canada;ON;Brampton;L6Z0C7;5 Copperfield</span>
            </div>
        </div>
        <div class="__bn-chck-dscrpt_cntnr">
            <span>Price:</span>
            <div class="__bn-chck-dscrpt-bx">
                <span>FREE</span>
            </div>
            <div class="__bn-chck-dscrpt-bx-bttm">
                <span>1 bin = 1 line</span>
            </div>
        </div>
    </div>
    <form method="post" class="__bn-chck-frm-vw__cntnr" onsubmit="return false">
        <div class="__bn-chck-vw__cntnr">
            <div class="__bn-chck_ttl">
                <div class="__bn-chck_ttl-icn_wrpr">
                    <i class="fa-solid fa-money-check-dollar"></i>
                </div>
                <span>Bin Checker</span>
            </div>
            <textarea class="__bn-chck-txtarea"></textarea>
        </div>
        <button>Check Now</button>
    </form>
</div>