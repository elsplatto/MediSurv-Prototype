<!doctype html>
<html>
<?php include("includes/head.php"); ?>
	
	<body lang="en">
		<section id="login">
			<form action="question2b.php" method="get">
				<fieldset>
					<p class="question">The following questions are about activities you might do during a typical day. Does your health now limit you in these activities? If so, how much?</p>
					
					<p class="subQuestion">Moderate activities, such as moving a table, pushing a vacuum cleaner, bowling or playing golf.</p>
					
					<label class="labelRadio" for="radio-1"><input type="radio" id="radio-1" name="radioModerateActivities" value="Yes, limited a lot" />Yes, limited a lot</label>
					<label class="labelRadio" for="radio-2"><input type="radio" id="radio-2" name="radioModerateActivities" value="Yes, limited a little" />Yes, limited a little</label>
					<label class="labelRadio" for="radio-3"><input type="radio" id="radio-3" name="radioModerateActivities" value="No, not limited at all" />No, not limited at all</label>
				</fieldset>
					<a href="question1.php" class="back">Back</a>
					<input type="submit" value="Next" class="next" disabled="disabled" />
			</form>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
	
</html>