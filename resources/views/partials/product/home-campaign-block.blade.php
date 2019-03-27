@foreach($products as $product)
    <div class="box-hover-border">
        <div class="box-product">
            <a href="{{ route('products.show-by-slug', ['slug' => $product['slug']]) }}" title="{{ $product['name'] }}"
               onclick="gaOnProductWasClicked(this, {{ $product['id'] }}, '{{ env('GA_HOME_CAMPAIGN_LIST') }}'); return !ga.loaded;"
            >
                <div class="thumb-product">
                    <img src="{{ $product['thumbnail'] }}" class="img-responsive">
                </div>
            </a>
            <div class="text-detail2">
                <div class="text-pd-name">
                    <a href="{{ route('products.show-by-slug', ['slug' => $product['slug']]) }}" title="{{ $product['name'] }}"
                       onclick="gaOnProductWasClicked(this, {{ $product['id'] }}, '{{ env('GA_HOME_CAMPAIGN_LIST') }}'); return !ga.loaded;"
                    >
                        {{ $product['name'] }}
                    </a>
                </div>
                <div class="text-pd">
                    {{ trans('frontend.product_code') }} {{ $product['item_id'] }}
                </div>
                <div class="text-pd-red">
                    {{ number_format($product['price'], 2) }} ฿
                </div>

                @if ($product['price'] < $product['normal_price'])
                    <div class="text-pd">
                        <strike>{{ number_format($product['normal_price'], 2) }} ฿</strike>
                    </div>
                @endif

                {{--<div class="text-pd">
                        {{ trans('frontend.available_amount_items', ['amount' => $product['stock']]) }}
                    </div>--}}

                <div class="text-pd">
                    {{ trans('frontend.avg_price_per_unit', ['unit_name' => $product['unit_name'], 'price' => number_format($product['average_price_per_unit'], 2)]) }}
                </div>


            </div>
            <div class="box-b-cw">
                <div class="box-b-cart pull-left">
                    <add-to-cart-button :button_type="2" product="{!! htmlspecialchars(json_encode($product)) !!}"></add-to-cart-button>
                </div>
                <div class="box-b-wishlist pull-right">
                    <add-to-wish-list-button product="{!! htmlspecialchars(json_encode($product)) !!}"></add-to-wish-list-button>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        @if (! empty($product['ribbon']))
            <div class="ribbon-status">
                @if ($product['ribbon']['type'] == 'static')
                    <img src="{{ $product['ribbon']['image']['medium'] }}" width="55">
                @endif
            </div>
        @endif
    </div>
@endforeach