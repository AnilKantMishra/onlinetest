<?php include_once 'db_con.php' ?>
<?php
class user
{
    public $email;
    public $name;
    public $is_admin;
    public $password;
  
    public $con;

                    public function __construct()
                    {
                    $dbcon=new db_con();
                    $this->con=$dbcon->createConnection();

                    }


                public function userSignup($name, $email, $password)
                    {
                            $sql= "INSERT INTO `tbl_user`(`name`, `email`, `password`, `is_admin`) 
                            VALUES ('$name','$email','$password','0')"
                             ;
                            if ($this->con->query($sql)) {
                            echo 'Inserted successfully';
                            }
                            else{
                            echo 'Not inserted';
                            }

                    }

                    public function login($email,$password)
                    {
                    $sql="SELECT * FROM tbl_user where email='$email' AND password='$password'";
                    $result = $this->con->query($sql);
        
                    $row = $result->fetch_assoc();
                      
                    
                    if( $row['is_admin']=='1')
                    { 
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['is_admin']  = $row['is_admin'];

                     
                      
                        echo "<script>window.location.href='admin/index.php'</script>";
                   
                    }
                    elseif(( $row['is_admin']=='0')){
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['is_admin']  = $row['is_admin'];
                        echo "<script>window.location.href='user/index.php'</script>";
                    }
                    else{
                        echo "<script>alert('User is not registered')</script>";
                    }
                    }
                   
                        public function questionshow($id){


                            $sql = "SELECT * FROM `tbl_question` WHERE cat_id='$id' ORDER BY RAND() LIMIT 10";
                            $result = $this->con->query($sql);
                            if($result->num_rows>0){
                                return $result;
                            }else{
                                return false;
                            }
                       
                        }

                        public function answermatch($id){

                            $sql = "SELECT * FROM `tbl_question` WHERE id='$id'";
                            $result = $this->con->query($sql);
                                    $answer = $result->fetch_assoc();
                                    $answer1 = $answer['answer'];
                                  return $answer1;

                            // if($result->num_rows>0){
                            //     return $result;
                            // }else{
                            //     return false;
                            // }         

                        }
}
// $con=new user();
// echo $con->answermatch(1);

?>




