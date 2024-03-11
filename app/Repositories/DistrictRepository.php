<?php

namespace App\Repositories;
use App\Models\District;
use App\Repositories\Interfaces\DistrictRepositoryInterface;
/**
 * Class PronviceService
 * @package App\Services
 */
class DistrictRepository implements DistrictRepositoryInterface
{
   protected $model;

   public function __construct(District $model)
   {
      $this->model = $model;
   }
 public function all(){
    return District::all();
 }
 public function findDisctrictByProvinceId(int $provinceId=0){
 return $this->model->where('province_code','=', $provinceId)->get();
 }
}
