<?php
class StringUtils {
    public static function secondCase($string) {
        if (strlen($string) >= 2) {
            $string = strtolower($string);
            $string[1] = strtoupper($string[1]);
            return $string;
        } else {
            $string = strtolower($string);
            return $string;
        }
    }
}

class Pajamas {
    private $owner;
    private $fit;
    private $color;

    function __construct($owner = "unclaimed", $fit = "fine", $color = "white") {
        $this->owner = StringUtils::secondCase($owner);
        $this->fit = $fit;
        $this->color = $color;
    }

    function describe() {
        return "Owner: $this->owner\nFit: $this->fit\nColor: $this->color\n";
    }

    public function setFit($new_fit) {
        $this->fit = $new_fit;
        return $new_fit;
    }
}

class ButtonablePajamas extends Pajamas {
    private $button_state = "unbuttoned";

    public function describe() {
        return parent::describe() . "Button State: $this->button_state\n";
    }

    public function toggleButtons() {
        if ($this->button_state === "unbuttoned") {
            $this->button_state = "buttoned";
        } else {
            $this->button_state = "unbuttoned";
        }
    }
}

$chicken_PJs = new Pajamas("Chicken", "just right", "purple");
echo $chicken_PJs->setFit("tight");
echo "\n";
echo $chicken_PJs->describe();

$moose_PJs = new ButtonablePajamas("moose", "kind of loose", "red");
echo $moose_PJs->describe();
echo "\n";
$moose_PJs->toggleButtons();
echo $moose_PJs->describe();
