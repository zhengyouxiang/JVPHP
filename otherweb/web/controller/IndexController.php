<?php
class IndexController extends Controller
{
	public function index()
	{
		  $this->view->assign("jvphp", "hello jvphp");
		  $this->view->setFooter(); 
		   $this->view->setHeader();
		  $this->view->display();
	}

}