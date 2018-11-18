<?php

/**
 *
 * @author Loai N kanou <loai.net@gmail.com>
 */

namespace loaikanou\laratime;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('laratime::time', compact('current_time'));
    }

}

