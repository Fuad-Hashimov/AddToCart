@include('components.header')

<div class="container flex justify-center mx-auto px-5">
    <div class="p-10 w-3/4 mt-10 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img class="w-60 rounded-t-lg" src="/{{ $product->image_path }}" alt="{{ $product->name }}" />
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->name }}</h5>
            <span class="font-bold tracking-tight text-gray-900 dark:text-white">Details : {{ $product->details }}</span>
            <br>
            <span class="font-bold tracking-tight text-gray-900 dark:text-white">Price Product : {{ $product->price }}
                $</span>
                <br>
                <span class="font-bold tracking-tight text-gray-900 dark:text-white"> Shipping Cost : {{ $product->shopping_cost }} </span>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $product->decsription }}.</p>
            <a href="{{route('add.to.cart',$product->id)}}"
                role="button"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Add To cart
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</div>
