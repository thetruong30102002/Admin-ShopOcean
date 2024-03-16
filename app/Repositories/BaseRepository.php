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
    
    public function pagination(array $column=['*'],array $condition=[],array $join=[],$perPage){
        $query= $this->model->select($column)->where($condition);
        if(!empty($join)){
         $query->join(...$join);
        }
        return $query->paginate($perPage);
    }

    public function create(array $payload = []){
       $model=  $this->model->create($payload);
       return $model->fresh();
    }
    public function update($id = 0,array $payload = []){
        $model=  $this->findById($id);
        return $model->update($payload);
     }
     public function delete($id = 0){
        return $this->findById($id)->delete();
     }
     public function forceDelete($id = 0){
        return $this->findById($id)->delete();
     }
    public function all(){
        return $this->model->all();
    }
    public function findById(int $id){
         return $this->model->all();
    }
    public function findId(
        int $modelId,
        array $column = ['*'],
      $relation = []
    ){
        return $this->model->select($column)->with($relation)->findOrFail($modelId);
    }
}
