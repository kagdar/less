<?php
	require_once 'class.php';
?>
<form method="POST" action="class.php">
	<p>input name<input type="text" name="name"></p>
	<p>input lastname<input type="text" name="lastname"></p>
	<p>date of your birthday<input type="date" name="birthDay"></p>
	<p>input job title<input type="text" name="job"></p>
	<p>input department<input type="text" name="department"></p>
	<p>in company? yes-><input type="radio" name="company" value="1"> or not->
	<input type="radio" name="company" value="0"></p>
	<p><input type="submit" name="go"></p>
</form>
