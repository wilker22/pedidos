<?php

namespace app\models\dao;

class PedidoDao extends Dao
{
    public function getPedidoNaoFinalizado($id_cliente)
    {
        $sql = "SELECT * FROM pedido p, cliente c 
                WHERE p.id_cliente = c.id_cliente
                AND p.id_cliente = $id_cliente 
                AND finalizado='N'";
        
        return $this->select($this->db, $sql, false);
    }

    public function getPedido($id_pedido)
    {
        $sql = "SELECT * FROM pedido p, cliente c 
                WHERE p.id_cliente = c.id_cliente
                AND p.id_pedido = $id_pedido ";
        
        return $this->select($this->db, $sql, false);
    }
}