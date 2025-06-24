<?php

namespace App\Filament\Resources\AboutPageResource\Pages;

use App\Filament\Resources\AboutPageResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutPage extends CreateRecord
{
    protected static string $resource = AboutPageResource::class;
    // notification changes
    protected function getCreatedNotification(): Notification
    {
        return Notification::make()
            ->success()
            ->title('About Section Created')
            ->body('About section created successfully.');
    }
}
