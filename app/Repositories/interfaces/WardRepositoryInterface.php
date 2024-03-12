<?php

namespace App\Repositories\Interfaces;

/**
 * Class WardRepositoryInterface
 * @package App\WardRepositoryInterface
 */
interface WardRepositoryInterface
{
   public function all();
   public function findWardByDistrictId(int $districtId);
}