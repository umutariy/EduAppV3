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

    <!-- Multiple choice question -->
    <?php echo form_open("test_choice"); ?>
    <div class="row">
      <div class="input-fieldcol s6">
        <div class="card grey lighten-4">
          <div class="card-action green-text">
            <h5>Question</h5>
          </div>
          <div class="card-content white-text">
            <div class="input-field col s12">
              <input class='validate' type="text" name="question" id="option 1" required/>
              <label for='question'>Question</label>
            </div>
            <div class="input-field col s3">
              <input class='validate' type="text" name="choice1">
              <label for="choice1">Option 1</label>
            </div>
            <div class="input-field col s3">
              <input class='validate' type="text" name="choice2">
              <label for="choice2">Option 2</label>
            </div>
            <div class="input-field col s3">
              <input class='validate' type="text" name="choice3">
              <label for="choice3">Option 3</label>
            </div>
            <button class="btn btn-block waves-effect waves-light" type="submit" name="action2">
              Send Questions
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php echo form_close(); ?>


    