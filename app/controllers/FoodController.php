<?php
use \Phalcon\Http\Response as Response;

class FoodController extends ControllerBase
{

    public function indexAction()
    {
    	
    }

    public function newAction()
    {

	}

    public function addAction()
    {
        if(!$this->request->isPost()){
            return $this->dispatcher->forward([
                "controller" =>'food',
                'action'=>'index'
            ]);
        }

        $check =  Food::findFirstByfood_Name($this->request->getPost('food_Name'));

        if($check)
        {
            return '已有该餐品名';
            die;
        }

    	$food = new Food();

    	$food_Name     = $this->request->getPost('food_Name');
    	$food_Price    = $this->request->getPost('food_Price');
    	$response      = new Response();
    	if ($food_Name==null && $food_Price==null) {
            return '缺少必要字符，POSTMAN吗？';
            die;
		}else{
            if($this->request->hasFiles())
            {
                $files =$this->request->getUploadedFiles();
                foreach ($files as $file) {
                    $filename = $file->getName();
                    $filepath = '/public/upload/';
                    $file->moveTo(BASE_PATH.$filepath.$file->getName());
                    $food_Url = $filepath.$file->getName();
                    $_POST['food_Url'] = $food_Url;
                    }

            }
            

            

    		$check = $food->save($this->request->getPost());
        if($check){
            return '添加成功';
            die;
    	   }else{
            return '添加失败，请检查是否缺少元素';
            die;
    	}
    	}
	}


    
    public function ShowAction($parm){
	       $this->view->value = $parm;
    }
    

    public function changeAction(){
        if($this->request->isPost()){
            $id = $this->request->getPost('food_Id');
            $food = new Food();
            $food = food::findFirstByfood_Id($id);
            
            if($this->request->hasFiles())
            {
                $files =$this->request->getUploadedFiles();
                foreach ($files as $file) {
                    if ($file->getName()!=null) {
                    $filename = $file->getName();
                    $filepath = '/public/upload/';
                    $file->moveTo(BASE_PATH.$filepath.$file->getName());
                    $food_Url = $filepath.$file->getName();
                     $_POST['food_Url'] = $food_Url;
                    }else{
                       $_POST['food_Url'] = $food->food_Url;
                    }
                   
                }}

            // $food->food_Name = $this->request->getPost('food_Name');
            // $food->food_Description = $this->request->getPost('food_Description');
            // $food->food_Price  = $this->request->getPost('food_Price');
            // $food->food_Url = $this->request->getPost('food_Url');
            // $food->food_Statue = $this->request->getPost('food_Statue');

            $check = $food->update($this->request->getPost());
            // var_dump($food);
            if($check){
                return '更改成功';

            }else{
                return 'Something wrong,mail Jacky(a2281540@hotmail.com) to deal with it :).';
            }
        }else{
            return '?';
        }
    }

}

