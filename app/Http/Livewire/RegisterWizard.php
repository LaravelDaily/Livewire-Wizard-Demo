<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Steps\NameStep;
use App\Steps\EmailStep;
use App\Steps\PasswordStep;
use Vildanbina\LivewireWizard\WizardComponent;

class RegisterWizard extends WizardComponent
{
    public User $user;

    public array $steps = [
        NameStep::class,
        EmailStep::class,
        PasswordStep::class,
    ];

    public function model(): User
    {
        return new User();
    }
}
