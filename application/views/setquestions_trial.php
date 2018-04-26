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

    <!-- Main Body -->
    
    <center>
      <h4 style="color: #0097a7">Set Questions</h4>
      <fieldset class="fieldset">
        <?php echo form_open("test_choice"); ?>
         
          <div class="row">
            <!-- title -->
            <div class='input-field col s6'>
              <input class='validate' type="text" name='title' required />
              <label for='title'>Title</label>
            </div>
            <!-- subject -->
            <div class='input-field col s6'>
              <input class='validate' type="text" name='subject' required />
              <label for='subject'>Subject</label>
            </div>
          </div>
          <div class="row">
            <!-- Class -->
            <div class="input-field col s6">
              <select name="class">
                <option value="" disabled selected>Classes</option>
                <option value="1">Primary 1</option>
                <option value="2">Primary 2</option>
                <option value="3">Primary 3</option>
              </select>
            </div>
            <!-- due date -->
            <div class='input-field col s6'>
              <input class='validate datepicker' type="text" name='due_date' required />
              <label for='due_date'>Due date</label>
            </div>
          </div>

          <!-- Add Question -->
           <div class="row">
            <button class="btn btn-block waves-effect waves-light" type="submit" name="action2">
            Add Questions
              <i class="material-icons right">send</i>
            </button>
          </div>
         <?php echo form_close(); ?>
      </fieldset>
    </center>

    