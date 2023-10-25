<?php

class Cat extends Animals {
    public $myaukat;

    public function setMyaukat($myaukat)
    {
        $this->myaukat = $myaukat;
        return $this;
    }
}

class Dog extends Animals {
    public $layat;

    public function setLayat($layat)
    {
        $this->layat = $layat;
        return $this;
    }
}

class Animals {
    public $poroda;

    public $yest;

    public $spat;

    public function setSpat($spat) {
        $this->spat = $spat;
        return $this;
    }
}



class Alert {
    public $to;

    public $title;

    public $text;

    public function setTo($to){
        $this->to = $to;
        return $this;
    }

    public function setTitle($title){
        $this->title = $title;
        return $this;
    }

    public function setText($text){
        $this->text = $text;
        return $this;
    }


    public function send() {
        return mail($this->to, $this->title, $this->text);
    }
}

$alert = new Alert();

$alert->setTo([

])->setTitle('Подписка оформлена')->setText('Спасибо за оформление подписки.');

print_r($alert->send());