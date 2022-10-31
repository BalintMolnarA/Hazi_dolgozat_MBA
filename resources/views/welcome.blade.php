
@extends('layouts.master')
@section('title',"első")

@section('content')
   
    <div class="container bg-dark text-white rounded p-3 mx-auto">
        <div class="row">
            <div class="col-6">
                <form method="_POST">
                    @csrf
                    <h1 >Adatok:</h1>
                    <div class="my-3">
                    <label for="vnev">Vezetéknév:</label><input type="text" name="vnev" id="vnev" class="form-control text-center" ></div>
                    <div class="my-3">
                    <label for="knev">Keresztnév:</label> <input type="text" name="knev" id="knev" class="form-control text-center"></div>
                    <div class="my-3">
                    <label for="szul">Születési év:</label><input type="date" name="szul" id="szul" class="form-control text-center"></div>
                    <div class="col-md-12 text-center"><button type="submit" class="btn btn-rounded btn-primary form-control" >Beküld</button></div>
                </form>
            </div>
        </div>
    </div>

@endsection