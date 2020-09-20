<html>
<style>
body{
    text-align:center;
}
</style>
<body>
<?php
$limit = "";

if(isset($_POST['submit'])){
        $limit = $_POST['number'];
       
}
  
?>

<form method="post">  
Enter a number: <input type="number" name="number" value= "<?php echo  $limit; ?>"><br><br>  
<input type="submit" name="submit" value="Submit">  
<input type="submit" name = "refresh" value="Refresh">
</form> 
</body>
</html>

<?php  
if($_POST){  
    $flag = true;
    echo "Prime numbers between 1 and ".$limit." are : </br>";

    echo "1 ";
    for ($num = 2; $num < $limit; $num++){
        for($i = 2; $i <= $num/2; $i++){
            if($num % $i == 0){
                $flag = false;
            }
        }
        if($flag == true){
            echo $num." ";
            
        }  
        $flag = true;
    }
      
}  
if(isset($_POST['refresh'])){
    header("Location:primeNumbers.php");
}
 
?> 