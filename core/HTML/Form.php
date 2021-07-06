<?php
namespace Core\HTML;
class Form
{
	private $data;

	public function __construct($data = []){
		$this->data = $data;
	}
	protected function surround($label, $html){
		return '<label>'.$label.'</label> <div class="form-group">'.$html.'</div>';
	}
	public function input($name, $label, $type = []){
			$label = '<label>'.$label.'</label>';
			$types = isset($type['type']) ? $type['type']: 'text';
		if($types === 'textarea'){
	         $input = '<textarea name = "'.$name.'" class="form-control">'.$this->getValue($name).'</textarea>';
		}else{
				$input = '<input type = '.$type.' name = "'.$name.'" value = "'.$this->getValue($name).'" class="form-control">';
		}
			return $this->surround($label, $input);
	}
	
	public function getValue($key){
		if(is_object($this->data)){
			return $this->data->$key;
		}
		return isset($this->data[$key]) ? $this->data[$key] : null;
	}
}