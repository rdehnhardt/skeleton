<?php

namespace App\Http\Controllers\Back\Dashboard;

use App\Http\Controllers\Back\BackController;
use Baconfy\Analytics\Services\Visits\GetVisitByPeriod;
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
        $startDate = Carbon::createFromFormat('Y-m-d H:i:s', "{$startDate} 00:00:00");
        $endDate = Carbon::createFromFormat('Y-m-d H:i:s', "{$endDate} 23:59:59");
        $records = $getVisitByPeriod->fire($startDate, $endDate);

        $output = [
            'labels' => $getVisitByPeriod->getLabels(),
            'datasets' => [
                [
                    "label" => "Total de Visitas",
                    'fillColor' => "rgba(91, 144, 191, 0.5)",
                    'strokeColor' => "#5B90BF",
                    'pointColor' => "#fff",
                    'pointStrokeColor' => "#9DB86D",
                    'data' => $getVisitByPeriod->getTotal()
                ],
                [
                    "label" => "Visitantes Únicos",
                    'fillColor' => "rgba(0,0,0,0.4)",
                    'strokeColor' => "#000",
                    'pointColor' => "#fff",
                    'pointStrokeColor' => "#000",
                    'data' => $getVisitByPeriod->getUniques()
                ]
            ]
        ];

        return $output;
    }

}
