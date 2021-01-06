<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//currency rates

?>

<h1>Welcome!</h1>

<form  action="" method="post">

    <div id="box"> 
        <h2>Currency Converter</h2>
    <table>
        <tr>
            <td>
                Enter Amount:<input type="text" name="amount"><br>
            </td>
        </tr>
        <tr>
        <td>
            <br>From:<select name='fromCurrency'>
                <option value="EUR" selected>Euro(EUR)</option>
                <option value="USD" >US Dollar(USD)</option>
        
            </select>
        </td>
        </tr>
        <tr>
            <td>
            <br>To:<select name='toCurrency'>
                <option value="RS" selected >Indonesian Rupiah(RS)</option>
            </select>
        </td>
        </tr>
        <tr>
        <td><br>
            <input type='submit' name='submit' value="Convert">
        </td>
        </tr>
    </table></div>
</form>

<?php
// display what currency is being conversed
// $money = 4;

// function Conversion($money){
//     echo "your $money is worth ";
// }

// if(isset($_POST['toCurrency'])){
//     function Conversion($money);
// }

// does the correct conversion
if(isset($_POST['amount'])){
    
    $amount = $_POST["amount"];
    echo $amount * 17167,24;
}
?> RS


</body>
</html>
