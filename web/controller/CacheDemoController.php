<?php
class CacheDemoController extends Controller
{

	/**
	 * http://localhost/JVPHP/index.php/cacheDemo-index
	 */
	public function index()
	{
		$cache=$this->getCache();
		$cache->save('test', "hello JJPHP");
		$this->view->assign("test", $cache->load('test'));
		$this->view->setFooter();
		$this->view->setHeader();
		$this->view->display();
	}
	/**
	 * http://localhost/JVPHP/index.php/cacheDemo-dbCache
	 */
	public function dbCache()
	{
		$cache=$this->getCache(JJCache::DB);
		$cache->save('test', "hello JJPHP");
	    $this->view->assign("test", $cache->load('test'));
		$this->view->setFooter('footer1');
		$this->view->setHeader('header1');
		$this->view->display();
	}
}