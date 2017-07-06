<?php

namespace Gihro\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Gihro\Review;
use File;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function deleteFilePath($request, $identy, $object) {
      if ($request->file()) {
        $mimeType = $request->file('path')->getMimeType();
        if ($mimeType=='image/jpeg' || $mimeType=='image/png' || $mimeType=='image/bmp' || $mimeType=='image/gif' || $mimeType=='image/svg')
            File::delete('images/'.$identy.'/'.$object->path);
      }
    }
}
