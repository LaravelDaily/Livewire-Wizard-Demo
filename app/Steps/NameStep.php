<?php

namespace App\Steps;

use Illuminate\Validation\Rule;
use Vildanbina\LivewireWizard\Components\Step;

class NameStep extends Step
{
    protected string $view = 'auth.register.name-step';

    public function mount()
    {
        $this->mergeState([
            'name' => $this->model->name
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
                'state.name' => ['required', 'string', 'max:255'],
            ],
            [
                'state.name' => __('Name'),
            ],
        ];
    }

    public function title(): string
    {
        return __('Name');
    }
}
