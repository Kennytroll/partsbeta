<?php

if (function_exists('current_user_can'))
    if (!current_user_can('manage_options')) {
        die('Access Denied');
    }
if (!function_exists('current_user_can')) {
    die('Access Denied');
}


function wdcat_html_showGlobal($param_values, $op_type)
{


    ?>
    <table width="70%">
        <tbody>
        <tr>
            <td width="100%" style="font-size:14px; font-weight:bold"><a
                    href="http://web-dorado.com/spider-catalog-wordpress-guide-step-4/spider-catalog-wordpress-guide-step-4-1.html"
                    target="_blank" style="color:blue; text-decoration:none;">User Manual</a><br/>
                This section allows you to configure the global options. <a
                    href="http://web-dorado.com/spider-catalog-wordpress-guide-step-4/spider-catalog-wordpress-guide-step-4-1.html"
                    target="_blank" style="color:blue; text-decoration:none;">More...</a>
            </td>

        </tr>
        <tr>
            <td width="100%"><h2>Spider Catalog - Global Options</h2></td>
            <td align="right"><input type="button" onclick="document.getElementById('adminForm').submit()" value="Save"
                                     class="button-primary"></td>
        </tr>
        </tbody>
    </table>

    <br/>
    <form action="admin.php?page=Options_Catalog_global&task=save" method="post" id="adminForm" name="adminForm">
    <fieldset style="border:2px groove; width:70%;">
    <legend>Global Options</legend>

    <script type="text/javascript">
        //  window.addEvent('domready', function(){ var JTooltips = new Tips($$('.hasTip'), { maxTitleChars: 50, fixed: false}); });
    </script>
    <style>


    #minwidth {
        min-width: 960px;
    }

    .clr {
        clear: both;
        overflow: hidden;
        height: 0;
    }

    a, img {
        padding: 0;
        margin: 0;
    }

    img {
        border: 0 none;
    }

    form {
        margin: 0;
        padding: 0;
    }

    h1 {
        margin: 0;
        padding-bottom: 8px;
        color: #0B55C4;
        font-size: 20px;
        font-weight: bold;
    }

    h3 {
        font-size: 13px;
    }

    a:link {
        color: #0B55C4;
        text-decoration: none;
    }

    a:visited {
        color: #0B55C4;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    fieldset {
        margin-bottom: 10px;
        border: 1px #ccc solid;
        padding: 5px;
        text-align: left;
    }

    fieldset p {
        margin: 10px 0px;
    }

    legend {
        color: #0B55C4;
        font-size: 12px;
        font-weight: bold;
    }

    input, select {
        font-size: 10px;
        border: 1px solid silver;
    }

    textarea {
        font-size: 11px;
        border: 1px solid silver;
    }

    button {
        font-size: 10px;
    }

    input.disabled {
        background-color: #F0F0F0;
    }

    input.button {
        cursor: pointer;
    }

    input:focus,
    select:focus,
    textarea:focus {
        background-color: #ffd
    }

        /* -- overall styles ------------------------------ */

    #border-top.h_green {
        background: url(../images/h_green/j_header_middle.png) repeat-x;
    }

    #border-top.h_green div {
        background: url(../images/h_green/j_header_right.png) 100% 0 no-repeat;
    }

    #border-top.h_green div div {
        background: url(../images/h_green/j_header_left.png) no-repeat;
        height: 54px;
    }

    #border-top.h_teal {
        background: url(../images/h_teal/j_header_middle.png) repeat-x;
    }

    #border-top.h_teal div {
        background: url(../images/h_teal/j_header_right.png) 100% 0 no-repeat;
    }

    #border-top.h_teal div div {
        background: url(../images/h_teal/j_header_left.png) no-repeat;
        height: 54px;
    }

    #border-top.h_cherry {
        background: url(../images/h_cherry/j_header_middle.png) repeat-x;
    }

    #border-top.h_cherry div {
        background: url(../images/h_cherry/j_header_right.png) 100% 0 no-repeat;
    }

    #border-top.h_cherry div div {
        background: url(../images/h_cherry/j_header_left.png) no-repeat;
        height: 54px;
    }

    #border-top .title {
        font-size: 22px;
        font-weight: bold;
        color: #fff;
        line-height: 44px;
        padding-left: 180px;
    }

    #border-top .version {
        display: block;
        float: right;
        color: #fff;
        padding: 25px 5px 0 0;
    }

    #border-bottom {
        background: url(../images/j_bottom.png) repeat-x;
    }

    #border-bottom div {
        background: url(../images/j_corner_br.png) 100% 0 no-repeat;
    }

    #border-bottom div div {
        background: url(../images/j_corner_bl.png) no-repeat;
        height: 11px;
    }

    #footer .copyright {
        margin: 10px;
        text-align: center;
    }

    #header-box {
        border: 1px solid #ccc;
        background: #f0f0f0;
    }

    #content-box {
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
    }

    #content-box .padding {
        padding: 10px 10px 0 10px;
    }

    #toolbar-box {
        background: #fbfbfb;
        margin-bottom: 10px;
    }

    #submenu-box {
        background: #f6f6f6;
        margin-bottom: 10px;
    }

    #submenu-box .padding {
        padding: 0px;
    }

        /* -- status layout */
    #module-status {
        float: right;
    }

    #module-status span {
        display: block;
        float: left;
        line-height: 16px;
        padding: 4px 10px 0 22px;
        margin-bottom: 5px;
    }

    #module-status {
        background: url(../images/mini_icon.png) 3px 5px no-repeat;
    }

    .legacy-mode {
        color: #c00;
    }

    #module-status .preview {
        background: url(../images/menu/icon-16-media.png) 3px 3px no-repeat;
    }

    #module-status .unread-messages,
    #module-status .no-unread-messages {
        background: url(../images/menu/icon-16-messages.png) 3px 3px no-repeat;
    }

    #module-status .unread-messages a {
        font-weight: bold;
    }

    #module-status .loggedin-users {
        background: url(../images/menu/icon-16-user.png) 3px 3px no-repeat;
    }

    #module-status .logout {
        background: url(../images/menu/icon-16-logout.png) 3px 3px no-repeat;
    }

        /* -- various styles -- */
    span.note {
        display: block;
        background: #ffd;
        padding: 5px;
        color: #666;
    }

        /** overlib **/

    .ol-foreground {
        background-color: #ffe;
    }

    .ol-background {
        background-color: #6db03c;
    }

    .ol-textfont {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
        color: #666;
    }

    .ol-captionfont {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11px;
        color: #fff;
        font-weight: bold;
    }

    .ol-captionfont a {
        color: #0b5fc6;
        text-decoration: none;
    }

    .ol-closefont {
    }

        /** toolbar **/

    div.header {
        font-size: 22px;
        font-weight: bold;
        color: #0B55C4;
        line-height: 48px;
        padding-left: 55px;
        background-repeat: no-repeat;
        margin-left: 10px;
    }

    div.header span {
        color: #666;
    }

    div.configuration {
        font-size: 14px;
        font-weight: bold;
        color: #0B55C4;
        line-height: 16px;
        padding-left: 30px;
        margin-left: 10px;
        background-image: url(../images/menu/icon-16-config.png);
        background-repeat: no-repeat;
    }

    div.toolbar {
        float: right;
        text-align: right;
        padding: 0;
    }

    table.toolbar {
        border-collapse: collapse;
        padding: 0;
        margin: 0;
    }

    table.toolbar td {
        padding: 1px 1px 1px 4px;
        text-align: center;
        color: #666;
        height: 48px;
    }

    table.toolbar td.spacer {
        width: 10px;
    }

    table.toolbar td.divider {
        border-right: 1px solid #eee;
        width: 5px;
    }

    table.toolbar span {
        float: none;
        width: 32px;
        height: 32px;
        margin: 0 auto;
        display: block;
    }

    table.toolbar a {
        display: block;
        float: left;
        white-space: nowrap;
        border: 1px solid #fbfbfb;
        padding: 1px 5px;
        cursor: pointer;
    }

    table.toolbar a:hover {
        border-left: 1px solid #eee;
        border-top: 1px solid #eee;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        text-decoration: none;
        color: #0B55C4;
    }

        /** for massmail component **/
    td#mm_pane {
        width: 90%;
    }

    input#mm_subject {
        width: 200px;
    }

    textarea#mm_message {
        width: 100%;
    }

        /* pane-sliders  */
    .pane-sliders .title {
        margin: 0;
        padding: 2px;
        color: #666;
        cursor: pointer;
    }

    .pane-sliders .panel {
        border: 1px solid #ccc;
        margin-bottom: 3px;
    }

    .pane-sliders .panel h3 {
        background: #f6f6f6;
        color: #666
    }

    .pane-sliders .content {
        background: #f6f6f6;
    }

    .pane-sliders .adminlist {
        border: 0 none;
    }

    .pane-sliders .adminlist td {
        border: 0 none;
    }

    .jpane-toggler  span {
        background: transparent url(../images/j_arrow.png) 5px 50% no-repeat;
        padding-left: 20px;
    }

    .jpane-toggler-down span {
        background: transparent url(../images/j_arrow_down.png) 5px 50% no-repeat;
        padding-left: 20px;
    }

    .jpane-toggler-down {
        border-bottom: 1px solid #ccc;
    }

        /* tabs */

    dl.tabs {
        float: left;
        margin: 10px 0 -1px 0;
        z-index: 50;
    }

    dl.tabs dt {
        float: left;
        padding: 4px 10px;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-top: 1px solid #ccc;
        margin-left: 3px;
        background: #f0f0f0;
        color: #666;
    }

    dl.tabs dt.open {
        background: #F9F9F9;
        border-bottom: 1px solid #F9F9F9;
        z-index: 100;
        color: #000;
    }

    div.current {
        clear: both;
        border: 1px solid #ccc;
        padding: 10px 10px;
    }

    div.current dd {
        padding: 0;
        margin: 0;
    }

        /** cpanel settings **/

    #cpanel div.icon {
        text-align: center;
        margin-right: 5px;
        float: left;
        margin-bottom: 5px;
    }

    #cpanel div.icon a {
        display: block;
        float: left;
        border: 1px solid #f0f0f0;
        height: 97px;
        width: 108px;
        color: #666;
        vertical-align: middle;
        text-decoration: none;
    }

    #cpanel div.icon a:hover {
        border-left: 1px solid #eee;
        border-top: 1px solid #eee;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        background: #f9f9f9;
        color: #0B55C4;
    }

    #cpanel img {
        padding: 10px 0;
        margin: 0 auto;
    }

    #cpanel span {
        display: block;
        text-align: center;
    }

        /* standard form style table */
    div.col {
        float: left;
    }

    div.width-45 {
        width: 45%;
    }

    div.width-55 {
        width: 55%;
    }

    div.width-50 {
        width: 50%;
    }

    div.width-70 {
        width: 70%;
    }

    div.width-30 {
        width: 30%;
    }

    div.width-60 {
        width: 60%;
    }

    div.width-40 {
        width: 40%;
    }

    table.admintable td {
        padding: 3px;
    }

    table.admintable td.key,
    table.admintable td.paramlist_key {
        background-color: #f6f6f6;
        text-align: right;
        width: 140px;
        color: #666;
        font-weight: bold;
        border-bottom: 1px solid #e9e9e9;
        border-right: 1px solid #e9e9e9;
    }

    table.paramlist td.paramlist_description {
        background-color: #f6f6f6;
        text-align: left;
        width: 170px;
        color: #333;
        font-weight: normal;
        border-bottom: 1px solid #e9e9e9;
        border-right: 1px solid #e9e9e9;
    }

    table.admintable td.key.vtop {
        vertical-align: top;
    }

    table.adminform {
        background-color: #f9f9f9;
        border: solid 1px #d5d5d5;
        width: 100%;
        border-collapse: collapse;
        margin: 8px 0 10px 0;
        margin-bottom: 15px;
        width: 100%;
    }

    table.adminform.nospace {
        margin-bottom: 0;
    }

    table.adminform tr.row0 {
        background-color: #f9f9f9;
    }

    table.adminform tr.row1 {
        background-color: #eeeeee;
    }

    table.adminform th {
        font-size: 11px;
        padding: 6px 2px 4px 4px;
        text-align: left;
        height: 25px;
        color: #000;
        background-repeat: repeat;
    }

    table.adminform td {
        padding: 3px;
        text-align: left;
    }

    table.adminform td.filter {
        text-align: left;
    }

    table.adminform td.helpMenu {
        text-align: right;
    }

    fieldset.adminform {
        border: 1px solid #ccc;
        margin: 0 10px 10px 10px;
    }

        /** Table styles **/

    table.adminlist {
        width: 100%;
        border-spacing: 1px;
        background-color: #e7e7e7;
        color: #666;
    }

    table.adminlist td,
    table.adminlist th {
        padding: 4px;
    }

    table.adminlist thead th {
        text-align: center;
        background: #f0f0f0;
        color: #666;
        border-bottom: 1px solid #999;
        border-left: 1px solid #fff;
    }

    table.adminlist thead a:hover {
        text-decoration: none;
    }

    table.adminlist thead th img {
        vertical-align: middle;
    }

    table.adminlist tbody th {
        font-weight: bold;
    }

    table.adminlist tbody tr {
        background-color: #fff;
        text-align: left;
    }

    table.adminlist tbody tr.row1 {
        background: #f9f9f9;
        border-top: 1px solid #fff;
    }

    table.adminlist tbody tr.row0:hover td,
    table.adminlist tbody tr.row1:hover td {
        background-color: #ffd;
    }

    table.adminlist tbody tr td {
        height: 25px;
        background: #fff;
        border: 1px solid #fff;
    }

    table.adminlist tbody tr.row1 td {
        background: #f9f9f9;
        border-top: 1px solid #FFF;
    }

    table.adminlist tfoot tr {
        text-align: center;
        color: #333;
    }

    table.adminlist tfoot td,
    table.adminlist tfoot th {
        background-color: #f3f3f3;
        border-top: 1px solid #999;
        text-align: center;
    }

    table.adminlist td.order {
        text-align: center;
        white-space: nowrap;
    }

    table.adminlist td.order span {
        float: left;
        display: block;
        width: 20px;
        text-align: center;
    }

    table.adminlist .pagination {
        display: table;
        padding: 0;
        margin: 0 auto;
    }

    .pagination div.limit {
        float: left;
        height: 22px;
        line-height: 22px;
        margin: 0 10px;
    }

        /** stu nicholls solution for centering divs **/
    .container {
        clear: both;
        text-decoration: none;
    }

    * html .container {
        display: inline-block;
    }

        /** table solution for global config **/
    table.noshow {
        width: 100%;
        border-collapse: collapse;
        padding: 0;
        margin: 0;
    }

    table.noshow tr {
        vertical-align: top;
    }

    table.noshow td {
    }

    table.noshow fieldset {
        margin: 15px 7px 7px 7px;
    }

    #editor-xtd-buttons {
        padding: 5px;
    }

        /* -- buttons -> STILL NEED CLEANUP*/

    .button1,
    .button1 div {
        height: 1%;
        float: right;
    }

    .button2-left,
    .button2-right,
    .button2-left div,
    .button2-right div {
        float: left;
    }

    .button1 {
        background: url(../images/j_button1_left.png) no-repeat;
        white-space: nowrap;
        padding-left: 10px;
        margin-left: 5px;
    }

    .button1 .next {
        background: url(../images/j_button1_next.png) 100% 0 no-repeat;
    }

    .button1 a {
        display: block;
        height: 26px;
        float: left;
        line-height: 26px;
        font-size: 12px;
        font-weight: bold;
        color: #333;
        cursor: pointer;
        padding: 0 30px 0 6px;
    }

    .button1 a:hover {
        text-decoration: none;
        color: #0B55C4;
    }

    .button2-left a,
    .button2-right a,
    .button2-left span,
    .button2-right span {
        display: block;
        height: 22px;
        float: left;
        line-height: 22px;
        font-size: 11px;
        color: #333;
        cursor: pointer;
    }

    .button2-left span,
    .button2-right span {
        cursor: default;
        color: #999;
    }

    .button2-left .page a,
    .button2-right .page a,
    .button2-left .page span,
    .button2-right .page span,
    .button2-left .blank a,
    .button2-right .blank a,
    .button2-left .blank span,
    .button2-right .blank span {
        padding: 0 6px;
    }

    .page span,
    .blank span {
        color: #000;
        font-weight: bold;
    }

    .button2-left a:hover,
    .button2-right a:hover {
        text-decoration: none;
        color: #0B55C4;
    }

    .button2-left a,
    .button2-left span {
        padding: 0 24px 0 6px;
    }

    .button2-right a,
    .button2-right span {
        padding: 0 6px 0 24px;
    }

    .button2-left {
        background: url(../images/j_button2_left.png) no-repeat;
        float: left;
        margin-left: 5px;
    }

    .button2-right {
        background: url(../images/j_button2_right.png) 100% 0 no-repeat;
        float: left;
        margin-left: 5px;
    }

    .button2-right .prev {
        background: url(../images/j_button2_prev.png) no-repeat;
    }

    .button2-right.off .prev {
        background: url(../images/j_button2_prev_off.png) no-repeat;
    }

    .button2-right .start {
        background: url(../images/j_button2_first.png) no-repeat;
    }

    .button2-right.off .start {
        background: url(../images/j_button2_first_off.png) no-repeat;
    }

    .button2-left .page,
    .button2-left .blank {
        background: url(../images/j_button2_right_cap.png) 100% 0 no-repeat;
    }

    .button2-left .next {
        background: url(../images/j_button2_next.png) 100% 0 no-repeat;
    }

    .button2-left.off .next {
        background: url(../images/j_button2_next_off.png) 100% 0 no-repeat;
    }

    .button2-left .end {
        background: url(../images/j_button2_last.png) 100% 0 no-repeat;
    }

    .button2-left.off .end {
        background: url(../images/j_button2_last_off.png) 100% 0 no-repeat;
    }

    .button2-left .image {
        background: url(../images/j_button2_image.png) 100% 0 no-repeat;
    }

    .button2-left .readmore {
        background: url(../images/j_button2_readmore.png) 100% 0 no-repeat;
    }

    .button2-left .pagebreak {
        background: url(../images/j_button2_pagebreak.png) 100% 0 no-repeat;
    }

    .button2-left .blank {
        background: url(../images/j_button2_blank.png) 100% 0 no-repeat;
    }

        /* Tooltips */
    .tool-tip {
        float: left;
        background: #ffc;
        border: 1px solid #D4D5AA;
        padding: 5px;
        max-width: 200px;
        z-index: 50;
    }

    .tool-title {
        padding: 0;
        margin: 0;
        font-size: 100%;
        font-weight: bold;
        margin-top: -15px;
        padding-top: 15px;
        padding-bottom: 5px;
        background: url(../images/selector-arrow.png) no-repeat;
    }

    .tool-text {
        font-size: 100%;
        margin: 0;
    }

        /* Calendar */
    a img.calendar {
        width: 16px;
        height: 16px;
        margin-left: 3px;
        background: url(../images/calendar.png) no-repeat;
        cursor: pointer;
        vertical-align: middle;
    }

        /* System Standard Messages */
    #system-message dd.message ul {
        background: #C3D2E5 url(../images/notice-info.png) 4px center no-repeat;
    }

        /* System Error Messages */
    #system-message dd.error ul {
        color: #c00;
        background: #E6C0C0 url(../images/notice-alert.png) 4px top no-repeat;
        border-top: 3px solid #DE7A7B;
        border-bottom: 3px solid #DE7A7B;
    }

        /* System Notice Messages */
    #system-message dd.notice ul {
        color: #c00;
        background: #EFE7B8 url(../images/notice-note.png) 4px top no-repeat;
        border-top: 3px solid #F0DC7E;
        border-bottom: 3px solid #F0DC7E;
    }

        }
    </style>

    <table width="100%" class="paramlist admintable" cellspacing="1">


    <tr style="display:none;">
        <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscategory_details_width-lbl"
                                                                               for="category_details_width"
                                                                               class="hasTip">Category Details
                    Width</label></span></td>
        <td class="paramlist_value">

            <input type="text" name="params[category_details_width]" id="category_details_width"
                   value="<?php echo $param_values['category_details_width'] ?>"/>


        </td>
    </tr>


    <tr>
        <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsprice-lbl"
                                                                               for="paramsprice" class="hasTip"
                                                                               title="Price::Show or hide Price">Price</label></span>
        </td>
        <td class="paramlist_value">
            <?php
            $check0 = "";
            $check1 = "";
            if ($param_values['price'] == 1)
                $check1 = ' checked="checked" ';
            else
                $check0 = ' checked="checked" ';
            ?>    <input type="radio" name="params[price]" id="paramsprice0" value="0" <?php
            echo $check0;
            ?>  />
            <label for="paramsprice0">Disable</label>
            <input type="radio" name="params[price]" id="paramsprice1" value="1" <?php
            echo $check1;
            ?>  />
            <label for="paramsprice1">Enable</label>


        </td>
    </tr>
    <tr>
        <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsmarket_price-lbl"
                                                                               for="paramsmarket_price"
                                                                               class="hasTip"
                                                                               title="Market Price::Show or hide market Price">Market
                    Price</label></span></td>
        <td class="paramlist_value">
            <?php
            $check0 = "";
            $check1 = "";
            if ($param_values['market_price'] == 1)
                $check1 = ' checked="checked" ';
            else
                $check0 = ' checked="checked" ';
            ?>    <input type="radio" name="params[market_price]" id="paramsmarket_price0" value="0" <?php
            echo $check0;
            ?>  />
            <label for="paramsmarket_price0">Disable</label>
            <input type="radio" name="params[market_price]" id="paramsmarket_price1" value="1" <?php
            echo $check1;
            ?>  />
            <label for="paramsmarket_price1">Enable</label>


        </td>
    </tr>


    <tr>
        <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscurrency_symbol-lbl"
                                                                               for="paramscurrency_symbol"
                                                                               class="hasTip"
                                                                               title="Currency Symbol::Currency Symbol">Currency
                    Symbol</label></span></td>
        <td class="paramlist_value"><input type="text" name="params[currency_symbol]" id="paramscurrency_symbol"
                                           value="<?php
                                           echo $param_values['currency_symbol'];
                                           ?>" class="text_area" size="5"/></td>
    </tr>

    <tr>
        <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                    id="paramscurrency_symbol_position-lbl" for="paramscurrency_symbol_position" class="hasTip"
                    title="Currency Symbol Position::Currency Symbol Position (after or before number )">Currency
                    Symbol Position</label></span></td>
        <td class="paramlist_value">

            <?php
            $check0 = "";
            $check1 = "";
            if ($param_values['currency_symbol_position'] == 0)
                $check0 = ' checked="checked" ';
            if ($param_values['currency_symbol_position'] == 1)
                $check1 = ' checked="checked" ';
            ?>

            <input type="radio" name="params[currency_symbol_position]" id="paramscurrency_symbol_position0"
                   value="0" <?php
            echo $check0;
            ?>   />
            <label for="paramscurrency_symbol_position0">Before</label>
            <input type="radio" name="params[currency_symbol_position]" id="paramscurrency_symbol_position1"
                   value="1"  <?php
            echo $check1;
            ?>  />
            <label for="paramscurrency_symbol_position1">After</label>
        </td>
    </tr>


    <?php
    $check0 = "";
    $check1 = "";
    if ($param_values['enable_rating'] == 0)
        $check0 = ' checked="checked" ';
    if ($param_values['enable_rating'] == 1)
        $check1 = ' checked="checked" ';
    ?>
    <tr>
        <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsenable_rating-lbl"
                                                                               for="paramsenable_rating">Product
                    Ratings</label></span></td>
        <td class="paramlist_value">
            <input type="radio" name="params[enable_rating]" id="paramsenable_rating0" value="0" <?php
            echo $check0;
            ?>  />
            <label for="paramsenable_rating0">Disable</label>
            <input type="radio" name="params[enable_rating]" id="paramsenable_rating1" value="1" <?php
            echo $check1;
            ?>  />
            <label for="paramsenable_rating1">Enable</label>
        </td>
    </tr>


    <tr>
        <?php
        $check0 = "";
        $check1 = "";
        if ($param_values['enable_review'] == 0)
            $check0 = ' checked="checked" ';
        if ($param_values['enable_review'] == 1)
            $check1 = ' checked="checked" ';
        ?>
        <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsenable_review-lbl"
                                                                               for="paramsenable_review">Customer
                    Reviews</label></span></td>
        <td class="paramlist_value">
            <input type="radio" name="params[enable_review]" id="paramsenable_review0" value="0"  <?php
            echo $check0;
            ?> />
            <label for="paramsenable_review0">Disable</label>
            <input type="radio" name="params[enable_review]" id="paramsenable_review1" value="1" <?php
            echo $check1;
            ?>   />
            <label for="paramsenable_review1">Enable</label>
        </td>
    </tr>
    <tr>
        <?php
        $check0 = "";
        $check1 = "";
        if ($param_values['choose_category'] == 0)
            $check0 = ' checked="checked" ';
        if ($param_values['choose_category'] == 1)
            $check1 = ' checked="checked" ';
        ?>
        <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramschoose_category-lbl"
                                                                               for="paramschoose_category">Search by
                    Category</label></span></td>
        <td class="paramlist_value">
            <input type="radio" name="params[choose_category]" id="paramschoose_category0" value="0"  <?php
            echo $check0;
            ?> />
            <label for="paramschoose_category0">Disable</label>
            <input type="radio" name="params[choose_category]" id="paramschoose_category1" value="1" <?php
            echo $check1;
            ?>   />
            <label for="paramschoose_category1">Enable</label>
        </td>
    </tr>

    <tr>
        <?php
        $check0 = "";
        $check1 = "";
        if ($param_values['search_by_name'] == 0)
            $check0 = ' checked="checked" ';
        if ($param_values['search_by_name'] == 1)
            $check1 = ' checked="checked" ';
        ?>
        <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramssearch_by_name-lbl"
                                                                               for="paramssearch_by_name">Search by
                    Name</label></span></td>
        <td class="paramlist_value">
            <input type="radio" name="params[search_by_name]" id="paramssearch_by_name0" value="0"  <?php
            echo $check0;
            ?> />
            <label for="paramssearch_by_name0">Disable</label>
            <input type="radio" name="params[search_by_name]" id="paramssearch_by_name1" value="1" <?php
            echo $check1;
            ?>   />
            <label for="paramssearch_by_name1">Enable</label>
        </td>
    </tr>


    </table>
	<?php wp_nonce_field('nonce_sp_cat', 'nonce_sp_cat'); ?>
    <input type="hidden" name="task" value=""/>
    <input type="hidden" name="controller" value="options"/>
    <input type="hidden" name="op_type" value="global"/>
    <input type="hidden" name="boxchecked" value="0"/>
    </fieldset>
    </form>


<?php
}


function      wdcat_html_showStyles($param_values, $op_type)
{


    ?>

    <table width="70%">
        <tbody>
        <tr>
            <td width="100%" style="font-size:14px; font-weight:bold"><a
                    href="http://web-dorado.com/spider-catalog-wordpress-guide-step-4/spider-catalog-wordpress-guide-step-4-2.html"
                    target="_blank" style="color:blue; text-decoration:none;">User Manual</a><br/>
                This section allows you to configure the Styles and Colors. <a
                    href="http://web-dorado.com/spider-catalog-wordpress-guide-step-4/spider-catalog-wordpress-guide-step-4-2.html"
                    target="_blank" style="color:blue; text-decoration:none;">More...</a></td>

        </tr>
        <tr>
            <td width="100%"><h2>Spider Catalog - Styles and Colors</h2></td>
            <td align="right"><input type="button" onclick="document.getElementById('adminForm').submit()" value="Save"
                                     class="button-primary"></td>
        </tr>
        </tbody>
    </table>

    <br/>

    <form action="admin.php?page=Options_Catalog_styles&task=save" method="post" id="adminForm" name="adminForm">
    <style>


    #minwidth {
        min-width: 960px;
    }

    .clr {
        clear: both;
        overflow: hidden;
        height: 0;
    }

    a, img {
        padding: 0;
        margin: 0;
    }

    img {
        border: 0 none;
    }

    form {
        margin: 0;
        padding: 0;
    }

    h1 {
        margin: 0;
        padding-bottom: 8px;
        color: #0B55C4;
        font-size: 20px;
        font-weight: bold;
    }

    h3 {
        font-size: 13px;
    }

    a:link {
        color: #0B55C4;
        text-decoration: none;
    }

    a:visited {
        color: #0B55C4;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    fieldset {
        margin-bottom: 10px;
        border: 1px #ccc solid;
        padding: 5px;
        text-align: left;
    }

    fieldset p {
        margin: 10px 0px;
    }

    legend {
        color: #0B55C4;
        font-size: 12px;
        font-weight: bold;
    }

    input, select {
        font-size: 10px;
        border: 1px solid silver;
    }

    textarea {
        font-size: 11px;
        border: 1px solid silver;
    }

    button {
        font-size: 10px;
    }

    input.disabled {
        background-color: #F0F0F0;
    }

    input.button {
        cursor: pointer;
    }

    input:focus,
    select:focus,
    textarea:focus {
        background-color: #ffd
    }

        /* -- overall styles ------------------------------ */

    #border-top.h_green {
        background: url(../images/h_green/j_header_middle.png) repeat-x;
    }

    #border-top.h_green div {
        background: url(../images/h_green/j_header_right.png) 100% 0 no-repeat;
    }

    #border-top.h_green div div {
        background: url(../images/h_green/j_header_left.png) no-repeat;
        height: 54px;
    }

    #border-top.h_teal {
        background: url(../images/h_teal/j_header_middle.png) repeat-x;
    }

    #border-top.h_teal div {
        background: url(../images/h_teal/j_header_right.png) 100% 0 no-repeat;
    }

    #border-top.h_teal div div {
        background: url(../images/h_teal/j_header_left.png) no-repeat;
        height: 54px;
    }

    #border-top.h_cherry {
        background: url(../images/h_cherry/j_header_middle.png) repeat-x;
    }

    #border-top.h_cherry div {
        background: url(../images/h_cherry/j_header_right.png) 100% 0 no-repeat;
    }

    #border-top.h_cherry div div {
        background: url(../images/h_cherry/j_header_left.png) no-repeat;
        height: 54px;
    }

    #border-top .title {
        font-size: 22px;
        font-weight: bold;
        color: #fff;
        line-height: 44px;
        padding-left: 180px;
    }

    #border-top .version {
        display: block;
        float: right;
        color: #fff;
        padding: 25px 5px 0 0;
    }

    #border-bottom {
        background: url(../images/j_bottom.png) repeat-x;
    }

    #border-bottom div {
        background: url(../images/j_corner_br.png) 100% 0 no-repeat;
    }

    #border-bottom div div {
        background: url(../images/j_corner_bl.png) no-repeat;
        height: 11px;
    }

    #footer .copyright {
        margin: 10px;
        text-align: center;
    }

    #header-box {
        border: 1px solid #ccc;
        background: #f0f0f0;
    }

    #content-box {
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
    }

    #content-box .padding {
        padding: 10px 10px 0 10px;
    }

    #toolbar-box {
        background: #fbfbfb;
        margin-bottom: 10px;
    }

    #submenu-box {
        background: #f6f6f6;
        margin-bottom: 10px;
    }

    #submenu-box .padding {
        padding: 0px;
    }

        /* -- status layout */
    #module-status {
        float: right;
    }

    #module-status span {
        display: block;
        float: left;
        line-height: 16px;
        padding: 4px 10px 0 22px;
        margin-bottom: 5px;
    }

    #module-status {
        background: url(../images/mini_icon.png) 3px 5px no-repeat;
    }

    .legacy-mode {
        color: #c00;
    }

    #module-status .preview {
        background: url(../images/menu/icon-16-media.png) 3px 3px no-repeat;
    }

    #module-status .unread-messages,
    #module-status .no-unread-messages {
        background: url(../images/menu/icon-16-messages.png) 3px 3px no-repeat;
    }

    #module-status .unread-messages a {
        font-weight: bold;
    }

    #module-status .loggedin-users {
        background: url(../images/menu/icon-16-user.png) 3px 3px no-repeat;
    }

    #module-status .logout {
        background: url(../images/menu/icon-16-logout.png) 3px 3px no-repeat;
    }

        /* -- various styles -- */
    span.note {
        display: block;
        background: #ffd;
        padding: 5px;
        color: #666;
    }

        /** overlib **/

    .ol-foreground {
        background-color: #ffe;
    }

    .ol-background {
        background-color: #6db03c;
    }

    .ol-textfont {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
        color: #666;
    }

    .ol-captionfont {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11px;
        color: #fff;
        font-weight: bold;
    }

    .ol-captionfont a {
        color: #0b5fc6;
        text-decoration: none;
    }

    .ol-closefont {
    }

        /** toolbar **/

    div.header {
        font-size: 22px;
        font-weight: bold;
        color: #0B55C4;
        line-height: 48px;
        padding-left: 55px;
        background-repeat: no-repeat;
        margin-left: 10px;
    }

    div.header span {
        color: #666;
    }

    div.configuration {
        font-size: 14px;
        font-weight: bold;
        color: #0B55C4;
        line-height: 16px;
        padding-left: 30px;
        margin-left: 10px;
        background-image: url(../images/menu/icon-16-config.png);
        background-repeat: no-repeat;
    }

    div.toolbar {
        float: right;
        text-align: right;
        padding: 0;
    }

    table.toolbar {
        border-collapse: collapse;
        padding: 0;
        margin: 0;
    }

    table.toolbar td {
        padding: 1px 1px 1px 4px;
        text-align: center;
        color: #666;
        height: 48px;
    }

    table.toolbar td.spacer {
        width: 10px;
    }

    table.toolbar td.divider {
        border-right: 1px solid #eee;
        width: 5px;
    }

    table.toolbar span {
        float: none;
        width: 32px;
        height: 32px;
        margin: 0 auto;
        display: block;
    }

    table.toolbar a {
        display: block;
        float: left;
        white-space: nowrap;
        border: 1px solid #fbfbfb;
        padding: 1px 5px;
        cursor: pointer;
    }

    table.toolbar a:hover {
        border-left: 1px solid #eee;
        border-top: 1px solid #eee;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        text-decoration: none;
        color: #0B55C4;
    }

        /** for massmail component **/
    td#mm_pane {
        width: 90%;
    }

    input#mm_subject {
        width: 200px;
    }

    textarea#mm_message {
        width: 100%;
    }

        /* pane-sliders  */
    .pane-sliders .title {
        margin: 0;
        padding: 2px;
        color: #666;
        cursor: pointer;
    }

    .pane-sliders .panel {
        border: 1px solid #ccc;
        margin-bottom: 3px;
    }

    .pane-sliders .panel h3 {
        background: #f6f6f6;
        color: #666
    }

    .pane-sliders .content {
        background: #f6f6f6;
    }

    .pane-sliders .adminlist {
        border: 0 none;
    }

    .pane-sliders .adminlist td {
        border: 0 none;
    }

    .jpane-toggler  span {
        background: transparent url(../images/j_arrow.png) 5px 50% no-repeat;
        padding-left: 20px;
    }

    .jpane-toggler-down span {
        background: transparent url(../images/j_arrow_down.png) 5px 50% no-repeat;
        padding-left: 20px;
    }

    .jpane-toggler-down {
        border-bottom: 1px solid #ccc;
    }

        /* tabs */

    dl.tabs {
        float: left;
        margin: 10px 0 -1px 0;
        z-index: 50;
    }

    dl.tabs dt {
        float: left;
        padding: 4px 10px;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-top: 1px solid #ccc;
        margin-left: 3px;
        background: #f0f0f0;
        color: #666;
    }

    dl.tabs dt.open {
        background: #F9F9F9;
        border-bottom: 1px solid #F9F9F9;
        z-index: 100;
        color: #000;
    }

    div.current {
        clear: both;
        border: 1px solid #ccc;
        padding: 10px 10px;
    }

    div.current dd {
        padding: 0;
        margin: 0;
    }

        /** cpanel settings **/

    #cpanel div.icon {
        text-align: center;
        margin-right: 5px;
        float: left;
        margin-bottom: 5px;
    }

    #cpanel div.icon a {
        display: block;
        float: left;
        border: 1px solid #f0f0f0;
        height: 97px;
        width: 108px;
        color: #666;
        vertical-align: middle;
        text-decoration: none;
    }

    #cpanel div.icon a:hover {
        border-left: 1px solid #eee;
        border-top: 1px solid #eee;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        background: #f9f9f9;
        color: #0B55C4;
    }

    #cpanel img {
        padding: 10px 0;
        margin: 0 auto;
    }

    #cpanel span {
        display: block;
        text-align: center;
    }

        /* standard form style table */
    div.col {
        float: left;
    }

    div.width-45 {
        width: 45%;
    }

    div.width-55 {
        width: 55%;
    }

    div.width-50 {
        width: 50%;
    }

    div.width-70 {
        width: 70%;
    }

    div.width-30 {
        width: 30%;
    }

    div.width-60 {
        width: 60%;
    }

    div.width-40 {
        width: 40%;
    }

    table.admintable td {
        padding: 3px;
    }

    table.admintable td.key,
    table.admintable td.paramlist_key {
        background-color: #f6f6f6;
        text-align: right;
        width: 140px;
        color: #666;
        font-weight: bold;
        border-bottom: 1px solid #e9e9e9;
        border-right: 1px solid #e9e9e9;
    }

    table.paramlist td.paramlist_description {
        background-color: #f6f6f6;
        text-align: left;
        width: 170px;
        color: #333;
        font-weight: normal;
        border-bottom: 1px solid #e9e9e9;
        border-right: 1px solid #e9e9e9;
    }

    table.admintable td.key.vtop {
        vertical-align: top;
    }

    table.adminform {
        background-color: #f9f9f9;
        border: solid 1px #d5d5d5;
        width: 100%;
        border-collapse: collapse;
        margin: 8px 0 10px 0;
        margin-bottom: 15px;
        width: 100%;
    }

    table.adminform.nospace {
        margin-bottom: 0;
    }

    table.adminform tr.row0 {
        background-color: #f9f9f9;
    }

    table.adminform tr.row1 {
        background-color: #eeeeee;
    }

    table.adminform th {
        font-size: 11px;
        padding: 6px 2px 4px 4px;
        text-align: left;
        height: 25px;
        color: #000;
        background-repeat: repeat;
    }

    table.adminform td {
        padding: 3px;
        text-align: left;
    }

    table.adminform td.filter {
        text-align: left;
    }

    table.adminform td.helpMenu {
        text-align: right;
    }

    fieldset.adminform {
        border: 1px solid #ccc;
        margin: 0 10px 10px 10px;
    }

        /** Table styles **/

    table.adminlist {
        width: 100%;
        border-spacing: 1px;
        background-color: #e7e7e7;
        color: #666;
    }

    table.adminlist td,
    table.adminlist th {
        padding: 4px;
    }

    table.adminlist thead th {
        text-align: center;
        background: #f0f0f0;
        color: #666;
        border-bottom: 1px solid #999;
        border-left: 1px solid #fff;
    }

    table.adminlist thead a:hover {
        text-decoration: none;
    }

    table.adminlist thead th img {
        vertical-align: middle;
    }

    table.adminlist tbody th {
        font-weight: bold;
    }

    table.adminlist tbody tr {
        background-color: #fff;
        text-align: left;
    }

    table.adminlist tbody tr.row1 {
        background: #f9f9f9;
        border-top: 1px solid #fff;
    }

    table.adminlist tbody tr.row0:hover td,
    table.adminlist tbody tr.row1:hover td {
        background-color: #ffd;
    }

    table.adminlist tbody tr td {
        height: 25px;
        background: #fff;
        border: 1px solid #fff;
    }

    table.adminlist tbody tr.row1 td {
        background: #f9f9f9;
        border-top: 1px solid #FFF;
    }

    table.adminlist tfoot tr {
        text-align: center;
        color: #333;
    }

    table.adminlist tfoot td,
    table.adminlist tfoot th {
        background-color: #f3f3f3;
        border-top: 1px solid #999;
        text-align: center;
    }

    table.adminlist td.order {
        text-align: center;
        white-space: nowrap;
    }

    table.adminlist td.order span {
        float: left;
        display: block;
        width: 20px;
        text-align: center;
    }

    table.adminlist .pagination {
        display: table;
        padding: 0;
        margin: 0 auto;
    }

    .pagination div.limit {
        float: left;
        height: 22px;
        line-height: 22px;
        margin: 0 10px;
    }

        /** stu nicholls solution for centering divs **/
    .container {
        clear: both;
        text-decoration: none;
    }

    * html .container {
        display: inline-block;
    }

        /** table solution for global config **/
    table.noshow {
        width: 100%;
        border-collapse: collapse;
        padding: 0;
        margin: 0;
    }

    table.noshow tr {
        vertical-align: top;
    }

    table.noshow td {
    }

    table.noshow fieldset {
        margin: 15px 7px 7px 7px;
    }

    #editor-xtd-buttons {
        padding: 5px;
    }

        /* -- buttons -> STILL NEED CLEANUP*/

    .button1,
    .button1 div {
        height: 1%;
        float: right;
    }

    .button2-left,
    .button2-right,
    .button2-left div,
    .button2-right div {
        float: left;
    }

    .button1 {
        background: url(../images/j_button1_left.png) no-repeat;
        white-space: nowrap;
        padding-left: 10px;
        margin-left: 5px;
    }

    .button1 .next {
        background: url(../images/j_button1_next.png) 100% 0 no-repeat;
    }

    .button1 a {
        display: block;
        height: 26px;
        float: left;
        line-height: 26px;
        font-size: 12px;
        font-weight: bold;
        color: #333;
        cursor: pointer;
        padding: 0 30px 0 6px;
    }

    .button1 a:hover {
        text-decoration: none;
        color: #0B55C4;
    }

    .button2-left a,
    .button2-right a,
    .button2-left span,
    .button2-right span {
        display: block;
        height: 22px;
        float: left;
        line-height: 22px;
        font-size: 11px;
        color: #333;
        cursor: pointer;
    }

    .button2-left span,
    .button2-right span {
        cursor: default;
        color: #999;
    }

    .button2-left .page a,
    .button2-right .page a,
    .button2-left .page span,
    .button2-right .page span,
    .button2-left .blank a,
    .button2-right .blank a,
    .button2-left .blank span,
    .button2-right .blank span {
        padding: 0 6px;
    }

    .page span,
    .blank span {
        color: #000;
        font-weight: bold;
    }

    .button2-left a:hover,
    .button2-right a:hover {
        text-decoration: none;
        color: #0B55C4;
    }

    .button2-left a,
    .button2-left span {
        padding: 0 24px 0 6px;
    }

    .button2-right a,
    .button2-right span {
        padding: 0 6px 0 24px;
    }

    .button2-left {
        background: url(../images/j_button2_left.png) no-repeat;
        float: left;
        margin-left: 5px;
    }

    .button2-right {
        background: url(../images/j_button2_right.png) 100% 0 no-repeat;
        float: left;
        margin-left: 5px;
    }

    .button2-right .prev {
        background: url(../images/j_button2_prev.png) no-repeat;
    }

    .button2-right.off .prev {
        background: url(../images/j_button2_prev_off.png) no-repeat;
    }

    .button2-right .start {
        background: url(../images/j_button2_first.png) no-repeat;
    }

    .button2-right.off .start {
        background: url(../images/j_button2_first_off.png) no-repeat;
    }

    .button2-left .page,
    .button2-left .blank {
        background: url(../images/j_button2_right_cap.png) 100% 0 no-repeat;
    }

    .button2-left .next {
        background: url(../images/j_button2_next.png) 100% 0 no-repeat;
    }

    .button2-left.off .next {
        background: url(../images/j_button2_next_off.png) 100% 0 no-repeat;
    }

    .button2-left .end {
        background: url(../images/j_button2_last.png) 100% 0 no-repeat;
    }

    .button2-left.off .end {
        background: url(../images/j_button2_last_off.png) 100% 0 no-repeat;
    }

    .button2-left .image {
        background: url(../images/j_button2_image.png) 100% 0 no-repeat;
    }

    .button2-left .readmore {
        background: url(../images/j_button2_readmore.png) 100% 0 no-repeat;
    }

    .button2-left .pagebreak {
        background: url(../images/j_button2_pagebreak.png) 100% 0 no-repeat;
    }

    .button2-left .blank {
        background: url(../images/j_button2_blank.png) 100% 0 no-repeat;
    }

        /* Tooltips */
    .tool-tip {
        float: left;
        background: #ffc;
        border: 1px solid #D4D5AA;
        padding: 5px;
        max-width: 200px;
        z-index: 50;
    }

    .tool-title {
        padding: 0;
        margin: 0;
        font-size: 100%;
        font-weight: bold;
        margin-top: -15px;
        padding-top: 15px;
        padding-bottom: 5px;
        background: url(../images/selector-arrow.png) no-repeat;
    }

    .tool-text {
        font-size: 100%;
        margin: 0;
    }

        /* Calendar */
    a img.calendar {
        width: 16px;
        height: 16px;
        margin-left: 3px;
        background: url(../images/calendar.png) no-repeat;
        cursor: pointer;
        vertical-align: middle;
    }

        /* System Standard Messages */
    #system-message dd.message ul {
        background: #C3D2E5 url(../images/notice-info.png) 4px center no-repeat;
    }

        /* System Error Messages */
    #system-message dd.error ul {
        color: #c00;
        background: #E6C0C0 url(../images/notice-alert.png) 4px top no-repeat;
        border-top: 3px solid #DE7A7B;
        border-bottom: 3px solid #DE7A7B;
    }

        /* System Notice Messages */
    #system-message dd.notice ul {
        color: #c00;
        background: #EFE7B8 url(../images/notice-note.png) 4px top no-repeat;
        border-top: 3px solid #F0DC7E;
        border-bottom: 3px solid #F0DC7E;
    }

    .theme_type {
        background-color: #F4F4F4;
        border: 1px solid #8F8D8D;
        border-radius: 8px 8px 8px 8px;
        cursor: pointer;
        display: inline-block;
        font-size: 12px;
        height: 23px;
        padding-top: 6px;
        margin: 3px;
        text-align: center;
        vertical-align: middle;
        width: 150px;
    }

        }
    </style>
    <?php $path_site = plugins_url("Front_images", __FILE__); ?>
    <table width="70%" style="min-width:550px; " class="paramlist admintable" cellspacing="10">
      <tr>
        <td>
          <div>
            <!--<div id="div_1" class="theme_type" onclick="change_type(1)"> Global Styles and Colors</div>-->
            <div id="div_2" class="theme_type" onclick="change_type(2)"> Cells 1 Page Options</div>
            <div id="div_3" class="theme_type" onclick="change_type(3)"> List Page Options</div>
            <div id="div_5" class="theme_type" onclick="change_type(5)"> Cells 2 Page Options</div>
            <div id="div_6" class="theme_type" onclick="change_type(6)"> Wide Cells Page Options</div>
            <div id="div_7" class="theme_type" onclick="change_type(7)"> Thumbnails Page Options</div>
            <div id="div_8" class="theme_type" onclick="change_type(8)"> Cells 3 Page Options</div>
            <div id="div_4" class="theme_type" onclick="change_type(4)"> Product Page Options</div>
            <input type="hidden" id="type" name="type" value="<?php echo isset($_POST['type']) ? $_POST['type'] : '1'; ?>"/>
          </div>
          <script>
            function change_type(type) {
                type = (type == '' ? 3 : type);
                document.getElementById('type').value = type;
                for ($i = 2; $i < 9; $i++) {
                    if ($i == type) {
                        document.getElementById('fieldset_' + $i).style.display = '';
                        document.getElementById('div_' + $i).style.background = '#C5C5C5';
                    }
                    else {
                        document.getElementById('fieldset_' + $i).style.display = 'none';
                        document.getElementById('div_' + $i).style.background = '#F4F4F4';
                    }
                }
            }
            window.onload = function() { change_type(<?php echo isset($_POST['type']) ? $_POST['type'] : '2'; ?>); };
            
            window.addEvent('domready', function () {
                var JTooltips = new Tips($$('.hasTip'), { maxTitleChars: 50, fixed: false});
            });

            window.addEvent('domready', function () {
                //Get sibling function from http://www.sanjeevshrestha.com.np
                Element.extend({
                    getSiblings: function () {
                        return this.getParent().getChildren().remove(this);
                    }
                });

                $$('.rainbowbtn').each(function (item) {
                    colorval = item.getSiblings()[0].value;
                    item.color = new MooRainbow(item.id, {
                        startColor: [parseInt(colorval.substring(1, 3), 16), parseInt(colorval.substring(3, 5), 16), parseInt(colorval.substring(5, 7), 16)], wheel: true, id: item.id + 'x', onChange: function (color) {
                            item.style.backgroundColor = color.hex;
                            item.getSiblings()[0].value = color.hex;
                            item.getSiblings()[1].style.backgroundColor = color.hex;
                        }, onComplete: function (color) {
                            item.getSiblings()[0].value = color.hex;
                            item.getSiblings()[1].style.backgroundColor = color.hex;
                        }, imgPath: '<?php echo plugins_url("elements/moorainbow/",__FILE__) ?>images/'        });
                });
            });
          </script>
        </td>
      </tr>
      <tr>
        <td valign="top">
          <fieldset style="border:2px groove; display: none;" id="fieldset_2">
            <legend>Cells 1 Page Options</legend>            
            <table style="width:48%; float:left;" class="paramlist admintable" cellspacing="1">
              <tr>
                <td width="40%" class="paramlist_key">
                  <span class="editlinktip"><label id="params_cells1_background_color-lbl" for="params_cells1_background_color">Background Color</label></span>
                </td>
                <td class="paramlist_value">
                  <input name="params[cells1_background_color]" type="text" class="inputbox" id="params_cells1_background_color" value="<?php echo $param_values['cells1_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_background_color']; ?>" readonly="readonly" size="1" id="params_cells1_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>          
              <tr>
                <?php
                  $check0 = "";
                  $check1 = "";
                  $check2 = "";
                  $check3 = "";
                  $check4 = "";
                  $check5 = "";
                  $check6 = "";
                  $check7 = "";
                  if ($param_values['cells1_border_style'] == 'solid')
                      $check0 = '  selected="selected"  ';
                  if ($param_values['cells1_border_style'] == 'double')
                      $check1 = '  selected="selected"';
                  if ($param_values['cells1_border_style'] == 'dashed')
                      $check2 = '  selected="selected"  ';
                  if ($param_values['cells1_border_style'] == 'dotted')
                      $check3 = '  selected="selected"';
                  if ($param_values['cells1_border_style'] == 'groove')
                      $check4 = '  selected="selected"  ';
                  if ($param_values['cells1_border_style'] == 'inset')
                      $check5 = '  selected="selected"';
                  if ($param_values['cells1_border_style'] == 'outset')
                      $check6 = '  selected="selected"  ';
                  if ($param_values['cells1_border_style'] == 'ridge')
                      $check7 = '  selected="selected"';
                ?>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_border_style-lbl" for="paramscells1_border_style">Border Style</label></span>
                </td>
                <td class="paramlist_value">
                  <select name="params[cells1_border_style]" id="paramscells1_border_style" class="inputbox">
                    <option value="solid"  <?php echo $check0; ?> >solid</option>
                    <option value="double" <?php echo $check1; ?> >double</option>
                    <option value="dashed" <?php echo $check2; ?> >dashed</option>
                    <option value="dotted" <?php echo $check3; ?> >dotted</option>
                    <option value="groove" <?php echo $check4; ?> >groove</option>
                    <option value="inset"  <?php echo $check5; ?> >inset</option>
                    <option value="outset" <?php echo $check6; ?> >outset</option>
                    <option value="ridge"  <?php echo $check7; ?> >ridge</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_border_width-lbl" for="paramscells1_border_width">Border Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells1_border_width]" id="paramscells1_border_width" value="<?php echo $param_values['cells1_border_width']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_border_color-lbl" for="paramscells1_border_color">Border Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_border_color]" type="text" class="inputbox" id="paramscells1_border_color" value="<?php echo $param_values['cells1_border_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_border_color']; ?>" readonly="readonly" size="1" id="paramscells1_border_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_text_color-lbl" for="paramscells1_text_color">Text Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_text_color]" type="text" class="inputbox" id="paramscells1_text_color" value="<?php echo $param_values['cells1_text_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_text_color']; ?>" readonly="readonly" size="1" id="paramscells1_text_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_button_color-lbl" for="paramscells1_button_color">Category Title Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_button_color]" type="text" class="inputbox" id="paramscells1_button_color" value="<?php echo $param_values['cells1_button_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_button_color']; ?>" readonly="readonly" size="1" id="paramscells1_button_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_button_background_color-lbl" for="paramscells1_button_background_color">Category Title Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_button_background_color]" type="text" class="inputbox" id="paramscells1_button_background_color" value="<?php echo $param_values['cells1_button_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_button_background_color']; ?>" readonly="readonly" size="1" id="paramscells1_button_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_category_picture_width-lbl" for="paramscells1_category_picture_width">Category Image Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells1_category_picture_width]" id="paramscells1_category_picture_width" value="<?php echo $param_values['cells1_category_picture_width']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_category_picture_height-lbl" for="paramscells1_category_picture_height">Category Image Height</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells1_category_picture_height]" id="paramscells1_category_picture_height" value="<?php echo $param_values['cells1_category_picture_height']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsscells1_category_title_size-lbl" for="paramscells1_category_title_size">Category Title Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells1_category_title_size]" id="paramscells1_category_title_size" value="<?php echo $param_values['cells1_category_title_size']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_list_picture_width-lbl" for="paramscells1_list_picture_width">Subcategories List Image Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells1_list_picture_width]" id="paramscells1_list_picture_width" value="<?php echo $param_values['cells1_list_picture_width']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_list_picture_height-lbl" for="paramscells1_list_picture_height">Subcategories List Image Height</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells1_list_picture_height]" id="paramscells1_list_picture_height" value="<?php echo $param_values['cells1_list_picture_height']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_small_picture_width-lbl" for="paramscells1_small_picture_width">Image Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells1_small_picture_width]" id="paramscells1_small_picture_width" value="<?php echo $param_values['cells1_small_picture_width']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_small_picture_height-lbl" for="paramscells1_small_picture_height">Image Height</label></span> </td>
                <td class="paramlist_value"><input type="text" name="params[cells1_small_picture_height]" id="paramscells1_small_picture_height" value="<?php echo $param_values['cells1_small_picture_height']; ?>" class="text_area" size="4"/></td>
              </tr>              
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_hyperlink_color-lbl" for="paramscells1_hyperlink_color">Hyperlink Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_hyperlink_color]" type="text" class="inputbox" id="paramscells1_hyperlink_color" value="<?php echo $param_values['cells1_hyperlink_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_hyperlink_color']; ?>" readonly="readonly" size="1" id="paramscells1_hyperlink_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_button_background_color-lbl" for="cells1_search_icon_color">Search Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_search_icon_color]" type="text" class="inputbox" id="cells1_search_icon_color" value="<?php echo $param_values['cells1_search_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_search_icon_color']; ?>" readonly="readonly" size="1" id="cells1_search_icon_color_show" class="rainbowbtn"/>
                  <div id="cells1_search-submit" style="background-image:url('<?php echo $path_site; ?>/search-icon.png'); background-color:<?php echo $param_values['cells1_search_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_button_background_color-lbl" for="cells1_reset_icon_color">Reset Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_reset_icon_color]" type="text" class="inputbox" id="cells1_reset_icon_color" value="<?php echo $param_values['cells1_reset_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_reset_icon_color']; ?>" readonly="readonly" size="1" id="cells1_reset_icon_color_show" class="rainbowbtn"/>
                  <div id="cells1_search-submit" style="background-image:url('<?php echo $path_site; ?>/search-reset.png'); background-color:<?php echo $param_values['cells1_reset_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_button_background_color-lbl" for="cells1_select_icon_color">Select Category Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_select_icon_color]" type="text" class="inputbox" id="cells1_select_icon_color" value="<?php echo $param_values['cells1_select_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_select_icon_color']; ?>" readonly="readonly" size="1" id="cells1_select_icon_color_show" class="rainbowbtn"/>
                  <div id="cells1_search-submit" style="background-image:url('<?php echo $path_site; ?>/selectcat.png'); background-color:<?php echo $param_values['cells1_reset_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_count_of_product_in_the_row-lbl" for="paramscells1_count_of_product_in_the_row">Number of Products in the Row</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells1_count_of_product_in_the_row]" id="paramscells1_count_of_product_in_the_row" value="<?php echo $param_values['cells1_count_of_product_in_the_row']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_count_of_rows_in_the_page-lbl" for="paramscells1_count_of_rows_in_the_page">Number of Rows in the Page</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells1_count_of_rows_in_the_page]" id="paramscells1_count_of_rows_in_the_page" value="<?php echo $param_values['cells1_count_of_rows_in_the_page']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_rating_star-lbl" >Rating Star Design</label></span></td>
                <td class="paramlist_value">
                  <?php
                    $check0 = "";
                    $check1 = "";
                    $check2 = "";
                    $check3 = "";
                    $check4 = "";
                    if ($param_values['cells1_rating_star'] == 1)
                        $check0 = ' checked="checked" ';
                    if ($param_values['cells1_rating_star'] == 2)
                        $check1 = ' checked="checked" ';
                    if ($param_values['cells1_rating_star'] == 3)
                        $check2 = ' checked="checked" ';
                    if ($param_values['cells1_rating_star'] == 4)
                        $check3 = ' checked="checked" ';
                    if ($param_values['cells1_rating_star'] == 5)
                        $check4 = ' checked="checked" ';
                  ?>
                  <table cellpadding="0" cellspacing="10" border="0" style="text-align: center;">
                    <tr>
                      <td>
                        <label>
                            <img src="<?php echo $path_site; ?>/star1.png" alt="star1"/><br/>
                            <input name="params[cells1_rating_star]" type="radio" class="inputbox" id="paramscells1_rating_star" value="1" size="10" <?php echo $check0; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star2.png" alt="star2"/><br/>
                          <input name="params[cells1_rating_star]" type="radio" class="inputbox" id="paramscells1_rating_star" value="2" size="10" <?php echo $check1; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star3.png" alt="star3"/><br/>
                          <input name="params[cells1_rating_star]" type="radio" class="inputbox" id="paramscells1_rating_star" value="3" size="10" <?php echo $check2; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star4.png" alt="star4"/><br/>
                          <input name="params[cells1_rating_star]" type="radio" class="inputbox" id="paramscells1_rating_star" value="4" size="10" <?php echo $check3; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star5.png" alt="star5"/><br/>
                          <input name="params[cells1_rating_star]" type="radio" class="inputbox" id="paramscells1_rating_star" value="5" size="10"  <?php echo $check4; ?> />
                        </label>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              


            </table>
            <table style="width:48%; float:left;" class="paramlist admintable" cellspacing="1">
              <tr>
                <td width="40%" class="paramlist_key">
                  <span class="editlinktip"><label id="params_cells1_params_background_color1-lbl" for="params_cells1_params_background_color1" class="hasTip" title="Parameters Background Color 1::Background Color of odd parameters">Parameters Background Color 1</label></span>
                </td>
                <td class="paramlist_value">
                  <input name="params[cells1_params_background_color1]" type="text" class="inputbox" id="params_cells1_params_background_color1" value="<?php echo $param_values['cells1_params_background_color1']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_params_background_color1']; ?>" readonly="readonly" size="1" id="params_cells1_params_background_color1_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key">
                  <span class="editlinktip"><label id="params_cells1_params_background_color2-lbl" for="params_cells1_params_background_color2" class="hasTip" title="Parameters Background Color 2::Background Color of even parameters">Parameters Background Color 2</label></span>
                </td>
                <td class="paramlist_value">
                  <input name="params[cells1_params_background_color2]" type="text" class="inputbox" id="params_cells1_params_background_color2" value="<?php echo $param_values['cells1_params_background_color2']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_params_background_color2']; ?>" readonly="readonly" size="1" id="params_cells1_params_background_color2_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_price_color-lbl" for="paramscells1_price_color">Price Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_price_color]" type="text" class="inputbox" id="paramscells1_price_color" value="<?php echo $param_values['cells1_price_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_price_color']; ?>" readonly="readonly" size="1" id="paramscells1_price_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_market_price_color-lbl" for="paramscells1_market_price_color">Market Price Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_market_price_color]" type="text" class="inputbox" id="paramscells1_market_price_color" value="<?php echo $param_values['cells1_market_price_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_market_price_color']; ?>" readonly="readonly" size="1" id="paramscells1_market_price_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_title_color-lbl" for="paramscells1_title_color">Title Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_title_color]" type="text" class="inputbox" id="paramscells1_title_color" value="<?php echo $param_values['cells1_title_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_title_color']; ?>" readonly="readonly" size="1" id="paramscells1_title_color_show" class="rainbowbtn"/>
                </td>
              </tr>  
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_title_background_color-lbl" for="paramscells1_title_background_color">Title Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_title_background_color]" type="text" class="inputbox" id="paramscells1_title_background_color" value="<?php echo $param_values['cells1_title_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_title_background_color']; ?>" readonly="readonly" size="1" id="paramscells1_title_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>   
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_categories_row_color1-lbl" for="paramscells1_categories_row_color1">Categories Background Color 1</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_categories_row_color1]" type="text" class="inputbox" id="paramscells1_categories_row_color1" value="<?php echo $param_values['cells1_categories_row_color1']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_categories_row_color1']; ?>" readonly="readonly" size="1" id="paramscells1_categories_row_color1_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_categories_row_color2-lbl" for="paramscells1_categories_row_color2">Categories Background Color 2</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_categories_row_color2]" type="text" class="inputbox" id="paramscells1_categories_row_color2" value="<?php echo $param_values['cells1_categories_row_color2']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_categories_row_color2']; ?>" readonly="readonly" size="1" id="paramscells1_categories_row_color2_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_categories_header_background_color-lbl" for="paramscells1_categories_header_background_color">Categories Header Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_categories_header_background_color]" type="text" class="inputbox" id="paramscells1_categories_header_background_color" value="<?php echo $param_values['cells1_categories_header_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_categories_header_background_color']; ?>" readonly="readonly" size="1" id="paramscells1_categories_header_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells1_categories_header_color-lbl" for="paramscells1_categories_header_color">Categories Header Text Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells1_categories_header_color]" type="text" class="inputbox" id="paramscells1_categories_header_color" value="<?php echo $param_values['cells1_categories_header_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells1_categories_header_color']; ?>" readonly="readonly" size="1" id="paramscells1_categories_header_color_show" class="rainbowbtn"/>
                </td>
              </tr>
            
            
            
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                            id="paramscount_of_product_in_the_row-lbl" for="cell_big_title_size">Big Title Size</label></span>
                </td>
                <td class="paramlist_value"><input type="text" name="params[cell_big_title_size]" id="cell_big_title_size"
                                                   value="<?php
                                                   echo $param_values['cell_big_title_size'];
                                                   ?>" class="text_area" size="3"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstitle_size_small-lbl"
                                                                                       for="paramstitle_size_small">Small Title
                            Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[title_size_small]"
                                                   id="paramstitle_size_small" value="<?php
                    echo $param_values['title_size_small'];
                    ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="cell_price_background_color-lbl"
                                                                                       for="cell_price_background_color">Price
                            Background Color</label></span></td>
                <td class="paramlist_value">
                        <input name="params[cell_price_background_color]" type="text" class="inputbox"
                               id="cell_price_background_color" value="<?php
                        echo $param_values['cell_price_background_color'];
                        ?>" size="10"/><input type="text" style="background:<?php
                        echo $param_values['cell_price_background_color'];
                        ?>" readonly="readonly" size="1" id="cell_price_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="cell_small_image_backround_color-lbl"
                                                                                       for="cell_small_image_backround_color">Cell
                            Background Color</label></span></td>
                <td class="paramlist_value">
                        <input name="params[cell_small_image_backround_color]" type="text" class="inputbox"
                               id="cell_small_image_backround_color" value="<?php
                        echo $param_values['cell_small_image_backround_color'];
                        ?>" size="10"/><input type="text" style="background:<?php
                        echo $param_values['cell_small_image_backround_color'];
                        ?>" readonly="readonly" size="1" id="cell_small_image_backround_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="cell_more_font_color-lbl"
                                                                                       for="cell_more_font_color">More Text
                            Color</label></span></td>
                <td class="paramlist_value">
                        <input name="params[cell_more_font_color]" type="text" class="inputbox"
                               id="cell_more_font_color" value="<?php
                        echo $param_values['cell_more_font_color'];
                        ?>" size="10"/><input type="text" style="background:<?php
                        echo $param_values['cell_more_font_color'];
                        ?>" readonly="readonly" size="1" id="cell_more_font_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="cell_more_background_color-lbl"
                                                                                       for="cell_more_background_color">More
                            Background Color</label></span></td>
                <td class="paramlist_value">
                        <input name="params[cell_more_background_color]" type="text" class="inputbox"
                               id="cell_more_background_color" value="<?php
                        echo $param_values['cell_more_background_color'];
                        ?>" size="10"/><input type="text" style="background:<?php
                        echo $param_values['cell_more_background_color'];
                        ?>" readonly="readonly" size="1" id="cell_more_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="cell_params_text_color-lbl"
                                                                                       for="cell_params_text_color">Parameter
                            Text Color</label></span></td>
                <td class="paramlist_value">
                        <input name="params[cell_params_text_color]" type="text" class="inputbox"
                               id="cell_params_text_color" value="<?php
                        echo $param_values['cell_params_text_color'];
                        ?>" size="10"/><input type="text" style="background:<?php
                        echo $param_values['cell_params_text_color'];
                        ?>" readonly="readonly" size="1" id="cell_params_text_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                            id="paramscount_of_product_in_the_row-lbl" for="cell_parameters_left_size">Parameter Title Font
                            Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cell_parameters_left_size]"
                                                   id="cell_parameters_left_size" value="<?php
                    echo $param_values['cell_parameters_left_size'];
                    ?>" class="text_area" size="3"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                            id="paramscount_of_product_in_the_row-lbl" for="cell_more_font_size">More Font Size</label></span>
                </td>
                <td class="paramlist_value"><input type="text" name="params[cell_more_font_size]" id="cell_more_font_size"
                                                   value="<?php
                                                   echo $param_values['cell_more_font_size'];
                                                   ?>" class="text_area" size="3"/></td>
              </tr>

              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsproduct_cell_width-lbl"
                                                                                       for="paramsproduct_cell_width">Product
                            Cell Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[product_cell_width]"
                                                   id="paramsproduct_cell_width" value="<?php
                    echo $param_values['product_cell_width'];
                    ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                            id="paramsproduct_cell_height-lbl" for="paramsproduct_cell_height">Product Cell
                            Height</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[product_cell_height]"
                                                   id="paramsproduct_cell_height" value="<?php
                    echo $param_values['product_cell_height'];
                    ?>" class="text_area" size="4"/></td>
              </tr>

              
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsprice_size_small-lbl"
                                                                                       for="paramsprice_size_small">Price
                            Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[price_size_small]"
                                                   id="paramsprice_size_small" value="<?php
                    echo $param_values['price_size_small'];
                    ?>" class="text_area"/></td>
              </tr>   
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsmarket_price_size_small-lbl"
                                                                                       for="paramsmarket_price_size_small">Market Price
                            Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[market_price_size_small]"
                                                   id="paramsmarket_price_size_small" value="<?php
                    echo $param_values['market_price_size_small'];
                    ?>" class="text_area"/></td>
              </tr>   
              <tr>
                <?php
                $check0 = "";
                $check1 = "";
                if ($param_values['cell_show_category'] == 0)
                    $check0 = ' checked="checked" ';
                if ($param_values['cell_show_category'] == 1)
                    $check1 = ' checked="checked" ';
                ?>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscell_show_category-lbl"
                                                                                       for="paramscell_show_category">Show
                            Category</label></span></td>
                <td class="paramlist_value">
                    <input type="radio" name="params[cell_show_category]" id="paramscell_show_category0"
                           value="0"  <?php
                    echo $check0;
                    ?> />
                    <label for="paramscell_show_category0">Disable</label>
                    <input type="radio" name="params[cell_show_category]" id="paramscell_show_category1" value="1" <?php
                    echo $check1;
                    ?>   />
                    <label for="paramscell_show_category1">Enable</label>
                </td>
              </tr>

              <tr>
                <?php
                $check0 = "";
                $check1 = "";
                if ($param_values['cell_show_parameters'] == 0)
                    $check0 = ' checked="checked" ';
                if ($param_values['cell_show_parameters'] == 1)
                    $check1 = ' checked="checked" ';
                ?>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                            id="paramscell_show_parameters-lbl" for="paramscell_show_parameters">Show Parameters</label></span>
                </td>
                <td class="paramlist_value">
                    <input type="radio" name="params[cell_show_parameters]" id="paramscell_show_parameters0"
                           value="0"  <?php
                    echo $check0;
                    ?> />
                    <label for="paramscell_show_parameters0">Disable</label>
                    <input type="radio" name="params[cell_show_parameters]" id="paramscell_show_parameters1"
                           value="1" <?php
                    echo $check1;
                    ?>   />
                    <label for="paramscell_show_parameters1">Enable</label>
                </td>
              </tr>
            </table>
          </fieldset>

        <fieldset style="border:2px groove; display: none;" id="fieldset_3">
        <legend>List Page Options</legend>
        <table style="width:48%;float:left;" class="paramlist admintable" cellspacing="1">
        
          
          
          <tr>
              <td width="40%" class="paramlist_key">
                <span class="editlinktip"><label id="params_list_background_color-lbl" for="params_list_background_color">Background Color</label></span>
              </td>
              <td class="paramlist_value">
                <input name="params[list_background_color]" type="text" class="inputbox" id="params_list_background_color" value="<?php echo $param_values['list_background_color']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_background_color']; ?>" readonly="readonly" size="1" id="params_list_background_color_show" class="rainbowbtn"/>
              </td>
            </tr>          
            <tr>
              <?php
                $check0 = "";
                $check1 = "";
                $check2 = "";
                $check3 = "";
                $check4 = "";
                $check5 = "";
                $check6 = "";
                $check7 = "";
                if ($param_values['list_border_style'] == 'solid')
                    $check0 = '  selected="selected"  ';
                if ($param_values['list_border_style'] == 'double')
                    $check1 = '  selected="selected"';
                if ($param_values['list_border_style'] == 'dashed')
                    $check2 = '  selected="selected"  ';
                if ($param_values['list_border_style'] == 'dotted')
                    $check3 = '  selected="selected"';
                if ($param_values['list_border_style'] == 'groove')
                    $check4 = '  selected="selected"  ';
                if ($param_values['list_border_style'] == 'inset')
                    $check5 = '  selected="selected"';
                if ($param_values['list_border_style'] == 'outset')
                    $check6 = '  selected="selected"  ';
                if ($param_values['list_border_style'] == 'ridge')
                    $check7 = '  selected="selected"';
              ?>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_border_style-lbl" for="paramslist_border_style">Border Style</label></span>
              </td>
              <td class="paramlist_value">
                <select name="params[list_border_style]" id="paramslist_border_style" class="inputbox">
                  <option value="solid"  <?php echo $check0; ?> >solid</option>
                  <option value="double" <?php echo $check1; ?> >double</option>
                  <option value="dashed" <?php echo $check2; ?> >dashed</option>
                  <option value="dotted" <?php echo $check3; ?> >dotted</option>
                  <option value="groove" <?php echo $check4; ?> >groove</option>
                  <option value="inset"  <?php echo $check5; ?> >inset</option>
                  <option value="outset" <?php echo $check6; ?> >outset</option>
                  <option value="ridge"  <?php echo $check7; ?> >ridge</option>
                </select>
              </td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_border_width-lbl" for="paramslist_border_width">Border Width</label></span></td>
              <td class="paramlist_value"><input type="text" name="params[list_border_width]" id="paramslist_border_width" value="<?php echo $param_values['list_border_width']; ?>" class="text_area" size="4"/></td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_border_color-lbl" for="paramslist_border_color">Border Color</label></span></td>
              <td class="paramlist_value">
                <input name="params[list_border_color]" type="text" class="inputbox" id="paramslist_border_color" value="<?php echo $param_values['list_border_color']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_border_color']; ?>" readonly="readonly" size="1" id="paramslist_border_color_show" class="rainbowbtn"/>
              </td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_text_color-lbl" for="paramslist_text_color">Text Color</label></span></td>
              <td class="paramlist_value">
                <input name="params[list_text_color]" type="text" class="inputbox" id="paramslist_text_color" value="<?php echo $param_values['list_text_color']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_text_color']; ?>" readonly="readonly" size="1" id="paramslist_text_color_show" class="rainbowbtn"/>
              </td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_button_color-lbl" for="paramslist_button_color">Category Title Color</label></span></td>
              <td class="paramlist_value">
                <input name="params[list_button_color]" type="text" class="inputbox" id="paramslist_button_color" value="<?php echo $param_values['list_button_color']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_button_color']; ?>" readonly="readonly" size="1" id="paramslist_button_color_show" class="rainbowbtn"/>
              </td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_button_background_color-lbl" for="paramslist_button_background_color">Category Title Background Color</label></span></td>
              <td class="paramlist_value">
                <input name="params[list_button_background_color]" type="text" class="inputbox" id="paramslist_button_background_color" value="<?php echo $param_values['list_button_background_color']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_button_background_color']; ?>" readonly="readonly" size="1" id="paramslist_button_background_color_show" class="rainbowbtn"/>
              </td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_category_picture_width-lbl" for="paramslist_category_picture_width">Category Image Width</label></span></td>
              <td class="paramlist_value"><input type="text" name="params[list_category_picture_width]" id="paramslist_category_picture_width" value="<?php echo $param_values['list_category_picture_width']; ?>" class="text_area" size="4"/></td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_category_picture_height-lbl" for="paramslist_category_picture_height">Category Image Height</label></span></td>
              <td class="paramlist_value"><input type="text" name="params[list_category_picture_height]" id="paramslist_category_picture_height" value="<?php echo $param_values['list_category_picture_height']; ?>" class="text_area" size="4"/></td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsslist_category_title_size-lbl" for="paramslist_category_title_size">Category Title Size</label></span></td>
              <td class="paramlist_value"><input type="text" name="params[list_category_title_size]" id="paramslist_category_title_size" value="<?php echo $param_values['list_category_title_size']; ?>" class="text_area" size="4"/></td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_list_picture_width-lbl" for="paramslist_list_picture_width">Subcategories List Image Width</label></span></td>
              <td class="paramlist_value"><input type="text" name="params[list_list_picture_width]" id="paramslist_list_picture_width" value="<?php echo $param_values['list_list_picture_width']; ?>" class="text_area" size="4"/></td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_list_picture_height-lbl" for="paramslist_list_picture_height">Subcategories List Image Height</label></span></td>
              <td class="paramlist_value"><input type="text" name="params[list_list_picture_height]" id="paramslist_list_picture_height" value="<?php echo $param_values['list_list_picture_height']; ?>" class="text_area" size="4"/></td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_hyperlink_color-lbl" for="paramslist_hyperlink_color">Hyperlink Color</label></span></td>
              <td class="paramlist_value">
                <input name="params[list_hyperlink_color]" type="text" class="inputbox" id="paramslist_hyperlink_color" value="<?php echo $param_values['list_hyperlink_color']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_hyperlink_color']; ?>" readonly="readonly" size="1" id="paramslist_hyperlink_color_show" class="rainbowbtn"/>
              </td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_button_background_color-lbl" for="list_search_icon_color">Search Icon Color</label></span></td>
              <td class="paramlist_value">
                <input name="params[list_search_icon_color]" type="text" class="inputbox" id="list_search_icon_color" value="<?php echo $param_values['list_search_icon_color']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_search_icon_color']; ?>" readonly="readonly" size="1" id="list_search_icon_color_show" class="rainbowbtn"/>
                <div id="list_search-submit" style="background-image:url('<?php echo $path_site; ?>/search-icon.png'); background-color:<?php echo $param_values['list_search_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
              </td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_button_background_color-lbl" for="list_reset_icon_color">Reset Icon Color</label></span></td>
              <td class="paramlist_value">
                <input name="params[list_reset_icon_color]" type="text" class="inputbox" id="list_reset_icon_color" value="<?php echo $param_values['list_reset_icon_color']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_reset_icon_color']; ?>" readonly="readonly" size="1" id="list_reset_icon_color_show" class="rainbowbtn"/>
                <div id="list_search-submit" style="background-image:url('<?php echo $path_site; ?>/search-reset.png'); background-color:<?php echo $param_values['list_reset_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
              </td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_button_background_color-lbl" for="list_select_icon_color">Select Category Icon Color</label></span></td>
              <td class="paramlist_value">
                <input name="params[list_select_icon_color]" type="text" class="inputbox" id="list_select_icon_color" value="<?php echo $param_values['list_select_icon_color']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_select_icon_color']; ?>" readonly="readonly" size="1" id="list_select_icon_color_show" class="rainbowbtn"/>
                <div id="list_search-submit" style="background-image:url('<?php echo $path_site; ?>/selectcat.png'); background-color:<?php echo $param_values['list_select_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
              </td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_rating_star-lbl" >Rating Star Design</label></span></td>
              <td class="paramlist_value">
                <?php
                  $check0 = "";
                  $check1 = "";
                  $check2 = "";
                  $check3 = "";
                  $check4 = "";
                  if ($param_values['list_rating_star'] == 1)
                      $check0 = ' checked="checked" ';
                  if ($param_values['list_rating_star'] == 2)
                      $check1 = ' checked="checked" ';
                  if ($param_values['list_rating_star'] == 3)
                      $check2 = ' checked="checked" ';
                  if ($param_values['list_rating_star'] == 4)
                      $check3 = ' checked="checked" ';
                  if ($param_values['list_rating_star'] == 5)
                      $check4 = ' checked="checked" ';
                ?>
                <table cellpadding="0" cellspacing="10" border="0" style="text-align: center;">
                  <tr>
                    <td>
                      <label>
                          <img src="<?php echo $path_site; ?>/star1.png" alt="star1"/><br/>
                          <input name="params[list_rating_star]" type="radio" class="inputbox" id="paramslist_rating_star" value="1" size="10" <?php echo $check0; ?> />
                      </label>
                    </td>
                    <td>
                      <label>
                        <img src="<?php echo $path_site; ?>/star2.png" alt="star2"/><br/>
                        <input name="params[list_rating_star]" type="radio" class="inputbox" id="paramslist_rating_star" value="2" size="10" <?php echo $check1; ?> />
                      </label>
                    </td>
                    <td>
                      <label>
                        <img src="<?php echo $path_site; ?>/star3.png" alt="star3"/><br/>
                        <input name="params[list_rating_star]" type="radio" class="inputbox" id="paramslist_rating_star" value="3" size="10" <?php echo $check2; ?> />
                      </label>
                    </td>
                    <td>
                      <label>
                        <img src="<?php echo $path_site; ?>/star4.png" alt="star4"/><br/>
                        <input name="params[list_rating_star]" type="radio" class="inputbox" id="paramslist_rating_star" value="4" size="10" <?php echo $check3; ?> />
                      </label>
                    </td>
                    <td>
                      <label>
                        <img src="<?php echo $path_site; ?>/star5.png" alt="star5"/><br/>
                        <input name="params[list_rating_star]" type="radio" class="inputbox" id="paramslist_rating_star" value="5" size="10"  <?php echo $check4; ?> />
                      </label>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>


          </table>
          <table style="width:48%;float:left;" class="paramlist admintable" cellspacing="1">
            
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_count_of_products_in_the_page-lbl" for="paramslist_count_of_products_in_the_page">Number of Products in the page</label></span></td>
              <td class="paramlist_count_of_products_in_the_page"><input type="text" name="params[list_count_of_products_in_the_page]" id="paramslist_count_of_products_in_the_page" value="<?php echo $param_values['list_count_of_products_in_the_page']; ?>" class="text_area" size="4"/></td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_categories_row_color1-lbl" for="paramslist_categories_row_color1">Categories Background Color 1</label></span></td>
              <td class="paramlist_value">
                <input name="params[list_categories_row_color1]" type="text" class="inputbox" id="paramslist_categories_row_color1" value="<?php echo $param_values['list_categories_row_color1']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_categories_row_color1']; ?>" readonly="readonly" size="1" id="paramslist_categories_row_color1_show" class="rainbowbtn"/>
              </td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_categories_row_color2-lbl" for="paramslist_categories_row_color2">Categories Background Color 2</label></span></td>
              <td class="paramlist_value">
                <input name="params[list_categories_row_color2]" type="text" class="inputbox" id="paramslist_categories_row_color2" value="<?php echo $param_values['list_categories_row_color2']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_categories_row_color2']; ?>" readonly="readonly" size="1" id="paramslist_categories_row_color2_show" class="rainbowbtn"/>
              </td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_categories_header_background_color-lbl" for="paramslist_categories_header_background_color">Categories Header Background Color</label></span></td>
              <td class="paramlist_value">
                <input name="params[list_categories_header_background_color]" type="text" class="inputbox" id="paramslist_categories_header_background_color" value="<?php echo $param_values['list_categories_header_background_color']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_categories_header_background_color']; ?>" readonly="readonly" size="1" id="paramslist_categories_header_background_color_show" class="rainbowbtn"/>
              </td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_categories_header_color-lbl" for="paramslist_categories_header_color">Categories Header Text Color</label></span></td>
              <td class="paramlist_value">
                <input name="params[list_categories_header_color]" type="text" class="inputbox" id="paramslist_categories_header_color" value="<?php echo $param_values['list_categories_header_color']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_categories_header_color']; ?>" readonly="readonly" size="1" id="paramslist_categories_header_color_show" class="rainbowbtn"/>
              </td>
            </tr>
          
        
            <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="list_page_up_names_text_color-lbl"
                                                                                       for="list_page_up_names_text_color">Header
                            Text Color</label></span></td>
                <td class="paramlist_value"><label>
                        <!--input id="myInput" name="myInput" type="text" /-->
                        <input name="params[list_page_up_names_text_color]" type="text" class="inputbox"
                               id="list_page_up_names_text_color" value="<?php
                        echo $param_values['list_page_up_names_text_color'];
                        ?>" size="10"/><input type="text" style="background:<?php
                        echo $param_values['list_page_up_names_text_color'];
                        ?>" readonly="readonly" size="1" id="list_page_up_names_text_color_show" class="rainbowbtn"/>

                    </label>
                </td>
            </tr>
            <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                            id="list_page_up_names_background_color-lbl"
                            for="list_page_up_names_background_color">Header Background Color</label></span></td>
                <td class="paramlist_value"><label>
                        <!--input id="myInput" name="myInput" type="text" /-->
                        <input name="params[list_page_up_names_background_color]" type="text" class="inputbox"
                               id="list_page_up_names_background_color" value="<?php
                        echo $param_values['list_page_up_names_background_color'];
                        ?>" size="10"/><input type="text" style="background:<?php
                        echo $param_values['list_page_up_names_background_color'];
                        ?>" readonly="readonly" size="1" id="list_page_up_names_background_color_show" class="rainbowbtn"/>

                    </label>
                </td>
            </tr>
            <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="list_page_background_color_1-lbl"
                                                                                       for="list_page_background_color_1">List
                            Background Color 1</label></span></td>
                <td class="paramlist_value"><label>
                        <!--input id="myInput" name="myInput" type="text" /-->
                        <input name="params[list_page_background_color_1]" type="text" class="inputbox"
                               id="list_page_background_color_1" value="<?php
                        echo $param_values['list_page_background_color_1'];
                        ?>" size="10"/><input type="text" style="background:<?php
                        echo $param_values['list_page_background_color_1'];
                        ?>" readonly="readonly" size="1" id="list_page_background_color_1_show" class="rainbowbtn"/>

                    </label>
                </td>
            </tr>
            <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="list_page_background_color_2-lbl"
                                                                                       for="list_page_background_color_2">List
                            Background Color 2</label></span></td>
                <td class="paramlist_value"><label>
                        <!--input id="myInput" name="myInput" type="text" /-->
                        <input name="params[list_page_background_color_2]" type="text" class="inputbox"
                               id="list_page_background_color_2" value="<?php
                        echo $param_values['list_page_background_color_2'];
                        ?>" size="10"/><input type="text" style="background:<?php
                        echo $param_values['list_page_background_color_2'];
                        ?>" readonly="readonly" size="1" id="list_page_background_color_2_show" class="rainbowbtn"/>

                    </label>
                </td>
            </tr>
            <tr>
              <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="list_list_border_color-lbl" for="list_list_border_color">List Border Color</label></span></td>
              <td class="paramlist_value">
                <input name="params[list_list_border_color]" type="text" class="inputbox" id="list_list_border_color" value="<?php echo $param_values['list_list_border_color']; ?>" size="10"/>
                <input type="text" style="background:<?php echo $param_values['list_list_border_color']; ?>" readonly="readonly" size="1" id="list_list_border_color_show" class="rainbowbtn"/>
              </td>
            </tr>
            <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="list_cell_price_color-lbl"
                                                                                       for="list_cell_price_color">Price
                            Color</label></span></td>
                <td class="paramlist_value"><label>
                        <!--input id="myInput" name="myInput" type="text" /-->
                        <input name="params[list_cell_price_color]" type="text" class="inputbox"
                               id="list_cell_price_color" value="<?php
                        echo $param_values['list_cell_price_color'];
                        ?>" size="10"/><input type="text" style="background:<?php
                        echo $param_values['list_cell_price_color'];
                        ?>" readonly="readonly" size="1" id="list_cell_price_color_show" class="rainbowbtn"/>

                    </label>
                </td>
            </tr>
            <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="list_cell_market_price_color-lbl"
                                                                                       for="list_cell_market_price_color">Market
                            Price Color</label></span></td>
                <td class="paramlist_value"><label>
                        <!--input id="myInput" name="myInput" type="text" /-->
                        <input name="params[list_cell_market_price_color]" type="text" class="inputbox"
                               id="list_cell_market_price_color" value="<?php
                        echo $param_values['list_cell_market_price_color'];
                        ?>" size="10"/><input type="text" style="background:<?php
                        echo $param_values['list_cell_market_price_color'];
                        ?>" readonly="readonly" size="1" id="list_cell_market_price_color_show" class="rainbowbtn"/>

                    </label>
                </td>
            </tr>
            <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="list_page_text_color_1-lbl"
                                                                                       for="list_page_text_color_1">Parameter Title Color</label></span></td>
                <td class="paramlist_value"><label>
                        <!--input id="myInput" name="myInput" type="text" /-->
                        <input name="params[list_page_text_color_1]" type="text" class="inputbox"
                               id="list_page_text_color_1" value="<?php
                        echo $param_values['list_page_text_color_1'];
                        ?>" size="10"/><input type="text" style="background:<?php
                        echo $param_values['list_page_text_color_1'];
                        ?>" readonly="readonly" size="1" id="list_page_text_color_1_show" class="rainbowbtn"/>

                    </label>
                </td>
            </tr>
            <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="list_page_text_color_2-lbl"
                                                                                       for="list_page_text_color_2">Parameter Text Color</label></span></td>
                <td class="paramlist_value"><label>
                        <!--input id="myInput" name="myInput" type="text" /-->
                        <input name="params[list_page_text_color_2]" type="text" class="inputbox"
                               id="list_page_text_color_2" value="<?php
                        echo $param_values['list_page_text_color_2'];
                        ?>" size="10"/><input type="text" style="background:<?php
                        echo $param_values['list_page_text_color_2'];
                        ?>" readonly="readonly" size="1" id="list_page_text_color_2_show" class="rainbowbtn"/>

                    </label>
                </td>
            </tr>
            



            <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstext_size_list-lbl"
                                                                                       for="paramstext_size_list">Text
                            Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[text_size_list]" id="paramstext_size_list"
                                                   value="<?php
                                                   echo $param_values['text_size_list'];
                                                   ?>" class="text_area" size="4"/></td>
            </tr>
            <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsprice_size_list-lbl"
                                                                                       for="paramsprice_size_list">Price
                            Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[price_size_list]" id="paramsprice_size_list"
                                                   value="<?php
                                                   echo $param_values['price_size_list'];
                                                   ?>" class="text_area" size="4"/></td>
            </tr>
            <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsmarket_price_size_list-lbl"
                                                                                       for="paramsmarket_price_size_list">Market Price
                            Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[market_price_size_list]" id="paramsmarket_price_size_list"
                                                   value="<?php
                                                   echo $param_values['market_price_size_list'];
                                                   ?>" class="text_area" size="4"/></td>
            </tr>


            <tr>
                <?php
                $check0 = "";
                $check1 = "";
                if ($param_values['list_show_category'] == 0)
                    $check0 = ' checked="checked" ';
                if ($param_values['list_show_category'] == 1)
                    $check1 = ' checked="checked" ';
                ?>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslist_show_category-lbl"
                                                                                       for="paramslist_show_category">Show
                            Category</label></span></td>
                <td class="paramlist_value">
                    <input type="radio" name="params[list_show_category]" id="paramslist_show_category0"
                           value="0"  <?php
                    echo $check0;
                    ?> />
                    <label for="paramslist_show_category0">Disable</label>
                    <input type="radio" name="params[list_show_category]" id="paramslist_show_category1" value="1" <?php
                    echo $check1;
                    ?>   />
                    <label for="paramslist_show_category1">Enable</label>
                </td>
            </tr>

            <tr>
                <?php
                $check0 = "";
                $check1 = "";
                if ($param_values['list_show_parameters'] == 0)
                    $check0 = ' checked="checked" ';
                if ($param_values['list_show_parameters'] == 1)
                    $check1 = ' checked="checked" ';
                ?>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                            id="paramslist_show_parameters-lbl" for="paramslist_show_parameters">Show
                            Parameters</label></span>
                </td>
                <td class="paramlist_value">
                    <input type="radio" name="params[list_show_parameters]" id="paramslist_show_parameters0"
                           value="0"  <?php
                    echo $check0;
                    ?> />
                    <label for="paramslist_show_parameters0">Disable</label>
                    <input type="radio" name="params[list_show_parameters]" id="paramslist_show_parameters1"
                           value="1" <?php
                    echo $check1;
                    ?>   />
                    <label for="paramslist_show_parameters1">Enable</label>
                </td>
            </tr>


            <tr>
                <?php
                $check0 = "";
                $check1 = "";
                if ($param_values['list_show_description'] == 0)
                    $check0 = ' checked="checked" ';
                if ($param_values['list_show_description'] == 1)
                    $check1 = ' checked="checked" ';
                ?>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                            id="paramslist_show_description-lbl" for="paramslist_show_description">Show
                            Description</label></span></td>
                <td class="paramlist_value">
                    <input type="radio" name="params[list_show_description]" id="paramslist_show_description0"
                           value="0"  <?php
                    echo $check0;
                    ?> />
                    <label for="paramslist_show_description0">Disable</label>
                    <input type="radio" name="params[list_show_description]" id="paramslist_show_description1"
                           value="1" <?php
                    echo $check1;
                    ?>   />
                    <label for="paramslist_show_description1">Enable</label>
                </td>
            </tr>
          </table>
        </fieldset>

        <fieldset style="border:2px groove; display: none;" id="fieldset_4">        
          <fieldset style="border:2px groove; width: 48%; float: left;">
            <legend>Product Page Options</legend>
            <table>
              <tr>
                <td width="40%" class="paramlist_key">
                  <span class="editlinktip"><label id="params_single_background_color-lbl" for="params_single_background_color">Background Color</label></span>
                </td>
                <td class="paramlist_value">
                  <input name="params[single_background_color]" type="text" class="inputbox" id="params_single_background_color" value="<?php echo $param_values['single_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['single_background_color']; ?>" readonly="readonly" size="1" id="params_single_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>          
              <tr>
                <?php
                  $check0 = "";
                  $check1 = "";
                  $check2 = "";
                  $check3 = "";
                  $check4 = "";
                  $check5 = "";
                  $check6 = "";
                  $check7 = "";
                  if ($param_values['single_border_style'] == 'solid')
                      $check0 = '  selected="selected"  ';
                  if ($param_values['single_border_style'] == 'double')
                      $check1 = '  selected="selected"';
                  if ($param_values['single_border_style'] == 'dashed')
                      $check2 = '  selected="selected"  ';
                  if ($param_values['single_border_style'] == 'dotted')
                      $check3 = '  selected="selected"';
                  if ($param_values['single_border_style'] == 'groove')
                      $check4 = '  selected="selected"  ';
                  if ($param_values['single_border_style'] == 'inset')
                      $check5 = '  selected="selected"';
                  if ($param_values['single_border_style'] == 'outset')
                      $check6 = '  selected="selected"  ';
                  if ($param_values['single_border_style'] == 'ridge')
                      $check7 = '  selected="selected"';
                ?>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramssingle_border_style-lbl" for="paramssingle_border_style">Border Style</label></span>
                </td>
                <td class="paramlist_value">
                  <select name="params[single_border_style]" id="paramssingle_border_style" class="inputbox">
                    <option value="solid"  <?php echo $check0; ?> >solid</option>
                    <option value="double" <?php echo $check1; ?> >double</option>
                    <option value="dashed" <?php echo $check2; ?> >dashed</option>
                    <option value="dotted" <?php echo $check3; ?> >dotted</option>
                    <option value="groove" <?php echo $check4; ?> >groove</option>
                    <option value="inset"  <?php echo $check5; ?> >inset</option>
                    <option value="outset" <?php echo $check6; ?> >outset</option>
                    <option value="ridge"  <?php echo $check7; ?> >ridge</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramssingle_border_width-lbl" for="paramssingle_border_width">Border Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[single_border_width]" id="paramssingle_border_width" value="<?php echo $param_values['single_border_width']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramssingle_border_color-lbl" for="paramssingle_border_color">Border Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[single_border_color]" type="text" class="inputbox" id="paramssingle_border_color" value="<?php echo $param_values['single_border_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['single_border_color']; ?>" readonly="readonly" size="1" id="paramssingle_border_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramssingle_text_color-lbl" for="paramssingle_text_color">Text Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[single_text_color]" type="text" class="inputbox" id="paramssingle_text_color" value="<?php echo $param_values['single_text_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['single_text_color']; ?>" readonly="readonly" size="1" id="paramssingle_text_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstext_size_big-lbl" for="paramstext_size_big">Text Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[text_size_big]" id="paramstext_size_big" value="<?php echo $param_values['text_size_big']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                  <td width="40%" class="paramlist_key">
                    <span class="editlinktip"><label id="params_single_params_background_color1-lbl" for="params_single_params_background_color1" class="hasTip" title="Parameters Background Color 1::Background Color of odd parameters">Parameters Background Color 1</label></span>
                  </td>
                  <td class="paramlist_value">
                    <input name="params[single_params_background_color1]" type="text" class="inputbox" id="params_single_params_background_color1" value="<?php echo $param_values['single_params_background_color1']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['single_params_background_color1']; ?>" readonly="readonly" size="1" id="params_single_params_background_color1_show" class="rainbowbtn"/>
                  </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key">
                  <span class="editlinktip"><label id="params_single_params_background_color2-lbl" for="params_single_params_background_color2" class="hasTip" title="Parameters Background Color 2::Background Color of even parameters">Parameters Background Color 2</label></span>
                </td>
                <td class="paramlist_value">
                  <input name="params[single_params_background_color2]" type="text" class="inputbox" id="params_single_params_background_color2" value="<?php echo $param_values['single_params_background_color2']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['single_params_background_color2']; ?>" readonly="readonly" size="1" id="params_single_params_background_color2_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramssingle_params_color-lbl" for="paramssingle_params_color">Color of Parameter Values</label></span></td>
                <td class="paramlist_value">
                  <input name="params[single_params_color]" type="text" class="inputbox" id="paramssingle_params_color" value="<?php echo $param_values['single_params_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['single_params_color']; ?>" readonly="readonly" size="1" id="paramssingle_params_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramssingle_price_color-lbl" for="paramssingle_price_color">Price Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[single_price_color]" type="text" class="inputbox" id="paramssingle_price_color" value="<?php echo $param_values['single_price_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['single_price_color']; ?>" readonly="readonly" size="1" id="paramssingle_price_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsmarket_price_size_big-lbl" for="paramsmarket_price_size_big">Market Price Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[market_price_size_big]" id="paramsmarket_price_size_big" value="<?php echo $param_values['market_price_size_big']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramssingle_market_price_color-lbl" for="paramssingle_market_price_color">Market Price Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[single_market_price_color]" type="text" class="inputbox" id="paramssingle_market_price_color" value="<?php echo $param_values['single_market_price_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['single_market_price_color']; ?>" readonly="readonly" size="1" id="paramssingle_market_price_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsprice_size_big-lbl" for="paramsprice_size_big">Price Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[price_size_big]" id="paramsprice_size_big" value="<?php echo $param_values['price_size_big']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="product_price_background_color-lbl" for="product_price_background_color">Price Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[product_price_background_color]" type="text" class="inputbox" id="product_price_background_color" value="<?php echo $param_values['product_price_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['product_price_background_color']; ?>" readonly="readonly" size="1" id="product_price_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramssingle_title_color-lbl" for="paramssingle_title_color">Title Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[single_title_color]" type="text" class="inputbox" id="paramssingle_title_color" value="<?php echo $param_values['single_title_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['single_title_color']; ?>" readonly="readonly" size="1" id="paramssingle_title_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsproduct_big_title_size-lbl" for="paramsproduct_big_title_size">Big Title Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[product_big_title_size]" id="paramsproduct_big_title_size" value="<?php echo $param_values['product_big_title_size']; ?>" class="text_area" size="3"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstitle_size_big-lbl" for="paramstitle_size_big">Title Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[title_size_big]" id="paramstitle_size_big" value="<?php echo $param_values['title_size_big']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramssingle_title_background_color-lbl" for="paramssingle_title_background_color">Title Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[single_title_background_color]" type="text" class="inputbox" id="paramssingle_title_background_color" value="<?php echo $param_values['single_title_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['single_title_background_color']; ?>" readonly="readonly" size="1" id="paramssingle_title_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>          
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslarge_picture_width-lbl" for="paramslarge_picture_width">Image Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[large_picture_width]" id="paramslarge_picture_width" value="<?php echo $param_values['large_picture_width']; ?>" class="text_area" size="3"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramslarge_picture_height-lbl" for="paramslarge_picture_height">Image Height</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[large_picture_height]" id="paramslarge_picture_height" value="<?php echo $param_values['large_picture_height']; ?>" class="text_area" size="3"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramssingle_rating_star-lbl" >Rating Star Design</label></span></td>
                <td class="paramlist_value">
                  <?php
                    $check0 = "";
                    $check1 = "";
                    $check2 = "";
                    $check3 = "";
                    $check4 = "";
                    if ($param_values['single_rating_star'] == 1)
                        $check0 = ' checked="checked" ';
                    if ($param_values['single_rating_star'] == 2)
                        $check1 = ' checked="checked" ';
                    if ($param_values['single_rating_star'] == 3)
                        $check2 = ' checked="checked" ';
                    if ($param_values['single_rating_star'] == 4)
                        $check3 = ' checked="checked" ';
                    if ($param_values['single_rating_star'] == 5)
                        $check4 = ' checked="checked" ';
                  ?>
                  <table cellpadding="0" cellspacing="10" border="0" style="text-align: center;">
                    <tr>
                      <td>
                        <label>
                            <img src="<?php echo $path_site; ?>/star1.png" alt="star1"/><br/>
                            <input name="params[single_rating_star]" type="radio" class="inputbox" id="paramssingle_rating_star" value="1" size="10" <?php echo $check0; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star2.png" alt="star2"/><br/>
                          <input name="params[single_rating_star]" type="radio" class="inputbox" id="paramssingle_rating_star" value="2" size="10" <?php echo $check1; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star3.png" alt="star3"/><br/>
                          <input name="params[single_rating_star]" type="radio" class="inputbox" id="paramssingle_rating_star" value="3" size="10" <?php echo $check2; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star4.png" alt="star4"/><br/>
                          <input name="params[single_rating_star]" type="radio" class="inputbox" id="paramssingle_rating_star" value="4" size="10" <?php echo $check3; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star5.png" alt="star5"/><br/>
                          <input name="params[single_rating_star]" type="radio" class="inputbox" id="paramssingle_rating_star" value="5" size="10"  <?php echo $check4; ?> />
                        </label>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </fieldset>
          <fieldset style="border:2px groove; width: 48%; float: left;">
            <legend>Review Options</legend>
              <table width="100%" class="paramlist admintable" cellspacing="1">
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsreview_background_color-lbl" for="paramsreview_background_color">Background Color of Review Section</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[review_background_color]" type="text" class="inputbox" id="paramsreview_background_color" value="<?php echo $param_values['review_background_color']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['review_background_color']; ?>" readonly="readonly" size="1" id="paramsreview_background_color_show" class="rainbowbtn"/>
                  </td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsreview_color-lbl" for="paramsreview_color">Color of Review Texts</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[review_color]" type="text" class="inputbox" id="paramsreview_color" value="<?php echo $param_values['review_color']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['review_color']; ?>" readonly="readonly" size="1" id="paramsreview_color_show" class="rainbowbtn"/>
                  </td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsreview_author_background_color-lbl" for="paramsreview_author_background_color">Background Color of Review Author section</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[review_author_background_color]" type="text" class="inputbox" id="paramsreview_author_background_color" value="<?php echo $param_values['review_author_background_color']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['review_author_background_color']; ?>" readonly="readonly" size="1" id="paramsreview_author_background_color_show" class="rainbowbtn"/>
                  </td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsreview_text_background_color-lbl" for="paramsreview_text_background_color">Background Color of Review text</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[review_text_background_color]" type="text" class="inputbox" id="paramsreview_text_background_color" value="<?php echo $param_values['review_text_background_color']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['review_text_background_color']; ?>" readonly="readonly" size="1" id="paramsreview_text_background_color_show" class="rainbowbtn"/>
                  </td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsreviews_perpage-lbl" for="paramsreviews_perpage">Number of Reviews per Page</label></span></td>
                  <td class="paramlist_value"><input type="text" name="params[reviews_perpage]" id="paramsreviews_perpage" value="<?php echo $param_values['reviews_perpage']; ?>" class="text_area"/></td>
                </tr>            
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="product_back_add_your_review_here-lbl" for="product_back_add_your_review_here"> Background Color of 'Add your review here' and 'Send' Buttons</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[product_back_add_your_review_here]" type="text" class="inputbox" id="product_back_add_your_review_here" value="<?php echo $param_values['product_back_add_your_review_here']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['product_back_add_your_review_here']; ?>" readonly="readonly" size="1" id="product_back_add_your_review_here_show" class="rainbowbtn"/>
                  </td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="product_color_add_your_review_here-lbl" for="product_color_add_your_review_here">Text Color of 'Add your review here' and 'Send' Buttons</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[product_color_add_your_review_here]" type="text" class="inputbox" id="product_color_add_your_review_here" value="<?php echo $param_values['product_color_add_your_review_here']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['product_color_add_your_review_here']; ?>" readonly="readonly" size="1" id="product_color_add_your_review_here_show" class="rainbowbtn"/>
                  </td>
                </tr>
              </table>
          </fieldset>
        </fieldset>

        <fieldset style="border:2px groove; display: none;" id="fieldset_5">
            <legend>Cells 2 Page Options</legend>
            <table style="width:48%;float:left;" class="paramlist admintable" cellspacing="1">
            
            
              <tr>
                <td width="40%" class="paramlist_key">
                  <span class="editlinktip"><label id="params_cells2_background_color-lbl" for="params_cells2_background_color">Background Color</label></span>
                </td>
                <td class="paramlist_value">
                  <input name="params[cells2_background_color]" type="text" class="inputbox" id="params_cells2_background_color" value="<?php echo $param_values['cells2_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells2_background_color']; ?>" readonly="readonly" size="1" id="params_cells2_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>          
              <tr>
                <?php
                  $check0 = "";
                  $check1 = "";
                  $check2 = "";
                  $check3 = "";
                  $check4 = "";
                  $check5 = "";
                  $check6 = "";
                  $check7 = "";
                  if ($param_values['cells2_border_style'] == 'solid')
                      $check0 = '  selected="selected"  ';
                  if ($param_values['cells2_border_style'] == 'double')
                      $check1 = '  selected="selected"';
                  if ($param_values['cells2_border_style'] == 'dashed')
                      $check2 = '  selected="selected"  ';
                  if ($param_values['cells2_border_style'] == 'dotted')
                      $check3 = '  selected="selected"';
                  if ($param_values['cells2_border_style'] == 'groove')
                      $check4 = '  selected="selected"  ';
                  if ($param_values['cells2_border_style'] == 'inset')
                      $check5 = '  selected="selected"';
                  if ($param_values['cells2_border_style'] == 'outset')
                      $check6 = '  selected="selected"  ';
                  if ($param_values['cells2_border_style'] == 'ridge')
                      $check7 = '  selected="selected"';
                ?>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_border_style-lbl" for="paramscells2_border_style">Border Style</label></span>
                </td>
                <td class="paramlist_value">
                  <select name="params[cells2_border_style]" id="paramscells2_border_style" class="inputbox">
                    <option value="solid"  <?php echo $check0; ?> >solid</option>
                    <option value="double" <?php echo $check1; ?> >double</option>
                    <option value="dashed" <?php echo $check2; ?> >dashed</option>
                    <option value="dotted" <?php echo $check3; ?> >dotted</option>
                    <option value="groove" <?php echo $check4; ?> >groove</option>
                    <option value="inset"  <?php echo $check5; ?> >inset</option>
                    <option value="outset" <?php echo $check6; ?> >outset</option>
                    <option value="ridge"  <?php echo $check7; ?> >ridge</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_border_width-lbl" for="paramscells2_border_width">Border Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells2_border_width]" id="paramscells2_border_width" value="<?php echo $param_values['cells2_border_width']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_border_color-lbl" for="paramscells2_border_color">Border Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells2_border_color]" type="text" class="inputbox" id="paramscells2_border_color" value="<?php echo $param_values['cells2_border_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells2_border_color']; ?>" readonly="readonly" size="1" id="paramscells2_border_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_text_color-lbl" for="paramscells2_text_color">Text Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells2_text_color]" type="text" class="inputbox" id="paramscells2_text_color" value="<?php echo $param_values['cells2_text_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells2_text_color']; ?>" readonly="readonly" size="1" id="paramscells2_text_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_button_color-lbl" for="paramscells2_button_color">Category Title Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells2_button_color]" type="text" class="inputbox" id="paramscells2_button_color" value="<?php echo $param_values['cells2_button_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells2_button_color']; ?>" readonly="readonly" size="1" id="paramscells2_button_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_button_background_color-lbl" for="paramscells2_button_background_color">Category Title Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells2_button_background_color]" type="text" class="inputbox" id="paramscells2_button_background_color" value="<?php echo $param_values['cells2_button_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells2_button_background_color']; ?>" readonly="readonly" size="1" id="paramscells2_button_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_category_picture_width-lbl" for="paramscells2_category_picture_width">Category Image Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells2_category_picture_width]" id="paramscells2_category_picture_width" value="<?php echo $param_values['cells2_category_picture_width']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_category_picture_height-lbl" for="paramscells2_category_picture_height">Category Image Height</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells2_category_picture_height]" id="paramscells2_category_picture_height" value="<?php echo $param_values['cells2_category_picture_height']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsscells2_category_title_size-lbl" for="paramscells2_category_title_size">Category Title Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells2_category_title_size]" id="paramscells2_category_title_size" value="<?php echo $param_values['cells2_category_title_size']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_list_picture_width-lbl" for="paramscells2_list_picture_width">Subcategories List Image Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells2_list_picture_width]" id="paramscells2_list_picture_width" value="<?php echo $param_values['cells2_list_picture_width']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_list_picture_height-lbl" for="paramscells2_list_picture_height">Subcategories List Image Height</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells2_list_picture_height]" id="paramscells2_list_picture_height" value="<?php echo $param_values['cells2_list_picture_height']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_hyperlink_color-lbl" for="paramscells2_hyperlink_color">Hyperlink Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells2_hyperlink_color]" type="text" class="inputbox" id="paramscells2_hyperlink_color" value="<?php echo $param_values['cells2_hyperlink_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells2_hyperlink_color']; ?>" readonly="readonly" size="1" id="paramscells2_hyperlink_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_button_background_color-lbl" for="cells2_search_icon_color">Search Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells2_search_icon_color]" type="text" class="inputbox" id="cells2_search_icon_color" value="<?php echo $param_values['cells2_search_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells2_search_icon_color']; ?>" readonly="readonly" size="1" id="cells2_search_icon_color_show" class="rainbowbtn"/>
                  <div id="cells2_search-submit" style="background-image:url('<?php echo $path_site; ?>/search-icon.png'); background-color:<?php echo $param_values['cells2_search_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_button_background_color-lbl" for="cells2_reset_icon_color">Reset Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells2_reset_icon_color]" type="text" class="inputbox" id="cells2_reset_icon_color" value="<?php echo $param_values['cells2_reset_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells2_reset_icon_color']; ?>" readonly="readonly" size="1" id="cells2_reset_icon_color_show" class="rainbowbtn"/>
                  <div id="cells2_search-submit" style="background-image:url('<?php echo $path_site; ?>/search-reset.png'); background-color:<?php echo $param_values['cells2_reset_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_button_background_color-lbl" for="cells2_select_icon_color">Select Category Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells2_select_icon_color]" type="text" class="inputbox" id="cells2_select_icon_color" value="<?php echo $param_values['cells2_select_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells2_select_icon_color']; ?>" readonly="readonly" size="1" id="cells2_select_icon_color_show" class="rainbowbtn"/>
                  <div id="cells2_search-submit" style="background-image:url('<?php echo $path_site; ?>/selectcat.png'); background-color:<?php echo $param_values['cells2_reset_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_rating_star-lbl" >Rating Star Design</label></span></td>
                <td class="paramlist_value">
                  <?php
                    $check0 = "";
                    $check1 = "";
                    $check2 = "";
                    $check3 = "";
                    $check4 = "";
                    if ($param_values['cells2_rating_star'] == 1)
                        $check0 = ' checked="checked" ';
                    if ($param_values['cells2_rating_star'] == 2)
                        $check1 = ' checked="checked" ';
                    if ($param_values['cells2_rating_star'] == 3)
                        $check2 = ' checked="checked" ';
                    if ($param_values['cells2_rating_star'] == 4)
                        $check3 = ' checked="checked" ';
                    if ($param_values['cells2_rating_star'] == 5)
                        $check4 = ' checked="checked" ';
                  ?>
                  <table cellpadding="0" cellspacing="10" border="0" style="text-align: center;">
                    <tr>
                      <td>
                        <label>
                            <img src="<?php echo $path_site; ?>/star1.png" alt="star1"/><br/>
                            <input name="params[cells2_rating_star]" type="radio" class="inputbox" id="paramscells2_rating_star" value="1" size="10" <?php echo $check0; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star2.png" alt="star2"/><br/>
                          <input name="params[cells2_rating_star]" type="radio" class="inputbox" id="paramscells2_rating_star" value="2" size="10" <?php echo $check1; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star3.png" alt="star3"/><br/>
                          <input name="params[cells2_rating_star]" type="radio" class="inputbox" id="paramscells2_rating_star" value="3" size="10" <?php echo $check2; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star4.png" alt="star4"/><br/>
                          <input name="params[cells2_rating_star]" type="radio" class="inputbox" id="paramscells2_rating_star" value="4" size="10" <?php echo $check3; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star5.png" alt="star5"/><br/>
                          <input name="params[cells2_rating_star]" type="radio" class="inputbox" id="paramscells2_rating_star" value="5" size="10"  <?php echo $check4; ?> />
                        </label>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              
            </table>
            <table style="width:48%;float:left;" class="paramlist admintable" cellspacing="1">
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_count_of_product_in_the_row-lbl" for="paramscells2_count_of_product_in_the_row">Number of Products in the Row</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells2_count_of_product_in_the_row]" id="paramscells2_count_of_product_in_the_row" value="<?php echo $param_values['cells2_count_of_product_in_the_row']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_count_of_rows_in_the_page-lbl" for="paramscells2_count_of_rows_in_the_page">Number of Rows in the Page</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells2_count_of_rows_in_the_page]" id="paramscells2_count_of_rows_in_the_page" value="<?php echo $param_values['cells2_count_of_rows_in_the_page']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_categories_row_color1-lbl" for="paramscells2_categories_row_color1">Categories Background Color 1</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells2_categories_row_color1]" type="text" class="inputbox" id="paramscells2_categories_row_color1" value="<?php echo $param_values['cells2_categories_row_color1']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells2_categories_row_color1']; ?>" readonly="readonly" size="1" id="paramscells2_categories_row_color1_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_categories_row_color2-lbl" for="paramscells2_categories_row_color2">Categories Background Color 2</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells2_categories_row_color2]" type="text" class="inputbox" id="paramscells2_categories_row_color2" value="<?php echo $param_values['cells2_categories_row_color2']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells2_categories_row_color2']; ?>" readonly="readonly" size="1" id="paramscells2_categories_row_color2_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_categories_header_background_color-lbl" for="paramscells2_categories_header_background_color">Categories Header Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells2_categories_header_background_color]" type="text" class="inputbox" id="paramscells2_categories_header_background_color" value="<?php echo $param_values['cells2_categories_header_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells2_categories_header_background_color']; ?>" readonly="readonly" size="1" id="paramscells2_categories_header_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells2_categories_header_color-lbl" for="paramscells2_categories_header_color">Categories Header Text Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells2_categories_header_color]" type="text" class="inputbox" id="paramscells2_categories_header_color" value="<?php echo $param_values['cells2_categories_header_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells2_categories_header_color']; ?>" readonly="readonly" size="1" id="paramscells2_categories_header_color_show" class="rainbowbtn"/>
                </td>
              </tr>
            
            
            
            
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="paramslarge_picture_width-lbl" for="cell_new_big_title_size">Big Title
                                Size</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[cell_new_big_title_size]"
                                                       id="cell_new_big_title_size" value="<?php
                        echo $param_values['cell_new_big_title_size'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="paramslarge_picture_width-lbl" for="cell_new_title_size">Title Size</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[cell_new_title_size]"
                                                       id="cell_new_title_size" value="<?php
                        echo $param_values['cell_new_title_size'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="cell_new_title_color-lbl" for="cell_new_title_color">Title Color</label></span></td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[cell_new_title_color]" type="text" class="inputbox"
                                   id="cell_new_title_color" value="<?php
                            echo $param_values['cell_new_title_color'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['cell_new_title_color'];
                            ?>" readonly="readonly" size="1" id="cell_new_title_color_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsprice_size_big-lbl"
                                                                                           for="cell_new_price_size">Price
                                Size</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[cell_new_price_size]"
                                                       id="cell_new_price_size" value="<?php
                        echo $param_values['cell_new_price_size'];
                        ?>" class="text_area"/></td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="cells2_price_color-lbl" for="cells2_price_color">Price Color</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[cells2_price_color]" type="text" class="inputbox" id="cells2_price_color" value="<?php echo $param_values['cells2_price_color']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['cells2_price_color']; ?>" readonly="readonly" size="1" id="cells2_price_color_show" class="rainbowbtn"/>
                  </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsprice_size_big-lbl"
                                                                                           for="cell_new_market_price_size">Market
                                Price Size</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[cell_new_market_price_size]"
                                                       id="cell_new_market_price_size" value="<?php
                        echo $param_values['cell_new_market_price_size'];
                        ?>" class="text_area"/></td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="cells2_market_price_color-lbl" for="cells2_market_price_color">Market price Color</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[cells2_market_price_color]" type="text" class="inputbox" id="cells2_market_price_color" value="<?php echo $param_values['cells2_market_price_color']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['cells2_market_price_color']; ?>" readonly="readonly" size="1" id="cells2_market_price_color_show" class="rainbowbtn"/>
                  </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="paramslarge_picture_width-lbl" for="cell_new_picture_width">Image Width</label></span>
                    </td>
                    <td class="paramlist_value"><input type="text" name="params[cell_new_picture_width]"
                                                       id="cell_new_picture_width" value="<?php
                        echo $param_values['cell_new_picture_width'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="paramslarge_picture_height-lbl" for="cell_new_picture_height">Image
                                Height</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[cell_new_picture_height]"
                                                       id="cell_new_picture_height" value="<?php
                        echo $param_values['cell_new_picture_height'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstext_size_big-lbl"
                                                                                           for="cell_new_text_size">Text
                                Size</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[cell_new_text_size]" id="cell_new_text_size"
                                                       value="<?php
                                                       echo $param_values['cell_new_text_size'];
                                                       ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstext_size_big-lbl"
                                                                                           for="new_cell_all_width">New Cell
                                Width</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[new_cell_all_width]" id="new_cell_all_width"
                                                       value="<?php
                                                       echo $param_values['new_cell_all_width'];
                                                       ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstext_size_big-lbl"
                                                                                           for="new_cell_all_height">New
                                Cell Height</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[new_cell_all_height]"
                                                       id="new_cell_all_height" value="<?php
                        echo $param_values['new_cell_all_height'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="cells2_cell_background_color-lbl" for="cells2_cell_background_color">Cell Background Color</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[cells2_cell_background_color]" type="text" class="inputbox" id="cells2_cell_background_color" value="<?php echo $param_values['cells2_cell_background_color']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['cells2_cell_background_color']; ?>" readonly="readonly" size="1" id="cells2_cell_background_color_show" class="rainbowbtn"/>
                  </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="cell_new_text_color-lbl" for="cell_new_text_color">Text Color</label></span></td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[cell_new_text_color]" type="text" class="inputbox"
                                   id="cell_new_text_color" value="<?php
                            echo $param_values['cell_new_text_color'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['cell_new_text_color'];
                            ?>" readonly="readonly" size="1" id="cell_new_text_color_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="cell_new_text_back_color_1-lbl" for="cell_new_text_back_color_1">Text Background Color
                                1</label></span></td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[cell_new_text_back_color_1]" type="text" class="inputbox"
                                   id="cell_new_text_back_color_1" value="<?php
                            echo $param_values['cell_new_text_back_color_1'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['cell_new_text_back_color_1'];
                            ?>" readonly="readonly" size="1" id="cell_new_text_back_color_1_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="cell_new_text_back_color_2-lbl" for="cell_new_text_back_color_2">Text Background Color
                                2</label></span></td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[cell_new_text_back_color_2]" type="text" class="inputbox"
                                   id="cell_new_text_back_color_2" value="<?php
                            echo $param_values['cell_new_text_back_color_2'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['cell_new_text_back_color_2'];
                            ?>" readonly="readonly" size="1" id="cell_new_text_back_color_2_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstext_size_big-lbl"
                                                                                           for="new_cell_more_font_size">More
                                Size</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[new_cell_more_font_size]"
                                                       id="new_cell_more_font_size" value="<?php
                        echo $param_values['new_cell_more_font_size'];
                        ?>" class="text_area"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="cell_new_more_font_color-lbl" for="cell_new_more_font_color">More text
                                Color</label></span></td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[cell_new_more_font_color]" type="text" class="inputbox"
                                   id="cell_new_more_font_color" value="<?php
                            echo $param_values['cell_new_more_font_color'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['cell_new_more_font_color'];
                            ?>" readonly="readonly" size="1" id="cell_new_more_font_color_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="cell_new_more_background_color-lbl" for="cell_new_more_background_color">More Background Color</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[cell_new_more_background_color]" type="text" class="inputbox" id="cell_new_more_background_color" value="<?php echo $param_values['cell_new_more_background_color']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['cell_new_more_background_color']; ?>" readonly="readonly" size="1" id="cell_new_more_background_color_show" class="rainbowbtn"/>
                  </td>
                </tr>
            </table>
        </fieldset>

        <fieldset style="border:2px groove; display: none;" id="fieldset_6">
            <legend>Wide Cells Page Options</legend>
            <table style="width:48%;float:left;" class="paramlist admintable" cellspacing="1">
            
            
            
              <tr>
                <td width="40%" class="paramlist_key">
                  <span class="editlinktip"><label id="params_wcells_background_color-lbl" for="params_wcells_background_color">Background Color</label></span>
                </td>
                <td class="paramlist_value">
                  <input name="params[wcells_background_color]" type="text" class="inputbox" id="params_wcells_background_color" value="<?php echo $param_values['wcells_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_background_color']; ?>" readonly="readonly" size="1" id="params_wcells_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>          
              <tr>
                <?php
                  $check0 = "";
                  $check1 = "";
                  $check2 = "";
                  $check3 = "";
                  $check4 = "";
                  $check5 = "";
                  $check6 = "";
                  $check7 = "";
                  if ($param_values['wcells_border_style'] == 'solid')
                      $check0 = '  selected="selected"  ';
                  if ($param_values['wcells_border_style'] == 'double')
                      $check1 = '  selected="selected"';
                  if ($param_values['wcells_border_style'] == 'dashed')
                      $check2 = '  selected="selected"  ';
                  if ($param_values['wcells_border_style'] == 'dotted')
                      $check3 = '  selected="selected"';
                  if ($param_values['wcells_border_style'] == 'groove')
                      $check4 = '  selected="selected"  ';
                  if ($param_values['wcells_border_style'] == 'inset')
                      $check5 = '  selected="selected"';
                  if ($param_values['wcells_border_style'] == 'outset')
                      $check6 = '  selected="selected"  ';
                  if ($param_values['wcells_border_style'] == 'ridge')
                      $check7 = '  selected="selected"';
                ?>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_border_style-lbl" for="paramswcells_border_style">Border Style</label></span>
                </td>
                <td class="paramlist_value">
                  <select name="params[wcells_border_style]" id="paramswcells_border_style" class="inputbox">
                    <option value="solid"  <?php echo $check0; ?> >solid</option>
                    <option value="double" <?php echo $check1; ?> >double</option>
                    <option value="dashed" <?php echo $check2; ?> >dashed</option>
                    <option value="dotted" <?php echo $check3; ?> >dotted</option>
                    <option value="groove" <?php echo $check4; ?> >groove</option>
                    <option value="inset"  <?php echo $check5; ?> >inset</option>
                    <option value="outset" <?php echo $check6; ?> >outset</option>
                    <option value="ridge"  <?php echo $check7; ?> >ridge</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_border_width-lbl" for="paramswcells_border_width">Border Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[wcells_border_width]" id="paramswcells_border_width" value="<?php echo $param_values['wcells_border_width']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_border_color-lbl" for="paramswcells_border_color">Border Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[wcells_border_color]" type="text" class="inputbox" id="paramswcells_border_color" value="<?php echo $param_values['wcells_border_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_border_color']; ?>" readonly="readonly" size="1" id="paramswcells_border_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_text_color-lbl" for="paramswcells_text_color">Text Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[wcells_text_color]" type="text" class="inputbox" id="paramswcells_text_color" value="<?php echo $param_values['wcells_text_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_text_color']; ?>" readonly="readonly" size="1" id="paramswcells_text_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_button_color-lbl" for="paramswcells_button_color">Category Title Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[wcells_button_color]" type="text" class="inputbox" id="paramswcells_button_color" value="<?php echo $param_values['wcells_button_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_button_color']; ?>" readonly="readonly" size="1" id="paramswcells_button_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_button_background_color-lbl" for="paramswcells_button_background_color">Category Title Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[wcells_button_background_color]" type="text" class="inputbox" id="paramswcells_button_background_color" value="<?php echo $param_values['wcells_button_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_button_background_color']; ?>" readonly="readonly" size="1" id="paramswcells_button_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_category_picture_width-lbl" for="paramswcells_category_picture_width">Category Image Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[wcells_category_picture_width]" id="paramswcells_category_picture_width" value="<?php echo $param_values['wcells_category_picture_width']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_category_picture_height-lbl" for="paramswcells_category_picture_height">Category Image Height</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[wcells_category_picture_height]" id="paramswcells_category_picture_height" value="<?php echo $param_values['wcells_category_picture_height']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsswcells_category_title_size-lbl" for="paramswcells_category_title_size">Category Title Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[wcells_category_title_size]" id="paramswcells_category_title_size" value="<?php echo $param_values['wcells_category_title_size']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_list_picture_width-lbl" for="paramswcells_list_picture_width">Subcategories List Image Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[wcells_list_picture_width]" id="paramswcells_list_picture_width" value="<?php echo $param_values['wcells_list_picture_width']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_list_picture_height-lbl" for="paramswcells_list_picture_height">Subcategories List Image Height</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[wcells_list_picture_height]" id="paramswcells_list_picture_height" value="<?php echo $param_values['wcells_list_picture_height']; ?>" class="text_area"/></td>
              </tr>              
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_hyperlink_color-lbl" for="paramswcells_hyperlink_color">Hyperlink Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[wcells_hyperlink_color]" type="text" class="inputbox" id="paramswcells_hyperlink_color" value="<?php echo $param_values['wcells_hyperlink_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_hyperlink_color']; ?>" readonly="readonly" size="1" id="paramswcells_hyperlink_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_button_background_color-lbl" for="wcells_search_icon_color">Search Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[wcells_search_icon_color]" type="text" class="inputbox" id="wcells_search_icon_color" value="<?php echo $param_values['wcells_search_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_search_icon_color']; ?>" readonly="readonly" size="1" id="wcells_search_icon_color_show" class="rainbowbtn"/>
                  <div id="wcells_search-submit" style="background-image:url('<?php echo $path_site; ?>/search-icon.png'); background-color:<?php echo $param_values['wcells_search_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_button_background_color-lbl" for="wcells_reset_icon_color">Reset Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[wcells_reset_icon_color]" type="text" class="inputbox" id="wcells_reset_icon_color" value="<?php echo $param_values['wcells_reset_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_reset_icon_color']; ?>" readonly="readonly" size="1" id="wcells_reset_icon_color_show" class="rainbowbtn"/>
                  <div id="wcells_search-submit" style="background-image:url('<?php echo $path_site; ?>/search-reset.png'); background-color:<?php echo $param_values['wcells_reset_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_button_background_color-lbl" for="wcells_select_icon_color">Select Category Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[wcells_select_icon_color]" type="text" class="inputbox" id="wcells_select_icon_color" value="<?php echo $param_values['wcells_select_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_select_icon_color']; ?>" readonly="readonly" size="1" id="wcells_select_icon_color_show" class="rainbowbtn"/>
                  <div id="wcells_search-submit" style="background-image:url('<?php echo $path_site; ?>/selectcat.png'); background-color:<?php echo $param_values['wcells_reset_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_rating_star-lbl" >Rating Star Design</label></span></td>
                <td class="paramlist_value">
                  <?php
                    $check0 = "";
                    $check1 = "";
                    $check2 = "";
                    $check3 = "";
                    $check4 = "";
                    if ($param_values['wcells_rating_star'] == 1)
                        $check0 = ' checked="checked" ';
                    if ($param_values['wcells_rating_star'] == 2)
                        $check1 = ' checked="checked" ';
                    if ($param_values['wcells_rating_star'] == 3)
                        $check2 = ' checked="checked" ';
                    if ($param_values['wcells_rating_star'] == 4)
                        $check3 = ' checked="checked" ';
                    if ($param_values['wcells_rating_star'] == 5)
                        $check4 = ' checked="checked" ';
                  ?>
                  <table cellpadding="0" cellspacing="10" border="0" style="text-align: center;">
                    <tr>
                      <td>
                        <label>
                            <img src="<?php echo $path_site; ?>/star1.png" alt="star1"/><br/>
                            <input name="params[wcells_rating_star]" type="radio" class="inputbox" id="paramswcells_rating_star" value="1" size="10" <?php echo $check0; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star2.png" alt="star2"/><br/>
                          <input name="params[wcells_rating_star]" type="radio" class="inputbox" id="paramswcells_rating_star" value="2" size="10" <?php echo $check1; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star3.png" alt="star3"/><br/>
                          <input name="params[wcells_rating_star]" type="radio" class="inputbox" id="paramswcells_rating_star" value="3" size="10" <?php echo $check2; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star4.png" alt="star4"/><br/>
                          <input name="params[wcells_rating_star]" type="radio" class="inputbox" id="paramswcells_rating_star" value="4" size="10" <?php echo $check3; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star5.png" alt="star5"/><br/>
                          <input name="params[wcells_rating_star]" type="radio" class="inputbox" id="paramswcells_rating_star" value="5" size="10"  <?php echo $check4; ?> />
                        </label>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              

            </table>
            <table style="width:48%;float:left;" class="paramlist admintable" cellspacing="1">
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_count_of_products_in_the_page-lbl" for="paramswcells_count_of_products_in_the_page">Number of Products in the page</label></span></td>
                <td class="paramwcells_count_of_products_in_the_page"><input type="text" name="params[wcells_count_of_products_in_the_page]" id="paramswcells_count_of_products_in_the_page" value="<?php echo $param_values['wcells_count_of_products_in_the_page']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_categories_row_color1-lbl" for="paramswcells_categories_row_color1">Categories Background Color 1</label></span></td>
                <td class="paramlist_value">
                  <input name="params[wcells_categories_row_color1]" type="text" class="inputbox" id="paramswcells_categories_row_color1" value="<?php echo $param_values['wcells_categories_row_color1']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_categories_row_color1']; ?>" readonly="readonly" size="1" id="paramswcells_categories_row_color1_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_categories_row_color2-lbl" for="paramswcells_categories_row_color2">Categories Background Color 2</label></span></td>
                <td class="paramlist_value">
                  <input name="params[wcells_categories_row_color2]" type="text" class="inputbox" id="paramswcells_categories_row_color2" value="<?php echo $param_values['wcells_categories_row_color2']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_categories_row_color2']; ?>" readonly="readonly" size="1" id="paramswcells_categories_row_color2_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_categories_header_background_color-lbl" for="paramswcells_categories_header_background_color">Categories Header Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[wcells_categories_header_background_color]" type="text" class="inputbox" id="paramswcells_categories_header_background_color" value="<?php echo $param_values['wcells_categories_header_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_categories_header_background_color']; ?>" readonly="readonly" size="1" id="paramswcells_categories_header_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_categories_header_color-lbl" for="paramswcells_categories_header_color">Categories Header Text Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[wcells_categories_header_color]" type="text" class="inputbox" id="paramswcells_categories_header_color" value="<?php echo $param_values['wcells_categories_header_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_categories_header_color']; ?>" readonly="readonly" size="1" id="paramswcells_categories_header_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="wcells_cell_background_color-lbl" for="wcells_cell_background_color">Cell Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[wcells_cell_background_color]" type="text" class="inputbox" id="wcells_cell_background_color" value="<?php echo $param_values['wcells_cell_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['wcells_cell_background_color']; ?>" readonly="readonly" size="1" id="wcells_cell_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
            
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="paramslarge_picture_width-lbl" for="single_cell_title_size">Title Size</label></span>
                    </td>
                    <td class="paramlist_value"><input type="text" name="params[single_cell_title_size]"
                                                       id="single_cell_title_size" value="<?php
                        echo $param_values['single_cell_title_size'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="single_cell_title_color-lbl" for="single_cell_title_color">Title Color</label></span>
                    </td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[single_cell_title_color]" type="text" class="inputbox"
                                   id="single_cell_title_color" value="<?php
                            echo $param_values['single_cell_title_color'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['single_cell_title_color'];
                            ?>" readonly="readonly" size="1" id="single_cell_title_color_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramswcells_price_size-lbl" for="wcells_price_size">Price Size</label></span></td>
                  <td class="paramlist_value"><input type="text" name="params[wcells_price_size]" id="wcells_price_size" value="<?php echo $param_values['wcells_price_size']; ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="wcells_price_color-lbl" for="wcells_price_color">Price Color</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[wcells_price_color]" type="text" class="inputbox" id="wcells_price_color" value="<?php echo $param_values['wcells_price_color']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['wcells_price_color']; ?>" readonly="readonly" size="1" id="wcells_price_color_show" class="rainbowbtn"/>
                  </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsprice_size_big-lbl"
                                                                                           for="single_cell_font_1_size">Text
                                1 Size</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[single_cell_font_1_size]"
                                                       id="single_cell_font_1_size" value="<?php
                        echo $param_values['single_cell_font_1_size'];
                        ?>" class="text_area"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsprice_size_big-lbl"
                                                                                           for="single_cell_font_2_size">Text
                                2 Size</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[single_cell_font_2_size]"
                                                       id="single_cell_font_2_size" value="<?php
                        echo $param_values['single_cell_font_2_size'];
                        ?>" class="text_area"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="single_cell_text_color_1-lbl" for="single_cell_text_color_1">Parameter Text Color
                                1</label></span></td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[single_cell_text_color_1]" type="text" class="inputbox"
                                   id="single_cell_text_color_1" value="<?php
                            echo $param_values['single_cell_text_color_1'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['single_cell_text_color_1'];
                            ?>" readonly="readonly" size="1" id="single_cell_text_color_1_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="single_cell_text_color_2-lbl" for="single_cell_text_color_2">Parameter Text Color
                                2</label></span></td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[single_cell_text_color_2]" type="text" class="inputbox"
                                   id="single_cell_text_color_2" value="<?php
                            echo $param_values['single_cell_text_color_2'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['single_cell_text_color_2'];
                            ?>" readonly="readonly" size="1" id="single_cell_text_color_2_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="single_cell_background_color_1-lbl" for="single_cell_background_color_1">Parameter
                                Background Color 1</label></span></td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[single_cell_background_color_1]" type="text" class="inputbox"
                                   id="single_cell_background_color_1" value="<?php
                            echo $param_values['single_cell_background_color_1'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['single_cell_background_color_1'];
                            ?>" readonly="readonly" size="1" id="single_cell_background_color_1_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="single_cell_background_color_2-lbl" for="single_cell_background_color_2">Parameter
                                Background Color 2</label></span></td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[single_cell_background_color_2]" type="text" class="inputbox"
                                   id="single_cell_background_color_2" value="<?php
                            echo $param_values['single_cell_background_color_2'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['single_cell_background_color_2'];
                            ?>" readonly="readonly" size="1" id="single_cell_background_color_2_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="paramslarge_picture_width-lbl" for="single_cell_picture_width">Image
                                Width</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[single_cell_picture_width]"
                                                       id="single_cell_picture_width" value="<?php
                        echo $param_values['single_cell_picture_width'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="paramslarge_picture_height-lbl" for="single_cell_picture_height">Image
                                Height</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[single_cell_picture_height]"
                                                       id="single_cell_picture_height" value="<?php
                        echo $param_values['single_cell_picture_height'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="wcells_more_font_color-lbl" for="wcells_more_font_color">More Text Color</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[wcells_more_font_color]" type="text" class="inputbox" id="wcells_more_font_color" value="<?php echo $param_values['wcells_more_font_color']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['wcells_more_font_color']; ?>" readonly="readonly" size="1" id="wcells_more_font_color_show" class="rainbowbtn"/>
                  </td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="wcells_more_background_color-lbl" for="wcells_more_background_color">More Background Color</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[wcells_more_background_color]" type="text" class="inputbox" id="wcells_more_background_color" value="<?php echo $param_values['wcells_more_background_color']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['wcells_more_background_color']; ?>" readonly="readonly" size="1" id="wcells_more_background_color_show" class="rainbowbtn"/>
                  </td>
                </tr>
            </table>
        </fieldset>

        <fieldset style="border:2px groove; display: none;" id="fieldset_7">
            <legend>Thumbnails Page Options</legend>
            <table style="width:48%;float:left;" class="paramlist admintable" cellspacing="1">
            
            
            
              <tr>
                <td width="40%" class="paramlist_key">
                  <span class="editlinktip"><label id="params_thumb_background_color-lbl" for="params_thumb_background_color">Background Color</label></span>
                </td>
                <td class="paramlist_value">
                  <input name="params[thumb_background_color]" type="text" class="inputbox" id="params_thumb_background_color" value="<?php echo $param_values['thumb_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['thumb_background_color']; ?>" readonly="readonly" size="1" id="params_thumb_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>          
              <tr>
                <?php
                  $check0 = "";
                  $check1 = "";
                  $check2 = "";
                  $check3 = "";
                  $check4 = "";
                  $check5 = "";
                  $check6 = "";
                  $check7 = "";
                  if ($param_values['thumb_border_style'] == 'solid')
                      $check0 = '  selected="selected"  ';
                  if ($param_values['thumb_border_style'] == 'double')
                      $check1 = '  selected="selected"';
                  if ($param_values['thumb_border_style'] == 'dashed')
                      $check2 = '  selected="selected"  ';
                  if ($param_values['thumb_border_style'] == 'dotted')
                      $check3 = '  selected="selected"';
                  if ($param_values['thumb_border_style'] == 'groove')
                      $check4 = '  selected="selected"  ';
                  if ($param_values['thumb_border_style'] == 'inset')
                      $check5 = '  selected="selected"';
                  if ($param_values['thumb_border_style'] == 'outset')
                      $check6 = '  selected="selected"  ';
                  if ($param_values['thumb_border_style'] == 'ridge')
                      $check7 = '  selected="selected"';
                ?>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_border_style-lbl" for="paramsthumb_border_style">Border Style</label></span>
                </td>
                <td class="paramlist_value">
                  <select name="params[thumb_border_style]" id="paramsthumb_border_style" class="inputbox">
                    <option value="solid"  <?php echo $check0; ?> >solid</option>
                    <option value="double" <?php echo $check1; ?> >double</option>
                    <option value="dashed" <?php echo $check2; ?> >dashed</option>
                    <option value="dotted" <?php echo $check3; ?> >dotted</option>
                    <option value="groove" <?php echo $check4; ?> >groove</option>
                    <option value="inset"  <?php echo $check5; ?> >inset</option>
                    <option value="outset" <?php echo $check6; ?> >outset</option>
                    <option value="ridge"  <?php echo $check7; ?> >ridge</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_border_width-lbl" for="paramsthumb_border_width">Border Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[thumb_border_width]" id="paramsthumb_border_width" value="<?php echo $param_values['thumb_border_width']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_border_color-lbl" for="paramsthumb_border_color">Border Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[thumb_border_color]" type="text" class="inputbox" id="paramsthumb_border_color" value="<?php echo $param_values['thumb_border_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['thumb_border_color']; ?>" readonly="readonly" size="1" id="paramsthumb_border_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_text_color-lbl" for="paramsthumb_text_color">Text Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[thumb_text_color]" type="text" class="inputbox" id="paramsthumb_text_color" value="<?php echo $param_values['thumb_text_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['thumb_text_color']; ?>" readonly="readonly" size="1" id="paramsthumb_text_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_button_color-lbl" for="paramsthumb_button_color">Category Title Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[thumb_button_color]" type="text" class="inputbox" id="paramsthumb_button_color" value="<?php echo $param_values['thumb_button_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['thumb_button_color']; ?>" readonly="readonly" size="1" id="paramsthumb_button_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_button_background_color-lbl" for="paramsthumb_button_background_color">Category Title Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[thumb_button_background_color]" type="text" class="inputbox" id="paramsthumb_button_background_color" value="<?php echo $param_values['thumb_button_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['thumb_button_background_color']; ?>" readonly="readonly" size="1" id="paramsthumb_button_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_category_picture_width-lbl" for="paramsthumb_category_picture_width">Category Image Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[thumb_category_picture_width]" id="paramsthumb_category_picture_width" value="<?php echo $param_values['thumb_category_picture_width']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_category_picture_height-lbl" for="paramsthumb_category_picture_height">Category Image Height</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[thumb_category_picture_height]" id="paramsthumb_category_picture_height" value="<?php echo $param_values['thumb_category_picture_height']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramssthumb_category_title_size-lbl" for="paramsthumb_category_title_size">Category Title Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[thumb_category_title_size]" id="paramsthumb_category_title_size" value="<?php echo $param_values['thumb_category_title_size']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_list_picture_width-lbl" for="paramsthumb_list_picture_width">Subcategories List Image Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[thumb_list_picture_width]" id="paramsthumb_list_picture_width" value="<?php echo $param_values['thumb_list_picture_width']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_list_picture_height-lbl" for="paramsthumb_list_picture_height">Subcategories List Image Height</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[thumb_list_picture_height]" id="paramsthumb_list_picture_height" value="<?php echo $param_values['thumb_list_picture_height']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_hyperlink_color-lbl" for="paramsthumb_hyperlink_color">Hyperlink Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[thumb_hyperlink_color]" type="text" class="inputbox" id="paramsthumb_hyperlink_color" value="<?php echo $param_values['thumb_hyperlink_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['thumb_hyperlink_color']; ?>" readonly="readonly" size="1" id="paramsthumb_hyperlink_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_button_background_color-lbl" for="thumb_search_icon_color">Search Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[thumb_search_icon_color]" type="text" class="inputbox" id="thumb_search_icon_color" value="<?php echo $param_values['thumb_search_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['thumb_search_icon_color']; ?>" readonly="readonly" size="1" id="thumb_search_icon_color_show" class="rainbowbtn"/>
                  <div id="thumb_search-submit" style="background-image:url('<?php echo $path_site; ?>/search-icon.png'); background-color:<?php echo $param_values['thumb_search_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_button_background_color-lbl" for="thumb_reset_icon_color">Reset Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[thumb_reset_icon_color]" type="text" class="inputbox" id="thumb_reset_icon_color" value="<?php echo $param_values['thumb_reset_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['thumb_reset_icon_color']; ?>" readonly="readonly" size="1" id="thumb_reset_icon_color_show" class="rainbowbtn"/>
                  <div id="thumb_search-submit" style="background-image:url('<?php echo $path_site; ?>/search-reset.png'); background-color:<?php echo $param_values['thumb_reset_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_button_background_color-lbl" for="thumb_select_icon_color">Select Category Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[thumb_select_icon_color]" type="text" class="inputbox" id="thumb_select_icon_color" value="<?php echo $param_values['thumb_select_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['thumb_select_icon_color']; ?>" readonly="readonly" size="1" id="thumb_select_icon_color_show" class="rainbowbtn"/>
                  <div id="thumb_search-submit" style="background-image:url('<?php echo $path_site; ?>/selectcat.png'); background-color:<?php echo $param_values['thumb_reset_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_rating_star-lbl" >Rating Star Design</label></span></td>
                <td class="paramlist_value">
                  <?php
                    $check0 = "";
                    $check1 = "";
                    $check2 = "";
                    $check3 = "";
                    $check4 = "";
                    if ($param_values['thumb_rating_star'] == 1)
                        $check0 = ' checked="checked" ';
                    if ($param_values['thumb_rating_star'] == 2)
                        $check1 = ' checked="checked" ';
                    if ($param_values['thumb_rating_star'] == 3)
                        $check2 = ' checked="checked" ';
                    if ($param_values['thumb_rating_star'] == 4)
                        $check3 = ' checked="checked" ';
                    if ($param_values['thumb_rating_star'] == 5)
                        $check4 = ' checked="checked" ';
                  ?>
                  <table cellpadding="0" cellspacing="10" border="0" style="text-align: center;">
                    <tr>
                      <td>
                        <label>
                            <img src="<?php echo $path_site; ?>/star1.png" alt="star1"/><br/>
                            <input name="params[thumb_rating_star]" type="radio" class="inputbox" id="paramsthumb_rating_star" value="1" size="10" <?php echo $check0; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star2.png" alt="star2"/><br/>
                          <input name="params[thumb_rating_star]" type="radio" class="inputbox" id="paramsthumb_rating_star" value="2" size="10" <?php echo $check1; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star3.png" alt="star3"/><br/>
                          <input name="params[thumb_rating_star]" type="radio" class="inputbox" id="paramsthumb_rating_star" value="3" size="10" <?php echo $check2; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star4.png" alt="star4"/><br/>
                          <input name="params[thumb_rating_star]" type="radio" class="inputbox" id="paramsthumb_rating_star" value="4" size="10" <?php echo $check3; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star5.png" alt="star5"/><br/>
                          <input name="params[thumb_rating_star]" type="radio" class="inputbox" id="paramsthumb_rating_star" value="5" size="10"  <?php echo $check4; ?> />
                        </label>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              

            </table>
            
            <table style="width:48%;float:left;" class="paramlist admintable" cellspacing="1">
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_count_of_product_in_the_row-lbl" for="paramsthumb_count_of_product_in_the_row">Number of Products in the Row</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[thumb_count_of_product_in_the_row]" id="paramsthumb_count_of_product_in_the_row" value="<?php echo $param_values['thumb_count_of_product_in_the_row']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_count_of_rows_in_the_page-lbl" for="paramsthumb_count_of_rows_in_the_page">Number of Rows in the Page</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[thumb_count_of_rows_in_the_page]" id="paramsthumb_count_of_rows_in_the_page" value="<?php echo $param_values['thumb_count_of_rows_in_the_page']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_categories_row_color1-lbl" for="paramsthumb_categories_row_color1">Categories Background Color 1</label></span></td>
                <td class="paramlist_value">
                  <input name="params[thumb_categories_row_color1]" type="text" class="inputbox" id="paramsthumb_categories_row_color1" value="<?php echo $param_values['thumb_categories_row_color1']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['thumb_categories_row_color1']; ?>" readonly="readonly" size="1" id="paramsthumb_categories_row_color1_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_categories_row_color2-lbl" for="paramsthumb_categories_row_color2">Categories Background Color 2</label></span></td>
                <td class="paramlist_value">
                  <input name="params[thumb_categories_row_color2]" type="text" class="inputbox" id="paramsthumb_categories_row_color2" value="<?php echo $param_values['thumb_categories_row_color2']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['thumb_categories_row_color2']; ?>" readonly="readonly" size="1" id="paramsthumb_categories_row_color2_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_categories_header_background_color-lbl" for="paramsthumb_categories_header_background_color">Categories Header Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[thumb_categories_header_background_color]" type="text" class="inputbox" id="paramsthumb_categories_header_background_color" value="<?php echo $param_values['thumb_categories_header_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['thumb_categories_header_background_color']; ?>" readonly="readonly" size="1" id="paramsthumb_categories_header_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsthumb_categories_header_color-lbl" for="paramsthumb_categories_header_color">Categories Header Text Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[thumb_categories_header_color]" type="text" class="inputbox" id="paramsthumb_categories_header_color" value="<?php echo $param_values['thumb_categories_header_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['thumb_categories_header_color']; ?>" readonly="readonly" size="1" id="paramsthumb_categories_header_color_show" class="rainbowbtn"/>
                </td>
              </tr>
            
            
            
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="paramslarge_picture_width-lbl" for="cell_tumble_title_size">Title Size</label></span>
                    </td>
                    <td class="paramlist_value"><input type="text" name="params[cell_tumble_title_size]"
                                                       id="cell_tumble_title_size" value="<?php
                        echo $param_values['cell_tumble_title_size'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="cell_tumble_title_font_color-lbl" for="cell_tumble_title_font_color">Title Color</label></span>
                    </td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[cell_tumble_title_font_color]" type="text" class="inputbox"
                                   id="cell_tumble_title_font_color" value="<?php
                            echo $param_values['cell_tumble_title_font_color'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['cell_tumble_title_font_color'];
                            ?>" readonly="readonly" size="1" id="cell_tumble_title_font_color_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsprice_size_big-lbl"
                                                                                           for="cell_tumble_price_size">Price
                                Size</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[cell_tumble_price_size]"
                                                       id="cell_tumble_price_size" value="<?php
                        echo $param_values['cell_tumble_price_size'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="cell_tumble_price_text_color-lbl" for="cell_tumble_price_text_color">Price Text
                                Color</label></span></td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[cell_tumble_price_text_color]" type="text" class="inputbox"
                                   id="cell_tumble_price_text_color" value="<?php
                            echo $param_values['cell_tumble_price_text_color'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['cell_tumble_price_text_color'];
                            ?>" readonly="readonly" size="1" id="cell_tumble_price_text_color_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="paramslarge_picture_width-lbl" for="cell_tumble_picture_width">Image
                                Width</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[cell_tumble_picture_width]"
                                                       id="cell_tumble_picture_width" value="<?php
                        echo $param_values['cell_tumble_picture_width'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="paramslarge_picture_height-lbl" for="cell_tumble_picture_height">Image
                                Height</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[cell_tumble_picture_height]"
                                                       id="cell_tumble_picture_height" value="<?php
                        echo $param_values['cell_tumble_picture_height'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstext_size_big-lbl"
                                                                                           for="cell_tumble_text_size">Text
                                Size</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[cell_tumble_text_size]"
                                                       id="cell_tumble_text_size" value="<?php
                        echo $param_values['cell_tumble_text_size'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="cell_tumble_text_color-lbl" for="cell_tumble_text_color">Text Color</label></span></td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[cell_tumble_text_color]" type="text" class="inputbox"
                                   id="cell_tumble_text_color" value="<?php
                            echo $param_values['cell_tumble_text_color'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['cell_tumble_text_color'];
                            ?>" readonly="readonly" size="1" id="cell_tumble_text_color_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstext_size_big-lbl"
                                                                                           for="cell_tumble_all_width">Cell
                                Thumbnail Width</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[cell_tumble_all_width]"
                                                       id="cell_tumble_all_width" value="<?php
                        echo $param_values['cell_tumble_all_width'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstext_size_big-lbl"
                                                                                           for="cell_tumble_all_height">Cell
                                Thumbnail Height</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[cell_tumble_all_height]"
                                                       id="cell_tumble_all_height" value="<?php
                        echo $param_values['cell_tumble_all_height'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="thumb_cell_background_color-lbl" for="thumb_cell_background_color">Cell Background Color</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[thumb_cell_background_color]" type="text" class="inputbox" id="thumb_cell_background_color" value="<?php echo $param_values['thumb_cell_background_color']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['thumb_cell_background_color']; ?>" readonly="readonly" size="1" id="thumb_cell_background_color_show" class="rainbowbtn"/>
                  </td>
                </tr>
            </table>
        </fieldset>

        <fieldset style="border:2px groove; display: none;" id="fieldset_8">
            <legend>Cells 3 Page Options</legend>
            <table style="width:48%;float:left;" class="paramlist admintable" cellspacing="1">
            
            
              <tr>
                <td width="40%" class="paramlist_key">
                  <span class="editlinktip"><label id="params_cells3_background_color-lbl" for="params_cells3_background_color">Background Color</label></span>
                </td>
                <td class="paramlist_value">
                  <input name="params[cells3_background_color]" type="text" class="inputbox" id="params_cells3_background_color" value="<?php echo $param_values['cells3_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells3_background_color']; ?>" readonly="readonly" size="1" id="params_cells3_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>          
              <tr>
                <?php
                  $check0 = "";
                  $check1 = "";
                  $check2 = "";
                  $check3 = "";
                  $check4 = "";
                  $check5 = "";
                  $check6 = "";
                  $check7 = "";
                  if ($param_values['cells3_border_style'] == 'solid')
                      $check0 = '  selected="selected"  ';
                  if ($param_values['cells3_border_style'] == 'double')
                      $check1 = '  selected="selected"';
                  if ($param_values['cells3_border_style'] == 'dashed')
                      $check2 = '  selected="selected"  ';
                  if ($param_values['cells3_border_style'] == 'dotted')
                      $check3 = '  selected="selected"';
                  if ($param_values['cells3_border_style'] == 'groove')
                      $check4 = '  selected="selected"  ';
                  if ($param_values['cells3_border_style'] == 'inset')
                      $check5 = '  selected="selected"';
                  if ($param_values['cells3_border_style'] == 'outset')
                      $check6 = '  selected="selected"  ';
                  if ($param_values['cells3_border_style'] == 'ridge')
                      $check7 = '  selected="selected"';
                ?>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_border_style-lbl" for="paramscells3_border_style">Border Style</label></span>
                </td>
                <td class="paramlist_value">
                  <select name="params[cells3_border_style]" id="paramscells3_border_style" class="inputbox">
                    <option value="solid"  <?php echo $check0; ?> >solid</option>
                    <option value="double" <?php echo $check1; ?> >double</option>
                    <option value="dashed" <?php echo $check2; ?> >dashed</option>
                    <option value="dotted" <?php echo $check3; ?> >dotted</option>
                    <option value="groove" <?php echo $check4; ?> >groove</option>
                    <option value="inset"  <?php echo $check5; ?> >inset</option>
                    <option value="outset" <?php echo $check6; ?> >outset</option>
                    <option value="ridge"  <?php echo $check7; ?> >ridge</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_border_width-lbl" for="paramscells3_border_width">Border Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells3_border_width]" id="paramscells3_border_width" value="<?php echo $param_values['cells3_border_width']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_border_color-lbl" for="paramscells3_border_color">Border Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells3_border_color]" type="text" class="inputbox" id="paramscells3_border_color" value="<?php echo $param_values['cells3_border_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells3_border_color']; ?>" readonly="readonly" size="1" id="paramscells3_border_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_text_color-lbl" for="paramscells3_text_color">Text Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells3_text_color]" type="text" class="inputbox" id="paramscells3_text_color" value="<?php echo $param_values['cells3_text_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells3_text_color']; ?>" readonly="readonly" size="1" id="paramscells3_text_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_button_color-lbl" for="paramscells3_button_color">Category Title Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells3_button_color]" type="text" class="inputbox" id="paramscells3_button_color" value="<?php echo $param_values['cells3_button_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells3_button_color']; ?>" readonly="readonly" size="1" id="paramscells3_button_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_button_background_color-lbl" for="paramscells3_button_background_color">Category Title Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells3_button_background_color]" type="text" class="inputbox" id="paramscells3_button_background_color" value="<?php echo $param_values['cells3_button_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells3_button_background_color']; ?>" readonly="readonly" size="1" id="paramscells3_button_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_category_picture_width-lbl" for="paramscells3_category_picture_width">Category Image Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells3_category_picture_width]" id="paramscells3_category_picture_width" value="<?php echo $param_values['cells3_category_picture_width']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_category_picture_height-lbl" for="paramscells3_category_picture_height">Category Image Height</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells3_category_picture_height]" id="paramscells3_category_picture_height" value="<?php echo $param_values['cells3_category_picture_height']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsscells3_category_title_size-lbl" for="paramscells3_category_title_size">Category Title Size</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells3_category_title_size]" id="paramscells3_category_title_size" value="<?php echo $param_values['cells3_category_title_size']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_list_picture_width-lbl" for="paramscells3_list_picture_width">Subcategories List Image Width</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells3_list_picture_width]" id="paramscells3_list_picture_width" value="<?php echo $param_values['cells3_list_picture_width']; ?>" class="text_area"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_list_picture_height-lbl" for="paramscells3_list_picture_height">Subcategories List Image Height</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells3_list_picture_height]" id="paramscells3_list_picture_height" value="<?php echo $param_values['cells3_list_picture_height']; ?>" class="text_area"/></td>
              </tr>              
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_hyperlink_color-lbl" for="paramscells3_hyperlink_color">Hyperlink Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells3_hyperlink_color]" type="text" class="inputbox" id="paramscells3_hyperlink_color" value="<?php echo $param_values['cells3_hyperlink_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells3_hyperlink_color']; ?>" readonly="readonly" size="1" id="paramscells3_hyperlink_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_button_background_color-lbl" for="cells3_search_icon_color">Search Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells3_search_icon_color]" type="text" class="inputbox" id="cells3_search_icon_color" value="<?php echo $param_values['cells3_search_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells3_search_icon_color']; ?>" readonly="readonly" size="1" id="cells3_search_icon_color_show" class="rainbowbtn"/>
                  <div id="cells3_search-submit" style="background-image:url('<?php echo $path_site; ?>/search-icon.png'); background-color:<?php echo $param_values['cells3_search_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_button_background_color-lbl" for="cells3_reset_icon_color">Reset Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells3_reset_icon_color]" type="text" class="inputbox" id="cells3_reset_icon_color" value="<?php echo $param_values['cells3_reset_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells3_reset_icon_color']; ?>" readonly="readonly" size="1" id="cells3_reset_icon_color_show" class="rainbowbtn"/>
                  <div id="cells3_search-submit" style="background-image:url('<?php echo $path_site; ?>/search-reset.png'); background-color:<?php echo $param_values['cells3_reset_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_button_background_color-lbl" for="cells3_select_icon_color">Select Category Icon Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells3_select_icon_color]" type="text" class="inputbox" id="cells3_select_icon_color" value="<?php echo $param_values['cells3_select_icon_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells3_select_icon_color']; ?>" readonly="readonly" size="1" id="cells3_select_icon_color_show" class="rainbowbtn"/>
                  <div id="cells3_search-submit" style="background-image:url('<?php echo $path_site; ?>/selectcat.png'); background-color:<?php echo $param_values['cells3_reset_icon_color']; ?>; width:30px;height:30px; display: inline-block; vertical-align: middle;"></div>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_rating_star-lbl" >Rating Star Design</label></span></td>
                <td class="paramlist_value">
                  <?php
                    $check0 = "";
                    $check1 = "";
                    $check2 = "";
                    $check3 = "";
                    $check4 = "";
                    if ($param_values['cells3_rating_star'] == 1)
                        $check0 = ' checked="checked" ';
                    if ($param_values['cells3_rating_star'] == 2)
                        $check1 = ' checked="checked" ';
                    if ($param_values['cells3_rating_star'] == 3)
                        $check2 = ' checked="checked" ';
                    if ($param_values['cells3_rating_star'] == 4)
                        $check3 = ' checked="checked" ';
                    if ($param_values['cells3_rating_star'] == 5)
                        $check4 = ' checked="checked" ';
                  ?>
                  <table cellpadding="0" cellspacing="10" border="0" style="text-align: center;">
                    <tr>
                      <td>
                        <label>
                            <img src="<?php echo $path_site; ?>/star1.png" alt="star1"/><br/>
                            <input name="params[cells3_rating_star]" type="radio" class="inputbox" id="paramscells3_rating_star" value="1" size="10" <?php echo $check0; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star2.png" alt="star2"/><br/>
                          <input name="params[cells3_rating_star]" type="radio" class="inputbox" id="paramscells3_rating_star" value="2" size="10" <?php echo $check1; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star3.png" alt="star3"/><br/>
                          <input name="params[cells3_rating_star]" type="radio" class="inputbox" id="paramscells3_rating_star" value="3" size="10" <?php echo $check2; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star4.png" alt="star4"/><br/>
                          <input name="params[cells3_rating_star]" type="radio" class="inputbox" id="paramscells3_rating_star" value="4" size="10" <?php echo $check3; ?> />
                        </label>
                      </td>
                      <td>
                        <label>
                          <img src="<?php echo $path_site; ?>/star5.png" alt="star5"/><br/>
                          <input name="params[cells3_rating_star]" type="radio" class="inputbox" id="paramscells3_rating_star" value="5" size="10"  <?php echo $check4; ?> />
                        </label>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              

            </table>
            <table style="width:48%;float:left;" class="paramlist admintable" cellspacing="1">
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_count_of_product_in_the_row-lbl" for="paramscells3_count_of_product_in_the_row">Number of Products in the Row</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells3_count_of_product_in_the_row]" id="paramscells3_count_of_product_in_the_row" value="<?php echo $param_values['cells3_count_of_product_in_the_row']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_count_of_rows_in_the_page-lbl" for="paramscells3_count_of_rows_in_the_page">Number of Rows in the Page</label></span></td>
                <td class="paramlist_value"><input type="text" name="params[cells3_count_of_rows_in_the_page]" id="paramscells3_count_of_rows_in_the_page" value="<?php echo $param_values['cells3_count_of_rows_in_the_page']; ?>" class="text_area" size="4"/></td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_categories_row_color1-lbl" for="paramscells3_categories_row_color1">Categories Background Color 1</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells3_categories_row_color1]" type="text" class="inputbox" id="paramscells3_categories_row_color1" value="<?php echo $param_values['cells3_categories_row_color1']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells3_categories_row_color1']; ?>" readonly="readonly" size="1" id="paramscells3_categories_row_color1_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_categories_row_color2-lbl" for="paramscells3_categories_row_color2">Categories Background Color 2</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells3_categories_row_color2]" type="text" class="inputbox" id="paramscells3_categories_row_color2" value="<?php echo $param_values['cells3_categories_row_color2']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells3_categories_row_color2']; ?>" readonly="readonly" size="1" id="paramscells3_categories_row_color2_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_categories_header_background_color-lbl" for="paramscells3_categories_header_background_color">Categories Header Background Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells3_categories_header_background_color]" type="text" class="inputbox" id="paramscells3_categories_header_background_color" value="<?php echo $param_values['cells3_categories_header_background_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells3_categories_header_background_color']; ?>" readonly="readonly" size="1" id="paramscells3_categories_header_background_color_show" class="rainbowbtn"/>
                </td>
              </tr>
              <tr>
                <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramscells3_categories_header_color-lbl" for="paramscells3_categories_header_color">Categories Header Text Color</label></span></td>
                <td class="paramlist_value">
                  <input name="params[cells3_categories_header_color]" type="text" class="inputbox" id="paramscells3_categories_header_color" value="<?php echo $param_values['cells3_categories_header_color']; ?>" size="10"/>
                  <input type="text" style="background:<?php echo $param_values['cells3_categories_header_color']; ?>" readonly="readonly" size="1" id="paramscells3_categories_header_color_show" class="rainbowbtn"/>
                </td>
              </tr>
            
            
            
            
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="paramslarge_picture_width-lbl" for="all_cell_title_size">Title Size</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[all_cell_title_size]"
                                                       id="all_cell_title_size" value="<?php
                        echo $param_values['all_cell_title_size'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="all_cell_title_color-lbl" for="all_cell_title_color">Title Color</label></span></td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[all_cell_title_color]" type="text" class="inputbox"
                                   id="all_cell_title_color" value="<?php
                            echo $param_values['all_cell_title_color'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['all_cell_title_color'];
                            ?>" readonly="readonly" size="1" id="all_cell_title_color_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramsprice_size_big-lbl"
                                                                                           for="all_cell_price_size">Price
                                Size</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[all_cell_price_size]"
                                                       id="all_cell_price_size" value="<?php
                        echo $param_values['all_cell_price_size'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="all_cell_price_text_color-lbl" for="all_cell_price_text_color">Price Text Color</label></span>
                    </td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[all_cell_price_text_color]" type="text" class="inputbox"
                                   id="all_cell_price_text_color" value="<?php
                            echo $param_values['all_cell_price_text_color'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['all_cell_price_text_color'];
                            ?>" readonly="readonly" size="1" id="all_cell_price_text_color_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="paramslarge_picture_width-lbl" for="all_cell_picture_width">Image Width</label></span>
                    </td>
                    <td class="paramlist_value"><input type="text" name="params[all_cell_picture_width]"
                                                       id="all_cell_picture_width" value="<?php
                        echo $param_values['all_cell_picture_width'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="paramslarge_picture_height-lbl" for="all_cell_picture_height">Image
                                Height</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[all_cell_picture_height]"
                                                       id="all_cell_picture_height" value="<?php
                        echo $param_values['all_cell_picture_height'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                  <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="cells3_cell_background_color-lbl" for="cells3_cell_background_color">Cell Background Color</label></span></td>
                  <td class="paramlist_value">
                    <input name="params[cells3_cell_background_color]" type="text" class="inputbox" id="cells3_cell_background_color" value="<?php echo $param_values['cells3_cell_background_color']; ?>" size="10"/>
                    <input type="text" style="background:<?php echo $param_values['cells3_cell_background_color']; ?>" readonly="readonly" size="1" id="cells3_cell_background_color_show" class="rainbowbtn"/>
                  </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstext_size_big-lbl"
                                                                                           for="all_cell_text_size">Text
                                Size</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[all_cell_text_size]" id="all_cell_text_size"
                                                       value="<?php
                                                       echo $param_values['all_cell_text_size'];
                                                       ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label
                                id="all_cell_text_color-lbl" for="all_cell_text_color">Text Color</label></span></td>
                    <td class="paramlist_value"><label>
                            <!--input id="myInput" name="myInput" type="text" /-->

                            <input name="params[all_cell_text_color]" type="text" class="inputbox"
                                   id="all_cell_text_color" value="<?php
                            echo $param_values['all_cell_text_color'];
                            ?>" size="10"/><input type="text" style="background:<?php
                            echo $param_values['all_cell_text_color'];
                            ?>" readonly="readonly" size="1" id="all_cell_text_color_show"
                                                  class="rainbowbtn"/>

                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstext_size_big-lbl"
                                                                                           for="all_cell_all_width">Cell
                                Thumbnail Width</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[all_cell_all_width]" id="all_cell_all_width"
                                                       value="<?php
                                                       echo $param_values['all_cell_all_width'];
                                                       ?>" class="text_area" size="3"/></td>
                </tr>
                <tr>
                    <td width="40%" class="paramlist_key"><span class="editlinktip"><label id="paramstext_size_big-lbl"
                                                                                           for="all_cell_all_height">Cell
                                Thumbnail Height</label></span></td>
                    <td class="paramlist_value"><input type="text" name="params[all_cell_all_height]"
                                                       id="all_cell_all_height" value="<?php
                        echo $param_values['all_cell_all_height'];
                        ?>" class="text_area" size="3"/></td>
                </tr>
            </table>
        </fieldset>
		<?php wp_nonce_field('nonce_sp_cat', 'nonce_sp_cat'); ?>
        <input type="hidden" name="option" value=""/>
        <input type="hidden" name="task" value=""/>
        <input type="hidden" name="controller" value="options"/>
        <input type="hidden" name="op_type" value="styles"/>
        <input type="hidden" name="boxchecked" value="0"/>
        </td>
      </tr>
    </table>

    </form>

<?php
}
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  