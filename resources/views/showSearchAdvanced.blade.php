<!doctype html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" type="image/gif" sizes="180x180" href="{{asset('images/360.png') }}">
    <link rel="icon" type="image/gif" sizes="16x16" href="{{asset('images/360.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/360.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/360.png') }}">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<!-- component -->
<body class="font-poppins w-full antialiased ">
    <div id="view" class="h-auto w-screen dark:bg-gray-900 flex flex-row" x-data="{ sidenav: true }">
        <button @click="sidenav = true" class="p-2 border-2 bg-white rounded-md border-gray-200 shadow-lg text-gray-500 focus:bg-teal-500 focus:outline-none focus:text-white absolute top-0 left-0 sm:hidden">
            <svg class="w-5 h-5 fill-current" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div id="sidebar" class="bg-white dark:bg-gray-900 h-screen md:block shadow-xl px-3 w-30 md:w-60 lg:w-60 relative overflow-x-auto transition-transform duration-300 ease-in-out" x-show="sidenav" @click.away="sidenav = false">
            <div class="space-y-6 md:space-y-10 mt-10">
                <h1 class="font-bold dark:text-white text-4xl text-center md:hidden">
                    360persona<span class="text-teal-600">.</span>
                </h1>
                <h1 class="hidden md:block dark:text-white font-bold text-sm md:text-xl text-center">
                    360persona <span class="text-teal-600">.</span>
                </h1>
                <div id="profile" class="space-y-3">
                    <img src="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="Avatar user" class="w-10 md:w-16 rounded-full mx-auto" />
                    <div>
                        <h2 class="font-medium text-xs md:text-sm text-center text-teal-500">
                            @isset($user)
                            {{ $user->username }}
                            @endisset
                        </h2>
                        <p class="text-xs text-gray-500 text-center">Administrateur</p>
                    </div>
                </div>
                <div class="flex border-2 border-gray-200 rounded-md focus-within:ring-2 ring-teal-500">
                    <input type="text" class="w-full rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none" placeholder="Search" />
                    <button class="rounded-tr-md rounded-br-md px-2 py-3 hidden md:block">
                        <svg class="w-4 h-4 fill-current" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div id="menu" class="flex flex-col space-y-2">
                    <a href="{{ route('Dashboard') }}" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                        <span class="dark:text-white"> Tableau de bord</span>
                    </a>
                    <a href="{{ route('Liste') }}" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="dark:text-white">Liste des Professionnels </span>
                    </a>
                    <a href="{{ route('Fiche') }}" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="dark:text-white">Fiche de renseignement</span>
                    </a>
                    <a href="" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                        </svg>
                        <span class="dark:text-white">Utilisateurs</span>
                    </a>
                    <a href="{{ route('logout') }}" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z"></path>
                        </svg>
                        <span class="dark:text-white">Deconnexion</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="h-screen md:block w-11/12  mx-auto px-3 rounded-md overflow-x-auto transition-transform duration-300 ease-in-out">
            <div class="w-11/12 sm:px-8 px-4 mx-auto">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div>
                        <div class="flex items-center gap-x-3">
                            <h2 class="text-lg font-medium dark:text-white text-gray-800 ">Listes des artisans</h2>

                            <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $nbrArtisanTotal }} enregistrés</span>
                        </div>
                    </div>
                    <div class="flex items-center id='containerbtn' mt-4 gap-x-3">
                        <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Ajouter un artisan</span>
                        </button>
                    </div>
                </div>
                <div class="mt-6 md:flex md:items-center md:justify-between">

                    <div id="containerbouton" class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                        @empty($artisans)
                        <button onclick="showForm()" id="label" class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                            Creer un tri
                        </button>
                        @endempty
                        @isset($artisans)
                        <a href="{{ route('showSearchAdvanced') }}" id="label" class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                            Creer un tri
                        </a>
                        <button onclick="getColonneTab()" id="label" class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                            Modifier entête du tabeau
                        </button>
                        <button onclick="createPDF()" id="label" class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                            Imprimer
                        </button>
                        @endisset
                    </div>
                </div>
                <div class="mt-6 md:flex md:items-center md:justify-between">
                    <form method="POST" id="Form" action="{{ route('search-artisan-avanced') }}" class="flex flex-row flex-wrap gap-4 bg-white  divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:divide-gray-700">
                        {{ csrf_field() }}
                    </form>
                </div>
                <div class="flex flex-col mb-10">
                    @isset($message)
                    <p class="" style="">{{ $message }}</p>
                    @endisset
                    @isset($artisans)
                    <div class="-mx-4 my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div id="colonne" style="display: none" class="grid md:grid-cols-4 mt-5 md:gap-6 overflow-hidden">
                                <div class="flex items-center">
                                    <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div id="pdf" class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                <table id="Tableau" class="min-w-full divide-y text-center divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-gray-50 dark:bg-gray-800">
                                        <tr id="ligne">
                                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                                <button class="flex items-center gap-x-3 focus:outline-none">
                                                    <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                        <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                        <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                                    </svg>
                                                    <span>Numero</span>
                                                </button>
                                            </th>
                                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                                <span>Nom</span>
                                            </th>
                                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                                <span>Prenom</span>
                                            </th>
                                            @foreach ($columns as $column )
                                            @if ($column=="Nom" || $column=="Prenom")
                                            @else
                                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                                <span>{{ $column }}</span>
                                            </th>
                                            @endif
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                        @isset($message)

                                        @if($message==="Aucun résultat trouvé pour votre recherche.")
                                        <tr>
                                            <td colspan="8" class="px-4 py-4 text-sm whitespace-nowrap text-center">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $message }}</h4>
                                            </td>
                                        </tr>
                                        @endif
                                        @endisset
                                        @foreach ( $artisans as $artisan )
                                        <tr id="donne">
                                            <td class="px-4 py-4 text-sm whitespace-nowrap text-center">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $count++ }}</h4>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap text-center">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->Nom }}</h4>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap text-center">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->Prenom }}</h4>
                                            </td>
                                            @foreach ($columns as $column )
                                            @if ($column=="Scolarise")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->charge->Scolarise }}</h4>
                                            </td>
                                            @elseif ($column=="SituationMatrimoliale")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->SituationMatrimoliale }}</h4>
                                            </td>
                                            @elseif ($column=="RégimeMatrimoliale")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->RégimeMatrimoliale }}</h4>
                                            </td>
                                            @elseif ($column=="Ville")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->Ville}}</h4>
                                            </td>
                                            @elseif ($column=="Commune")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->Commune}}</h4>
                                            </td>
                                            @elseif ($column=="Quartier")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->Quartier}}</h4>
                                            </td>
                                            @elseif ($column=="NbrEnfant")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->charge->NbrEnfant}}</h4>
                                            </td>
                                            @elseif ($column=="Nbrfille")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->charge->Nbrfille}}</h4>
                                            </td>
                                            @elseif ($column=="NbrGarcon")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->charge->NbrGarcon}}</h4>
                                            </td>
                                            @elseif ($column=="NomFinance")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->finances->NomFinance}}</h4>
                                            </td>
                                            @elseif ($column=="etatFinance")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->finances->etatFinance}}</h4>
                                            </td>
                                            @elseif ($column=="etatOrganisation")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->organisation->etatOrganisation}}</h4>
                                            </td>
                                            @elseif ($column=="NomOrganisation")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->organisation->NomOrganisation}}</h4>
                                            </td>
                                            @elseif ($column=="NomAssurance")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->assurances->NomAssurance}}</h4>
                                            </td>
                                            @elseif ($column=="numeroAssurance")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->assurances->numeroAssurance}}</h4>
                                            </td>
                                            @elseif ($column=="AgenceAssurance")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->assurances->AgenceAssurance}}</h4>
                                            </td>
                                            @elseif ($column=="date")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->fiche->date}}</h4>
                                            </td>
                                            @elseif ($column=="numfiche")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->fiche->numfiche}}</h4>
                                            </td>
                                            @elseif ($column=="zone")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->fiche->zone}}</h4>
                                            </td>
                                            @elseif ($column=="ordre")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->fiche->ordre}}</h4>
                                            </td>
                                            @elseif ($column=="NomAgent")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->agent->NomAgent }}</h4>
                                            </td>
                                            @elseif ($column=="ContactAgent")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->agent->ContactAgent}}</h4>
                                            </td>
                                            @elseif ($column=="ZoneAgent")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->agent->ZoneAgent}}</h4>
                                            </td>
                                            @elseif ($column=="Dtnaissance")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->Dtnaissance}}</h4>
                                            </td>
                                            @elseif ($column=="LieuNaissance")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->LieuNaissance}}</h4>
                                            </td>
                                            @elseif ($column=="Profession")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->Profession}}</h4>
                                            </td>
                                            @elseif ($column=="AnExpProf")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->AnExpProf}}</h4>
                                            </td>
                                            @elseif ($column=="Sexe")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->Sexe}}</h4>
                                            </td>
                                            @elseif ($column=="registreMetier")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->registreMetier}}</h4>
                                            </td>
                                            @elseif ($column=="Email")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->Email}}</h4>
                                            </td>
                                            @elseif ($column=="AnExpProf")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->AnExpProf}}</h4>
                                            </td>
                                            @elseif ($column=="Contact")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->Contact}}</h4>
                                            </td>
                                            @elseif ($column=="AnProf")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->AnProf}}</h4>
                                            </td>
                                            @elseif ($column=="NomParrain")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->parrain->NomParrain}}</h4>
                                            </td>
                                            @elseif ($column=="PrenomParrain")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->parrain->PrenomParrain}}</h4>
                                            </td>
                                            @elseif ($column=="sexeParrain")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->parrain->sexeParrain}}</h4>
                                            </td>
                                            @elseif ($column=="ProfessionParrain")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->parrain->ProfessionParrain}}</h4>
                                            </td>
                                            @elseif ($column=="AppreciationParrain")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->parrain->AppreciationParrain}}</h4>
                                            </td>
                                            @elseif ($column=="dateFiche")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->fiche->dateFiche}}</h4>
                                            </td>
                                            @elseif ($column=="numfiche")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->fiche->numfiche}}</h4>
                                            </td>
                                            @elseif ($column=="codefiche")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->fiche->codefiche}}</h4>
                                            </td>
                                            @elseif ($column=="zonefiche")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->fiche->zonefiche}}</h4>
                                            </td>
                                            @elseif ($column=="ordrefiche")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->fiche->ordrefiche}}</h4>
                                            </td>
                                            @elseif ($column=="Activite1")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->activite->Activite1}}</h4>
                                            </td>
                                            @elseif ($column=="Denomination")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->activite->Denomination}}</h4>
                                            </td>
                                            @elseif ($column=="Localisation1")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->activite->Localisation1}}</h4>
                                            </td>
                                            @elseif ($column=="numRccm")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->activite->numRccm}}</h4>
                                            </td>
                                            @elseif ($column=="Activite2")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->activite->Activite2}}</h4>
                                            </td>
                                            @elseif ($column=="numeroDeLaDfe")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->activite->numeroDeLaDfe}}</h4>
                                            </td>
                                            @elseif ($column=="Localisation2")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->activite->Localisation2}}</h4>
                                            </td>
                                            @elseif ($column=="numcnps")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->activite->numcnps}}</h4>
                                            </td>
                                            @elseif ($column=="Projet")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->activite->Projet}}</h4>
                                            </td>
                                            @elseif ($column=="CoutestimatifEnlettre")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->activite->CoutestimatifEnlettre}}</h4>
                                            </td>
                                            @elseif ($column=="CoutestimatifEnchiffre")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->activite->CoutestimatifEnchiffre}}</h4>
                                            </td>
                                            @elseif ($column=="CoutestimatifEnchiffre")
                                            <td class="px-4 py-4 text-sm capitalize whitespace-nowrap">
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $artisan->habitation->activite->CoutestimatifEnchiffre}}</h4>
                                            </td>
                                            @endif
                                            @endforeach
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        let isFormVisible = false;
        let formCount = 0;
        let boutouns = `
        <button onclick="showForm()" id="label" class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
            Fermer
        </button>
        <button onclick="toggleForm()" class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
            Ajouter un critère
        </button>
        <button onclick="remove()" class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
            Retirer un critère
        </button>
        `;
        let boutoun = `
        <button onclick="showForm()" id="label" class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
            Creer un tri
        </button>`;
        let boutounFormulaire = `
        <div class="relative w-full mt-4 md:mt-0 px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:text-gray-300">
            <input type="submit" class="block cursor-pointer w-full py-1.5 pr-5 text-gray-700 bg-green-500 rounded-lg cursor-point pl-11 rtl:pr-11 rtl:pl-5 dark:text-white dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none" value='Recherche'>
        </div>`;

        function toggleForm() {
            <div class="relative flex items-center mt-4 md:mt-0 px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </span>
                <select  onchange="getColonnes(this)" id="table_${formCount}" name="table_${formCount}" type="text" class="block w-full py-1.5 pr-5 text-gray-700 bg-white rounded-lg md:w-full placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    <option value="">Choisissez une table</option>
                    <option value="">-------------------------------------------</option>
                    <option value="Charge">Charge</option>
                    <option value="Agent">Agent</option>
                    <option value="Finances">Finances</option>
                    <option value="Artisan">Artisan</option>
                    <option value="Parrain">Parrain</option>
                    <option value="Activite">Activité</option>
                    <option value="Habitation">Habitation</option>
                    <option value="Organisation">Organisation</option>
                    <option value="Assurance">Assurance Maladie</option>
                    <option value="Fiche">Fiche recensement</option>
                </select>
            </div>
            <div class="relative flex items-center mt-4 md:mt-0 px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </span>
                <select id="colonne${formCount}" name="colonne_${formCount}" type="text" placeholder="Search" class="block w-full py-1.5 pr-5 text-gray-700 bg-white rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    <option value="">Choisissez une colonne</option>
                    <option value="Charge">-------------------------------------------</option>
                </select>
            </div>
            <div class="relative flex items-center mt-4 md:mt-0 px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </span>
                <input required type="text" name='search_${formCount}' placeholder="Search" class="block w-full py-1.5 pr-5 text-gray-700 bg-white rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            `;
            document.getElementById('Form').innerHTML += formHTML;
            formCount++;
        }


        function showForm() {
            if (isFormVisible) {
                document.getElementById('Form').innerHTML = boutounFormulaire;
                document.getElementById('containerbouton').innerHTML = boutouns;
                toggleForm();
            } else {
                document.getElementById('containerbouton').innerHTML = boutoun;
                document.getElementById('Form').innerHTML = "";
            }
            isFormVisible = !isFormVisible;
        }

        function remove(){
        let parent = document.getElementById('Form');
        console.log(parent);
        const formHTML = parent.lastChild;
        parent.removeChild(formHTML);
        }


        function getColonnes(tag) {
            let colonneId = tag.id;
            let colonne = "colonne" + colonneId.split('_')[1];
            let valeur = tag.value;
            axios.get('/getColonnes/' + valeur)
                .then(function(response) {
                    let options = "";
                    response.data.forEach(function(item) {
                        options += `<option value="${item}">${item}</option>`;
                    });
                    document.getElementById(colonne).innerHTML = options;
                })
                .catch(function(error) {
                    document.getElementById(colonne).innerHTML = "<option>" + error.response.data.message + "</option>";
                });
        }

    </script>

    @isset($artisans)
    <script>
        function getColonneTab() {
            let autrecolonnes = {!!json_encode($autrecolonnes) !!};
            let colonne = document.getElementById("colonne");
            colonne.style.display = ""; // Vous devez spécifier une valeur valide pour "display", par exemple "block" pour afficher l'élément.
            colonne.innerHTML = ""; // Efface le contenu de l'élément.
            Object.values(autrecolonnes).forEach(item => {
                // Crée un élément div pour chaque élément dans colonnes et ajoute-le à l'élément colonne.
                let div = document.createElement("div");
                div.className = "flex items-center";

                // Crée une case à cocher et une étiquette pour chaque élément dans colonnes.
                let checkbox = document.createElement("input");
                checkbox.type = "checkbox";
                checkbox.className = "w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600";
                checkbox.value = item; // Définissez la valeur de la case à cocher sur l'élément actuel de autrecolonnes.
                checkbox.onclick = function() {
                    check(checkbox); // Appel de la fonction check lorsque la case est cochée/décochée.
                };
                let label = document.createElement("label");
                label.htmlFor = "checked-checkbox";
                label.className = "ml-2 text-sm font-medium text-gray-900 dark:text-gray-300";
                label.textContent = item; // Le texte de l'étiquette provient de l'élément dans colonnes.

                // Ajoute la case à cocher et l'étiquette au div.
                div.appendChild(checkbox);
                div.appendChild(label);
                // Ajoute le div à l'élément colonne.
                colonne.appendChild(div);
            });
        }

        function check(checkbox) {
            let tableau = document.getElementById("Tableau");
            if (checkbox.checked) {
                // Créez un nouvel élément <th> pour l'en-tête de colonne.
                let enTete = document.createElement("th");
                enTete.className = "py-3.5 px-4 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400";
                enTete.textContent = checkbox.value;
                // Ajoutez l'en-tête de colonne à la première ligne du tableau (ou à la ligne d 'en-tête).
                let premiereLigne = tableau.querySelector("tr:first-child");
                premiereLigne.appendChild(enTete);
                // Parcourez toutes les lignes de données (à partir de la deuxième ligne) et ajoutez une cellule de données <td> à chaque ligne.
                let artisans = {!!json_encode($artisans) !!}; // Utilisez json_encode pour formatter correctement les données côté serveur.
                let tbody = document.querySelector('tbody');
                let lignesDonnees = tbody.querySelectorAll("tr");
                lignesDonnees.forEach(function (ligne) {
                    let celluleDonnees = document.createElement("td");
                    celluleDonnees.className = "px-4 py-4 text-sm capitalize whitespace-nowrap";
                    let label= document.createElement("h4");
                    label.className = "text-gray-700 dark:text-gray-200";
                    if(checkbox.value==="Dtnaissance"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['Dtnaissance'];
                    }else if(checkbox.value==="LieuNaissance"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['LieuNaissance'];
                    }else if(checkbox.value==="Profession"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['Profession'];
                    }else if(checkbox.value==="AnExpProf"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['AnExpProf'];
                    }else if(checkbox.value==="Sexe"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['Sexe'];
                    }else   if(checkbox.value==="AnProf"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['AnProf'];
                    }else if(checkbox.value==="registreMetier"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['registreMetier'];
                    }else if(checkbox.value==="Email"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['Email'];
                    }else if(checkbox.value==="Contact"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['Contact'];
                    }else if(checkbox.value==="NbrEnfant"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['habitation']['charge']['NbrEnfant'];
                    }else if(checkbox.value==="Nbrfille"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['habitation']['charge']['Nbrfille'];
                    }else if(checkbox.value==="NbrGarcon"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['habitation']['charge']['NbrGarcon'];
                    }else if(checkbox.value==="Scolarise"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['habitation']['charge']['Scolarise'];
                    }else if(checkbox.value==="Commune"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['habitation']['Commune'];
                    }else if(checkbox.value==="Ville"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['habitation']['Ville'];
                    }else if(checkbox.value==="Quartier"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['habitation']['Quartier'];
                    }else if(checkbox.value==="SituationMatrimoliale"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['habitation']['SituationMatrimoliale'];
                    }else if(checkbox.value==="RégimeMatrimoliale"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['habitation']['RégimeMatrimoliale'];
                    }else if(checkbox.value==="Sexe"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['Sexe'];
                    }else if(checkbox.value==="Contact"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['Contact'];
                    }else if(checkbox.value==="Email"){
                        label.textContent=artisans[ligne.rowIndex-1 ]['Email'];
                    }
                    celluleDonnees.appendChild(label);
                    ligne.appendChild(celluleDonnees);
                });
            } else {
                // Sélectionnez la première ligne <tr>, dont les enfants sont les <th>.
                let premiereLigne = tableau.querySelector("tr:first-child");

                // Parcourez les cellules <th> de la première ligne pour trouver celle correspondant à la valeur de la colonne.
                let colonneASupprimer;
                Array.from(premiereLigne.children).forEach(function (cellule, index) {
                    if (cellule.textContent === checkbox.value) {
                        colonneASupprimer = cellule;
                    }
                });

                if (colonneASupprimer) {
                    // Supprimez la cellule d'en-tête correspondante.
                    premiereLigne.removeChild(colonneASupprimer);

                    // Parcourez toutes les lignes de données (à partir de la deuxième ligne).
                    let tbody = document.querySelector('tbody');
                    let lignesDonnees = tbody.querySelectorAll("tr");
                    lignesDonnees.forEach(function (ligne) {
                        // Supprimez la cellule de données correspondante dans chaque ligne.
                        let celluleASupprimer = ligne.lastChild;
                        console.log(celluleASupprimer)
                        if (celluleASupprimer) {
                            ligne.removeChild(celluleASupprimer);
                        }
                    });
                }
            }
        }
    </script>
    @endisset


    <script>
        function createPDF() {
            var pdf = document.getElementById("pdf");
            var opt = {
                margin: 0.1,
                filename: 'Recherche_filtrer_sur_les_artisans_' + new Date().getMinutes() + new Date().getSeconds()
                , image: {
                    type: 'jpeg'
                    , quality: 1
                }
                , html2canvas: {
                    scale: 2
                }
                , jsPDF: {
                    unit: 'in'
                    , format: 'a4'
                    , orientation: 'landscape'
                }
            };
            html2pdf().set(opt).from(pdf).save();
        }

    </script>
    <script src="{{ asset('js/html2pdf.bundle.min.js') }}"></script>


</body>
</html>

