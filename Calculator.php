<?php

require_once "calc.php";

class Calculator
{
    private $num1;
    private $num2;
    private $option;

    /**
     * Calculator constructor.
     * @param $num1
     * @param $num2
     * @param $option
     */
    public function __construct($num1, $num2, $option)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->option = $option;
    }

    /**
     * @return mixed
     */
    public function getNum1()
    {
        return $this->num1;
    }

    /**
     * @param mixed $num1
     */
    public function setNum1($num1)
    {
        $this->num1 = $num1;
    }

    /**
     * @return mixed
     */
    public function getNum2()
    {
        return $this->num2;
    }

    /**
     * @param mixed $num2
     */
    public function setNum2($num2)
    {
        $this->num2 = $num2;
    }

    /**
     * @return mixed
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param mixed $option
     */
    public function setOption($option)
    {
        $this->option = $option;
    }

    public function mark()
    {
        switch ($this->getOption())
        {
            case 'add':
                return "+";
                break;

            case 'sub':
                return "-";
                break;

            case 'mul':
                return "*";
                break;

            case 'div':
                return "/";
                break;
        }
    }

    public function option()
    {
        switch ($this->getOption())
        {
            case 'add':
                return $this->getNum1() + $this->getNum2();
                break;

            case 'sub':
                return $this->getNum1() - $this->getNum2();
                break;

            case 'mul':

                return $this->getNum1() * $this->getNum2();
                break;

            case 'div':

                if ($this->getNum2() == 0)
                {
                    return "infinity";
                }
                return round($this->getNum1() / $this->getNum2(),2);
                break;


        }
    }



}
