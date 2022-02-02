<?php


namespace App\Classes;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $oddEven;
    protected $user;


    public function __construct($post=null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber   = $post['ending_number'];
        if (isset($post['odd_even']))
        {
            $this->oddEven = $post['odd_even'];
        }
    }


    public function index()
    {
        header('Location: pages/index.php');
    }
    public function makeseries()
    {
       if ($this->startingNumber > $this->endingNumber)
       {
           return $this->bigToSmallSeries();
       }
       else
       {
           if ($this->oddEven == 'odd')
           {
               return $this->SmallToBigOddSeries();
           }
           else if ($this->oddEven == 'even')
           {
               return $this->SmallToBigEvenSeries();
           }
           else
           {

           }
           return $this->SmallToBigSeries();
       }
    }

    protected function SmallToBigOddSeries()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if ($this->i % 2 != 0)
            {
                $this->result .= $this->i.' ';
            }
        }
        return $this->result;
    }
    protected function SmallToBigEvenSeries()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if ($this->i % 2 != 0)
            {
                $this->result .= $this->i.' ';
            }
        }
        return $this->result;
    }
    protected function SmallToBigSeries()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->result .= $this->i.' ';
        }
        return $this->result;
    }
     protected function bigToSmallSeries()
     {
         for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
         {
             $this->result .= $this->i.' ';
         }
         return $this->result;
     }


}