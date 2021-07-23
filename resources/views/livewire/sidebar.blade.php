<aside>
    <div class="sidearea">
        <label for="pricerange">Highest Price:
            <span> ₦{{ $pricerange ?? 7000 }}</span>
        </label>
        <input wire:model.debounce.500ms="pricerange" id="pricerange" type="range" min="{{ $min }}" max="{{ $max }}"
            step="500" value="{{$pricerange}}" class="slider">
            <span class="min">₦{{ $min }}</span>
            <span class="max">₦{{ $max }}</span>
        </div>
    <div class="sidearea">
        <h4>Only Show Sale Items</h4>
        <div class="can-toggle demo-rebrand-2">
            <input wire:click.prefetch="toggleSale" id="e" type="checkbox">
            <label for="e">
                <div data-checked="Yes" data-unchecked="No" class="can-toggle__switch"></div>
            </label>
        </div>
    </div>
</aside>