<!-- resources/views/recipe/show.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
      {{ __('Show Recipe Detail') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800">
          <div class="mb-6">
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">Name</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="name">
                {{$recipe->name}}
              </p>
            </div>

            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">{{$ingredients->count()}} Ingredients</p>
               <form action="{{route('recipe.price', $recipe->id)}}" method="POST"> 
                @csrf

              @foreach($ingredients as $ingredient)
                
                <input type="checkbox" id="{{$ingredient->name}}" name="ingredients[]" value="{{$ingredient}}" checked />
                <label for="{{$ingredient->name}}" class="py-2 px-3 text-gray-800 dark:text-gray-200">{{$ingredient->name}}</p>
            @endforeach
            
            <div class="flex items-left justify-end mt-4">
                      <x-primary-button class="ml-3">
                        Calculate cost
                      </x-primary-button>
</div>
            <div class="flex items-center justify-end mt-4">
              <a href="{{ url()->previous() }}">
                <x-secondary-button class="ml-3">
                  {{ __('Back') }}
                </x-primary-button>
              </a>
            </form> 
            
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

