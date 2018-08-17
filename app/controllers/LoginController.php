<?php


class LoginController extends \Phalcon\Mvc\Controller
{


    public function indexAction()
    {

    	if ($this->session->get('auth')) {
    		$this->response->redirect('index');
    	}

    }
    public function loginAction(){
    	if($this->request->isPost()){

    		if ($this->security->checkToken()) {
               $user = $this->request->getPost('username');
			$password = $this->request->getPost('password');

			
			$admin = Admin::findFirstByAdmin_username($user);

			if($admin){

				$check = $this->security->checkHash($password,$admin->admin_Password);
				if ($check) {
					$this->session->set('auth',[

					'user'=>$admin->admin_username,
					'user_rate'=>$admin->admin_Rate	

				]);
				
					$this->response->redirect('index');
				}else{
		$this->flashSession->error('账号或密码错误');
		 return $this->response->redirect('login/index');
				
				}
			}else{
		$this->flashSession->error('账号或密码错误');
		return $this->response->redirect('login/index');}
            }
        }
	}

	public function LogoutAction()
	{
		$this->session->set('auth',null);
		$this->response->redirect('login/index');
	}

	 
    

}
