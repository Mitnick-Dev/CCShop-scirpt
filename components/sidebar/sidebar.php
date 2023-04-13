<link rel="stylesheet" href="http://localhost/CCShop/components/style/sidebar.css">
<aside id="aside">
    <div class="sidebar">
        <ul class="sidebar-tabs_wrpr">
            <li class="tab-item_wrpr">
                <i class="fa-solid fa-earth-americas"></i>
                <div class="tab-item tip">News</div>
            </li>
            <li class="tab-item_wrpr">
                <i class="fa-solid fa-credit-card"></i>
                <div class="tab-item tip">Credit Cards</div>
            </li>
            <li class="tab-item_wrpr">
                <i class="fa-solid fa-graduation-cap"></i>
                <div class="tab-item tip">Bin Checker</div>
            </li>
            <li class="tab-item_wrpr">
                <i class="fa-solid fa-user"></i>
                <div class="tab-item tip">My Cards</div>
            </li>
            <li class="tab-item_wrpr">
                <i class="fa-solid fa-money-bill"></i>
                <div class="tab-item tip">Add Balance</div>
            </li>
            <li class="tab-item_wrpr">
                <i class="fa-solid fa-clipboard-question"></i>
                <div class="tab-item tip">FAQ</div>
            </li>
            <li class="tab-item_wrpr">
                <i class="fa-solid fa-headset"></i>
                <span class="tab-item tip">Support</span>
            </li>
        </ul>
    </div>
    <style>
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
    <div class="sidebar_cntnt">
        <div class="sidebar-ttl_wrpr">
            <span>CC Shop Options</span>
            <div class="sidebar-close_wrpr">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        <div class="sidebar_cntnt-tabs_wrpr">
            <div class="sidebar_cntnt-tab-itm_wrpr">
                <div class="sidebar_cntnt-tab-itm_cntnr" type="news">
                    <div class="tab-itm-left_section">
                        <i class="fa-solid fa-earth-americas"></i>
                        <span>News</span>                                
                    </div>
                    <i class="fa-solid fa-angle-down"></i>
                </div>  
                <a class="sidebar_cntnt-tab-itms_cntnr" href="http://localhost/CCShop/News" type="news">
                    <div class="tab-itms_cntnt">
                        <div class="tab-itm">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Recent News</span>
                        </div>
                    </div>
                </a>              
            </div>
            <div class="sidebar_cntnt-tab-itm_wrpr">
                <a class="sidebar_cntnt-tab-itm_cntnr" href="http://localhost/CCShop/CardsCredit" type="CardsCredit">
                    <div class="tab-itm-left_section">
                        <i class="fa-solid fa-credit-card"></i>
                        <span>Credit Cards</span>                                
                    </div>
                </a>                
            </div>
            <div class="sidebar_cntnt-tab-itm_wrpr">
                <a class="sidebar_cntnt-tab-itm_cntnr" href="http://localhost/CCShop/BinCheck" type="BinChecker">
                    <div class="tab-itm-left_section">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>Bin Checker</span>                                
                    </div>
                </a>                
            </div>
            <div class="sidebar_cntnt-tab-itm_wrpr">
                <a class="sidebar_cntnt-tab-itm_cntnr" href="http://localhost/CCShop/MyCards" type="MyCard">
                    <div class="tab-itm-left_section">
                        <i class="fa-solid fa-user"></i>
                        <span>My Cards</span>                                
                    </div>
                </a>                
            </div>
            <div class="sidebar_cntnt-tab-itm_wrpr">
                <a class="sidebar_cntnt-tab-itm_cntnr" href="http://localhost/CCShop/AddBalance" type="AddBalance">
                    <div class="tab-itm-left_section">
                        <i class="fa-solid fa-money-bill"></i>
                        <span>Add Balance</span>                                
                    </div>
                </a>                
            </div>
            <div class="sidebar_cntnt-tab-itm_wrpr">
                <a class="sidebar_cntnt-tab-itm_cntnr" href="http://localhost/CCShop/FAQ">
                    <div class="tab-itm-left_section">
                        <i class="fa-solid fa-clipboard-question"></i>
                        <span>FAQ</span>                                
                    </div>
                </a>                
            </div>
            <div class="sidebar_cntnt-tab-itm_wrpr">
                <div class="sidebar_cntnt-tab-itm_cntnr" type="HelpCenter">
                    <div class="tab-itm-left_section">
                        <i class="fa-solid fa-headset"></i>
                        <span>Support</span>                                
                    </div>
                    <i class="fa-solid fa-angle-down"></i>
                </div> 
                <a class="sidebar_cntnt-tab-itms_cntnr" href="http://localhost/CCShop/Support" type="HelpCenter">
                    <div class="tab-itms_cntnt">
                        <div class="tab-itm">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Submit Ticket</span>
                        </div>
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