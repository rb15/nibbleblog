<?php

/*
 * Nibbleblog -
 * http://www.nibbleblog.com
 * Author Diego Najar

 * All Nibbleblog code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
*/

class Url {

	public static function category($slug, $friendly=false)
	{
		if($friendly)
		{
			return HTML_PATH_ROOT.'category/'.$slug.'/';
		}
		else
		{
			return HTML_PATH_ROOT.'index.php?controller=blog&action=view&category='.$slug;
		}
	}

	public static function tag($slug, $friendly=false)
	{
		if($friendly)
		{
			return HTML_PATH_ROOT.'tag/'.$slug.'/';
		}
		else
		{
			return HTML_PATH_ROOT.'index.php?controller=blog&action=view&tag='.$slug;
		}
	}

	public static function post($post, $translit=false, $friendly=false)
	{
		if($friendly)
		{
			return HTML_PATH_ROOT.'post/'.$post['slug'].'/';
		}
		else
		{
			return HTML_PATH_ROOT.'index.php?controller=post&action=view&id_post='.$post['id'];
		}
	}

	public static function page($page, $translit=false, $friendly=false)
	{
		if($friendly)
		{
			return HTML_PATH_ROOT.'page/'.$page['slug'].'/';
		}
		else
		{
			return HTML_PATH_ROOT.'index.php?controller=page&action=view&id_page='.$page['id'];
		}
	}

}

?>