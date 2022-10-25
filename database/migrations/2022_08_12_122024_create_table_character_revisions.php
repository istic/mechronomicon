<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Character;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_revisions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('vital_status');
            $table->set('status', ['draft', 'approval', 'revise', 'current']);
            $table->string('version')->unique();
            $table->softDeletes();

            $table->jsonb('data');
            $table->string('definition_sheet');

            $table->string('admin_comment');
            $table->string('user_comment');

            $table->foreignIdFor(Character::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_revisions');
    }
};
