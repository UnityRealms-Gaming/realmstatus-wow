<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WoW Privat Server Status</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">

</head>
<body>

<?php

// Verbindungsinformationen zur Datenbank
require_once('connection.php');

?>

<div class="container mt-5">
    <h1 class="mb-4">WoW Privat Server Status</h1>

    <?php

$sql = "SELECT address, port, name FROM realmlist";
$stmt = $pdo->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $ip = cleanInput($row['address']);
    $port = cleanInput($row['port']);
    $name = cleanInput($row['name']);

    $isOnline = checkPortStatus($ip, $port);

    echo '<div class="server-info">';
    echo "<h5>Server: $name</h5>";
    echo "<p>IP: $ip | Port: $port ";

    if ($isOnline) {
        echo '<i class="fas fa-check-circle online-icon"></i> Online';
    } else {
        echo '<i class="fas fa-times-circle offline-icon"></i> Offline';
    }

    echo '</p></div>';
}

function cleanInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    return $input;
}

function checkPortStatus($ip, $port) {
    $connection = @fsockopen($ip, $port, $errno, $errstr, 1);
    if ($connection) {
        fclose($connection);
        return true; // Port ist offen (Online)
    } else {
        return false; // Port ist geschlossen (Offline)
    }
}
    echo '<center><p>&copy; 2023 by ' .  $servername . ' </p></center>';
    ?>
</div>
<!-- Servername anzeigen -->

<!-- Bootstrap JS und jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
