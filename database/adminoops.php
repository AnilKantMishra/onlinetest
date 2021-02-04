<?php include_once 'db_con.php' ?>
<?php
class admin
{
    public $cat_name;
  
    public $con;

                    public function __construct()
                    {
                    $dbcon=new db_con();
                    $this->con=$dbcon->createConnection();

                    }


                public function addquestion(  $selectcat,$Question,$Answer,$Option1,$Option2,$Option3,$Option4)
                    {
                            $sql= "INSERT INTO `tbl_question`(`cat_id`,`question`, `answer`, `Option1`, `Option2`, `Option3`, `Option4`) 
                            VALUES (' $selectcat','$Question','$Answer','$Option1','$Option2','$Option3','$Option4')"
                             ;
                            if ($this->con->query($sql)) {
                            echo 'Inserted successfully';
                            }
                            else{
                            echo 'Not inserted';
                            }

                    }

                    public function addcategory($category)
                    {
                            $insertcategoryhere = "INSERT INTO `tbl_category`( `cat_name`)
                             VALUES ('$category')";
                           
                            if ($this->con->query($insertcategoryhere)) {
                             return 0;
                              }
                              else{
                                return 1;
                              }
                     }

                     public function nav()
                     {
                         $sql = "SELECT * FROM `tbl_category` ";
                 
                         $result = $this->con->query($sql);
                        if($result->num_rows>0){
                            return $result;
                        }else{
                            return false;
                        }
                     }  

                     public function categoryshowhere()
                     {
                         $sql = "SELECT  * FROM `tbl_category` ";
                 
                         $result = $this->con->query($sql);
                        if($result->num_rows>0){
                            return $result;
                        }else{
                            return false;
                        }
                     } 
                     public function seequestion(){
                         $sql = "SELECT cat_name,question,answer,Option1,Option2,Option3,Option4 From tbl_category tbl_category RIGHT JOIN 
                         tbl_question tbl_question on tbl_category.cat_id = tbl_question.cat_id";
                        $result = $this->con->query($sql);
                        if($result->num_rows>0){
                            return $result;
                        }else{
                            return false;
                        }
                     }

                  


}

?>





