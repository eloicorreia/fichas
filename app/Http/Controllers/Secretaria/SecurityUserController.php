<?php

declare(strict_types=1);

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;

class SecurityUserController extends Controller
{
    public function index(): View
    {
        $users = User::query()
            ->with('roles:id,name,label')
            ->orderBy('name')
            ->paginate(20)
            ->withQueryString();

        return view('secretaria.users.index', [
            'users' => $users,
        ]);
    }
}