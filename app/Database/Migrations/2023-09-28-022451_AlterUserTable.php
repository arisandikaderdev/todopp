<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterUserTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'profile_pic' => [
                'type' => 'TEXT'
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
