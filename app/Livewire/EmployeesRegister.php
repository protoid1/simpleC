<?php

namespace App\Livewire;

use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Events\Auth\Registered;
use Filament\Facades\Filament;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Http\Responses\Auth\Contracts\RegistrationResponse;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class EmployeesRegister extends \Filament\Pages\Auth\Register
{

    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getEmailFormComponent(),
                        $this->getNameFormComponent(),
                        $this->getRoleFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }
    // public function render()
    // {
    //     return view('livewire.employees-register');
    // }

    protected function getRoleFormComponent(): Component
    {
        return Select::make('employee_role')
            ->label('Employee Role')
            ->options([
                'hrs' => 'Human Resources',
                'csh' => 'Cashier',
                'stf' => 'Staff',
            ]);
    }

    protected function getNameFormComponent(): Component
    {
        return TextInput::make('employee_name')
            ->label(__('Employee Name'))
            ->required()
            ->maxLength(255)
            ->autofocus();
    }
    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('employee_email')
            ->label(__('Employee Email'))
            ->email()
            ->required()
            ->maxLength(255)
            ->unique($this->getUserModel());
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('employee_password')
            ->label(__('Employee Password'))
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->rule(Password::default())
            ->dehydrateStateUsing(fn($state) => Hash::make($state))
            ->same('passwordConfirmation')
            ->validationAttribute(__('filament-panels::pages/auth/register.form.password.validation_attribute'));
    }

    protected function getPasswordConfirmationFormComponent(): Component
    {
        return TextInput::make('passwordConfirmation')
            ->label(__('filament-panels::pages/auth/register.form.password_confirmation.label'))
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->dehydrated(false);
    }

    public function register(): ?RegistrationResponse
    {
        try {
            $this->rateLimit(2);
        } catch (TooManyRequestsException $exception) {
            $this->getRateLimitedNotification($exception)?->send();

            return null;
        }

        $user = $this->wrapInDatabaseTransaction(function () {
            $this->callHook('beforeValidate');

            $data = $this->form->getState();

            $this->callHook('afterValidate');

            $data = $this->mutateFormDataBeforeRegister($data);

            $this->callHook('beforeRegister');

            $user = $this->handleRegistration($data);

            $this->form->model($user)->saveRelationships();

            $this->callHook('afterRegister');

            Notification::make()
                ->title('Employee '.$user->employee_name.' Berhasil di Daftarkan')
                ->send();

            return $user;
        });

        event(new Registered($user));

        $this->sendEmailVerificationNotification($user);
        // dd($user->employee_password);
        Filament::auth()->login($user);

        session()->regenerate();

        return app(RegistrationResponse::class);
    }
}
