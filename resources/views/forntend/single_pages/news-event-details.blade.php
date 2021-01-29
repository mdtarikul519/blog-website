@extends('forntend.layouts.master')
@section('content')
<!-- Banner Section -->
	<section class="banner_part">
		<img src="{{asset('frontend/image/banner.jpg')}}" style="width: 100%">
	</section>

	<!-- About us Section -->
	<section class="about_us">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 70%;">News and Events</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="{{('/upload/news_event_images/'.$news->image )}}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;">
					<p>Date: {{date('d-m-Y',strtotime($news->date))}}</p>
					<p>{{$news->short_title}}</p>
					<p style="text-align: justify;"> {{$news->long_title}}</p>
				</div>
			</div>
			</div>
		</div>
	</section>
@endsection