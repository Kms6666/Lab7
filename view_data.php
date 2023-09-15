<?php
    $stateCode = $_GET['state-code'];
    echo $stateCode;

$program = '/usr/bin/python3 /var/www/html/fetch_data.py'." ".$stateCode;
//uses exec function to run the program and save the output in a variable
$output = exec($program);
//open pipe to the program's output
$handle = popen($program, 'r');
//reads the putput line by line and echo it back to the webpage with html line breaks
while(!feof($handle)) {
    $line = fgets($handle);

    echo $line;
    echo "<br><br>";
}

//closes pipe
pclose($handle);
?>
<br><br>
<a href='index.html'> Click here to go back and try again </a>
