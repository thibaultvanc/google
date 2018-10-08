<?php


namespace Organit\Google;

/**
 *
 */
class Google
{
    public function __construct()
    {
        // Parent::__construct();
    // dd('$a' );
    }

    public static function organization($id=null)
    {
        return new Organization($id);
    }
    //
  // public static function contacts($id=null)
  // {
  //   return new Contact($id);
  // }
  //
  // public static function payments($id=null)
  // {
  //   return new Payment($id);
  // }

  //
  // public static function invoices($id=null)
  // {
  //   return new Invoice($id);
  // }
}
