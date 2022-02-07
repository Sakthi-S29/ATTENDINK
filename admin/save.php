<?php
$db_name = "event_db";
$username = "root";
$password = "";
$server = "localhost";

$db = mysqli_connect($server, $username, $password, $db_name);
if (!$db) {
    die("Connect failed: " . mysqli_connect_error());
}
$query = "INSERT INTO `event_audience` (`id`, `event_id`, `name`, `contact`, `email`, `remarks`, `status`, `date_created`, `date_updated`) VALUES ('1', '20', 'COA', '123456789', 'sakthi@gmail.com', 'software engineering', '0', current_timestamp(), '2022-02-07 12:50:58')";
