<?php

namespace App\GraphQL\Queries;

use App\Consts\TableName;
use App\Report;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class ReportSeach
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver

        $report = Report::where('flag', true)
            ->orderBy('created_at', 'desc')
            ->get()->first();

        $test = Report::find('2')->otherReports()->get();

        // Log::debug('<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<');
        // Log::debug($report);
        // Log::debug('<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<');

        return $report;
    }
}
