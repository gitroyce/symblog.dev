<?php
// src/Blogger/BlogBundle/Entity/Enquiry.php

namespace Blogger\BlogBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetaData;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
//use Symfony\Component\Validator\Constraints\MinLength;
//use Symfony\Component\Validator\Constraints\MaxLength;
use Symfony\Component\Validator\Constraints\Length;

class Enquiry
{
    protected $name;
    protected $email;
    protected $subject;
    protected $body;

    public static function loadValidatorMetaData(ClassMetaData $metadata)
    {
        $metadata->addPropertyConstraint('name', new NotBlank());

        $metadata->addPropertyConstraint('email', new Email(array(
                'message' => 'Symblog does not like invalid emails.  How about a real one?'
        )));
        
        $metadata->addPropertyConstraint('subject', new NotBlank());
        //$metadata->addPropertyConstraint('subject', new MaxLength(50));
        $metadata->addPropertyConstraint('subject', new Length(array('max' => 50)));

        //$metadata->addPropertyConstraint('body', new MinLength(50));
        $metadata->addPropertyConstraint('body', new Length(array('min' => 50)));
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }
}
