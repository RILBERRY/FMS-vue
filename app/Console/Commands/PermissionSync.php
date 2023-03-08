<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class PermissionSync extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update all permissions';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $this->info("Updating permission list ...");
        $routes = Route::getRoutes();
        foreach ($routes as $route) {
            if ($route->getName() == null) continue;
            $routePermissions['slug'] = $route->getName();
            $routePermissions['name'] = implode(' ',array_reverse(explode('.', $route->getName())));
            $routePermissions['guard_name'] = 'web';

            Permission::Create($routePermissions);
        }
        $this->info("Permission list updated!");
    }
}