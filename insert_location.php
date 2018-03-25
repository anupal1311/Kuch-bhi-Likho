    <?php
    $servername = "server20.000webhost.com";
    $username = "a7666768_map";
    $password = "pass123";
    $dbname = "a7666768_map";
     
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
     
    $d_id = urldecode($_POST['d_id']) ;
    $lat = urldecode($_POST['lat']) ;
    $lng = urldecode($_POST['lng']) ;
     
    $sql = "INSERT INTO locations (driver_id , latitude , longitude)
    VALUES (" . $d_id . " , " . $lat . " , " . $lng .") ;" ;
     
    $conn->query($sql) ;
     
    $conn->close();
    ?>