<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Post extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'NULL' => false,
            ],
            'category_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'NULL' => false,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'NULL' => false,
                'constraint' => 100,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'NULL' => false,
                'constraint' => 255,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'NULL' => true,
                'constraint' => 255,
            ],
            'description' => [
                'type' => 'TEXT',
                'NULL' => true,
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
           $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
           $this->forge->addForeignKey('category_id', 'categories','id', '', 'CASCADE');
           $this->forge->createTable('posts');
        }
    
        public function down()
        {
            $this->forge->dropTable('posts');
        }
    }
    