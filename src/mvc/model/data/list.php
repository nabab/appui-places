<?php
/**
 * What is my purpose?
 *
 **/

use bbn\X;
use bbn\Str;
/** @var $model \bbn\Mvc\Model*/

$grid = new bbn\Appui\Grid($model->db, $model->data, [
  "table" => "bbn_addresses",
  "fields" => []
]);

return $grid->getDatatable();
