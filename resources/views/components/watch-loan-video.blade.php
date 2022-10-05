<div class="watch-video">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="watch-left">
                    <h1 class="section-title">
                        {{ $video->video_heading }}
                    </h1>
                    <p>
                        {{ $video->video_text_one }}
                    </p>
                    <p>
                        {{ $video->video_text_two }}
                    </p>
                    <a href="#" class="btn">
                        Apply for Loan
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="watch-right position-relative">
                    <img src="{{ asset('img/home/watch-video-border.png') }}" alt="watch video text" class="watch-video-border w-100">
                    <img src="{{ asset($video->video_image) }}" alt="watch video" class="watch-video">
                    <a href="#!" class="play-btn video-btn" data-bs-toggle="modal" data-bs-target="#watchVideoModal" data-src="{{ $video->video_link }}">
                        <img src="{{ asset('img/home/watch-video-btn.png') }}" alt="play button">
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>