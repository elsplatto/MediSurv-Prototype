<!doctype html>
<html>
<?php include("includes/head.php"); ?>
	
	<body lang="en">
		<section id="login">
			<form action="question4b.php" method="get">
				<fieldset>
					<p class="question">During the past 4 weeks, have you had any of the following problems with your work or other regular daily activities as a result of any emotional problems, such as feeling depressed or anxious?</p>
					
					<p class="subQuestion">Accomplished less than you would like.</p>
					
					<label class="labelRadio" for="radio-1"><input type="radio" id="radio-1" name="radioActivities" value="Yes" />Yes</label>
					<label class="labelRadio" for="radio-2"><input type="radio" id="radio-2" name="radioActivities" value="No" />No</label>
				</fieldset>
					<a href="question3b.php" class="back">Back</a>
					<input type="submit" value="Next" class="next" disabled="disabled" />
			</form>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
	
</html>