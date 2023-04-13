<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"></script>
<style>
    /* padding: 12px 20px 12px 20px;
    border-bottom: 1px solid #eee; */
    .__news-vw_wrpr {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        background-color: #fcfcff;
    }
    .__news-vw_ttl {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        box-sizing: border-box;
        padding: 12px 20px 12px 20px;
        border-bottom: 1px solid #eee;
        margin-bottom: 20px;
    }
    .__news-vw_ttl > span {
        color: #5c5c5c;
        font-size: 28px;
        font-family: KanitRegular;
    }
    .__news-vw_cntnr {
        width: 92%;
        height: 100%;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
    }
    .__news-vw {
        width: 54%;
        box-sizing: border-box;
        border-radius: 10px;
        border: 1px solid #eee;
        padding-bottom: 10px;
        margin-bottom: 30px;
    }
    .__news_ttl {
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
    .__news_ttl > span {
        color: #303030;
        font-size: 18px;
        font-family: KanitRegular;
        margin-left: 8px;
    }
    .__news-ttl-icn_wrpr {
        width: 50px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center; 
        border-right: 1px solid #ddd;
    }
    .__news-ttl-icn_wrpr > i {
        color: #303030;
        font-size: 18px;
    }
    .__nws-itms_wrpr {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
    }
    .__nws-itms-ctgry_wrpr {
        widtH: 98%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        box-sizing: border-box;
        padding: 0 5px 0 24px;
        margin-top: 10px;
        border-bottom: 1px solid #ddd;
    }
    .__nws-itms-ctgry_wrpr > span {
        color: #303030;
        font-size: 16px;
        font-family: KanitRegular;
    }
    .__nws-itms-ctgry_wrpr > span:first-child {
        margin-right: 50px;
    }
    .__nws-itm_cntnr {
        width: 98%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        box-sizing: border-box;
        padding-top: 8px;
        padding-bottom: 8px;
        padding-left: 12px;
        border-bottom: 1px solid #ddd;
    }
    .__nws-itm_cntnr:first-child {
        border-top: 1px solid #ddd;
    }
    .__nws-itm_cntnr:last-child {
        border-bottom: 0;
    }
    .__nws-itm-date_wrpr {
        display: flex;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        padding: 6px;
        border-radius: 5px;
        background-color: #303030;
    }
    .__nws-itm-date_wrpr > span {
        color: #fff;
        font-size: 10px;
        font-family: Rubik;
    }
    .__nws-itm_cntnt {
        margin-left: 15px;
    }
    .__nws-itm_cntnt > span {
        color: #303030;
        font-size: 15px;
        font-family: SourceSansPro;
    }
    .__crds-crdt-vldt_wrpr {
        width: 45%;
        box-sizing: border-box;
        border-radius: 10px;
        border: 1px solid #eee;
        padding-bottom: 10px;
        margin-bottom: 30px;
    }
    .__crds-crdt-vldt_ttl {
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
    .__crds-crdt-vldt_ttl > span {
        color: #303030;
        font-size: 18px;
        font-family: KanitRegular;
        margin-left: 8px;
    }
    .__ttl-icn_wrpr {
        width: 50px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center; 
        border-right: 1px solid #ddd;
    }
    .__ttl-icn_wrpr > i {
        color: #303030;
        font-size: 18px;
    }
    .__crdt-crd-vld_chrt_wrpr {
        width: 80%;
        height: 100%;
        display: flex;
        box-sizing: border-box;
        padding: 15px;
    }
</style>
<div class="__news-vw_wrpr">
    <div class="__news-vw_ttl">
        <span>Güncel Haberler</span>
    </div>
    <div class="__news-vw_cntnr">
        <div class="__news-vw">
            <div class="__news_ttl">
                <div class="__news-ttl-icn_wrpr">
                    <i class="fa-solid fa-radio"></i>
                </div>
                <span>Güncel Haberler</span>
            </div>
            <div class="__nws-itms_wrpr">
                <div class="__nws-itms-ctgry_wrpr">
                    <span>Tarih</span>
                    <span>Bilgiler</span>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 04_01_JP info:CCNO|EXP|CVV|Name|phone|zip|full address.(Valid 80%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 04_03_MIX info:CCNO|EXP|CVV.NO Address(Valid 70%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 03_21_JP info:CCNO|EXP|CVV|Name|DOB|phone|zip|full address.(Valid 90%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 04_03_MIX info:CCNO|EXP|CVV.NO Address(Valid 70%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 03_21_JP info:CCNO|EXP|CVV|Name|DOB|phone|zip|full address.(Valid 90%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 04_03_MIX info:CCNO|EXP|CVV.NO Address(Valid 70%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 03_21_JP info:CCNO|EXP|CVV|Name|DOB|phone|zip|full address.(Valid 90%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 04_03_MIX info:CCNO|EXP|CVV.NO Address(Valid 70%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 03_21_JP info:CCNO|EXP|CVV|Name|DOB|phone|zip|full address.(Valid 90%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 04_03_MIX info:CCNO|EXP|CVV.NO Address(Valid 70%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 03_21_JP info:CCNO|EXP|CVV|Name|DOB|phone|zip|full address.(Valid 90%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 04_03_MIX info:CCNO|EXP|CVV.NO Address(Valid 70%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 03_21_JP info:CCNO|EXP|CVV|Name|DOB|phone|zip|full address.(Valid 90%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 04_03_MIX info:CCNO|EXP|CVV.NO Address(Valid 70%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 03_21_JP info:CCNO|EXP|CVV|Name|DOB|phone|zip|full address.(Valid 90%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 04_03_MIX info:CCNO|EXP|CVV.NO Address(Valid 70%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 03_21_JP info:CCNO|EXP|CVV|Name|DOB|phone|zip|full address.(Valid 90%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 04_03_MIX info:CCNO|EXP|CVV.NO Address(Valid 70%)</span>
                    </div>
                </div>
                <div class="__nws-itm_cntnr">
                    <div class="__nws-itm-date_wrpr">
                        <span>03.04.2023</span>
                    </div>
                    <div class="__nws-itm_cntnt">
                        <span>Updated 03_21_JP info:CCNO|EXP|CVV|Name|DOB|phone|zip|full address.(Valid 90%)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="__crds-crdt-vldt_wrpr">
            <div class="__crds-crdt-vldt_ttl">
                <div class="__ttl-icn_wrpr">
                    <i class="fa-solid fa-credit-card"></i>
                </div>
                <span>Kredi Kartları Geçerliliği</span>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <div class="__crdt-crd-vld_chrt_wrpr">
                <canvas style="width: 400px; height: 400px;" id="myChart"></canvas>
            </div>
        </div>
        <script>
            const ctx = $("#myChart")

            new Chart(ctx, {
                type: 'polarArea',
                data: {
                labels: ['MIX_1031', '11_19_JP', '11_12_jp', '11_09_JP', '11_07_JP', '11_16_JP'],
                datasets: [{
                    label: 'Kredi Kartı Geçerlilik Yüzdesi',
                    data: [90, 90, 85, 80, 70, 85, 30],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                    ],
                    borderWidth: 1
                }]},
                options: {
                    scales: {
                        y: {
                            max: 100,
                            beginAtZero: true,
                            ticks: {
                                callback: function(value, index, ticks) {
                                    return value + '%';
                                }
                            }
                        }
                    }
                }
            });
        </script>
    </div>
</div>