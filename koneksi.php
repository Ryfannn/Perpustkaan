<?php
$conn = mysqli_connect('localhost', 'root','', 'perpustakaan');
// Return Error Code
if (mysqli_connect_errno()) {
    // Return Error Description
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>