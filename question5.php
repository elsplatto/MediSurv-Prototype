<!doctype html>
<html>
<?php include("includes/head.php"); ?>
	
	<body lang="en">
		<section id="login">
			<form action="question6.php" method="get">
				<fieldset>
					<p class="question">During the past 4 weeks, how much did pain interfere with your normal work (including both work outside the home and housework)?</p>
					
					
					<label class="labelRadio" for="radio-1"><input type="radio" id="radio-1" name="radioActivities" value="Not at all" />Not at all</label>
					<label class="labelRadio" for="radio-2"><input type="radio" id="radio-2" name="radioActivities" value="Slightly" />Slightly</label>
					<label class="labelRadio" for="radio-3"><input type="radio" id="radio-3" name="radioActivities" value="Moderately" />Moderately</label>
					<label class="labelRadio" for="radio-4"><input type="radio" id="radio-4" name="radioActivities" value="Quite a bit" />Quite a bit</label>
					<label class="labelRadio" for="radio-5"><input type="radio" id="radio-5" name="radioActivities" value="Extremely" />Extremely</label>
				</fieldset>
					<a href="question4b.php" class="back">Back</a>
					<input type="submit" value="Next" class="next" disabled="disabled" />
			</form>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
	
</html>