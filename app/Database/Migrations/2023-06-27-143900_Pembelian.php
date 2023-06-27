<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembelian extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_kelompok' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'id_variant' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
        ];
        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_kelompok', 'kelompok', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_variant', 'item_variants', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pembelian');
    }

    public function down()
    {
        $this->forge->dropTable("pembelian");
    }
}
