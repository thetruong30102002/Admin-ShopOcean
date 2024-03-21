<?php

namespace App\Repositories\Interfaces;

/**
 * Class UserService
 * @package App\UserServiceInterface
 */
interface UserRepositoryInterface
{
    public function create();
    public function update($id = 0,array $payload = []);
    public function delete($id = 0);
    public function forceDelete($id = 0);
    public function pagination(
        array $column = ['*'],
        array $condition = [],
        array $join = [],
        int $perPage=20 ,
    );
    public function findById(int $id);
    
}