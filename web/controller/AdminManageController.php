<?php
class AdminManageController extends  AdminController
{
	/*
	 * http://localhost/JVPHP/index.php/adminManage-index
	 */
	public function index()
	{
		$this->view->assign("test","hello admin");
		$this->view->setView("adminmanage-index");
		$this->view->display();
	}
	/*
	 * http://localhost/JVPHP/index.php/adminManage-adminLogin
	 */
	public function adminLogin()
	{
		if(!$this->getPost('user'))
		{
				$this->view->display();
		}
		else 
		{
			 $this->setSession('admin', 'admin');
			 $this->redirect('adminManage-index');
		}
	}
}