@extends("master")

@section('blog-custom-css')
    <link type="text/css" href="{{ asset('binshops-blog.css') }}" rel="stylesheet">
@endsection

@section('mimeta')
	<title>{{ $post->title }}</title>
 	<link href="{{ asset('blog_images').'/'.$post->image_thumbnail }}" rel="icon">
	<meta property="og:url"                content="http://cmt.gob.bo/blog/{{ $post->slug }}" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="{{ $post->title }}" />
	<meta property="og:description"        content="{{ $post->short_description }}" />
	<meta property="og:image"              content="{{ asset('blog_images').'/'.$post->image_medium }}" />
@endsection

@section('css')
	<style>
#Demo2 a {
  display: block;
  font-size: 42px;
  padding: 10px;
}
	</style>
@endsection
@section("content")

    @if(config("binshopsblog.reading_progress_bar"))
        <div id="scrollbar">
            <div id="scrollbar-bg"></div>
        </div>
    @endif

	<br />
	<br />
    <div class='container mt-5'>
    <div class='row'>
        <div class='col-sm-8'>
            @include("binshopsblog::partials.show_errors")
            @include("binshopsblog::partials.full_post_details")
        </div>
        <div class='col-sm-4'>
    	<h3 class='text-center'>Comparte en tus RRSS</h3>
		<div id="Demo2" class="align-items-center justify-content-center"></div>
            @if(config("binshopsblog.comments.type_of_comments_to_show","built_in") !== 'disabled')
                <div class="" id='maincommentscontainer'>
                    <h2 class='text-center' id='BinshopsBlogcomments'>Comentarios</h2>
                    @include("binshopsblog::partials.show_comments")
                </div>
            @else
                {{--Comments are disabled--}}
            @endif
        </div>
    </div>
    </div>

@endsection

@section('blog-custom-js')
    <script src="{{asset('binshops-blog.js')}}"></script>
@endsection
@section('javascript')            
     <script>
	    $('#Demo2').socialSharingPlugin({
        url: window.location.href,
        title: $('meta[property="og:title"]').attr('content'),
        description: $('meta[property="og:description"]').attr('content'),
        img: $('meta[property="og:image"]').attr('content'),
        enable: ['copy', 'facebook', 'twitter', 'pinterest', 'linkedin']
    });
  </script>
  @endsection