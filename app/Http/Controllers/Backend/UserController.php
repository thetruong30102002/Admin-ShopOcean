<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Interfaces\UserServiceInterface as UserService;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceService;

class UserController extends Controller
{
    protected $userService;
    protected $provinceRepository;
    public function __construct(UserService $userService, ProvinceService $provinceRepository)
    {
        $this->userService = $userService;
        $this->provinceRepository = $provinceRepository;
    }

    public function index()
    {
        $config['seo'] = config('apps.user');
        $users = $this->userService->paginate();
        // $users = User::paginate(10);
        $template = 'backend.user.index';
        return view('backend.dashboard.layout', compact('template', 'users', 'config'));
    }
    public function create()
    {
        $provinces = $this->provinceRepository->all();
        
        $config = [
            'css' => [
                '<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />'
            ],
            'js' => [
                '<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>'
            ]
        ];
        $config['seo'] = config('apps.user');
        $template = 'backend.user.create';
        return view('backend.dashboard.layout', compact('template', 'config', 'provinces'));
    }
}
