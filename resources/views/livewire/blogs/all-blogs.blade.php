<div class="all-blogs">
    <div class="container">
        <div class="row blog-filters">
            {{-- RECENT BLOGS --}}
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="blogFilter1" checked
                    wire:click="updateFilter('recent')">
                    <label class="form-check-label" for="blogFilter1">
                        Recent Posts
                    </label>
                </div>
            </div>
            {{-- OLD BLOGS --}}
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="blogFilter" 
                    wire:click="updateFilter('old')">
                    <label class="form-check-label" for="blogFilter">
                        Oldest Posts
                    </label>
                </div>
            </div>
            {{-- RANDOM BLOGS --}}
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="blogFilter2"
                    wire:click="updateFilter('random')">
                    <label class="form-check-label" for="blogFilter2">
                        Random Posts
                    </label>
                </div>
            </div>
        </div>

        {{-- BLOGS --}}
        <div class="rows blog-cards">
            <div class="col-12">
                @foreach ($blogs as $blog)
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="{{ asset('img/blog/all-blog.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-meta">
                            <h1 class="blog-title">
                                {{ $blog->title }}
                            </h1>
                            <p>
                                {{ $blog->short_description }}
                            </p>
                            <a href="#">Read More <img src="{{ asset('icons/right-arrow-green.svg') }}" alt="right arrow"></a>
                        </div>
                    </div>
                @endforeach
                <div wire:loading>
                    Loading...
                </div>
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</div>