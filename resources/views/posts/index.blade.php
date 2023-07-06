{{-- notre page utilise notre layout par default default.blade.php qui contient le header. c'est comme si on faisait un @include --}}
{{-- <x-NomDuComposant>...</x-NomDuComposant> --}}
<x-layout>
    <div class="space-y-10 md:space-y-16">

        @foreach ($posts as $post )

        {{-- <x-post :$post list /> --}}
        <x-post :$post list />
        
        @endforeach

        {{ $posts->links() }}

    </div>
</x-layout>