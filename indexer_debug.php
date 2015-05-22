<?php
include 'app/Mage.php';
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);
umask(0);


Mage::app('default');
Mage::register('isSecureArea', 1);
/** @var Mage_Index_Model_Process $process */
$process = Mage::getModel('index/process')->load(2);
//foreach($processes as $process){
    $process->reindexEverything();
    Mage::dispatchEvent($process->getIndexerCode() . '_shell_reindex_after');
    echo $process->getIndexer()->getName() . " index was rebuilt successfully\n";
//}
//$process->reindexEverything();
