<?php
$filepath=realpath(dirname(__FILE__)); 
include_once ($filepath.'/session.php');
include_once ($filepath.'/database.php');
include_once ($filepath.'/format.php');
class adminlogin 
{   private $db;
    private $fm;
	function __construct()
	{
		$this->db=new Database();
		$this->fm=new Format();
    }
    
	public function register($username,$email,$password){
        $username=$this->fm->validation($username);
        $email=$this->fm->validation($email);
        $password=$this->fm->validation($password);

        $query="insert into tb_user(user_name, user_email, user_pass) values('$username', '$email', '$password' ) ";
        $result=$this->db->insert($query);
        if (empty($result))
        {
            $msg="Register Successfully";
            return $msg;
        }else{
            $msg="Register Not Successfully";
            return $msg;
        }
    }
	public function adminLogin($adminEmail,$adminPass)
    {
        $adminEmail=$this->fm->validation($adminEmail);
        $adminPass=$this->fm->validation($adminPass);
        if (empty($adminEmail) || empty($adminPass))
        {
            $loginmsg="Username or Password must not be empty!";
            return $loginmsg;
        }else
        {
         $query="select *from tb_user where user_email='$adminEmail' AND user_pass='$adminPass'";
         $result=$this->db->select($query);
         if($result!=false)
         {
             $value=$result->fetch_assoc();
             session::set("adminlogin",true);
             session::set("adminUser",$value['user_name']);
             session::set("adminId",$value['id']);
             session::set("adminPass",$value['user_pass']);
             header("Location:index.php");
           
         }
         else
             {
                 $loginmsg="Username or Password are Not Valid!";
                 return $loginmsg;
             }
        }

    }

    public function changePassword($id,$oldPassword,$newPassword)
    {
        $query="select *from tb_user WHERE id='$id' && user_pass='$oldPassword'";
        $result=$this->db->select($query);
        if($result)
        {
            $updateQuery = "update tb_user set user_pass='$newPassword' where id='$id'";
            $updateResult = $this->db->insert($updateQuery);
            if($updateResult) {
                $msg = "Username Changed Successfully..";
                return $msg;
            }else{
                $msg="username Not Changed";
                return $msg;
            }
        }else
        {
            $msg=false;
            return $msg;
        }
    }
}


?>