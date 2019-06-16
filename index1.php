<?php


class Author{
    private $firstname;
    private $lastname;
    public function __construct($firstname,$lastname)
    {
        /**
         * gán 2 tham só truyền vào cho thuộc tính trong class
         */
        $this->firstname=$firstname;
        $this->lastname=$lastname;
    }

    public function getFirstName(){
        return $this->firstname;
    }
    public function getLastName(){
        return $this->lastname;
    }
}


class Question{
    private $author;

    private $question;

    public function __construct($question,$firstname,$lastname)
    {
        $this->author= new Author($firstname,$lastname);
        $this->question = $question;
    }

    public function  getAuthor(){
        return $this->author;
        }
    public function  getQuestion(){
        return $this->question;
    }
}

$question = new Question("How to create DI PHP ?","super","admin");