<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <div class=" bg-yellow-500 flex justify-center  ">
        
        <div class="w-2/5 mt-20 mb-20 bg-zinc-400 flex justify-center grid justify-items-center border rounded-xl">
            <h1 class="w-3/5 bg-black text-white mt-10 p-4 border rounded-xl flex justify-center">Sign Up Now</h1>
            

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('storeregister') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Name')" class="mt-3" />

                    <x-input id="name" class="block mt-3 w-full p-2" type="text" name="name" :value="old('name')" required
                        autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class=" mt-1 w-full p-2" type="email" name="email" :value="old('email')" required />
                </div>

                <x-label for="departments" class="block mt-4 mb-2 w-full ">Department</x-label>
                <select id="departments" name="departments"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Select Department</option>
                    @foreach ($department as $departments)
                        <option value="{{ $departments->id }}">{{ $departments->name }}</option>
                    @endforeach
                </select>

                <x-label for="interests" class="block mt-4  mb-1 w-full ">Select Program</x-label>
                <div class="mt-4 ">
                    <select name="interests" id="subject" class="w-full p-2">
                          <option value="">Select Program</option>
                    </select>
                </div>

   
                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />
                    <x-input id="password" class="block mt-1 p-2 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-input id="password_confirmation" class="block mt-1 p-2 w-full" type="password"
                        name="password_confirmation" required />
                </div>
                <label class="form-check-label mt-4 inline-block text-gray-800" for="flexCheckChecked">
                    Do you want to receive notifications about your interest?
                </label>
                <input
                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-4 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                    type="checkbox" value="" id="checkbox" checked name="checkbox">

                    <div class="flex items-end justify-content-start mt-10">
                        <a class="underline text-sm mb-10  text-emerald-700 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
    
                        <x-button class="bg-green-600 mb-10 ml-5 w-2/5 flex justify-center">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                  
                </div>

               
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('select[name="departments"]').on('change', function() {
                var departID = $(this).val();
                // document.write(departID);
                if (departID) {
                    $.ajax({
                        url: '/getdata/' + departID,
                        method: "get",
                        data: departID,
                        dataType: 'json',
                        success: function(data) {
                           
                            $.each(data, function(key, value) {
                                $('select[name="interests"]').append('<option value="' +
                                    value.name+ '">' + value.name + '</option>');
                            });

                        }
                    });
                } else {
                    $('select[name="interests"]').empty();
                }
            });
        });
    </script>
</body>

</html>
