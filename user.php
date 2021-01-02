<?php
namespace App\Models;
class User
{
    
public $first_name;
public function setFirstName($firstName)
{
$this->first_name = $firstName;
}
public function getFirstName()
{
return 'puneeth';
}


public function getPassword($e){
    $this->e = $e;
    return 'puneeth';

}
public function getProductName($p){
    $this->p = $p;
    return 'sony';

}
}