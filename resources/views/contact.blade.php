@extends('layout')

@section('content')
   
<div id="wrapper">
	<div id="featured-wrapper">
	
		<div class="extra2 container">
	

			@foreach( $articles as $article)
				<div class="ebox2">
					<div class="hexagon">{{$article->id}}</div>
					<div class="title">
						<h2>{{$article->title}}</h2>
						<!--span class="byline">Integer sit amet pede vel arcu aliquet pretium</span-->
					</div>
					<p>{{$article->excerpt}}</p>
				<a href="articles/{{$article->id}}" class="button">more</a>
				</div>		

			@endforeach


		</div>	

	</div>
</div>
<div id="stamp" class="container">
	<div class="hexagon"><span class="icon icon-wrench"></span></div>
</div>


@endsection