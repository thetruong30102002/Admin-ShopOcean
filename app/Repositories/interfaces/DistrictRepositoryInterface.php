<?php

namespace App\Repositories\Interfaces;

/**
 * Class DistrictRepositoryInterface
 * @package App\DistrictRepositoryInterface
 */
interface DistrictRepositoryInterface
{
   public function all();
   public function findDistrictByProvinceId(int $province_id);
   public function findId(
      int $modelId,
      array $column = ['*'],
      array $relation = []
   );
}