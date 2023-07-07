<?php

namespace App\Http\Libs;

use Illuminate\Support\Str;

class helper
{


    public function set_slug($item)
    {
        try {
            return Str::slug(trim($item), '_');
        } catch (\Throwable $th) {
            //throw $th;
            return null;
        }
    }
}
