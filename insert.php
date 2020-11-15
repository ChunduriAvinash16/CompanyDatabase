<?php require 'header.php'?>
<body>
<form method="post">
    <p>
        <label for="NameCompany">Company Name:</label>
        <input type="text" name="NameCompany" id="NameCompany">
    </p>
    <p>
        <label for="Origin">Origin:</label>
        <input type="text" name="Origin" id="Origin">
    </p>
    <p>
        <label for="TypeOrgan">Type of Organisation:</label>
        <input type="text" name="TypeOrgan" id="TypeOrgan">
    </p>
    <p>
        <label for="Employeestrength">Employee Strength:</label>
        <input type="text" name="Employeestrength" id="Employeestrength">
    </p>
    <p>
        <label for="Website">Webiste:</label>
        <input type="text" name="Webiste" id="Website">
    </p>
    <p>
        <label for="CompanyAddress">Company Address:</label>
        <input type="text" name="CompanyAddress" id="CompanyAddress">
    </p>
    <p>
        <label for="ContactNo">Contact Number:</label>
        <input type="text" name="ContactNo" id="ContactNo">
    </p>
    <p>
        <label for="Location">Location:</label>
        <input type="text" name="Location" id="Location">
    </p>
    <p>
        <label for="SubLocation">Sub Location:</label>
        <input type="text" name="SubLocation" id="SubLocation">
    </p>
    <p>
        <label for="BusinessParkName">Business Park Name:</label>
        <input type="text" name="BusinessParkName" id="BusinessParkName">
    </p>
    <p>
        <label for="ContactPersonName">Contact Person Name:</label>
        <input type="text" name="ContactPersonName" id="ContactPersonName">
    </p>
    <p>
        <label for="ContactPhoneNo">Contact Person Phone No:</label>
        <input type="text" name="ContactPhoneNo" id="ContactPhoneNo">
    </p>
    <p>
        <label for="ContactPersonEmailID">Contact Person Email ID:</label>
        <input type="text" name="ContactPersonEmailID" id="ContactPersonEmailID">
    </p> 
    <p>
        <label for="Remarks">Remarks:</label>
        <input type="text" name="Remarks" id="Remarks">
    </p>       
    <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "NikiSiddu3014!", "Company_DB");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$NameCompany = mysqli_real_escape_string($link, $_REQUEST['NameCompany']);
$Origin = mysqli_real_escape_string($link, $_REQUEST['Origin']);
$TypeOrgan = mysqli_real_escape_string($link, $_REQUEST['TypeOrgan']);
$Employeestrength = mysqli_real_escape_string($link, $_REQUEST['Employeestrength']);
$Website = mysqli_real_escape_string($link, $_REQUEST['Website']);
$ContactNo = mysqli_real_escape_string($link, $_REQUEST['ContactNo']);
$CompanyAddress = mysqli_real_escape_string($link, $_REQUEST['CompanyAddress']);
$Location = mysqli_real_escape_string($link, $_REQUEST['Location']);
$SubLocation = mysqli_real_escape_string($link, $_REQUEST['SubLocation']);
$BusinessParkName = mysqli_real_escape_string($link, $_REQUEST['BusinessParkName']);
$ContactPersonName = mysqli_real_escape_string($link, $_REQUEST['ContactPersonName']);
$ContactPhoneNo = mysqli_real_escape_string($link, $_REQUEST['ContactPhoneNo']);
$ContactPersonEmailID = mysqli_real_escape_string($link, $_REQUEST['ContactPersonEmailID']);
$Remarks = mysqli_real_escape_string($link, $_REQUEST['Remarks']);

 
// Attempt insert query execution
$sql = "INSERT INTO `cdb`( `Name_of_the_Company`, `Origin`, `Type_of_Organization`, `Employee_Strength`, `Website`, `Company_Address`, `Contact_No`, `Loc`, `Sub_Location`, `Business_Park_Name`, `Contact_Person_Name`, `Contact_Person_Phone_No`, `Contact_Person_Email_ID`, `Remarks`) 
VALUES ('$NameCompany','$Origin','$TypeOrgan','$Employeestrength','$Website','$CompanyAddress','$ContactNo','$Location','$SubLocation','$BusinessParkName','$ContactPersonName','$ContactPhoneNo','$ContactPersonEmailID','$Remarks')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<?php require 'footer.php'?>