<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccidentReportResource\Pages;
use App\Filament\Resources\AccidentReportResource\RelationManagers;
use App\Models\AccidentReport;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AccidentReportResource extends Resource
{
    protected static ?string $model = AccidentReport::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('accident_date')->required(),
                TimePicker::make('accident_time')->required(),
                TextInput::make('region')->required(),
                TextInput::make('location')->required(),
                TextInput::make('injured_employee_name')->required(),
                TextInput::make('department')->required(),
                Textarea::make('description')->required(),
                Textarea::make('loss')->nullable(),
                Textarea::make('immediate_causes')->nullable(),
                Textarea::make('underlying_causes')->nullable(),
                Textarea::make('root_causes')->nullable(),
                Textarea::make('recommendations')->nullable(),
                TextInput::make('acknowledgement_name')->required(),
                TextInput::make('acknowledgement_signature')->required(),
                DatePicker::make('acknowledgement_date')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('accident_date')->sortable(),
                Tables\Columns\TextColumn::make('accident_time')->sortable(),
                Tables\Columns\TextColumn::make('region'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('injured_employee_name'),
                Tables\Columns\TextColumn::make('department'),
                Tables\Columns\TextColumn::make('description')->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAccidentReports::route('/'),
            'create' => Pages\CreateAccidentReport::route('/create'),
            'edit' => Pages\EditAccidentReport::route('/{record}/edit'),
        ];
    }
}
