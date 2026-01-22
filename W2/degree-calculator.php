<!DOCTYPE html>
    <html>
    <head>
</head> 
<body>


 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label>Kelvin</label>
<input name="kelvinVal">
<input type="submit" value="Calculate">
<input type="submit" value="Clear">
</form>

</body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $celcius = $_POST[''];
    $kelvin = $_POST['']; 


$celcius = $kelvin- 273.15;
}

?>

<?php
echo $celcius;
?>

</html>