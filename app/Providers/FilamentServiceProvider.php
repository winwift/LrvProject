<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\ServiceProvider;
use App\Filament\Resources\RoleResource;
use App\Filament\Resources\UserResource;
use App\Filament\Resources\PermissionResource;
use Spatie\Permission\Traits\HasRoles;

class FilamentServiceProvider extends ServiceProvider
{

    use HasRoles;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::serving(function() 
        {
            if (auth()->user()) {
                if (auth()->user()->is_admin === 1 && auth()->user()->hasAnyRole(['super-admin', 'admin', 'moderator']) ) {
                    Filament::registerUserMenuItems([
                        UserMenuItem::make()
                            ->label('Manager Users')
                            ->url(UserResource::getUrl())
                            ->icon('heroicon-s-users'),
                        UserMenuItem::make()
                            ->label('Manager Role')
                            ->url(RoleResource::getUrl())
                            ->icon('heroicon-s-cog'),
                        UserMenuItem::make()
                            ->label('Manager Permissions')
                            ->url(PermissionResource::getUrl())
                            ->icon('heroicon-s-key'), 
                    ]);
                }
            }
           
        });
    }
}
