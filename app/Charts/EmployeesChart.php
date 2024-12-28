<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\BarChart;

class EmployeesChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
        ->setTitle('Posisi')
        ->setSubtitle('Posisi dengan Jumlah Karyawan Terbanyak')
        ->addData('Jumlah Karyawan', $employeesCount)
        ->setXAxis($positionsLabels);
    }

}
