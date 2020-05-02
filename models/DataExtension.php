<?php
//$pdo enthält die Datenbankverbindung
 
class DataExtension {
   // Klasse zur Abbildung eurer Benutzer
   protected $name;
   protected $externalKey;
   protected $primaryKey;
   protected $fields = array (DataExtensionField::class);
 
   public function DataExtension($externalKey) {
       $this->externalKey = $externalKey;
   }
 
   public function setPrimaryKey($primaryKey) {
       $this->$primaryKey = $primaryKey;
   }
   
   public function setName($name) {
       $this->$name = $name;
   }
   
   public function setFieldsWithArray(array $array) {
       
       for($i = 0; $i < sizeof($array); $i++) {
           $field = new DataExtensionField();
           $field->newDataExtensionFieldText($array[$i], "Text", 50);
           array_push($array, $field);
       }
       
   }
   
   protected function setDataExtensionFields($fields) {
       
   }
   
   public function getArrayOfFields(array $fields) {
       return $this->$fields;
   }
   
}

?>