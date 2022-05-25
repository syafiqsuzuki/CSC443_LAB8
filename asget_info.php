<?php

2 define('db_user', 'root');

B define('db_password','');

define('db_host', 'localhost');

5 define('db_name', 'registration');

5

7 $conn = mysqli_connect (db_host, db_user, db_password, db_name); 8 $result mysqli_query($conn, "select from user"); =

while ($row = mysqli_fetch_array($result)) {

foreach ($row as $key->$value) { echo "$key = $value <br>\n";

}

}

mysqli_free_result($result);

mysqli_close($conn) ;

5 ?>