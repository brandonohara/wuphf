<?php

namespace App\Http\Controllers\API\V1;

use App\Models\User;
use App\Http\Requests\WuphfRequest;

class SearchController extends Controller
{
    public function index()
    {
        $limit = request('limit', 20);

        $search = '%' . request('search') . '%';

        $users = User::where('first', 'LIKE', $search)
                    ->orWhere('last', 'LIKE', $search)
                    ->orWhere('handle', 'LIKE', $search)
                    ->orderBy('first', 'desc')->paginate($limit);

        return $users;
    }
}
