@extends("master",['title'=>"Saved comment"])
@section("content")

<br>
<br>
    <div class='text-center mt-5'>
        <h3>¡Gracias! ¡Tu comentario ha sido guardado!</h3>

        @if(!config("binshopsblog.comments.auto_approve_comments",false) )
            <p>>Después de que un usuario administrador apruebe el comentario, ¡aparecerá en el sitio!</p>
        @endif

        <a href='{{$blog_post->url()}}' class='btn btn-success'>Volver al blog post</a>
    </div>

@endsection