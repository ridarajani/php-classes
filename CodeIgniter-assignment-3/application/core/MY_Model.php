<?php
    
    class MY_Model extends CI_Model{

         public $table;              
         public function select(){
             $query =    $this  ->db
                                ->get($this->table)
                                ->result();
            if($query){
                return $query;
            }
         }

         public function insert_value($info_array){
             $query = $this->db->insert($this->table, $info_array);
                        
             if($query){
                echo "inserted";
            }
         }
 
         public function update_value($info_array,$id){
 
         $query = $this->db->where('id', $id)
                           ->update($this->table, $info_array);

            if($query){
                echo "updated";
            }
        }

         public function delete_value($id){
             $query = $this->db ->where('id', $id)
                                ->delete($this->table);
                        
             if($query){
                echo "deleted";
            }
         }
    }