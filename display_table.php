<?php
include 'conn.php';

echo " <table border='1'><tr><th>First Name</th><th>Last Name</th>";
echo "<th>E-mail</th><th>Password</th><th>Registration Date</th></tr";

$result = mysqli_query($conn,"select * from user");
while($row = mysqli_fetch_row ($result)){
    echo ""
}
mysqli_free_result ($result);
mysqli_close($dbc);

?>