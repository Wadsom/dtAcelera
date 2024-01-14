<?php
$pathCon = __DIR__ . "/banco.sqlite2";
$con = new pdo('sqlite:' . $pathCon);
echo "conectei";

$con->query("CREATE TABLE IF NOT EXISTS tb_pacientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(80),
  fone VARCHAR(85)
)");
if ($con->exec()) {
    echo "Conectei";
}
echo "Error";

