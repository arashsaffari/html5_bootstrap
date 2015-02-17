<!doctype html>
<html class="no-js" lang="">
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

    {!! HTML::style('files/general/plugins/bootstrap/3.3.2/css/bootstrap.min.css') !!}
    {!! HTML::style('files/general/plugins/bootstrap/3.3.2/css/bootstrap-theme.min.css') !!}

    {!! HTML::style('files/general/fonts/icomoon/style.css') !!}

    @yield('header_style_custom')
    
    {!! HTML::style('files/general/css/base.css') !!}
    <!--[if IE 8]>
        {{ HTML::style('files/general/css/style-ie8.css') }}
        {{ HTML::script('files/general/js/files/js/respond_IE6-8.js') }}
    <![endif]-->
    

    <link rel="apple-touch-icon" href="apple-touch-icon-precomposed.png"/>
    <link rel="icon" href="favicon.ico">
    
    {!! HTML::style('apple-touch-icon-precomposed.png',array('media'=>null,'type'=>null,'rel'=>'apple-touch-icon')) !!}
    {!! HTML::style('favicon.ico',array('media'=>null,'type'=>null,'rel'=>'icon')) !!}

    @yield('header_last_custom')

    {!! HTML::script('files/general/js/modernizr-2.8.3.min.js') !!}
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

    {!! HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js') !!}
    <script>window.jQuery || document.write('<script src="{{ asset('files/general/js/jquery-1.11.2.min.js') }}"><\/script>')</script>
    
    {!! HTML::script('files/general/plugins/bootstrap/3.3.2/js/bootstrap.min.js') !!}
    
    @yield('body_js_custom')

    {!! HTML::script('files/general/js/settings.js') !!}
    
    @yield('body_last_custom')

</body>  
</html>

