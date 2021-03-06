<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="format-detection" content="telephone=no" /> 
        <link rel="shortcut icon" href="favicon.ico"/>    
      <title>EAT IT!</title>
      <style id="dynamic-css"></style>
      <style type="text/css">
      .preloader {position: fixed;left: 0;top: 0;width: 100%;height: 100%;background: #fff;text-align: center;z-index: 6001; }
      .preloader:after { content: ""; height: 100%; display: inline-block; vertical-align: middle; }
      .sk-cube-grid {width: 3.857rem;height: 3.857rem;margin: 0 auto;vertical-align: middle;display: inline-block; }
      .sk-cube-grid .sk-cube {width: 33%;height: 33%;background-color: #333;float: left;-webkit-animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out; }
      .sk-cube-grid .sk-cube1 {
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s; }
      .sk-cube-grid .sk-cube2 {
        -webkit-animation-delay: 0.3s;
        animation-delay: 0.3s; }
      .sk-cube-grid .sk-cube3 {
        -webkit-animation-delay: 0.4s;
        animation-delay: 0.4s; }
      .sk-cube-grid .sk-cube4 {
        -webkit-animation-delay: 0.1s;
        animation-delay: 0.1s; }
      .sk-cube-grid .sk-cube5 {
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s; }
      .sk-cube-grid .sk-cube6 {
        -webkit-animation-delay: 0.3s;
        animation-delay: 0.3s; }
      .sk-cube-grid .sk-cube7 {
        -webkit-animation-delay: 0s;
        animation-delay: 0s; }
      .sk-cube-grid .sk-cube8 {
        -webkit-animation-delay: 0.1s;
        animation-delay: 0.1s; }
      .sk-cube-grid .sk-cube9 {
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s; }
      @-webkit-keyframes sk-cubeGridScaleDelay {
        0%, 70%, 100% {
          -webkit-transform: scale3D(1, 1, 1);
          transform: scale3D(1, 1, 1); }
        35% {
          -webkit-transform: scale3D(0, 0, 1);
          transform: scale3D(0, 0, 1); } }
      @keyframes sk-cubeGridScaleDelay {
        0%, 70%, 100% {
          -webkit-transform: scale3D(1, 1, 1);
          transform: scale3D(1, 1, 1); }
        35% {
          -webkit-transform: scale3D(0, 0, 1);
          transform: scale3D(0, 0, 1); } }
    </style>
  </head>
<body class="page-color-style-6 page-style-6">
   
    <div class="preloader">
     <div class="sk-cube-grid selected">
      <div class="sk-cube sk-cube1"></div>
      <div class="sk-cube sk-cube2"></div>
      <div class="sk-cube sk-cube3"></div>
      <div class="sk-cube sk-cube4"></div>
      <div class="sk-cube sk-cube5"></div>
      <div class="sk-cube sk-cube6"></div>
      <div class="sk-cube sk-cube7"></div>
      <div class="sk-cube sk-cube8"></div>
      <div class="sk-cube sk-cube9"></div>
    </div>
   </div>
    
   <?php include 'inc/colorpicker.php';?> 
   <?php include 'inc/headershop.php';?> 
    
  <div class="main-content">
    

    
	   <section class="section">
      <div class="empty-lg-100 empty-md-80 empty-sm-60 empty-xs-50"></div>
      <div class="container"> 
        <div class="row">
          <div class="col-lg-6 col-md-5 col-xs-12">
            <img src=<?php echo $producte['imatge']?> alt="" class="full-img">
          </div>
          <div class="col-lg-6 col-md-7 col-xs-12">
            <div class="empty-sm-0 empty-xs-30"></div>
            <aside>
              <div class="empty-sm-20 empty-xs-20"></div>
              <h4 class="h4 sm tt color-2"><?php echo $producte['nom']?></h4>
              <div class="empty-sm-20 empty-xs-20"></div>
              <h5 class="h5 sm color-2">Price: <span class="h4 main-col"><b><?php echo $producte['preu']?> ???</b></span></h5>
            </aside>
            <div class="empty-sm-20 empty-xs-20"></div>
            <aside class="product-size">
              <h4>OPCIONS DISPONIBLES EN BREUS</h4> </BR>
              <h5 class="h5 sm color-2 inline-box">Tamany:</h5>
              <div class="checkbox-entry-wrap">  
                <label class="checkbox-entry">
                    <input type="radio" name="1" checked="">
                    <span>
                      <i></i>
                      <p>25cm <span>(250g)</span></p>  
                    </span>
                </label>
              </div>
              <div class="checkbox-entry-wrap">  
                <label class="checkbox-entry">
                    <input type="radio" name="1">
                    <span>
                      <i></i>
                      <p>30cm <span>(450g)</span></p>  
                    </span>
                </label>
              </div>
              <div class="checkbox-entry-wrap">  
                <label class="checkbox-entry">
                    <input type="radio" name="1">
                    <span>
                      <i></i>
                      <p>40cm <span>(550g)</span></p>  
                    </span>
                </label>
              </div>
            </aside>
            <div class="empty-sm-25 empty-xs-20"></div>
            <div class="empty-sm-30 empty-xs-20"></div>
            <aside>
              <h5 class="tt h5 sm color-2">Ingredients:</h5>
              <div class="empty-sm-25 empty-xs-15"></div>
              <div class="arrow-closest item-padd-30">
  			       <div class="swiper-container checkbox-wrapp" data-mode="horizontal" data-effect="slide" data-add-slides="4" data-slides-per-view="responsive" data-lg-slides="4" data-md-slides="4" data-xs-slides="2" data-sm-slides="4" data-loop="0" data-speed="800" data-space="13">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" > 
        						  <div class="checkbox-entry-wrap type-1">  
        							<label class="checkbox-entry">
        								<input type="checkbox" checked="">
        								  <div class="content-check">
        								    <img src="img/product-detail/choose-1.jpg" alt="" class="full-img">
                            <div class="empty-sm-10 empty-xs-10"></div>
                            <div class="simple-text">
                              <p><b>ING 1</b></p>
                            </div>
        								</div>
        							</label>
        						  </div>
                    </div>
                    <div class="swiper-slide" > 
                      <div class="checkbox-entry-wrap type-1">  
                      <label class="checkbox-entry">
                        <input type="checkbox" checked="">
                          <div class="content-check">
                            <img src="img/product-detail/choose-2.jpg" alt="" class="full-img">
                            <div class="empty-sm-10 empty-xs-10"></div>
                            <div class="simple-text">
                              <p><b>ING 2</b></p>
                            </div>
                        </div>
                      </label>
                      </div>
                    </div>
                    <div class="swiper-slide" > 
                      <div class="checkbox-entry-wrap type-1">  
                      <label class="checkbox-entry">
                        <input type="checkbox">
                          <div class="content-check">
                            <img src="img/product-detail/choose-3.jpg" alt="" class="full-img">
                            <div class="empty-sm-10 empty-xs-10"></div>
                            <div class="simple-text">
                              <p><b>ING 3</b></p>
                            </div>
                        </div>
                      </label>
                      </div>
                    </div>
                    <div class="swiper-slide" > 
                      <div class="checkbox-entry-wrap type-1">  
                      <label class="checkbox-entry">
                        <input type="checkbox">
                          <div class="content-check">
                            <img src="img/product-detail/choose-4.jpg" alt="" class="full-img">
                            <div class="empty-sm-10 empty-xs-10"></div>
                            <div class="simple-text">
                              <p><b>ING 4</b></p>
                            </div>
                        </div>
                      </label>
                      </div>
                    </div>
        					</div>
                </div>
                <div class="swiper-arrow-left swiper-arrow type-3 style-3">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 129 129" enable-background="new 0 0 129 129" width="19px" height="19px">
                    <g>
                    <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z" fill="#FFFFFF"/>
                    </g>
                  </svg> 
                </div> 
                <div class="swiper-arrow-right swiper-arrow type-3 style-3">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 129 129" enable-background="new 0 0 129 129" width="19px" height="19px">
                    <g>
                    <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z" fill="#FFFFFF"/>
                    </g>
                  </svg>  
                </div>
              </div>
            </aside>
            <div class="empty-sm-40 empty-xs-25"></div>
            <aside>
            <div class="buy-bar type-2">
               <div class="fr">
                   <a href=<?php echo site_url('/botiga/add/'.$producte['id'])?> class="page-button button-style-1 type-2"><span class="txt">Afegir</span></a>
               </div>
            </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
	
    <section class="section">
      <div class="empty-lg-50 empty-md-50 empty-sm-40 empty-xs-30"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <div class="text-center">
              <ul class="item-tabs type-2">
                <li class="active"><a href="#" class="link-hover-line type-2">Descripci??</a></li>
              </ul>
            </div>
            <div class="tab-container-wraps">
              <div class="tab-container-item min-h-430">
                <div class="empty-sm-60 empty-xs-30"></div>
                <div class="simple-text">
                  <p><?php echo $producte['descripcio']?></p>
                </div>
                <div class="row">
                  <div class="col-sm-4 col-xs-12">
                    <div class="empty-sm-45 empty-xs-20"></div>
                    <img src="img/product-detail/description-1.jpg" alt="" class="full-img">
                  </div>
                  <div class="col-sm-4 col-xs-12">
                    <div class="empty-sm-45 empty-xs-20"></div>
                    <img src="img/product-detail/description-2.jpg" alt="" class="full-img">
                  </div>
                  <div class="col-sm-4 col-xs-12">
                    <div class="empty-sm-45 empty-xs-20"></div>
                    <img src="img/product-detail/description-3.jpg" alt="" class="full-img">
                  </div>
                </div>
              </div>
              
          </div>
        </div>
      </div>
    </section>

    

    
	</div>
   
<footer class="footer footer-style-1 type-2 page-style-6">
     <div class="empty-sm-60 empty-xs-40"></div>   
       <div class="container">
           <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                   <div class="footer-item">
                       <img src="img/logo.png" alt="">
                       <div class="empty-sm-15 empty-xs-15"></div> 
                       <div class="simple-text">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                       </div>
                       <div class="empty-sm-20 empty-xs-20"></div>
                       <ul class="list-style-2 ul-list">
                           <li><span>Address: </span>150 Duffy Ave, Hicksville, NY 11801, USA</li>
                           <li><span>Phone: </span><a href="tel:" class="link-hover">+38 056 23 15 7851</a></li>
                           <li><span>Email: </span><a href="mailto:" class="link-hover">delice.info@mail.com</a></li>
                       </ul>
                       <div class="empty-sm-30 empty-xs-30"></div>
                       <div class="follow follow-style-2 sm">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve" width="16px" height="16px"><g>
                                    <path id="f_1_" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184   c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452   v20.341H37.29v27.585h23.814v70.761H89.584z" fill="#FFFFFF"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve" width="16px" height="16px">
                                <g id="XMLID_826_">
                                    <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73   c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783   c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598   C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467   c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977   c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889   c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597   c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961   c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895   c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367   c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998   C307.394,57.037,305.009,56.486,302.973,57.388z" fill="#FFFFFF"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 604.35 604.35" style="enable-background:new 0 0 604.35 604.35;" xml:space="preserve">
                                    <g><g id="google-plus"><path d="M516.375,255v-76.5h-51V255h-76.5v51h76.5v76.5h51V306h76.5v-51H516.375z M320.025,341.7l-28.051-20.4    c-10.2-7.649-20.399-17.85-20.399-35.7s12.75-33.15,25.5-40.8c33.15-25.5,66.3-53.55,66.3-109.65c0-53.55-33.15-84.15-51-99.45    h43.35l30.6-35.7h-158.1c-112.2,0-168.3,71.4-168.3,147.9c0,58.65,45.9,122.4,127.5,122.4h20.4c-2.55,7.65-10.2,20.4-10.2,33.15    c0,25.5,10.2,35.7,22.95,51c-35.7,2.55-102,10.2-150.45,40.8c-45.9,28.05-58.65,66.3-58.65,94.35    c0,58.65,53.55,114.75,168.3,114.75c137.7,0,204.001-76.5,204.001-150.449C383.775,400.35,355.725,372.3,320.025,341.7z     M126.225,109.65c0-56.1,33.15-81.6,68.85-81.6c66.3,0,102,89.25,102,140.25c0,66.3-53.55,79.05-73.95,79.05    C159.375,247.35,126.225,168.3,126.225,109.65z M218.024,568.65c-84.15,0-137.7-38.25-137.7-94.351c0-56.1,51-73.95,66.3-81.6    c33.15-10.2,76.5-12.75,84.15-12.75s12.75,0,17.85,0c61.2,43.35,86.7,61.2,86.7,102C335.324,530.4,286.875,568.65,218.024,568.65z    " fill="#FFFFFF"></path>
                                    </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </a>
                      </div>
                       <div class="empty-sm-30 empty-xs-30"></div>
                   </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                 <div class="footer-item">  
                   <h5 class="h5">Menu categories</h5>
                    <div class="empty-sm-15 empty-xs-15"></div>
                        <ul class="list-style-3 ul-list">
                            <li><a href="#" class="link-hover">PIZZA</a></li>
                            <li><a href="#" class="link-hover">STARTERS AND SIDES</a></li>
                            <li><a href="#" class="link-hover">PASTA AND MAINS</a></li>
                            <li><a href="#" class="link-hover">DESSERTS</a></li>
                            <li><a href="#" class="link-hover">SALAD</a></li>
                            <li><a href="#" class="link-hover">DRINKS</a></li>
                            <li><a href="#" class="link-hover">EXCLUSIVE OFFES</a></li>
                        </ul>
                    <div class="empty-sm-30 empty-xs-30"></div>
                 </div>    
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                 <div class="footer-item">  
                   <h5 class="h5">quick links</h5>
                    <div class="empty-sm-15 empty-xs-15"></div>
                        <ul class="list-style-3 ul-list">
                            <li><a href="#" class="link-hover">HOME</a></li>
                            <li><a href="#" class="link-hover">ABOUT</a></li>
                            <li><a href="#" class="link-hover">MENU</a></li>
                            <li><a href="#" class="link-hover">PAGES</a></li>
                            <li><a href="#" class="link-hover">BLOG</a></li>
                            <li><a href="#" class="link-hover">CONTACT</a></li>
                            <li><a href="#" class="link-hover">RESERVATION</a></li>
                        </ul>
                    <div class="empty-sm-30 empty-xs-30"></div>
                 </div> 
               </div>
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="footer-item">  
                   <h5 class="h5">Join Us On Instagram</h5>
                   <div class="empty-sm-20 empty-xs-20"></div> 
                   <div class="f-instagram">
                       <a href="#"><img src="img/inst_1.jpg" alt=""></a>
                       <a href="#"><img src="img/inst_2.jpg" alt=""></a>
                       <a href="#"><img src="img/inst_3.jpg" alt=""></a>
                       <a href="#"><img src="img/inst_4.jpg" alt=""></a>
                       <a href="#"><img src="img/inst_5.jpg" alt=""></a>
                       <a href="#"><img src="img/inst_6.jpg" alt=""></a>
                       <a href="#"><img src="img/inst_7.jpg" alt=""></a>
                       <a href="#"><img src="img/inst_8.jpg" alt=""></a>
                       <a href="#"><img src="img/inst_9.jpg" alt=""></a>
                       <a href="#"><img src="img/inst_10.jpg" alt=""></a>
                   </div>
                   <div class="empty-sm-20 empty-xs-20"></div> 
                   <div class="follow follow-style-2 sm">
                       <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve">
                            <g><path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752   c17.455,0,31.656,14.201,31.656,31.655V122.407z" fill="#FFFFFF"></path><path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" fill="#FFFFFF"></path><path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78   C135.661,29.421,132.821,28.251,129.921,28.251z" fill="#FFFFFF"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                       </a>
                   </div>
                   <div class="caption-inst">
                       <h6>Follow us:</h6>
                       <a href="#"><span>#delice</span></a>
                   </div>
                   <div class="empty-sm-30 empty-xs-30"></div>
                 </div>
               </div>
           </div>
           <div class="empty-sm-10 empty-xs-10"></div>
       </div>
       <div class="copyright text-center">
          <div class="empty-sm-20 empty-xs-20"></div>
           <div class="container">
               <span>?? 2017 All Rights Reserved. Development by <a href="#">UnionAgency</a></span>
           </div>
           <div class="empty-sm-20 empty-xs-20"></div> 
       </div>
   </footer>

    <div class="popup index-popup-gallery" data-rel="1">
       <div class="popup-wrap type-2">
          <div class="empty-sm-0 empty-xs-15"></div>
          <div class="container quick-wrapp"> 
          <div class="close-popup type-2">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 21.9 21.9" enable-background="new 0 0 21.9 21.9" width="14px" height="14px">
            <path d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0  c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4  s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3  s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7  s-0.1-0.5-0.3-0.7L14.1,11.3z" fill="#484848"/>
            </svg> 
         </div> 
            <div class="row left-right-item">
              <div class="col-md-6 col-xs-12">
                <img src="img/shop/pop-up.png" alt="" class="full-img">
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="quick-content">
                  <div class="empty-sm-0 empty-xs-30"></div>
                  <aside>
                    <div class="empty-sm-20 empty-xs-20"></div>
                    <h4 class="h3 sm tt color-2">Mediterranean Shrimp Pizza</h4>
                    <div class="empty-sm-20 empty-xs-20"></div>
                    <h5 class="h5 sm color-2">Price: <span class="h4 main-col"><b>$8.40</b></span></h5>
                  </aside>
                  <div class="empty-sm-20 empty-xs-20"></div>
                  <aside class="product-size">
                    <h5 class="h5 sm color-2 inline-box">Size:</h5>
                    <div class="checkbox-entry-wrap">  
                      <label class="checkbox-entry">
                          <input type="radio" name="1" checked="">
                          <span>
                            <i></i>
                            <p>25cm <span>(250g)</span></p>  
                          </span>
                      </label>
                    </div>
                    <div class="checkbox-entry-wrap">  
                      <label class="checkbox-entry">
                          <input type="radio" name="1">
                          <span>
                            <i></i>
                            <p>30cm <span>(450g)</span></p>  
                          </span>
                      </label>
                    </div>
                    <div class="checkbox-entry-wrap">  
                      <label class="checkbox-entry">
                          <input type="radio" name="1">
                          <span>
                            <i></i>
                            <p>40cm <span>(550g)</span></p>  
                          </span>
                      </label>
                    </div>
                  </aside>
                  <div class="empty-sm-25 empty-xs-20"></div>
                  <aside>
                    <div class="simple-text">
                      <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat null eiusmod tempor incididunt ut labore tore veritatis </p>
                    </div>
                  </aside>
                  <div class="empty-sm-25 empty-xs-20"></div>
                  <aside>
                    <h5 class="tt h5 sm color-2">Choose Ingredients:</h5>
                    <div class="empty-sm-25 empty-xs-15"></div>
                    <div class="arrow-closest item-padd-30">
                     <div class="swiper-container checkbox-wrapp" data-mode="horizontal" data-effect="slide" data-add-slides="3" data-slides-per-view="responsive" data-lg-slides="3" data-md-slides="3" data-xs-slides="2" data-sm-slides="4" data-loop="0" data-speed="800" data-space="13">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide" > 
                            <div class="checkbox-entry-wrap ">  
                            <label class="checkbox-entry">
                              <input type="checkbox" checked="">
                                <div class="content-check">
                                  <img src="img/product-detail/??hoose-1.jpg" alt="" class="full-img">
                                  <div class="empty-sm-10 empty-xs-10"></div>
                                  <div class="simple-text">
                                    <p><b>Peperoni</b></p>
                                  </div>
                              </div>
                            </label>
                            </div>
                          </div>
                          <div class="swiper-slide" > 
                            <div class="checkbox-entry-wrap ">  
                            <label class="checkbox-entry">
                              <input type="checkbox" checked="">
                                <div class="content-check">
                                  <img src="img/product-detail/??hoose-2.jpg" alt="" class="full-img">
                                  <div class="empty-sm-10 empty-xs-10"></div>
                                  <div class="simple-text">
                                    <p><b>Ham</b></p>
                                  </div>
                              </div>
                            </label>
                            </div>
                          </div>
                          <div class="swiper-slide" > 
                            <div class="checkbox-entry-wrap ">  
                            <label class="checkbox-entry">
                              <input type="checkbox">
                                <div class="content-check">
                                  <img src="img/product-detail/??hoose-3.jpg" alt="" class="full-img">
                                  <div class="empty-sm-10 empty-xs-10"></div>
                                  <div class="simple-text">
                                    <p><b>Mashrooms</b></p>
                                  </div>
                              </div>
                            </label>
                            </div>
                          </div>
                          <div class="swiper-slide" > 
                            <div class="checkbox-entry-wrap ">  
                            <label class="checkbox-entry">
                              <input type="checkbox">
                                <div class="content-check">
                                  <img src="img/product-detail/??hoose-4.jpg" alt="" class="full-img">
                                  <div class="empty-sm-10 empty-xs-10"></div>
                                  <div class="simple-text">
                                    <p><b>Ruccola</b></p>
                                  </div>
                              </div>
                            </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-arrow-left swiper-arrow type-3 style-3">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 129 129" enable-background="new 0 0 129 129" width="19px" height="19px">
                          <g>
                          <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z" fill="#FFFFFF"/>
                          </g>
                        </svg> 
                      </div> 
                      <div class="swiper-arrow-right swiper-arrow type-3 style-3">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 129 129" enable-background="new 0 0 129 129" width="19px" height="19px">
                          <g>
                          <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z" fill="#FFFFFF"/>
                          </g>
                        </svg>  
                      </div>
                    </div>
                  </aside>
                  <div class="empty-sm-40 empty-xs-25"></div>
                  <aside>
                  <div class="buy-bar type-2">
                     <div class="fl">
                        <h5 class="h5 sm follow-title quntity">Quantity:</h5>
                        <div class="custom-input-number type-2">
                          <button type="button" class="cin-btn cin-decrement">
                            <img src="img/left_arr.png" alt="">
                          </button>
                          <input type="number" class="cin-input input-field" step="1" value="1" min="0" max="1000">
                          <button type="button" class="cin-btn cin-increment">
                            <img src="img/right_arr.png" alt="">
                          </button>
                        </div>
                        <div class="empty-sm-0 empty-xs-15"></div>
                     </div>
                     <div class="fr">
                         <a href="#" class="page-button button-style-1 type-2"><span class="txt">Add to cart</span></a>
                     </div>
                  </div>
                  </aside>
                </div>
              </div>
            </div>
          </div>
          <div class="empty-sm-0 empty-xs-15"></div>
       </div> 
   </div>

<!-- POPUP LOGIN -->
    <div class="popup index-popup-login" data-rel="3">
      <div class="popup-wrap popup-layer">
        <div class="empty-sm-0 empty-xs-15"></div>
        <div class="container size-1">
          <div class="popup-inner">   
            <div class="close-popup type-2">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 21.9 21.9" enable-background="new 0 0 21.9 21.9" width="14px" height="14px">
            <path d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0  c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4  s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3  s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7  s-0.1-0.5-0.3-0.7L14.1,11.3z" fill="#484848"/>
            </svg> 
            </div>
            <div class="main-caption text-center color-type-2">
              <h2 class="h2 tt">log in</h2>
            </div>
            <div class="empty-sm-30 empty-xs-30"></div>
            <form action="#">
              <div class="input-field-wrap">
                <input type="email" class="input-field" placeholder="Your email" name="email" required=""> 
                <div class="focus"></div>
              </div>
              <div class="empty-sm-15 empty-xs-15"></div>
              <div class="input-field-wrap">
                <input type="text" class="input-field" placeholder="Enter password" name="password" required=""> 
                <div class="focus"></div>
              </div>
              <div class="empty-sm-20 empty-xs-20"></div>
              <div class="simple-text xs forgot fl color-3">
                <a href="#"><p>Forgot password</p></a>
              </div>
              <div class="simple-text xs reg-now fr">
                <a href="#"><p>Register now</p></a>
              </div>
              <div class="empty-sm-30 empty-xs-20"></div>
              <div class="text-center"> 
                <div class="page-button button-style-1 type-2">
                  <input type="submit">
                  <span class="txt">register</span><i></i>
                </div>
              </div>
            </form>
            <div class="empty-sm-30 empty-xs-30"></div>
            <div class="text-center sign-as"> 
              <div class="simple-text color-3">
                <p>Sign in us</p>
              </div>
            </div>
            <div class="empty-sm-30 empty-xs-30"></div>
            <div class="popup-follow">
              <a href="#" class="page-button button-style-1 type-4 face"><span class="txt">facebook</span><span class="f-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve" width="14px" height="14px"><g>
                <path id="f_1_" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184   c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452   v20.341H37.29v27.585h23.814v70.761H89.584z" fill="#FFFFFF"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
              </a>
              <a href="#" class="page-button button-style-1 type-4 twit"><span class="txt">twitter</span><span class="f-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve" width="14px" height="14px"><g id="XMLID_826_">
                <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73   c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783   c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598   C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467   c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977   c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889   c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597   c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961   c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895   c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367   c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998   C307.394,57.037,305.009,56.486,302.973,57.388z" fill="#FFFFFF"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
              </a>
              <a href="#" class="page-button button-style-1 type-4 google"><span class="txt">google</span><span class="f-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="14px" height="14px" viewBox="0 0 604.35 604.35" style="enable-background:new 0 0 604.35 604.35;" xml:space="preserve">
                <g><g id="google-plus"><path d="M516.375,255v-76.5h-51V255h-76.5v51h76.5v76.5h51V306h76.5v-51H516.375z M320.025,341.7l-28.051-20.4    c-10.2-7.649-20.399-17.85-20.399-35.7s12.75-33.15,25.5-40.8c33.15-25.5,66.3-53.55,66.3-109.65c0-53.55-33.15-84.15-51-99.45    h43.35l30.6-35.7h-158.1c-112.2,0-168.3,71.4-168.3,147.9c0,58.65,45.9,122.4,127.5,122.4h20.4c-2.55,7.65-10.2,20.4-10.2,33.15    c0,25.5,10.2,35.7,22.95,51c-35.7,2.55-102,10.2-150.45,40.8c-45.9,28.05-58.65,66.3-58.65,94.35    c0,58.65,53.55,114.75,168.3,114.75c137.7,0,204.001-76.5,204.001-150.449C383.775,400.35,355.725,372.3,320.025,341.7z     M126.225,109.65c0-56.1,33.15-81.6,68.85-81.6c66.3,0,102,89.25,102,140.25c0,66.3-53.55,79.05-73.95,79.05    C159.375,247.35,126.225,168.3,126.225,109.65z M218.024,568.65c-84.15,0-137.7-38.25-137.7-94.351c0-56.1,51-73.95,66.3-81.6    c33.15-10.2,76.5-12.75,84.15-12.75s12.75,0,17.85,0c61.2,43.35,86.7,61.2,86.7,102C335.324,530.4,286.875,568.65,218.024,568.65z    " fill="#FFFFFF"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
              </a>
            </div>
          </div>
        </div>
      </div> 
    </div>

   <!-- POPUP REGISTER -->
    <div class="popup index-popup-register" data-rel="4">
      <div class="popup-wrap popup-layer">
        <div class="empty-sm-0 empty-xs-15"></div>
        <div class="container size-1">
          <div class="popup-inner">   
            <div class="close-popup type-2">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 21.9 21.9" enable-background="new 0 0 21.9 21.9" width="14px" height="14px">
            <path d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0  c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4  s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3  s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7  s-0.1-0.5-0.3-0.7L14.1,11.3z" fill="#484848"/>
            </svg> 
            </div>
            <div class="main-caption text-center color-type-2">
              <h2 class="h2 tt">register</h2>
            </div>
            <div class="empty-sm-30 empty-xs-30"></div>
            <form action="#">
              <div class="input-field-wrap">
                <input type="text" class="input-field" placeholder="Your name" name="name" required=""> 
                <div class="focus"></div>
              </div>
              <div class="empty-sm-15 empty-xs-15"></div>
              <div class="input-field-wrap">
                <input type="email" class="input-field" placeholder="Your email" name="email" required=""> 
                <div class="focus"></div>
              </div>
              <div class="empty-sm-15 empty-xs-15"></div>
              <div class="input-field-wrap">
                <input type="password" class="input-field" placeholder="Enter password" name="password" required=""> 
                <div class="focus"></div>
              </div>
              <div class="empty-sm-15 empty-xs-15"></div>
              <div class="input-field-wrap">
                <input type="password" class="input-field" placeholder="Repeat password" name="rep_password" required=""> 
                <div class="focus"></div>
              </div>
              <div class="empty-sm-20 empty-xs-20"></div>
              <div class="checkbox-entry-wrap">  
                  <label class="checkbox-entry color-2">
                    <input type="checkbox">
                    <span>
                      <i></i>
                      <p>Privacy police agreement</p>  
                    </span>
                </label>
              </div>
              <div class="empty-sm-30 empty-xs-20"></div>
              <div class="text-center"> 
                <div class="page-button button-style-1 type-2">
                  <input type="submit">
                  <span class="txt">register</span><i></i>
                </div>
              </div>
            </form>
            <div class="empty-sm-30 empty-xs-30"></div>
            <div class="text-center sign-as"> 
              <div class="simple-text color-3">
                <p>Sign in us</p>
              </div>
            </div>
            <div class="empty-sm-30 empty-xs-30"></div>
            <div class="popup-follow">
              <a href="#" class="page-button button-style-1 type-4 face"><span class="txt">facebook</span><span class="f-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve" width="14px" height="14px"><g>
                <path id="f_1_" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184   c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452   v20.341H37.29v27.585h23.814v70.761H89.584z" fill="#FFFFFF"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
              </a>
              <a href="#" class="page-button button-style-1 type-4 twit"><span class="txt">twitter</span><span class="f-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve" width="14px" height="14px"><g id="XMLID_826_">
                <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73   c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783   c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598   C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467   c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977   c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889   c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597   c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961   c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895   c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367   c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998   C307.394,57.037,305.009,56.486,302.973,57.388z" fill="#FFFFFF"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
              </a>
              <a href="#" class="page-button button-style-1 type-4 google"><span class="txt">google</span><span class="f-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="14px" height="14px" viewBox="0 0 604.35 604.35" style="enable-background:new 0 0 604.35 604.35;" xml:space="preserve">
                <g><g id="google-plus"><path d="M516.375,255v-76.5h-51V255h-76.5v51h76.5v76.5h51V306h76.5v-51H516.375z M320.025,341.7l-28.051-20.4    c-10.2-7.649-20.399-17.85-20.399-35.7s12.75-33.15,25.5-40.8c33.15-25.5,66.3-53.55,66.3-109.65c0-53.55-33.15-84.15-51-99.45    h43.35l30.6-35.7h-158.1c-112.2,0-168.3,71.4-168.3,147.9c0,58.65,45.9,122.4,127.5,122.4h20.4c-2.55,7.65-10.2,20.4-10.2,33.15    c0,25.5,10.2,35.7,22.95,51c-35.7,2.55-102,10.2-150.45,40.8c-45.9,28.05-58.65,66.3-58.65,94.35    c0,58.65,53.55,114.75,168.3,114.75c137.7,0,204.001-76.5,204.001-150.449C383.775,400.35,355.725,372.3,320.025,341.7z     M126.225,109.65c0-56.1,33.15-81.6,68.85-81.6c66.3,0,102,89.25,102,140.25c0,66.3-53.55,79.05-73.95,79.05    C159.375,247.35,126.225,168.3,126.225,109.65z M218.024,568.65c-84.15,0-137.7-38.25-137.7-94.351c0-56.1,51-73.95,66.3-81.6    c33.15-10.2,76.5-12.75,84.15-12.75s12.75,0,17.85,0c61.2,43.35,86.7,61.2,86.7,102C335.324,530.4,286.875,568.65,218.024,568.65z    " fill="#FFFFFF"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
              </a>
            </div>
            </div>
          </div>
        </div> 
      </div>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">  
<link href="<?=base_url();?>assets/css/style.css" rel="stylesheet" type="text/css"/>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery-ui.min.js"></script>
<script src="<?=base_url();?>assets/js/jscolor.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery.knob.js"></script>
<script src="<?=base_url();?>assets/js/jquery.throttle.js"></script>
<script src="<?=base_url();?>assets/js/jquery.classycountdown.js"></script>
<script src="<?=base_url();?>assets/js/jarallax.js"></script>
<script src="<?=base_url();?>assets/js/all.js"></script>
<script src="<?=base_url();?>assets/js/color.picker.js"></script>

</body>
</html>	