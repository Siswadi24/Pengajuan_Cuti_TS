<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cuti extends Migration
{
    public function up()
    {
        //
        $fields = [
            "id" => [
                "type"          => "INT",
                "constraint"    => 11,
                "unsigned"      => true,
                "auto_increment" => true
            ],
            "pegawai_id" => [
                "type"          => "INT",
                "constraint"    => 11,
                "null"          => false
            ],
            "jenis_cuti_id" => [
                "type"          => "INT",
                "constraint"    => 11,
                "null"          => false
            ],
            "tanggal_mulai" => [
                "type"          => "DATE",
                "null"          => false
            ],
            "tanggal_selesai" => [
                "type"          => "DATE",
                "null"          => false
            ],
            "tanggal_pengajuan" => [
                "type"          => "DATE",
                "null"          => false
            ],
            "tanggal_approval" => [
                "type"          => "DATE",
                "null"          => true
            ],
            "bukti" => [
                "type"          => "VARCHAR",
                "constraint"    => 255,
                "null"          => false
            ],
            "status" => [
                "type"          => "ENUM",
                "constraint"    => ["0", "1"],
                "null"          => true
            ],
            "keterangan" => [
                "type"          => "TEXT",
                "constraint"    => 255,
                "null"          => false
            ]
        ];

        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("cuti", true);
    }

    public function down()
    {
        //
        $this->forge->dropTable("cuti");
    }
}
