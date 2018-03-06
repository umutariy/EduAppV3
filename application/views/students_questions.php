
	<!-- Navigation Bar -->
	<nav>
		<div class="nav-wrapper" style="background-color: #0097a7">
			<a href="#" class="brand-logo center"><i class="material-icons prefix">account_circle</i></a>
			<a class = "btn dropdown-button" style="background-color: transparent;" href = "#" data-activates = "dropdown"></a>
			<i class = "mdi-navigation-arrow-drop-down right material-icons"></i>Academics</a>  
			<a href = "index.html" style="background-color: transparent;" class="right">Sign Out</a>
		</div>
	</nav>

	<h3 style="color: #0097a7">Start Assignment</h3>

	<!-- form -->
	<?php echo form_open('answer'); ?>

	<?php foreach($questions as $rows) { ?>
	<?php $ans_array=array($rows['Answer_1'], $rows['Answer_2'], $rows['Answer_3']);
	shuffle($ans_array); 
	?>

	<!-- Question -->
	<p name="<?=$rows['Assignment_ID']?>"><?=$rows['Assignment_ID']?>.<?=$rows['Question_1']?></p>

	<!-- first answer -->
	<input type="radio" name="<?=$rows['Assignment_ID']?>" value="<?=$ans_array[0]?>" required>
	<?=$ans_array[0]?>
	<br>

	<!-- second answer -->
	<input type="radio" name="<?=$rows['Assignment_ID']?>" value="<?=$ans_array[1]?>" required>
	<?=$ans_array[1]?>
	<br>

	<!-- third answer -->
	<input type="radio" name="q<?=$rows['Assignment_ID']?>" value="<?=$ans_array[2]?>" required>
	<?=$ans_array[2]?>
	<br>
	<?php } ?>
	<button class="btn waves-effect waves-light" type="submit" name="submit">Submit
		<i class="material-icons right">send</i>
	</button>

</form>

