<?php
$server_name = "sql100.epizy.com";
$user_name = "epiz_34223289";
$password1 = "ufpTwqF3Eykd";
$db_name = "epiz_34223289_my_data";

// Create a database connection
$con = mysqli_connect($server_name, $user_name, $password1, $db_name);

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// ADD Participant
if (isset($_POST['add'])) {
    $pid = $_POST['pid'];
    $pssn = $_POST['pssn'];
    $pfname = $_POST['pfname'];
    $plname = $_POST['plname'];
    $pbod = $_POST['pbod'];
    $p_project_name = $_POST['p_project_name'];
    $psex = $_POST['psex'];
    
    // Add participant to the database
    $sql = "INSERT INTO Conference (Pid, Pssn, Pfname, Plname, Pbod, P_project_name, Psex)
            VALUES ('$pid', '$pssn', '$pfname', '$plname', '$pbod', '$p_project_name', '$psex')";
            
    if (mysqli_query($con, $sql)) {
        echo "Participant added successfully.";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// DELETE Participant
if (isset($_GET['delete'])) {
    $participantId = $_GET['delete'];
    // Delete participant from the database
    $sql = "DELETE FROM Conference WHERE Pid = $participantId";
    if (mysqli_query($con, $sql)) {
        echo "Participant deleted successfully.";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// UPDATE Participant
if (isset($_POST['update'])) {
    $participantId = $_POST['participantId'];
    $pfname = $_POST['pfname'];
    $plname = $_POST['plname'];
    // Update participant in the database
    $sql = "UPDATE Conference SET Pfname = '$pfname', Plname = '$plname' WHERE Pid = $participantId";
    if (mysqli_query($con, $sql)) {
        echo "Participant updated successfully.";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// SEARCH Participant
if (isset($_GET['search'])) {
    $searchKeyword = $_GET['searchKeyword'];
    // Search for participants in the database
    $sql = "SELECT * FROM Conference WHERE Pfname LIKE '%$searchKeyword%' OR Plname LIKE '%$searchKeyword%'";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['Pid'] . "<br>";
        echo "First Name: " . $row['Pfname'] . "<br>";
        echo "Last Name: " . $row['Plname'] . "<br><br>";
    }
}

// DISPLAY ALL Participants
$sql = "SELECT * FROM Conference";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['Pid'] . "<br>";
    echo "First Name: " . $row['Pfname'] . "<br>";
    echo "Last Name: " . $row['Plname'] . "<br><br>";
}

// Close the database connection
mysqli_close($con);
?>
