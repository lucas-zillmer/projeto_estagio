<?php
$dbhost = 'dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com';
$dbname = 'barbearia';
$dbuser = 'barbearia_user';
$dbpass = 'nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR';

$dbconn = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpass")
    or die('Could not connect: ' . pg_last_error());
?>