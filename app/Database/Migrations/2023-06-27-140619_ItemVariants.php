<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ItemVariants extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_item' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'repaired' => [
                'type' => 'int',
                'constraint' => 1,
            ],
            'image' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'location_x' => [
                'type' => 'int',
                'constraint' => 3,
            ],
            'location_y' => [
                'type' => 'int',
                'constraint' => 3,
            ],
            'width' => [
                'type' => 'int',
                'constraint' => 3,
            ],
            'z-index' => [
                'type' => 'int',
                'constraint' => 3,
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
        $this->forge->addForeignKey('id_item', 'item', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('item_variants');
    }

    public function down()
    {
        $this->forge->dropTable("item_variants");
    }
}
