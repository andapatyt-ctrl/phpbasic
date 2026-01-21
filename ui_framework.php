<?php

class Button {
    public $text;

    public function __construct($text) {
        $this->text = $text;
    }

    public function __toString() {
        $style = "
        background-color: #8071ff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px; /* แก้ไขตัวสะกด */
        border: none;
        cursor: pointer;
        ";

        return "<button type='submit' style='{$style}'>{$this->text}</button>";
    }
}

class Input {
    public $type;

    public function __construct($type = 'text') {
        // แก้ไขจาก $text เป็น $type
        $this->type = $type;
    }

    public function __toString() {
        $style = "
        border: 1px solid #ccc;
        padding: 8px;
        border-radius: 4px;
        margin-top: 5px;
        ";
        
        // นำ $style มาใช้งานในแท็ก input
        return "<input type='{$this->type}' style='{$style}' name='field_{$this->type}'>";
    }
}
?>
