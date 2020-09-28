<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    background-color: lightblue;
}

h1{
    font-family: verdana;
    margin-top: .5in; 
    text-align: center;
    margin-bottom: .5in;
}

h3{
    color: maroon;
    font-family: verdana;
    margin-left: 5.7in;
}

h4{
    color: red;
    margin-left: 6in;
    font-family: verdana;
}
</style>


<body>
<h1>Your output</h1>

<?php 

include('form_handler.php'); 
echo  "<h3>First name: </h3>" . "<h4>" . $_SESSION['input'][0] . "</h4>"; 
echo  "<h3>Last name: </h3>" . "<h4>" .  $_SESSION['input'][1] . "</h4>";
echo  "<h3>Email: </h3>" . "<h4>" . $_SESSION['input'][2] . "</h4>";
echo  "<h3>Address: </h3>" . "<h4>" . $_SESSION['input'][3] . "</h4>" ;





?>
    
</body>
</html>