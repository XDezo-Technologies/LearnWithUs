@extends('layouts.main')
@section('content')
    <main>
        <section>
            {{-- slider --}}
            <div class="half-bg">
                <div class="image-section container pt-5">
                    @foreach ($abouts as $about)
                        <div class="image-wrapper">
                            <img src="{{ asset('uploads/' . $about->img) }}" alt="Image" class="img-fluid">
                        </div>

                        <div class="text-overlay">
                            <h2>{{ $about->title }}</h2>
                            <p>{{ $about->description }}</p>
                        </div>
                    @endforeach
                </div>
                @foreach ($aboutsFeatures as $aboutsFeature)
                    <div class="why-join-us mt-3">
                        <div class="container">
                            <h2 class="why-header">{{ $aboutsFeature->title }}</h2>
                            <p class="why-paragraph">{{ $aboutsFeature->description }}</p>
                        </div>
                    </div>
                    @if (!$loop->last)
                        <div class="container">
                            <hr>
                        </div>
                    @endif
                @endforeach
            </div>

            {{-- Why choose us --}}
            <div id="why-choose-us" class="py-5">
                <div class="container">
                    <h2 class="text-center mb-5">Why Choose Us?</h2>
                    @foreach ($settings as $set)
                        @if ($set->siteKey == 'whyChooseUsDesc')
                            <p class="lead text-center mb-5">{{ $set->siteValue }}</p>
                        @endif
                    @endforeach
                    <div class="row">
                        @foreach ($whyChooseUs as $why)
                            <div class="col-md-4 mb-4">
                                <div class="card about-card">
                                    <div class="card-img-top">
                                        {{-- <img src="https://via.placeholder.com/300x200" class="w-100 h-100" alt="Card image cap"> --}}
                                        <div class="about-card-icon"><i class="{{ $why->logo }}"></i></div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">{{ $why->title }}</h5>
                                        <p class="card-text mb-3">{{ $why->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div>
                        {{ $whyChooseUs->links() }}
                    </div>
                </div>
            </div>

        </section>


        {{-- slider ends --}}

    </main>

    {{-- <script>
        const toggleLinks = document.querySelectorAll(".card-toggle-link");

        toggleLinks.forEach((link) => {
            link.addEventListener("click", () => {
                const content = link.nextElementSibling;

                if (content.style.display === "block") {
                    content.style.display = "none";
                    link.innerText = "View More";
                } else {
                    content.style.display = "block";
                    link.innerText = "View Less";
                }
            });
        });
    </script> --}}
@endsection
