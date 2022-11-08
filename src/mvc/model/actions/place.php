<?php
/**
 * What is my purpose?
 *
 **/

use bbn\X;
use bbn\Str;
/** @var $model \bbn\Mvc\Model*/

$res = ["success" => false];

if ($model->hasData("action")) {
  switch($model->data["action"]) {
    case 'insert':
      if ($model->hasData(["address", "city", "id_country", "pc"], true)) {
      	if ($res["success"] = $model->db->insert("bbn_addresses", [
          "address" => $model->data["address"],
          "city" => $model->data["city"],
          "id_country" => $model->data["id_country"],
          "pc" => $model->data["pc"],
          "tel" => $model->data["tel"] ?? null,
          "email" => $model->data["email"] ?? null
        ])) {
          $id = $model->db->lastId();
          $res["data"] = $model->db->rselect("bbn_addresses", [], ["id" => $id]);
        }
      }
      break;
    case 'delete':
      $id = $model->data["id"];
      $res["success"] = $model->db->delete("bbn_addresses", ["id" => $id]);
      break;
    case 'update':
      $id = $model->data["id"];
      if ($res["success"] = $model->db->update("bbn_addresses", [
          "address" => $model->data["address"],
          "city" => $model->data["city"],
          "id_country" => $model->data["id_country"],
          "pc" => $model->data["pc"],
          "tel" => $model->data["tel"] ?? null,
          "email" => $model->data["email"] ?? null
        ], ["id" => $id])) {
          $res["data"] = $model->db->rselect("bbn_addresses", [], ["id" => $id]);
        }
      break;
  }
}

return $res;