<?php

namespace App\Helpers;

/**
 * Image Helper.
 */
class Image
{
    /**
     * Store image.
     */
    public static function store($request, $folder)
    {
        $now = date('Y/m/d H:i:s', time());
        $out = substr(hash('md5', $now), 0, 12);
        $fileName = $out . '.' . $request->getClientOriginalExtension();
        $request->move('uploads/' . $folder, $fileName);

        return ['file_name' => $fileName];
    }
}
