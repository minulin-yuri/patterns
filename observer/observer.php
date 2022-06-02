<?php

interface Observer
{
    public function update(Observable $instance);
}

class Mailer implements Observer
{
    protected array $aspirantsList;

    private function subsribe(Aspirant $aspirant, string $message)
    {
        //отправляется сообщение соискателю о вакансии
    }

    public function addAspirant(Aspirant $aspirant)
    {
        foreach ($this->aspirantsList as $list) {
            if ($list === $aspirant) {
                return false;
            }
        }
        $this->aspirantsList[] = $aspirant;
    }

    public function deleteAspirant(Aspirant $aspirant)
    {
        foreach ($this->aspirantsList as $key => $value) {
            if ($value === $aspirant) {
                unset($this->aspirantsList[$key]);
            }
        }
    }

    public function update(Observable $instance)
    {
        $message = 'Появилась новая вакансия';
        foreach ($this->aspirantsList as $aspirant) {
            $this->subsribe($aspirant, $message);
        }
    }
}

class Aspirant
{
    protected string $name;
    protected string $email;
    protected float $experience;

    public function __construct(string $name, string $email, float $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }
}

interface Observable
{
    public function attach(Observer $observer);

    public function detach(Observer $observer);

    public function notify();
}

class Vacancies implements Observable
{
    protected array $observers;

    public function createVacancy()
    {
        //создается новая вакансия
        //указываются требования и условия
        //еще какие-то действия
        $this->notify();
    }

    public function attach(Observer $instance)
    {
        foreach ($this->observers as $observer) {
            if ($observer === $instance) {
                return false;
            }
        }
        $this->observers[] = $instance;
    }

    public function detach(Observer $instance)
    {
        foreach ($this->observers as $key => $observer) {
            if ($observer === $instance) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
