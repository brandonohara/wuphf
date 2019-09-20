<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Wuphf;

class WuphfController extends Controller
{
    public function index()
    {
        $limit = request('limit', 20);
        $featured = intval(request('featured', 1));

        $query = Wuphf::with('author');

        if ($featured) {
            $query->where('featured', true);
        }

        $query->where('approved', true);

        $wuphfs = $query->paginate($limit);

        foreach ($wuphfs as $wuphf) {
            $wuphf->relative_date = $wuphf->created_at->diffForHumans();
        }

        return $wuphfs;
    }
}
