@extends('layouts.app')

@section('title', 'Home')

@section('styles')
    
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">   
            <h2>Loja Online - Produtos</h2>
        </div>
        @if(count($products) == 0)
            <div class="col-lg-10">   
                <h3>Não há produtos cadastrados.</h2>
            </div>
        @endif
        <div class="col-lg-2"></div>
    </div>

    {{--grid de produtos inicio--}}
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                               <img src="{{$product->image_b64}}" style="width:150px;height:150px;" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    R$ {{$product->price}}
                                </span>
                                <small class="text-muted">{{$product->category}}</small>
                                <a href="#" class="product-name"> {{$product->name}}</a>

                                <div class="small m-t-xs">
                                    {{$product->description}}
                                </div>
                                <div class="m-t text-righ">
                                    <div class="row" style="margin-bottom:10px;">
                                        <a href="#" class="btn btn-xs btn-outline btn-success">Info <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                    
                                    @if(Auth::user() != null)
                                        <div class="row">
                                            <a href="{{route('product.edit', $product->id)}}" class="btn btn-xs btn-outline btn-primary" style="margin-right:10px;">
                                                Editar <i class="fa fa-edit"></i> 
                                            </a>
                                            <form action="{{route('product.delete', $product->id)}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                
                                                <a onclick="deletar(this)"  title="Deletar" class="btn btn-xs btn-outline btn-danger">
                                                    Deletar <i class="fa fa-trash" style="color:red;"></i> 
                                                </a>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{--grid de produtos fim--}}
@endsection
@section('scripts')

<script>
    function deletar(e){
        swal({
            title: "Você tem certeza?",
            text: "Esta ação não poderá ser desfeita!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            cancelButtonText: "Cancelar",
            confirmButtonText: "Sim, delete!",
            closeOnConfirm: false
        }, function () {
            e.closest('form').submit();
        });
    };
    
    @if(session()->has('created')) swal('Sucesso', 'Produto cadastrado com sucesso!', 'success'); @endif
    @if(session()->has('deleted')) swal('Sucesso', 'Produto deletado com sucesso!', 'success'); @endif
    @if(session()->has('updated')) swal('Sucesso', 'Produto atualizado com sucesso!', 'success'); @endif
    
</script>
    
@endsection
