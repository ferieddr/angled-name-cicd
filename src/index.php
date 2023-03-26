<?php 
$yourname = $_GET['name'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Angled name</title>
<style>
html,body {
    margin: 0;
    padding: 0;
    font-family: "Lucida Console", "Courier New", monospace;
    font-size: 25px;
}
#wrapper {
    margin: 10px 10px;
}
#squarename {
    line-height: 18px;
}
</style>
</head>
<body>
<div id="wrapper">
<p>The name angled:</p>

<div id="squarename">
<?php
if(isset($yourname) || $yourname != "") {
    $yourname = strtoupper($yourname);
    $exploded = str_split($yourname);
    array_shift($exploded);
    echo $yourname;
    echo "<br />";
    foreach ($exploded as $char) {
        echo $char."<br />";
    }
} else {
    echo "Enter your name as the parameter ?name=";
}
?>
</div>
</div>
</body>
</html>