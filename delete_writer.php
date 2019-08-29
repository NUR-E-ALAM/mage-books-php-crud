<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database

include('database.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// get id value

$id = $_GET['id'];



// delete the entry

$deleteQuery = "DELETE FROM writers WHERE id=$id";
mysqli_query($conn, $deleteQuery);




// redirect back to the view page

header("Location: show_writer.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: show_writer.php");

}



?>