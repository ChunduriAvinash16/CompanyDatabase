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
<body class="bg-gradient-to-r from-teal-400 to-blue-500">
<form method="POST">
<div class="p-1 h-50 border rounded my-10 mx-20">
<div>

    <p class="flex justify-between">
        <label for="NameCompany">Company Name:</label>
        <input type="text" name="NameCompany" id="NameCompany" class="border-2 p-1 ml-2 mr-2 my-2 rounded w-1/3" value="<?php echo $row["Name_of_the_Company"];?>">
    </p>
    <p class="flex justify-between">
        <label for="Origin">Origin:</label>
        <input type="text" name="Origin" id="Origin" class="border-2 p-1 ml-2 mr-2 my-2 rounded w-1/3" value="<?php echo $row["Origin"];?>">
    </p>
    <p class="flex justify-between">
        <label for="TypeOrgan">Type of Organisation:</label>
        <input type="text" name="TypeOrgan" id="TypeOrgan" class="border-2 p-1 ml-2 mr-2 my-2 rounded w-1/3" value="<?php echo $row["Type_of_Organization"];?>">
    </p>
    <p class="flex justify-between">
        <label for="Employeestrength">Employee Strength:</label>
        <input type="text" name="Employeestrength" id="Employeestrength"class="border-2 p-1 ml-2 mr-2 my-2 rounded w-1/3" value="<?php echo $row["Employee_Strength"];?>">
    </p>
    <p class="flex justify-between">
        <label for="Website">Webiste:</label>
        <input type="text" name="Webiste" id="Website"class="border-2 p-1 ml-2 mr-2 my-2 rounded w-1/3" value="<?php echo $row["Website"];?>">
    </p>
    <p class="flex justify-between">
        <label for="CompanyAddress">Company Address:</label>
        <input type="text" name="CompanyAddress" id="CompanyAddress"class="border-2 p-1 ml-2 mr-2 my-2 rounded w-1/3" value="<?php echo $row["Company_Address"];?>">
    </p>
    <p class="flex justify-between">
        <label for="ContactNo">Contact Number:</label>
        <input type="text" name="ContactNo" id="ContactNo"class="border-2 p-1 ml-2 mr-2 my-2 rounded w-1/3" value="<?php echo $row["Contact_No"];?>">
    </p>
    <p class="flex justify-between">
        <label for="Location">Location:</label>
        <input type="text" name="Location" id="Location"class="border-2 p-1 ml-2 mr-2 my-2 rounded w-1/3" value="<?php echo $row["Loc"];?>">
    </p>
    <p class="flex justify-between">
        <label for="SubLocation">Sub Location:</label>
        <input type="text" name="SubLocation" id="SubLocation" class="border-2 p-1 ml-2 mr-2 my-2 rounded w-1/3" value="<?php echo $row["Sub_Location"];?>">
    </p>
    <p class="flex justify-between">
        <label for="BusinessParkName">Business Park Name:</label>
        <input type="text" name="BusinessParkName" id="BusinessParkName"class="border-2 p-1 ml-2 mr-2 my-2 rounded w-1/3" value="<?php echo $row["Business_Park_Name"];?>">
    </p>
    <p class="flex justify-between">
        <label for="ContactPersonName">Contact Person Name:</label>
        <input type="text" name="ContactPersonName" id="ContactPersonName"class="border-2 p-1 ml-2 mr-2 my-2 rounded w-1/3" value="<?php echo $row["Contact_Person_Name"];?>">
    </p>
    <p class="flex justify-between">
        <label for="ContactPhoneNo">Contact Person Phone No:</label>
        <input type="text" name="ContactPhoneNo" id="ContactPhoneNo"class="border-2 p-1 ml-2 mr-2 my-2 rounded w-1/3" value="<?php echo $row["Contact_Person_Phone_No"];?>">
    </p>
    <p class="flex justify-between">
        <label for="ContactPersonEmailID">Contact Person Email ID:</label>
        <input type="text" name="ContactPersonEmailID" id="ContactPersonEmailID"class="border-2 p-1 ml-2 mr-2 my-2 w-1/3 rounded" value="<?php echo $row["Contact_Person_Email_ID"];?>">
    </p> 
    <p class="flex justify-between">
        <label for="Remarks">Remarks:</label>
        <input type="text" name="Remarks" id="Remarks"class="border-2 p-1 ml-2 mr-2 my-2 rounded w-1/3" value="<?php echo $row["Remarks"];?>">
    </p>       
</div>
<div class="flex justify-center">
    <input type="submit"  class="flex flex-wrap justify-center rounded border p-2 ml-4 sm:my-2 bg-red-400"  value="Submit">
</div>
</div>
</form>
</body>
<?php

?>
<?php require 'footer.php'?>