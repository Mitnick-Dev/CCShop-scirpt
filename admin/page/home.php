<style>
    .__admn-pnl-hm-vw__wrpr {
        width: 100%;
        min-height: 90%;
        max-height: 95%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        background-color: #fcfcff;
    }
    .__admn-pnl-hm-vw_ttl {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        box-sizing: border-box;
        padding: 12px 20px 12px 20px;
        border-bottom: 1px solid #eee;
    }
    .__admn-pnl-hm-vw_ttl > span {
        color: #5c5c5c;
        font-size: 28px;
        font-family: KanitRegular;
    } 
    .__admn-pnl-hm__cntnr {
        width: 94%;
        display: flex; 
        flex-direction: row;
        align-items: flex-start;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-top: 20px;
    }   
    .__admn-pnl-dshbrd-itm_wrpr {
        width: 32%;
        height: 180px;
        display: flex;
        position: relative;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        cursor: pointer;
    }
    .__admn-pnl-dshbrd-itm_ttl {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-left: 5px;
    }
    .__admn-pnl-dshbrd-itm_ttl > i {
        color: #4f4f4f;
        font-size: 20px;
        margin-right: 10px;
    }
    .__admn-pnl-dshbrd-itm_ttl > span {
        color: #4f4f4f;
        font-size: 18px;
        font-family: KanitRegular;
        margin-bottom: 6px;
    }
    .__admn-pnl-dshbrd-itm_cntnr {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        border-radius: 10px;
        box-sizing: border-box;
        padding-left: 25px;
        border: 1px solid #e4f2ff;
        background-color: #f5faff;
        box-shadow: 0 2px 10px 1px #7070700d;
    }
    .__admn-pnl-dshbrd-itm_cntnr > span {
        color: #527293;
        font-weight: 600;
        font-size: 35px;
        font-family: Rubik;
    } 
    .__admn-pnl-dshbrd-itm_cntnr > span:last-child {
        top: 3px;
        left: 8px;
        position: relative;
        font-size: 30px;
        font-weight: normal;
        font-family: KanitRegular;
    }
    .__admn-pnl-hm-chrt_wrpr {
        width: 94%;
        height: 56%;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-top: 25px;
    }
    .__admn-pnl-hm-chrt_cntnr {
        width: 66.5%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .__admn-pnl-chrt-bx_wrpr {
        width: 32%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
    }
    .__admn-pnl-chrt-bx-cntnr {
        width: 100%;
        height: 180px;
        display: flex;
        position: relative;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        cursor: pointer;
    }
    .__admn-pnl-chrt-bx_cntnr {
        width: 100%;
        height: 180px;
        top: 6px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        box-sizing: border-box;
        padding-left: 25px;
        border-radius: 10px;
        border: 1px solid #e4f2ff;
        background-color: #f5faff;
        box-shadow: 0 2px 10px 1px #7070700d;
    }
    .__admn-pnl-chrt-bx-cntnr:last-child {
        margin-top: 20px;
    }
    .__admn-pnl-chrt-bx_cntnr > span {
        color: #527293;
        font-weight: 600;
        font-size: 35px;
        font-family: Rubik;
    } 
    .__admn-pnl-chrt-bx_cntnr > span:last-child {
        top: 3px;
        left: 8px;
        position: relative;
        font-size: 30px;
        font-weight: normal;
        font-family: KanitRegular;
    }            
    .__admn-pnl-chrt-bx_ttl {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-left: 5px;
    }
    .__admn-pnl-chrt-bx_ttl > i {
        color: #4f4f4f;
        font-size: 20px;
        margin-right: 10px;
    }
    .__admn-pnl-chrt-bx_ttl > span {
        color: #4f4f4f;
        font-size: 18px;
        font-family: KanitRegular;
        margin-bottom: 6px;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="__admn-pnl-hm-vw__wrpr">
    <div class="__admn-pnl-hm-vw_ttl">
        <span>Admin Dashboard</span>
    </div>
    <div class="__admn-pnl-hm__cntnr">
        <div class="__admn-pnl-dshbrd-itm_wrpr">
            <div class="__admn-pnl-dshbrd-itm_ttl">
                <i class="fa-solid fa-users"></i>
                <span>Number of Active Users:</span>
            </div>
            <div class="__admn-pnl-dshbrd-itm_cntnr">
                <span>2542</span>
                <span>Users</span>
            </div>
        </div>
        <div class="__admn-pnl-dshbrd-itm_wrpr">
            <div class="__admn-pnl-dshbrd-itm_ttl">
                <i class="fa-solid fa-money-check-dollar"></i>
                <span>Total Cards Sold:</span>
            </div>
            <div class="__admn-pnl-dshbrd-itm_cntnr">
                <span>1468</span>
                <span style="top: 2px !important;">Total Sold</span>
            </div>
        </div>
        <div class="__admn-pnl-dshbrd-itm_wrpr">
            <div class="__admn-pnl-dshbrd-itm_ttl">
                <i class="fa-solid fa-fire"></i>
                <span>Net turnover:</span>
            </div>
            <div class="__admn-pnl-dshbrd-itm_cntnr">
                <span>4200 <span style="font-size: 28px !important; position: relative; right: 5px;">$</span></span>
                <span>Turnover</span>
            </div>
        </div>
    </div>
    <div class="__admn-pnl-hm-chrt_wrpr">
        <div class="__admn-pnl-hm-chrt_cntnr">
            <canvas id="alluserChrt"></canvas>
        </div>
        <div class="__admn-pnl-chrt-bx_wrpr">
            <div class="__admn-pnl-chrt-bx-cntnr">
                <div class="__admn-pnl-chrt-bx_ttl">
                    <i class="fa-solid fa-fire"></i>
                    <span>Daily Card Sales:</span>
                </div>
                <div class="__admn-pnl-chrt-bx_cntnr">
                    <span>542</span>
                    <span>Card Sales</span>
                </div>
            </div>
            <div class="__admn-pnl-chrt-bx-cntnr">
                <div class="__admn-pnl-chrt-bx_ttl">
                    <i class="fa-solid fa-comments"></i>
                    <span>Daily Help Tickets:</span>
                </div>
                <div class="__admn-pnl-chrt-bx_cntnr">
                    <span>82</span>
                    <span>Tickets</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const updatePrfmncCHRT_CTX = $('#alluserChrt').get(0).getContext('2d');
    const gradientUpdatePrfmncCHRT_L2 = updatePrfmncCHRT_CTX.createLinearGradient(0, 0, 0, 400);
    gradientUpdatePrfmncCHRT_L2.addColorStop(0, 'rgb(2 187 50 / 25%)');
    gradientUpdatePrfmncCHRT_L2.addColorStop(0.5, 'rgb(2 187 50 / 40%)');
    gradientUpdatePrfmncCHRT_L2.addColorStop(1, 'black');

    const gradientUpdatePrfmncCHRT_L1 = updatePrfmncCHRT_CTX.createLinearGradient(0, 0, 0, 400);
    gradientUpdatePrfmncCHRT_L1.addColorStop(0, 'hsl(330deg 97% 71%)');
    gradientUpdatePrfmncCHRT_L1.addColorStop(0.5, 'rgba(175, 15, 255, 0.477)');
    gradientUpdatePrfmncCHRT_L1.addColorStop(1, 'black');

    const UpdatePrfmncCHRT = new Chart(updatePrfmncCHRT_CTX, {
        type: 'line',
        data: {
            labels: ['00', '02', '04', '06', '08', '10', '12', '14', '16', '18', '20', '22'],
            datasets: [{
                data: [100, 124, 116, 216, 187, 298, 203, 251, 223, 298, 278, 128],
                label: "Bugün",
                borderColor: "rgba(175, 15, 255, 0.477)",
                backgroundColor: gradientUpdatePrfmncCHRT_L1,
                cubicInterpolationMode: 'monotone',
                pointStyle: 'circle',
                pointRadius: 3.7,
                fill: true
            }, {
                data: [134, 150, 158, 196, 217, 197, 243, 221, 263, 280, 308, 308],
                label: "Dün",
                borderColor: "rgb(2 187 50 / 58%)",
                cubicInterpolationMode: 'monotone',
                backgroundColor: gradientUpdatePrfmncCHRT_L2,
                pointStyle: 'circle',
                pointRadius: 3.7,
                fill: true
            }, ]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
            },
            scales: {
                x: {
                    padding: {
                        right: 10
                    },
                    ticks: {
                        position: 'center',
                        autoSkip: false,
                        color: '#787878',
                        font: {
                            size: 16,
                            weight: 600,
                            family: 'KanitRegular',
                        },
                    }
                },
                y: {
                    max: 500,
                    ticks: {
                        color: '#787878',
                        font: {
                            size: 15,
                            weight: 600,
                            family: "KanitRegular",
                        },
                    }
                }
            },
        }
    });
</script>