<?php
// An example config file, which must be saved as ../easy_cms_config.php
// Hashed (sha256) password to access control panel
$access_password = "8f3883f0917b6d41ffd861a934cc9e8f2fcb2fe046238b1578f2dc544e2981b6";
// Database connection parameters
$db_server = "localhost";
if($_SERVER['REMOTE_ADDR'] == '127.0.0.1') $db_username = "root";
else $db_username = "econinbites";
$db_password = "";
$db_name = "my_econinbites";
// Editable fields. An associative array, in which each key is the name of a table.
// Each element is itself an associative array, in which each key is the name of an
// editable field and its value is the shown name, plus the '__name' field with the
// shown name of the table and the '__unique' field with the name of the unique field
// in the table. An * at the end of the shown name signal visible-but-non-editable fields.
// A ^ at the end of the shown name require a textarea for the input and edit (long fields).
// If __insert_query element is present, also the "Add row" button is shown
// As a choice of the author, no removing of rows is available
$tables = array(
    "bites" => array(
        "__name" => "Bites",
        "__unique" => "ID",
        "__insert_query" => "INSERT INTO bites (Title, Text) VALUES ('Titolo','Testo')",
        "Title" => "Titolo",
        "Text" => "Testo^",
        "Visible" => "Visibile? (0/1)"
    ), "chisiamo" => array(
        "__name" => "Righe per Chi Siamo",
        "__unique" => "ID",
        "__insert_query" => "INSERT INTO chisiamo (Title, Text) VALUES ('Titolo','Testo')",
        "Title" => "Titolo",
        "Text" => "Testo^",
        "Visible" => "Visibile? (0/1)"
    )
);
?>