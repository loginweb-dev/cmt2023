@extends("master",['title'=>$title])

@section('mimeta')
	<title>{{ setting('site.title') }}</title>
 	<link href="{{ asset('storage').'/blogs/Blog-Hosting-Conectemos.png' }}" rel="icon">
	<meta property="og:url"                content="http://cmt.gob.bo/blog" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="{{ setting('site.title') }}" />
	<meta property="og:description"        content="Visita nuestro blog para enterarte de nuestro trabajo en favor del municipio" />
	<meta property="og:image"              content="{{ asset('storage').'/blogs/Blog-Hosting-Conectemos.png' }}" />
@endsection

@section('blog-custom-css')
    <link type="text/css" href="{{ asset('binshops-blog.css') }}" rel="stylesheet">
@endsection

@section("content")
	<br>
	<br>
    <div class='container-fluid mt-5'>
        @if(\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts())
            <div class="text-center">
                <p class='mb-1'>You are logged in as a blog admin user.
                    <br>
                    <a href='{{route("binshopsblog.admin.index")}}'
                       class='btn border  btn-outline-primary btn-sm '>
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        Ir a Blog Admin Panel</a>
                </p>
            </div>
        @endif

        <div class="row">
            <div class="col-sm-8">

                @if($category_chain)
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                @forelse($category_chain as $cat)
                                    / <a href="{{$cat->url()}}">
                                        <span class="cat1">{{$cat->category_name}}</span>
                                    </a>
                                @empty @endforelse
                            </div>
                        </div>
                    </div>
                @endif

                @if(isset($BinshopsBlog_category) && $BinshopsBlog_category)
                    <h2 class='text-center'> {{$BinshopsBlog_category->category_name}}</h2>

                    @if($BinshopsBlog_category->category_description)
                        <p class='text-center'>{{$BinshopsBlog_category->category_description}}</p>
                    @endif

                @endif

                <div class="container">
                    <div class="row">
                        @forelse($posts as $post)
                            @include("binshopsblog::partials.index_loop")
                        @empty
                            <div class="col-md-12">
                                <div class='alert alert-danger'>No posts!</div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
        		@if (config('binshopsblog.search.search_enabled') )
            		@include('binshopsblog::sitewide.search_form')
        		@endif

                <h6>Blog Categories</h6>
                @forelse($categories as $category)
                    <a href="{{$category->url()}}">
                        <h6>{{$category->category_name}}</h6>
                    </a>
                @empty
                    <a href="#">
                        <h6>No Categorias</h6>
                    </a>
                @endforelse

            </div>
        </div>

        <div class='text-center  col-sm-4 mx-auto'>
            {{$posts->appends( [] )->links()}}
        </div>
    </div>

@endsection
