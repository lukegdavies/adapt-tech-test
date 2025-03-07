<x-app-layout>
<div class="bg-white overflow-hidden shadow  border">
    <div class="px-4 py-5 sm:px-6">
        <!-- Header for the user profile section -->
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            User Profile
        </h3>
         <!-- Subtext describing the section's content -->
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            This is some information about the Patient.
        </p>
    </div>
    <!-- Detailed view of user profile information -->
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <!-- Repeatable block for each attribute of the patient, formatted in a grid layout -->

            <!-- First Name -->
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    First name
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    @if($patient->first_name)
                        {{ $patient->first_name }}
                    @endif
                </dd>
            </div>

            <!-- Last Name -->
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Last name
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    @if($patient->last_name)
                        {{ $patient->last_name }}
                    @endif
                </dd>
            </div>

            <!-- Email Address -->
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Email address
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    @if($patient->email)
                    {{ $patient->email }}
                   @endif
                </dd>
            </div>

            <!-- Phone Number -->
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Phone number
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    @if($patient->phone_number)
                        {{ $patient->phone_number }}
                    @endif
                </dd>
            </div>

            <!-- Address -->
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Address
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    @if($patient->address)
                        {{ $patient->address }}
                    @endif
                </dd>
            </div>

            <!-- NHS number -->
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    NHS number
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    @if($patient->nhs_number)
                        {{ $patient->nhs_number }}
                    @endif
                </dd>
            </div>

            <!-- Date of birth -->
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Date of birth
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    @if($patient->date_of_birth)
                        {{ $patient->date_of_birth }}
                    @endif
                </dd>
            </div>

            <!-- Sex / Gender -->
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Sex/Gender
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    @if($patient->sex)
                        {{ $patient->sex }}
                    @endif
                </dd>
            </div>
        </dl>
    </div>
</div>
</x-app-layout>