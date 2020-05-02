<?php
//$pdo enthält die Datenbankverbindung

class DataExtensionField {
    // Klasse zur Abbildung eurer Benutzer
    protected $name;
    protected $dataType;
    protected $length;
    
    public function newDataExtensionField($name, $dataType) {
        $this->$name = $name;
        $this->$dataType = $dataType;
    }
    
    public function newDataExtensionFieldText($name, $dataType, $length) {
        $this->$name = $name;
        $this->$dataType = $dataType;
        $this->$length = $length;
    }
    
    public function setDataType($dataType) {
        $this->$dataType = $dataType;
    }
    
    public function getDataType() {
        return $this->dataType;
    }
    
    public function setLength($length) {
        if($this->getDataType() == "Text ") {
            $this->$length = $length;
        }
    }
    
    public function getLength() {
        return $this->length;
    }
    
    public function setFields(array $fields) {
        $this->$fields = $fields;
    }
}

?>