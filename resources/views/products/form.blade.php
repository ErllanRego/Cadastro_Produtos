<div class="row">
    <div class="col-lg-6">
        <label class="col-lg-6 col-form-label">Nome</label>
        <div class="col-lg-12">
            <input type="text" name="name" placeholder="" value="{{@$product->name}}" class="form-control">
        </div>
    </div>
    <div class="col-lg-6">
        <label class="col-lg-6 col-form-label">Preço</label>
        <div class="col-lg-12">
            <input type="text" name="price" placeholder="" value="{{@$product->price}}" class="form-control money">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <label class="col-lg-12 col-form-label">Imagem do produto</label>
        <div class="col-lg-12">
            <input type="file" accept="image/png, image/jpeg" name="image" placeholder="" value="" class="form-control">
        </div>
    </div>
</div>
<div class="row" style="margin: 10px 0px;">
    <label class="col-lg-12 col-form-label">Categoria do produto</label>
    <div class="col">
        <select name="category_id" class="select2_demo_1 form-control">
            <option selected disabled>Selecione...</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}" {{$category->id == @$product->category_id ? 'selected' : ''}}>
                    {{$category->name}}
                </option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <label class="col-lg-2 col-form-label">Descrição</label>
        <div class="col">
            <textarea name="description" class="form-control" rows="3">{{@$product->description}}</textarea>
        </div>
    </div>
</div>