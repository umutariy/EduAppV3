<body class="img">
    <div class="section"></div>
    <main>
        <center>

            <!-- Form -->
            <?php echo form_open("login"); ?>
            <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 50px; solid #EEE;">
                <div class="section"></div>
                
                <!-- Thank you card -->
                <div class="row">
                    <div class="col m12">
                        <div class="card">
                            <div class="card-image">
                                <img src="<?php echo base_url('images/thank_you.jpg');?>">
                            </div>
                            <div class="card-content">
                                <p>Thank you for taking attendance. THis will be helpful in tracking the attendace of teacher</p>
                            </div>
                            <div class="card-action">
                                <button class="btn waves-effect" type="submit" name="back">Back To Children</button>
                            </div>
                      </div>
                  </div>
              </div>
          </div><!-- end of the entire div -->

          <?php echo form_close(); ?>
      </center>
  </main>