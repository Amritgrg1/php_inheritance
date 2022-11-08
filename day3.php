<?php
class User
{
    public $username;
    protected $email;
    public $password;

    public function __construct($username, $email, $password)
    {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;

    }

    public function login()
    {
        echo $this->username . "has successfully login!";
    }
    public function getemail()
    {
        return $this->email;
    }

    public function setemail($email)
    {
        $this->email = $email;
    }

   
}

class Admin extends User
{
  public $role;

  public function __construct($username, $email, $password, $role)
  {
      parent::__construct($username,$email,$password);
      $this->role = $role;

  }

  public function getemail()
  {
    echo '<br> User has logged in' . $this->email;
  }
}


$user = new User('ram','ram@gmail.com','rew');
// $user->username = 'am';
$user->login();
echo $user->getemail();
$user->setemail('amit');
echo $user->getemail();
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';



$admin = new Admin('shyam',);
$admin->login();

echo $admin->getemail();





?>