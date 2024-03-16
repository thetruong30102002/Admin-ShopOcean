<?php

namespace App\Services;

use App\Services\Interfaces\UserServiceInterface;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function paginate($request)
    {
        $users = $this->userRepository->getAllPaginate();
        return $users;
    }
    public function create($request)
    {
       DB::beginTransaction();
       try{
        $payload = $request->except(['_token','send','re_password']);
        $payload['birthday'] = $this->convertBirthdayDate($payload['birthday']);
        $payload['password'] = Hash:: make($payload['password']);
        $user = $this->userRepository->create($payload);
        DB::commit();
        return true;
       }catch(\Exception $e) {
        DB::rollBack();
        echo $e->getMessage();
        die();
        return false;
       }

    }
    public function update($id,$request)
    {
       DB::beginTransaction();
       try{
        $payload = $request->except(['_token','send']);
        // dd($payload);
        $payload['birthday'] = $this->convertBirthdayDate($payload['birthday']);
        $user = $this->userRepository->update($id,$payload);
        DB::commit();
        return true;
       }catch(\Exception $e) {
        DB::rollBack();
        echo $e->getMessage();
        die();
        return false;
       }

    }

    public function destroy($id){
        DB::beginTransaction();
       try{
        $user = $this->userRepository->forceDelete($id);
        DB::commit();
        return true;
       }catch(\Exception $e) {
        DB::rollBack();
        echo $e->getMessage();
        die();
        return false;
       }

    }

    private function convertBirthdayDate ($birthday = ''){
        $carbonDate = Carbon::createFromFormat('Y-m-d',$birthday);
        $birthday = $carbonDate->format('Y-m-d H:i:s');
        return $birthday;
    }
}
