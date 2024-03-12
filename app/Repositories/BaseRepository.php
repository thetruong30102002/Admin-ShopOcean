<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\BaseRepositoryInterface;


use App\Models\Base;
/**
 * Class PronviceService
 * @package App\Services
 */
class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    public function __construct(Model $model)
    {   
        $this->model =  $model;
    }
    public function create(array $payload = []){
       $model=  $this->model->create($payload);
       return $model->fresh();
    }
    public function all(){
        return $this->model->all();
    }
    public function findById(int $id){
         return $this->model->all();
    }
}
