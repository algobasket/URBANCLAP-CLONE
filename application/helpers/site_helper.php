<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Outputs an array in a user-readable JSON format
 *
 * @param array $array
 */
if ( ! function_exists('status'))
{
    function status($statusId)
    {
      $ci = get_instance();
      $ci->load->model('users_model');
      return $ci->users_model->status($statusId);
    }
}

if ( ! function_exists('bankName'))
{
    function bankName($bankId)
    {
      $ci = get_instance();
      $ci->load->model('users_model');
      return $ci->users_model->bankName($bankId);
    }
}

if ( ! function_exists('states'))
{
    function states()
    {
      // return array(
      // "Auvergne",
      // "Baden-Wurttemberg",
      // "Bavaria",
      // "Bayern",
      // "Beilstein Wurtt",
      // "Berlin",
      // "Brandenburg",
      // "Bremen",
      // "Dreisbach",
      // "Freistaat Bayern",
      // "Hamburg",
      // "Hannover",
      // "Heroldstatt",
      // "Hessen",
      // "Kortenberg",
      // "Laasdorf",
      // "Land Baden-Wurttemberg",
      // "Land Bayern",
      // "Land Brandenburg",
      // "Land Hessen",
      // "Land Mecklenburg-Vorpommern",
      // "Land Nordrhein-Westfalen",
      // "Land Rheinland-Pfalz",
      // "Land Sachsen",
      // "Land Sachsen-Anhalt",
      // "Land Thuringen",
      // "Lower Saxony",
      // "Mecklenburg-Vorpommern",
      // "Mulfingen",
      // "Munich",
      // "Neubeuern",
      // "Niedersachsen",
      // "Noord-Holland",
      // "Nordrhein-Westfalen",
      // "North Rhine-Westphalia",
      // "Osterode",
      // "Rheinland-Pfalz",
      // "Rhineland-Palatinate",
      // "Saarland",
      // "Sachsen",
      // "Sachsen-Anhalt",
      // "Saxony",
      // "Schleswig-Holstein",
      // "Thuringia",
      // "Webling",
      // "Weinstrabe",
      // "schlobborn"
      // );
      return array(
      "Benin",
      "Burkina-Faso",
      "Cape-Verde",
      "Ivory-Coast",
      "Gambia",
      "Ghana",
      "Guinea",
      "Guinea-Bissau",
      "Liberia",
      "Mali",
      "Mauritania",
      "Niger",
      "Nigeria",
      "Senegal", 
      "Sierra-Leone",
      "Togo"
      );
    }
}



?>
