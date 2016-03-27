# CodeIgniter-Trim-Slahes-Helper
 CodeIgniter helper to Remove any leading/trailing slashes from  url or a  string<br>
 #Usage
 <br>
 
1.Clone the repo and Save the file in your helpers directory<br>
2.Load the helper in your controller using the below code<br>
$this->load->helper('trim_slashes');<br>
3.Once you've loaded the Helper File containing the functions you can call the remove_url_slash or the trim_slashes function.<br>
$instancename = remove_url_slash();<br>
or<br>
$instancename = trim_slashes($str);
