<?php
Class toolModel extends CI_Model
{
   function getAllTool()
   {
      $query = $this->db->select('toolname, imglink, tid')
                         ->from('tools')
                         ->get();
      return $query->result_array(); //result_array() หลายแถว
   }

   function getDetail($id)
   {
      $query = $this->db->select('tid,description,toolname,date,imglink,status.namestatus,size.namesize,donater')
                         ->from('tools')
                         ->where('tid',$id)
                         ->join('status','tools.status = status.value ')
                         ->join('size','tools.size = size.value ')
                         ->get();
      return $query->row_array(); //row_array() แถวเดียว
   }

}
?>
