<div class="col-sm-6">
    <div class="blog-item">
		<a href='{{$post->url()}}'>
        <div class='text-center'>
			@if($post->video)
				<video style="width: 100% !important; height: auto !important;" src="{{ asset('blog_images').'/'.$post->video }}" controls></video>
        	@else
        		<img src="{{ asset('blog_images').'/'.$post->image_main }}" class="img-fluid" alt="Responsive image">
			@endif
		</div>
        <div class="blog-inner-item text-center mt-2">
            <h5 class=''  style='color: black;'>{{$post->title}}</h5>
            <h6 class=''  style='color: black;'>{{$post->subtitle}}</h6>
			{{--
            <div class="post-details-bottom"  style='color: black;'>
                <span class="">Escrito por: </span> {{$post->author->name}} <span class="">Publicado en: </span> {{date('d M Y ', strtotime($post->posted_at))}}
            </div>
            <div class='text-center'>
                <a href="{{$post->url()}}" class="btn btn-success btn-block">Ver Noticias</a>
            </div>
            --}}
        </div>
        </a>
    </div>
</div>