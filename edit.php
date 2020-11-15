<?php require 'header.php'?>
<?php
$s=$_REQUEST["id"];
$link = mysqli_connect("localhost", "root", "NikiSiddu3014!", "Company_DB");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    $sql = "SELECT * FROM `cdb` WHERE `CNo`=$s";
    $result=mysqli_query($link, $sql);
    $row=mysqli_fetch_assoc($result);
  }
?>
<body>
<form method="POST">
    <p>
        <label for="NameCompany">Company Name:</label>
        <input type="text" name="NameCompany" id="NameCompany" value="<?php echo $row["Name_of_the_Company"];?>">
    </p>
    <p>
        <label for="Origin">Origin:</label>
        <input type="text" name="Origin" id="Origin" value="<?php echo $row["Origin"];?>">
    </p>
    <p>
        <label for="TypeOrgan">Type of Organisation:</label>
        <input type="text" name="TypeOrgan" id="TypeOrgan" value="<?php echo $row["Type_of_Organization"];?>">
    </p>
    <p>
        <label for="Employeestrength">Employee Strength:</label>
        <input type="text" name="Employeestrength" id="Employeestrength" value="<?php echo $row["Employee_Strength"];?>">
    </p>
    <p>
        <label for="Website">Webiste:</label>
        <input type="text" name="Webiste" id="Website" value="<?php echo $row["Website"];?>">
    </p>
    <p>
        <label for="CompanyAddress">Company Address:</label>
        <input type="text" name="CompanyAddress" id="CompanyAddress" value="<?php echo $row["Company_Address"];?>">
    </p>
    <p>
        <label for="ContactNo">Contact Number:</label>
        <input type="text" name="ContactNo" id="ContactNo" value="<?php echo $row["Contact_No"];?>">
    </p>
    <p>
        <label for="Location">Location:</label>
        <input type="text" name="Location" id="Location" value="<?php echo $row["Loc"];?>">
    </p>
    <p>
        <label for="SubLocation">Sub Location:</label>
        <input type="text" name="SubLocation" id="SubLocation" value="<?php echo $row["Sub_Location"];?>">
    </p>
    <p>
        <label for="BusinessParkName">Business Park Name:</label>
        <input type="text" name="BusinessParkName" id="BusinessParkName" value="<?php echo $row["Business_Park_Name"];?>">
    </p>
    <p>
        <label for="ContactPersonName">Contact Person Name:</label>
        <input type="text" name="ContactPersonName" id="ContactPersonName" value="<?php echo $row["Contact_Person_Name"];?>">
    </p>
    <p>
        <label for="ContactPhoneNo">Contact Person Phone No:</label>
        <input type="text" name="ContactPhoneNo" id="ContactPhoneNo" value="<?php echo $row["Contact_Person_Phone_No"];?>">
    </p>
    <p>
        <label for="ContactPersonEmailID">Contact Person Email ID:</label>
        <input type="text" name="ContactPersonEmailID" id="ContactPersonEmailID" value="<?php echo $row["Contact_Person_Email_ID"];?>">
    </p> 
    <p>
        <label for="Remarks">Remarks:</label>
        <input type="text" name="Remarks" id="Remarks" value="<?php echo $row["Remarks"];?>">
    </p>       
    <input type="submit" value="Submit">
</form>
</body>
<?php

?>
<?php require 'footer.php'?>