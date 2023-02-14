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
}
