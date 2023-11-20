<?php
include_once(__DIR__.'/vendor/autoload.php'); 
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();

$key = $_ENV["DB_KEY"];

$db_handle = pg_connect("user=postgres password={$key} host=db.drexvxkyebvhnzlfsnrl.supabase.co port=5432 dbname=postgres");

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
    
    $query = "SELECT * FROM prayers ORDER BY id";
    
    $result = pg_exec($db_handle, $query);
        
    if ($result) {
        
        $resultArray = pg_fetch_all($result);
        // echo json_encode($resultArray);
        
        file_put_contents('../public/quotes.json', json_encode($resultArray, true));
        
        echo "<br />";
        
        echo "The query exported successfully.<br>";
            
        // for ($row = 0; $row < pg_numrows($result); $row++) {
        // 
        //     $firstname = pg_result($result, $row, 'quote');
        //     
        //     echo $firstname ." ";
        //     
        //     $lastname = pg_result($result, $row, 'byline');
        //     
        //     echo $lastname ."<br>";
        //     
        // }
    
    } else {
    
        echo "The query failed with the following error:<br>";
        
        echo pg_errormessage($db_handle);
        
    }

pg_close($db_handle);


?>