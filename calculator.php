<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>calculator</title>
</head>
<body>
<div class="mt-5">
<div class="card w-50 m-auto">
<div class="card-header text-center text-uppercase bg-dark text-white">
<h2> php Calculator </h2>
</div>
<div class="card-body">
<form method="POST">
<div class="form-group">
<label> Enter Number1 </label>
<input type="text" placeholder="Enter number1" name="number1" class="form-control">
</div>
<div class="form-group">
<label> Enter Number2 </label>
<input type="text" placeholder="Enter number2" name="number2" class="form-control">
</div>
<select name="operationValue">
<option value="add">Add</option>
<option value="sub">Sub</option>
<option value="multi">Multiplication</option>
<option value="div">Divison</option>
</select>
<div class="form-group mt-2">
<input type="submit" name="submit" class="btn btn-success">
</div>
</form>
</div>
<div class="card-footer text-center text-uppercase bg-dark text-white">
<p>
<?php
if(isset($_POST['submit'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operationValue = $_POST['operationValue'];

    switch($operationValue){
        case "add": $sum = $number1 + $number2;
                    echo " The sum is {$sum} ";
        break;

        case "sub": $sub = $number1 - $number2;
                    echo " The sub is {$sub} ";
        break;

        case "multi": $multi = $number1 * $number2;
                      echo " The multi is {$multi} ";
        break;

        case "div": $div = $number1 / $number2;
                    echo " The div is {$div} ";
        break;

        default:
        echo " Sorry does not exist ";
    }
}
?>
</p>
</div>
</div>
</div>

</body>
</html>