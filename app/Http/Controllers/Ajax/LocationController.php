<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\DistrictRepositoryInterface as DistrictRepository;
use App\Repositories\Interfaces\WardRepositoryInterface as WardRepository;
class LocationController extends Controller
{
    protected $districtRepository;
    protected $wardRepository;
    public function __construct(DistrictRepository $districtRepository,WardRepository $wardRepository)
    {
        $this->districtRepository = $districtRepository;
        $this->wardRepository = $wardRepository;
    }
    public function getLocation(Request $request)
    {
        $province_id = $request->input('province_id');
        $districts = $this->districtRepository->findDisctrictByProvinceId( $province_id);
        $response= [
            'html' => $this->renderHtml($districts)
        ];
        return response()->json($response);
    }
    public function renderHtml($districts){
        $html = '<option value="0">[Chọn Quận/Huyện]</option>';
        foreach($districts as $district){
        $html .= '<option value="'.$district->code.'">'.$district->name.'</option>';
        }
        return $html;
    }
    public function getWard(Request $request)
    {
        $district_id = $request->input('district_id');
        $wards = $this->wardRepository->findWardByDistrictId( $district_id);
        $response= [
            'html' => $this->renderHtmlWard($wards)
        ];
        return response()->json($response);
    }
    public function renderHtmlWard($wards){
        $html = '<option value="0">[Chọn Phường/Xã]</option>';
        foreach($wards as $ward){
        $html .= '<option value="'.$ward->code.'">'.$ward->name.'</option>';
        }
        return $html;
    }
}
