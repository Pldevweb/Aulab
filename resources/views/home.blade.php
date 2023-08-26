@extends('layouts.app')

@section('content')
    <div class="bg-[#DBDBD8]">
        <div class="flex justify-center h-screen">
            <div class="w-5/6 mt-3 bg-white flex justify-center">
                <div class="w-5/6 h-3/4 mt-8 mb-0 bg-white relative bg-cover bg-center"
                    style="background-image: url(https://hips.hearstapps.com/hmg-prod/images/golden-retriever-royalty-free-image-506756303-1560962726.jpg?crop=1.00xw:0.756xh;0,0.0756xh&resize=1200:*)">
                    <h1 class="absolute top-0 right-0 p-4 text-3xl mr-4 text-white text-right">PARCE QU'ON LES AIME</h1>
                    <div class="bg-[#626262] bg-opacity-50 w-1/3 h-5/6 rounded absolute top-20 right-0 p-4 mr-2">
                        <div class="p-4 rounded">
                            <p class="font-family: arial text-white text-base/loose leading-snug text-justify">Bienvenue dans notre boutique virtuelle
                                d'accessoires pour chiens ! Nous sommes fiers de vous offrir une gamme variée de produits
                                haut de gamme pour répondre aux besoins de votre animal de compagnie.</p>
                            <br>
                            <p class="font-family: arial text-white text-base/loose leading-snug text-justify">
                                Nous avons tout ce dont vous avez besoin pour rendre la vie de votre chien plus confortable
                                et amusante.
                            </p>
                            <br>
                            <p class="font-family: arial text-white text-base/loose leading-snug text-justify">
                                Dans notre boutique, vous trouverez une large sélection de jouets interactifs, de laisses,
                                de colliers, de harnais, de vêtements, de coussins confortables, de produits de toilettage
                                et bien plus encore. Nous nous engageons à ne proposer que des produits de qualité
                                supérieure, fabriqués par des marques de confiance.
                            </p>
                            <br>
                            <p class="font-family: arial text-white text-base/loose leading-snug text-justify">
                                Explorez notre boutique dès maintenant pour trouver les accessoires parfaits pour votre
                                compagnon à quatre pattes !
                            </p>
                        </div>
                    </div>

                </div>
                <div class="text-black mt-4">
                    <button
                        class="bg-[#5e5e4a] hover:bg-gray-700 text-white py-2 px-4  absolute bottom-0 right-80 mr-20 w-48">
                        <a href="{{ '/products' }}">Magasinez</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex justify-center h-screen">
            <div class="w-5/6  bg-white flex justify-center">
                <div class="grid grid-cols-[6fr,1fr] w-5/6 h-1/2 gap-4">
                    <div class="">
                        <p class="text-2xl  mb-4">Les jouets intéractifs</p>
                        <p class="text-gray-800">
                            Les jouets interactifs pour chiens ont de nombreux bienfaits pour nos compagnons canins. Tout
                            d'abord, ils fournissent une stimulation mentale importante, ce qui est particulièrement
                            important pour les chiens qui passent beaucoup de temps seuls à la maison. Ils aident aussi à
                            prévenir l'ennui et les comportements destructeurs qui en découlent souvent.
                            <br><br>
                            En outre, les jouets interactifs pour chiens peuvent aider à maintenir leur santé physique. Les
                            jouets à mâcher remplis de friandises, les balles à distributeur de friandises et les jeux de
                            récupération, par exemple, peuvent encourager les chiens à rester actifs et à faire de
                            l'exercice.
                            <br><br>
                            Les jouets interactifs pour chiens peuvent également aider à renforcer la relation entre les
                            propriétaires et leurs animaux de compagnie. Jouer avec votre chien avec un jouet interactif est
                            une excellente occasion de passer du temps ensemble, de renforcer les liens et de développer une
                            meilleure compréhension de son comportement.
                            <br><br>
                            Enfin, les jouets interactifs pour chiens peuvent être bénéfiques pour leur santé mentale et
                            émotionnelle. Les chiens ont besoin de stimulation et de défis pour rester heureux et épanouis,
                            et les jouets interactifs peuvent leur fournir un moyen sûr et sain de satisfaire leurs
                            instincts naturels.
                            <br><br>
                            En somme, les jouets interactifs sont un excellent investissement pour les propriétaires de
                            chiens à la recherche d'options pour aider à maintenir la santé et le bien-être de leur animal
                            de compagnie, tout en renforçant leur relation avec lui.
                        </p>
                    </div>
                    <div class="flex flex-col justify-between h-full">
                        <div class="flex items-center justify-center h-96 w-48 bg-cover bg-center object-cover"
                            style="background-image: url(https://www.akc.org/wp-content/uploads/2021/07/Cavalier-King-Charles-Spaniel-laying-down-indoors.jpeg)">
                        </div>
                        <div class="flex items-center">
                            <button class="border border-[#5e5e4a] mb-56 h-6 ml-8  w-32 hover:bg-gray-400 text-gray-800">
                                <a href="{{ '/products' }}" class="text-xs text-[#5e5e4a]">Voir les jouets</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
