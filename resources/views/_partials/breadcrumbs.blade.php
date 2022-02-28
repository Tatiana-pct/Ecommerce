@if ($breadcrumbs)
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>{{end($breadcrumbs)->title}}</h1>
                    @foreach($breadcrumbs as $breadcrumb)
                        @if(!$breadcrumb->last)
                            <a href="{{$breadcrumb->url}}">{{$breadcrumb->title}}</a><i class="fas fa-arrow-right mx-2"></i>
                        @else
                        <a class="active" >{{$breadcrumb->title}}</a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif