<div>
    <section>
        <div class="jumbotron">
            <div class="link">
                <a href="{{route('index')}}" class="link index-link">
                    <h4 class="index">Home</h4>
                </a>
                >
                <a href="#" class="link about-link">
                    <h4 class="about">Shop</h4>
                </a>
            </div>
            <h1 class="page-title">Products</h1>
        </div>
    </section>
    @include('components._partials.shop_aside')
    <main>
        <article>
            <!-- PRODUCT CARD -->
            <div class="product-card">
                <!-- CARD -->
                @include('components._partials.item_card')
            </div>
            <div class="pagination">
                <ul class="pagin">
                    <li class="pagin-list">
                        <a href="#" class="pagin-link active">1</a>
                    </li>
                    <li class="pagin-list">
                        <a href="#" class="pagin-link">2</a>
                    </li>
                </ul>
            </div>
        </article>
    </main>
</div>
<script>
    const priceRangeEl = document.querySelector(
        "input[type=range]#price-range"
    );
    const minPriceEl = document.querySelector("h4#min-price-value");
    const maxPriceEl = document.querySelector("h4#max-price-value");
    console.log(priceRangeEl);
    priceRangeEl.addEventListener("change", () => {
        minPriceEl.innerText = `$${priceRangeEl.value}`;
    });
</script>
