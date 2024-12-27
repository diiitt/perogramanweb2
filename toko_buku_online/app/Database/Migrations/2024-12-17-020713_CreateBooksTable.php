<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'judul' => [
                'type' => 'Varchar',
                'constraint' => 150,
            ],
            'pengarang' => [
                'type' => 'Varchar',
                'constraint' => 150,
            ],
            'penerbit' => [
                'type' => 'Varchar',
                'constraint' => 150,
            ],
            'tahun' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'cover' => [
                'type' => 'Varchar',
                'constraint' => 150,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 16,
            ],
            ]);

            $this->forge->addkey('id', true);
            $this->forge->createTable('books');
            
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
