<?php

class TextInput {
    protected $Content = "";
    public function add($text) {
        $this->Content .= $text;
    }
    public function getValue() {
        return $this->Content;
    }
}

class NumericInput extends TextInput {
    public function add($text) {
        $this->Content .= filter_var($text, FILTER_SANITIZE_NUMBER_INT);
    }
}

$TI = new TextInput();
$NI = new NumericInput();

$TI->add("A");
$TI->add("U");
$TI->add("14");
$TI->add("CDE5");
echo $TI->getValue();

echo "<br>-----<br>";

$NI->add("A");
$NI->add("U");
$NI->add("14");
$NI->add("CDE5");
echo $NI->getValue();

?>