<?php echo $_POST['comment'];?>
<?php echo htmlentities($_POST['comment']);?>
<form method="post">
 <input type="text" name="comment" value="">
 <input type="submit" name="submit" value="Submit">
</form>

<!--here hacker can hack with placed this text in textbox "<script>alert("hacked")</script>. Use htmlentities method where we need to use html tags example in textarea." -->

