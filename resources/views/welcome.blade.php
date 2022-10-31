
@extends('layouts.master')
@section('title',"első")

@section('content')
   
    <div class="container bg-dark text-white rounded p-3 mx-auto">
        <div class="row">
            <div class="col-6">
                <form method="POST">
                    @if(session()->get('kesz'))
                        <div class="alert alert-success">
                            {{session()->get('kesz')}}
                        </div>
                    @csrf
                    <h1 >Adatok:</h1>
                    <div class="my-3">
                    <label for="vnev">Vezetéknév:</label><input type="text" name="vnev" id="vnev" class="form-control text-center " value="{{old('vnev')}}" >
                    @error('vnev')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div class="my-3">
                    <label for="knev">Keresztnév:</label> <input type="text" name="knev" id="knev" class="form-control text-center"value="{{old('knev')}}">
                
                    @error('knev')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                     @enderror
                    </div>
                    <div class="my-3">
                    <label for="szul">Születési év:</label><input type="date" name="szul" id="szul" class="form-control text-center"value="{{old('szul')}}">
                        
                    @error('szul')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                     @enderror
                    
                    </div>
                    <div><button type="submit" class="btn btn-primary ">Bekuldes</button></div>
                </form>
            </div>
        </div>
    </div>

@endsection