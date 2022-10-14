<!DOCTYPE html>
 
<head>
	<title>Simple Calculator Program in PHP </title>
    <link rel="stylesheet" href="main.css">
</head>
 
<?php
$Number1 = $_POST['Number1'];
$Number2 = $_POST['Number2'];
$operator = $_POST['operator'];
$Result = '';
if (is_numeric($Number1) && is_numeric($Number2)) {
    switch ($operator) {
        case "Add":
           $Result = $Number1 + $Number2;
            break;
        case "Subtract":
           $Result = $Number1 - $Number2;
            break;
        case "Multiply":
            $Result = $Number1 * $Number2;
            break;
        case "Divide":
            $Result = $Number1 / $Number2;
    }
}
 
?>
 
<body>
    <div class="page-wrap">
	<h1>Simple Calculator Program in PHP using Switch statement</h1>
	  <form action="" method="post" id="quiz-form">
            <p>
                <b>First Number</b><input type="number" name="Number1" id="Number1" required="required" value="<?php echo $Number1; ?>" /> 
            </p>
            <p>
                <b>Second Number</b><input type="number" name="Number2" id="Number2" required="required" value="<?php echo $Number2; ?>" /> 
            </p>
            <input type="submit" name="operator" value="Addition" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiplication" />
            <input type="submit" name="operator" value="Division" />
            <p>
                <b>Result</b><input readonly="readonly" name="Result" value="<?php echo $Result; ?>"> 
            </p>
	  </form>
    </div><!--page-wrap-->
</body>
</html>