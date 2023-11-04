<?php

echo "My first PHP script!";

$db_handle = pg_connect("user=postgres password=wyBkam-fefhub-5sywty host=db.drexvxkyebvhnzlfsnrl.supabase.co port=5432 dbname=postgres");

if ($db_handle) {

echo 'Connection attempt succeeded.';

} else {

   

echo 'Connection attempt failed.';

}

echo "<h3>Connection Information</h3>";

echo "DATABASE NAME:" . pg_dbname($db_handle) . "<br>";

echo "HOSTNAME: " . pg_host($db_handle) . "<br>";

echo "PORT: " . pg_port($db_handle) . "<br>";

echo "<h3>Checking the query status</h3>";

$query = "SELECT * FROM prayers";

$result = pg_exec($db_handle, $query);

if ($result) {

echo "The query executed successfully.<br>";

echo "<h3>Print First and last name:</h3>";

for ($row = 0; $row < pg_numrows($result); $row++) {

$firstname = pg_result($result, $row, 'quote');

echo $firstname ." ";

$lastname = pg_result($result, $row, 'byline');

echo $lastname ."<br>";

}

} else {

echo "The query failed with the following error:<br>";

echo pg_errormessage($db_handle);

}

pg_close($db_handle);


?>