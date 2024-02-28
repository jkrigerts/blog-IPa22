<?php

function dd($data) {
  echo "<pre>";
  print_r($data, true);
  echo "</pre>";
  die();
}