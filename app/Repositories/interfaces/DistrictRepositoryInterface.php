<?php

namespace App\Repositories\Interfaces;

/**
 * Class DistrictRepositoryInterface
 * @package App\DistrictRepositoryInterface
 */
interface DistrictRepositoryInterface
{
   public function all();
   public function findDisctrictByProvinceId(int $provinceId);
}