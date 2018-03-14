<?php
// start_session();
require_once 'vendor/autoload.php';
use GraphAware\Neo4j\Client\ClientBuilder;
$client = ClientBuilder::create()
    ->addConnection('bolt', 'bolt://neo4j:9955040194@localhost:7687')
    ->build();
<<<<<<< HEAD
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
=======

if (isset($_POST['userResponse']) && $_POST['userResponse'] !="") {
  if ($_POST['id']=="-1") {
    $q_id = "match (s:SYMPTOM)-[:OPTION]->(q:QUESTION) return ID(q) as id";
    $result_id = $client->run($q_id);
    $id = $result_id->getRecord()->value('id');
  }
  else {
    $id = $_POST['id'];
    $q_id = "match (:QUESTION)-[r:OPTION]->(q:QUESTION) where ID(r) =".$id." return ID(q) as id";
    $result_id = $client->run($q_id);
    $id = $result_id->getRecord()->value('id');
    //echo $id;
  }

  $q = "match (q:QUESTION) where ID(q)=".$id." return q.value as question";
  $o = "match (q0:QUESTION)-[r:OPTION]->(q1:QUESTION) where ID(q0)=".$id." return ID(r) as id, r.value as options";
  $result_q = $client->run($q);
  $result_o = $client->run($o);

  $JSON_responce = "{\"question\":";

  foreach ($result_q->getRecords() as $record_q) {
      $question=$record_q->value('question');
      $options="{";
      $i = 1;
      foreach ( $result_o->getRecords() as $record_o) {
        if($i!=1) $options .= "," ;
        $options .= "\"".$record_o->value('options')."\":".$record_o->value('id')."";
        $i++;
      }
      $options .="}";
  $JSON_responce .= "\"".$question."\"".",\"options\":".$options."}";
  echo $JSON_responce;
  // print_r($record->value('options')[]->value('val'));
  }
}?>
>>>>>>> 680fb320eea155bb7985ff0628229c1c4b4c5436
