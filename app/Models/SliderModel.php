<?php

namespace App\Models;

use CodeIgniter\Model;

class SliderModel extends Model
{
    protected $table = 'sliders';
    protected $primaryKey = 'slider_id';
    protected $allowedFields = [
        'slider_foto',
    ];

    public function tambah($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function get($id = false)
    {
        if ($id === false) {
            return $this->db->table($this->table)->get()->getResult();
        } else {
            return $this->db->table($this->table)->getWhere([$this->primaryKey => $id])->getRow();
        }
    }

    public function edit($id, $data)
    {
        return $this->db->table($this->table)->update($data, array($this->primaryKey => $id));
    }

    public function hapus($id)
    {
        return $this->db->table($this->table)->delete([$this->primaryKey => $id]);
    }
}
