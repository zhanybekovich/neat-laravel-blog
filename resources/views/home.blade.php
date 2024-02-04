<x-app-layout :meta-title="$company->name" :meta-description="$company->description" :meta-img="$company->logo">

    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                @foreach($slides as $slide)
                    <li style="background-image: url('storage/{{$slide->image}}');">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                                    <div class="slider-text-inner">
                                        <h1>{{ $slide->title }}</h1>
                                        <h2>{{ $slide->text }}</h2>
                                        <p><a href="{{ $slide->url }}"
                                              class="btn btn-primary btn-learn">{{ $slide->link_text }}</a></p>
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

    <div id="fh5co-work" class="fh5co-light-grey">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>{{ $homePageSettings->portfolio_title }}</h2>
                <p>{{ $homePageSettings->portfolio_description }}</p>
            </div>
        </div>
        <div class="row">
            @foreach($works as $work)
                <div class="col-md-4 text-center animate-box">

                    <a href="work-single.html" class="work"
                       style="background-image: url('storage/{{ $work->image }}');">
                        <div class="desc">
                            <h3>{{ $work->title }}</h3>
                            <span>{{ $work->category->name }}</span>
                        </div>
                    </a>

                </div>
            @endforeach
        </div>
    </div>

    <div id="fh5co-counter" class="fh5co-counters">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center animate-box">
                <p>{{ $homePageSettings->statistic_text }}</p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <span class="fh5co-counter js-counter" data-from="0" data-to="{{ \App\Models\Service::count() }}" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Services</span>
                    </div>
                    <div class="col-md-3 text-center">
                        <span class="fh5co-counter js-counter" data-from="0" data-to="{{ \App\Models\Work::count() }}" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Projects</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
