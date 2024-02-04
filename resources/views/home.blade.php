<x-app-layout :meta-title="$company->name" :meta-description="$company->description" :meta-img="$company->logo">

    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                @foreach($slides as $slide)
                <li style="background-image: url(images/img_bg_1.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                                <div class="slider-text-inner">
                                    <h1>{{ $slide->title }}</h1>
                                    <h2>{{ $slide->text }}</h2>
                                    <p><a href="{{ $slide->url }}" class="btn btn-primary btn-learn">{{ $slide->link_text }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </aside>

    <div id="fh5co-services">
        <div class="row">
            @foreach($services as $service)
                <div class="col-md-4 text-center animate-box">
                    <div class="services" style="background-image: url('storage/{{ $service->icon }}')">
                        <div class="desc">
                            <h3><a href="#">{{ $service->name }}</a></h3>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</x-app-layout>
