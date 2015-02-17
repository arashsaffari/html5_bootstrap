@extends('layouts.layout1.page')
@extends('layouts.layout1.body_header')
@extends('layouts.layout1.body_footer')

<?php
	
	$header_site_title 		= "MySite";
	$header_page_title 		= "Home";
	$header_meta_robots		= "index,follow";
	$header_meta_desc 		= "this is a meta description";
	$header_meta_author 	= "IamAuthor";
	$header_meta_keywords	= "this, is, all, my, keywords";

	//$body_class				= "myclass";
	//$body_id				= "top";
	//$body_onload			= "javascript:alert('test');";

?>
@section('header_metas_custom')@stop
@section('header_style_custom')@stop
@section('body_js_custom')@stop
@section('body_last_custom')@stop


@section('body_content')

	<div class="container clearfix margin_bottom_xxl">
	    <div class="row">
	        <div class="col-md-12">
	            <h1><span class="icon-close_custom1"></span> Content</h1>
	        </div>
	        <div class="col-md-1">col1</div>
	        <div class="col-md-1">col2</div>
	        <div class="col-md-1">col3</div>
	        <div class="col-md-1">col4</div>
	        <div class="col-md-1">col5</div>
	        <div class="col-md-1">col6</div>
	        <div class="col-md-1">col7</div>
	        <div class="col-md-1">col8</div>
	        <div class="col-md-1">col9</div>
	        <div class="col-md-1">col10</div>
	        <div class="col-md-1">col11</div>
	        <div class="col-md-1">col12</div>
	    </div>
	    <div class="col-md-12">
	    <hr/>
	    </div>
	</div>
@stop


