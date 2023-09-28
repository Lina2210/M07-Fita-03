<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEX33</title>
</head>
<body>
    <form>
        <textarea name="texto"></textarea><br></br>
        <input type = "submit">
    </form>
    
</body>
</html>

<?php
$file = file("ex33.txt");
foreach($file as $paragraf) {
    echo "<p>$paragraf</p>";
}
if(isset($_POST["texto"])){
    file_put_contents("ex33.txt",
    file_get_contents("ex33.txt"). "<hr>" . $_POST['texto']);

}

$file = file("ex33.txt");
foreach ($file as $paragraf) {
    echo  "<p>".trim($paragraf)."</p>\n";
}
?>