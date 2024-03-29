<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Sharing jQuery Plugin</title>
    <meta property="og:title" content="Social Sharing jQuery Plugin" />
    <meta property="og:image" content="https://repository-images.githubusercontent.com/536040293/db29118a-10d8-4a9f-9e5d-5a55bd972fd8" />
    <meta property="og:description" content="Social Sharing jQuery Plugin with font awesome icons" />
    <meta name="description" content="Social Sharing jQuery Plugin with font awesome icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/socialSharing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Menu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-12">
                <div class="bg-white p-3">
                    <h1 class="text-center">Social Sharing jQuery Plugin Script</h1>
                    <h2 class="text-center">Social JS not responsive</h2>
                    <div id="Demo1" class="d-flex align-items-center justify-content-center mb-5"></div>
                    <pre><code>$('#Demo1').socialSharingPlugin({
        url: window.location.href,
        title: $('meta[property="og:title"]').attr('content'),
        description: $('meta[property="og:description"]').attr('content'),
        img: $('meta[property="og:image"]').attr('content'),
        enable: ['copy', 'facebook', 'twitter', 'pinterest', 'linkedin']
});</code></pre>
                    <hr>
                    <h2 class="text-center">Social JS responsive</h2>
                    <p class="text-muted text-center">On mobile, the whole tab moves to the specified position on the screen</p>
                    <div id="Demo2" class="d-flex align-items-center justify-content-center mb-5"></div>
                    <pre><code>$('#Demo2').socialSharingPlugin({
        url: window.location.href,
        title: $('meta[property="og:title"]').attr('content'),
        description: $('meta[property="og:description"]').attr('content'),
        img: $('meta[property="og:image"]').attr('content'),
        responsive: true,
        enable: ['copy', 'facebook', 'twitter', 'pinterest', 'linkedin', 'reddit', 'stumbleupon', 'pocket', 'email', 'whatsapp']
    })</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('js/socialSharing.js') }}"></script>
<script type="text/javascript">

    $('#Demo1').socialSharingPlugin({
        url: window.location.href,
        title: $('meta[property="og:title"]').attr('content'),
        description: $('meta[property="og:description"]').attr('content'),
        img: $('meta[property="og:image"]').attr('content'),
        enable: ['copy', 'facebook', 'twitter', 'pinterest', 'linkedin']
    });

    $('#Demo2').socialSharingPlugin({
        url: window.location.href,
        title: $('meta[property="og:title"]').attr('content'),
        description: $('meta[property="og:description"]').attr('content'),
        img: $('meta[property="og:image"]').attr('content'),
        responsive: true,
        mobilePosition: 'left',
        enable: ['copy', 'facebook', 'twitter', 'pinterest', 'linkedin', 'reddit', 'stumbleupon', 'pocket', 'email', 'whatsapp']
    })
</script>
</body>
</html>
