<?php

function theme_asset_complete_uri($path)
{
	return get_stylesheet_directory_uri() . '/' . $path;
}

function theme_asset_complete_path($path)
{
	return get_template_directory() . '/' . $path;
}
