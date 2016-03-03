<?php

namespace App\Back\Http\Controllers\Dashboard;

use App\Back\Http\Controllers\BackController;
use Baconfy\Analytics\Services\Visits\GetVisitByPeriod;
use Carbon\Carbon;

class DefaultController extends BackController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('back::dashboard.default');
    }

    /**
     * @param $startDate
     * @param $endDate
     * @param GetVisitByPeriod $getVisitByPeriod
     *
     * @return array
     */
    public function visits($startDate, $endDate, GetVisitByPeriod $getVisitByPeriod)
    {
        $startDate = Carbon::createFromFormat('Y-m-d H:i:s', "{$startDate} 00:00:00");
        $endDate = Carbon::createFromFormat('Y-m-d H:i:s', "{$endDate} 23:59:59");
        $getVisitByPeriod->fire($startDate, $endDate);

        $output = [
            'labels' => $getVisitByPeriod->getLabels(),
            'datasets' => [
                [
                    'label' => 'Total de Visitas',
                    'fillColor' => 'rgba(210, 214, 222, 1)',
                    'strokeColor' => 'rgba(210, 214, 222, 1)',
                    'pointColor' => 'rgba(210, 214, 222, 1)',
                    'pointStrokeColor' => '#c1c7d1',
                    'pointHighlightFill' => '#fff',
                    'pointHighlightStroke' => 'rgba(220,220,220,1)',
                    'data' => $getVisitByPeriod->getTotal()
                ],
                [
                    'label' => 'Visitantes Únicos',
                    'fillColor' => 'rgba(60,141,188,0.9)',
                    'strokeColor' => 'rgba(60,141,188,0.8)',
                    'pointColor' => '#3b8bba',
                    'pointStrokeColor' => 'rgba(60,141,188,1)',
                    'pointHighlightFill' => '#fff',
                    'pointHighlightStroke' => 'rgba(60,141,188,1)',
                    'data' => $getVisitByPeriod->getUniques()
                ]
            ]
        ];

        return $output;
    }
}
