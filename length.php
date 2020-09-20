<html>
<style>
body{
    text-align:center;
}
</style>
<body>

<?php
$input = "";
if(isset($_POST['submit'])){
        $input = $_POST['input'];
}
?>

<form method="post">  
Enter a string: <input type="text" name="input" value= "<?php echo  $input; ?>"><br><br>  


<input type="submit" name = "submit" value="Submit">
<input type="submit" name = "refresh" value="Refresh">
<input type="submit" name = "back" value="Back to main page">
</form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    echo "Length of input = ".(strlen($input));
}
if(isset($_POST['refresh'])){
    header("Location:length.php");
}
if(isset($_POST['back'])){
    header("Location:stringHandling.php");
}

?>