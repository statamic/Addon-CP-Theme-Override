<?php
class Hooks_override extends Hooks {

  function add_to_control_panel_head() {
    return self::include_css('override.css');
  }

}