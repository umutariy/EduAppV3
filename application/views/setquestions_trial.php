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
        <form>


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
          <div class="row">
            <!-- add questions -->
            <div class="input-field col s6">
              <button class="btn btn-block waves-effect waves-light" type="submit" name="action" onclick="createQuestion()">Add Questions
                <i class="material-icons right">send</i>
              </button>  
            </div>
            
          </div>
          
          <!--************* Questions *****************-->
          <div class="row input-field col s12" id="questions" style="display: none">
            <!-- mutltiple choice -->
            <div class="input-field col s6" id="btns">
              <a id="option" class="btn" onclick="choice()" style="margin-left: -50px"><i class="fa fa-dot-circle-o"></i> Choice</a>
              <a id="text" class="btn" onclick="text_Input()">Text</a>
            </div>
            
            <!-- Multiple choice question -->
            <div id="choice" class="input-field col s12">
              <div class="input-field col s12">
                <input class='validate' type="text" name="question" id="option 1" required/>
                <label for='question'>Question</label>
              </div>
              <div class="input-field col s3">
                <input class='validate' type="text" name="choice1">
                <label for="choice">Option 1</label>
              </div>
              <div class="input-field col s3">
                <input class='validate' type="text" name="choice2">
                <label for="option 2">Option 2</label>
              </div>
            </div>

            <!-- Fill in text questions -->
            <div id="text_input" class="input-field col s12">
              <div class="input-field col s12">
                <input class='validate' type="text" name="fill_in" id="option 1" required/>
                <label for='fill_in'>Question</label>
              </div>
              <div class="input-field col s12">
                <input value="" class='validate' type="text" name="question" id="option 1">
                <label for="question">Enter Your answer</label>
              </div>
            </div>
          </div>
        </form>
      </fieldset>
    </center>

    <!-- <script>
      $("#car2").clone().insertAfter("div.car_well:last");
    </script> -->