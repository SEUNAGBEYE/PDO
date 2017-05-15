<?php

class QueryBuilder {
  protected $pdo;

  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  public function selectAll($table){
    $statement = $this->pdo->prepare ("SELECT * FROM {$table}");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function where($table, $field, $value){
    $statement = $this->pdo->prepare ("SELECT * FROM  {$table} WHERE {$field} = {$value}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function findOne($table,$field, $id){
    $statement = $this->pdo->prepare ("SELECT {$field} FROM {$table} WHERE {$id} = {$id} ");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function update($table, $arr,$condition, $test){
    foreach($arr as $field=>$value) {
      
      $statement = $this->pdo->prepare ("UPDATE {$table} SET {$field} ='{$value}' WHERE {$condition} = '{$test}'");
        $statement->execute();
    }
    return;
  }

  public function deleteRow($table, $email){
    $statement = $this->pdo->prepare ("DELETE FROM {$table} WHERE email = '{$email}'");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function addRow($table,$field1,$field2,$field3,$field4,$value1,$value2,$value3,$value4){
    $statement = $this->pdo->prepare ("INSERT INTO {$table} ({$field1},{$field2},{$field3},{$field4}) VALUES ({$value1}, {$value2},{$value3},{$value4})");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }
}
?>