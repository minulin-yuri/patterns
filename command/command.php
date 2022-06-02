<?php

class Editor
{
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * Функция выбора участка текста
     */
    public function getInterval($start, $finish)
    {
    }

    public function setText($text)
    {
        $this->text = $text;
    }
}

interface ICommand
{
    public function execute();
    public function log();
    public function undo();
}

class CopyCommand implements ICommand
{

    protected Editor $editor;

    public function execute()
    {
        //выполяется копирование текста
        $text = $this->editor->getInterval();
        //какие-то еще действия 
        $this->editor->setText($text);
    }

    public function log()
    {
        echo 'Произошло копирование текста';
    }

    public function undo()
    {
        //отмена копирования текста
    }
}

class PasteCommand implements ICommand
{

    protected Editor $editor;

    public function execute()
    {
        //выполяется вставка текста 
        $this->editor->setText($text);
    }

    public function log()
    {
        echo 'Произошла вставка текста';
    }

    public function undo()
    {
        //отмена вставки текста
    }
}

class CutCommand implements ICommand
{

    protected Editor $editor;

    public function execute()
    {
        //выполяется вырезание текста
        $text = $this->editor->getInterval();
        //какие-то еще действия 
        $this->editor->setText($text);
    }

    public function log()
    {
        echo 'Произошло вырезание текста';
    }

    public function undo()
    {
        //отмена вырезания текста
    }
}
