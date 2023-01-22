@extends('base')

@section('title', config('app.name'). '| Enregister un participant')

@section('content')

<!--Title-->
<h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
    Enregistrer un participant
</h1>

@if (Session::has('participant_add'))
<span>{{ Session::get('participant_add')}}</span>
@endif

<form method="POST" action="{{route('app_save_participant')}}">
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-1">
        <div>
            <label for="nom" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nom : </label>
            <input type="text" id="nom" name="nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Votre nom" required>
        </div>
        <div>
            <label for="prenom" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Prénom : </label>
            <input type="text" id="prenom" name="prenom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Votre prénom" required>
        </div>
        <div>
            <label for="numero" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Numéro de téléphone (+225) : </label>
            <input type="tel" name="numero" pattern="[0-9]{10}" id="numero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Votre numéro de téléphone" required>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
            <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="abc@exemple.com" required>
        </div>

    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection