<?php
// Use Environment Variables for Render Deployment
// These will be pulled from the Render Dashboard settings
$host = getenv('DB_HOST') ?: "db.otrkginfndevnotgkajc.supabase.co";
$port = getenv('DB_PORT') ?: "5432";
$dbname = getenv('DB_NAME') ?: "postgres";
$user = getenv('DB_USER') ?: "postgres";
$password = getenv('DB_PASS') ?: "Wh01302016!2025";

$connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Attempt connection
$dbconn = pg_connect($connection_string);

if(!$dbconn) {
    // In production, we hide specific error details from users for security
    error_log("Database connection failed: " . pg_last_error());
    die("Internal Server Error: Could not connect to the database.");
}
?>
