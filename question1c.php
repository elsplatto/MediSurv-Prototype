<!doctype html>
<html>
<?php include("includes/head.php"); ?>
	
	<body lang="en">
		<section id="login">
			<form action="question1d.php" method="get">
				<fieldset>
					<h2>Physical Well-Being</h2>
					<p class="question">Because of my physical condition, I have trouble meeting the needs of my family</p>
					<label class="labelRadio" for="radio-1"><input type="radio" id="radio-1" name="radioHealth" value="Not at all" />Not at all</label>
					<label class="labelRadio" for="radio-2"><input type="radio" id="radio-2" name="radioHealth" value="A little bit" />A little bit</label>
					<label class="labelRadio" for="radio-3"><input type="radio" id="radio-3" name="radioHealth" value="Somewhat" />Somewhat</label>
					<label class="labelRadio" for="radio-4"><input type="radio" id="radio-4" name="radioHealth" value="Quite a bit" />Quite a bit</label>
					<label class="labelRadio" for="radio-5"><input type="radio" id="radio-5" name="radioHealth" value="Very much" />Very much</label>
				</fieldset>
					<a href="question1b.php" class="back">Back</a>
					<input type="submit" value="Next" class="next" disabled="disabled" />
			</form>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
	
</html>