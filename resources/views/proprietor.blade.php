<head>
    <title>Add Proprietor</title>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proprietor') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                @if(Session::get('success'))
                <div class="alert alert-success">
                {{Session::get('success')}}
                </div>
                
                @endif


                @if(Session::get('fail'))
                <div class="alert alert-success">
                {{Session::get('fail')}}
                </div>
                
                @endif

                <x-validation-errors class="mb-4" :errors="$errors" />
                    <x-success-message />
                <form action="add"  method="post">
                    
            @csrf

            <!-- Lot Number -->
            <div >
                <x-label for="lot_number" :value="__('Lot Number')" />

                <x-input id="lot_number" class="block mt-1 w-full" type="num" name="lot_number" :value="old('lot_number')" required autofocus />

            </div>

            <!-- Name -->
            <div class="mt-4">
                <x-label for="proprietor_name" :value="__('Proprietor Name')" />

                <x-input id="proprietor_name" class="block mt-1 w-full" type="text" name="proprietor_name" :value="old('proprietor_name')" required autofocus />
            </div>

            <!-- unit entitlement -->
            <div class="mt-4">
                <x-label for="unit_entitlement" :value="__('Unit Entitlement')" />

                <x-input id="unit_entitlement" class="block mt-1 w-full" type="num" name="unit_entitlement" :value="old('unit_entitlement')" required autofocus />
            </div>

            <!-- Postal informaion -->
            <div class="mt-4">
                <x-label for="postal_information" :value="__('Postal Information')" />

                <x-input id="postal_information" class="block mt-1 w-full" type="text" name="postal_information" :value="old('postal_information')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="proprietor_email" :value="__('Email')" />

                <x-input id="proprietor_email" class="block mt-1 w-full" type="email" name="proprietor_email" :value="old('email')" required />
            </div>

            <!-- Total Maintenance -->
            <div class="mt-4">
                <x-label for="total_maintenance" :value="__('Total Maintenance')" />

                <x-input id="total_maintenance" class="block mt-1 w-full" type="num" name="total_maintenance" :value="old('total_maintenance')" required />
            </div>


            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>

        
            </div>
        </div>
    </div>
</x-app-layout>
