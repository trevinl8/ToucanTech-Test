<x-app-layout>
    <x-slot name="header">
        <div class="inline-flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Members') }}
            </h2>
            <a hreaf={{ route('members.create') }} class=" float-right inline-flex items-center rounded-md bg-amber-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-amber-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-ml-0.5 mr-1.5 h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                Back to Members Index
            </a>
        </div>
       
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form action="{{ route('members.store') }}" method="POST">
                      {{ csrf_field() }}
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Member</h2>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                          <div class="sm:col-span-12">
                            <label for="fullname" class="block text-sm font-medium leading-6 text-gray-900">Full Name</label>
                            <div class="mt-2">
                              <input type="text" name="fullname" id="fullname" autocomplete="fullname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                          </div>
                    
                          <div class="sm:col-span-12">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                            <div class="mt-2">
                              <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-12">
                            <label for="school" class="block text-sm font-medium leading-6 text-gray-900">Schools Attended</label>
                            <div class="mt-2">
                              <select id="school" name="school" autocomplete="school-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option></option>
                                @foreach($schools as $sch)
                                <option value="{{ $sch->id }}">{{ $sch->name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="sm:col-span-12">
                             <div class="mt-6 flex items-center justify-end gap-x-6">
                               <button type="reset" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                               <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                             </div>
                          </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
