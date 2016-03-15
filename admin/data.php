<?php
session_start();

if (isset($_SESSION['password']) && $_SESSION['password'] == $_SESSION['credential']){
    
    
    echo "<head>

    <title>D-Bird Texas</title>

    <script src='http://code.jquery.com/jquery-2.1.0.min.js'></script>

	<style>
		table, th, td {
     			border: 1px solid black;
		}
	</style>
</head>

<body>

<div id='top_bar' style='width: 100%; height: 15%'>
    <div style='width: 75%; float: left;'>
    <form action='administrator.php' method='post'>
        <input type='hidden' name='password' value='";

        echo $_SESSION['credential'];

        echo "' />
        <input type='submit' value='Back' />
    </form>

    <a href='#' class='export'>Export Table data to a .csv file</a></br>
    Data export not available through Internet Explorer - please use Chrome, Firefox, or Safari
    </div>


    <div style='width: 25%; float: right'>
        <a href='log_out.php'>Log out</a></br>
    </div>
</div>";
        
        
    $servername = "localhost";
    $username = "**";
    $password = "***";
    $dbname = "***";
    
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    
    
    if ($start_date != ""){
        $query = "WHERE date >= '$start_date' AND date <='$end_date'";
    	
    }
    else{
        $query = "";
    };
    


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
    
    

$sql = "SELECT ID, created_at, date, time, latitude, longitude, accuracy, species, deadinjured, sex, age, name, contact_info, notes, upload_url FROM Audubon_Texas $query ORDER BY ID ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table id='results'><tr><td>ID</td><td>Created At</td><td>Date</td><td>Time</td><td>Latitude</td><td>Longitude</td><td>Accuracy</td><td>Species</td><td>Dead/Injured</td><td>Sex</td><td>Age</td><td>Name</td><td>Contact Info</td><td>Notes</td><td>Image url</td></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["created_at"]. "</td><td>" . $row["date"]. "</td><td>" . $row["time"]. "</td><td>" . $row["latitude"]. "</td><td>" . $row["longitude"]. "</td><td>" . $row["accuracy"]. "</td><td>" . $row["species"]. "</td><td>" . $row["deadinjured"]. "</td><td>" . $row["sex"]. "</td><td>" . $row["age"]. "</td><td>" . $row["name"]. "</td><td>" . $row["contact_info"]. "</td><td>" . $row["notes"]. "</td><td>" . $row["upload_url"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}


    
    

$conn->close();        
        
        
 echo "<script src='data.js'></script>

    </body>";        
}
else{
    /*LOOPS BACK TO LOG_IN IF ANYONE ATTEMPTS TO ACCESS DATA DIRECTLY.*/
    header("Location: log_in.php");
};
?>

















