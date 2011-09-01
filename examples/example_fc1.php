<?php

require_once dirname(__FILE__) . '/../Phpmodbus/ModbusMasterUdp.php';

// Create Modbus object
$modbus = new ModbusMasterUdp("192.192.15.51");

try {
    // FC 1
    $recData = $modbus->readCoils(0, 12288, 12);
}
catch (Exception $e) {
    // Print error information if any
    echo $modbus;
    echo $e;
    exit;
}

// Print status information
echo "</br>Status:</br>" . $modbus;

// Print read data
echo "</br>Data:</br>";
var_dump($recData); 
echo "</br>";