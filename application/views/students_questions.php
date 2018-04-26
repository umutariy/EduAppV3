<body class="img">
	<!-- Navigation Bar -->
	<nav>
		<div class="nav-wrapper" style="background-color: #0097a7">
			<a href="#" class="brand-logo center"><i class="material-icons prefix">account_circle</i></a>
			<a class = "btn dropdown-button" style="background-color: transparent;" href = "<?php echo base_url().'index.php/student'?>" data-activates = "dropdown">
				<i class = "mdi-navigation-arrow-drop-down right material-icons"></i>Back</a>  
				<a href = "logout" style="background-color: transparent;" class="right">Sign Out</a>
			</div>
		</nav>

		<center>
			<div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 50px; solid #EEE;">
				<!-- form -->
				<h5>Answer All Questions</h5>
				<div class="section"></div>
				<?php
				foreach ($data as $blog) 
				{
					?>
					
					<div class="row">
						<div>
							Question : <label><?php echo $blog->Question ?></label>
						</div>
						<div class="class='input-field col m12'">

							A:<label><?php echo " ".$blog->Answer1 ?></label>

						</div> 
						<div class="class='input-field col m12'">
							B:<label><?php echo " ".$blog->Answer2 ?></label>
						</div> 
						<div class="class='input-field col m12'">
							C:<label><?php echo " ".$blog->Answer3 ?></label>
						</div>
					</div>
					<div class="row">
						<div class="class='input-field col m12'">
							<input type="test" name="answer" placeholder="Correct_answer">
						</div> 
					</div><br>
					<?php
				}
				?>
				<div class="row">
					<button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
				</div>
			</div>
		</center>


