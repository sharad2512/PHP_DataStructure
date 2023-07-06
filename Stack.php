<?php 

class Stack{
    private $ds = [];
    private $index =0;
    function push ($value){
        $this->ds[$this->index++] = $value;
        return $this->index;
    }
    function pop(){
        return $this->ds[--$this->index];
    }
    function size (){
        return $this->index;
    }
    function isEmpty(){
        if($this->size()==0){
            return true;
        }
        return false;
    }
    function show(){
        if($this->isEmpty()){
            echo "Stack is empty";
        }else{
            echo"stack contents:";
            echo  implode(',',$this->ds);   
        }

    }
}
  $obj = new Stack();
  $obj->push("Sharad");
  $obj->push("Narute");
  $obj->push("pune");
  $obj->pop();
  $obj->isEmpty();
  $obj->show();
?>