<?php

namespace App\Back\Http\Controllers\Dashboard;

use App\Back\Http\Controllers\BackController;

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
        $records = $getVisitByPeriod->fire($startDate, $endDate);

        $output = [
            'labels' => $getVisitByPeriod->getLabels(),
            'datasets' => [
                [
                    'label' => 'Total de Visitas',
                    'fillColor' => 'rgba(91, 144, 191, 0.3)',
                    'strokeColor' => '#5B90BF',
                    'pointColor' => '#5B90BF',
                    'pointStrokeColor' => '#9DB86D',
                    'data' => $getVisitByPeriod->getTotal()
                ],
                [
                    'label' => 'Visitantes Únicos',
                    'fillColor' => 'rgba(0,0,0,0.3)',
                    'strokeColor' => '#000',
                    'pointColor' => '#000',
                    'pointStrokeColor' => '#000',
                    'data' => $getVisitByPeriod->getUniques()
                ]
            ]
        ];

        return $output;
    }
}
