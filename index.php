<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Company Database</title>
</head>
<body class="bg-gradient-to-r from-teal-400 to-blue-500">
    <div>
        <form class="h-50 border rounded my-10 mx-10" method="post" action="index.php">
            <div class="flex flex-wrap justify-center my-10">
                <input type="text" class="h-12 border rounded p-1 ml-4 sm:my-2" placeholder="Company Name" name="c_name">
                <input type="text" class="h-12 border rounded p-1 ml-4 sm:my-2"  placeholder="Select an Industry" name="type">
                <input type="text" class="h-12 border rounded p-1 ml-4 sm:my-2" placeholder="Select City" name="city">
                <button class="rounded border p-2 ml-4 sm:my-2 bg-red-400">Search</button>
            </div>
        </form>
    </div>
    <div class="border rounded my-10 mx-10">
            <div id="Sort">A</div>
            <hr class="bg-black"/>
            <div id="Companies"></div>
    </div>
</body>
<script>
    var i;
    var b="<span class='ml-2 text-white p-2 my-2'>Sort By Company Name ></span>";
    for(i=0;i<26;i++){
        b+="<button class='ml-2 text-white p-2 hover:bg-red-400 my-2'>"+String.fromCharCode(65+i)+"</button>";
        console.log(i);
    }
    document.getElementById("Sort").innerHTML=b;

    var details="";
</script>
<?php
$con = new mysqli("localhost", "root", "", "Companies");
$city=$_POST['city'];
$type=$_POST['type'];
$name=$_POST['c_name'];
$query = "SELECT * FROM `cdb` WHERE `Name_of_the_Company` LIKE '%$name%' AND `Type_of_Organization` LIKE '%$type%' AND `Origin` LIKE '%$city%'";
//echo $query;
if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) {
       
        echo '<div class="my-4 bg-gray-200 rounded ml-20 mr-20 p-2"><table>'.
        '<tr><td>Industry:'.$row["Name_of_the_Company"].'</td></tr>' .
        '<tr><td>Company Type:'.$row["Type_of_Organization"].'</td></tr> '.
        '<tr><td>Level of Office:'.$row["Loc"].'</td></tr> '.
        '<tr><td>Location   : '.$row["Sub_Location"].'</td></tr>'.
        '<tr><td>Phone No   :'.$row["Contact_Person_Phone_No"].'</td></tr> '.
        '<tr><td>Website    : '.$row["Website"].'</td></tr>'.
        '</table></div>';
    }
    $result->free();
}
?>
</html>