<?php
$s=$_REQUEST["id"];
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
$link = mysqli_connect("localhost", "root", "NikiSiddu3014!", "Company_DB");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    $sql = "UPDATE `cdb` SET `Name_of_the_Company`='$NameCompany',`Origin`='$Origin',`Type_of_Organization`='$TypeOrgan',
    `Employee_Strength`='$Employeestrength',`Website`='$Website',`Company_Address`='$CompanyAddress',`Contact_No`='$ContactNo',`Loc`='$Location',`Sub_Location`='$SubLocation',
    `Business_Park_Name`='$BusinessParkName',`Contact_Person_Name`='$ContactPersonName',`Contact_Person_Phone_No`='$ContactPhoneNo',`Contact_Person_Email_ID`='$ContactPersonEmailID',
    `Remarks`='$Remarks' WHERE `CNo`='$s'";
	if(mysqli_query($link, $sql) && $_REQUEST['submit']){
        echo "Records Updated successfully.";
        header('Location: index.php');
	} else{
	    echo "ERROR: Unable to execute the update command.";
	}
  }
?>