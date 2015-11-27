<?php


     class Home extends Controller {

         public function index($name=""){

             // echo $name.$other;
             $user= $this->model('User');
             $user->name=$name;
             //echo $user->name;

             $this->view('home/index',['name'=>$user->name]);

         }

     }