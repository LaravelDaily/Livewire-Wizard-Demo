<?php

namespace App\Steps;

use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Vildanbina\LivewireWizard\Components\Step;

class PasswordStep extends Step
{
    protected string $view = 'auth.register.password-step';

    public function mount()
    {
        $this->mergeState([
            'password' => $this->model->password
        ]);
    }

    public function icon(): string
    {
        return 'check';
    }

    public function save($state)
    {
        $user = $this->model;

        $user->name = $state['name'];
        $user->email = $state['email'];
        $user->password = Hash::make($state['password']);

        $user->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function validate()
    {
        return [
            [
                'state.password'     => ['required', 'confirmed', Rules\Password::defaults()],
            ],
            [
                'state.password'     => __('Password'),
            ],
        ];
    }

    public function title(): string
    {
        return __('Password');
    }
}
