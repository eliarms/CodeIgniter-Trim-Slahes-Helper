/**
 * Trim Slashes
 *
 * Simple CodeIgniter helper to Remove any leading/trailing slashes from  url or a  string:
 *
 * /eliason/armstrong/emmanuel/
 *
 * becomes:
 *
 * /eliason/armstrong/emmanuel
 *
 * @access	public
 * @param	string
 * @return	string
 */


<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// check if the url has a leading slashes , if yes remove the leading slashes and redirect the user to the correct url

if ( ! function_exists('remove_url_slash')){
  	   function remove_url_slash(){
       //get main CodeIgniter object
       $ci =& get_instance();
       
       //load url helper
       $ci->load->helper('url');
       $url =current_url();

     
       $str = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
       
       if (substr($str, -1)=='/'){

    	$url =  rtrim($str,"/");
    	
    	redirect($url, 'refresh');
     
}


   }
}

if ( ! function_exists('trim_slashes'))
{
	function trim_slashes($str)
	{
		return trim($str, '/');
	}
}