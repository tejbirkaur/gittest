<?php /* Template Name: PageWithoutSidebar */ ?>
<link rel="stylesheet" href="/bulma.css" type="text/css">
<style>


@import url('https://fonts.googleapis.com/css?family=Noto+Sans+SC');


* {
    font-family: 'Noto Sans SC', sans-serif;
}
.column.is-2.is-hidden-mobile {
    display: none;
}
.intro {
    box-shadow: 0px 0px 3px 5px #0095d3;
}
#geescore-widget .email-modal {
    top: -280px !important;
}
#geescore-widget #drop-resume-here{
    margin-top: -114px !important;
}
#geescore-widget .fileListWrapper {
   width: 95% !important;
}
.pick-smpl-res {
    text-align: center;
}
.joff_description span.notes,.more-sp {
    display: block;
    font-weight: bold;
    margin-top: 10px;
}
.pop-up-for-data-widget {
    position: relative;
}
.pop-up-for-data-widget {
    position: relative;
}

.below-resume-res {
    display: none;
}

.below-hot-res {
    display: none;
}

.main_con_div {
    width: 100%;
}

.below_resume {
    color: #f5deb3;
    text-align: center;
    width: 50%;
    float: left;
    font-size: 25px;
}

.below_hot_key_toggle {
    color: #f5deb3;
    width: 50%;
    float: right;
    text-align: center;
    font-size: 25px;
}

.iframe-new1 {
    position: relative;
}

.gee-without-score {
    position: relative;
    width: 100%;
}

.gee-without-score img {
    width: 100%;
}

.gee-with-score {
    position: absolute;
    top: 0px;
    display: none;
    width: 100%;
}

.gee-with-score img {
    width: 100%;
}
/* 03-JAN-2019 IS START */
.email-confirmation-form input[type="email"] {
    border: none;
    height: 40px;
}
.geescore-work-block p.gs_description br {
    display: none;
}
.geescore-work-block p.gs_description {
    margin-bottom: 40px;
}
.geescore-work-block #centering {
    width: 100%;
}
.geescore-work-block #centering #benefits {
    width: 100%;
}
.geescore-work-block #centering #benefits .chec-box-rem-text {
    width: auto;
    float: none;
}
.geescore-work-block #centering #benefits .chec-box-rem {
    width: auto;
    margin: 7px 0 0;
}
.geescore-work-block #centering #benefits br {
    display: none;
}
.popup .lower-pop h1, 
.popup .lower-pop p {
    font-size: 13px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 7px;
    margin-bottom: 7px !important;
}

.popup .lower-pop h1 b, 
.popup .lower-pop p b {
    margin-right: 10px;
}
.sample_resume_block .popup {
    bottom: 70px;
}
/*#checkClass1.popup,
#checkClass2.popup,
#checkClass3.popup{
    top: -140px !important;
}*/
.job_offers ul#joff_list li .btn_position button {
    margin-top: 0;
    margin-left: 0;
    margin-right: 0;
    width: auto !important;
    background: dodgerblue;
    border: none;
    color: #fff;
    padding: 10px 35px;
    border-radius: 3px;
}
.job_offers ul#joff_list li{
    padding: 15px 15px 0;
}
.sample_resume_block {
    display: inline-block;
    position: relative;
}
.sample_resume_block .popup.display-popup {
    width: 100%;
    background: #fff;
    border: 1px solid #888;
    color: black;
    padding: 0px 0px;
    z-index: 999;
    width: 400px;
    display: none;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    position: absolute;
}
.sample_resume_block:hover .popup.display-popup {
    display: block;
}
/* 03-JAN-2019 IS END */
.loader-1 {
    border: 5px solid #3498db;
    border-top-color: rgb(52, 152, 219);
    border-top-style: solid;
    border-top-width: 5px;
    border-top: 5px solid transparent;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    animation-name: spin;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    position: absolute;
    bottom: 0;
    right: 0;
    left: 94px;
    top: 70px;
}

@keyframes spin {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

.score-of-image-top {
    bottom: 0;
    color: #009eff;
    font-size: 37px;
    font-weight: bolder;
    height: 30px;
    left: 86px;
    line-height: 1px;
    position: absolute;
    right: 0;
    text-align: center;
    top: 85px;
    width: 0%;
    letter-spacing: -1.8px;
}

.text-of-image-top-pos {
    position: absolute;
    top: 65px;
    left: 200px;
    font-size: 18px;
    text-align: center;
    color: black;
    font-weight: 700;
    right: 0;
    width: 194px;
    line-height: 16px;
    letter-spacing: inherit;
}
.text-of-image-top-pos-before-score {
    position: absolute;
    top: 65px;
    left: 200px;
    font-size: 18px;
    text-align: center;
    color: black;
    font-weight: 700;
    right: 0;
    width: 194px;
    line-height: 16px;
    letter-spacing: inherit;
}

#checkClass1::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 15px;
    margin-left: -5px;
    border-width: 19px;
    border-style: solid;
    border-color: #fff transparent transparent transparent;
}

#checkClass2::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 15px;
    margin-left: -5px;
    border-width: 19px;
    border-style: solid;
    border-color: #fff transparent transparent transparent;
}

#checkClass3::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 15px;
    margin-left: -5px;
    border-width: 19px;
    border-style: solid;
    border-color: #fff transparent transparent transparent;
}
#checkClass1.bottom-display-popup:after,
#checkClass2.bottom-display-popup:after,
#checkClass3.bottom-display-popup:after {
    transform: rotate(180deg);
    top: -39px;
    left: 5px;
}
.sample_resume_block .popup.display-popup.bottom-display-popup .lower-pop {
    border: 1px solid #888;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.sample_resume_block .popup.display-popup.bottom-display-popup {
    border: none;
}

#checkClass1 p {
    margin-bottom: 5px;
}

#checkClass1 h1 {
    margin-bottom: 5px;
}

#checkClass2 p {
    margin-bottom: 5px;
}

#checkClass2 h1 {
    margin-bottom: 5px;
}

#checkClass3 p {
    margin-bottom: 5px;
}

#checkClass3 h1 {
    margin-bottom: 5px;
}

.Text-p-iss {
    min-height: 190px;
    max-height: 200px;
}


/* new css */

.chec-box-rem {
    width: 12%;
    float: left;
    margin-bottom: 25px;
}

.chec-box-rem-text {
    width: 78%;
    float: left;
    margin-bottom: 25px;
}

.score {
    position: absolute;
    font-size: 24px;
    color: white;
    top: 2px;
    left: 9px;
    font-weight: 600;
}

input[type="checkbox"],
input[type="radio"] {
    vertical-align: baseline;
    margin-right: 10px;
    width: 19px;
    height: 19px;
}



#form_position_father textarea {
    height: 150px;
    width: 100%;
    border: none;
    padding: 10px;
}

#form_position_father textarea::placeholder {
    color: gray;
}

#popup-id-1 {
    position: absolute;
    height: 100%;
    margin-left: 71px;
    width: 387px;
    margin-top: 120px;
    z-index: 9;
}

.job_title_job_seeker {
    margin-left: 0px;
    margin-top: 15px;
    display: none !important;
}

.job_seeker_view_width_section {
    position: relative;
}

#form_title {
    text-align: center !important;
    font-size: 35px;
    padding: 35px;
    color: wheat;
}

#main {
    background-color: #0d1a26;
    margin-top: -24px;
}

#form_container {
    text-align: center;
}

#in_01 {
    border-radius: 15px;
    display: inline !important;
    font-size: 20px;
    text-align: center;
}

#in_02 {
    border-radius: 15px;
    display: inline !important;
    font-size: 20px;
    text-align: center;
}

#form_position_father {
    color: wheat;
    font-size: 20px;
}

#form_position_father span {
    display: block;
}

#gs_up_img1 {
    width: 50px;
    display: block;
    margin-top: 4px; 
    margin-left: 30px;
}

.titles_span {
    display: block;
    text-align: center !important;
    font-size: 35px;
    padding: 35px;
    color: wheat;
}

.gs_description {
    text-align: center;
    font-size: 20px;
    color: wheat;
}

.icon {
    margin-right: 8px;
}

#c_e_btn {
    width: 125px;
    font-size: 20px;
    height: auto;
    padding: 8px !important;
    font-size: 18px;
    border-radius: 25px;
    background-color: dodgerblue;
    border: 2px solid #0d1a26;
}

#c_e_btn:hover {
    color: aliceblue;
    cursor: pointer;
    
}

#centering {
    width: 600px;
    margin: 0 auto;
}

#benefits {
    color: wheat;
    font-size: 20px;
}

#expl {
    text-align: center;
    font-size: 25px;
}

.img_container {
    
}

#gs_wid_img {
    cursor: pointer;
    width: 280px !important;
    margin: auto !important;
}




#gs_up_img {
    cursor: pointer;
    width: 85px !important;
    display: inline !important;
    margin-right: 20px !important;
    margin-top: 13px !important;
}

.gs_btn_title {
    font-size: 25px;
    text-align: center;
    color: #f5deb3;
    
}

.column.is-5,
.column.is-5-tablet {
    flex: none;
    width: 41.667%;
    margin-left: 28px;
}

#gs_sample_img {
    cursor: pointer;
    margin-top: 0 !important;
    padding-right: 5px !important;
}


/**
    JOB OFFER SECTION
**/

.job_offers {
    background-color: aliceblue;
    margin-top: 70px;
    padding: 25px 35px; /* 3-JAN-2018 */
    margin-right: 100px;
}

#joff_list {
    list-style-type: none;
    margin-top: 15px !important;
}

.offer_link {
    color: dodgerblue;
    padding: 15px !important;
    text-decoration: none;
}

.offer_link:hover {
    color: blue;
    cursor: pointer;
}

.offer_link:visited {
    text-decoration: none;
}

.offer_link:active {
    text-decoration: none;
}

.where_when {
    background-color: lightgray;
    padding: 8px !important;
    margin-top: 10px !important;
}

.icon {
    margin-right: 10px !important;
    margin-left: 10px !important;
}

.joff_description {
    padding: 15px !important;
}

#hidden_offer_01 {
    display: none;
}

#hidden_offer_02 {
    display: none;
}

#hidden_offer_03 {
    display: none;
}

#hidden_offer_04 {
    display: none;
}

.btn_position {
    display: flex;
    justify-content: center;
    margin: 15px;
}

.read_more_btn {
    color: dodgerblue;
    width: 295px !important;
    cursor: pointer;
    font-size: 20px !important;
}

.read_more_btn:hover {
    color: navy;
    cursor: pointer;
}

.pin_container {
    float: left;
    position: relative;
}

.score_pin {}


/**
    FORM
**/

#survey_btn {
    padding: 25px !important;
    display: flex;
    justify-content: center;
}

fieldset {
    border: none;
}

#reset_btn {
    width: 125px !important;
    height: auto;
    padding: 8px !important;
    font-size: 18px;
    border-radius: 25px;
    background-color: #336699;
    border: 2px solid #0d1a26;
    margin-right: 35px !important;
}

#reset_btn:hover {
    color: aliceblue;
    cursor: pointer;
}

#submit_btn {
    width: 125px !important;
    height: auto;
    padding: 8px !important;
    font-size: 18px;
    border-radius: 25px;
    background-color: dodgerblue;
    border: 2px solid #0d1a26;
}

#submit_btn:hover {
    color: aliceblue;
    cursor: pointer;

}

#tester_uploads {
    margin-left: 0px !important;
}


/**
    FOOTER
**/

#grat {
    text-align: center;
    font-size: 30px;
    color: #f5deb3;
}

#thanks_p {
    color: #f5deb3;
}

#credits {
    text-align: center;
}

#gs_btn_title {
    color: wheat;
    text-align: center;
    font-size: 25px;
    margin-top: -15px;
    margin-bottom: 65px;
}

#feed_hidden {
    visibility: hidden;
}

#form_position_father textarea {
    width: 100%;
    font-size: 25px;
}
@media (max-width:767px){
    #sample_resume_block_3 .popup.display-popup {
    right: 0;
}
}
@media only screen and (max-width: 600px) {

    .gs_description {
        width: 320px;
        margin: auto;
    }
    #gs_wid_img {
        width: 350px;
        display: block;
        margin: auto;
    }
    #gs_up_img {
        width: 120px;
        display: block;
        margin: auto;
        margin-top: -15px;
    }
    #gs_sample_img {
        width: 200px;
        display: block;
        margin: auto;
        margin-top: -55px;
    }
    #grat {
        display: block;
        margin: auto;
    }
    #credits {
        text-align: center;
    }
    #in_01 {
        display: block;
        margin: auto;
        margin-top: -15px;
    }
    #in_02 {
        display: block;
        margin: auto;
        margin: 15px;
    }
    #c_e_btn {
        display: block;
        margin: auto;
        margin-top: 15px;
    }
    #survey_btn {
        justify-content: space-around;
    }
    fieldset {
        border: none;
    }
    #feed_hidden {
        visibility: visible;
    }
    #feed_visible {
        display: none;
    }
    #main {
        background-color: #0d1a26;
        box-sizing: border-box !important;
    }
    textarea {
        width: 340px;
        height: 90px;
    }
    #centering {
        width: 350px;
    }
    /* 07-JAN-2018 IS START */
    .email-confirmation-form{
        margin-top: 50px;

    }
}

@media only screen and (min-width: 600px) {
    textarea {
        width: 340px;
        height: 90px;
    }
    #feed_visible {
        padding-top: 75px !important;
        margin-bottom: -55px;
    }
    #gs_wid_img {
        width: 350px;
        display: block;
        margin: auto;
    }
    #gs_up_img {
        width: 120px;
        display: block;
        margin: auto;
        margin-top: -15px;
        margin-bottom: -55px;
    }
    #gs_sample_img {
        width: 200px;
        display: block;
        margin: auto;
        margin-top: -55px;
    }
    #in_01 {
        display: block;
        margin: auto;
        margin-top: 25px;
    }
    #in_02 {
        display: block;
        margin: auto;
        margin: 15px;
    }
    #c_e_btn {
        display: block;
        margin: auto;
    }
    .job_offers button {
        margin: 25px;
        width: 190px;
        font-size: 20px;
    }
}

@media only screen and (max-width: 768px) {
    #popup-id-1 {
    /*margin-left: 0 !important;*/
    right: 0 !important;
    width: 295px;
    margin: 120px auto;
    left: 402px;
}
    .text-of-image-top-pos {
        left: 185px;
    }
    .gee-with-score {
       min-width: 55%;
       max-width: 55%;
       left:275px;
       right: 0;
       margin: 0 auto;
    }
    .gee-without-score {
        width: 58%;
        float: left;
        margin-left: 15px;
    }
    #jobseeker-frame {
        width: 55% !important;
        height: 181px !important;
        top: 0 !important;
        left: auto !important;
        margin: 0 !important;
        right: 0;
    }
    .Text-p-iss {
        min-height: 210px;
    }

    /* new */
    #geescore-widget.cleanslate {
        width: 100% !important;
    }
    #geescore-widget .main-container {
        width: 100% !important;
    }
    #drop-resume-parent span img {
        position: relative;
        left: 30px;
    }
    #geescore-widget #drop-resume-here {
        margin-left: 118px !important;
        width: 100% !important;
    }
    #geescore-widget .job-title {
        min-width: 20% !important;
        max-width: 35%;
    }
    #geescore-widget .score-job-title {
        min-width: 20% !important;
        max-width: 35%;
    }
    #geescore-widget .RTool-wrapper {
        padding-left: 329px !important;
        margin: auto;
        position: relative;
        z-index: 9 !important;
        top: -13px;
    }
    #score-view-parent span img {
        position: relative;
        left: 30px;
    }
    #geescore-widget .score {
        left: 50%;
        z-index: 9;
        margin-left: 0px !important;
    }
    #geescore-widget .score-loading {
        z-index: 9;
        margin-left: 120px !important;
    }
    #geescore-widget .email-modal {
        top: -295px !important;
        left: 18%;
        width: 46% !important;
    }
    /* #checkClass1 {
    top: -20px !important;
    left: 0 !important;
    width: 99% !important;
    background: #fff !important;
    right: 0 !important;
    margin: 0 auto !important;
    margin: 0 auto !important;
    padding: 10px 6px;
    height: 342px !important;
}
     #checkClass2 {
    top: -20px !important;
    left: 0 !important;
    width: 99% !important;
    background: #fff !important;
    right: 0 !important;
    margin: 0 auto !important;
    margin: 0 auto !important;
    padding: 10px 6px;
    height: 340px !important;
}
     #checkClass3 {
    top: 12px !important;
    left: 0 !important;
    width: 99% !important;
    background: #fff !important;
    right: 0 !important;
    margin: 0 auto !important;
    margin: 0 auto !important;
    padding: 10px 6px;
    min-height: 310px;
    max-height: 500px;
}
    #checkClass1::after {
    left: -640px;
    right: 0px;
    width: 5%;
    text-align: center;
    margin-left: 290px;
    margin: auto;
}
   
    #checkClass2::after {
    left: -415px;
    right: 0;
    width: 5%;
    margin: auto;
    text-align: center;
    margin-left: 290px;
}
     #checkClass3::after {
    left: -192px;
    right: 0px;
    width: 5%;
    margin: auto;
    text-align: center; 
    margin-left: 290px; 
}*/

    
}

@media only screen and (max-width: 767px) {
    /* 07-JAN-2019 IS START */
    .email-confirmation-form input#in_01[type="email"], 
    .email-confirmation-form input#in_02[type="email"] {
        width: 90%;
    }
    .email-confirmation-form input#in_02[type="email"] {
        margin: 15px 0;
    }
    .columns.banner-column {
        margin-bottom: 0;
    }
    .columns.banner-column .column {
        padding-bottom: 0;
    }
    .try-geescore-block span.titles_span {
        padding: 0 0;
    }
    .Text-p-iss .gs_btn_title{
        padding-bottom: 20px;
        display: inline-block;
        width: 100%;
        top: 0 !important;
        margin-top: 20px;
    }
    .wrap-4_1.iframe-new1 {
        display: inline-block;
        width: 100%;
        margin-top: 0;
    }
    .wrap-4_1.iframe-new1 .gee-without-score{
        padding: 0;
        margin: 0;
        display: inline-block;
        width: 100%;
        text-align: center;
    }
    .wrap-4_1.iframe-new1 .gee-without-score img#tester1_tester-1{
        margin: 0 auto;
        width: 65%;
        height: auto;
    }
    html, 
    body {
        overflow-x: hidden;
    }
    .geescore-work-block .chec-box-rem-text {
        padding: 0 15px;
    }
    ul#joff_list li span.joff_title {
        display: inline-block;
        width: 100%;
    }
    ul#joff_list li span.joff_title a.offer_link {
        width: 100%;
        display: inline-block;
    }
    .job_offers ul#joff_list li{
        padding:15px;
    }
    .job_offers ul#joff_list li .where_when span {
        font-size: 13px;
    }
    .job_offers ul#joff_list li .where_when span.icon {
        margin: 0 5px !important;
    }
    .column{
        padding-left: 0px;
        padding-right: 0px 
    }
    .columns{
        margin-left: 0px;
        margin-right: 0px;
    }
    .geescore-work-block p.gs_description{
        padding:0 15px;
    }
    .geescore-work-block #centering{
        padding:0 15px;
    }
    .sample_resume_block .popup {
        bottom: 150px;
    }
    .popup.display-popup{
        display: none;
    }
    #checkClass1::after,
    #checkClass2::after,
    #checkClass3::after{
        display: none;
    }
   
}

@media only screen and (min-width: 768px) {
    #benefits {
        width: 380px;
    }
    
}

@media only screen and (min-width: 1400px) and (max-width: 4000px) {
    
    #gs_up_img {
        width: 74px !important;
    }
    .gee-with-score {
        width: 451px;
    }
    #popup-id-1 {
        margin-left: 136px;
        width: 315px;
        margin-top: 128px;
    }
    .frame-iframe {
        float: right;
        width: 100%;
    }
    .upload-own-res-p {
        text-align: center;
        width: 100%;
        margin-left: 14%;
    }
    #geescore-widget {
        width: 410px !important;
        float: right !important;
    }
    #score-view-parent {
        position: relative;
    }
}

@media only screen and (min-width: 1200px) and (max-width: 1399px) {

    /*#checkClass3 {
        left: 429px !important;
    }*/

    .column.is-5,
    .column.is-5-tablet {
        width: 50%;
    }
    /*#checkClass1 {
    top: -130px !important;
    left: 75px !important;
    }
    #checkClass2 {
    top: -130px !important;
    left: 157px !important;
    }
    #checkClass3 {
    top: -130px !important;
    left: 235px !important;
    }
    #checkClass1::after {
        left: 3%;
    }
    #checkClass2::after {
        left: 3%;
    }
    #checkClass3::after {
        left: 5%;
    }*/
    
    #jobseeker-frame {
        margin-left: -28px !important;
        left: 28px !important;
        width: 329px !important;
    }
    .img_container {
        width: 256px;
    }
    .wrap-4_1 {
        text-align: left !important;
    }
    .wrap-4_1 input {
        width: auto !important;
    }
    #gs_up_img {
        width: 64px !important;
        margin-right: 18px !important;
        position: relative;
        z-index: 9;
    }
    .gee-with-score {
        width: 384px;
    }
    #tester_uploads {
        margin-left: 0px !important;
    }
    #popup-id-1 {
    margin-left: 116px !important;
    width: 268px;
    margin-top: 108px;
}
    .tester-wrap {
        text-align: left !important;
    }
    .text-of-image-top-pos {
        top: 55px;
        left: 158px;
    }
    .text-of-image-top-pos-before-score {
        top: 55px;
        left: 158px;
    }
    .job_title_job_seeker {
        margin-left: 0px;
    }
    .score-of-image-top {
        font-size: 35px;
        left: 10px;
        right: 0;
        text-align: left;
        top: 70px;
        width: 250px;
        margin: 0 auto;
    }
    .loader-1 {
        left: 75px;
        top: 55px;
    }
    .Text-p-iss {
        min-height: 182px;
        max-height: 200px;
    }
    .below_resume {
        font-size: 22px;
        margin-left: 5px;
    }
    .below_hot_key_toggle {
        font-size: 22px;
    }
    /* new */
    #geescore-widget .main-container {
        width: 100% !important;
    }
    #geescore-widget {
        width: 100% !important;
    }
    .pick-smpl-res .img_container {
      height: 100%;
      align-self: center;
      justify-content: center;
      display: flex;
      flex-direction: row;
      width: 100%;
      flex-wrap: wrap;
   }
   .pick-smpl-res .gs-height {
      height: 0px;
      width: 100%;
      font-size: 24px;
   }
   #drop-resume-parent span img {
      width: 115px;
      position: relative;
      left: 0;
   }
   #score-view-parent span img {
      width: 115px;
      position: relative;
      left: 0;
   }
   #geescore-widget #drop-resume-here {
      /* margin-left: 120px; */
      margin-top: -97px !important;
      margin-left: 108px !important;
      /* margin-top: -117px; */
      height: 114px !important;
      text-align: left !important;
      width: 253px;
      left: 0;
   }
   #drop-resume-here img {
      /* max-height: 93%; */
      /* min-height: 93%; */
      width: 400px;
      height: 91px;
   }
   #geescore-widget #drop-resume-parent {
      float: right !important;
      margin-top: 20px;
   }
   #geescore-widget .score-loader {
      position: relative;
      z-index: 9;
      top: -15px;
      left: -12px;
   }
   #geescore-widget #score-view-parent {
      float: right;
      position: relative;
      margin-top: 20px;
   }
   #upload_own_res {
      margin-left: 25%;
      font-size: 24px;
   }
   #geescore-widget .score {
      margin-left: 58px !important;
      margin-top: 69px !important;
      z-index: 9;
   }
   #geescore-widget .RTool-wrapper {
      margin-top: -24px !important;
      z-index: 9 !important;
      position: absolute;
      top: 146px;
      right: 0;
      width: 315px !important;
   }
   #geescore-widget .RTool-content {
      width: 300px !important;
   }
   #geescore-widget .job-title {
      margin: -55px auto !important;
      width: 80% !important;
   }
   #geescore-widget .score-job-title {
      margin: -55px auto !important;
      width: 80% !important;
   }
   #geescore-widget .close-btn2 {
      margin-left: 148px !important;
      top: 25px !important;
   }
   #geescore-widget .close-btn1 {
        margin-left: 110px !important;
        top: 25px !important;
    }
    #geescore-widget .email-modal {
      top: -130px !important;
        right: 0;
        position: absolute !important;
   }

}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
.column.is-8, .column.is-8-tablet {
    width: 75.667%;
}
.column.is-2, .column.is-2-tablet {
    width: 11.667%;
}

    .column.is-5,
    .column.is-5-tablet {
        width: 40.667%;
        margin-left: 70px;
        float: left;
    }
    #container_hot_key {
        float: left;
    }
    .job_title_job_seeker {
        margin-left: 0px;
    }
    #tester_uploads {
        margin-left: 0px !important;
    }
    /*#checkClass1 {
    top: -142px !important;
    left: 47px !important;
    }
    #checkClass2 {
    top: -142px !important;
    left: 53px !important;
}
    #checkClass3 {
    top: -142px !important;
    left: 90px !important;
    }
    #checkClass1::after {
        left: 3%;
    }
    #checkClass2::after {
        left: 20%;
    }
    #checkClass3::after {
        left: 28%;
    }*/
    #jobseeker-frame {
        left: 0 !important;
    }
    #popup-id-1 {
    margin-top: 102px;
    z-index: 9 !important;
    width: 252px;
    max-height: 150vh;
    min-height: 80vh;
    height: 100%;
    border: 0;
    min-width: 210px;
    max-width: 400px;
    margin-left: 109px;
}
    .loader-1 {
        left: 64px;
        top: 53px;
    }
    .gee-with-score {
        width: 361px;
    }
    .gs_btn_title {
        font-size: 20px;
    }
    #gs_up_img {
      width: 51px !important;
      margin-top: 0px !important;
      margin-right: 13px !important;
      position: relative;
      z-index: 9;
   }
    .score-of-image-top {
        font-size: 25px;
        left: 67px;
        right: auto;
        top: 68px;
        width: 313px;
        margin: 0 auto;
        text-align: left;
    }
    .text-of-image-top-pos {
        top: 46px;
        left: 130px;
    }
    .text-of-image-top-pos-before-score {
        top: 56px;
        left: 141px;
    }
    .below_resume {
        font-size: 18px;
    }
    .below_hot_key_toggle {
        font-size: 18px;
    }
    .Text-p-iss {
        min-height: 154px;
    }

    /* new */
    #geescore-widget .main-container {
        width: 100% !important;
    }
    #geescore-widget {
        width: 100% !important;
    }
    .pick-smpl-res .img_container {
      height: 100%;
      align-self: center;
      justify-content: center;
      display: flex;
      flex-direction: row;
      width: 100%;
      flex-wrap: wrap;
   }
   .pick-smpl-res .gs-height {
      height: 0px;
      width: 100%;
   }
   #drop-resume-parent span img {
      width: 115px;
      position: relative;
      left: 0;
   }
   #score-view-parent span img {
      width: 115px;
      position: relative;
      left: 0;
   }
   #geescore-widget #drop-resume-here {
      /* margin-left: 120px; */
      margin-top: -97px !important;
      margin-left: 108px !important;
      /* margin-top: -117px; */
      height: 114px !important;
      text-align: left !important;
      width: 253px;
      left: 0;
   }
   #drop-resume-here img {
      /* max-height: 93%; */
      /* min-height: 93%; */
      width: 400px;
      height: 91px;
   }
   #geescore-widget #drop-resume-parent {
      float: right !important;
      margin-top: 20px;
   }
   #geescore-widget .score-loader {
      position: relative;
      z-index: 9;
      top: -15px;
      left: -12px;
   }
   #geescore-widget #score-view-parent {
      float: right;
      position: relative;
      margin-top: 20px;
   }
   #upload_own_res {
      margin-left: 26%;
   }
   #geescore-widget .score {
      margin-left: 58px !important;
      margin-top: 69px !important;
      z-index: 9;
   }
   #geescore-widget .RTool-wrapper {
      margin-top: -24px !important;
      z-index: 9 !important;
      position: absolute;
      top: 146px;
      right: 0;
      width: 315px !important;
   }
   #geescore-widget .RTool-content {
      width: 300px !important;
   }
   #geescore-widget .job-title {
      margin: -50px auto !important;
      width: 80% !important;
   }
   #geescore-widget .score-job-title {
      margin: -50px auto !important;
      width: 80% !important;
   }
   #geescore-widget .close-btn2 {
      margin-left: 148px !important;
      top: 25px !important;
   }
   #geescore-widget .close-btn1 {
      margin-left: 110px !important;
      top: 25px !important;
   }
    #geescore-widget .email-modal {
        position: absolute !important;
        top: -130px !important;
        right: 0;
    }
}

@media only screen and (min-width: 769px) and (max-width: 991px) {

    .gee-without-score {
        width: 93%;
    }
    #popup-id-1 {
        margin-left: 52.4% !important;
        right: 0 !important;
        min-width: 295px;
        max-width: 356px;
        margin-top: 117px;
        width: 242px;
    }
    .job_title_job_seeker {
        margin-left: 60px !important;
        text-align: left !important;
    }
    .columns:not(.is-desktop) {
        display: inherit;
    }
    .column.is-8,
    .column.is-8-tablet {
        width: 100% !important;
    }
    .coltentoele {
        width: 100% !important;
    }
    .img_container {
        width: 100% !important;
        /*margin: 0 !important;*/
        float: left !important;
    }
    .column.is-5,
    .column.is-5-tablet {
        width: 52% !important;
        margin-left: -33px !important;
        float: left !important;
        vertical-align: top !important;
        margin-top: -25px !important;
        padding: 0px !important;
    }
    .gs_up_img2 {
        position: absolute;
        right: 35px;
        margin-top: -86px !important;
        width: 7%;
    }
    .column.is-2,
    .column.is-2-tablet {
        width: 24.667% !important;
        display: none;
    }
    #jobseeker-frame {
        max-width: 420px !important;
        width: 420px !important;
        left: 11px !important;
    }
    /*.column.is-4,
    .column.is-4-tablet {
        width: 45% !important;
    }*/
    .column.is-6, .column.is-6-tablet {
        width: 62%;
        float: right;
        /*margin-bottom: 50px;*/
    }
    /*.job_offers {
        margin-top: 175px !important;
    }*/
    #upload_own_res {
        margin-top: -50px !important;
        margin-bottom: 15px !important;
    }
    .gee-with-score {
        position: absolute;
        max-width: 422px;
        right: 0;
    }
    .gee-with-score img {
        width: 100%;
        height: 124px;
    }
    .score-of-image-top {
        left: 0;
        right: 0;
        top: 65px;
        width: 232px;
        margin: 0 auto;
        text-align: left;
    }
    .main_con_div {
        float: left !important;
        margin-top: -55px;
    }
    .gs_btn_title {
        margin-top: -26px;
        margin-bottom: 28px;
    }
    #gs_up_img {
        position: relative !important;
        top: -10px;
        z-index: 9;
    }
    .Text-p-iss {
        min-height: 230px;
    }

    /* new */
    #upload_own_res {
        margin-left: 20% !important;
    }
    .frame-iframe {
        float: right;
        width: 100%;
    }
    #geescore-widget {
        width: 445px !important;
        float: right !important;
    }
    #score-view-parent {
        position: relative;
    }
    .cleanslate .score {
        margin-left: 77px !important;
        width: 126px;
        float: right;
        left: 0;
        right: 0;
    }
    .pick-smpl-res .img_container {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: center;
      align-self: center;
   }
   .below_resume {
      text-align: left;
      padding-left: 15px;
   }
   .full-on-hidden-mobile {
      width: 100% !important;
      padding-bottom: 0px;
      padding-top: 0px;
   }
    #credits {
        text-align: left;
        margin-top: -15px;
    }
    #geescore-widget .email-modal {
        top: -280px !important;
    }

/*#checkClass1 {
    top: -28px !important;
    left: 18px !important;
    width: 55% !important;
    background: #fff !important;
    right: 0 !important;
    margin: 0 auto !important;
    margin: 0 auto !important;
    padding: 10px 6px;
    height: 342px !important;
}
#checkClass2 {
    top: -26px !important;
    left: 17px !important;
    width: 55% !important;
    background: #fff !important;
   right: 0 !important;
    margin: 0 auto !important;
    margin: 0 auto !important;
    padding: 10px 6px;
    height: 340px !important;
}
#checkClass3 {
    top: -3px !important;
    left: 17px !important;
    width: 55% !important;
    background: #fff !important;
    right: 0 !important;
    margin: 0 auto !important;
    margin: 0 auto !important;
    padding: 10px 6px;
    min-height: 310px;
    max-height: 500px;
}
#checkClass1::after {
    left: 10px;
    right: 0px;
    width: 5%;
    text-align: center;
    margin-left: 290px;
    margin: auto;
}
   
#checkClass2::after {
    left: 130px;
    right: 0;
    width: 6%;
    margin: auto;
    text-align: center;
    margin-left: 290px;
}
#checkClass3::after {
    left: 235px;
    right: 0;
    width: 5%;
    margin: auto;
    text-align: center;
    margin-left: 290px; 
}*/
.column{
    padding-left: 0px;
    padding-right: 0px 
}
.columns{
    margin-left: 0px;
    margin-right: 0px;
}
.geescore-work-block #centering{
    padding:0 15px;
}
.score-of-image-top {
    left: 0px !important;
    width: 345px !important;
    top: 78px;
}
.loader-1 {
    top: 64px;
}
.column.is-1, .column.is-1-tablet {
   display: none;
}
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .column.is-5,
    .column.is-5-tablet {
        width: 48%;
        margin-left: 0px;
        float: left;
        vertical-align: top;
        margin-top: -25px;
        padding: 0px;
    }
    .job_title_job_seeker {
        margin-left: 0px;
        text-align: center;
    }
    .img_container {
        float: left;
        margin-left: 15px;
    }
    .wrap-2 {
        right: 0;
        top: 8px;
        width: 630px;
        height: 103px;
    }
    #resume_upload {
        height: 112px;
        width: 630px;
        right: 0;
    }
    #upload_own_res {
        margin-top: -26px;
        margin-left: 50%;
    }
    .modal-dialog {
        top: 25%;
        left: auto;
        right: 0;
    }
    
    #gs_up_img {
        margin: 10px 8px !important;
        z-index: 9;
        position: relative;
        width: 66px !important;
    }
    #gs_up_img1 {
        margin: -20px auto;
    }

    #form_position_father {
        padding: 10px;
    }
    .main_con_div {
        float: left;
    }
    .column{
        padding-left: 0px;
        padding-right: 0px 
    }
    .columns{
        margin-left: 0px;
        margin-right: 0px;
    }
    .geescore-work-block p.gs_description{
        padding:0 15px;
    }
    .geescore-work-block #centering{
        padding:0 15px;
    }
    .sample_resume_block .popup {
        bottom: 150px;
    }
    .score-of-image-top {
    left: 79px !important;

    }
    .loader-1 {
    left: 84px;
    }
    .below_resume {
      padding-left: 15px;
      text-align: left;
   }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
    .column.is-5,
    .column.is-5-tablet {
        width: 100%;
        margin-left: 0px;
    }
    .job_title_job_seeker {
        margin-left: 0px;
        text-align: center;
    }
    .img_container {
        width: 100%;
        margin: 0 auto;
        float: left;
        text-align: center;
    }
    .titles_span {
        padding: 0px;
    }
    #gs_up_img {
        margin: 15px 20px !important;
        position: relative;
        z-index: 9;
    }
    #gs_up_img1 {
        margin: -20px auto;
    }
    .column.is-5,
    .column.is-5-tablet {
        float: left;
    }
    #geescore-widget {
        text-align: center !important;
        margin: 0 auto !important;
        width: 100% !important;
    }
    #geescore-widget .main-container {
        width: 100% !important;
    }
    #geescore-widget span img {
        position: relative;
        left: -150px;
    }
    #geescore-widget #drop-resume-here {
        margin-left: 60px !important;
        width: 100%;
    }
    #geescore-widget .job-title {
        min-width: 20% !important;
        max-width: 38%;
    }
    #geescore-widget .score-job-title {
        min-width: 20% !important;
        max-width: 38%;
    }
    #geescore-widget .RTool-wrapper {
        padding-left: 61px !important;
        text-align: center;
        margin: auto;
        top: 0;
    }
    #geescore-widget .score-loading {
        margin-left: -60px !important;
        z-index: 9;
    }
    #geescore-widget .score {
        margin-left: -133px !important;
        z-index: 9;
        /*right: 245px;*/
    }
    #geescore-widget .email-modal {
        top: -275px !important;
        width: 40% !important;
        left: 0;
        /*z-index: 9;*/
    }



    /*#checkClass1 {
        top: 1550px !important;
        left: 0 !important;
        width: 100% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
    }
    #checkClass2 {
        top: 1550px !important;
        left: 0 !important;
        width: 100% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
    }
    #checkClass3 {
        top: 1550px !important;
        left: 0 !important;
        width: 100% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
    }
    #checkClass1::after {
        left: 27%;
    }
    #checkClass2::after {
        left: 47%;
    }
    #checkClass3::after {
        left: 67%;
    }
     #checkClass1 {
        top: -163px !important;
        left: 0 !important;
        width: 99% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
        height: 342px !important;
    }
     #checkClass2 {
        top: -160px !important;
        left: 0 !important;
        width: 99% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
        height: 340px !important;
    }
     #checkClass3 {
        top: -130px  !important;
        left: 0 !important;
        width: 99% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
        min-height: 310px;
        max-height: 500px;
    }
    #checkClass1::after {
        left: -266px;
        right: 0px;
        width: 7%;
        text-align: center;
        margin-left: 290px;
        margin: auto;
    }
   
    #checkClass2::after {
        left: 0;
        right: 0;
        width: 7%;
        margin: auto;
        text-align: center;
        margin-left: 290px;
    }
     #checkClass3::after {
        left: 0;
        right: -254px;
        width: 7%;
        margin: auto;
        text-align: center;
     margin-left: 290px;
    }*/
    #checkClass2 {
        left: -109px;
    }
   
    .pop-up-for-data-widget {
        display: inline-block;
    }
    #form_position_father {
        padding: 10px;
    }
    #popup-id-1 {
    margin-left: 0;
    left: 135px !important;
    right: 0 !important;
    margin: 144px auto !important;
    min-width: 314px;
    max-width: 314px;
}
.text-of-image-top-pos-before-score {
    top: 59px;
    left: 245px;
}
    #jobseeker-frame {
        left: 42px !important;
        width: 420px !important;
    }
    .gee-with-score {
        top: 0px;
        min-width: 450px;
        max-width: 450px;
        left: 0;
        margin: 0 auto;
        
    }
    .gee-with-score img {
        text-align: center;
        margin: 0 auto;
    }
    .gee-without-score {
        width: 450px;
        margin: 0 auto;
    }
    .job_offers {
        margin-top: 150px;
    }
    .below_resume {
        font-size: 25px;
       
        width: 100%;
    }
    .main_con_div {
        position: relative;
    }
    .below_hot_key_toggle {
        font-size: 25px;
        width: 100%;
        margin-top: 0px;

        margin-top: 15px;
    }
    /*.coltentoele {
        padding-bottom: 177px;
    }*/
    .below-resume-res {
        display: block !important;
    }
    .below-hot-res {
        display: block !important;
    }
    .Text-p-iss {
        min-height: inherit;
        max-height: inherit;
    }
    .below_resume {
        display: none;
    }
    .below_hot_key_toggle {
        display: none;
    }
    .below-hot-res-after {
        margin-top: 150px;
    }
    .geescore-work-block p.gs_description{
        padding:0 15px;
    }

}

@media only screen and (min-width: 481px) and (max-width: 575px) {
    .column.is-5,
    .column.is-5-tablet {
        width: 100%;
        margin-left: 0px;
    }
    .job_title_job_seeker {
        margin-left: 0px;
        text-align: center;
    }
    #jobseeker-frame {
        left: 42px !important;
        width: 420px !important;
    }
    .img_container {
        width: 100%;
        margin: 0;
        float: left;
        text-align: center;
    }
    #gs_up_img {
        margin: 15px 15px !important;
        position: relative;
        z-index: 9;
    }
    #gs_up_img1 {
        margin: -20px auto;
    }
    .columns {
        /*float: left;*/
    }
    .column.is-5,
    .column.is-5-tablet {
        float: left;
    }
        /* new */

    #geescore-widget #drop-resume-here {
        width: auto !important;
        margin-left: 0px !important;
        text-align: left !important;
        position: relative;
        left: 181px;
    }
    #geescore-widget .RTool-wrapper {
        /*padding-left: 14px !important;*/
        margin: 0 auto;
        right: 71.9% !important;
        top: 0;
    }
    #drop-resume-parent span img {
        position: relative;
        left: 46px;
    }
    #geescore-widget .job-title {
        min-width: 90% !important;
        max-width: 100%;
        margin-left: 0px !important;
    }
    #geescore-widget .score-job-title {
        min-width: 90% !important;
        max-width: 100%;
        margin-left: 0px !important;
    }
    #score-view-parent span img {
        left: 46px;  
    }
    #geescore-widget .score {
        left: 130px;
    }
    #geescore-widget .main-container {
        width: 290px !important;
    }
    #geescore-widget .score-loading {
        margin-left: 135px !important;
    }
    #geescore-widget .email-modal {
        top: -275px !important;
        left: 100px;
        width: 100% !important;
        /*z-index: 9;*/
    }
    /*#checkClass1 {
        top: 1640px !important;
        left: 0 !important;
        width: 100% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
    }
    #checkClass2 {
        top: 1640px !important;
        left: 0 !important;
        width: 100% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
    }
    #checkClass3 {
        top: -45px !important;
        left: 0 !important;
        width: 100% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
    }
    #checkClass1::after {
        left: 18%;
    }
    #checkClass2::after {
        left: 42%;
    }
    #checkClass3::after {
        left: 67%;
    }*/
     /*#checkClass1 {
        top: -92px !important;
        left: 0 !important;
        width: 99% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
        height: 342px !important;
    }
     #checkClass2 {
        top: -90px !important;
        left: 0 !important;
        width: 99% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
        height: 340px !important;
    }
     #checkClass3 {
        top: -60px  !important;
        left: 0 !important;
        width: 99% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
        min-height: 310px;
        max-height: 500px;
    }
    #checkClass1::after {
        left: -240px;
        right: 0px;
        width: 7%;
        text-align: center;
        margin-left: 290px;
        margin: auto;
    }
   
    #checkClass2::after {
        left: 0;
        right: 0;
        width: 7%;
        margin: auto;
        text-align: center;
        margin-left: 290px;
    }
     #checkClass3::after {
        left: 0;
        right: -235px;
        width: 7%;
        margin: auto;
        text-align: center;
        margin-left: 290px;
    }*/
    .text-of-image-top-pos {
        left: 105px;
        margin: 0 auto;
        top: 58px;
    }
    .text-of-image-top-pos-before-score {
        left: 105px;
        margin: 0 auto;
        top: 45px;
    }
    #checkClass2 {
        left: -140px;
    }
   
    .pop-up-for-data-widget {
        display: inline-block;
    }
    #form_position_father {
        padding: 10px;
    }
   #popup-id-1 {
        left: 148px !important;
        right: 0 !important;
        margin: 119px auto !important;
        width: 293px;
    }

.loader-1 {
    left: 117px;
    top: 64px;
}

    .gee-without-score img {
        text-align: center;
        margin-left: 10px;
    }
    .gee-without-score {
        text-align: center;
        margin-top: 15px;
        width: 100%;
    }
    .gee-with-score {
        position: inherit;
        left: 10px;
        min-width: 100%;
        max-width: 100%;
        right: 0;
        margin: 0 auto;
        text-align: center;
    }
    #form_title {
        /*padding: 100px;*/
        

    }
    .coltentoele {
        float: left;
    }
    .below_resume {
        font-size: 25px;
        
        
        width: 100%;
    }
    #upload_own_res {
        position: relative;
        top: 40px;
    }
    .iframe-new1 {
        margin-top: 60px;
    }
    .main_con_div {
        position: relative;
    }
    .below_hot_key_toggle {
        width: 96%;
        text-align: center;
    }
    .below-resume-res {
        display: block !important;
    }
    .below-hot-res {
        display: block !important;
    }
    .Text-p-iss {
        min-height: inherit;
        max-height: inherit;
    }
    .gee-with-score img {
        width: auto;
    }
    .below_resume {
        display: none;
    }
    .below_hot_key_toggle {
        display: none;
    }
    .below-hot-res-after {
        margin-top: 25px;
    }
    .score-of-image-top {
    left: 0px;
    top: 78px;
    right:256px;
    margin: 0 auto;
    }
    #new_loader_1 {
        left: 79px;
        top: 64px;
    }
}

@media only screen and (min-width: 320px) and (max-width: 480px) {
    .column.is-5,
    .column.is-5-tablet {
        width: 100%;
        margin-left: 0px;
        display: inline-block;
    }

    .job_title_job_seeker {
        margin-left: 0px;
        text-align: center;
    }
    .job_title_job_seeker input {
        margin-left: 10px !important;
    }
    .img_container {
        width: 100%;
        margin: 0;
        float: left;
        margin: 0 auto;
        text-align: center;
    }
    #gs_up_img {
        margin: 0px 9px !important;
        position: relative;z-index: 9;
    }
    #gs_up_img1 {
        margin: -20px auto;
    }
    #jobseeker-frame {
        left: 0px !important;
        width: 481px !important;
    }

     /* new */

    #geescore-widget #drop-resume-here {
        width: 76% !important;
        left: 0px;
        margin-top: -89px !important;
        margin-left: 105px !important;
    }
    #geescore-widget .RTool-wrapper {
        margin: 0 auto;
        right: 100% !important;
        top: -25px;
        width: 100% !important;
        padding-left: 325px !important;
    }
    #drop-resume-parent span img {
        position: relative;
        left: 0px;
        width: 36.1%;
    }
    #score-view-parent span img {
        position: relative;
        left: 0px;
        width: 36.1%;
    }
    #geescore-widget .job-title {
        min-width: 90% !important;
        max-width: 100%;
        margin-left: 0px !important;
        margin: -43px auto !important;
    }
    #geescore-widget .score-job-title {
        min-width: 90% !important;
        max-width: 100%;
        margin-left: 0px !important;
        margin: -43px auto !important; 
    } 
    #geescore-widget .score {
        left: 60px;
        top: -18px;
    }
    #geescore-widget .main-container {
        width: 290px !important;
    }
    #geescore-widget .score-loading {
        /*margin-left: 135px !important;*/
        left: -55px;
        top: -20px;
    }
    #geescore-widget .RTool-content {
        width: 100% !important;
        padding-left: 5px !important;
    }
    #geescore-widget .close-btn1 {
        margin-left: 98px !important;
        top: 25px !important;
    }
    #geescore-widget .close-btn2 {
        top: 25px !important;
        margin-left: 120px !important;
    }
    #geescore-widget .email-modal {
        top: -255px !important;
        width: 90% !important;
        left: 0;
    }

    /*#checkClass1 {
        top: -113px !important;
        left: 0 !important;
        width: 99% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
        height: 342px !important;
    }
    #checkClass1::after {
        left: -225px;
        right: 0px;
        width: 7%;
        text-align: center;
        margin-left: 290px;
        margin: auto;
    }
    #checkClass2 {
        top: -114px !important;
        left: 0 !important;
        width: 99% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
        height: 340px !important;
    }
    #checkClass2::after {
        left: 0;
        right: 0;
        width: 7%;
        margin: auto;
        text-align: center;
        margin-left: 290px;
    }
    #checkClass3 {
        top: -90px  !important;
        left: 0 !important;
        width: 99% !important;
        background: #fff !important;
        right: 0 !important;
        margin: 0 auto !important;
        margin: 0 auto !important;
        padding: 10px 6px;
        min-height: 310px;
        max-height: 500px;
    }*/
    #checkClass2 {
        width: auto;
        left: -100px;
        right: -100px;
    }
    #checkClass1 {
        width: auto;
        left: 15px;
        right: -203px;
    }
    #checkClass3 {
        width: auto;
        left: -202px;
        right: 8px !important;
    }

    .gee-with-score {
    min-width: 100%;
    max-width: 100%;
    left: 0px;
    }


    .pop-up-for-data-widget {
        display: inline-block;
    }
    .titles_span {
        font-size: 30px;
    }
   /* #checkClass3::after {
        left: 0;
        right: -210px;
        width: 7%;
        margin: auto;
        text-align: center;
         margin-left: 290px;
    }*/
    #form_position_father {
        padding: 0px 15px;
    }
    #popup-id-1 {
    left: 0px !important;
    right: 0 !important;
    margin: 112px auto !important;
    width: 311px;
    text-align: center;
}
    .image_tester {
        width: 311px !important;
        height: 99px;
        margin: 0 auto;
        text-align: center;
    }
    .gee-with-score {
        text-align: center;
        width: 100%;
    }
   
    .wrap-4_1>input {
        width: 130px !important;
        height: 103px !important;
    }
    .score-of-image-top {
        font-size: 25px;
        left: 25px;
        right: 0;
        text-align: left;
        top: 59px;
        width: 215px;
        margin: 0 auto;
    }
    .text-of-image-top-pos {
        top: 45px;
        left: 80px;
        font-size: 14px;
        text-align: center;
        right: 0;
        width: 190px;
        letter-spacing: inherit;
        margin: 0 auto;
    }
    .text-of-image-top-pos-before-score{
        top: 45px;
        left: 80px;
        font-size: 14px;
        text-align: center;
        right: 0;
        width: 190px;
        letter-spacing: inherit;
        margin: 0 auto;
    }
    .loader-1 {
        right: 0;
        left: 62px;
        top: 44px;
    }
    .gee-without-score {
        text-align: center;
        margin-top: 15px;
        width: 100%;
    }
    .coltentoele {
        /*float: left;*/
    }
    #form_title {
        /*display: none;*/
    }
    .below_resume {
        font-size: 25px;
       
        width: 100%;
    }
    #upload_own_res {
        position: relative;
        top: 40px;
    }
    .iframe-new1 {
        margin-top: 60px;
    }
    .main_con_div {
        position: relative;
    }
    .below_hot_key_toggle {
        width: 96%;
        text-align: center;
        display: block;
    }
    .below-resume-res {
        display: block !important;
    }
    .below-hot-res {
        display: block !important;
    }
    .below_resume {
        display: none;
    }
    .below_hot_key_toggle {
        display: none;
    }
    .below-hot-res-after {
        margin-top: 110px;
    }
    .sample_resume_block:hover .popup.display-popup{
        width: 320px
    }
    
}

.recent-job-listing{
    padding:10px 8px;
    font-family: 'Lato', sans-serif;
}
.recent-job-listing .job-score-popup {
    display: none;
    z-index: 0;
    position: absolute;
    left: 42px;
    right: 0;
    top: 23px;
    /*z-index: 1;*/
    font-size: 27px;
    color: #009eff;
    font-weight: 700;
}
.recent-job-listing .score-heading{
    background: url("https://www.totalcareerhub.com/img/whatsmyscore-tester.png?1") no-repeat;
    height:80px;
    position: relative;
    margin-top: 5px;
    background-size: contain;
}.score-heading .score-hover
.recent-job-listing > .content{
    display:none;
}
.recent-job-listing .job-matrix{
    font-size:12px;
}
.recent-job-listing h3{
    color: #000000;
    margin:-2px 0px 3px 0px;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    font-size:21px;
    text-align:left;
}
.recent-job-listing .job-title {
    font-weight: 700;
    color: #fff;
    font-size: 14px;
    font-family: 'Lato', sans-serif;
    position: absolute;
    top: 30px;
    left: 93px;
    width: 168px;
    height: 35px;
    overflow: hidden;
    z-index: 0;
    text-align: center;
}
.recent-job-listing #job-title{
    z-index: 1 !important;
    /*left: 50px !important;
    right: 0px !important;
    width: auto !important;
    height: auto !important;*/
}
.recent-job-listing .job-company{
    color:#bdbdbd;
    font-size:14px;
}
.recent-job-listing .job-location{
    color:#bdbdbd;
    margin-bottom:5px;
    font-size:12px;
}
.your_score-remi {
    color: #fff !important;
}
.recent-job-listing .job-description{
    color:#bdbdbd;
    font-size:13px;
    height:75px;
    overflow: hidden;
}
.recent-job-listing .job-link {
    color: #000000;
    margin-bottom: 10px;
    font-size: 12px;
    display: block;
    font-weight: 600;
    padding: 8px 20px 0px 13px;
    text-decoration: none;
    cursor: pointer;
    font-family: 'open-sans', sans-serif;
    
}
.recent-job-listing .view-all{
    color:#ffffff;
    background-color:#0079c2;
    padding:10px 34px 10px 10px;
    display: inline-block;
    font-size:14px;
}
.your_score-remi {
    color: #fff !important;
}
.recent-job-listing .title {
    width: 100px;
    display: inline-block;
    font-weight: bold;
    font-size: 14px;
    margin-bottom: 0px;
    font-family: 'Lato', sans-serif;
}
.list-job-weight {
    font-size: 14px;
    font-family: 'Lato', sans-serif;
}
.djob-descriptionhr {
    margin: 0px;
}
.main_gee_content {
    line-height: 15px;
}
.recent-job-listing .modal-content {
    overflow: initial;
}
.recent-job-listing .all-job-tags{
    /*margin:10px 0px;*/
}
.recent-job-listing .modal-body{
    margin:5px 0px;
}
.recent-job-listing .djob-title {
    font-weight:bold;
    font-size:16px;
}
.recent-job-listing .djob-description {
    margin:10px 0px;
    line-height: 20px;
}
.recent-job-listing .djob-company {
    margin-left:5px;
}
.recent-job-listing .djob-location {
    margin-left:5px;
}
.recent-job-listing .djob-city {
    margin-left:5px;
}
.recent-job-listing .djob-postal_code {
    margin-left:5px;
}
.recent-job-listing .djob-province {
    margin-left:5px;
}
.recent-job-listing .djob-permanent{
    margin-left:5px;
}

/* message inline */

#popup-id-1_popup {
    position: absolute;
    width: 284px;
    top: 92%;
    left: 0%;
    z-index: 1;
    height: 100vh;
    border: 0;
    display: none;
}

/* message inline */

.loader {
    border: 5px solid #f3f3f3; /* Light grey */
    border-top: 5px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 20px;
    height: 20px;
    animation: spin 2s linear infinite;
    margin:0px auto;
}
/* The Modal (background) */
.recent-job-listing .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 99999; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.recent-job-listing .modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width:300px; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.recent-job-listing .close {
    color: #ffffff;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.recent-job-listing .close:hover, 
.recent-job-listing .close:focus {
    color: #ffffff;
    text-decoration: none;
    cursor: pointer;
}


/* Modal Header */
.recent-job-listing .modal-header {
    padding: 2px 16px;
    background-color: #0079c2;
    color: white;
}
.recent-job-listing .modal-header  h2{
    margin:5px 0px;
    font-size:18px;
}
/* Modal Body */
.recent-job-listing .modal-body {
    padding: 2px 16px;
}

/* Modal Footer */
.recent-job-listing .modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* Modal Content */
.recent-job-listing .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 500px;
    max-width:100%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
    margin-top: 150px;
}
.modal-body .score-heading{
    position:relative;
    cursor: pointer;
    margin: 10px 19%;
}
.score-heading{
    position:relative;
    cursor: pointer;
}
.score-heading .score-hover{
    position: absolute;
    left: 86px;
    top: -11px;
    background-color: #ffffff;
    padding: 2px;
    font-weight: bold;
    color: #000000;
    font-size: 11px;
    display: none;
    text-align: center;
}
.score-heading:hover .score-hover{display: block;}

html {
    background-image: url(img/bck_03.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color: #999;
}


</style>
<?php
get_header(); ?>
<!DOCTYPE html>

<html lang="en">

   <head>

      <meta charset="utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Geescore Beta</title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">

      <link rel="stylesheet" href="bulma.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <script src="js/Geescore_beta.js"></script>

      <style>

         #more {display: none;}

      </style>

   </head>

   <body>

      <!-- BANNER SECTION -->

      <div class="columns banner-column">

         <!-- change img size by pradeep --> 

         <div class="column" id="colu-1"><img src="../wp-content/themes/consultix-child/01banner.png"></div>

      </div>

      <!-- /BANNER SECTION -->

      <!-- EMAIL COLLECTION SECTION -->

      <div class="columns">

         <div class="column is-2 is-hidden-mobile"></div>

         <div class="column is-8">

            <div id="main">

               <div class="columns">

                  <div class="column is-1 is-hidden-mobile"></div>

                  <div class="column is-10 full-on-hidden-mobile">

                     <div id="form_container" class="email-confirmation-form">

                        <input placeholder="Your email here" id="in_01" size="25" type="email" >

                        <input id="in_02" placeholder="Confirm your email" type="email" size="25">

                        <p id="mail" style="display:none"></p>

                        <button type="submit" id="c_e_btn" id="submit_mail" onclick="myFunction()">ENTER</button>

                        <p id="thanks_p"></p>

                     </div>

                  </div>

                  <div class="column is-1 is-flex is-hidden-mobile">

                  </div>

               </div>

               <!-- /EMAIL COLLECTION SECTION -->

               <!-- /BANNER SECTION -->

               <!-- VIDEO SECTION -->

               <div class="columns">

                  <div class="column is-1 is-hidden-mobile"></div>

                  <div class="column is-10 coltentoele">

                     <div class="video_container">

                        <video poster="img/video-poster.png" controls>

                           <source src="video/Geescore_final_Beta.mp4" type="video/mp4">

                           Your browser does not support the video tag.

                        </video>

                     </div>

                  </div>

                  <div class="column is-1 is-hidden-mobile"></div>

               </div>

               <!-- DESCRIPTION SECTION -->

               <div class="columns">

                  <div class="column is-1 is-hidden-mobile"></div>

                  <div class="column is-10 coltentoele geescore-work-block">

                     <span class="titles_span" id="what_we_do">How Geescore works</span>

                     <p class="gs_description">

                        The Geescore Beta gives you a preview of the full Scoring Tool. <br><br>

                        Choose a sample resume, or upload your own. 

                        <br><br>

                        Geescore applies over 12 parameters to calculate your score. <br><br>

                        Get a higher score, by adding, sharing and fixing.<br><br> 

                     </p>

                     <div id="centering">

                        <div id="benefits">

                           <div class="chec-box-rem"><span class="icon"><img src="img/option_icon.png"></span></div>

                           <div class="chec-box-rem-text">It is secure and private.</div>

                           <br>

                        </div>

                        <div id="benefits">

                           <div class="chec-box-rem"><span class="icon"><img src="img/option_icon.png"></span></div>

                           <div class="chec-box-rem-text">Don't waste your time applying to unsuitable job opportunities.</div>

                           <br>

                        </div>

                        <div id="benefits">

                           <div class="chec-box-rem"><span class="icon"><img src="img/option_icon.png"></span></div>

                           <div class="chec-box-rem-text">Get a higher score, and get connected to the company.</div>

                           <br><br>

                        </div>

                        <div id="benefits">

                           <div class="chec-box-rem"><span class="icon"><img src="img/option_icon.png"></span></div>

                           <div class="chec-box-rem-text">Identify jobs where you have a high score.</div>

                        </div>

                     </div>

                  </div>

                  <div class="column is-1 is-hidden-mobile"></div>

               </div>

               <!-- /DESCRIPTION SECTION -->

               <div class="pop-up-for-data-widget try-geescore-block">

                  <div class="columns">

                     <div class="column is-1 is-hidden-mobile"></div>

                     <div class="column is-10">

                        <span class="titles_span" id="what_we_do">Try Geescore now</span>

                        <div id="expl">

                        </div>

                     </div>

                     <div class="column is-1 is-hidden-mobile"></div>

                  </div>

                  <!-- GEESCORE BTNS -->

                  <div class="columns column-for-wadget Text-p-iss">

                     <div class="column is-1 is-hidden-mobile"></div>

                     <div class="column is-4 pick-smpl-res">

                        <div class="img_container">

                           <p class="gs_btn_title gs-height">Pick a sample resume</p>

                           <div class="sample_resume_block" id="sample_resume_block_1"  onmouseover="show_popup1()" onmouseout="hide_popup1()">

                               <img src="img/upl_resume_btn1.png" id="gs_up_img" width="70px" class="res1">

                           </div>

                           <div class="sample_resume_block" id="sample_resume_block_2"  onmouseover="show_popup2()" onmouseout="hide_popup2()">

                                <img src="img/upl_resume_btn2.png" id="gs_up_img" width="70px"  class="res2">

                           </div>

                           <div class="sample_resume_block" id="sample_resume_block_3"  onmouseover="show_popup3()" onmouseout="hide_popup3()">

                                <img src="img/upl_resume_btn3.png" id="gs_up_img" width="70px" class="res3" >

                           </div>

                           <div class="device_popups"></div>

                           <div class="below_resume below-resume-res">Click to see Scores below</div>

                        </div>

                     </div>

                     <div class="column is-6">

                        <p class="gs_btn_title upload-own-res-p" id="upload_own_res">Upload your own resume</p>

                        <!-- new add -->

                        <div class="wrap-4_1 iframe-new1">

                           <!-- <div class="gee-without-score"> -->

                              <!-- <img class="image_tester" id="tester1_tester-1" src="https://totalcareerhub.com/img/whatsmyscore-tester.png"> -->

                              <!-- <div class="text-of-image-top-pos-before-score"> -->

                              <!-- </div>  -->

                           <!-- </div> -->

                          <!--  <div class="gee-with-score">-->

                              <!-- <img class="image_tester" id="tester1_tester-1" src="https://totalcareerhub.com/img/after-score-tester-new.png"> -->

                              <!-- <div class="loader-image-1">

                                 <div class="loader-1" id="new_loder_1" >

                                 </div>

                              </div>

                              <div class="score-of-image-top">

                                 <input type="hidden" name="test-inpt" style="display: none;" id="job_score_board" value="">

                                 <input type="hidden" name="test-inpt-email" style="display: none;" id="job_score_board_email" value="">

                                 <input type="hidden" name="test-inpt-title" style="display: none;" id="job_score_board_title" value="">

                                 <p id="job_board_score"></p>

                              </div>

                              <div class="text-of-image-top-pos">

                              </div>

                           </div>  -->

                           <div class="frame-iframe">

                              <!-- <iframe title="Jobseeker Iframe" id="jobseeker-frame" class="upload_own_res_iframe" src="https://geemode.com/beta/job_alert_resume_hot_key_jobseeker_new.php" frameborder="0" scrolling = "no" style="width: 100%;height: 185px;position: absolute;top: 0px;left: 0px;bottom: 0;z-index: 4;max-width:100%;margin: 0 auto;"></iframe> -->

                              <!-- change widget-id by pradeep -->

                              <div id="geescore-widget" class="cleanslate geescore-widget" widget-id="CB39817"></div>

                              <script src="https://totalcareerhub.com/gs-widget/widget.js"></script>

                           </div>

                        </div>

                        <!-- <iframe title="Popup Iframe" src="https://totalcareerhub.com/message-inline/msg-inline.html" id="popup-id-1"  style="display: none;"></iframe> --> 

                        <!-- new add -->

                        <div class="job_seeker_view" id='container_hot_key'>

                           <div class="job_seeker_view_width" id="elem">

                              <div class="job_seeker_view_width_section">

                                 <div class="job_title_job_seeker">

                                    <input type="image" src="https://totalcareerhub.com/img/whatsmyscore-tester.png" id="tester_uploads" class="images_tester" style="width:100%; margin-left:60px">

                                 </div>

                              </div>

                           </div>

                        </div>

                        <div class="below_hot_key_toggle below-hot-res ">See your own Score below</div>

                     </div>

                  </div>

                  <div class="main_con_div columns">

                     <div class="below_resume">Click to see Scores below</div>

                     <div class="below_hot_key_toggle">See your own Score below</div>

                  </div>

                  

               </div>

               <!-- GEESCORE BTNS -->

               <div class="columns">

                  <div class="column is-1 is-hidden-mobile"></div>

                  <div class="column is-10 coltentoele">

                     <div class="job_offers">

                        <ul id="joff_list">

                           <li id="page" class="list">

                              <span class="joff_title joff_title_first">

                              <a class="offer_link " onclick="show()">Partner Success Manager</a>

                              </span>

                              <div class="pin_container">

                                 <span class="score_pin">    

                                 <img src="img/pin.png">

                                 </span>

                              </div>

                              <div class="where_when">

                                 <span class="icon">

                                 <img src="img/watch_icon.png">

                                 </span>

                                 <span class="joff_time joff_time_first">Posted on 2019-04-17</span>

                                 <span class="icon">|</span><span class="icon"><img src="img/location_icon.png"></span><span class="joff_location joff_location_first">Oakland, CA</span>

                              </div>

                              <p class="joff_description joff_description_first"><span class="more1_short">We are looking for an experienced marketing professional to manage key brand partnerships under the Flow Kana Distribution and Powered By Flow Kana umbrellas. </span><span class="dots1 notes">(note: this is a short excerpt of the full job posting)</span><span id="more" class="more1"><span class="more1_long">Our ideal candidate will build strong relationships with our brand partners’ marketing teams to maximize sales and marketing opportunities throughout the ecosystem. Candidate will continually look for actionable ways to improve communications, marketing tool kits, cross-brand promotion opportunities and best practice development.</span><span class="more-sp">(note: this is a longer excerpt of the full job posting)</span> </span></p>

                              <!--<div class="btn_position"><button  class="read_more_btn" id="1">Read more</button></div>-->

                           </li>

                           <li id="page" class="list">

                              <span class="joff_title joff_title_first"><a class="offer_link " onclick="show()"  >Construction Project Manager</a></span>

                              <div class="pin_container"><span class="score_pin">    <img src="img/pin.png"></span></div>

                              <div class="where_when"><span class="icon"><img src="img/watch_icon.png"></span><span class="joff_time joff_time_first">Posted on 2019-04-17</span><span class="icon">|</span><span class="icon"><img src="img/location_icon.png"></span><span class="joff_location joff_location_first">Chicago, IL</span></div>

                              <p class="joff_description joff_description_first"><span class="more1_short"> We’re seeking a logistical genius and construction management guru to oversee new retail/dispensary construction projects.  As a Construction Project Manager with GTI/RISE, you will be responsible for serving as the liaison between GTI HQ and our dispensary build-outs in the field ensuring scope of work is executed, </span><span class="dots2 notes">(note: this is a short excerpt of the full job posting)</span><span id="more" class="more2"> <span class="more1_long">quality of brand is maintained, timelines are beat, and budgets are always in the green! <br> You should have off the charts communication skills to work with sub-contractors/vendors and your teammates alike. As a proven Construction PM, you have managed over a dozen projects at a time working across a national landscape. </span><br> <span class="more-sp">(note: this is a longer excerpt of the full job posting) </span> </span></p>

                              <!--<div class="btn_position"><button  class="read_more_btn"  id="2">Read more</button></div>-->

                           </li>

                           <li id="page" class="list">

                              <span class="joff_title joff_title_first"><a class="offer_link " onclick="show()">Assistant Store Manager</a></span>

                              <div class="pin_container"><span class="score_pin">    <img src="img/pin.png"></span></div>

                              <div class="where_when"><span class="icon"><img src="img/watch_icon.png"></span><span class="joff_time joff_time_first">Posted on 2019-04-17</span><span class="icon">|</span><span class="icon"><img src="img/location_icon.png"></span><span class="joff_location joff_location_first">Hallandale Beach FL</span></div>

                              <p class="joff_description joff_description_first"><span class="more1_short">We are a team of people inspiring and empowering others to live their best lives. We believe that everyone deserves the dignity of health and well-being and are on a mission to provide safe, </span><span class="dots3 notes">(note: this is a short excerpt of the full job posting)</span><span id="more" class="more3"><span class="more1_long"> effective and therapeutic medical cannabis nationwide by operating world class cultivation facilities and customer-first retail experiences. <br> We are committed to progressing positive social change and providing dignified access to safe and quality cannabis nationwide while giving back to the communities we call home.</span> <br><span class="more-sp"> (note: this is a longer excerpt of the full job posting)</span> </span></p>

                              <!--<div class="btn_position"><button class="read_more_btn" id="3">Read more</button></div>-->

                           </li>

                           <li id="page" class="list">

                              <span class="joff_title joff_title_first"><a class="offer_link " onclick="show()">Store Manager</a></span>

                              <div class="pin_container"><span class="score_pin">    <img src="img/pin.png"></span></div>

                              <div class="where_when"><span class="icon"><img src="img/watch_icon.png"></span><span class="joff_time joff_time_first">Posted on 2019-04-17</span><span class="icon">|</span><span class="icon"><img src="img/location_icon.png"></span><span class="joff_location joff_location_first">Latrobe, PA</span></div>

                              <p class="joff_description joff_description_first"><span class="more1_short">We are a team of people inspiring and empowering others to live their best lives. We believe that everyone deserves the dignity of health and well-being and are on a mission to provide safe,  </span><span class="dots4 notes ">(note: this is a short excerpt of the full job posting) </span><span id="more" class="more4"><span class="more1_long">effective and therapeutic medical cannabis nationwide by operating world class cultivation facilities and customer-first retail experiences.<br> We are committed to progressing positive social change and providing dignified access to safe and quality cannabis nationwide while giving back to the communities we call home. </span><br> <span class="more-sp">(note: this is a longer excerpt of the full job posting)</span>

                              </span></p>

                              <!--<div class="btn_position"><button  class="read_more_btn" id="4">Read more</button></div>-->

                           </li>

                           <li id="page" class="list">

                              <span class="joff_title joff_title_first"><a class="offer_link " onclick="show()">Dispensary General Manager </a></span>

                              <div class="pin_container"><span class="score_pin">    <img src="img/pin.png"></span></div>

                              <div class="where_when"><span class="icon"><img src="img/watch_icon.png"></span><span class="joff_time joff_time_first">Posted on 2019-04-16</span><span class="icon">|</span><span class="icon"><img src="img/location_icon.png"></span><span class="joff_location joff_location_first">Southern, CA</span></div>

                              <p class="joff_description joff_description_first"><span class="more1_short">In this role as General Manager for retail operations, you will oversee day to day operations for our Southern California dispensaries.  You will foster a culture of teamwork and camaraderie, with communication being at the forefront of teambuilding. </span><span class="dots5 notes" >(note: this is a short excerpt of the full job posting)</span><span id="more" class="more5"><span class="more1_long">You will coordinate the details of daily operations, working closely with the Director of Retail Operations.  You will oversee security, reporting and cash management procedures related to opening and closing of the dispensary as well as the scheduling of employees and overseeing payroll responsibilities. </span><span class="more-sp">(note: this is a longer excerpt of the full job posting) </span></span></p>

                              <!--<div class="btn_position"><button  class="read_more_btn" id="5">Read more</button></div>-->

                           </li>

                           <li id="page" class="list">

                              <span class="joff_title joff_title_first"><a class="offer_link " onclick="show()">VP of Retail Operations</a></span>

                              <div class="pin_container"><span class="score_pin">    <img src="img/pin.png"></span></div>

                              <div class="where_when"><span class="icon"><img src="img/watch_icon.png"></span><span class="joff_time joff_time_first">Posted on 2019-04-16</span><span class="icon">|</span><span class="icon"><img src="img/location_icon.png"></span><span class="joff_location joff_location_first">Denver, CO</span></div>

                              <p class="joff_description joff_description_first"><span class="more1_short">The VP of Retail Operations is primarily responsible for the effective performance management of all retail stores and General Managers and Assistant Managers. The VP of Retail Operations ensures that all retail facilities are operating in accordance with company policies, as well as local and state regulations.</span><span class="dots6 notes">(note: this is a short excerpt of the full job posting) </span><span id="more" class="more6"> <span class="more1_long">Additionally, the VP of Retail Operations will provide oversight for all retail facilities, ensuring inventory levels are above set par levels and that all retail facilities are up to Company’s marketing and design standards. Finally, the VP of Retail Operations will assist in owning and innovating the customer experience for their departments as they work closely with various business partners to deliver business results. </span><br> <span class="more-sp">(note: this is a longer excerpt of the full job posting) </span></span></p>

                              <!--<div class="btn_position"><button class="read_more_btn" id="6">Read more</button></div>-->

                           </li>

                           <li id="page" class="list">

                              <span class="joff_title joff_title_first"><a class="offer_link " onclick="show()">Cultivation Positions</a></span>

                              <div class="pin_container"><span class="score_pin">    <img src="img/pin.png"></span></div>

                              <div class="where_when"><span class="icon"><img src="img/watch_icon.png"></span><span class="joff_time joff_time_first">Posted on 2019-04-15</span><span class="icon">|</span><span class="icon"><img src="img/location_icon.png"></span><span class="joff_location joff_location_first">Alaska</span></div>

                              <p class="joff_description joff_description_first"><span class="more1_short">Manages and maintains grow-house protocols for a small, medium, and large-scale cannabis cultivation facilities. Perform tasks in the grow including: cloning, transplanting, feeding plants, defoliation, topping, flushing, and inventory management. </span><span class="dots7 notes">(note: this is a short excerpt of the full job posting) </span><span id="more" class="more7"><span class="more1_long">Develops and maintains grow warehouse protocols and nutrient regiment. Sets propagation, germination and planting protocols for all crops. Highly knowledgeable and well researched on many growing techniques and provides insight to expand the company’s knowledge of growing techniques that result in continually gains in plant yield. </span><br> <span class="more-sp">(note: this is a longer excerpt of the full job posting) </span></span></p>

                              <!--<div class="btn_position"><button  class="read_more_btn" id="7" >Read more</button></div>-->

                           </li>

                           <li id="page" class="list">

                              <span class="joff_title joff_title_first"><a class="offer_link " onclick="show()">Account Manager</a></span>

                              <div class="pin_container"><span class="score_pin">    <img src="img/pin.png"></span></div>

                              <div class="where_when"><span class="icon"><img src="img/watch_icon.png"></span><span class="joff_time joff_time_first">Posted on 2019-04-15</span><span class="icon">|</span><span class="icon"><img src="img/location_icon.png"></span><span class="joff_location joff_location_first">Alaska</span></div>

                              <p class="joff_description joff_description_first"><span class="more1_short">The Account Manager is a sales position that will be actively calling on new prospects and cross selling and upselling existing accounts. The position involves calling recreational, medical and delivery dispensaries to introduce them to the payroll/HR products and Recruitment services. </span><span class="dots8 notes">(note: this is a short excerpt of the full job posting)</span><span id="more" class="more8"><span class="more1_long"> This role is responsible for identifying upsell and cross-sell opportunities with existing clients. The Account Manager should have a minimum of 4 years of relevant sales experience and have an understanding of payroll, Human Resource, and staffing services. The ideal Account Manager candidate will be comfortable in a fluid, dynamic startup environment, passionate about the Cannabis industry and will bring an energetic, fun and creative approach to their work. </span><br> <span class="more-sp">(note: this is a longer excerpt of the full job posting) </span></span></p>

                              <!--<div class="btn_position"><button class="read_more_btn" id="8">Read more</button></div>-->

                           </li>

                        </ul>

                     </div>

                  </div>

               </div>

               <!-- FORM SECTION -->

               <p id="form_title">Feedback</p>

               <div class="columns">

                  <div class="column is-1 is-hidden-mobile"></div>

                  <div class="column is-10 coltentoele">

                     <div id="form_position_father">

                        <label>Can Geescore help a jobseeker? As a jobseeker, do you think finding out about jobs where you have a high score would help you in your search?</label><br>

                        <input type="radio" id="q1_r1" name="q1_r" value="yes"><label for="q1_r1">Yes</label><br>

                        <input type="radio" id="q1_r2" name="q1_r" value="no"><label for="q1_r2">No</label><br><br>

                        <textarea rows="10" cols="95" name="comment" placeholder="Your comment here"  id="msg1"></textarea>

                        <br><br>

                        <label>The biggest problem in hiring. Pick one or write on your own.</label><br>

                        <ul>

                           <li>

                              <input type="radio" name="q2_r" value="Finding enough candidates." id="q2_r1"><label for="q2_r1">Finding enough candidates.</label><br>

                           </li>

                           <li>

                              <input type="radio" name="q2_r" value="Current HR systems aren't user-friendly or customizable." id="q2_r2"><label for="q2_r2">Current HR systems aren't user-friendly or customizable.</label><br>

                           </li>

                           <li>

                              <input type="radio" name="q2_r" value="Sorting through too many unsuitable candidates." id="q2_r3"><label for="q2_r3">Sorting through too many unsuitable candidates.</label><br><br>

                           </li>

                        </ul>

                        <textarea rows="10" cols="95" name="comment" placeholder="Your comment here" id="msg2"></textarea>

                        <br><br>

                        <label>Compared to your friends, family and colleagues, you consider yourself... Pick one.</label><br>

                        <ul>

                           <li>

                              <input type="radio" name="q3_r" id="q3_r1" value="Early Adopter of new technology: I am one of the first to try it, get it or use it"><label for="q3_r1">Early Adopter of new technology: I am one of the first to try it, get it or use it.</label><br>

                           </li>

                           <li>

                              <input type="radio" name="q3_r" id="q3_r2" value="Mainstream User of new technology: I get on board when I see its better and others are in"><label for="q3_r2">Mainstream User of new technology: I get on board when I see its better and others are in.</label><br>

                           </li>

                           <li>

                              <input type="radio" name="q3_r" id="q3_r3" value="Cautious User of new technology: Ill get it, or use it only when the price is right, and its mature and well-proven."><label for="q3_r3">Cautious User of new technology: Ill get it, or use it only when the price is right, and its mature and well-proven.</label><br><br>

                           </li>

                        </ul>

                        <textarea rows="10" cols="95" name="comment" placeholder="Your comment here" id="msg3"></textarea>

                        <br><br><br>

                        <label>How do you feel about Artificial Intelligence in HR Talent Acquisition? Pick all that apply.</label><br>

                        <ul>

                           <li>

                              <input type="checkbox" id="q4_chk1" value="I am worried that AI will miss the human touch."><label for="q4_chk1">I am worried that AI will miss the human touch.</label><br>

                           </li>

                           <li>

                              <input type="checkbox" id="q4_chk2" value="All for it - we need automation to help us be more efficient."><label for="q4_chk2">All for it - we need automation to help us be more efficient.</label><br>

                           </li>

                           <li>

                              <input type="checkbox" id="q4_chk3" value="I am worried about bias in how the AI system is trained."><label for="q4_chk3">I am worried about bias in how the AI system is trained.</label><br><br>

                           </li>

                        </ul>

                        <br>

                        <textarea rows="10" cols="95" name="comment" placeholder="Your comment here" id="msg4"></textarea>

                        <br><br>

                        <label>Which is the most important factor towards making a good hire?</label><br>

                        <ul>

                           <li>

                              <input type="radio" name="q5_r" value="Face to face interviews." id="q5_r1"><label for="q5_r1">Face to face interviews.</label><br>

                           </li>

                           <li>

                              <input type="radio" name="q5_r" value="Decision-making data: Resume, cover letter, etc." id="q5_r2"><label for="q5_r2">Decision-making data: Resume, cover letter, etc.</label><br>

                           </li>

                           <li>

                              <input type="radio" name="q5_r" value="Testing: EQ, personality, skill." id="q5_r3"><label for="q5_r3">Testing: EQ, personality, skill.</label><br>

                           </li>

                           <li>

                              <input type="radio" name="q5_r" value="Candidate presentations." id="q5_r4"><label for="q5_r4">Candidate presentations.</label><br><br>

                           </li>

                        </ul>

                        <textarea rows="10" cols="95" name="comment" placeholder="Your comment here" id="msg5"></textarea>

                        <br><br>

                        <label>Which area of hiring takes up too much time?</label><br>

                        <ul>

                           <li>

                              <input type="checkbox" id="q6_chk1"  value="Reviewing resumes and applications."><label for="q6_chk1">Reviewing resumes and applications.</label><br>

                           </li>

                           <li>

                              <input type="checkbox" id="q6_chk2"    value="Reference checks."><label for="q6_chk2">Reference checks.</label><br>

                           </li>

                           <li>

                              <input type="checkbox" id="q6_chk3"    value="Setting up interviews and scheduling."><label for="q6_chk3">Setting up interviews and scheduling.</label><br>

                           </li>

                           <li>

                              <input type="checkbox"   id="q6_chk4"  value="Interviews."><label for="q6_chk4">Interviews.</label><br>

                           </li>

                           <li>

                              <input type="checkbox"  id="q6_chk5"  value="Writing up offers."><label for="q6_chk5">Writing up offers.</label><br>

                           </li>

                        </ul>

                        <br>

                        <textarea rows="10" cols="95" name="comment" placeholder="Your comment here" id="msg6"></textarea>

                        <br><br>

                        <label>How can we improve Geescore -    What's missing? What didn't work for you? Please leave your comment.</label><br><br>

                        <textarea rows="10" cols="95" name="comment" placeholder="Your comment here" id="msg7"></textarea>

                       <input type="hidden" value="" id="job_id_input">

                        <br><br>

                        <input type="hidden" id="if_update" value="0">

                     </div>

                     <div id="survey_btn">

                        <div class="columns is-mobile">

                           <div class="column is-6">

                              <button type="reset" id="reset_btn" onclick="clearForm()">RESET</button>

                           </div>

                           <div class="column is-6">

                              <button type="submit" id="submit_btn" onclick="newfunction()">SUBMIT</button>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="column is-1 is-hidden-mobile"></div>

               </div>

               <!-- /FORM SECTION -->

               <div class="columns">

                  <div class="column is-2 is-hidden-mobile"></div>

                  <div class="column is-8">

                     <span id="grat">

                     </span>

                  </div>

                  <div class="column is-2 is-hidden-mobile"></div>

               </div>

               <div class="columns">

                  <div class="column is-3 is-hidden-mobile"></div>

                  <div class="column is-6">

                     <p id="credits">

                        Geescore, 2018|2019

                     </p>

                  </div>

                  <div class="column is-3 is-hidden-mobile"></div>

               </div>

            </div>

            <div class="column is-2 is-hidden-mobile"></div>

         </div>

      </div>

      <div class="recent-job-listing">

    <!-- The Modal -->

    <div id="myModal" class="modal" style="display: none;">

        <!-- Modal content -->

        <div class="modal-content">

            <div class="modal-header">

                <span class="close">&times;</span>

                <h2>Job Listing Details</h2>

            </div>

            <div class="modal-body beta-particular-job-popup">

             <div class="score-heading scr-new-head">

            <!-- <iframe id="mydialogframe"  src="https://totalcareerhub.com/canny_v2/job_alert_resume_widget_new.php" frameborder="0" scrolling = "no" style="width: 100%;height: 185px;position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;"></iframe>

        <iframe src="https://totalcareerhub.com/message-inline_v2/msg-inline.html" id="popup-id-1_popup"></iframe> -->

        <div id="geescore-widget" class="cleanslate geescore-widget" widget-id="CB39817"></div>
         <div id="job-title" class="job-title">Oil Product Processing Specialist</div>
         <div id="job-score-popup" class="job-score-popup">0</div>
                                 <!-- <script src="https://totalcareerhub.com/gs-widget/widget.js"></script> -->

        </div>

                <div class="djob-description"></div>
                <hr class="djob-descriptionhr">
                <div class="main_gee_content">
                <div><span class="title">Company </span>: <span class="djob-company list-job-weight"></span></div>
                <div><span class="title">Location </span>: <span class="djob-location list-job-weight"></span></div>
                <div><span class="title">City </span>: <span class="djob-city list-job-weight"></span></div>
                <div><span class="title">Postal Code </span>: <span class="djob-postal_code list-job-weight"></span></div>
                <div><span class="title">Province</span>: <span class="djob-province list-job-weight"></span></div>
                <div style="display: none;"><span class="title">Permanent </span>: <span class="djob-permanent list-job-weight"></span></div>
                <div class="all-job-tags"><span class="title">Job Url</span>:  <span class="djob-url"> <a href="#" class="djob-link" target="_blank"></a></span>              
                </div>

                <div class="all-job-tags" style="display: flex;flex-direction: row"><span class="title">Tags</span>:  <span class="djob-tags"></span></div>
             </div>
            </div>

        </div>

    </div>

    </div>

   </body>

</html>
<?php
get_footer();
?>
<script>

    /******** Start code of display pop up bootom according to window scroll ************/

    $(window).on("scroll", function() {

   

    //console.log("WH=>"+ $(window).height() );

    

    var top_diff = $('.res1').offset().top - $(window).scrollTop();

    //console.log( "top=>" +top_diff );



   // console.log("elInHght==>"+$('.res1').innerHeight() ) ;

    

    var bottom_diff = $(window).height() - $('.res1').innerHeight() - top_diff ;

    //console.log( "bottom=>" +bottom_diff );

    

    if ( bottom_diff > top_diff ) 

    {

        

        $('.sample_resume_block .popup').css({

                'top': '150px',

               // 'bottom': 'auto'

        });



        if(!$(".display-popup").hasClass("bottom-display-popup"))

        {

            $(".display-popup").addClass("bottom-display-popup");

        }





        $('.popup.display-popup#checkClass1::after').css({

                'transform': 'rotate(-180deg)',

                'top': '-39px',

                'left': '-5px',

      });

        $('.popup.display-popup#checkClass1::after').attr('style','transform:rotate(-180deg) !important');

    } 

    else

    {

        $('.sample_resume_block .popup').css({

                'bottom': '60px',

                'top':'auto'

            });

            

        if($(".display-popup").hasClass("bottom-display-popup"))

        {

            $(".display-popup").removeClass("bottom-display-popup");

        }



    }



});

    $(".close").on('click',function()

    {



$("#myModal").css({'display':'none'});



    });

/******** End code of display pop up bootom according to window scroll ************/

</script>