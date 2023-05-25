<?php 
namespace App\Controllers;
use App\Models\Model;
class User extends Model{

    protected $name;
    protected $email;
    protected $password;
    public function  getname(){
        return $this->name;
    }
    public function getemail(){
        return $this->email;
    }
    public function  setpassword($p){
        $this->password=$p;
    }
    public function getpassword(){
        return $this->password;
    }
    public function setname($n){
        $this->name=$n;
    }
    public function setemail($e){
$this->email=$e;
    }
    public static function getUserById($id){
        
        $query="SELECT * FROM users WHERE id='$id'";
        $s=mysqli_query($this->conn,$query);
        $result=mysqli_fetch_assoc($s);
        $user =new User();
        $user->id=$result['id'];
        $user->name=$result['name'];
        $user->email=$result['email'];
        $user->password=$result['password'];
        return $user;
        
        

    }
    public static function getAllUsers(){
        $quryy="SELECT * FROM users";
        $result=mysqli_query($this->conn,$quryy);
        $users = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $user = new User();
            $user->setid( $row['id']);
            $user->setname($row['name']);
            $user->setemail($row['email']);
            $user->setpassword($row['password']);
            $users[] = $user;
        }
        
        return $users;
        

    }
    public static function TestUser($email,$password){
      $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
      $stmt=mysqli_query($con,$sql);
      if(mysqli_num_rows($stmt)>0){
        $row=mysqli_fetch_assoc($stmt);
        return $row;
      }
      else{
       $stmt=0;
      }
     
    
    }  
    public function delete($id)
    { 
        $sql="DELETE FROM users WHERE id='$id' ";
      $stmt=mysqli_query($this->conn,$sql);

        
    } 
}