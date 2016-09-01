<?php

namespace pjam\MultiUserBundle\Model;

use pjam\MultiUserBundle\Model\UserFactoryInterface;

/**
 * @author leonardo proietti (leonardo.proietti@gmail.com)
 */
class UserFactory implements UserFactoryInterface
{
    /**
     *
     * @param type $class
     * @return \pjam\MultiUserBundle\Model\class 
     */
    public static function build($class)
    {        
        $user = new $class;        
        return $user;
    }
}
