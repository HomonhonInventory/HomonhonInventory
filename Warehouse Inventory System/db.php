<?php
// Your Supabase Connection Details
$host = "db.otrkginfndevnotgkajc.supabase.co"; // Found in Supabase Project Settings
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "Wh01302016!2025";

$connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password";
$dbconn = pg_connect($connection_string);

if(!$dbconn) {
    die("Error in connection: " . pg_last_error());
}
?>
