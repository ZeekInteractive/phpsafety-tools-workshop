<?php
class TerribleFormatting {
    public $var1;public $var2;protected $var3;private $var4;

public function __construct($var1,$var2,$var3,$var4){$this->var1=$var1;$this->var2=$var2; $this->var3=$var3; $this->var4=$var4;}
    public function badMethod1(){
    return$this->var1+$this->var2;
}
  public function badMethod2()
  {
    return $this->var3 - $this->var4;}
    public function badMethod3()
{
  return$this->var1* $this->var2;
}
public function badMethod4()
{return $this->var3/$this->var4;
}
public function badMethod5(){return $this->var1 %$this->var2;}
public function badMethod6()     {return $this->var3 **$this->var4;}


public function badMethod7()
{if($this->var1>$this->var2){return true;}
else{return false;}}

public function badMethod8(){for($i=0;$i<10;$i++){echo $i;}}

public function badMethod9()
{
  foreach($this->var3 as $key => $value){
  echo $key. '=>' .$value;  
}}

public function badMethod10()
{
    while($this->var1<$this->var2){$this->var1++;}

}

public function badMethod11(){
switch($this->var1){
  case 1:echo 'It is one';break;
  case 2:echo 'It is two';break;
  default:echo 'It is neither one nor two';
}
}
public function badMethod12(){try{
throw new Exception('An exception');
}catch(Exception $e){echo $e->getMessage();}}

}
