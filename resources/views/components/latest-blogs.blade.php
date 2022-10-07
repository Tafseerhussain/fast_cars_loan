<div class="latest-blogs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section-title">
                    Latest From Our Blogs
                </h1>
            </div>
        </div>
        <div class="row blogs-row">
            @foreach ($blogs as $blog)
                <div class="col-lg-3 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{{ asset($blog->image) }}" alt="blog image">
                        </div>
                        <div class="blog-meta">
                            <a href="#" class="blog-title">
                                {{ $blog->title }}
                            </a>
                            <p>
                                {{ $blog->short_description }}
                            </p>
                            <a href="#!" class="blog-by d-flex justify-content-start">
                                <div class="blog-by-img">
                                    <img src="https://ui-avatars.com/api/?name=Admin&color=7F9CF5&background=EBF4FF" alt="author">
                                </div>
                                <div class="blog-by-text">
                                    <span class="name">Admin</span>
                                    <span class="date">{{ $blog->created_at->format('M d, Y') }}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>