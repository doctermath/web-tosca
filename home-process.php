<?php

function callme()
{
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'/meize/home-process.php');
}

function connect_db()
{
    global $conn;
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
}

function close_db()
{
    global $conn;
    $conn->close();
}

function get_list()
{
    global $conn;
    $sql = "SELECT `id`, `order`, `link` FROM `nav_links`";
    $result = mysqli_query($conn, $sql);

    echo $result;

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["order"]. " " . $row["link"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}