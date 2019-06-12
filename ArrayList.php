<?php


class ArrayList
{
    public $ArrayList;
    public  $pointer = 0 ;
    public function  ArrayList($arr = ""){
        if(is_array($arr) == true)
            $this->ArrayList = $arr;
        else $this->ArrayList = array();
    }
    public function add($obj){
        array_push($this->ArrayList,$obj);
    }
    public function get($index){
        if($this->isInteger($index)&& $index <$this->size()){
        return $this->ArrayList[$index];
        }else{
            die("Error in ArrayList.get");
        }

    }
    function addToPos($index,$obj)
    {
        if ($this->isInteger($index))
            $this->ArrayList[$index] = $obj;
        else
            die("ERROR in ArrayList.addToPos <br> Integer value required");
    }
    function addAll($arr){
        $this->ArrayList = array_merge($this->ArrayList,$arr);
    }
    function clear(){
        $this->ArrayList = array();
    }
//    return true if datastructure contain $obj
    function  contains($obj){
    return in_array($obj,$this->ArrayList);
    }
   function indexO($obj){
        while(list ($key,$val) = each ($this->ArrayList))
            if($obj == $val)return $key;
            return -1;
   }
   function isEmpty (){
        if(count($this->ArrayList )==0) return true;
        else return false;
   }
   function lastIndexOf($obj){
    return array_search($obj,$this->ArrayList);
   }
   function remove($index){
        if($this->isInteger($index)){
            $newArrayList =array();
            for($i= 0;$i<$this->size();$i++)
                if($index != $i)$newArrayList[] =$this->get($i);
                $this->ArrayList = $newArrayList;}
        else{
                die("ERROR in ArrayList.remove<br> Integer value required");
            }
   }
   function removeRange($fromIndex,$toIndex)
   {
       if ($this->isInteger($fromIndex) && $this->isInteger($toIndex)) {
           $newArrayList = array();
           for ($i = 0; $i < $this->size(); $i++)
               if ($i < $fromIndex && $i > $toIndex)
                   $newArrayList[] = $this->get($i);
                   $this->ArrayList = $newArrayList;

       }
       else {
           die("ERROR in ArrayList.removeRange <br> Integer required");
       }
   }
       function size()
       {
           return count($this->ArrayList);
       }

       function sort()
       {
           sort($this->ArrayList);
       }

       function toArray()
       {
           $this->ArrayList;
       }
    function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function read()
    {
        return implode(",",$this->ArrayList);
    }

//
   }


