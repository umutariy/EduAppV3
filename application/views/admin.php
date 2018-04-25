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


  <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <!-- <img src="images/sample-1.jpg"> -->
          <table>
            <tr>
              <?php
                foreach ( $table as $blog )
                {
                  $attendance= $blog->Attendance_Status;
                }
              ?>
            </tr>
            <tr>
              <td><?php echo $attendance;?></td>
            </tr>

          </table>
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
            