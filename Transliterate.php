<?php

namespace App\Services\Lang;

class Transliterate
{
  /**
   * * Nextlogistic Transliterate class
     *
     * Copyright (C) 2023 - 2023  Tihomir Blazhev.
     *
     * LICENSE
     *
     * Nextlogistic Transliterate class is released with dual licensing, using the GPL v3 (license-gpl3.txt) and the MIT license (license-mit.txt).
     * You don't have to do anything special to choose one license or the other and you don't have to notify anyone which license you are using.
     * Please see the corresponding license file for details of these licenses.
     * You are free to use, modify and distribute this software, but all copyright information must remain.
     *
     * @package     ecommerce-cms
     * @copyright   Copyright (c) 2023 through 2023, Tihomir Blazhev
     * @license     http://opensource.org/licenses/MIT  MIT License
     * @version     1.0.0
     * @author      Tihomir Blazhev <tblajev@gnextlogistic.eu>
   */


  /**
   * Method transliterate
   *
   * @param string $textcyr $textcyr cyrilic text
   * @param string $textlat $textlat lat text
   *   
   */
  public static function transliterate($textcyr = null, $textlat = null)
  {
    $cyr = array(
      'а', 'б', 'в', 'г', 'д', 'e', 'ж', 'з',  'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ь', 'ю', 'я',
      'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ж', 'З',  'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ь', 'Ю', 'Я'
    );
    $lat = array(
      'a', 'b', 'v', 'g', 'd', 'e', 'zh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h','ts','ch','sh','sht','a', 'y', 'yu', 'ya',
      'A', 'B', 'V', 'G', 'D', 'E', 'Zh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'n', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H','Ts','Ch','Sh','Sht','A', 'Y', 'Yu', 'Ya',
    );
    if ($textcyr)
      return str_replace($cyr, $lat, $textcyr);
    else if ($textlat)
      return str_replace($lat, $cyr, $textlat);
    else
      return null;
  }
}
