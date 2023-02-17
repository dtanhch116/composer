<?php

namespace App\Models;



class Product extends BaseModel
{
    protected $table = "product";
    public function getProduct()
    {

        $sql = "SELECT * FROM $this->table";

        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function addProduct($id, $name, $price)
    {
        $sql = "INSERT INTO $this->table VALUES (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $price]);
    }
    public function getDetailProduct($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id= ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function updateProduct($id, $ten_sp, $gia)
    {
        $sql = "UPDATE $this->table SET name = ?, price = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$ten_sp, $gia, $id]);
    }

    public function deleteProduct($id)
    {
        $sql = "SELECT FROM $this->table WHERE id = ?";
        return $this->execute([$id]);
    }
}
