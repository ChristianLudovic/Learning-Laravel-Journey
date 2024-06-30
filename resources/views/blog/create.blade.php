@extends('base')

@section('title', 'Create an article')

@section('content')
    <div class="h-screen w-screen flex justify-center items-center">
        <form action="" method="post" class="flex flex-col gap-3 max-w-[400px] w-full items-start">
            @csrf
            <input type="text" name="title" value="article de demonstration" class="border border-solid border-stone-400 w-full rounded-md h-[48px] pl-3 focus:outline-none" />
            <textarea name="content" class="border border-solid border-stone-400 w-full rounded-md pl-3 h-[150px] resize-none focus:outline-none">Contenu de demonstration</textarea>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-md">Enregistrer</button>
        </form>
    </div>
    
@endsection