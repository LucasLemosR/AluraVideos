<?php

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new Pdo("sqlite:$dbPath");
$pdo->exec('CREATE TABLE videos (id INTEGER PRIMARY KEY, url TEXT, title TEXT);');