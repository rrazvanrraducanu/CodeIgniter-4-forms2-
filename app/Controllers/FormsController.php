<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class FormsController extends Controller {

	public function index()
	{
	return view('forma');
	}
        public function copy1(){
            $var1="";
            if(isset($_POST["text1"])){
            $var2=$_POST["text1"];
        }
        else {
            $var2="";
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       return view('forma1',$data);
            
	}
        public function copy2(){
            $var1="";
            if($this->request->getPost('text1')){
            $var2=$this->request->getPost('text1');
        }
        else {
            $var2="";
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       return view('forma1',$data);
	}
        public function forma3()
        {
            return view('forma3');
        }
         public function copy3()
         {
               $var1="";
            if(isset($_POST["text1"])){
            $var2=$_POST["text1"];
        }
        else {
            $var2="";
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       return view('forma4',$data);
         }
         public function copy4(){
            $var1="";
            if($this->request->getPost('text1')){
            $var2=$this->request->getPost('text1');
        }
        else {
            $var2="";
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       return view('forma4',$data);
	} 
        public function copy5(){
              $var1="";
            $var2="";
            if(isset($_POST["text1"])){
            $var1=$_POST["text1"];
        }
        else {
            $var1="";
   }
   if(isset($_POST['submit'])){
       $radio=$_POST['letter'];
       if($radio=='lower'){
           $var2=strtolower($var1);
       }elseif($radio=='upper'){
           $var2=strtoupper($var1);
       }
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       return view('forma5',$data);
        }
        public function copy6(){
             $var1="";
             $var2="";
             $var3="";
             $var4="";
       if(isset($_POST['text1'])){
        $var1=$_POST['text1'];
        }
        else {
            $var1='';
             }
             
        if(isset($_POST['textarea1'])){
            $var2=$_POST['textarea1'];
        }
        else {
            $var2='';
             }
             if(isset($_POST['dropdown'])){
            $var3=$_POST['dropdown'];
        }
        else {
            $var3='';
             }
       $data['var1']=$var1;
       $data['var2']=$var2;
       $data['var3']=$var3;
       return view('forma6',$data);
        }
        public function add(){
            $var1="";
             $var2="";
             $var3="";
       if($this->request->getPost('text1')){
        $var1=$this->request->getPost('text1');
        }
        else {
            $var1='';
             }
             
        if($this->request->getPost('text2')){
            $var2=$this->request->getPost('text2');
        }
        else {
            $var2='';
             }
        $var3=(int)$var1+(int)$var2;
       $data['var1']=$var1;
       $data['var2']=$var2;
       $data['var3']=$var3;
       return view('forma7',$data);
        }
}