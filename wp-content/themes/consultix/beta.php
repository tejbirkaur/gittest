<?php /* Template Name: beta */ ?>
<!-- <link rel="stylesheet" href="/bulma.css" type="text/css"> -->
<style>
<?php include 'bulma.css'; ?>
</style>

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

         <div class="column" id="colu-1"><img src="img/01banner.jpg"></div>

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