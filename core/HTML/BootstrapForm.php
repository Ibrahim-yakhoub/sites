<?php
namespace Core\HTML;

class BootstrapForm extends Form
{
	
     protected function surround($html, $label){
     	return "<label>".$label."</label> <div class=\"form-group\">{$html}</div>";
     }
    
public function input($name, $label, $option = []){
     $type = isset($option['type']) ? $option['type'] : 'text';
     $label = '<label>'.$label .'</label>';

     if($type === 'textarea'){
          $input = '<textarea name="'.$name.'" class="form-control">'.$this->getValue($name).'</textarea>';
     }else{
          $input = '<input type="'.$type.'" name="'.$name.'" value="'.$this->getValue($name).'" class="form-control">';
     }
      
     return $this->surround($input, $label);	
}
public function select($name, $label, $option){
     $label = '<label>'.$label .'</label>';
     $input = '<select class="form-control long" name="'.$name.'">' ;
      foreach($option as $k => $v){
           
           $attributes = '';
           if($k == $this->getValue($name)){
                $attributes = ' selected';
           }
           $input .= "<option value='$k'$attributes>$v</option>";
      }
    
     $input .= '</select>';
     return $this->surround($input, $label);
}

     public function submit(){
         return $this->surround(
               '<button type="submit" class="btn btn-primary">Envoyer</button>'
     );

}
}
?>

