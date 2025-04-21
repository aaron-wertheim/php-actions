<?php

// This is a test file to trigger the GitHub Actions scan

// Should trigger: .dev string
$api_url = "https://my-api.dev/endpoint";

// Should trigger: assignment to $_REQUEST
$_REQUEST['username'] = $_POST['username'];
$_REQUEST['password'] = '1234';


// Should NOT trigger (safe usage)
$user_input = $_REQUEST['input'] ?? null;

// Just a normal line
echo "Hello, world!";
