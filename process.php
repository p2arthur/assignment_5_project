<?php


$values = array_filter([$_GET['a'] ?? $_POST['a'] ?? null, 
                        $_GET['b'] ?? $_POST['b'] ?? null, 
                        $_GET['c'] ?? $_POST['c'] ?? null, 
                        $_GET['d'] ?? $_POST['d'] ?? null, 
                        $_GET['e'] ?? $_POST['e'] ?? null]);

$input_str = implode(",", $values);

$output = shell_exec("python3 data_management.py " . escapeshellarg($input_str));

echo "<h2>Results:</h2>";
echo "<p>Original Values: " . implode(", ", $values) . "</p>";

echo $output;
?>
