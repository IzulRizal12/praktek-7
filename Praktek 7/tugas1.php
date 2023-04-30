<html>
    <head>
        <title>Koneksi Database MySQL</title>
</head>
<body>
    <?php
    $con = mysqli_connect("localhost","root","","mydb");

    //check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error()
        ;
        exit();
    }
    // create table
    $sql = "CREATE TABLE buku_tamu (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    isi TEXT
    )";
    
    if (mysqli_query($con, $sql)) {
        echo "Table buku_tamu created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($con);
    }
    
    mysqli_close($con);
?>

</body>
</html>