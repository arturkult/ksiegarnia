class FrontController extends FrontControllerCore
{
	public function initFooter()
	{
		if(isset($cookie->id_customer)
		{
			self::$smarty->asign('dupa','dupa');
			$json = file_getcontents('http://tomcat/recommender/recommend?customer_id='.$cookie->id_customer);
		}
	return parent::initFooter();
	}


}
