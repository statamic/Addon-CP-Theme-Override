<?php
class Hooks_override extends Hooks {

  //version < 1.5
  function add_to_control_panel_head() {
    return self::include_css('override.css');
  }
  
  
  //version 1.5 and above
  function control_panel__add_to_head() {
    return $this->css->link('override.css');
  }
  function control_panel__add_to_foot() {
    return $this->js->link('override.js');
  }

}
