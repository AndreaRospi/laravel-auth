@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista Posts</div>
               
                <div class="card-body">
                    <form action="{{route("posts.store")}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="title">Titolo</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo del post" value="{{old('title')}}">
                        </div>
                        @error('title')
                        <div class="alert-alert-danger">
                            <div>{{$message}}</div>    
                        </div>
                        @enderror
                        <div class="form-group">
                            <label for="content">Contenuto</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="6" placeholder="Inserisci il contenuto">{{old('content')}}</textarea>
                        </div>
                        @error('content')
                        <div class="alert-alert-danger">
                            <div>{{$message}}</div>    
                        </div>
                        @enderror
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input @error('content') is-invalid @enderror" id="published" name="published" {{old('published') ? 'checked' : ''}}>
                            <label class="form-check-lable" for="published">Pubblica</label>    
                        </div>
                        @error('published')
                        <div class="alert alert-danger">
                            <div>{{$message}}</div>    
                        </div>
                        @enderror
                        <button type="submit" class="btn btn-primary">Crea</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection