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
                    'fillColor' => 'rgba(251, 166, 23, .4)',
                    'strokeColor' => '#FBA617',
                    'pointColor' => '#FBA617',
                    'pointStrokeColor' => '#0973BA',
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
