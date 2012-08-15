<?php

class ViewDemoController extends Controller
{
	/**
	 * http://localhost/JVPHP/index.php/viewDemo
	 */
	public  function index()
	{
		$this->view->assign('key1', 'key1');
		$this->view->assign('key2', 'key2');
		$this->view->setHeader('header2');
		$this->view->setFooter('footer2');
		$this->view->setView('viewdemo1');
		$this->view->setView('viewdemo2');
		$this->view->display();
	}
}