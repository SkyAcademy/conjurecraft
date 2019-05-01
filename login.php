<?php

session_start();
if(!$_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Go away.<br /><br />";
    exit(); 
}


        if(mysql_connect('localhost', 'root', '')) {
    if(mysql_select_db('users')) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $zoekresultaat = mysql_query($query);

        if($zoekresultaat = mysql_affected_rows() > 0) {
            $record = mysql_fetch_assoc($zoekresultaat);

            $_SESSION['login'] = true;
            $_SESSION['username'] = $record['username'];

            header('location: dashboard.php');
            } else {
                header('location: loginerror.php');
            }
            exit();
    } exit(); {
        echo "Can't find database.";
    }
} else {
    echo "Can't connect to database.";
}

?>
