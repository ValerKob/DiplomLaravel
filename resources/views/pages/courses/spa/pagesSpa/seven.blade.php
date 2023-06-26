@extends('layouts.main')

@section('title', 'Home')

@section('content')
<!--================Start Portfolio Details Area =================-->
<section class="portfolio_details_area section_gap" style="padding: 200px 0 100px 0;">
    <div class="container">
        <div class="">
            <div class="row">
                <div class="offset-lg-1 col-lg-5">
                    <div class="mt-30">
                        <style>
                            p {
                                text-align: justify;
                                font-size: 20px;
                            }
                        </style>
                        <h4 class="text-uppercase">Итоги</h4>
                        <p>
                            По резултатам, получаем готовый проект на ReactSPA!
                        <p>
                            Все материалы вы модеже получить по это ссылке
                        </p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p>
                            <a class="primary_btn" href="https://github.com/ValerKob/CRM_React_TS" target="_blank" download><span>Скачать ПРОЕКТ</span></a>
                        <p>
                            <!-- <a class="primary_btn" href="https://github.com/ValerKob/CRM_React_TS" target="_blank" download><span>Посмотреть результаты</span></a> -->
                        </p>
                    </div>
                </div>
            </div>
            <!-- <div class="row mt-5">
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30" style="margin-top: 30px;">
                        <h4 class="text-uppercase">Конец видео урока.</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="portfolio_right_text mt-30">
                        <iframe class="video" width="500" height="300" src="https://www.youtube.com/embed/1_9c5KrMdpE" title="React JS фундаментальный курс от А до Я" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div> -->
            <!-- <div class="row mt-5">
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <iframe class="video" width="100" height="576" src="https://www.youtube.com/embed/VA6ZtniXgB8" title="React JS фундаментальный курс от А до Я" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="offset-lg-1 col-lg-5">
                        <div class="portfolio_right_text mt-30" style="margin-top: 30px;">
                            <h4 class="text-uppercase">Посмотреть видео ролик</h4>
                            <p>
                                Вы можете так же посмотреть видео ролик
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }
</script>
<style>
    .video {
        width: 100%;
        height: auto;
        max-height: 100%;
    }

    @media (max-width: 1199px) {
        .brand_area {
            padding-bottom: 160px;
        }
    }

    @media (max-width: 530px) {
        .video {
            width: 320px;
            height: 200px;
        }
    }

    #DIV_1 {
        block-size: 104px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-end-end-radius: 8px;
        border-end-start-radius: 8px;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        border-start-end-radius: 8px;
        border-start-start-radius: 8px;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        height: 140px;
        inline-size: 879.2px;
        overflow-wrap: break-word;
        perspective-origin: 439.6px 52px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 439.6px 52px;
        width: auto;
        background: rgb(94, 104, 126) none repeat scroll 0% 0% / auto padding-box border-box;
        border: 0px solid rgb(229, 231, 235);
        border-radius: 8px;
        font: 17px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_1*/

    #DIV_1:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 17px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_1:after*/

    #DIV_1:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 17px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_1:before*/

    #DIV_2 {
        block-size: 34px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        border-start-end-radius: 8px;
        border-start-start-radius: 8px;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        height: 34px;
        inline-size: 879.2px;
        overflow-wrap: break-word;
        perspective-origin: 439.6px 17px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 439.6px 17px;
        width: auto;
        background: rgb(78, 87, 105) none repeat scroll 0% 0% / auto padding-box border-box;
        border: 0px solid rgb(229, 231, 235);
        border-radius: 8px 8px 0px 0px;
        font: 17px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_2*/

    #DIV_2:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 17px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_2:after*/

    #DIV_2:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 17px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_2:before*/

    #DIV_3 {
        block-size: 34px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        bottom: 0px;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        display: flex;
        height: 34px;
        inline-size: 879.2px;
        inset-block-end: 0px;
        inset-block-start: 0px;
        inset-inline-end: 0px;
        inset-inline-start: 0px;
        justify-content: space-between;
        left: 0px;
        overflow-wrap: break-word;
        padding-block-end: 2px;
        padding-block-start: 2px;
        padding-inline-end: 16px;
        padding-inline-start: 16px;
        perspective-origin: 439.6px 17px;
        position: relative;
        right: 0px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        top: 0px;
        transform-origin: 439.6px 17px;
        width: auto;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
        padding: 2px 16px;
    }

    /*#DIV_3*/

    #DIV_3:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        display: block;
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_3:after*/

    #DIV_3:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        display: block;
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_3:before*/

    #DIV_4 {
        block-size: 30px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        height: 30px;
        inline-size: 77.4px;
        min-block-size: auto;
        min-height: auto;
        min-inline-size: auto;
        min-width: auto;
        overflow-wrap: break-word;
        perspective-origin: 38.7px 15px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 38.7px 15px;
        width: 77.4px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_4*/

    #DIV_4:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_4:after*/

    #DIV_4:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_4:before*/

    #svg_5 {
        align-self: center;
        block-size: 13px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        display: inline-flex;
        fill: none;
        height: 13px;
        inline-size: 13px;
        margin-inline-end: 8px;
        overflow-clip-margin: content-box;
        overflow-wrap: break-word;
        perspective-origin: 6.5px 6.5px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 6.5px 6.5px;
        vertical-align: middle;
        width: 13px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        margin: 0px 8px 0px 0px;
        outline: rgb(246, 247, 249) none 0px;
        overflow: hidden;
    }

    /*#svg_5*/

    #svg_5:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        display: block;
        fill: none;
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#svg_5:after*/

    #svg_5:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        display: block;
        fill: none;
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#svg_5:before*/

    #path_6 {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        d: path("M 2.40299 2.61279 H 14.403 C 14.5798 2.61279 14.7494 2.68303 14.8744 2.80806 C 14.9994 2.93308 15.0697 3.10265 15.0697 3.27946 V 13.9461 C 15.0697 14.1229 14.9994 14.2925 14.8744 14.4175 C 14.7494 14.5426 14.5798 14.6128 14.403 14.6128 H 2.40299 C 2.22618 14.6128 2.05661 14.5426 1.93159 14.4175 C 1.80657 14.2925 1.73633 14.1229 1.73633 13.9461 V 3.27946 C 1.73633 3.10265 1.80657 2.93308 1.93159 2.80806 C 2.05661 2.68303 2.22618 2.61279 2.40299 2.61279 Z M 8.403 10.6128 V 11.9461 H 12.403 V 10.6128 H 8.403 Z M 6.01233 8.61279 L 4.12699 10.4981 L 5.06966 11.4415 L 7.89833 8.61279 L 5.06966 5.78413 L 4.12699 6.72746 L 6.01233 8.61279 Z");
        display: block;
        fill: rgb(246, 247, 249);
        min-block-size: auto;
        min-height: auto;
        min-inline-size: auto;
        min-width: auto;
        overflow-wrap: break-word;
        perspective-origin: 0px 0px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 0px 0px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_6*/

    #path_6:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        fill: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_6:after*/

    #path_6:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        fill: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_6:before*/

    #DIV_7 {
        block-size: 30px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        height: 30px;
        inline-size: 56.325px;
        min-block-size: auto;
        min-height: auto;
        min-inline-size: auto;
        min-width: auto;
        overflow-wrap: break-word;
        perspective-origin: 28.1625px 15px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 28.1625px 15px;
        width: 56.325px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_7*/

    #DIV_7:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_7:after*/

    #DIV_7:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_7:before*/

    #BUTTON_8 {
        appearance: button;
        block-size: 30px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-end-width: 0px;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-block-start-width: 0px;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-end-width: 0px;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        border-inline-start-width: 0px;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        height: 30px;
        inline-size: 56.325px;
        overflow-wrap: break-word;
        padding-block-end: 0px;
        padding-block-start: 0px;
        padding-inline-end: 0px;
        padding-inline-start: 0px;
        perspective-origin: 28.1625px 15px;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 28.1625px 15px;
        width: 56.325px;
        background: rgba(0, 0, 0, 0) none repeat scroll 0% 0% / auto padding-box border-box;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
        padding: 0px;
    }

    /*#BUTTON_8*/

    #BUTTON_8:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#BUTTON_8:after*/

    #BUTTON_8:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#BUTTON_8:before*/

    #svg_9 {
        align-self: center;
        block-size: 13px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        display: inline-flex;
        fill: none;
        height: 13px;
        inline-size: 13px;
        margin-inline-end: 8px;
        overflow-clip-margin: content-box;
        overflow-wrap: break-word;
        perspective-origin: 6.5px 6.5px;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 6.5px 6.5px;
        vertical-align: middle;
        width: 13px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        margin: 0px 8px 0px 0px;
        outline: rgb(246, 247, 249) none 0px;
        overflow: hidden;
    }

    /*#svg_9*/

    #svg_9:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        display: block;
        fill: none;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#svg_9:after*/

    #svg_9:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        display: block;
        fill: none;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#svg_9:before*/

    #path_10 {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        clip-rule: evenodd;
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        d: path("M 5.40382 15.3671 C 5.03332 15.1901 4.70081 14.9381 4.42481 14.6286 C 4.34831 14.5431 4.23931 14.5001 4.12981 14.5206 L 3.66181 14.6081 C 3.33531 14.6691 3.02032 14.4361 2.96232 14.0876 L 1.30981 4.12512 C 1.28181 3.95662 1.31731 3.7861 1.40981 3.6456 C 1.50231 3.5051 1.64082 3.41162 1.79932 3.38162 L 3.22131 3.00012 C 3.37681 2.97062 3.48981 2.82761 3.48981 2.65961 V 1.9101 C 3.48981 1.8276 3.49381 1.74561 3.49931 1.66461 C 3.50931 1.53461 3.35181 1.57211 3.35181 1.57211 L 1.64381 2.0076 C 1.18481 2.0936 0.751316 2.32662 0.451316 2.70612 C 0.0808162 3.17362 -0.0686885 3.77259 0.0293115 4.36459 L 1.68231 14.3281 C 1.84531 15.3081 2.65031 16.0001 3.55631 16.0001 C 3.66531 16.0001 3.77631 15.9896 3.88731 15.9691 L 5.36632 15.6916 C 5.52332 15.6626 5.54982 15.4366 5.40382 15.3671 Z M 14.9331 4.55801 H 12.9116 C 12.1351 4.55801 11.5001 3.91502 11.5001 3.12952 V 1.06802 C 11.5001 0.480524 11.0196 0 10.4321 0 H 7.44161 C 6.36911 0 5.50011 0.879508 5.50011 1.96451 V 12.1665 C 5.50011 13.179 6.33412 14 7.36262 14 H 14.1371 C 15.1661 14 16.0001 13.179 16.0001 12.1665 V 5.625 C 16.0001 5.038 15.5201 4.55801 14.9331 4.55801 Z");
        display: block;
        fill: rgb(246, 247, 249);
        fill-rule: evenodd;
        min-block-size: auto;
        min-height: auto;
        min-inline-size: auto;
        min-width: auto;
        overflow-wrap: break-word;
        perspective-origin: 0px 0px;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 0px 0px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_10*/

    #path_10:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        clip-rule: evenodd;
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        fill: rgb(246, 247, 249);
        fill-rule: evenodd;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_10:after*/

    #path_10:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        clip-rule: evenodd;
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        fill: rgb(246, 247, 249);
        fill-rule: evenodd;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_10:before*/

    #path_11 {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        clip-rule: evenodd;
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        d: path("M 12.5888 0.0914385 C 12.4493 0.00843847 12.5158 0.252449 12.5158 0.252449 C 12.5653 0.428449 12.5918 0.613451 12.5918 0.804451 V 2.90296 C 12.5918 3.17646 12.8158 3.40046 13.0903 3.40046 H 15.1718 C 15.3883 3.40046 15.5968 3.43495 15.7918 3.49845 C 15.7918 3.49845 15.9373 3.50844 15.9008 3.43494 C 15.8383 3.33744 15.7673 3.24494 15.6833 3.16044 L 12.8303 0.289467 C 12.7558 0.214467 12.6743 0.149438 12.5888 0.0914385 Z");
        display: block;
        fill: rgb(246, 247, 249);
        fill-rule: evenodd;
        min-block-size: auto;
        min-height: auto;
        min-inline-size: auto;
        min-width: auto;
        overflow-wrap: break-word;
        perspective-origin: 0px 0px;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 0px 0px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_11*/

    #path_11:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        clip-rule: evenodd;
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        fill: rgb(246, 247, 249);
        fill-rule: evenodd;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_11:after*/

    #path_11:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        clip-rule: evenodd;
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        fill: rgb(246, 247, 249);
        fill-rule: evenodd;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_11:before*/

    #DIV_12 {
        block-size: 70px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        height: 70px;
        inline-size: 879.2px;
        overflow-wrap: break-word;
        padding-block-end: 24px;
        padding-block-start: 16px;
        padding-inline-end: 32px;
        padding-inline-start: 32px;
        perspective-origin: 439.6px 35px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 439.6px 35px;
        width: auto;
        border: 0px solid rgb(229, 231, 235);
        font: 15.3px / 30px "Source Code Pro", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        outline: rgb(246, 247, 249) none 0px;
        padding: 10px;
    }

    /*#DIV_12*/

    #DIV_12:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        white-space: pre;
        border: 0px solid rgb(229, 231, 235);
        font: 15.3px / 30px "Source Code Pro", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_12:after*/

    #DIV_12:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        white-space: pre;
        border: 0px solid rgb(229, 231, 235);
        font: 15.3px / 30px "Source Code Pro", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_12:before*/
</style>
@endsection