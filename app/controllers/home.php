<?php

     class Home extends Controller {
         /*
         protected $user;

         public function __construct(){
             $this->user=$this->model('User');
         }  */

         public function index($name=""){

             // echo $name.$other;
             /*
             $user= $this->user;
             $user->name=$name; */
             //echo $user->name;

             $this->view('home/index',['name'=>$user->name]);

             //User::find(1);
         }

         public function create($username='',$email=''){
              /*
              $this->user->create([
                  'username'=>$username,
                  'email'=>$email
              ]); */

             User::create([
                 'username'=>$username,
                 'email'=>$email
             ]);

         }
     }