<?php

// This is a test file to trigger the GitHub Actions scan

// Should trigger: .dev string
$api_url = "https://my-api.dev/endpoint";

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

