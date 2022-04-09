<?php

use Entree as GlobalEntree;

    echo "<a href='../php2book/form1.html'>Главная страница</a><br>"; 
    // ini_set('display_errors',1);
    // error_reporting(E_ALL ^E_NOTICE);

    class Entree{
        public $name;
        public $ingredients = array();
        public function __construct($val_1, $val_2){
            $this->name = $val_1;
            $this->ingredients = $val_2;
        }
        public function hasIngredient($ingredient){
            return in_array($ingredient, $this->ingredients);
        }
    }
    //подкласс
    class ComboMeal extends Entree{
        public function hasIngredient($ing){
            foreach ($this->ingredients as $entree){
                if ($entree->hasIngredient($ing)){
                    return true;
                }
            }
            return false;
        }
    }
    //new dish
    $soup = new Entree('Chicken Soup', ['chicken', 'water']);
    $sandwich = new Entree('Chicken Sandwich', ['chicken', 'bread']);
    //combo dish
    $combo = new ComboMeal('Soup + Sandwich', [$soup, $sandwich]);
    //available ingredients
    $reserves = ['chicken', 'pickles', 'water'];
    foreach($reserves as $ing){
       if ($combo->hasIngredient($ing)){ 
           print "Something in the combo contains $ing.<br>";
        }
    }

?>