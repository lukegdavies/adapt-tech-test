<form method="POST" action="{{ isset($patient) ? route('patients.update', $patient->id) : route('patients.store') }}">
  @csrf

  @if(isset($patient))
    @method('PUT')
  @endif

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mx-auto font-inter">
        <div class="flex-none lg:flex border-b-2">
            <div class="w-full lg:w-2/5 p-8">
                <span class="text-xl font-semibold block">General</span>
                <span class="text-gray-600">General information about the patient</span>
            </div>

            <div class="w-full lg:w-3/5 p-8">
                <div class="rounded bg-white shadow p-6">
                    <x-form-input name="first_name" label="First Name" placeholder="Enter first name..." :value="$patient->first_name ?? ''"/>

                    <x-form-input name="last_name" label="Last Name" placeholder="Enter last name..." :value="$patient->last_name ?? ''"/>

                    <x-form-input name="email" label="Email" placeholder="Enter email..." :value="$patient->email ?? ''"/>

                    <x-form-input name="phone_number" label="Phone number" placeholder="Enter Phone number..." :value="$patient->phone_number ?? ''"/>

                    <x-form-textarea name="address" label="Address" placeholder="Enter address..." :value="$patient->address ?? ''"/>
                </div>
            </div>
        </div>

        <div class="lg:flex">
            <div class="w-full lg:w-2/5 p-8">
                <span class="text-xl font-semibold block">Patient Profile</span>
                <span class="text-gray-600">This information is sensitive</span>
            </div>
        </div>
    </div>
</form>