<?php


namespace App\classes;


class Student
{
    protected $text;
    protected $students;
    protected $result =[];

    public function __construct($post=null)
    {
        if (isset($post['search']))
        {
            $this->text = $post['search'];
        }


    }

    public function getAllStudentBySearchText()
    {
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student)
        {
            if ($this->text == $student['name'])
            {
                $this->result = $student;
                break;
            }
        }
        return $this->result;
    }


    public function getAllStudent()
    {
        return[
            0=>[
                'name'=>'jahid',
                'mobile'=>'33444',
                'email' => 'kkkk@gmail.com',
                'address'=> 'gazipur',
            ],

            1=>[
                'name'=>'salah',
                'mobile'=>'1234',
                'email' => 'jjjjj@gmail.com',
                'address'=> 'dhaka',
            ],

            2=>[
                'name'=>'fahim',
                'mobile'=>'123445',
                'email' => 'fahim@gmail.com',
                'address'=> 'dhaka',
            ],

            3=>[
                'name'=>'topu',
                'mobile'=>'123466',
                'email' => 'topu@gmail.com',
                'address'=> 'gulistan',
            ],

            4=>[
                'name'=>'riaj',
                'mobile'=>'1234888',
                'email' => 'riaj@gmail.com',
                'address'=> 'gulsan',
            ],

            5=>[
                'name'=>'tonmoy',
                'mobile'=>'12340000',
                'email' => 'tonmoy@gmail.com',
                'address'=> 'uttara',
            ],


        ];
    }

}