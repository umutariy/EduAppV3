<body class="img">
  <!-- Navigation Bar -->
  <nav>
    <div class="nav-wrapper" style="background-color: #0097a7">
      <a href="#" class="brand-logo center"><i class="material-icons prefix">account_circle</i></a>
      <a class = "btn dropdown-button" style="background-color: transparent;" href = "#" data-activates = "dropdown">
        <i class = "mdi-navigation-arrow-drop-down right material-icons"></i>Academics</a>  
        <a href = "logout" style="background-color: transparent;" class="right">Sign Out</a>
      </div>
    </nav>

    <!-- Main Body -->
    
    <center>
      <h4 style="color: #0097a7">Your Dashboard</h4>
      <div class="row z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 50px; solid #EEE;">
        <div class="col s3 m3" style="background-color: orange">
          <div class="card" >
            <div class="card-image">
              <img src="<?php echo base_url('images/assignment.png');?>" >
            </div>
            <div class="card-action">
              <a href="#"><button class="btn btn-block waves-effect waves-light" type="submit" name="records">View Records
              </button></a>      
            </div>
          </div>
        </div>
        <!-- Start Assignment -->
        <div class="col s3 m6" style="background-color: green">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo base_url('images/edit.png');?>" >
            </div>

            <div class="card-action">
              <a href="students_questions"><button class="btn btn-block waves-effect waves-light" type="submit" name="assignment">Start Assignment
              </button></a>      
            </div>
          </div>
        </div>
        <!-- Message from Teacher -->
        <div class="col s3 m3" style="background-color: red">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo base_url('images/email.jpg');?>" >
            </div>

            <div class="card-action">
              <a href="retrieve_message"><button class="btn btn-block waves-effect waves-light" type="submit" name="assignment">View Message from teacher
              </button></a>      
            </div>
          </div>
        </div>
      </div>
    </center>
