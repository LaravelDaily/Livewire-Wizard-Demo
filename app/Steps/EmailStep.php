<?php

namespace App\Steps;

use Illuminate\Validation\Rule;
use Vildanbina\LivewireWizard\Components\Step;

class EmailStep extends Step
{
    protected string $view = 'auth.register.email-step';

    public function mount()
    {
        $this->mergeState([
            'email' => $this->model->email
        ]);
    }

    public function icon(): string
    {
        return 'check';
    }

    public function validate()
    {
        return [
            [
                'state.email' => ['required', 'email'], // , 'unique:users'],
            ],
            [
                'state.email' => __('Email'),
            ],
        ];
    }

    public function title(): string
    {
        return __('Email');
    }
}
