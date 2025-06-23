<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Filament\Resources\MemberResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditMember extends EditRecord
{
    protected static string $resource = MemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }


    //redirect to index when created
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    // /notification changes
    protected function getSavedNotification(): Notification
    {
        return Notification::make()
            ->success()
            ->title('Member Updated')
            ->body('Member Updated successfully.');
    }
}
