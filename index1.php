<?php 
require 'connection.php';

require 'pdo.php';

// require 'task.php';

$pdo = Connection::make();
$query = new QueryBuilder($pdo);
// var_dump($query->selectAll('fellows'));
// var_dump($query->where('fellows', 'age', '23'));
// var_dump($query->findOne('fellows', 'id', '1'));
var_dump($query->deleteRow('fellows', 'joe@gmail.com'));
// var_dump($query->addRow('fellows','age','name','email','address', '34', 'Ismail','php@gmail.com','10 surulere'));
$arr = ['name'=>'Agbeye', 'age'=>34, 'address'=>'20,Alara', 'email'=>'pay@gmail.com'];
var_dump($query->update('fellows', $arr, 'email','example@gmail.com'));


?>