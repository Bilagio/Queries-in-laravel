<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HallController extends Controller {
    public function getHallsWithFacilities() {
        $halls = DB::select('CALL GetHallsWithFacilities()');
        return response()->json($halls);
    }
};