<?php
session_start();

if (!isset($_SESSION['flash'])) {
    echo "<h3>Aucun message enregistré.</h3>";
    exit;
}

$flash = $_SESSION['flash'];
$type = $flash['type'];
$messages = $flash['messages'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Log Flash</title>
</head>
<body>
    <h2>Dernier message Flash :</h2>

    <div style="border:1px solid #ccc;padding:10px;width:400px;margin-top:10px;">
        <strong>Type:</strong> <?= htmlspecialchars($type) ?><br><br>

        <strong>Messages:</strong>
        <ul>
            <?php foreach ($messages as $msg): ?>
                <li><?= htmlspecialchars($msg) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
