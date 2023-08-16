<?php
/* ####
class  by skmcoder
*/
class validator
{
  /* find_errors prop */
  private $errors = [];
  /* find_errors prop */
  /* validation prop */
  private $input_names = array();
  /* validation prop */
  /* check all validation  */
  private $check = array();
  /* check all validation  */
  /* masgs */
  private $masgs = array();
  public    $Messages = [
    "Date-error" => "Please enter a valid date in the field",
    "Time-error" => "Please type a valid time representing 24 hours in the field",
    "Number-word-max-error" => "The number of words or numbers must be in a field",
    "Number-word-min-error" => "You must be the number of words or numbers in a field",
    "Number-error" => "Please enter numbers only in the field",
    "url-error" => "Please enter a valid link in the field",
    "eng-error" => "Please type English only in the field",
    "email-error" => "Please type a valid email in the field"
  ];
  /* masgs */
  /* flag all validation */
  //  public $ok;
  /* custom name */
  private $custom_name = array();
  /* custom name */
  private $custom_name2 = array();
  /* flag all validation */
  public  function test_validate()
  {

    return $this->find_errors($this->check);
  }

  public  function __construct($valid_array)
  {
    foreach ($valid_array as $key => $value) {
      array_push($this->input_names,  strip_tags(htmlentities(trim($_POST[$key]))));
      foreach ($value as $option) {

        /* start validation part  */

        switch ($option) {
          case substr($option, 0, 3) == "max":
            $this->max(substr($option, 4), $key);
            break;
          case substr($option, 0, 3) == "min":
            $this->min(substr($option, 4), $key);
            break;
          case substr($option, 0, 4) == "name":
            $this->custom_name[] = $key . ':' . substr($option, 5);
            break;
          case "require":
            $this->require($key);
            break;
          case "url":
            $this->url($key);
            break;
          case "number":
            $this->number($key);
            break;
          case "email":
            $this->email($key);
            break;
          case "eng":
            $this->eng($key);
            break;
          case "date":
            $this->date($key);
            break;
          case "time24":
            $this->time24($key);
            break;
        };
      }
    }
    /*get the name inputs */
    // foreach($this->input_names as $inputs){
    //    echo     $inputs .'<br>';
    // }
    /*get the name inputs */
  }
  private function date($input_name = null, $custom_name_arabic = null)
  {
    foreach ($this->custom_name as $value) {
      $pos = strpos($value, ":");
      /*custom name */
      $name = substr($value, 0, $pos);
      /* origanl name */
      $custom_name = substr($value, $pos + 1);

      if ($name == $input_name) {
        $custom_name_arabic = $custom_name;
      }
    }
    if (in_array(strip_tags(htmlentities(trim(@$_POST[$input_name]))), $this->input_names)) {
      $input_value =    strip_tags(htmlentities(trim($_POST[$input_name])));
    }
    if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $input_value)) {
      if (isset($custom_name_arabic)) {
        array_push($this->masgs, ' ' . $this->Messages['Date-error'] . $custom_name_arabic);
      } else {
        array_push($this->masgs, ' ' .  $this->Messages['Date-error'] . $input_name);
      }
      array_push($this->check, "false");
    } else {
      array_push($this->check, "true");
    }
  }
  private function time24($input_name = null, $custom_name_arabic = null)
  {
    foreach ($this->custom_name as $value) {
      $pos = strpos($value, ":");
      /*custom name */
      $name = substr($value, 0, $pos);
      /* origanl name */
      $custom_name = substr($value, $pos + 1);

      if ($name == $input_name) {
        $custom_name_arabic = $custom_name;
      }
    }
    if (in_array(strip_tags(htmlentities(trim(@$_POST[$input_name]))), $this->input_names)) {
      $input_value = strip_tags(htmlentities(trim($_POST[$input_name])));
    }
    if (!preg_match("#^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$#", $input_value)) {
      if (isset($custom_name_arabic)) {
        array_push($this->masgs, ' ' . $this->Messages['Time-error'] . $custom_name_arabic);
      } else {
        array_push($this->masgs, ' ' . $this->Messages['Time-error'] . $input_name);
      }
      array_push($this->check, "false");
    } else {
      array_push($this->check, "true");
    }
  }
  private function max($max_number, $input_name = null, $custom_name_arabic = null)
  {
    foreach ($this->custom_name as $value) {
      $pos = strpos($value, ":");
      /*custom name */
      $name = substr($value, 0, $pos);
      /* origanl name */
      $custom_name = substr($value, $pos + 1);

      if ($name == $input_name) {
        $custom_name_arabic = $custom_name;
      }
    }
    if (in_array(strip_tags(htmlentities(trim(@$_POST[$input_name]))), $this->input_names)) {
      $input_value =  strip_tags(htmlentities(trim(@$_POST[$input_name])));
    }
    // echo strlen($input_value) .'<Br>';
    if (strlen("$input_value") > $max_number) {
      if (isset($custom_name_arabic)) {
        array_push($this->masgs, ' ' . '  ' . '  ' . $this->Messages['Number-word-max-error']  . ' ' . $custom_name_arabic . "don't go beyond
        " . ' ' . $max_number);
      } else {
        array_push($this->masgs, $max_number . ' ' . "don't go beyond
        " . ' ' . $input_name . ' ' . $this->Messages['Number-word-max-error']);
      }
      array_push($this->check, "false");
    } else {
      array_push($this->check, "true");
    };
  }
  private function min($min_number, $input_name = null, $custom_name_arabic = null)
  {
    foreach ($this->custom_name as $value) {
      $pos = strpos($value, ":");
      /*custom name */
      $name = substr($value, 0, $pos);
      /* origanl name */
      $custom_name = substr($value, $pos + 1);

      if ($name == $input_name) {
        $custom_name_arabic = $custom_name;
      }
    }
    if (in_array(strip_tags(htmlentities(trim($_POST[$input_name]))), $this->input_names)) {
      $input_value =  strip_tags(htmlentities(trim($_POST[$input_name])));
    }
    // echo strlen($input_value) .'<Br>';
    if (strlen("$input_value") < $min_number) {
      if (isset($custom_name_arabic)) {
        array_push($this->masgs, $min_number . ' ' . '  ' . '  ' .  $this->Messages["Number-word-min-error"] . ' ' . $custom_name_arabic . ' at least
 ');
      } else {
        array_push($this->masgs, ' ' . ' at least
' . ' ' . $input_name . ' ' .  $this->Messages["Number-word-min-error"] . $min_number);
      }
      array_push($this->check, "false");
    } else {
      array_push($this->check, "true");
    };
  }
  private function number($input_name = null, $custom_name_arabic = null)
  {
    foreach ($this->custom_name as $value) {
      $pos = strpos($value, ":");
      /*custom name */
      $name = substr($value, 0, $pos);
      /* origanl name */
      $custom_name = substr($value, $pos + 1);

      if ($name == $input_name) {
        $custom_name_arabic = $custom_name;
      }
    }

    if (in_array(strip_tags(htmlentities(trim(@$_POST[$input_name]))), $this->input_names)) {
      $input_value =  strip_tags(htmlentities(trim(@$_POST[$input_name])));
    }
    if (!preg_match("/^[0-9]+$/", $input_value)) {
      if (isset($custom_name_arabic)) {
        array_push($this->masgs, ' ' . $this->Messages['Number-error'] . $custom_name_arabic);
      } else {
        array_push($this->masgs, $input_name . ' ' . $this->Messages['Number-error']);
      };
      array_push($this->check, "false");
    } else {
      array_push($this->check, "true");
    }
  }
  private function require($input_name = null, $custom_name_arabic = null)
  {
    foreach ($this->custom_name as $value) {
      $pos = strpos($value, ":");
      /*custom name */
      $name = substr($value, 0, $pos);
      /* origanl name */
      $custom_name = substr($value, $pos + 1);

      if ($name == $input_name) {
        $custom_name_arabic = $custom_name;
      }
    }

    if (in_array(strip_tags(htmlentities(trim(@$_POST[$input_name]))), $this->input_names)) {
      $input_value =  strip_tags(htmlentities(trim(@$_POST[$input_name])));
    }
    if (empty($input_value)) {
      if (isset($custom_name_arabic)) {
        array_push($this->masgs, ' Do not leave a field
        ' . $custom_name_arabic . ' ' . 'empty');
      } else {
        array_push($this->masgs, 'empty' . ' ' . $input_name . ' ' . '   Do not leave a field');
      }
      array_push($this->check, "false");
    } else {
      array_push($this->check, "true");
    }
  }
  private function url($input_name = null, $custom_name_arabic = null)
  {
    foreach ($this->custom_name as $value) {
      $pos = strpos($value, ":");
      /*custom name */
      $name = substr($value, 0, $pos);
      /* origanl name */
      $custom_name = substr($value, $pos + 1);

      if ($name == $input_name) {
        $custom_name_arabic = $custom_name;
      }
    }
    if (in_array(strip_tags(htmlentities(trim(@$_POST[$input_name]))), $this->input_names)) {
      $input_value =  strip_tags(htmlentities(trim($_POST[$input_name])));
    }
    if (!filter_var($input_value, FILTER_VALIDATE_URL)) {
      if (isset($custom_name_arabic)) {
        array_push($this->masgs, ' ' . $this->Messages['url-error'] . $custom_name_arabic);
      } else {
        array_push($this->masgs, $input_name . ' ' .  $this->Messages['url-error']);
      }
      array_push($this->check, "false");
    } else {
      array_push($this->check, "true");
    }
  }
  private function eng($input_name = null, $custom_name_arabic = null)
  {
    foreach ($this->custom_name as $value) {
      $pos = strpos($value, ":");
      /*custom name */
      $name = substr($value, 0, $pos);
      /* origanl name */
      $custom_name = substr($value, $pos + 1);

      if ($name == $input_name) {
        $custom_name_arabic = $custom_name;
      }
    }
    if (in_array(strip_tags(htmlentities(trim(@$_POST[$input_name]))), $this->input_names)) {
      $input_value =  strip_tags(htmlentities(trim($_POST[$input_name])));
    }
    $regex = '/^[a-zA-Z0-9$@$!%*?&#^-_. +]+$/';
    if (!preg_match($regex, $input_value)) {
      if (isset($custom_name_arabic)) {
        array_push($this->masgs, $this->Messages['eng-error'] . ' ' . $custom_name_arabic);
      } else {
        array_push($this->masgs, $input_name . ' ' . $this->Messages['eng-error']);
      }
      array_push($this->check, "false");
    } else {
      array_push($this->check, "true");
    }
  }
  private function email($input_name = null, $custom_name_arabic = null)
  {
    foreach ($this->custom_name as $value) {
      $pos = strpos($value, ":");
      /*custom name */
      $name = substr($value, 0, $pos);
      /* origanl name */
      $custom_name = substr($value, $pos + 1);

      if ($name == $input_name) {
        $custom_name_arabic = $custom_name;
      }
    }
    if (in_array(strip_tags(htmlentities(trim(@$_POST[$input_name]))), $this->input_names)) {
      $input_value =  strip_tags(htmlentities(trim($_POST[$input_name])));
    }
    $regex = '/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/';
    if (!preg_match($regex, $input_value)) {
      if (isset($custom_name_arabic)) {
        array_push($this->masgs, $this->Messages['email-error'] . ' ' . $custom_name_arabic);
      } else {
        array_push($this->masgs, $input_name . ' ' .  $this->Messages['email-error']);
      }
      array_push($this->check, "false");
    } else {
      array_push($this->check, "true");
    }
  }
  public  function errors_validate()
  {


    return $this->masgs;
  }

  public  function find_errors($errors_array)
  {
    $error =  $this->errors[] = $errors_array;

    $flag_false = array();
    $flag_true = array();
    $errors_array = array();

    for ($i = 0; $i < count($error); $i++) {
      if ($error[$i]  == "false") {
        array_push($flag_false, "false");
      } else {
        array_push($flag_true, "true");
      }
    }
    if ($flag_false != null) {
      return false;
    } else if ($flag_true != null) {
      return true;
    }

    //   return $this->chack_bool;
  }
};
