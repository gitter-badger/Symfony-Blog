<?php

namespace caguna\demoBundle\Domain;



class UserManager {
  
	private $entityManager;
	
	private $entityManager2;

    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
    }
    


    public function getAll(){
    	return array('a'=>'b', 'um'=>$this->entityManager);
    }
    
}