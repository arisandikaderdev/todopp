<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTodos extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' =>  'int',
                    'constraint' => 200,
                    'null' => false,
                    'auto_increment' => true
                ],

                'title' => [
                    'type' =>  'varchar',
                    'constraint' => 200,
                ],

                'todo' => [
                    'type' =>  'text',
                ],

                'inTrash' => [
                    'type' =>  "enum('yes','no')",
                ],

                'id_user' => [
                    'type' => 'int',
                    'constraint' => 11,
                    'unsigned' => true
                ]

            ]
        );

        $this->forge->addPrimaryKey('id');

        $this->forge->addForeignKey('id_user', 'users', 'id');

        $this->forge->createTable('todos');
    }

    public function down()
    {
        $this->forge->dropTable('todos');
    }
}
