<html>
<style>
body{
    text-align:center;
}
</style>
<body>

<?php
$input = "";
$sub = "";
if(isset($_POST['submit'])){
        $sub = $_POST['sub'];
        $input = $_POST['input'];
}
  
?>

<form method='post'> 
Enter a string: <input type="text" name="input" value= "<?php echo  $input; ?>"><br><br>  
Enter a substring: <input type="text" name="sub" value= "<?php echo  $sub; ?>"><br><br>
<input type="submit" name = "submit" value="Submit"> 
<input type="submit" name = "refresh" value="Refresh">
<input type="submit" name = "back" value="Back to main page">
</form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        if(strpos($input, $sub) !== false){
            echo "Word Found!";
        } 
        else{
            echo "Word Not Found!";
        }
}

if(isset($_POST['refresh'])){
    header("Location:subString.php");
}

if(isset($_POST['back'])){
header("Location:stringHandling.php");
}

?>


