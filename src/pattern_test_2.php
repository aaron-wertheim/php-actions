<?php

// This is a test file to trigger the GitHub Actions scan

// Should trigger: .dev.realtyads.com
$api_url = "https://my-branch-2.dev.realtyads.com/endpoint2";

// Should trigger: var/www-dy/
$path = "/var/www-dy/some-folder-2/file.php";

// Should trigger: _dev
$env = "staging_2_dev.php";

// Safe usage (should NOT trigger)
$other_env = "staging_2";
$backup_path = "/var/www/safe-folder-2";

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