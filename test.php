<?php

require_once 'vendor/autoload.php';

use GraphAware\Neo4j\Client\ClientBuilder;

$client = ClientBuilder::create()
    ->addConnection('bolt', 'bolt://neo4j:123@localhost:7687')
    ->build();
$query = "MATCH (s:symptom)-[:has_symptom]-(q:question)-[:has_option]->(o:option) with q.q as questions ,collect(o) as options return questions , options limit 1000";
$result = $client->run($query);

foreach ($result->getRecords() as $record) {
  //print_r($record);
    echo sprintf('Question is : %s  options', $record->value('questions'));
    echo "<br>";
    $options = $record->value('options');
    foreach ( $options as $key => $val) {
      print_r($record->value('options')[$key]->value('val'));
      echo "<br>";
    }
    echo "<br>";
    // print_r($record->value('options')[]->value('val'));

}?>
