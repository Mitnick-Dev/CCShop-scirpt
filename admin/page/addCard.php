<style>
    .__admn-add-crd-vw__wrpr {
        width: 100%;
        min-height: 96%;
        max-height: 96%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        background-color: #fcfcff;
    }
    .__admn-add-crd-vw_ttl {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        box-sizing: border-box;
        padding: 12px 20px 12px 20px;
        border-bottom: 1px solid #eee;
    }
    .__admn-add-crd-vw_ttl > span {
        color: #5c5c5c;
        font-size: 28px;
        font-family: KanitRegular;
    } 
    .__admn-add-crd__cntnr {
        width: 94%;
        height: 100%;
        display: flex; 
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        margin-top: 20px;
        box-sizing: border-box;
        border-radius: 10px;
        border: 1px solid #eee;
    }
    .__admn-add-crd-frm_ttl {
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
    .__admn-add-crd-frm_ttl > span {
        color: #303030;
        font-size: 18px;
        font-family: KanitRegular;
        margin-left: 8px;
    }
    .add-crd-frm_ttl-icn_wrpr {
        width: 50px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center; 
        border-right: 1px solid #ddd;
    }
    .add-crd-frm_ttl-icn_wrpr > i {
        color: #303030;
        font-size: 18px;
    }
    .__admn-add-crd-frm__cntnr {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        padding: 20px;
        box-sizing: border-box;
    }
    .add-crd-frm-itm_cntnr {
        width: 100%;
        margin-top: 5px;
        margin-bottom: 10px;
    }
    .add-crd-frm-itm_cntnr > span {
        left: 2px;
        position: relative;
        font-size: 18px;
        font-family: KanitRegular;
    }
    .add-crd-frm-itm_cntnr > input {
        width: 100%;
        height: 40px;
        margin-top: 5px;
        padding-left: 10px;
        border-radius: 8px;
        color: #383838;
        box-sizing: border-box;
        border: 1px solid #ddd;
        font-size: 15px;
        font-family: KanitRegular;
    }
    .add-crd-frm-itm_cntnr > input:focus {
        outline: none;
        border-color: #07f;
        box-shadow: 0 0 0 2px #0077ff33;
    }
    .__admn-add-crd-frm__cntnr > button {
        width: 100%;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        border-radius: 10px;
        margin-top: 15px;
        cursor: pointer;
        color: #e0efff;
        font-size: 20px;
        font-family: KanitRegular;
        transition: all .3s;
        background-color: #64a0dd;
    }
    .__admn-add-crd-frm__cntnr > button:hover {
        background-color: #4f88c3;   
    }
</style>
<div class="__admn-add-crd-vw__wrpr">
    <div class="__admn-add-crd-vw_ttl">
        <span>Add To Card</span>
    </div>
    <div class="__admn-add-crd__cntnr">
        <div class="__admn-add-crd-frm_ttl">
            <div class="add-crd-frm_ttl-icn_wrpr">
                <i class="fa-solid fa-credit-card"></i>
            </div>
            <span>Add To Card</span>
        </div>
        <form method="post" class="__admn-add-crd-frm__cntnr" onsubmit="return false">
            <div class="add-crd-frm-itm_cntnr">
                <span>Card Number:</span>
                <input type="text" placeholder="card number" name="crdNumber" id="crdNumber">
            </div>
            <div class="add-crd-frm-itm_cntnr">
                <span>Exp. End:</span>
                <input type="text" placeholder="exp. end" name="expEnd" id="expEnd">
            </div>
            <div class="add-crd-frm-itm_cntnr">
                <span>CVV:</span>
                <input type="text" placeholder="cvv" name="cvvNumber" id="cvvNumber">
            </div>
            <div class="add-crd-frm-itm_cntnr">
                <span>City:</span>
                <input type="text" placeholder="city" name="city" id="city">
            </div>
            <div class="add-crd-frm-itm_cntnr">
                <span>State:</span>
                <input type="text" placeholder="state" name="state" id="state">
            </div>
            <div class="add-crd-frm-itm_cntnr">
                <span>Country:</span>
                <input type="text" placeholder="country" name="country" id="country">
            </div> 
            <div class="add-crd-frm-itm_cntnr">
                <span>Zip Code:</span>
                <input type="text" placeholder="zip code" name="zipCode" id="zipCode">
            </div>       
            <button>Add To Card</button>    
        </form>
    </div>
</div>