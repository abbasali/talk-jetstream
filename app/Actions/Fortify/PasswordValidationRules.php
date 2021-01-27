<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        $passwordRules = (new Password)
            ->requireNumeric()
            ->requireUppercase();

        return ['required', 'string', $passwordRules, 'confirmed'];
    }
}
