<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/DataBase/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (!empty($data)) {
        $linkContact = $data['linkContact'];
        $nameWebsite = strtoupper($data['nameWebsite']);
        $currentPicked = $data['currentPicked'];
        $currentPrice = $data['currentPrice'];
        $time = time();
        $status = 1;

        $sql = "INSERT INTO mauthue (nameWebsite, linkContact, currentPicked, currentPrice, time, status) VALUES (:nameWebsite, :linkContact, :currentPicked, :currentPrice, :time, :status)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nameWebsite', $nameWebsite);
        $stmt->bindParam(':linkContact', $linkContact);
        $stmt->bindParam(':currentPicked', $currentPicked);
        $stmt->bindParam(':currentPrice', $currentPrice);
        $stmt->bindParam(':time', $time);
        $stmt->bindParam(':status', $status);
        
        $stmt->execute();
    }
}
?>
