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
   public function create(array $payload = []);
   public function update($id = 0,array $payload = []);
   public function delete($id = 0);
}