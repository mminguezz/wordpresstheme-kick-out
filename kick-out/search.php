<?php
/*
Template Name: Search Page
*
* @package kick-out
*/
global $wp_query;
get_header();

$term = $wp_query->query_vars;
_e('Hi kick-out, search', "TEXT_DOMAIN");
get_search_form();

get_footer();
?>
