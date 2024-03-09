<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Interfaces\UserServiceInterface as UserService;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $config['seo'] = config('apps.user');
        $users = $this->userService->paginate();
        // $users = User::paginate(10);
        $template = 'backend.user.index';
        return view('backend.dashboard.layout', compact('template', 'users','config'));
    }
    public function create()
    {
        $config['seo'] = config('apps.user');
        $template = 'backend.user.create';
        return view('backend.dashboard.layout', compact('template','config'));
    }
}
