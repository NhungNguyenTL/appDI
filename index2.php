<?php
class Author
{
    private $firstname;
    private $lastname;
    public function __construct($firstname, $lastname)
    {
        //GÁn 2 tham sô struyeefn vào cho thuộc tính trong class
        $this->firstname= $firstname;
        $this->lastname=$lastname;
    }
    public function getFirstName()
    {
        return $this->firstname;
    }
    public function getLastName()
    {
        return $this->lastname;
    }
}
class Question
{
    private $author;
    private $question;
    public function __construct($question,Author $author)
{
    $this->author= $author;
    $this->question= $question;
}
    public function getAuthor()
    {
        return $this->author;
    }
    public function getQuestion()
    {
        return $this->question;
    }
}
$author= new Author('Nguyen', 'Nam');
$question= new Question('who is he?',$author);
