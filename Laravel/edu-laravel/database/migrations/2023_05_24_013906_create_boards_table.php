<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    // migration 생성: php artisan make:migration create_boards_table
    // migration 실행: php artisan migrate
    // migration 리셋: php artisan migrate:reset    (모든 migration 파일의 down()메소드를 실행)
    // migration 롤백: php artisan migrate:rollback (가장 최근에 실행한 migration 작업 되돌림)

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            //글번호, 제목, 내용, 작성일, 수정일, 삭제일, 삭제여부
            $table->id('bno');                  // big_int, pk, auto_increment
            $table->char('category',1)->index();// char(1), not null, index추가
            $table->string('btitle',100);       // var_char(100), not null
            $table->string('bcontents',4000);   // var_char(4000), not null
            $table->timestamps();               // created_at, update_at 생성, null 허용
            $table->timestamp('deleted_at')->nullable();
            $table->char('deleted_flg',1)->default('0');    //char(1), default'0',not null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
