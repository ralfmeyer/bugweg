<?php 

namespace Application\Model;

use Zend\Form\Form;
use Zend\Form\Element\Select;
use Zend\Form\Element\Submit;
use Zend\Form\Element\Text;
use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;


class ZzformBuilder{

	private $formname;
	private $form;
	private $tb;
	private $result ;
	
	public function __construct($formname){
		$this->formname = $formname;
		$this->form = new Form($formname);
		$sm = $this->getServiceLocator();
		$this->tb = $sm->get('Application\Model\ZzformTable');
		echo "Constructor" ;
		die;
	}

	public function readDBFormData(){
		// $this->result = $this->tb->fetchAllfromForm($formname);
		
		echo "<pre>";
		var_dump($this->tb);
		echo "</pre>";
	}
	
	private function buildForm(){
	
	}
/*	
$nameElement = new Text('pizza_name');
$nameElement->setLabel('Pizzaname');

$priceElement = new Text('pizza_price');
$priceElement->setLabel('Preis');

$categoryElement = new Select('pizza_category');
$categoryElement->setLabel('Kategorie');
$categoryElement->setValueOptions(array(
    1 => 'Klassiker', 2 => 'Vegetarisch', 3 => 'Extravagant'
));

$submitElement = new Submit('save_pizza');
$submitElement->setValue('Pizza speichern');

$form = new Form('pizza');
$form->add($nameElement);
$form->add($priceElement);
$form->add($categoryElement);
$form->add($submitElement);

$form->prepare();

$this->headStyle()->appendStyle('label { width: 200px; }');

echo $this->form()->openTag($form); 
echo $this->formRow($form->get('pizza_name')); 
echo $this->formRow($form->get('pizza_price')); 
echo $this->formRow($form->get('pizza_category')); 
echo $this->formRow($form->get('save_pizza')); 
echo $this->form()->closeTag(); 
*/
}