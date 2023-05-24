<!-- process.php -->
<?php
$submittedValue = $_POST['contents'];

if ($submittedValue === '127') {
    redirectUser();
}

function redirectUser() {
    // Replace 'https://example.com' with the desired website URL
    $destinationURL = 'https://example.com';

    echo '<script>window.location.href = "' . $destinationURL . '";</script>';
    exit;
}
?>
