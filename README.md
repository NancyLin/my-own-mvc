Framework Interoperability Group(框架可互用性小组)提出了PSR-0到PSR-4五套PHP非官方规范：
1. PSR-0（Autoloading Standard）自动加载标准
2. PSR-1（Basic Coding Standard）基础编码标准
3. PSR-2（Coding Style Guide）编码风格向导
4. PSR-3（Logger Interface）日志接口
5. PSR-4（Improved Autoloading）自动加载优化标准

Composer利用PSR-0 和 PSR-4以及PHP5.3的命名空间，给海量PHP包提供了异常方便的协作通道。

根据https://lvwenhan.com/php/405.html的博客，利用Composer一步一步构建自己的PHP框架，帮助自己更好地理解MVC。

步骤如下：
一、基础准备，Composer初始化
（1）在项目文件夹中新建文件composer.json，编辑内容如下：
{
	"require": {
	}
}
注：如何安装composer可以参考自己的博客http://blog.csdn.net/linruonan90/article/details/50688791中的第（1）步
（2）命令行切换到自己项目目录下，运行
composer update
在项目中，就会出现vendor/composer文件夹

二、构建路由
（1）我们利用 https://github.com/NoahBuscher/Macaw来构建自己的路由，对应的Composer包为noahbuscher/macaw。下面开始安装它，更改composer.json:
{
	"require": {
		"noahbuscher/macaw": "dev-master"
	}
}
运行 composer update
这时在项目中，就会出现vendor/noahbuscher文件夹，说明安装成功

（2）在项目下新建public文件夹，这个文件嘉将是用户唯一可见的部分。在文件夹下新建index.php文件。文件内容可直接查看。
引入Composer的自动载入和路由配置文件。

（3）在项目下新建config文件夹，新建routes.php文件。这时路由文件就可以直接调用NoahBuscher\Macaw包了