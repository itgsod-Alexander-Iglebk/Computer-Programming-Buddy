<?php

//Koppla upp dig mot Servern med rätt uppgifter
$connection = mysql_connect('localhost','username','password');
// Välj databas
mysql_select_db('phpp_db',$connection)


//kontrollera i php om formuläret ens har blivit skickat
if(isset($_POST['firstname']){
// Ja det har skickats, nu ska det alltså in i databasen.

//För att skicka informationen till databasen krävs en ny funktion mysql_query()
mysql_query("INSERT INTO users (firstname,lastname) VALUES('$_POST['firstname']','$_POST['lastname']'");

echo ' Informationen har lagts till i databasen ' ;

else{
// Visa fomuläret igen
?>
<form action="" method="post">
First name
<input type="text" name="firstname">
<br>
Last name
<input type="text" name="lastname">
<input type="submit" name="sent" value="Skicka" >
</form>