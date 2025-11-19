<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->before(function () {
                    // Prevent deletion of the current authenticated user
                    if ($this->record->id === auth()->id()) {
                        throw new \Exception('You cannot delete your own account.');
                    }
                }),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Handle password hashing
        if (isset($data['password'])) {
            // Only hash password if it's not empty
            if (!empty($data['password'])) {
                $data['password'] = Hash::make($data['password']);
            } else {
                // Remove password from data if empty (keep existing password)
                unset($data['password']);
            }
        }

        // Handle avatar cleanup when replacing with new one
        if (isset($data['avatar']) && $this->record->avatar && $data['avatar'] !== $this->record->avatar) {
            // Delete the old avatar file
            Storage::disk('public')->delete($this->record->avatar);
        }

        // Prevent deactivating own account
        if (isset($data['is_active']) && !$data['is_active'] && $this->record->id === auth()->id()) {
            $data['is_active'] = true;
            // You could also show a notification here
        }

        return $data;
    }
}
