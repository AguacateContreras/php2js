<?php
  class php2js{
    public function script($script=""){
      print('<script>');
      print($script);
      print('</script>');
    }


    public function alert($string=""){
      return self::script("alert('".$string."')");
    }


    public function console_log($string=""){
      return self::script("console.log('".$string."')");
    }
  }
?>