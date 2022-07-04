<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$txt="string example";
echo "txt: ".$txt."<br>";
echo "length = ".strlen($txt)."<br>";
echo "word count = ".str_word_count($txt)."<br>";
echo "reverse = ".strrev($txt)."<br>";
echo "find word: ".strpos($txt,"example")."<br>";
echo "replace: ".str_replace("example","example1",$txt);
//string ifade örnekleri

?>
</body>
</html>