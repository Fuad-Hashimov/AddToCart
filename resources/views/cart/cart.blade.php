@include('components.header')

<div class="container mx-auto px-5">
    <section class="py-24 relative">
        <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto">
            <h2 class="title font-manrope font-bold text-4xl leading-10 mb-8 text-center text-black">Shopping Cart
            </h2>
            @if (session('cartItems'))
                @foreach (session('cartItems') as $key => $item)
                    <div
                        class="rounded-3xl border-2 border-gray-200 p-4 lg:p-8 grid grid-cols-12 mb-8 max-lg:max-w-lg max-lg:mx-auto gap-y-4">
                        <div class="col-span-12 lg:col-span-2 img box">
                            <img src="{{ $item['image_path'] }}" alt="speaker image" class="max-lg:w-full lg:w-[180px]">
                        </div>
                        <div class="col-span-12 lg:col-span-10 detail w-full lg:pl-3">
                            <div class="flex items-center justify-between w-full mb-4">
                                <h5 class="font-manrope font-bold text-2xl leading-9 text-gray-900">{{ $item['name'] }}
                                </h5>
                                <a href="{{ route('delete.from.cart', $key) }}"
                                    class="rounded-full group flex items-center justify-center focus-within:outline-red-500">
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle class="fill-red-50 transition-all duration-500 group-hover:fill-red-400"
                                            cx="17" cy="17" r="17" fill="" />
                                        <path
                                            class="stroke-red-500 transition-all duration-500 group-hover:stroke-white"
                                            d="M14.1673 13.5997V12.5923C14.1673 11.8968 14.7311 11.333 15.4266 11.333H18.5747C19.2702 11.333 19.834 11.8968 19.834 12.5923V13.5997M19.834 13.5997C19.834 13.5997 14.6534 13.5997 11.334 13.5997C6.90804 13.5998 27.0933 13.5998 22.6673 13.5997C21.5608 13.5997 19.834 13.5997 19.834 13.5997ZM12.4673 13.5997H21.534V18.8886C21.534 20.6695 21.534 21.5599 20.9807 22.1131C20.4275 22.6664 19.5371 22.6664 17.7562 22.6664H16.2451C14.4642 22.6664 13.5738 22.6664 13.0206 22.1131C12.4673 21.5599 12.4673 20.6695 12.4673 18.8886V13.5997Z"
                                            stroke="#EF4444" stroke-width="1.6" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                            <p class="font-normal text-base leading-7 text-gray-500 mb-6">
                                {{ $item['price'] }} $
                            </p>
                            <p class="font-normal text-base leading-7 text-gray-500 mb-6">

                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-4">
                                    <a href="{{ route('increment',[$key,'dec']) }}"
                                        class="group rounded-[50px] border border-gray-200 shadow-sm shadow-transparent p-2.5 flex items-center justify-center bg-white transition-all duration-500 hover:shadow-gray-200 hover:bg-gray-50 hover:border-gray-300 focus-within:outline-gray-300">
                                        <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black"
                                            width="18" height="19" viewBox="0 0 18 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.5 9.5H13.5" stroke="" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>

                                    <input type="text" id="number" value="{{ (int)$item['quantity'] == 0 ? 1 : (int)$item['quantity'] }}"
                                        class="border border-gray-200 rounded-full w-10 aspect-square outline-none text-gray-900 font-semibold text-sm py-1.5 px-3 bg-gray-100  text-center"
                                         >
                                    <a href="{{ route('increment',[$key,'inc']) }}"
                                    name="inc"
                                        class="group rounded-[50px] border border-gray-200 shadow-sm shadow-transparent p-2.5 flex items-center justify-center bg-white transition-all duration-500 hover:shadow-gray-200 hover:bg-gray-50 hover:border-gray-300 focus-within:outline-gray-300">
                                        <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black"
                                            width="18" height="19" viewBox="0 0 18 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 9.5H14.25M9 14.75V4.25" stroke="" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <h6 class="text-indigo-600 font-manrope font-bold text-2xl leading-9 text-right">
                                    {{  (int)$item['quantity'] > 0 ? (int)$item['quantity']  * $item['price'] : $item['price']}}
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Shopping Cart Is Empty</p>
            @endif
        </div>
        <div
            class="flex flex-col md:flex-row items-center md:items-center justify-between lg:px-6 pb-6 border-b border-gray-200 max-lg:max-w-lg max-lg:mx-auto">
            <div class="flex items-center justify-between  ">
                <h6 class="font-manrope font-bold text-3xl lead-10 text-indigo-600">Subtotal : {{ $total ?? "" }}$</h6>
            </div>
        </div>
        <div class="max-lg:max-w-lg max-lg:mx-auto">
            <p class="font-normal text-base leading-7 text-gray-500 text-center mb-5 mt-6">Shipping taxes, and
                discounts
                calculated
                at checkout</p>
            <button
                class="rounded-full py-4 px-6 bg-indigo-600 text-white font-semibold text-lg w-full text-center transition-all duration-500 hover:bg-indigo-700 ">Checkout</button>
        </div>
</div>
</div>
</div>
</section>

</div>
