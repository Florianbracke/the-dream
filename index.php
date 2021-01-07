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

                    <h3>From </h3> 
                    <select name='fromCurrency'>                                    
                        <option value="EUR">Euro(EUR)</option>
                        <option value="USD">US Dollar(USD)</option>
                    </select>                                                       
<br>
                    <h3>To</h3> 
                    <select name='toCurrency'>                                      
                        <option value="RS">Indonesian Rupiah(RS)</option>
                        <option value="LAK">Lao kip(LAK)</option>
                    </select>                                                       
<br>
                    <h3>Amount </h3> 
                    <input type="text" name="amount" value="">
<br>
                    <input type='submit' name='submit' value="Convert"> 
<br>
            
    </div>
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
    
    if (is_numeric($amount) == true){
        if($toCurrency == "RS"){      //starting from INDONESIA CURRENCY
            if($fromCurrency == "EUR"){
                $exchangeRate= 17167.24;
            }if($fromCurrency == "USD"){
                $exchangeRate= 13934.25;
            }
        }if($toCurrency == "LAK"){    //starting from LAOS CURRENCY
            if($fromCurrency == "EUR"){
                $exchangeRate= 11418.12;
            }if($fromCurrency == "USD"){
                $exchangeRate= 9284.48;
            }
        }if(isset($_POST["amount"]) ){   
            echo "Convert " .$amount . " " . $fromCurrency. " <br> <br> Into " .$amount * $exchangeRate. " " .$toCurrency . " !";
        }
    } else {
        echo "write a number, smartpants";
    }
}

?> 


</body>
</html>