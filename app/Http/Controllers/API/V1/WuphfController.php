<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Wuphf;
use App\Http\Requests\WuphfRequest;

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

        $query->where('approved', true)->orderBy('created_at', 'desc');

        $wuphfs = $query->paginate($limit);

        foreach ($wuphfs as $wuphf) {
            $wuphf->relative_date = $wuphf->created_at->diffForHumans();
            $wuphf->comments = [];
            $wuphf->favorites = rand(0, 6);
        }

        return $wuphfs;
    }

    public function store(WuphfRequest $request)
    {
        $wuphf = new Wuphf();
        $wuphf->user_id = auth()->user()->id;
        $wuphf->approved = 1;
        $wuphf->featured = 0;
        $wuphf->fill(request()->all());
        $wuphf->save();

        return $wuphf;
    }
}
