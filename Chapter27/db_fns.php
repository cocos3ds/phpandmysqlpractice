<?php
  function db_connect(){
    $result = new mysqli('localhost','bm_user','123456','bookmarks');
    if(!$result){
      throw new Exception('Could not connect to database server');
    }else{
      return $result;
    }

  }



 ?>
