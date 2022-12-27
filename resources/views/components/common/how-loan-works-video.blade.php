<div class="loan-left">
    <h4>{{ $message->hero_head }}</h4>
    <div class="loan-video">
        <iframe 
            src="{{ $message->video_url }}"
            width="100%" 
            height="100%" 
            allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;" 
            allowfullscreen="true"
            frameborder="0" 
            scrolling="no"
            id="stream-player">
        </iframe>
    </div>
    <p>
        {{ $message->hero_text }}
    </p>
    <a href="{{ route('application-form') }}" class="btn">
        {{ $message->hero_btn }}
    </a>
</div>