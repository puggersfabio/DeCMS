<?php
/* start de sessie voor het inloggen */
session_start();
/* de database connectie */
$db = new PDO('mysql:host=localhost;dbname=portfoliocmsdb', 'CMSPortfolio', 'DeContent56!');
