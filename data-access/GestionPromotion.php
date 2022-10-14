<?php
    include 'connection.php';
    include 'promotion.php';


    class ManagerPromotion extends Connect{

        public function AddPromo($promotion){

            $name = $promotion->getName();
            $sql = "INSERT INTO promotion(NomPromotion) VALUES('$name')";
            mysqli_query($this->connect(),$sql);
        }

        public function Select(){

            $select_data = "SELECT * FROM promotion";
            $result_data = mysqli_query($this->connect(),$select_data);
            
            if($result_data->num_rows > 0){
                return $result_data;
            }
        }

        public function delete($id){
            $delete_promo = "DELETE FROM promotion WHERE id = $id";
            $id_delete = mysqli_query($this->connect(), $delete_promo);
        }

        public function edit($id, $name){
            $edit_promo = "UPDATE Promotion SET NomPromotion = '$name' WHERE  id = $id";
            $query_edit = mysqli_query($this->connect(), $edit_promo);
        }

        public function SelectId($id){
            $select_data = "SELECT * FROM promotion WHERE id = $id";
            $result_data = mysqli_query($this->connect(),$select_data);
            
            if($result_data->num_rows > 0){
                return $result_data;
            }
        }

        public function search($promotion){
            $name = $promotion->getName();
            $search = "SELECT * FROM promotion WHERE NomPromotion LIKE '%$name%'";
            return mysqli_query($this->connect(), $search);
        }
    }
?>