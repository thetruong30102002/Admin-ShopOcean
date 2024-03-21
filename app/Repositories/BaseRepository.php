<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\BaseRepositoryInterface;


use App\Models\Base;
use Illuminate\Support\Facades\Auth;

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

    public function pagination(
        array $column = ['*'],
        array $condition = [],
        array $join = [],
        int $perPage = 20,
        array $extend = []
    ) {
        $auth = Auth::user();
        $query = $this->model->select($column)->where(function ($query) use ($condition) {
            
            if (isset($condition['keyword']) && !empty($condition['keyword'])) {
                $query->where('name', 'LIKE', '%' . $condition['keyword'] . '%');
            }
            if (isset($condition['user_catelogue_id']) && ($condition['user_catelogue_id']) > 0   ) {
                $query->where('user_catelogue_id', '=', ''.$condition['user_catelogue_id'].'');
            }
            
        })->where('id','!=',$auth->id);
        if (!empty($join)) {
            $query->join(...$join);
        }
        return $query->paginate($perPage)->withQueryString()->withPath(env('APP_URL') . $extend['path']);
    }

    public function create(array $payload = [])
    {
        $model =  $this->model->create($payload);
        return $model->fresh();
    }
    public function update($id = 0, array $payload = [])
    {
        $model =  $this->findById($id);
        return $model->update($payload);
    }
    public function delete($id = 0)
    {
        return $this->findById($id)->delete();
    }
    public function forceDelete($id = 0)
    {
        return $this->findById($id)->delete();
    }
    public function all()
    {
        return $this->model->all();
    }
    public function findById(int $id)
    {
        return $this->model->all();
    }
    public function findId(
        int $modelId,
        array $column = ['*'],
        $relation = []
    ) {
        return $this->model->select($column)->with($relation)->findOrFail($modelId);
    }
}
