<?php require 'header.php'?>
<body class="bg-gradient-to-r from-teal-400 to-blue-500">
<form  method="post" action="insert.php">
<div class="p-1 h-50 border rounded my-10 mx-10">
<div class="flex flex-wrap justify-center">
    <p>
        <input type="text" name="NameCompany" id="NameCompany"  class="border-2 p-1 ml-2 mr-2 my-2 rounded" placeHolder="Company Name"/>
    </p>
    <p>
        <input type="text" name="Origin" id="Origin" class="border-2 p-1 rounded ml-2 my-2 mr-2" placeHolder="Origin">
    </p>
    <p>
        <input type="text" name="TypeOrgan" id="TypeOrgan" class="border-2 p-1 rounded ml-2 my-2 mr-2" placeHolder="Type of Organization">
    </p>
    <p>
        <input type="text" name="Employeestrength" id="Employeestrength" class="border-2 p-1 ml-2 my-2  mr-2 rounded" placeHolder="Strength">
    </p>
    <p>
        <input type="text" name="Website" id="Website" class="border-2 p-1 rounded ml-2 mr-2 my-2 " placeHolder="URL">
    </p>
    <p>
        <input type="text" name="CompanyAddress" id="CompanyAddress" class="border-2 p-1 ml-2 my-2 mr-2 rounded" placeHolder="Company Address">
    </p>
    <p>
        <input type="text" name="ContactNo" id="ContactNo" class="border-2 p-1 rounded ml-2 my-2 mr-2 " placeHolder="Contact No">
    </p>
    <p>
        <input type="text" name="Location" id="Location" class="border-2 p-1 rounded  my-2  mr-2" placeHolder="Location">
    </p>
    <p>
        <input type="text" name="SubLocation" id="SubLocation" class="border-2 p-1 rounded my-2 ml-2 mr-2" placeHolder="SubLocation">
    </p>
    <p>
        <input type="text" name="BusinessParkName" id="BusinessParkName" class="border-2 p-1 my-2 rounded ml-2 mr-2" placeHolder="Business Park Name">
    </p>
    <p>
        <input type="text" name="ContactPersonName" id="ContactPersonName" class="border-2 p-1 my-2  rounded ml-2 mr-2" placeHolder="Contact Person Name">
    </p>
    <p>
        <input type="text" name="ContactPhoneNo" id="ContactPhoneNo" class="border-2 p-1 rounded ml-2 my-2  mr-2" placeHolder="Contact Phone no">
    </p>
    <p>
        <input type="text" name="ContactPersonEmailID" id="ContactPersonEmailID" class="border-2 my-2  p-1 rounded ml-2 mr-2" placeHolder="Contact Person EmailID">
    </p> 
    <p>
        <input type="text" name="Remarks" id="Remarks" class="border-2 p-1 ml-2 mr-2  rounded my-2" class="Remarks" placeHolder="Remarks ">
    </p> 
    </div>
    <div class="flex flex-wrap justify-center">
        <input type="submit"  class="flex flex-wrap justify-center rounded border p-2 ml-4 sm:my-2 bg-red-400" value="Submit">
    </div>
</div>
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
if(isset($_POST['NameCompany']) || isset($_POST['Origin']) || isset($_POST['TypeOrgan']) || isset($_POST['Employeestrength']) || 

isset($_POST['Website']) || isset($_POST['ContactNo']) || isset($_POST['CompanyAddress']) || isset($_POST['Location']) || 
isset($_POST['SubLocation']) || isset($_POST['BusinessParkName']) || isset($_POST['ContactPersonName']) || isset($_POST['ContactPhoneNo']) || 
isset($_POST['ContactPersonEmailID']) || isset($_POST['Remarks']) ){
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
    echo '<div class="flex justify-center p-2 rounded text-2xl">Records added successfully.</div>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
 
// Close connection
mysqli_close($link);
?>
<?php require 'footer.php'?>