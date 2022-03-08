<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2006, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Pagination Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Pagination
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/pagination.html
 */
class CI_Pagination {

	var $base_url			= ''; // The page we are linking to
	var $total_rows  		= ''; // Total number of items (database results)
	var $per_page	 		= 10; // Max number of items you want shown per page
	var $num_links			=  2; // Number of "digit" links to show before/after the currently viewed page
	var $cur_page	 		=  0; // The current page being viewed
	var $first_link   		= '&lsaquo; First';
	var $next_link			= '&gt;';
	var $prev_link			= '&lt;';
	var $last_link			= 'Last &rsaquo;';
	var $uri_segment		= 3;
	var $full_tag_open		= '';
	var $full_tag_close		= '';
	var $first_tag_open		= '<div class="button2-right" title="Trang đầu"><div class="start">';
	var $first_tag_close	= '</div></div>';
	var $last_tag_open		= '<div class="button2-left" title="Trang cuối"><div class="end">';
	var $last_tag_close		= '</div></div>';
	var $cur_tag_open		= '<span>';
	var $cur_tag_close		= '</span>';
	var $next_tag_open		= '<div class="button2-left" title="Trang kế"><div class="next">';
	var $next_tag_close		= '</div></div>';
	var $prev_tag_open		= '<div class="button2-right" title="Trang trước"><div class="prev">';
	var $prev_tag_close		= '</div></div>';
	var $class_off			= 'off';
	var $num_tag_open		= '';
	var $num_tag_close		= '';
	var $first_tag_page		= '<div class="button2-left"><div class="page">';
	var $last_tag_page		= '</div></div>';
	var $page_query_string	= FALSE;
	var $query_string_segment = 'per_page';
	var $from 				= 0;
	var $to 				= 0;

	/**
	 * Constructor
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 */
	function CI_Pagination($params = array())
	{
		if (count($params) > 0)
		{
			$this->initialize($params);		
		}
		
		log_message('debug', "Pagination Class Initialized");
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Initialize Preferences
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 * @return	void
	 */
	function initialize($params = array())
	{
		if (count($params) > 0)
		{
			foreach ($params as $key => $val)
			{
				if (isset($this->$key))
				{
					$this->$key = $val;
				}
			}		
		}
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Generate the pagination links
	 *
	 * @access	public
	 * @return	string
	 */	
	function create_links($cur_page=0)
	{
		// If our item count or per-page total is zero there is no need to continue.
		if ($this->total_rows == 0 OR $this->per_page == 0)
		{
		   return '';
		}

		// Calculate the total number of pages
		$num_pages = ceil($this->total_rows / $this->per_page);
		//echo $num_pages;
		// Is there only one page? Hm... nothing more to do here then.
		/*if ($num_pages == 1)
		{
			return '';
		}*/


		
		//// Determine the current page number.		
		$CI =& get_instance();
			
		// Prep the current page - no funny business!
		$this->cur_page = (int)$cur_page; //$this->cur_page;
		
		
		$this->num_links = (int)$this->num_links;

		if ($this->num_links < 1)
		{
			show_error('Your number of links must be a positive number.');
		}
				
		if ( ! is_numeric($this->cur_page))
		{
			$this->cur_page = 0;
		}
		
		// Is the page number beyond the result range?
		// If so we show the last page
		if ($this->cur_page > $this->total_rows)
		{
			$this->cur_page = ($num_pages - 1) * $this->per_page;
		}
		
		$uri_page_number = $this->cur_page;
		$this->cur_page = floor(($this->cur_page/$this->per_page) +1);

		// Calculate the start and end numbers. These determine
		// which number to start and end the digit links with
		$start = (($this->cur_page - $this->num_links) > 0) ? $this->cur_page - ($this->num_links - 1) : 1;
		$end   = (($this->cur_page + $this->num_links) < $num_pages) ? $this->cur_page + $this->num_links : $num_pages;

		// Is pagination being used over GET or POST?  If get, add a per_page query
		// string. If post, add a trailing slash to the base URL if needed
		if ($CI->config->item('enable_query_strings') === TRUE OR $this->page_query_string === TRUE)
		{
			$this->base_url = rtrim($this->base_url).AMP.$this->query_string_segment.'=';
		}
		else
		{
			$this->base_url = rtrim($this->base_url, '/');
		}
		
		$output = '';
		
		if($num_pages>3)
		{	
			if  ($this->cur_page != 1)
			{
				$output .= $this->first_tag_open.'<a href="javascript:void(0);" name="0">'.$this->first_link.'</a>'.$this->first_tag_close;
			}
			else
			{
				$healthy = array("button2-right");
				$yummy   = array("button2-right ".$this->class_off);
				$output .=  str_replace($healthy, $yummy, $this->first_tag_open).'<span>'.$this->first_link.'</span>'.$this->first_tag_close;
			}
		}
		// Render the "previous" link
		if  ($this->cur_page != 1)
		{
			$i = $uri_page_number - $this->per_page;
			$output .= $this->prev_tag_open.'<a href="javascript:void(0);" name="'.$i.'">'.$this->prev_link.'</a>'.$this->prev_tag_close;
		}
		else
		{
			$healthy = array("button2-right");
			$yummy   = array("button2-right ".$this->class_off);
			$output .=  str_replace($healthy, $yummy, $this->prev_tag_open).'<span>'.$this->prev_link.'</span>'.$this->first_tag_close;
		}
		
		$output .=$this->first_tag_page;
		// Write the digit links
		for ($loop = $start -1; $loop <= $end; $loop++)
		{
			$i = ($loop * $this->per_page) - $this->per_page;
					
			if ($i >= 0)
			{
				if ($this->cur_page == $loop)
				{
					$output .= $this->cur_tag_open.$loop.$this->cur_tag_close; // Current page
				}
				else
				{
					$output .= $this->num_tag_open.'<a href="javascript:void(0);" title="Page '.$loop.'" name="'.$i.'">'.$loop.'</a>'.$this->num_tag_close;
				}
			}
		}
		$output.=$this->last_tag_page;
		// Render the "next" link
		if ($this->cur_page < $num_pages)
		{
			$output .= $this->next_tag_open.'<a href="javascript:void(0);" name="'.($this->cur_page * $this->per_page).'">'.$this->next_link.'</a>'.$this->next_tag_close;
		}
		else
		{
			$healthy = array("button2-left");
			$yummy   = array("button2-left ".$this->class_off);
			$output .=  str_replace($healthy, $yummy, $this->next_tag_open).'<span>'.$this->next_link.'</span>'.$this->first_tag_close;
		}
		// Render the "Last" link
		if($num_pages>3)
		{
			if ($this->cur_page < $num_pages)
			{

				$i = (($num_pages * $this->per_page) - $this->per_page);
				$output .= $this->last_tag_open.'<a href="javascript:void(0);" name="'.$i.'">'.$this->last_link.'</a>'.$this->last_tag_close;
			}
			else
			{
				$healthy = array("button2-left");
				$yummy   = array("button2-left ".$this->class_off);
				$output .=  str_replace($healthy, $yummy, $this->last_tag_open).'<span>'.$this->last_link.'</span>'.$this->first_tag_close;
			}
		}
		$this->from = (($this->cur_page - 1) * $this->per_page ) + 1;
		$this->to = ($this->from + $this->per_page - 1) < $this->total_rows ? ($this->from + $this->per_page - 1) : $this->total_rows;
		$output .= '<span class="fright" style="margin-left:20px;">Show '.$this->from.' <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> '.$this->to.' / '.$this->total_rows.'</span>';
		// Kill double slashes.  Note: Sometimes we can end up with a double slash
		// in the penultimate link so we'll kill all double slashes.
		$output = preg_replace("#([^:])//+#", "\\1/", $output);
		
		// Add the wrapper HTML if exists
		$output = $this->full_tag_open.$output.$this->full_tag_close ;
		
		return $output;			
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Generate the pagination links
	 *
	 * @access	public
	 * @return	string
	 */	
	function create_site_links($cur_page=0)
	{
		// If our item count or per-page total is zero there is no need to continue.
		if ($this->total_rows == 0 OR $this->per_page == 0)
		{
		   return '';
		}

		// Calculate the total number of pages
		$num_pages = ceil($this->total_rows / $this->per_page);
		//echo $num_pages;
		// Is there only one page? Hm... nothing more to do here then.
		if ($num_pages == 1)
		{
			return '';
		}
		
		//// Determine the current page number.		
		$CI =& get_instance();
			
		// Prep the current page - no funny business!
		$this->cur_page = (int)$cur_page; //$this->cur_page;

		
		$this->num_links = (int)$this->num_links;

		if ($this->num_links < 1)
		{
			show_error('Your number of links must be a positive number.');
		}
				
		if ( ! is_numeric($this->cur_page))
		{
			$this->cur_page = 0;
		}
		
		// Is the page number beyond the result range?
		// If so we show the last page
		if ($this->cur_page > $this->total_rows)
		{
			$this->cur_page = ($num_pages - 1) * $this->per_page;
		}
		
		$uri_page_number = $this->cur_page;
		$this->cur_page = floor(($this->cur_page/$this->per_page) +1);

		// Calculate the start and end numbers. These determine
		// which number to start and end the digit links with
		$start = (($this->cur_page - $this->num_links) > 0) ? $this->cur_page - ($this->num_links - 1) : 1;
		$end   = (($this->cur_page + $this->num_links) < $num_pages) ? $this->cur_page + $this->num_links : $num_pages;

		
		
		// And here we go...
		$output = '';

		// Render the "First" link
		if  ($this->cur_page > ($this->num_links + 1))
		{
			$output .= $this->first_tag_open.'<a href="'.$this->base_url.'">'.$this->first_link.'</a>&nbsp;&nbsp;...'.$this->first_tag_close;
		}

		

		// Write the digit links
		for ($loop = $start -1; $loop <= $end; $loop++)
		{
			$i = ($loop * $this->per_page) - $this->per_page;

			if ($i >= 0)
			{
				if ($this->cur_page == $loop)
				{
					$output .= $this->cur_tag_open.$loop.$this->cur_tag_close; // Current page
				}
				else
				{
					$n = ($i == 0) ? url_suffix() : '/'.$i.url_suffix();
					$output .= $this->num_tag_open.'<a href="'.$this->base_url.$n.'">'.$loop.'</a>'.$this->num_tag_close;
				}
			}
		}

		

		// Render the "Last" link
		if (($this->cur_page + $this->num_links) < $num_pages)
		{
			$i = (($num_pages * $this->per_page) - $this->per_page);
			$output .= $this->last_tag_open.'...&nbsp;&nbsp;<a href="'.$this->base_url.'/'.$i.url_suffix().'">'.$this->last_link.'</a>'.$this->last_tag_close;
		}

		// Kill double slashes.  Note: Sometimes we can end up with a double slash
		// in the penultimate link so we'll kill all double slashes.
		$output = preg_replace("#([^:])//+#", "\\1/", $output);

		// Add the wrapper HTML if exists
		$output = $this->full_tag_open.$output.$this->full_tag_close;

		return $output;		
	}
	
	/*function create_site_links($cur_page=0)
	{
		// If our item count or per-page total is zero there is no need to continue.
		if ($this->total_rows == 0 OR $this->per_page == 0)
		{
		   return '';
		}

		// Calculate the total number of pages
		$num_pages = ceil($this->total_rows / $this->per_page);
		//echo $num_pages;
		// Is there only one page? Hm... nothing more to do here then.
		if ($num_pages == 1)
		{
			return '';
		}
		
		//// Determine the current page number.		
		$CI =& get_instance();
			
		// Prep the current page - no funny business!
		$this->cur_page = (int)$cur_page; //$this->cur_page;

		
		$this->num_links = (int)$this->num_links;

		if ($this->num_links < 1)
		{
			show_error('Your number of links must be a positive number.');
		}
				
		if ( ! is_numeric($this->cur_page))
		{
			$this->cur_page = 0;
		}
		
		// Is the page number beyond the result range?
		// If so we show the last page
		if ($this->cur_page > $this->total_rows)
		{
			$this->cur_page = ($num_pages - 1) * $this->per_page;
		}
		
		$uri_page_number = $this->cur_page;
		$this->cur_page = floor(($this->cur_page/$this->per_page) +1);

		// Calculate the start and end numbers. These determine
		// which number to start and end the digit links with
		$start = (($this->cur_page - $this->num_links) > 0) ? $this->cur_page - ($this->num_links - 1) : 1;
		$end   = (($this->cur_page + $this->num_links) < $num_pages) ? $this->cur_page + $this->num_links : $num_pages;

		// Is pagination being used over GET or POST?  If get, add a per_page query
		// string. If post, add a trailing slash to the base URL if needed
		if ($CI->config->item('enable_query_strings') === TRUE OR $this->page_query_string === TRUE)
		{
			$this->base_url = rtrim($this->base_url).AMP.$this->query_string_segment.'=';
		}
		//else
		//{
			///$this->base_url = rtrim($this->base_url;// rtrim($this->base_url, '/');
		//}
		
		// And here we go...
		$output = '';

		// Render the "First" link
		if  ($this->cur_page > ($this->num_links + 1))
		{
			$output .= $this->first_tag_open.'<a href="'.$this->base_url.'">'.$this->first_link.'</a>'.$this->first_tag_close;
		}

		// Render the "previous" link
		if  ($this->cur_page != 1)
		{
			$i = $uri_page_number - $this->per_page;
			if ($i == 0) $i = '';
			$output .= $this->prev_tag_open.'<a href="'.$this->base_url.$i.'">'.$this->prev_link.'</a>'.$this->prev_tag_close;
		}

		// Write the digit links
		for ($loop = $start -1; $loop <= $end; $loop++)
		{
			$i = ($loop * $this->per_page) - $this->per_page;

			if ($i >= 0)
			{
				if ($this->cur_page == $loop)
				{
					$output .= $this->cur_tag_open.$loop.$this->cur_tag_close; // Current page
				}
				else
				{
					$n = ($i == 0) ? '' : $i;
					$output .= $this->num_tag_open.'<a href="'.$this->base_url.$n.'">'.$loop.'</a>'.$this->num_tag_close;
				}
			}
		}

		// Render the "next" link
		if ($this->cur_page < $num_pages)
		{
			$output .= $this->next_tag_open.'<a href="'.$this->base_url.($this->cur_page * $this->per_page).'">'.$this->next_link.'</a>'.$this->next_tag_close;
		}

		// Render the "Last" link
		if (($this->cur_page + $this->num_links) < $num_pages)
		{
			$i = (($num_pages * $this->per_page) - $this->per_page);
			$output .= $this->last_tag_open.'<a href="'.$this->base_url.$i.'">'.$this->last_link.'</a>'.$this->last_tag_close;
		}

		// Kill double slashes.  Note: Sometimes we can end up with a double slash
		// in the penultimate link so we'll kill all double slashes.
		$output = preg_replace("#([^:])//+#", "\\1/", $output);

		// Add the wrapper HTML if exists
		$output = $this->full_tag_open.$output.$this->full_tag_close;

		return $output;		
	}*/
}
// END Pagination Class

/* End of file Pagination.php */
/* Location: ./system/libraries/Pagination.php */