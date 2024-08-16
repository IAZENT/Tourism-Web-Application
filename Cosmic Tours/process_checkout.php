<?php
session_start();

function processOrder($address, $paymentMethod, $cardDetails) {

    return true; 
}

$address = $_POST['address'];
$paymentMethod = $_POST['payment-method'];
$cardDetails = $_POST['card-details'];

if (processOrder($address, $paymentMethod, $cardDetails)) {
    
    echo json_encode(['status' => 'success']);
} else {
    
    echo json_encode(['status' => 'error', 'message' => 'There was a problem processing your order.']);
}
?>
