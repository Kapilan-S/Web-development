<?php include("head.html")
?>
<body>
<div class="register">
<form action="connect.php" method="post">
<br><br>
<label for="username">USERNAME:<br></label>
<input type="text" size="20" name="n" placeholder="Enter your name" required>
<br><br>
<label for="age">AGE:<br></label>
<input type="number" size="3" name="a">
<br><br>
<label for="DOB">DOB:<br></label>
<input type="date" name="d">
<br><br>
<label for="gender">Gender:<br></label>
<input type="radio" value="male" name="g">male
<input type="radio" value="female" name="g">female
<input type="radio" value="others" name="g">others
<br><br>
<label for="email">EMAIL:<br></label>
<input type="email" size="30" name="e">
<br><br>
<label for="password">PASSWORD:<br></label>
<input type="password" maxlength="8" min="4" name="p">
<br><br>
<label for="DEPARTMENT">DEPARTMENT<br></label>
<select name="s">
<option value="CSE">CSE</option>
<option value="ECE">ECE</option>
<option value="EEE">EEE</option>
<option value="IT">IT</option>

</select>
<br><br>

<input type="submit" value="REGISTER">
<input type="reset" value="CANCEL">

</form>
</div>

</body>
<?php include("foot.html")
?>