@extends('layouts.app')

@section('content')

    <div class="home-page">
        <x-home-hero/>
        <x-common.easy-steps/>
        <x-fast-car-products/>
        <x-why-get-funding/>
        <x-watch-loan-video/>
        <x-easy-cash-advantages/>
        {{-- <x-blog-posts/> --}}
        <x-customer-portal/>
        <x-user-testimonial/>
        <x-newsletter/>
        <x-home-blogs/>
    </div>

    <div class="modal fade" id="watchVideoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-js')
    <script>
        $(document).ready(function() {
            var videoSrc;
            $('.video-btn').click(function() {
                videoSrc = $('.video-btn').data( "src" );
            });
            
            $('#watchVideoModal').on('shown.bs.modal', function (e) {
                $("#video").attr('src',videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
            })

            $('#watchVideoModal').on('hide.bs.modal', function (e) {
                $("#video").attr('src',videoSrc);
            })
        });
    </script>
@endsection