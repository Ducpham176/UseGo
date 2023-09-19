<?php 
    class MyModels extends Database {
        protected $statement;

        public function query($sql, $data = []) 
        {
            try 
            {
                $statement = $this->conn->prepare($sql);
                $query = $statement->execute($data);
                return $statement;
            } catch (Exception $exc) 
            {
                die($exc->getMessage());    
            }
        }
    
        public function getRaw($sql) 
        {
            $statement = $this->query($sql);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    
?>