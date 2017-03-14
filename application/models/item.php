<?php
Class Item extends CI_Model
{
   function getAll()
   {
      $query = $this->db->query('SELECT * FROM items');

       if($query -> num_rows() >= 1)
       {
         return $query->result();
       }
       else
       {
         return false;
       }
   }
}
?>
