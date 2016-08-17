<?php

$_GET['name'] = 'Mevlut';

# Null Coalasce Operator

$name = isset($_GET['name']) ? $_GET['name'] : 'nothing';

// var_dump($name);

// $surname = $_GET['surname'] ?? 'nothing';

// var_dump($surname);

echo $name . ' ' . ( $_GET['surname'] ?? '(unknown)' );
