<?php
//checking for magic quotes setting on OR off.
if(get_magic_quotes_gpc())
	echo "Magic quotes are enabled";
else
	echo "Magic quotes are disabled";
echo "<br>";
?>
<?php echo "Removed Slashes: "; ?>

<?php 

echo stripslashes($_POST['question']); ?>
<form method='post'>
Question: <input type='text' name='question'/><br />
<input type='submit'>

</form>
