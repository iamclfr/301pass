<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="flex justify-start items-start flex-wrap gap-8 w-full mx-auto">
            <div class="w-full max-w-lg p-4 sm:p-8 bg-white dark:bg-slate-800 shadow sm:rounded-3xl">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="w-full max-w-lg p-4 sm:p-8 bg-white dark:bg-slate-800 shadow sm:rounded-3xl">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="w-full max-w-lg p-4 sm:p-8 bg-white dark:bg-slate-800 shadow sm:rounded-3xl">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
