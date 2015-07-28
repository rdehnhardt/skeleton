<?php

namespace App\Http\Controllers\Back\Dashboard;

use Baconfy\Analytics\Services\Visits\GetVisitByPeriod;
use App\Http\Controllers\Back\BackController;
use Carbon\Carbon;

class DefaultController extends BackController
{

    public function index()
    {
        return view('back.scope.dashboard.default');
    }

    public function panel()
    {
        return view('back.scope.dashboard.panel-with-tab');
    }

    public function visits($startDate, $endDate, GetVisitByPeriod $getVisitByPeriod)
    {
        $startDate = Carbon::createFromFormat('Y-m-d', $startDate);
        $endDate = Carbon::createFromFormat('Y-m-d', $endDate);

        $records = $getVisitByPeriod->fire($startDate, $endDate);

        $categories = graph_values($records, 'key', true);
        $total = graph_values($records, 'total', true);
        $unique = graph_values($records, 'uniques');

        return view('back.scope.dashboard.visits', compact('categories', 'unique', 'total'));
    }

}
