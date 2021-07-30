<?php

$id = $_REQUEST["id"];

/*Actual filename = 'attachment.zip' (Unknown to the viewers).
When downloaded to be saved as 'mydownload.zip'.
*/

if($id == "1")
{

$file = "Genius_Solutions_2020.pdf";
header("Content-Disposition: attachment; filename=" . urlencode($file));
header("Content-Type: application/pdf");
header("Content-Type: application/download");
header("Content-Description: File Transfer");
//header("Content-Length: " . filesize($file));
flush(); // this doesn't really matter.
$fp = fopen($file, "r");
while (!feof($fp))
{
    echo fread($fp, 65536);
    flush(); // this is essential for large downloads
}


fclose($fp);
}


// if($id == "2")
// {

// $file = "Genius Group Convertible Loan Launch Phase Investment Entitlements.pdf";
// header("Content-Disposition: attachment; filename=" . urlencode($file));
// header("Content-Type: application/pdf");
// header("Content-Type: application/download");
// header("Content-Description: File Transfer");
// //header("Content-Length: " . filesize($file));
// flush(); // this doesn't really matter.
// $fp = fopen($file, "r");
// while (!feof($fp))
// {
//     echo fread($fp, 65536);
//     flush(); // this is essential for large downloads
// }


// fclose($fp);
// }



?>

