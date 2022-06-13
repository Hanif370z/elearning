<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MateriTugas extends Migration
{
    public function up()
    {
        //materi
        $this->forge->addField([
            'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'pertemuan'        => ['type' => 'int', 'constraint' => 10,'unsigned' => true, 'null' => true],
            'deskripsi'        => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'tanggal_upload'   => ['type' => 'datetime'],
            'nama_file'        => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'tipe_file'        => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'youtube'          => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'ukuran_file'      => ['type' => 'int', 'constraint' => 100,'unsigned' => true],
            'path'        => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('pertemuan');
        $this->forge->createTable('materi', true);

        //tugas
        $this->forge->addField([
            'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'pertemuan'        => ['type' => 'int', 'constraint' => 10,'unsigned' => true, 'null' => true],
            'deskripsi'        => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'tanggal_upload'   => ['type' => 'datetime'],
            'mulai'   => ['type' => 'datetime'],
            'selesai'   => ['type' => 'datetime'],
            'nama_file'        => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'tipe_file'        => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'youtube'          => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'ukuran_file'      => ['type' => 'int', 'constraint' => 100,'unsigned' => true],
            'path'        => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('pertemuan');
        $this->forge->createTable('tugas', true);
    }

    public function down()
    {
        $this->forge->dropTable('tugas', true);
        $this->forge->dropTable('materi', true);
    }
}
