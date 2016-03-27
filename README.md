# CodeIgniter-Trim-Slahes-Helper
 CodeIgniter helper to Remove any leading/trailing slashes from  url or a  string
 #Usage
1  Clone the repo and Save the file in your helpers directory
2  Load the helper in your controller using the below code
$this->load->helper('trim_slashes');
3.Once you've loaded the Helper File containing the functions you can call the remove_url_slash or the trim_slashes function.
$instancename = remove_url_slash();
or
$instancename = trim_slashes($str);
