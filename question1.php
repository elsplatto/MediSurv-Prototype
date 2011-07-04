<!doctype html>
<html>
<?php include("includes/head.php"); ?>
	
	<body lang="en">
		<section id="login">
			<form action="question2a.php" method="get">
				<fieldset>
					<p class="question">In general, would you say your health is:</p>
					<label class="labelRadio" for="radio-1"><input type="radio" id="radio-1" name="radioHealth" value="Excellent" />Excellent</label>
					<label class="labelRadio" for="radio-2"><input type="radio" id="radio-2" name="radioHealth" value="Very Good" />Very Good</label>
					<label class="labelRadio" for="radio-3"><input type="radio" id="radio-3" name="radioHealth" value="Good" />Good</label>
					<label class="labelRadio" for="radio-4"><input type="radio" id="radio-4" name="radioHealth" value="Fair" />Fair</label>
					<label class="labelRadio" for="radio-5"><input type="radio" id="radio-5" name="radioHealth" value="Poor" />Poor</label>
				</fieldset>
					<input type="submit" value="Next" class="next" disabled="disabled" />
			</form>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
	
</html>