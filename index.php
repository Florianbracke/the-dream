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
                <br>From <select name='fromCurrency'>
                    <option value="EUR">Euro(EUR)</option>
                    <option value="USD">US Dollar(USD)</option>
            </select>
        </td>
        </tr>
        <tr>
            <td>
                <br>To <select name='toCurrency'>
                    <option value="RS">Indonesian Rupiah(RS)</option>
                    <option value="LAK">Lao kip(LAK)</option>
            </select>
            </td>
        </tr>  
        <tr>
            <td>
                <br> Amount <input type="text" name="amount" value=""><br>
            </td>
        </tr>
        <tr>
            <td><br>
            <input type='submit' name='submit' value="Convert"> <br> <br>
            </td>
        </tr>
    </table></div>
</form>

<?php

if (isset($_POST['submit'])) {
    convert();
}

function convert(){

    // variables
    $currencyArray= [17167.24, 1.23];
    $fromCurrency= $_POST["fromCurrency"];
    $toCurrency= $_POST["toCurrency"];
    $amount = $_POST["amount"];
    $exchangeRate= 0;

    // $exchangeRate * $amount = outcome;
    if (is_numeric($amount) == true){
    
        //starting from INDONESIA CURRENCY
        if($toCurrency == "RS"){
            if($fromCurrency == "EUR"){
                $exchangeRate= 17167.24;
            }
            if($fromCurrency == "USD"){
                $exchangeRate= 13934.25;
            }
            if(isset($_POST["amount"]) ){
                echo "Convert " .$amount . " " . $fromCurrency. " <br> <br> Into " .$amount * $exchangeRate. " " .$toCurrency . " !";
            }
        }

        //starting from LAOS CURRENCY
        if($toCurrency == "LAK"){
            if($fromCurrency == "EUR"){
                $exchangeRate= 11418.12;
            }
            if($fromCurrency == "USD"){
                $exchangeRate= 9284.48;
            }
            if(isset($_POST["amount"]) ){
                echo "Convert " .$amount . " " . $fromCurrency. " <br> <br> Into " .$amount * $exchangeRate. " " .$toCurrency . " !";
            }
        }

    } else {
        echo "write a number, smartpants";
    }
}

?> 


</body>
</html>