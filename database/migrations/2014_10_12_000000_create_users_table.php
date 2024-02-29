<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
           $table->string('middlename')->nullable();
           $table->string('lastname');
             $table->string('email');
             $table->string('password');
            $table->string('mothername');
            $table->string('fathername');
            $table->string('gender');
            $table->string('spousename')->nullable();;
            $table->date('dob_bs');
            $table->date('dob_ad');
            $table->string('contactnumber');
            $table->string('grandfathername')->nullable();;
            $table->string('grandmothername')->nullable();;
            $table->string('role');
            $table->string('maritalstatus');
                //    $table->string('province1');
                //     $table->string('municipality1');
                //      $table->string('country1');
                //       $table->string('district1');
                //        $table->string('ward1');
                //         $table->string('tole1');
                //          $table->string('province2');
                //     $table->string('municipality2');
                //      $table->string('country2');
                //       $table->string('district2');
                //        $table->string('ward2');
                //         $table->string('tole2');
                //          $table->string('citizenshipnumber');
                //           $table->date('citizenshipissuedate');
                //            $table->string('citizenshipoffice');
                //             $table->string('pannumber');
                //              $table->string('panoffice');
                //               $table->string('tole');
                        


            // $table->string('email')->unique();
            // $table->boolean('')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};