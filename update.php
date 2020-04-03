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
$ClientID = mysqli_real_escape_string($dbc,$_GET['Client_ID']);

$query = "UPDATE Clients SET Client_First_Name='$FirstName',Client_Middle_Name= '$MiddleName', Client_Last_Name='$LastName', Client_DOB='$DOB', 
$Town = mysqli_real_escape_string($dbc,$_GET['Client_Town']);
Client_Street='$Street, ='$Town', Client_Post_Code='$PostCode', Client_County='$County', Client_Phone_Number='$PhoneNumber', Client_Allergies='$Allergies',
Client_Health_Goals='$HealthGoals', Client_ADL_Problems='$ADLProblems', Client_ADL_Physical_Self_Maintance='$ADLPhysical', Client_ADL_Instrumental='$ADLInstrumental',
Client_Daily_Record='$Record', Carer_Assigned='$CarerAssigned' WHERE Client_ID='$ClientID'";

$result = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc)); 

mysqli_close($dbc); 

?>