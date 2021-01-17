<?php

namespace App\GraphQL\Queries;

class DependentsHealthInsuranceNotificationQuery
{
    public function __invoke($_, array $args)
    {
        $id = DB::table(TableNames::DEPENDENTS_HEALTH_INSURANCE_NOTIFICATIONS)
            ->select('id')
            ->where(TableNames::DEPENDENTS_HEALTH_INSURANCE_NOTIFICATIONS . '.user_id', $args['user_id'])
            ->orderBy(TableNames::DEPENDENTS_HEALTH_INSURANCE_NOTIFICATIONS . '.created_at', 'asc')
            ->get()->first();
        Log::debug(">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>");
        Log::debug($id->toArray());
        Log::debug(">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>");

        $searchTableData = DB::table(TableNames::DEPENDENTS_HEALTH_INSURANCE_NOTIFICATIONS)
            ->leftJoin(
                TableNames::OTHER_DEPENDENTS_HEALTH_INSURANCE_NOTIFICATIONS,
                TableNames::DEPENDENTS_HEALTH_INSURANCE_NOTIFICATIONS .
                    '.id',
                '=',
                TableNames::OTHER_DEPENDENTS_HEALTH_INSURANCE_NOTIFICATIONS . '.report_id'
            )
            ->select('*')
            ->where(TableNames::DEPENDENTS_HEALTH_INSURANCE_NOTIFICATIONS . '.user_id', $args['user_id'])
            ->where(TableNames::DEPENDENTS_HEALTH_INSURANCE_NOTIFICATIONS . '.id', $id->id)
            ->where(TableNames::DEPENDENTS_HEALTH_INSURANCE_NOTIFICATIONS . '.pdf_flag', false)
            ->orderBy(TableNames::DEPENDENTS_HEALTH_INSURANCE_NOTIFICATIONS . '.created_at', 'asc')
            ->get();

        Log::debug(">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>");
        Log::debug($searchTableData->toArray());
        Log::debug(">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>");


        return $searchTableData;
    }
}
