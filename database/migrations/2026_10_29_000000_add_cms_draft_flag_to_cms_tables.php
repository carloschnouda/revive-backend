<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * The updated hellotreedigital/cms package writes cms_draft_flag on save,
     * but only adds the column when a page is (re)saved in the page builder.
     */
    public function up(): void
    {
        foreach ($this->cmsTables() as $table) {
            if (Schema::hasColumn($table, 'cms_draft_flag')) continue;

            Schema::table($table, function (Blueprint $table) {
                $table->integer('cms_draft_flag')->default(0)->after('id');
            });
        }
    }

    public function down(): void
    {
        foreach ($this->cmsTables() as $table) {
            if (!Schema::hasColumn($table, 'cms_draft_flag')) continue;

            Schema::table($table, function (Blueprint $table) {
                $table->dropColumn('cms_draft_flag');
            });
        }
    }

    private function cmsTables(): array
    {
        if (!Schema::hasTable('cms_pages')) return [];

        return DB::table('cms_pages')
            ->whereNotNull('database_table')
            ->pluck('database_table')
            ->filter(fn ($table) => Schema::hasTable($table))
            ->all();
    }
};
