<html>
<style>
body{
    text-align:center;
}
</style>
<body>
<form method="post">  
<h1>STRING HANDLING </h1> 
<input type="submit" name = "length" value="Find Length">
<input type="submit" name = "wordCount" value="Words count">
<input type="submit" name = "reverse" value="Reverse input">
<input type="submit" name = "substring" value="Find specific string"> 
</form> 
</body>
</html>

<?php  
if($_POST){  
    if(isset($_POST['length'])){ 
        header("Location:length.php"); 
    }
    if(isset($_POST['wordCount'])){ 
        header("Location:wordCount.php"); 
    }
    if(isset($_POST['reverse'])){ 
        header("Location:reverse.php"); 
    }
    if(isset($_POST['substring'])){ 
        header("Location:subString.php"); 
   }

    
    
}  
 
?> 
