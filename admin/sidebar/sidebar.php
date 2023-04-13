<style>
    #aside {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 101;
        display: flex;
        align-items: flex-end;
        text-align: center;
    }
    .sidebar {
        z-index: 1;
        width: 40px;
        top: 20% !important;
        bottom: auto;
        left: 5px;
        position: absolute;
        transform: translateY(-50%);
        transition: left .3s;
        margin-top: 50px;
    }
    .sidebar-tabs_wrpr {
        top: 37%;
        z-index: 1;
        width: 40px;
        position: relative;
        padding: 0;
        list-style: none;
        background-color: #383838;
        border-radius: .5rem;
    }
    .sidebar-tabs_wrpr .tab-item_wrpr {                
        width: 100%;
        height: 40px !important;
        display: flex;
        align-items: center;
        justify-content: center;
        border-bottom: 1px solid #504f4f;
        cursor: pointer;
    }
    .sidebar-tabs_wrpr .tab-item_wrpr:hover {
        background-color: #4e4e4d;
    }
    .sidebar-tabs_wrpr .tab-item_wrpr:first-child:hover {
        background-color: #4e4e4d;
        border-top-left-radius: 0.4rem;
        border-top-right-radius: 0.4rem;
    }
    .sidebar-tabs_wrpr .tab-item_wrpr:last-child:hover {
        background-color: #4e4e4d;
        border-bottom-left-radius: 0.4rem;
        border-bottom-right-radius: 0.4rem;
    }
    .sidebar-tabs_wrpr .tab-item_wrpr:last-child {
        border-bottom: 0;
    }
    .tab-item_wrpr > i {
        color: #cbe0e7;
    }
    .tab-item_wrpr > .tab-item.tip {
        width: 0;
        height: 26px !important;
        left: 47px;
        position: absolute;
        visibility: hidden;
        border-radius: .3rem;
        white-space: nowrap;
        display: flex;
        overflow: hidden;
        margin: auto;
        background-color: #383838;
        color: #ffffffde;
        font-size: 11px;
        font-family: KanitRegular;
        transition: all .1s;
        justify-content: center;
        align-items: center;
    }
    .tab-item_wrpr > .tab-item.tip::before {
        display: block;
        position: absolute;
        top: 8px;
        left: -11px;
        content: "";
        border: .4rem solid transparent;
        border-right-color: #383838;
    }
    .tab-item_wrpr:hover > .tab-item.tip {
        width: auto;
        visibility: visible;
        overflow: visible;
        padding: 0 .75rem;
    }
    .sidebar_cntnt {
        z-index: 3;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        position: relative;
        max-width: 250px;
        width: 0;
        height: calc(100% - 63px);
        overflow: hidden;
        transition: all .3s;
        background-color: #fcfcff;
    }
    .sidebar-ttl_wrpr {
        width: 100%;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #303030;
    }
    .sidebar-ttl_wrpr > span {
        color: #cbe0e7;
        font-size: 15px;
        padding-left: 10px;
        white-space: nowrap;
        box-sizing: border-box;
        font-family: KanitRegular;
    }
    .sidebar-close_wrpr {
        width: 30px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .sidebar-close_wrpr > i {
        color: #cbe0e7;
        margin-top: 2px;
    }
    .sidebar_cntnt-tabs_wrpr {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
    }
    .sidebar_cntnt-tab-itm_cntnr {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        transition: all .3s; 
        text-decoration: none;
        padding: 10px 8px 10px 8px;
        cursor: pointer;
        box-sizing: border-box;
        background-color: #383838;
        border-bottom: 1px solid #1c1c1c;
    }
    .sidebar_cntnt-tab-itm_wrpr:first-child .sidebar_cntnt-tab-itm_cntnr {
        border-top: 1px solid #1c1c1c;
    }
    .sidebar_cntnt-tab-itm_cntnr:hover {
        background-color: #303030;
    }
    .sidebar_cntnt-tab-itm_cntnr > i {
        color: #cbe0e7;
        font-size: 16px;
        margin-top: 1px;
        transform: rotate(-90deg);
        transition: all .3s;
    }
    .tab-itm-left_section {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    .tab-itm-left_section > i {
        color: #cbe0e7;
        margin-right: 6px;
    }
    .tab-itm-left_section > span {
        color: #cbe0e7;
        font-size: 16px;
        white-space: nowrap;
        font-family: KanitRegular;
    }
    .sidebar_cntnt-tab-itm_wrpr {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
    }
    .sidebar_cntnt-tab-itms_cntnr {
        width: 100%;
        height: 0;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        visibility: hidden;
        overflow: hidden;
        text-decoration: none;
        transition: all .3s; 
        padding: 0;
        cursor: pointer;
        box-sizing: border-box;
        background-color: #1c1c1c;
    }
    .sidebar_cntnt-tab-itms_cntnr > .tab-itms_cntnt {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
    }
    .sidebar_cntnt-tab-itms_cntnr > .tab-itms_cntnt > .tab-itm {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        box-sizing: border-box;
        padding: 8px;
        overflow: hidden;
        margin-bottom: 4px;
    }
    .tab-itms_cntnt .tab-itm > i {
        color: #cbe0e7;
        font-size: 14px;
        margin-right: 6px;
    }
    .tab-itms_cntnt .tab-itm > span {
        color: #cbe0e7;
        white-space: nowrap;
        font-size: 15px;
        font-family: KanitRegular;
    }
</style>
<aside id="aside">
    <div class="sidebar">
        <ul class="sidebar-tabs_wrpr">
            <li class="tab-item_wrpr">
                <i class="fa-solid fa-gauge-high"></i>
                <span class="tab-item tip">Dashboard</span>
            </li>
            <li class="tab-item_wrpr">
                <i class="fa-solid fa-credit-card"></i>
                <div class="tab-item tip">Add to Cards</div>
            </li>
            <li class="tab-item_wrpr">
                <i class="fa-solid fa-bullhorn"></i>
                <span class="tab-item tip">Add to News</span>
            </li>
            <li class="tab-item_wrpr">
                <i class="fa-solid fa-headset"></i>
                <span class="tab-item tip">Help Tickets</span>
            </li>
        </ul>
    </div>
    <div class="sidebar_cntnt">
        <div class="sidebar-ttl_wrpr">
            <span>CC Shop Admin Options</span>
            <div class="sidebar-close_wrpr">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        <div class="sidebar_cntnt-tabs_wrpr">
            <div class="sidebar_cntnt-tab-itm_wrpr">
                <a class="sidebar_cntnt-tab-itm_cntnr" href="http://localhost/CCShop/admin/Dashboard" type="CardsCredit">
                    <div class="tab-itm-left_section">
                        <i class="fa-solid fa-gauge-high"></i>
                        <span>Dashboard</span>                                
                    </div>
                </a>                
            </div>
            <div class="sidebar_cntnt-tab-itm_wrpr">
                <div class="sidebar_cntnt-tab-itm_cntnr" type="news">
                    <div class="tab-itm-left_section">
                        <i class="fa-solid fa-credit-card"></i>
                        <span>Add to Credit Cards</span>                                
                    </div>
                    <i class="fa-solid fa-angle-down"></i>
                </div>  
                <a class="sidebar_cntnt-tab-itms_cntnr" href="http://localhost/CCShop/admin/AddCard" type="news">
                    <div class="tab-itms_cntnt">
                        <div class="tab-itm">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Add to Credit Cart</span>
                        </div>
                    </div>
                </a>              
            </div>
            <div class="sidebar_cntnt-tab-itm_wrpr">
                <a class="sidebar_cntnt-tab-itm_cntnr" href="http://localhost/CCShop/admin/AddNew" type="CardsCredit">
                    <div class="tab-itm-left_section">
                        <i class="fa-solid fa-bullhorn"></i>
                        <span>Add to News</span>                                
                    </div>
                </a>                
            </div>
            <div class="sidebar_cntnt-tab-itm_wrpr">
                <a class="sidebar_cntnt-tab-itm_cntnr" href="http://localhost/CCShop/admin/HelpTickets" type="CardsCredit">
                    <div class="tab-itm-left_section">
                        <i class="fa-solid fa-headset"></i>
                        <span>Help Tickets</span>                                
                    </div>
                </a>                
            </div>
        </div>
    </div>
</aside>
<script>
    $(".tab-item_wrpr").click(() => {
        $(".sidebar").css({"left":"260px"})
        $(".sidebar_cntnt").css({"width":"250px","border-right":"4px solid #383838"});
    })
    $(".sidebar-close_wrpr").click(() => {
        $(".sidebar").css({"left":"5px"})
        $(".sidebar_cntnt").css({"width":"0","border-right":"0"});
    })

    $(".sidebar_cntnt-tab-itm_cntnr[type='news']").click(() => {
        if($(".sidebar_cntnt-tab-itms_cntnr[type='news']").css("height") == "0px") {
            $(".sidebar_cntnt-tab-itm_cntnr[type='news']").children().eq(1).css({"transform":"rotate(0deg)"})
            $(".sidebar_cntnt-tab-itms_cntnr[type='news']").css({"height":"60px","visibility":"visible", "overflow":"visible", "padding":"10px 8px 10px 8px"});
        } else {
            $(".sidebar_cntnt-tab-itm_cntnr[type='news']").children().eq(1).css({"transform":"rotate(-90deg)"})
            $(".sidebar_cntnt-tab-itms_cntnr[type='news']").css({"height":"0px","visibility":"hidden", "overflow":"hidden", "padding":"0"});
        }
    })
    $(".sidebar_cntnt-tab-itm_cntnr[type='HelpCenter']").click(() => {
        if($(".sidebar_cntnt-tab-itms_cntnr[type='HelpCenter']").css("height") == "0px") {
            $(".sidebar_cntnt-tab-itm_cntnr[type='HelpCenter']").children().eq(1).css({"transform":"rotate(0deg)"})
            $(".sidebar_cntnt-tab-itms_cntnr[type='HelpCenter']").css({"height":"60px","visibility":"visible", "padding":"10px 8px 10px 8px"});
        } else {
            $(".sidebar_cntnt-tab-itm_cntnr[type='HelpCenter']").children().eq(1).css({"transform":"rotate(-90deg)"})
            $(".sidebar_cntnt-tab-itms_cntnr[type='HelpCenter']").css({"height":"0px","visibility":"hidden", "padding":"0"});
        }
    })
</script>