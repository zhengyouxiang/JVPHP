<p>JVPHP ( Return JSON And View） 是一个基于BSD开源协议发布的，快速、简单的面向对象的 轻量级PHP开发框架。<br>
本身仅仅提供php引擎View，可以对其进行扩展。如果不用View，请使用JJPHP 。主要特性：<br>
  1.基于MVC架构<br>
  2.数据访问基于NotORM(www.notorm.com)<br>
  3.集成了OAuth2<br>
  4.无需配置除了数据库<br>
  5.系统采用单例模式<br>
  6.提供了File、DB等种缓存机制<br>
7.提供常用的类库如Curl、File、Http的等等</p>
<p>JVPHP开发框架永久开源和免费提供使用,域名 (www.111work.com/jjphp) </p>
<p>JVPHP框架目录<br>
  | <br>
  |  -config                      配置<br>
  |  |-JJDbConfig.php             数据库配置<br>
  |  |-JJCacheConfig.php          默认缓存配置<br>
  |  |-JJOAuthConfig.php          OAuth配置<br>
  | <br>
  |  -core			框架核心<br>
  |  ├cache			缓存<br>
  |  ├comm			核心类<br>
  |  ├dao			数据访问<br>
  |  ├oauth	                oauth<br>
  |  ├util		        核心辅助类<br>
  |  ├lib			     采用类库<br>
  |  ├JJPHP.php  		最核心类<br>
  |<br>
  |  -otherweb                    另一个网站 里面有config，web等<br>
  | <br>
  |  -web                         项目目录<br>
  |  ├contrlib                   自定义controller<br>
  |  ├controller                 控制器类<br>
  |  ├model                      模型类数据访问层<br>
  |  ├service                    服务类<br>
  |  ├util                       项目辅助类<br>
  |<br>
  |  -index.php                   入口文件<br>
</p>
<p>部署说明:<br>
  1.数据库配置 配置文件在config/JJDbConfig.php下 填写相应的配置就可以了<br>
  2.缓存配置   如果要用缓存 请参考config/JJCacheConfig.php<br>
  3.oauth配置  请参考config/JJOAuthConfig.php<br>
  4.访问格式为 http://baseurl/index.php/controler-action.html<br>
  或者 http://baseurl/index.php/controler-action<br>
  5.如果要用实例 请执行JVPHPTest.sql<br>
  6.如果要用实例可以把文件下载下来命名为JJPHPDemo</p>
<br />