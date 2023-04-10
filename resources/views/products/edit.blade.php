@extends('layouts.app')

@section('title', 'Editar Produto')

@section('styles')
    <link href="{!! asset('css/plugins/select2/select2.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/select2/select2-bootstrap4.min.css') !!}" rel="stylesheet">
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">   
            <h2>Editar Produto</h2>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <form action="{{route('product.update', $product->id)}}" class="form-validar" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-content">
                            {{csrf_field()}}
                            {{method_field("PUT")}}
                            @include('products.form')
                            <div class="col-lg-12" style="margin-top:20px;">
                                <div class="row" style="text-align:center;justify-content:center">
                                    <div class="col-2">
                                        <a href="{{route('home')}}">
                                            <button type="button" class="btn btn-outline btn-danger btn-lg">Cancelar</button>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-outline btn-primary btn-lg">Editar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    {{--Jquery mask--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script src="{!! asset('js/plugins/select2/select2.full.min.js') !!}"></script>

    <script>
        $(document).ready(function(){

            $('.money').mask('000.000.000.000.000,00', {reverse: true});

            $(".select2_demo_1").select2({
                theme: 'bootstrap4',
            });

        });

    </script>

    
    
    
    
@endsection
