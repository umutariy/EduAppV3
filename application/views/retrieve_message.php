<body class="img">
	<!-- Navigation Bar -->
	<nav>
		<div class="nav-wrapper" style="background-color: #0097a7">
			<a href="#" class="brand-logo center"><i class="material-icons prefix">account_circle</i></a>
			<a class = "btn dropdown-button" style="background-color: transparent;" href = "<?php echo base_url().'index.php/student'?>" data-activates = "dropdown">
				<i class = "mdi-navigation-arrow-drop-down right material-icons"></i>Back</a>  
				<a href = "<?php echo base_url().'index.php/logout'?>" style="background-color: transparent;" class="right">Sign Out</a>
			</div>
		</nav>
		<center>
				<div class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 50px; solid #EEE;">
					<!-- <div class="section"></div> -->
					<table class="striped">
						<thead>
							<th>Date</th>
							<th>Subject</th>
						</thead>
						<?php
						foreach ( $table as $blog )
						{
							?>
							<tr>
								<td><?php echo $blog->Date_Time?></td>
                                <td><a href="view/<?php echo $blog->MessageId; ?>"><?php echo $blog->Subject?></a> </td>
								<!-- work on the view/...? -->
							</tr>
							<?php
						}

						?>
					</table>
				</div>
		</center>