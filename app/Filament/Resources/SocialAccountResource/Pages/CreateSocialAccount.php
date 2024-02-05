<?php

namespace App\Filament\Resources\SocialAccountResource\Pages;

use App\Filament\Resources\SocialAccountResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSocialAccount extends CreateRecord
{
    protected static string $resource = SocialAccountResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
