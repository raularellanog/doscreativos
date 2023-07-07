<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Libs\helper;

class Companies extends Model
{
    use HasFactory;

    public $helper;
    public function __construct()
    {
        $this->helper = new helper();
    }

    public function add_register($name)
    {
        try {
            $id = 0;
            $slug = $this->helper->set_slug($name);
            $exist = DB::table('companies')->where('company_slug', $slug)->first();
            if (!$exist) {
                $id = DB::table('companies')->insertGetId([
                    'company_name' => trim($name),
                    'company_slug' => $slug,
                ]);
            }
            return $id;
        } catch (\Throwable $th) {
            //throw $th;
            return 0;
        }
    }
}
