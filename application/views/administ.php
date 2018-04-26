  	<body class="img">
      <nav>
       <div class="nav-wrapper" style="background-color: #0097a7">
        <a href="#" class="brand-logo center"><i class="material-icons prefix">account_circle</i></a>
        
        <ul id = "dropdown" class = "dropdown-content">
          <li><a href="#">Children</a></li>
          <li><a href="#">Assignments</a></li>
          <li><a href="#">Records</a></li>
        </ul>
        <a class = "btn dropdown-button" style="background-color: transparent;" href = "#" data-activates = "dropdown">
          <i class = "mdi-navigation-arrow-drop-down right material-icons"></i>Academics</a>	
          <a href = "logout" style="background-color: transparent;" class="right">Sign Out</a>
        </div>
      </nav>
      <div class="section"></div>
      <center>
        <div  style="padding-top: 100px;" class="col s3 m3" style="background-color: green">
          <div class="card">
            <div class="card-image">
              <img style="width: 30%;" src="<?php echo base_url('images/attendance.jpg');?>" />
            </div>

            <div class="card-action">
              <a href="admin"><button class="btn btn-block waves-effect waves-light" type="submit" name="assignment">Check Attendance
              </button></a>      
            </div>
          </div>
        </div>
      </center>