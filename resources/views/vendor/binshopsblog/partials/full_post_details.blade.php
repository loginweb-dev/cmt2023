@if(\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts())
    <a href="{{$post->edit_url()}}" class="btn btn-outline-secondary btn-sm pull-right float-right">Editar
        Post</a>
@endif

<h1 class='blog_title'>{{$post->title}}</h1>
<h5 class='blog_subtitle'>{{$post->subtitle}}</h5>

@if($post->video)
	<div class="text-center">
		<video  style="width: 100% !important; height: auto !important;" allowfullscreen="allowfullscreen" src="{{ asset('blog_images').'/'.$post->video }}" controls="controls"></video>
	</div>
@else
	<img src="{{ asset('blog_images').'/'.$post->image_main }}" class="img-fluid" alt="Responsive image">
@endif
<p class="blog_body_content">
    {!! $post->post_body_output() !!}

    {{--@if(config("binshopsblog.use_custom_view_files")  && $post->use_view_file)--}}
    {{--                                // use a custom blade file for the output of those blog post--}}
    {{--   @include("binshopsblog::partials.use_view_file")--}}
    {{--@else--}}
    {{--   {!! $post->post_body !!}        // unsafe, echoing the plain html/js--}}
    {{--   {{ $post->post_body }}          // for safe escaping --}}
    {{--@endif--}}
</p>

<hr/>

Posteado <strong>{{$post->posted_at->diffForHumans()}}</strong>

@includeWhen($post->author,"binshopsblog::partials.author",['post'=>$post])
@includeWhen($post->categories,"binshopsblog::partials.categories",['post'=>$post])
