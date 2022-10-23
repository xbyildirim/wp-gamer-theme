 <!-- ***** Details Start ***** -->
 <div class="game-details">
            <div class="row">
              <div class="col-lg-12">
                <h2><?php echo get_the_title() ?>
                <br/><p>
                    <?php  the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>') ?></p> 
                    <p><span><a href="#comments"><i class="fa fa-comment comment"></i><?php comments_number(); ?></a></span></p></h2>
                
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="left-info">
                        <div class="left">
                          <h4>Fortnite</h4>
                          <span>Sandbox</span>
                        </div>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="right-info">
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                          <li><i class="fa fa-server"></i> 36GB</li>
                          <li><i class="fa fa-gamepad"></i> Action</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <img src="assets/images/details-01.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="assets/images/details-02.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="assets/images/details-03.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-12">
                    
                    
                    <?php
                        the_content();
                    ?>
                    
                    
                    </div>
                    <hr />
                    <?php
                          comments_template();
                      ?>
                    <hr />
                    <div class="row">
                        <div class="col-md-6">
                        <div class="main-border-button">
                            <a href="https://github.com/xbyildirim" target="_blank" style="background-color:green !important; color: white; font-size:20px">My Github</a>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="main-border-button">
                            <a href="<?php echo  site_url() ?>" style="font-size:20px">Go Home</a>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->
   