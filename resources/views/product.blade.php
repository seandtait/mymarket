<x-layout>
    <x-slot name="content">
        <div class="row mb-3">
            <x-response-header />
        </div>
        <div class="row mb-3">
            <div class="col-md-12 col-lg-4 themed-grid-col">
                {{-- Actions --}}
                <br />
                {{-- Show Add or Edit --}}
                @if(isset($editProduct))
                    <x-edit-product :editProduct="$editProduct" />
                @else
                    <x-add-product />
                @endif
            </div>
            <div class="col-md-12 col-lg-8 order-lg-first themed-grid-col">
                {{-- Products List --}}
                <x-product-table :products="$products" />
            </div>
        </div>        
    </x-slot>
</x-layout>