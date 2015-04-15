<?php

/**
* Return url to gravatar img
*
* @param email
* @return URL
*/
function gravatar_link($email)
{

	return  "//www.gravatar.com/avatar/".md5($email)."?s=35";
	
}