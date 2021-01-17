<?php

namespace App\GraphQL\Mutations;

use App\Models\FlagTest;

class CreateFlagTest
{
    public function __invoke($_, array $args)
    {

        // もし社会保険フラグがfalseならsocial_insurance_remarkに値を入れない
        if(!$args['social_insurance_flag']){
            $args['social_insurance_remark'] = null;
        }

        // もし所得税フラグがfalseならincome_tax_remarkに値を入れない
        if(!$args['income_tax_flag']){
            $args['income_tax_remark'] = null;
        }

        FlagTest::create($args);

        $result = FlagTest::orderBy('id','desc')->get();
        return $result[0];
    }
}
