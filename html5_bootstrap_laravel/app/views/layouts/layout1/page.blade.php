<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">  
    
    <title>@if(isset($header_page_title)){{$header_page_title}} | @endif{{$header_site_title}}</title>

    <base href="{{ asset('') }}" />

    @if(isset($header_meta_robots))<meta name="robots" content="{{$header_meta_robots}}">@endif

    @if(isset($header_meta_desc))<meta name="description" content="{{$header_meta_desc}}">@endif

    @if(isset($header_meta_author))<meta name="author" content="{{$header_meta_author}}">@endif

    @if(isset($header_meta_keywords))<meta name="keywords" content="{{$header_meta_keywords}}">@endif
    
    @yield('header_metas_custom')

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="{{$header_site_title}}">

    {{ HTML::style('files/general/plugins/bootstrap/3.2.0/css/bootstrap.min.css') }}
    {{ HTML::style('files/general/plugins/bootstrap/3.2.0/css/bootstrap-theme.min.css') }}

    {{ HTML::style('files/general/fonts/icomoon/style.css') }}

    @yield('header_style_custom')
    
    {{ HTML::style('files/general/css/style.css') }}
    {{ HTML::style('files/general/css/responsive.css') }}
    {{ HTML::script('files/general/js/modernizr.2.7.1.js') }}
    <!--[if IE 8]>
        {{ HTML::style('files/general/css/style-ie8.css') }}
        {{ HTML::script('files/general/js/files/js/respond_IE6-8.js') }}
    <![endif]-->

    {{ HTML::style('files/general/img/favicon/favicon.ico',array('media'=>null,'type'=>null,'rel'=>'shortcut icon')) }}

    {{ HTML::style('files/general/img/favicon/apple-touch-icon-152x152.png',array('sizes'=>'152x152', 'rel'=>'apple-touch-icon', 'media'=>null, 'type'=>null)) }}
    {{ HTML::style('files/general/img/favicon/apple-touch-icon-144x144.png',array('sizes'=>'144x144', 'rel'=>'apple-touch-icon', 'media'=>null, 'type'=>null)) }}
    {{ HTML::style('files/general/img/favicon/apple-touch-icon-120x120.png',array('sizes'=>'120x120', 'rel'=>'apple-touch-icon', 'media'=>null, 'type'=>null)) }}
    {{ HTML::style('files/general/img/favicon/apple-touch-icon-114x114.png',array('sizes'=>'114x114', 'rel'=>'apple-touch-icon', 'media'=>null, 'type'=>null)) }}
    {{ HTML::style('files/general/img/favicon/apple-touch-icon-76x76.png',array('sizes'=>'76x76', 'rel'=>'apple-touch-icon', 'media'=>null, 'type'=>null)) }}
    {{ HTML::style('files/general/img/favicon/apple-touch-icon-72x72.png',array('sizes'=>'72x72', 'rel'=>'apple-touch-icon', 'media'=>null, 'type'=>null)) }}
    {{ HTML::style('files/general/img/favicon/apple-touch-icon-57x57.png',array('sizes'=>'57x57', 'rel'=>'apple-touch-icon', 'media'=>null, 'type'=>null)) }}

    {{ HTML::style('files/general/img/startup/apple-touch-startup-image-1536x2008.png',array('rel'=>'apple-touch-startup-image', 'media'=>'(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)', 'type'=>null)) }}
    {{ HTML::style('files/general/img/startup/apple-touch-startup-image-1496x2048.png',array('rel'=>'apple-touch-startup-image', 'media'=>'(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)', 'type'=>null)) }}
    {{ HTML::style('files/general/img/startup/apple-touch-startup-image-768x1004.png',array('rel'=>'apple-touch-startup-image', 'media'=>'(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)', 'type'=>null)) }}

    {{ HTML::style('files/general/img/startup/apple-touch-startup-image-748x1024.png',array('rel'=>'apple-touch-startup-image', 'media'=>'(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)', 'type'=>null)) }}
    {{ HTML::style('files/general/img/startup/apple-touch-startup-image-640x1096.png',array('rel'=>'apple-touch-startup-image', 'media'=>'(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)', 'type'=>null)) }}
    {{ HTML::style('files/general/img/startup/apple-touch-startup-image-640x920.png',array('rel'=>'apple-touch-startup-image', 'media'=>'(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)', 'type'=>null)) }}
    {{ HTML::style('files/general/img/startup/apple-touch-startup-image-320x460.png',array('rel'=>'apple-touch-startup-image', 'media'=>'(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)', 'type'=>null)) }}
    
    @yield('header_last_custom')
</head>  

<body @if(isset($body_id))id="{{$body_id}}"@endif class="@if(isset($body_class)){{$body_class}}@endif"@if(isset($body_onload)) onload="{{$body_onload}}"@endif>

    @yield('body_header_before')
    <header>
        @yield('body_header')
    </header>
    @yield('body_header_after')



    @yield('body_content_before')
    <div class="content">
        @yield('body_content')
    </div>
    @yield('body_content_after')



    @yield('body_footer_before')
    <footer>
        @yield('body_footer')
    </footer>
    @yield('body_footer_after')

    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}
    <script>window.jQuery || document.write('<script src="{{ asset('files/general/js/jquery-1.11.1.min.js') }}"><\/script>')</script>
    
    {{ HTML::script('files/general/plugins/bootstrap/3.2.0/js/bootstrap.min.js')}}
    
    @yield('body_js_custom')

    {{ HTML::script('files/general/js/settings.js')}}
    
    @yield('body_last_custom')

</body>  
</html>

