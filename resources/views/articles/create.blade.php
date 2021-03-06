@extends('layout')

@section('head')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css'>
@endsection

@section('content')
   
<div id="wrapper">
	<div id="featured-wrapper">
    
    <form method="POST" action="{{url('/articles')}}">
        @csrf
            <div class="extra2 container">
                <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

                <div class='field'>
                    <label class='label' for='title'>Title</label>
                
                    <div class='control'>
                    {{-- <input class='input {{$errors->has('title')? 'is-danger':''}}' type='title' name='title' id='title'> --}}
                    <input class="input @error('title') is-danger @enderror" 
                    type='title' 
                    name='title' 
                    id='title'
                    value="{{old('title')}}">
                        {{-- @if($errors->has('title'))
                            <p class="help is-danger">{{$errors->first('title')}}</p>
                        @endif --}}
                        @error('title')
                            <p class="help is-danger">{{$errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>
                
                <div class='field'>
                    <label class='label' for='excerpt'>Excerpt</label>
                
                    <div class='control'>
                        <textarea class="textarea @error('excerpt') is-danger @enderror" name='excerpt' id='excerpt'>{{old('excerpt')}}</textarea>
                        @error('excerpt')
                            <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>
                </div>
                <div class='field'>
                    <label class='label' for='body'>Body</label>
                
                    <div class='control'>
                        <textarea class="textarea  @error('body') is-danger @enderror" name='body' id=''>{{old('body')}}</textarea>
                        @error('body')
                            <p class="help is-danger">{{$errors->first('body')}}</p>
                        @enderror
                    </div>
                </div>
                <div class='field is-grouped'>
                    <div class='control'>
                        <button class='button is-Link' type='submit'>Submit Article</button>
                    </div>
                </div>    
		    </div>
        </form>
                    

	</div>
</div>
<div id="stamp" class="container">
	<div class="hexagon"><span class="icon icon-wrench"></span></div>
</div>


@endsection