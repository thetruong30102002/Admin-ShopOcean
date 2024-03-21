<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Interfaces\UserServiceInterface as UserService;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceService;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userService;
    protected $provinceRepository;
    protected $userRepository;
    public function __construct(UserService $userService, ProvinceService $provinceRepository,UserRepository $userRepository)
    {
        $this->userService = $userService;
        $this->provinceRepository = $provinceRepository;
        $this->userRepository = $userRepository; 
    }

    public function index(Request $request)
    {
        $auth = Auth::user();
        $config['seo'] = config('apps.user');
        $users = $this->userService->paginate($request);
        // $users = User::paginate(10);
        $template = 'backend.user.index';
        return view('backend.dashboard.layout', compact('template', 'users', 'config','auth'));
    }
    public function create()
    {
        $auth = Auth::user();
        $provinces = $this->provinceRepository->all();
        $config['seo'] = config('apps.user');
        $config['method'] = 'create';
        $template = 'backend.user.store';
        return view('backend.dashboard.layout', compact('template', 'config', 'provinces','auth'));
    }
    public function store(StoreUserRequest $request)
    {
        if($this->userService->create($request)){
            return redirect()->route('user.index')->with('success', 'Thêm mới bản ghi thành công');
        }
        return redirect()->route('user.index')->with('error', 'Thêm mới bản ghi không thành công. Hãy thử lại');
    }
    public function edit($id){
        $auth = Auth::user();
        $user = $this->userRepository->findById($id);
        $provinces = $this->provinceRepository->all();
        $config['seo'] = config('apps.user');
        $config['method'] = 'edit';
        $template = 'backend.user.store';
        return view('backend.dashboard.layout', compact('template', 'config', 'provinces','user','auth'));
    }
    public function update($id,UpdateUserRequest $request){
        if($this->userService->update($id,$request)){
            return redirect()->route('user.index')->with('success', 'Cập nhật bản ghi thành công');
        }
        return redirect()->route('user.index')->with('error', 'Cập nhật bản ghi không thành công. Hãy thử lại');
    }
    public function delete($id){
        $auth = Auth::user();
        $user = $this->userRepository->findById($id);
        $config['seo'] = config('apps.user');
        $config['method'] = 'delete';
        $template = 'backend.user.delete';
        return view('backend.dashboard.layout', compact('template', 'user','config','auth'));
    }
    public function destroy($id){
        if($this->userService->destroy($id)){
            return redirect()->route('user.index')->with('success', 'Xóa bản ghi thành công');
        }
        return redirect()->route('user.index')->with('error', 'Xóa bản ghi không thành công. Hãy thử lại');
    }
      
}
