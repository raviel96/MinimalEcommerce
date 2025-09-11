<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make()->schema([
                    Section::make('Product Informations')->schema([
                        TextInput::make('name')
                        ->required()
                        ->maxLength(255),

                        MarkdownEditor::make('description')
                        ->required()
                        ->columnSpanFull()
                        ->fileAttachmentsDirectory('products'),

                    ])->columns(2),

                    Section::make('Images')->schema([
                        FileUpload::make('image')
                        ->directory('products')
                    ]),

                ])->columnSpan(2),

                Group::make()->schema([
                    Section::make('Price')->schema([
                        TextInput::make('price')
                        ->required()
                        ->numeric()
                        ->prefix('€')
                        ->minValue(0),
                    ]),

                    Section::make('Associations')->schema([

                        Select::make('category_id')
                        ->required()
                        ->searchable()
                        ->preload()
                        ->relationship('category', 'name'),
                    ]),
                ])->columnSpan(1),

            ])->columns(3);
    }
}
