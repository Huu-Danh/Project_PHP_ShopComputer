
	<h1>

		<?php 
			spl_autoload_register(function($class)
			{
			include_once('../system/libs/'.$class.'.php');

			});

			$url = isset($_GET['url']) ? $_GET['url'] : NULL;
			if($url != null)
			{
				$url = rtrim($url,'/');
				$url = explode('/',filter_var($url,FILTER_SANITIZE_URL));
			}
			else
			{
				unset($url);
			}
 
			if(isset($url[0]))
			{
				include_once('../app/controllers/'.$url[0].'.php');
				$product = new $url[0]();
			}
			else
			{
				include_once('../app/controllers/index.php');
				$index = new index();
				$index->homepage();

				// include_once('../app/controllers/category.php');
				// $category = new category();
				// $category->category();
 			}
		?>
	</h1>

