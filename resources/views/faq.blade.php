@extends('layouts.app')

@section('content')

	<div class="faq-page">
		<div class="faq-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-8">
						<h1 class="section-title text-white">
							Frequently Asked Questions
						</h1>
						<p class="text-white opacity-50">
							We are here to help. If the answer to your question is not listed below,
						</p>
					</div>
				</div>
			</div>
		</div>
		<x-faq.faqs :faqs="$faqs"/>
	</div>

@endsection