<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Wuphf;

class WuphfController extends Controller
{
    public function index()
    {
        $limit = request('limit', 20);
        $wuphfs = Wuphf::with('author')->paginate($limit);

        foreach ($wuphfs as $wuphf) {
            $wuphf->relative_date = $wuphf->created_at->diffForHumans();
        }

        return $wuphfs;
    }
}
