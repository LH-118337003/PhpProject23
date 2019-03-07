<?php
session_start() ;
$fullNameValue = "";
$totalValue2 = "";
$phoneNumberValue = "";

$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION[ 'txtTotal'] = $totalValue2;
$_SESSION['txtNum'] = $phoneNumberValue;
    


?>

<!DOCTYPE html>
<html> 
    <head>
        <style>
        body{
            background-color: #e6f7ff;
        }
        </style>
        <title>eBusiness 2</title>
    </head>
    <body> 
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b><u><h2>Enter in your details below</h2></u></b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required="" /></td>
                        </tr>
                         <tr>
                            <td>Phone Number</td>
                            <td><input type="text" name="txtNum" value="" required="" onkeypress="return (event.charCode === 8 || event.charCode === 0 || event.charCode === 13) ? null : event.charCode >= 48 && event.charCode <= 57" name="itemConsumption" id="txtNum" /></td>
                        </tr>
                        <!--Validation code taken from w3schools-->
                       
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="txtPassword" name="txtPassword" value="" /></td>
                        </tr>
                       
                       
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                       
                    </table>
                   </center>
               
                <center>
                   
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                </center>
       
            </div>
         </form>
        </body>
   
</html>

