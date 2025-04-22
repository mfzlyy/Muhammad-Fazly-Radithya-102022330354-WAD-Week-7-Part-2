<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $tables = DB::select('SHOW TABLES'); 
        
        $data = [];
        
        foreach ($tables as $table) {
            $tableName = $table->{"Tables_in_wadweek7"};
            $data[$tableName] = DB::table($tableName)->get();
        }

        return view('tables', compact('data'));
    }
}
