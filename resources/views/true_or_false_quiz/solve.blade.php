<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
      {{ __('True or False Quizの一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
          <div class="flex flex-cl mb-4">
            <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">Problem</p>
            <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="true_or_false_quiz">
              {{ $true_or_false_quiz->problem }}
            </p>
          </div>
          
          <div class="flex">
            <!-- 回答ページへのリンクボタン -->
            <div class="flex items-center justify-end mt-4">
            <form method = "GET" action = "{{ route('true_or_false_quiz.result', $true_or_false_quiz->id) }}" >
              @csrf
              @method('RESULT')
              <x-primary-button class="ml-3">
                {{__('True')}}
              </x-primary-button>  
            </form>
            <form method = "GET" action = "{{ route('true_or_false_quiz.result', $true_or_false_quiz->id) }}" >
              @csrf
              @method('RESULT')
              <x-primary-button class="ml-3">
                {{__('False')}}
              </x-primary-button>  
            </form>
            </div>
            <!-- 削除ボタン -->
          </div>

          <div class="flex items-center justify-end mt-4">
          <a href="{{ url()->previous() }}">
            <x-secondary-button class="ml-3 ">
              {{ __('Back') }}
            </x-primary-button>
          </a>
          </div>
        <div>
      </div>
    </div>
  </div>
</x-app-layout>
