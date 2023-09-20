<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
      {{ __('Create New True or False Quiz') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('TrueOrFalseQuiz.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
              <x-input-label for="Problem" :value="__('Problem')" />
              <x-text-input id="problem" class="block mt-1 w-full" type="text" name="problem" :value="old('problem')" required autofocus />
              <x-input-error :messages="$errors->get('problem')" class="mt-2" />
            </div>
    <div class="flex flex-col mb-4">
    <x-input-label for="Answer" :value="__('Answer')" />
      <div class="mt-1 flex items-center space-x-2">
        <label for="answer_true">
            <input id="answer_true✖" type="radio" name="answer" value="1" {{ old('answer') == '1' ? 'checked' : '' }} required autofocus>
            〇
        </label>
        <label for="answer_false">
            <input id="answer_false" type="radio" name="answer" value="0" {{ old('answer') == '0' ? 'checked' : '' }} required autofocus>
              ✖
        </label>
    </div>
    <x-input-error :messages="$errors->get('answer')" class="mt-2" />
</div>

            {{--
            <div class="flex flex-col mb-4">
              <x-input-label for="Answer" :value="__('Answer')" />
              <x-text-input id="answer" class="block mt-1 w-full" type="boolean" name="answer" :value="old('description')" required autofocus />
              <x-input-error :messages="$errors->get('answer')" class="mt-2" />
            </div>
            --}}
            <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ml-3">
                {{ __('Create') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

