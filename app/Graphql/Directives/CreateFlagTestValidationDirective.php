<?php

namespace App\GraphQL\Directives;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Schema\Directives\ValidationDirective;

class CreateFlagTestValidationDirective extends ValidationDirective
{
    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'social_insurance_flag' => 'required',
            'social_insurance_remark'=> 'required_if:social_insurance_flag,true',
            'income_tax_flag' => 'required',
            'income_tax_remark' => 'required_if:income_tax_flag,true',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => '必須項目です',
            'required_if' => '必須項目です',
        ];
    }
}
