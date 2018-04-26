<div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 50px; solid #EEE;">
			<h3 style="color: #0097a7">Start Assignment</h3>
			<fieldset>
				<?php echo form_open('answer'); ?>
				<!-- <form action="answer" method="POST"></form> -->

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
				<input type="radio" name="<?=$rows['Assignment_ID']?>" value="<?=$ans_array[2]?>" required>
				<?=$ans_array[2]?>
				<br>
				<?php } ?>
				<br>
				<button class="btn waves-effect waves-light" type="submit" name="submit">Submit
					<i class="material-icons right">send</i>
				</button>
				<?php echo form_close()?>
			</fieldset>
		</div>