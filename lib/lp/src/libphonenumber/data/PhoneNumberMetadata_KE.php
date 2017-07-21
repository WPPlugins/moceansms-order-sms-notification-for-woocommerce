<?php
/**
 * This file is automatically @generated by {@link BuildMetadataPHPFromXml}.
 * Please don't modify it directly.
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '
          20\\d{6,7}|
          [4-9]\\d{6,9}
        ',
    'PossibleNumberPattern' => '\\d{7,10}',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '
          20\\d{6,7}|
          4(?:
            [0136]\\d{7}|
            [245]\\d{5,7}
          )|
          5(?:
            [08]\\d{7}|
            [1-79]\\d{5,7}
          )|
          6(?:
            [01457-9]\\d{5,7}|
            [26]\\d{7}
          )
        ',
    'PossibleNumberPattern' => '\\d{7,9}',
    'ExampleNumber' => '202012345',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '
          7(?:
            [0-36]\\d|
            5[0-6]|
            7[0-5]|
            8[0-25-9]|
            9[0-4]
          )\\d{6}
        ',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '712123456',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '800[24-8]\\d{5,6}',
    'PossibleNumberPattern' => '\\d{9,10}',
    'ExampleNumber' => '800223456',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '900[02-9]\\d{5}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '900223456',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'id' => 'KE',
  'countryCode' => 254,
  'internationalPrefix' => '000',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '(\\d{2})(\\d{5,7})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' => 
      array (
        0 => '[24-6]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    1 => 
    array (
      'pattern' => '(\\d{3})(\\d{6})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' => 
      array (
        0 => '7',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    2 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{3,4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '[89]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => true,
);
