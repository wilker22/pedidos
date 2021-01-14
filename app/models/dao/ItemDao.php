<?php

namespace app\models\dao;

class ItemDao extends Dao
{
    public function listaPorPedido($id_pedido)
    {
        $sql = "SELECT * FROM produto p, item i 
                WHERE i.id_produto = p.id_produto
                AND i.id_pedido = $id_pedido";
        
        return $this->select($this->db, $sql);
    }

   
}