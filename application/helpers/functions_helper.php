<?php

if ( ! function_exists('input') )
{
	function input ($inputName)
	{
		$CodeIgniter =& get_instance();
		return $CodeIgniter->input->post($inputName);
	}
}


if ( ! function_exists('get_var') )
{
	function get_var ($getName)
	{
		$CodeIgniter =& get_instance();
		return $CodeIgniter->input->get($getName);
	}
}


function dd($data)
{
	echo "<pre>";
		print_r($data);
	exit;
}


function asset($path)
{
	return base_url('public/' . $path);
}






