@extends('layouts.app')

@section('content')
	
	<div class="all-blogs-page">
		
		{{-- BLOGS HEADER --}}
		<div class="blogs-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="blog-header">
							<h1 class="section-title">
								Blogs & News
							</h1>
							<p>
								Discover all posts from our blog
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		@livewire('blogs.all-blogs')

	</div>

@endsection