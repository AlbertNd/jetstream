<div class="w-full md:w-3/5 py-6 flex justify-end ">
    <div class="w-full flex-1 lg:w-4/5 grid sm:grid-cols-2 lg:grid-cols-3 gap-2">

        {{-- La boutique --}}

        <x-contenu.divIconRight href="#">
            <x-slot name="icon">
                <x-Icons.shop />
            </x-slot>
            <x-slot name="titre">
                Une boutique dedié
            </x-slot>
        </x-contenu.divIconRight>


        {{-- Les formations --}}
        <x-contenu.divIconRight href="#">
            <x-slot name="icon">
                <x-Icons.test />
            </x-slot>
            <x-slot name="titre">
                Formations tests et exercices
            </x-slot>
        </x-contenu.divIconRight>


        {{-- permis chauffeurs --}}
        <x-contenu.divIconRight href="#">
            <x-slot name="icon">
                <x-Icons.permis />
            </x-slot>
            <x-slot name="titre">
                Chauffeur permis B , C , CE
            </x-slot>
        </x-contenu.divIconRight>


        {{-- Actualité --}}
        <x-contenu.divIconRight href="#">
            <x-slot name="icon">
                <x-Icons.actualite />
            </x-slot>
            <x-slot name="titre">
                Actualité
            </x-slot>
        </x-contenu.divIconRight>


        {{-- partenaires --}}
        <x-contenu.divIconRight href="#">
            <x-slot name="icon">
                <x-Icons.partenaire />
            </x-slot>
            <x-slot name="titre">
                Nos partenaires
            </x-slot>
        </x-contenu.divIconRight>

        {{-- faq --}}
        <x-contenu.divIconRight href="#">
            <x-slot name="icon">
                <x-Icons.faq />
            </x-slot>
            <x-slot name="titre">
                Question frequentes
            </x-slot>
        </x-contenu.divIconRight>
        {{-- License --}}
        <x-contenu.divIconRight href="#" class="sm:col-span-2 lg:col-span-3">
            <x-slot name="icon">
                <x-Icons.license />
            </x-slot>
            <x-slot name="titre" class="">
                Votre capacité professionnelle de transport
            </x-slot>
        </x-contenu.divIconRight>
    </div>
</div>