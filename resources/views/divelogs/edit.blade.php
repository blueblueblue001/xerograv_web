<!-- resources/views/divelogs/edit.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Divelog Edit') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <a href="{{ route('divelogs.show', $divelog) }}" class="text-blue-500 hover:text-blue-700 mr-2">BACK</a>
          <form method="POST" action="{{ route('divelogs.update', $divelog) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
              <label for="divelog" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Edit Divelog</label>
              <input type="text" name="divelog" id="divelog" value="{{ $divelog->divelog }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              @error('divelog')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">UPDATE</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
