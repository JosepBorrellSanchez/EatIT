
<div class="shop-card-item">
                  <div class="shop-icon"> 
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" width="16px" height="16px">
                      <g><g><path d="m109.1,36.8c-0.3-2-2-3.4-4-3.4h-23v-9.4c0-9.7-7.9-17.6-17.6-17.6-9.7,0-17.6,7.9-17.6,17.6v9.4h-23c-2,0-3.7,1.4-4,3.4l-13.4,81c-0.2,1.2 0.1,2.4 0.9,3.3 0.8,0.9 1.9,1.4 3.1,1.4h108c0,0 0,0 0.1,0 2.3,0 4.1-1.8 4.1-4.1 0-0.5-0.1-0.9-0.2-1.3l-13.4-80.3zm-54-12.8c0-5.2 4.2-9.4 9.4-9.4s9.4,4.2 9.4,9.4v9.4h-18.8v-9.4zm-39.8,90.4l12.1-72.8h19.5v22.9c0,2.3 1.8,4.1 4.1,4.1 2.3,0 4.1-1.8 4.1-4.1v-22.9h18.8v22.9c0,2.3 1.8,4.1 4.1,4.1 2.3,0 4.1-1.8 4.1-4.1v-22.9h19.5l12.1,72.8h-98.4z"></path></g></g>
                    </svg>
                    <div class="shop-number"><?php echo count($this->cart->contents())?></div>
                   </div>  
                   <span class="shop-card-price">Total: <b class="main-col"><?php echo ($this->cart->total())?> €</b></span>

<div class="shop-card-list">
                     <div class="shop-card-align-mobile">
                       <div class="close-card-mobile main-fill-col">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 21.9 21.9" enable-background="new 0 0 21.9 21.9" width="18px" height="18px">
                              <path d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0  c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4  s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3  s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7  s-0.1-0.5-0.3-0.7L14.1,11.3z" fill="#FFFFFF"></path>
                            </svg>
                       </div>  
                       <ul>
                       <?php foreach($this->cart->contents() as $items){ ?>
                           <li class="flex-align">
                               <div class="img hover-zoom">
                                  <a href="#"><img src=<?php echo $items['img'] ?> alt=""></a>
                               </div>
                               <h5 class="h5 caption"><a href="#" class="link-hover"><?php echo $items['name'] ?></a></h5>
                               <div class="shop-counter">
                                   <div class="custom-input-number">
                                      <button type="button" class="cin-btn cin-decrement">
                                        <img src="<?=base_url();?>assets/img/left_arr.png" alt="">
                                      </button>
                                      <input type="number" class="cin-input input-field" step="1" value=<?php echo $items['qty'] ?> min="0" max="1000">
                                      <button type="button" class="cin-btn cin-increment">
                                        <img src="<?=base_url();?>assets/img/right_arr.png" alt="">
                                      </button>
                                  </div>
                              </div>
                              <div class="menu-price main-col"><?php echo $items['price'] ?>€</div>
                              <div class="close-item main-fill-hover">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 64 64" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background=  "new 0 0 64 64"><g><path fill="#1D1D1B" d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/></g>
                                </svg>
                              </div>
                           </li>
                          <?php } ?>
                       </ul>
                       <div class="buy-bar">
                           <div class="fl">
                              <h4 class="h4 caption">Total:<b class="main-col"><?php echo $this->cart->total()?>€</b></h4>  
                           </div>
                           <div class="fr">
                               <a href="<?php echo site_url('botiga/finalitza')?>" class="page-button button-style-1 type-4"><span class="txt">Finalitza la comanda</span></a>
                           </div>
                       </div>
                     </div>   
                   </div>   
                </div>