<?php
namespace App\Overrides;

use Illuminate\Database\Migrations\Migration as BaseMigration;

class Migration extends BaseMigration
{
    /**
     * Find out if Migration Safety is enabled
     * @return bool
     */
    protected function heedMigrationSafety()
    {
        if (config('database.migration_safety')) {
            return true;
        }

        return false;
    }
}
