<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <style>
        h2 {
            color: blue;             
        }

        table {
            border-collapse: collapse;
            border: solid black;
            border-spacing: 5px;
        }

        td {
            border: solid black;
            padding-right: 5px; 
            width: 300px; 
            text-align: left; 
            vertical-align: middle; 
        }

    </style>
    
    
</head>




<table>
<?php
$files=file('contactes31.txt');

echo "<tr>\n";
foreach($files as $num_files => $line) {

    echo "\t<td>" . $line . "\t</td>\n";
    echo "\t</tr>\n";
}

?>
</table>
<?php
    $file = fopen('contactes31b.txt', 'w');
    
    foreach($files as $num_files => $line) {
        $cambio = str_replace(",", "#", $line);
        fwrite($file, $cambio);
    }
    fclose($file);
?>
