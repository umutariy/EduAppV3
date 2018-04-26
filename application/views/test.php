<body class="img">
  <!-- Navigation Bar -->
  <nav>
    <div class="nav-wrapper" style="background-color: #0097a7">
      <a href="#" class="brand-logo center"><i class="material-icons prefix">account_circle</i></a>
      <ul id = "dropdown" class = "dropdown-content">
        <li><a href="getStudent">Students</a></li>
        <li><a href="test">Assignments</a></li>
        <li><a href="message">Message</a></li>
        <li><a href="#">Grades</a></li>
      </ul>
      <a class = "btn dropdown-button" style="background-color: transparent;" href = "#" data-activates = "dropdown">
        <i class = "mdi-navigation-arrow-drop-down right material-icons"></i>Academics</a>  
        <a href = "logout" style="background-color: transparent;" class="right">Sign Out</a>
      </div>
    </nav>

    <!--************* Question Type *****************-->
    <center>
      <div class="row">
        <div class="col s12 m6">
          <div class="card grey lighten-4">
            <div class="card-action green-text">
              <h5> Choose the type of question </h5>
            </div>
            <div class="card-content">
              <a href="test_multi" id="option" class="btn" style="margin-left: -50px" name="multiple_choice"><i class="fa fa-dot-circle-o"></i> Choice</a>
              <a href="test_fillin" id="text" class="btn" name="fill_in">Text</a>
            </div>
          </div>
        </div>
      </div>
    </center>
