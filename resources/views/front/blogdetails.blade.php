<?php
    use App\Models\Setting;
    $Setting = Setting::first();
?>
@include('front.header')
	<div class="bg-image page-title" style="padding:200px 0 100px;">
				<div class="container-fluid">
					<a href="#"><h1>Blog</h1></a>
					<div class="pull-right">
						<a href="{{url('/')}}"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="10_blog.html">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="{{url('blog')}}">Blog</a>
					</div>
				</div>
			</div>

			<div class="container-fluid block-content">
				<div class="row main-grid">
					<div class="col-sm-9 posts">
						<div class="single-post">
							<div class="wow fadeInUp" data-wow-delay="0.3s">
								<img src="{{ url('assets/img') }}/{{ $blogs->image }}" alt="Img">
								<div class="post-info">
									<span>{{date('m-d-Y',strtotime($blogs->created_at))}}</span>
								</div>
								<h1>{{ $blogs->title }}</h1>
								<div class="post-content">
									<p>{!! $blogs->description !!}</p>
								</div>
							</div>
						</div>
						
					</div>
					<div class="col-sm-3">
						<div class="sidebar-container">
							<div class="recent-posts wow slideInUp" data-wow-delay="0.3s">
								<h4>Recent posts</h4>
								@foreach($blog as $key => $value)
								<div>
									<img style="width:80px;height: 80px;" src="{{ url('assets/img') }}/{{ $value->image }}" alt="Img">
									<a href="{{url('blogdetails', ['slug_title' => $value->slug_title])}}">{!! Str::limit($value->title, 30) !!}</a>
									<span>{{date('m-d-Y',strtotime($value->created_at))}}</span>
								</div>
								@endforeach
							</div>
						</div>
					</div>                	
				</div>            
			</div>
@include('front.footer')