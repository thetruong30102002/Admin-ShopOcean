<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
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
                '<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>',
                '<script src="https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-ckfinder@41.2.0/src/index.min.js"></script>'
            ]
        ];
        $config['seo'] = config('apps.user');
        $template = 'backend.user.create';
        return view('backend.dashboard.layout', compact('template', 'config', 'provinces'));
    }
    public function store(StoreUserRequest $request)
    {
        if($this->userService->create($request)){
            return redirect()->route('user.index')->with('success', 'Thêm mới bản ghi thành công');
        }
        return redirect()->route('user.index')->with('error', 'Thêm mới bản ghi không thành công. Hãy thử lại');
    }
}
