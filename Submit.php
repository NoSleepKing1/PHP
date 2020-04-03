<?php
DEFINE ('DBUSER', 'ue9al1dhf4ldwwv5');
DEFINE ('DBPW', 'pvWbT1RaERHSzkyylEAG');
DEFINE ('DBHOST', 'bnzxyhur1mnwvedlyktc-mysql.services.clever-cloud.com');
DEFINE ('DBPW', 'bnzxyhur1mnwvedlyktc');
$dbc = mysqli_connect(DBHOST,DBUSER,DBPW);
if (!$dbc) {
    die("Database connection failed: " . mysqli_error($dbc));
    exit();
}

$dbs = mysqli_select_db($dbc, DBNAME);
if (!$dbs) {
    die("Database selection failed: " . mysqli_error($dbc));
    exit(); 
}

$FirstName = mysqli_real_escape_string($dbc, $_GET['Client_First_Name']);
$MiddleName = mysqli_real_escape_string($dbc,$_GET['Client_Middle_Name']);
$LastName = mysqli_real_escape_string($dbc,$_GET['Client_Last_Name']);
$DOB = mysqli_real_escape_string($dbc,$_GET['Client_DOB']);
$Street = mysqli_real_escape_string($dbc,$_GET['Client_Street']);
$Town = mysqli_real_escape_string($dbc,$_GET['Client_Town']);
$PostCode = mysqli_real_escape_string($dbc,$_GET['Client_Post_Code']);
$County = mysqli_real_escape_string($dbc,$_GET['Client_County']);
$PhoneNumber = mysqli_real_escape_string($dbc,$_GET['Client_Phone_Number']);
$Allergies = mysqli_real_escape_string($dbc,$_GET['Client_Allergies']);
$HealthGoals = mysqli_real_escape_string($dbc,$_GET['Client_Health_Goals']);
$ADLProblems = mysqli_real_escape_string($dbc,$_GET['Client_ADL_Problems']);
$ADLPhysical = mysqli_real_escape_string($dbc,$_GET['Client_ADL_Physical_Self_Maintance']);
$ADLInstrumental = mysqli_real_escape_string($dbc,$_GET['Client_ADL_Instrumental']);
$Record = mysqli_real_escape_string($dbc,$_GET['Client_Daily_Record']);
$CarerAssigned = mysqli_real_escape_string($dbc,$_GET['Carer_Assigned']);

$query = "INSERT INTO Clients (Client_First_Name, Client_Middle_Name, Client_Last_Name, Client_DOB, Client_Street, Client_Town, Client_Post_Code, Client_County, Client_Phone_Number, Client_Allergies, Client_Health_Goals, Client_ADL_Problems, Client_ADL_Physical_Self_Maintance, Client_ADL_Instrumental, Client_Daily_Record, Carer_Assigned) VALUES ('$FirstName', '$MiddleName', '$LastName', '$DOB', '$Street', '$Town', '$PostCode', '$County', '$PhoneNumber', '$Allergies', '$HealthGoals', '$ADLProblems', '$ADLPhysical', '$ADLInstrumental', '$Record', '$CarerAssigned')";

$result = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc)); 

mysqli_close($dbc); 

?>