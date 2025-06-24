<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    ///notification changes
    protected function getCreatedNotification(): Notification
    {
        return Notification::make()
            ->success()
            ->title('Customer Created')
            ->body('Customer created successfully.');
    }
}
