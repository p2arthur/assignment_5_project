<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Number Input Form</title>
</head>
<body>

<h2>Enter Five Numbers <span>This is a new change from feature 1 - I was tasked to make this change while my team is asleep - thats why i created this branch</span></h2>
<form method="get" action="process.php">
    <input type="number" name="a" placeholder="Number A" value="<?= $_GET['a'] ?? $_POST['a'] ?? '' ?>"><br><br>
    <input type="number" name="b" placeholder="Number B" value="<?= $_GET['b'] ?? $_POST['b'] ?? '' ?>"><br><br>
    <input type="number" name="c" placeholder="Number C" value="<?= $_GET['c'] ?? $_POST['c'] ?? '' ?>"><br><br>
    <input type="number" name="d" placeholder="Number D" value="<?= $_GET['d'] ?? $_POST['d'] ?? '' ?>"><br><br>
    <input type="number" name="e" placeholder="Number E" value="<?= $_GET['e'] ?? $_POST['e'] ?? '' ?>"><br><br>
    <button type="submit">Submit</button>
</form>

</body>
</html>
