<?php

$arr = ["Lucas" => 15, 
    "Abel" => 19, 
    "Gabriel" => 26, 
    "José" => 57, 
    "Marcos" => 40, 
    "Anita" => 35, 
    "Layane" => 18, 
    "Josefina" => 23, 
    "Vera" => 18, 
    "Robson" => 30
];

echo "<table><tr><th>Nome</th><th>Idade</th></tr>";
foreach($arr as $key => $value){
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo 
"<style>
    td, tr, table {
        border: 1px solid black;
        text-align: center;
    }
</style>";