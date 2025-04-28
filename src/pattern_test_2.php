<?php

// This is a test file to trigger the GitHub Actions scan

// Should trigger: .dev.realtyads.com
//$api_url = "https://my-branch-2.dev.realtyads.com/endpoint2";

// Should trigger: var/www-dy/
$path = "/var/www-dy/some-folder-2/file.php";

// Should trigger: _dev
$env = "staging_2_dev.php";

// Safe usage (should NOT trigger)
$other_env = "staging_2";
$backup_path = "/var/www/safe-folder-2";

// Should trigger: assignment to $_REQUEST
$_REQUEST['username'] = $_POST['username'];
$_REQUEST['password']='1234';

// Should trigger: type casting with $_REQUEST
$user2 = (string)$_REQUEST['user'];
$pwd2 = (string) $_REQUEST['pass'];


// Should NOT trigger: type casting with $_REQUEST
$pwd2 = (string) $pwd2;

// Should trigger: string concat with $_REQUEST
echo "User2: " . $_REQUEST['username'];
echo "User2: ".$_REQUEST['username'];
echo 'User2: ' . $_REQUEST['username'];
echo 'User2: '.$_REQUEST['username'];

// Should trigger: string concat with $_GET
echo "Page2: " . $_GET['page'];
echo "Page2: ".$_GET['page'];
echo 'Page2: ' . $_GET['page'];
echo 'Page2: '.$_GET['page'];

// Should trigger: string concat with $_POST
echo "Form2: " . $_POST['form'];
echo "Form2: ".$_POST['form'];
echo 'Form2: ' . $_POST['form'];
echo 'Form2: '.$_POST['form'];

// Should NOT trigger: string concat
echo "Path: " . $path;

// Should trigger: SELECT * and string concat with $_GET
$query2 = "SELECT * FROM realty_users WHERE id = " . $_GET['id'];
$query2 = "SELECT  * FROM realty_users WHERE id = " . $_GET['id'];

// Should trigger: SELECT *
$query_multi = "SELECT
*
FROM realty_users
WHERE id = " . $_REQUEST['id'];

// Should NOT trigger: SELECT *
$good_query2 = "SELECT id FROM realty_users WHERE id = " . $user2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Pattern Trigger Page</title>
</head>
<body>
<h1>Pattern Test File</h1>
<p>This file exists solely to trigger and verify GitHub Actions pattern scans.</p>

<!--  These should trigger HTML injection scan -->
<div>
    <strong>Username2:</strong> <?= $_REQUEST['username2'] ?><br>
    <strong>Email2:</strong> <?=    $_POST['email2'] ?><br>
    <strong>Page2:</strong> <?=  $_GET['page2'] ?><br>
</div>

<!--  Safe usage example -->
<div>
    <strong>Safe Output2:</strong> <?= htmlspecialchars($_REQUEST['safe2'] ?? '') ?>
</div>
</body>
</html>