<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
      {{ __('Quizに回答する') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          {{$true_or_false_quiz->problem}}
          @include('common.errors')
          <form class="mb-6" action="{{ route('true_or_false_quiz.result') }}" method="GET">
            @method('result')
            @csrf
            <input type = "hidden" name = "problem_id" value = "{{$true_or_false_quiz->id}}">
            <div class="flex flex-col mb-4">
              <x-input-label for="answer" :value="__('answer')" />
                      <label for="answer_true">
                          <input id="answer_true" type="radio" name="answer" value="1" {{ old('answer') == '1' ? 'checked' : '' }} required autofocus>
                          〇
                      </label>
                      <label for="answer_false">
                          <input id="answer_false" type="radio" name="answer" value="0" {{ old('answer') == '0' ? 'checked' : '' }} required autofocus>
                            ✖
                      </label>
            </div>
            <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ml-3">
                {{ __('回答する') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
