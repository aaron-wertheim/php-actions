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
