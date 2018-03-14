<?php

require_once 'vendor/autoload.php';

use GraphAware\Neo4j\Client\ClientBuilder;

$client = ClientBuilder::create()
    ->addConnection('bolt', 'bolt://neo4j:9955040194@localhost:7687')
    ->build();
$query = "MATCH (s:SYMPTOM)-[r:OPTION]->(q:QUESTION)-[t:OPTION]->(m:QUESTION) RETURN s, r, q, t, m";
$result = $client->run($query);

print_r($result);

foreach ($result->getRecords() as $record) {
    //echo sprintf('Question is : %s  options', $record->value('questions'));
    //echo "<br>";
    //$options = $record->value('options');
    foreach ( $record as $key => $val) {
      print_r($record->value('options')[$key]->value('val'));
      echo "<br>";
    }
    //print_r($record);
    echo "<br><br>";
}

?>
