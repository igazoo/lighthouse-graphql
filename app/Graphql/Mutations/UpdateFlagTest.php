<?php

namespace App\GraphQL\Mutations;

use App\Models\FlagTest;
use Illuminate\Support\Facades\Log;

class UpdateFlagTest
{
    public function __invoke($_, array $args)
    {


        $flagTestDb = FlagTest::where('id', $args['id'])->get();

        if (count($flagTestDb) !== 1) {
            throw now('DB　ERROR');
        }

        $flagTest = $flagTestDb[0];

        /** 社会保険について **/
       
        // もし社会保険フラグがfalseならsocial_insurance_remarkに値を入れない
        if (!$args['social_insurance_flag']) {
            $args['social_insurance_remark'] = null;
        }

        if ($flagTest->social_insurance_flag) {
            // もしDBの社会保険判定がtrueでpost値がfalseならエラーを出す
            if (!$args['social_insurance_flag']) {
                throw now('社会保険の扶養の削除の変更できません');
            }
            // もしDBの社会保険判定がtrueなら他の情報も変更できない
            if ($flagTest->social_insurance_remark !== $args['social_insurance_remark']) {
                throw now('社会保険の扶養の情報の変更できません');
            }
        }
        
        /** 社会保険ここまで **/


        /** 所得税について　**/

        // もし所得税フラグがfalseならincome_tax_remarkに値を入れない
        if (!$args['income_tax_flag']) {
            $args['income_tax_remark'] = null;
        }

        if ($flagTest->income_tax_flag) {
            // もしDBの所得税の判定がtrueでpost値がfalseならエラーを出す
            if (!$args['income_tax_flag']) {
                throw now('所得税の扶養の削除の変更できません');
            }
            // もしDBの所得税判定がtrueなら他の情報も変更できない
            if ($flagTest->income_tax_remark !== $args['income_tax_remark']) {
                throw now('所得税の扶養の情報は変更できません');
            }
        }

        /** 所得税ここまで **/


        FlagTest::where('id', $args['id'])->update($args);

        $result = FlagTest::where('id', $args['id'])->get();
        return $result[0];
    }
}
