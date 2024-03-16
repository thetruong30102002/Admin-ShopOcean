<?php

namespace App\Services\Interfaces;

use Illuminate\Http\Request;

/**
 * Class UserService
 * @package App\UserServiceInterface
 */
interface UserServiceInterface
{
    public function create($request);
    public function paginate($request);
    public function update( $id,$request);
    public function destroy($id);
}