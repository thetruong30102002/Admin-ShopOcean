<?php

namespace App\Repositories;
use App\Models\Ward;
use App\Repositories\Interfaces\WardRepositoryInterface;
/**
 * Class PronviceService
 * @package App\Services
 */
class WardRepository implements WardRepositoryInterface
{
   protected $model;

   public function __construct(Ward $model)
   {
      $this->model = $model;
   }
 public function all(){
    return Ward::all();
 }
 public function findWardByDistrictId(int $districtId=0){
 return $this->model->where('district_code','=', $districtId)->get();
 }
}