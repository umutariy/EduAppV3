<body class="img">
	<!-- Navigation Bar -->
	<nav>
		<div class="nav-wrapper" style="background-color: #0097a7">
			<a href="#" class="brand-logo center"><i class="material-icons prefix">account_circle</i></a>
			<a class = "btn dropdown-button" style="background-color: transparent;" href = "<?php echo base_url().'index.php/retrieve_message'?>" data-activates = "dropdown">
				<i class = "mdi-navigation-arrow-drop-down right material-icons"></i>Back</a>  
				<a href = "<?php echo base_url().'index.php/logout'?>" style="background-color: transparent;" class="right">Sign Out</a>
			</div>
		</nav>
		<center>
			<fieldset>
				<div class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 50px; solid #EEE;">
					<!-- <div class="section"></div> -->

					<table class="striped">
						

						<?php

						foreach ( $table as $blog )
						{
							
							$tit= $blog->Title;
							$sub = $blog->Subject;
							$msg = $blog->Message; 
						}

						?>
						
						<thead>
							<tr>
								<th>Title</th>
								<td><?php echo $tit;?></td>
							</tr>
							<tr>
								<th>Subject</th>
								<td><?php echo $sub;?></td>
							</tr>
							<tr>
								<th>Message</th>
								<td><?php echo $msg;?></td>
							</tr>

						</thead>
					</table>
				</div>
			</fieldset>
		</center>