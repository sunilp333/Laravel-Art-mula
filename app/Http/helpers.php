<?php
//====****CREATE UNIQUE URL EVERY TIME****====//
if(!function_exists('Art_UrlSlug'))
{
  function Art_UrlSlug($string,$table,$field,$key=NULL,$value=NULL)
  {    	
    $slug   = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    $slug   = strtolower($slug);  
    $params = array ();    
	$i      = 1;

	$params[$field]            = $slug; 
    if($key)$params["$key !="] = $value;

    if($key != NULL && $value != NULL && is_numeric($value))
	{
	  $users  = DB::table($table)->where($field, $string)->where('id', '!=' , $value)->count('id');
	}
	else
	{		
	  $users  = DB::table($table)->where($field, $string)->count('id');
	}
	 
    while ($i <= $users)
    {	  
        if (!preg_match ('/-{1}[0-9]+$/', $slug ))
            $slug .= '-' . ++$i;
        else
            $slug = preg_replace ('/[0-9]+$/', ++$i, $slug );
         
        $params [$field] = $slug;
	}  
    return $slug;  
  }
}
