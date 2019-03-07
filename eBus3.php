<!DOCTYPE html>
        <html>
            <head>
                <style>
        body{
            background-color: #e6f7ff;
        }
               </style>
        </head>
            <body>
                
<!--    //Starting the session to get the session variable from the last page-->
<center>
    <center> <h2><u>Purchase Receipt</u></h2></center>
  <?php             
              session_start();
$phoneNumberValue = $_POST['txtNum'];
$totalValue = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];


echo "Name : ".$fullNameValue.".";
echo "<br></br>";       
echo "Mobile Number : ".$phoneNumberValue.".";
echo "<br></br>";
echo "Total Value : ".$totalValue.".";
?>
</center>
    </body>
        </html>







