@props(['product'])
<div class="card-sm-2">
    <div class="card-body">
        <img
            src="{{$product['image_url']}}"
            alt=""
            class="card-body-img"
        />
    </div>
    <div class="card-foot">
        <h4 class="card-name">{{$product->name}}</h4>
        <h5 class="card-price">{{$product->price}}</h5>
        <form wire:submit="order({{$product->id}})">
            <a href="#" class="btn-links">
                <button class="btn-content pr">Add to cart</button>
            </a>
        </form>
    </div>
</div>

