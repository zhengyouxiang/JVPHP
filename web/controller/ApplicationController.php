<?php
class ApplicationController extends Controller
{
	public $appmode;
	public function  __construct()
	{
		parent::__construct();
		$this->appmode=$this->getModel("application");
	}
	/**
	 * http://localhost/JVPHP/index.php/application-getApplication?id=2
	 */
	public function getApplication()
	{
		if(key_exists("id", $_GET))
		{
			$id=$this->getGet('id');
			$app=$this->appmode->getDetailById($id);
			$this->view->assign('app', $app);
			$this->view->setView('application');
			$this->view->display();
		}
	}
	/**
	 * http://localhost/JVPHP/index.php/application-toString
	 */
	public function toString()
	{
		$app=$this->appmode->tostring();
		$this->view->assign('app', $app);
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-wherein
	 */
	public function wherein()
	{
		$app=$this->appmode->wherein();
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-where
	 */
	public function where()
	{
		$app=$this->appmode->where();
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-limit
	 */
	public function limit()
	{
		$app=$this->appmode->limit();
		$this->view->setView('application');
		$this->view->display();
	}

	/**
	 * http://localhost/JVPHP/index.php/application-searchOrder
	 */
	public function searchOrder()
	{
		$app=$this->appmode->searchOrder();
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 *  http://localhost/JVPHP/index.php/application-basic
	 */
	public function basic()
	{
		$app=$this->appmode->basic();
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-findone
	 */
	public function findone()
	{
		$app=$this->appmode->findone();
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-aggregation
	 */
	public function	aggregation()
	{
		$app=$this->appmode->aggregation();
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-fetchPairs
	 */
	public function		fetchPairs()
	{
		$app=$this->appmode->fetchPairs();
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-union
	 */
	public function union()
	{
		$app=$this->appmode->union();
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-arrayOffset
	 *"1"
	 */
	public function arrayOffset()
	{
		$app=$this->appmode->arrayOffset();
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-inMulti
	 */
	public function inMulti()
	{
		$app=$this->appmode->inMulti();
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-multipleArguments
	 */
	public function multipleArguments()
	{
		$app=$this->appmode->multipleArguments();
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-update
	 */
	public function update()
	{
	 $app=$this->appmode->update();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-rowset
	 */
	public function rowset()
	{
	 $app=$this->appmode->rowset();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-insertUpdate
	 */
	public function insertUpdate()
	{
		$app=$this->appmode->insertUpdate();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-join
	 */
	public function join()
	{
		$app=$this->appmode->join();
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-sqlquery
	 */
	public function sqlquery()
	{
		$app=$this->appmode->sqlquery();
		$this->view->setView('application');
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/application-sqlexec
	 */
	public function sqlexec()
	{
		$app=$this->appmode->sqlexec();
	}
}