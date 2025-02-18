<?php

namespace App\Filament\Resources;

use App\Enums\ProjectStatusEnum;
use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('status')
                    ->options(array_column(ProjectStatusEnum::cases(), 'name', 'value')),
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('link')->required(),
                Forms\Components\TagsInput::make('tags')->suggestions([
                    'Design',
                    'Nuxt.js',
                    'JavaScript',
                    'Tailwind CSS',
                    'PHP',
                    'Laravel',
                    'Bootstrap',
                    'Wordpress',
                ]),
                Forms\Components\DatePicker::make('published_at')->required(),
                Forms\Components\SpatieMediaLibraryFileUpload::make('image_desktop')
                    ->collection('image_desktop')
                    ->responsiveImages(),
                Forms\Components\SpatieMediaLibraryFileUpload::make('image_mobile')
                    ->collection('image_mobile')
                    ->responsiveImages(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable(),
                Tables\Columns\TextColumn::make('published_at')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }    
}
