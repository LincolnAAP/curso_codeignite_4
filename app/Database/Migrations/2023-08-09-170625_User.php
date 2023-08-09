<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class User extends Migration
{
    public function up()
    {
       $this->forge->addField([
        'id' => [
            'type' => 'INT',
            'constraint' => 20,
            'unsigned' => true,
            'auto_increment' => true,
        ],
        'fistName' => [
            'type' => 'VARCHAR',
            'NULL' => false,
            'constraint' => 100,
        ],
        'lastName' => [
            'type' => 'VARCHAR',
            'NULL' => false,
            'constraint' => 100,
        ],
        'email' => [
            'type' => 'VARCHAR',
            'NULL' => false,
            'constraint' => 100,
        ],
        'password' => [
            'type' => 'VARCHAR',
            'NULL' => false,
            'constraint' => 255,
        ],
        'create_at' =>[
            'type' => 'TIMESTAMP',
            'default' => new RawSql('CURRENT_TIMESTAMP')
        ],
        'update_at' =>[
            'type' => 'TIMESTAMP',
            'default' => new RawSql('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')
        ],
        
       ]);
       $this->forge->addPrimaryKey('id');
       $this->forge->addUniqueKey('email');
       $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
