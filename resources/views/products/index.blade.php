@extends('products.layout')

@section('content')
    <div class="flex flex-wrap">
        <div class="lg:w-full pr-4 pl-4 margin-tb flex items-center justify-between flex items-center justify-between">
            <div>
                <h2 class="text-5xl font-bold leading-normal mt-0 mb-2 text-black">Laravel 8 CRUD with Image Upload</h2>
            </div>
            <div>
                <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-green-500 text-white hover:bg-green-600"
                    href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="overflow-hidden border border-gray-200 sm:rounded-lg my-2">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Prices
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Action</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($products as $product)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">{{ ++$i }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex justify-center items-center">
                                <div class="flex-shrink-0 h-32 w-32">
                                    <img class="h-32 w-32 rounded-lg" src="/image/{{ $product->image }}" alt="">
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $product->name }}
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">IDR {{ number_format($product->price) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-white text-right text-sm font-medium">
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                                <a class="bg-green-600 hover:bg-green-900 px-4 py-2 rounded-lg"
                                    href="{{ route('products.show', $product->id) }}">Show</a>

                                <a class="bg-indigo-600 hover:bg-indigo-900 px-4 py-2 rounded-lg ml-2"
                                    href="{{ route('products.edit', $product->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="bg-red-600 hover:bg-red-900 px-4 py-2 rounded-lg ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {!! $products->links() !!}

@endsection
