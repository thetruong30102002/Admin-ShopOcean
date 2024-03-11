<?php

namespace App\Repositories\Interfaces;

/**
 * Class BaseRepositoryInterface
 * @package App\BaseRepositoryInterface
 */
interface BaseRepositoryInterface
{
   public function all();
   public function findById(int $id);
}