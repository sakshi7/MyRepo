<?php


$connection = new MongoClient("localhost:27017");

// Specify Database Name

$db = $connection->selectDB('test'); 

// 
$collection = $db->phonebook;

$cursor = $collection->find();

//print_r($cursor);

$j = iterator_to_array($cursor);

//$obj = json_decode($cursor,true);

//print_r($j);
echo "Data to be viewed:";
print_r(data);

<table style="width:80%">
  <tr>
    <td>username</td>
    <td>email</td>
    <td>phone</td>
  </tr>
  <tr>
    <td>$username</td>
    <td>$email</td>
    <td>$phone</td>
  </tr>
  </table>

   
 /*try{
        // Inserting data into students collection
        $ret = $collection->view($db.phonebook.find().pretty());
    }catch(MongoCursorException $mongoCursorException){
        echo $mongoCursorException;
        exit;
    }
   if(is_array($ret)) {
        if($ret["ok"])
            echo "Document is view successfully";
        else
            echo "document view failed";
    }else {
        if($ret)
            echo "Document is view successfully";
        else
            echo "Document is view failed";
    }*/

/*
foreach ($cursor as $doc) {
    echo $doc['name'];
}
*/

//print_r($j)


/*
// Open a MySQL connection


$link = mysql_connect('localhost', 'root', '');
if(!$link) {
die('Connection failed: ' . mysql_error());
}

// Select the database to work with
$db = mysql_select_db('test');
if(!$db) {
die('Selected database unavailable: ' . mysql_error());
}
// Create and execute a MySQL query
$query1 = "insert into employee(username,email,phone) values('".$username."','".$email."','".$phone."')";
$exc = mysql_query($query1);

$sql = "SELECT * FROM employee";
$result = mysql_query($sql);
// Loop through the returned data and output it

while($row = mysql_fetch_array($result)) {
printf("uid: %s  &nbsp;&nbsp;", $row['uid']);
printf("username: %s  &nbsp;&nbsp;", $row['username']);
printf("email: %s  &nbsp;&nbsp;", $row['email']);
printf("phone: %s  &nbsp;&nbsp;", $row['phone']);
echo "<br>";
}
// Free the memory associated with the query
mysql_free_result($result);
// Close the connection
mysql_close($link);
*/

?>