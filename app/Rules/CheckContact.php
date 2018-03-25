<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;


class CheckContact implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $contact;

    public function __construct($contact)
    {
        //
        $this->contact = $contact;

    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
        $param=$this->contact;
        $result = DB::table()->where(function($query) use ($attribute,$value,$param) {
            $query->where($attribute, '=', $value) // where firstname = value
            ->andWhere('NLNumber', '=', $param); // where lastname = value
        })->first();

        // Now we check if we have a record
        // If we do have a record we return false and the validation will fail
        // If we can't find a record we return true and the validation will succeed
        return $result ? false : true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
