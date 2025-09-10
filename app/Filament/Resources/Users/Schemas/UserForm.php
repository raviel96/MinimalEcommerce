<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\Page;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->required(),

                TextInput::make('email')
                ->email()
                ->maxLength(255)
                ->unique(ignoreRecord: true)
                ->required(),

                TextInput::make('password')
                ->password()
                ->dehydrated(fn($state) => filled($state))
                ->required(fn(Page $livewire) => $livewire instanceof CreateRecord),
            ]);
    }
}
