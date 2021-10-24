@extends('products.layout')

@section('content')
    <div class="flex flex-wrap ">
        <div class="lg:w-full pr-4 pl-4 margin-tb flex items-center justify-between">
            <div class="float-left">
                <h2 class="text-5xl font-bold leading-normal mt-0 mb-2 text-black"> Show Product</h2>
            </div>
            <div class="float-right">
                <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600"
                    href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap ">
        <div class="sm:w-full pr-4 pl-4 sm:w-full pr-4 pl-4 md:w-full pr-4 pl-4">
            <div class="mb-4">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="sm:w-full pr-4 pl-4 sm:w-full pr-4 pl-4 md:w-full pr-4 pl-4">
            <div class="mb-4">
                <strong>Prices:</strong>
                IDR {{ number_format($product->price) }}
            </div>
        </div>
        <div class="sm:w-full pr-4 pl-4 sm:w-full pr-4 pl-4 md:w-full pr-4 pl-4">
            <div class="mb-4">
                <strong>Image:</strong>
                <img src="/image/{{ $product->image }}" width="500px" class="rounded-lg mt-2">
            </div>
        </div>
    </div>
@endsection
