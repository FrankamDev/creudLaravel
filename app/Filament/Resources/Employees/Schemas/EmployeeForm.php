<?php

namespace App\Filament\Resources\Employees\Schemas;

use App\Models\Employee;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->label('First Name')
                    ->required()
                    ->minLength(2)
                    ->maxLength(50),
                TextInput::make('last_name')
                    ->label('First Name')
                    ->required()
                    ->minLength(2)
                    ->maxLength(50),

                TextInput::make('email')
                    ->label('Ton Email')
                    ->required()
                    ->email(2)
                    ->maxLength(150)
                    ->unique(Employee::class, 'email', ignoreRecord: true),

                TextInput::make('content')
                    ->label('contenu')
                    ->required()
                    ->minLength(2)
                    ->maxLength(1550),
                TextInput::make('salary')
                    ->label('Salaire')
                    ->required()
                    ->numeric()
                    ->minValue(1000)
                    ->maxValue(9990000000)
                    ->step(0.01)
                    ->placeholder('5000')
                    ->helperText('Entre un salaire compris entre 1000 et 99999'),
                TextInput::make('phone')
                    ->label('Numero de telephone')
                    ->required()
                    ->minLength(2)
                    ->maxLength(50)
                    ->unique(Employee::class, 'phone', ignoreRecord: true)
                    // ->rules(['required', 'digits:10', 'numeric'])
                    ->helperText('Enter a 10-digit phone number(seulement les nombres pas les symboles)')
                    ->validationAttribute('numero de telephone')
            ]);
    }
}
