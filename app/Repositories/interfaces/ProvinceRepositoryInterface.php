<?php

namespace App\Repositories\Interfaces;

/**
 * Class PronviceService
 * @package App\ProvinceRepositoryInterface
 */
interface ProvinceRepositoryInterface 
{
   public function all();
   public function findById(int $id);
   public function findId(
      int $modelId,
      array $column = ['*'],
      array $relation = []
   );
}