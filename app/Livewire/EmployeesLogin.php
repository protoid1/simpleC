<?php

namespace App\Livewire;

use App\Models\MstEmployee;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Http\Responses\Auth\LoginResponse;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\HtmlString;
use Illuminate\Validation\ValidationException;


class EmployeesLogin extends \Filament\Pages\Auth\Login
{
    public $employee_email ='';

    public $employee_password='';

    public function mount(): void
    {
        if (Filament::auth()->check()) {
            redirect()->intended(Filament::getUrl());

        }

        $this->form->fill();

        // dd($this->form);
    }

    public function authenticate(): ?LoginResponse
    {
        $data = $this->form->getState();

        // Debug log jika diperlukan
        logger('Login Attempt:', [
            'employee_email' => $data['employee_email'] ?? null,
            'password' => $data['employee_password'] ?? null,
        ]);

        logger(Filament::auth()->attempt([
            'employee_email' => $data['employee_email'],
            'password' => $data['password'],
        ]));
        if (! Filament::auth()->attempt([
            'employee_email' => $data['employee_email'],
            'password' => $data['password'],
        ], $data['remember'] ?? false)) {
            $this->throwFailureValidationException();
        }

        session()->regenerate();

        return app(LoginResponse::class);
    }



    public function form(Form $form): Form
    {
        return $form;
    }

    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getRememberFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('employee_email')
            ->label(__('Employee Email'))
            ->email()
            ->required()
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label(__('Employee Password'))
            ->hint(filament()->hasPasswordReset() ? new HtmlString(Blade::render('<x-filament::link :href="filament()->getRequestPasswordResetUrl()" tabindex="3"> {{ __(\'filament-panels::pages/auth/login.actions.request_password_reset.label\') }}</x-filament::link>')) : null)
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->autocomplete('current-password')
            ->required()
            ->extraInputAttributes(['tabindex' => 2]);
    }

    protected function throwFailureValidationException(): never
    {
        // var_dump('masuk ini');
        throw ValidationException::withMessages([
            'data.employee_email' => __('filament-panels::pages/auth/login.messages.failed'),
        ]);
    }

    protected function getFormActions(): array
    {
        return [
            $this->getAuthenticateFormAction(),
        ];
    }

    protected function getAuthenticateFormAction(): Action
    {
        return Action::make('authenticate')
            ->label(__('filament-panels::pages/auth/login.form.actions.authenticate.label'))
            ->submit('authenticate');
    }


}
