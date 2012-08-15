<?php
class AdminController extends  Controller
{
	public function before()
	{
		if($this->getAction()!='adminLogin'&&!$this->isSetSession('admin'))
		{
				 $this->redirect('adminManage-adminLogin');
		}
	}

}