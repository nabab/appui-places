<?php
/**
 * What is my purpose?
 *
 **/

use bbn\X;
use bbn\Str;
/** @var $model \bbn\Mvc\Model*/

$idCountries = $model->inc->options->fromCode('countries', 'core', 'appui');

return [
  "countries" => $model->inc->options->textValueOptions($idCountries)
];