<?php

if(is_int(5)){
    echo 'Sim';
}else{
    echo 'Não';
}

echo '<br>';

if(is_int(5.5)){
    echo 'Sim';
}else{
    echo 'Não';
}

echo '<br>';

if(is_int('Legal')){
    echo 'Sim';
}else{
    echo 'Não';
}

echo '<br>';
$a = 10;

if(is_int($a)){
    echo 'Sim';
}else{
    echo 'Não';
}


?>