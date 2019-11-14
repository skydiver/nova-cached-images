<?php

namespace Skydiver\NovaCachedImages\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class NovaCachedImagesController extends Controller
{

    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function index(Request $request, string $image)
    {
        $path = vsprintf('%s/%s', [
            config('file-cache.path'), $image
        ]);

        if (!File::exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }

}
