<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Interfaces\ProfileInterface;
use App\Classes\ApiResponseClass;
use App\Http\Resources\ProfileResource;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private ProfileInterface $profileInterface;

    public function __construct(ProfileInterface $profileInterface)
    {
        $this->profileInterface = $profileInterface;
    }

    public function index() {
        // $users = User::all();

        // return response()->json([$users]);

        $data = $this->profileInterface->index();

        return ApiResponseClass::sendResponse(ProfileResource::collection($data),'',200);
    }

    public function store() {
        return 2;
    }
}
