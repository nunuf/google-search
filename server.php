<?php

$search = $_GET["search"];

if ($search !== '') {
  $search = urlencode($_GET['search']);
  header("location: https://www.google.co.il/search?q={$search}");
} else {
  header("location: index.php");
}
