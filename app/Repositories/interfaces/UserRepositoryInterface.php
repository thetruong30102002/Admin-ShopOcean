<?php

namespace App\Repositories\Interfaces;

/**
 * Class UserService
 * @package App\UserServiceInterface
 */
interface UserRepositoryInterface
{
    public function create();
    public function getAllPaginate();
}