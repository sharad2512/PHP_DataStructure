<?php
class Node
{
    public $data;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}
class LinkedListDs
{
    public $head;

    public function isEmpty()
    {
        return $this->head == null;
    }

    public function insertFirst($data)
    {
        $newNode = new Node($data);
        $newNode->next = $this->head;
        $this->head =$newNode;
    }
    public function insertEnd($data){
        $newNode = new Node($data);
        if($this->isEmpty()){
            $this->head = $newNode;
        }else{
            $current = $this->head;
            while($current->next != null){
                $current = $current->next;
            }
            $current->next = $newNode;
        }

    }public function display(){
        $current = $this->head;
        while($current != null){
            echo $current->data . " ";
            $current = $current->next;
        }

    }
}
$list = new LinkedListDs();
$list->insertFirst("Sharad");
$list->insertFirst("am");
$list->insertFirst("I");
$list->insertEnd("from");
$list->insertEnd("pune");
$list->display();
?>