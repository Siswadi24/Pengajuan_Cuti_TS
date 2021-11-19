<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\MySQLi\Forge;

class Pegawai extends Migration
{
    public function up()
    {
        //Membuat kolom/field untuk tabel Pegawai
        $fields = [
            "id" => [
                "type"              => "INT",
                "constraint"        => 11,
                "unsigned"          => true,
                "auto_increment"    => true
            ],
            "nama" => [
                "type"              => "VARCHAR",
                "constraint"        => 255,
                "null"              => false
            ],
            "jenis_kelamin" => [
                "type"              => "ENUM",
                "constraint"        => ["L", "P"],
                "null"              => true
            ],
            "alamat" => [
                "type"              => "VARCHAR",
                "constraint"        => 255,
                "null"              => false
            ],
            "Telepon" => [
                "type"              => "VARCHAR",
                "constraint"        => 255,
                "null"              => false
            ],
            "email" => [
                "type"              => "VARCHAR",
                "constraint"        => 100,
                "null"              => false
            ]
        ];
        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("id", true);
        $this->forge->addUniqueKey('email');
        $this->forge->createTable("pegawai", true);
    }

    public function down()
    {
        //
        $this->forge->dropTable("pegawai");
    }
}
