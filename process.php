<!-- process.php -->
<?php
$submittedValue = $_POST['contents'];

if ($submittedValue === '4152') {
    redirectUser();
} else {
    redirectToPreviousPage();
}

function redirectUser() {
    // Replace 'https://example.com' with the desired website URL
    $destinationURL = 'https://example.com';

    echo '<script>window.location.href = "' . $destinationURL . '";</script>';
    exit;
}

function redirectToPreviousPage() {
    $referer = $_SERVER['HTTP_REFERER']; 
    if (!empty($referer)) {
        echo '<script>window.location.href = "' . $referer . '";</script>';
    } else;
}


?>
