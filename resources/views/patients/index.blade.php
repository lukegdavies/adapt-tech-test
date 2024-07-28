<x-app-layout>
    <!-- component -->
    <div class="px-6 sm:px-0 pt-6 pb-6">
        <div class="flex flex-col mx-auto sm:px-6 lg:px-8">

           <div class="flex-none sm:flex lg:flex  items-center">
               <div class="sm:flex-auto">
                   <h1 class="text-xl font-semibold">Patients</h1>
                   <p>A list of all the Patients including their name, email, phone and dob.</p>
               </div>

               <div class="sm:mt-0 sm:ml-10 mt-6">
                    <a href="{{ route('patients.create') }}" class="rounded-lg px-4 font-semibold py-2 bg-blue-500 text-blue-100 hover:bg-blue-600 duration-300 cursor-pointer">Add Patient</a>
               </div>
           </div> 
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Name
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Email
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Phone Number
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Date of birth
                                </th>

                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patients as $patient)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                   {{ $patient->first_name }} {{ $patient->last_name ?? '' }}
                                                </p>
                                        </div>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $patient->email }}
                                        </p>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $patient->phone_number }}
                                        </p>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $patient->date_of_birth }}
                                        </p>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{ route('patients.edit', $patient->id) }}" class="text-blue-600 block">Edit</a>
                                        <div  x-cloak x-data="{ open: false }">
                                        <a @click="open = true" class="text-red-500 hover:text-red-700">Delete</a>
                                            <div x-show="open" style="background-color: rgba(0,0,0,0.5);" class="fixed inset-0 flex items-center justify-center p-4">
                                                <div class="bg-white p-4 rounded-lg">
                                                    <p>Are you sure you want to delete this patient?</p>
                                                    <div class="flex justify-between mt-4">
                                                        <button @click="open = false" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded">Cancel</button>
                                                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="px-5 py-3 bg-white border-t flex flex-col xs:flex-row xs:justify-between">
                        {{ $patients->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
