<style>
    .__add-blnce-vw_wrpr {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        background-color: #fcfcff;
    }
    .__add-blnce-vw__ttl {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        box-sizing: border-box;
        padding: 12px 20px 12px 20px;
        border-bottom: 1px solid #eee;
    }
    .__add-blnce-vw__ttl > span {
        color: #5c5c5c;
        font-size: 28px;
        font-family: KanitRegular;
    }
    .__add-blnce-vw_cntnr {
        width: 40%;
        display: flex; 
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        margin-top: 20px;
        margin-bottom: 35px;
        border-radius: 10px;
        border: 1px solid #ddd;
    }
    .__add-blnce__ttl {
        width: 100%;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f1f0f6; 
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom: 1px solid #ddd;       
    }
    .__add-blnce__ttl > span {
        color: #5c5c5c;
        font-size: 18px;
        font-family: KanitRegular;
    }
    .__add-blnce-tbl__cntnr {
        width: 100%;
        border-collapse: collapse;    
    }
    .__add-blnce-tbl_cntnt {
        width: 100%;
        border-collapse: collapse;
    }
    .__add-blnce-tbl_cntnt > thead > tr > th {
        font-size: 18px;
        font-family: SourceSansPro;
        color: #3e3e3e;
        background-color: #f9f9f9;
    }
    .__add-blnce-tbl_cntnt > tbody > tr > td,
    .__add-blnce-tbl_cntnt > thead > tr > th {
        height: 25px;
        text-align: inherit;
        border-bottom: 1px solid #ddd;
        border-right: 1px solid #ddd;
        padding: 10px;
    }
    .__add-blnce-tbl_cntnt > tbody > tr > td:last-child,
    .__add-blnce-tbl_cntnt > thead > tr > th:last-child {
        border-right: 0;
    }
    .__add-blnce-tbl_cntnt > tbody > tr:last-child > td {
        border-bottom: 0 !important;
    }
    .__add-blnce-tbl_cntnt > thead > tr > th:first-child {
        border-top-left-radius: 10px;
    }
    .__add-blnce-tbl_cntnt > thead > tr > th:last-child {
        border-top-right-radius: 10px;
        border-right: 0;
    }
    .__btc-logo {
        width: 150px;
        margin: 5px 15px 5px 15px;
    }
    .__btc-adrss {
        color: #4f4f4f;
        font-size: 16px;
        font-family: Rubik;
    }
    .__btc-adrs-gnrtr {
        width: 120px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
        background-color: #ffa500;
        cursor: pointer;
    }
    .__btc-adrs-gnrtr > span {
        color: #fcfcff;
        font-size: 14px;
        font-family: KanitRegular;
        white-space: nowrap;
    }
    .__add-blnce-dscrptn_wrpr {
        width: 92%;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 10px;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
    }
    .__add-blnce-dscrptn_wrpr > span {
        color: #4f4f4f;
        font-size: 26px;
        font-family: KanitRegular;
    }
    .__add-blnc-dscrptn_wrpr.bottom {
        width: 92%;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-bottom: 1px solid #ddd;
        margin-top: 10px;
    }
    .__add-blnc-dscrptn.itm {
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-sizing: border-box;
        padding: 5px 10px 5px 10px;
        border-radius: 4px;
        margin-bottom: 5px;
    }
    .__add-blnc-dscrptn.itm:first-child {
        background-color: #d9534f;
        margin-right: 8px;
    }
    .__add-blnc-dscrptn.itm:last-child {
        background-color: #428bca;
    }
    .__add-blnc-dscrptn.itm > span {
        color: #f1f0f6;
        font-size: 12px;
        font-family: KanitRegular;
        white-space: nowrap;
    }
</style>
<div class="__add-blnce-vw_wrpr">
    <div class="__add-blnce-vw__ttl">
        <span>Add Balance</span>
    </div>
    <div class="__add-blnce-vw_cntnr">
        <div class="__add-blnce__ttl">
            <span>Add Balance</span>
        </div>
        <div class="__add-blnce-tbl__cntnr">
            <table class="__add-blnce-tbl_cntnt">
                <thead>
                    <tr>
                        <th>Payment System</th>
                        <th>Adress</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img class="__btc-logo" src="http://localhost/CCShop/components/icons/btcLogo.svg" alt="Resim Bulunamadı">
                        </td>
                        <td>
                            <span class="__btc-adrss">1B2p4eqU37tMXjNRFwqj4gFja7T2AJYq8T</span>
                        </td>
                        <td>
                            <div class="__btc-adrs-gnrtr">
                                <span>Generate Adress</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>            
        </div>
    </div>
    <div class="__add-blnce-dscrptn_wrpr">
        <span>Fast receive and update after payment.Add Balance >=500 Bonus 10%.1 btc address=1 deposit</span>
    </div>
    <div class="__add-blnc-dscrptn_wrpr bottom">
        <div class="__add-blnc-dscrptn itm">
            <span>*min. deposit = 20$</span>
        </div>
        <div class="__add-blnc-dscrptn itm">
            <span>*Bitcoin - Automatically (~1min)!</span>
        </div>
    </div>
</div>