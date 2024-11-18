@extends('welcome')
@section('content')

<div class="card-body mt-3">

    <div class="row" id="content_list">
    </div>

    <div class="w-100 d-flex justify-content-center">
        <div class="row col-md-8" id="reddit_content_detail">
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>

    $(document).ready(function() {
        getAllReddits()
    })

    function getAllReddits()
    {
        const currentUrl = window.location.href;

        $.ajax({
            url: currentUrl + "api/get_all_reddits",
            type: "GET",
            success: (response) => {
                $('#reddit_content_detail').empty();

                let contentList = '';

                $.each(response.reddits, (index, element) => {
                    contentList += contentListReddits(element); 
                });

                $('#content_list').empty().append(contentList);

            },
            error: (xhr, status, error) => {
                Swal.fire({
                    icon: "error",
                    title: "Error en la solicitud",
                    text: "Hubo un problema al obtener los datos.",
                });
            }
        });

    }

    function contentListReddits(element)
    {
        let iconImg = element.appearance.icon_img != null ? element.appearance.icon_img : "{{asset('image/reddit_home.png')}}"
        return `<div class="col-md-3 mb-4">
                <div class="card h-100 shadow-lg">
                    <div class="card-body text-center">
                        <img src="${iconImg}" 
                                class="rounded-circle border border-primary p-2 mb-3"
                                style="width: 80px; height: 80px; object-fit: cover;" 
                                alt="Subreddit Logo">
                        <h5 class="text-primary mb-2">${element.display_name}</h5>
                        <p class="mb-1 text-muted"><i class="fas fa-users"></i> Suscriptores: <strong>${element.subscribers}</strong></p>
                        <p class="mb-0 text-muted"><i class="fas fa-calendar-alt"></i> Creado: <strong>${element.created}</strong></p>
                        <button onclick="getReddit(${element.id})" id="list_reddit" class="btn btn-sm btn-rounded mt-5">VER DETALLE</button>
                    </div>
                </div>
            </div>`
    }

    function getReddit(idReddit)
    {
        const currentUrl = window.location.href;

        $.ajax({
            url: currentUrl + "api/get_reddit/" + idReddit,
            type: "GET",
            success: (response) => {

                $('#content_list').empty();

                let redditContent = detailReddit(response.reddit);

                $('#reddit_content_detail').empty().append(redditContent);
            },
            error: (xhr, status, error) => {
                Swal.fire({
                    icon: "error",
                    title: "Error en la solicitud",
                    text: "Hubo un problema al obtener los datos.",
                });
            }
        });

    }

    function detailReddit(reddit) {
        let iconImg = reddit.appearance.icon_img != null ? reddit.appearance.icon_img : "{{asset('image/reddit_home.png')}}"
        let bannerImg = reddit.appearance.banner_img != null ? reddit.appearance.banner_img : "{{asset('image/reddit_home.png')}}"
        return `
        <div class="card h-100 shadow-lg">
        <div class="text-center mt-3 mb-5">
            <div>
                <img src="${iconImg}" 
                        class="rounded-circle border border-primary p-2 mb-3"
                        style="width: 80px; height: 80px; object-fit: cover;" 
                        alt="Subreddit Logo">
                <h5 class="text-primary mb-2">AskReddit</h5>
                <p class="mb-1 text-muted"><i class="fas fa-users"></i> Suscriptores: <strong>${reddit.subscribers}</strong></p>
                <p class="mb-0 text-muted"><i class="fas fa-calendar-alt"></i> Creado: <strong>${reddit.created}</strong></p>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-md-3">
                <p class="mb-1"><i class="fas fa-users"></i> Permitir Videos:</p>
                <p class="mb-1 text-muted"><i class="fas fa-users"></i><strong>
                    ${reddit.feature.allow_videos ? "SI" : "NO"}
                </strong></p>
            </div>
            <div class="col-md-3">
                <p class="mb-1"><i class="fas fa-users"></i> Permitir Galería:</p>
                <p class="mb-1 text-muted"><i class="fas fa-users"></i><strong>
                    ${reddit.feature.allow_galleries ? "SI" : "NO"}
                </strong></p>
            </div>
            <div class="col-md-3">
                <p class="mb-1"><i class="fas fa-users"></i> Espóiler Habilitado:</p>
                <p class="mb-1 text-muted"><i class="fas fa-users"></i><strong>
                    ${reddit.feature.spoilers_enabled ? "SI" : "NO"}
                </strong></p>
            </div>
            <div class="col-md-3">
                <p class="mb-1"><i class="fas fa-users"></i> Emojis Habilitado:</p>
                <p class="mb-1 text-muted"><i class="fas fa-users"></i><strong>
                    ${reddit.feature.emojis_enabled ? "SI" : "NO"}
                </strong></p>
            </div>
            <div class="col-md-3">
                <p class="mb-1"><i class="fas fa-users"></i> Permitir Encuesta:</p>
                <p class="mb-1 text-muted"><i class="fas fa-users"></i><strong>
                    ${reddit.feature.allow_polls ? "SI" : "NO"}
                </strong></p>
            </div>
            <div class="col-md-3">
                <p class="mb-1"><i class="fas fa-users"></i> Tipo de Envío:</p>
                <p class="mb-1 text-muted"><i class="fas fa-users"></i><strong>${reddit.feature.submission_type}</strong></p>
            </div>
            <div class="col-md-3">
                <p class="mb-1"><i class="fas fa-users"></i> Color Primario:</p>
                <div style="width: 60px; height: 15px; background:${reddit.appearance.primary_color}">
                    ${reddit.appearance.primary_color == null ? 'Sin Color' : ''}
                </div>
            </div>
            <div class="col-md-3">
                <p class="mb-1"><i class="fas fa-users"></i> Color Clave:</p>
                <div style="width: 60px; height: 15px; background:${reddit.appearance.key_color}">
                    ${reddit.appearance.key_color == null ? 'Sin Color' : ''}
                </div>
            </div>
            <div class="col-md-3">
                <p class="mb-1"><i class="fas fa-users"></i> Imagen de Pancarta:</p>
                <img src="${bannerImg}" 
                        class="rounded-circle border border-primary p-2 mb-3"
                        style="width: 80px; height: 80px; object-fit: cover;" 
                        alt="Subreddit Logo">
            </div>
        </div>
        <div class="text-center">
            <button onclick="returnHome()" class="btn btn-rounded mb-5" id="return_button">IR ATRAS</button>
        </div>
        
    </div>`
    }

    function returnHome()
    {
        window.location.reload();
    }


</script>
@endsection