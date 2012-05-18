<?php
/*
Plugin Name: Advanced Search for a Webshop
Plugin URI: http://clair.ro
Description: Search by price, categories and tags all combined
Version: 0.1
Author: cs
Author URI: http://clair.ro
*/

/*  Copyright 2009 by cs  (email : cs@clair.ro)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



/* Extending the search query to support extra query variables*/
add_filter('query_vars', 'add_new_query_vars' );
function add_new_query_vars( $qvars )
{
  $qvars[] = 'comment';
  return $qvars;
}



?>
