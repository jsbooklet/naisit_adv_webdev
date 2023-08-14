<?php
// Check whether https (secure) or http (non-secure) is being used
$https = filter_input(INPUT_SERVER, 'HTTPS');
if (!$https) {
    echo "Page is NOT Secure";
} else {
    echo "Page is Secure";
}
?>
