<?php

// This is a test file to trigger the GitHub Actions scan

// Should trigger: .dev.realtyads.com
$api_url = "https://my-branch.dev.realtyads.com/endpoint";

// Should trigger: var/www-dy/
$path = "/var/www-dy/some-folder/file.php";

// Should trigger: _dev
$env = "staging_dev.php";

// Safe usage (should NOT trigger)
$other_env = "staging";
$backup_path = "/var/www/safe-folder";

// Should trigger: assignment to $_REQUEST
$_REQUEST['username'] = $_POST['username'];
$_REQUEST['password']='1234';

// Should trigger: type casting with $_REQUEST
$user = (string)$_REQUEST['user'];
$pwd = (string) $_REQUEST['pass'];

// Should trigger: string concat with $_REQUEST
echo "User: " . $_REQUEST['username'];
echo "User: ".$_REQUEST['username'];
echo 'User: ' . $_REQUEST['username'];
echo 'User: '.$_REQUEST['username'];

// Should trigger: string concat with $_GET
echo "Page: " . $_GET['page'];
echo "Page: ".$_GET['page'];
echo 'Page: ' . $_GET['page'];
echo 'Page: '.$_GET['page'];

// Should trigger: string concat with $_POST
echo "Form: " . $_POST['form'];
echo "Form: ".$_POST['form'];
echo 'Form: ' . $_POST['form'];
echo 'Form: '.$_POST['form'];


// Should NOT trigger (safe usage)
$user_input = $_REQUEST['input'] ?? null;

// Also should NOT trigger (safe usage)
if($_REQUEST['password'] == '1234') {
    echo "Password is correct";
};


// Just a normal line
echo "Hello, world!";

