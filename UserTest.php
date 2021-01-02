<?php
class UserTest extends PHPUnit\Framework\TestCase
{
    public $user;
    public function testLogin(){
        
		$user=new \App\Models\User;
        
		$this->assertEquals($user->getPassword('puneethreddy951@gmail.com'), 'puneeth');
    }
    public function testThatWeCanGetTheFirstName()
{
$user = new \App\Models\User;
$user->setFirstName('puneeth');
$this->assertEquals($user->getFirstName(), 'puneeth');
}
  
   
    public function Product_info()
    {
        $user = new \App\Models\User;
        
        $this->assertEquals($user->getProductName(), 'sonymobile');

    }
    
    
}

