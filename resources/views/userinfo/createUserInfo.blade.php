<x-app-layout>
    @section('style')
    <style>
        #map {
            height: 30vw;
        }
    </style>
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Info') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('storeuserinfo') }}" id="user-info-form">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />

                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" autofocus />

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="nric" :value="__('NRIC')" />

                            <x-text-input id="nric" class="block mt-1 w-full" type="text" name="nric"
                                :value="old('nric')" />

                            <x-input-error :messages="$errors->get('nric')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="contact" :value="__('Contact')" />

                            <x-text-input id="contact" class="block mt-1 w-full" type="text" name="contact"
                                :value="old('contact')" />

                            <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="address1" :value="__('Address 1')" />

                            <x-text-input id="address1" class="block mt-1 w-full" type="text" name="address1"
                                :value="old('address1')" />

                            <x-input-error :messages="$errors->get('address1')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="address2" :value="__('Address 2')" />

                            <x-text-input id="address2" class="block mt-1 w-full" type="text" name="address2"
                                :value="old('address2')" />

                            <x-input-error :messages="$errors->get('address2')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="postcode" :value="__('Postcode')" />

                            <x-text-input id="postcode" class="block mt-1 w-full" type="text" name="postcode"
                                :value="old('postcode')" />

                            <x-input-error :messages="$errors->get('postcode')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="district" :value="__('District')" />

                            <select name="district" id="district" 
                            class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                @foreach ($districts as $item)
                                <option value={{$item->id}} @checked(old('disctrict')==$item->id)>
                                    {{$item->content}}
                                </option>
                                @endforeach
                            </select>

                            <x-input-error :messages="$errors->get('district')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="location" :value="__('Pin Location')" />

                            <x-text-input id="latitude" class="mt-1 w-full" type="text" name="latitude"
                                :value="old('latitude')" hidden />
                            <x-text-input id="longitude" class="mt-1 w-full" type="text" name="longitude"
                                :value="old('longitude')" hidden />

                            <div id="map" class="mt-1 rounded-md border-gray-400"></div>

                            <x-input-error :messages="$errors->get('map')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="agent" :value="__('Agent')" />

                            <x-text-input id="agent" class="block mt-1 w-full" type="text" name="agent"
                                :value="old('agent')" />

                            <x-input-error :messages="$errors->get('agent')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <button type="submit"
                                class="justify-center w-full inline-flex items-center px-4 py-4 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Button
                            </button>
                            {{-- Submit
                            </button> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @section('script')
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNwKg1Go4dxn6xm2gVkGaEXqrJ5B9eAi4" async defer>
        </script>
        <script src="/js/google_map.js"></script>
        @endsection
    </div>
</x-app-layout>