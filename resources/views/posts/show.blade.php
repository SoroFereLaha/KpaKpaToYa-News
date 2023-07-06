{{-- dans le constructeur de notre layout.php on a dit que si ya pas de titre alors on met juste le nomde du site mais s'il y a un titre on ajoute | + le titre --}}
{{-- :titre="$post->titre" --}}
<x-layout titre="{{ $post->titre }}" >
    <div class="space-y-10 md:space-y-16">

        <x-post :$post />


    </div>
</x-layout>