<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $businessName = htmlspecialchars($_POST['businessName']);
    $ownerName = htmlspecialchars($_POST['ownerName']);
    $businessType = htmlspecialchars($_POST['businessType']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    echo "
    <h2>Registration Successful!</h2>
    <p><strong>Business Name:</strong> $businessName</p>
    <p><strong>Owner Name:</strong> $ownerName</p>
    <p><strong>Business Type:</strong> $businessType</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Address:</strong> $address</p>
    ";
} else {
    echo "<p style='color: red;'>Invalid request.</p>";
}
?>
