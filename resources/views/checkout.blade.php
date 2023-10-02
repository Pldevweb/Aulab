@extends('layouts.app')

@section('includes')
    <script src="https://js.stripe.com/v3/"></script>

@stop

@section('content')
    <div class="grid grid-cols-2 gap-4 w-full">
        <div class="leading-loose p-4 w-full ">
            <form class="">
                <p class="text-gray-800 font-medium">Customer information</p>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">Name</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name"
                        type="text" required="" placeholder="Your Name" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Email</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                        type="text" required="" placeholder="Your Email" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="cus_email">Address</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                        type="text" required="" placeholder="Street" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="hidden text-sm block text-gray-600" for="cus_email">City</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                        type="text" required="" placeholder="City" aria-label="Email">
                </div>
                <div class="flex">
                    <div class="w-1/2 pr-1">
                        <label class="block text-sm text-gray-600" for="cus_country">Country</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_country"
                            name="cus_country" type="text" required="" placeholder="Country" aria-label="Country">
                    </div>
                    <div class="w-1/2 pl-1">
                        <label class="block text-sm text-gray-600" for="cus_zip">Zip</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_zip" name="cus_zip"
                            type="text" required="" placeholder="Zip" aria-label="Zip">
                    </div>
                </div>

                <p class="mt-4 text-gray-800 font-medium">Payment information</p>
                <div id="card-element">
                    <label class="block text-sm text-gray-600" for="cus_name">Card</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name"
                        type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
                </div>
                <div class="mt-4">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                        type="submit">$3.00</button>
                </div>
            </form>
        </div>
        <div class="w-full">
            allo
        </div>
    </div>
@endsection
