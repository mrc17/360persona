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
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<!-- component -->
<body class="font-poppins w-full antialiased">
    <div id="view" class="h-auto w-screen flex flex-row" x-data="{ sidenav: true }">
        <button @click="sidenav = true" class="p-2 border-2 bg-white rounded-md border-gray-200 shadow-lg text-gray-500 focus:bg-teal-500 focus:outline-none focus:text-white absolute top-0 left-0 sm:hidden">
            <svg class="w-5 h-5 fill-current" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div id="sidebar" class="bg-white h-screen md:block shadow-xl px-3 w-30 md:w-60 lg:w-60 relative overflow-x-auto transition-transform duration-300 ease-in-out" x-show="sidenav" @click.away="sidenav = false">
            <div class="space-y-6 md:space-y-10 mt-10">
                <h1 class="font-bold text-4xl text-center md:hidden">
                    360persona<span class="text-teal-600">.</span>
                </h1>
                <h1 class="hidden md:block font-bold text-sm md:text-xl text-center">
                    360persona <span class="text-teal-600">.</span>
                </h1>
                <div id="profile" class="space-y-3">
                    <img src="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="Avatar user" class="w-10 md:w-16 rounded-full mx-auto" />
                    <div>
                        <h2 class="font-medium text-xs md:text-sm text-center text-teal-500">
                            @isset($user)
                            {{ $user->username }}
                        </h2>
                        <p class="text-xs text-gray-500 text-center"></p>
                        {{$user->grade}}
                        @endisset
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
                        <span class=""> Tableau de bord</span>
                    </a>
                    <a href="{{ route('Liste') }}" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z"></path>
                        </svg>
                        <span class="">Liste des Professionnels </span>
                    </a>
                    <a href="{{ route('Fiche') }}" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="">Fiche de renseignement</span>
                    </a>
                    <a href="{{ route('Messages') }}" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path>
                            <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"></path>
                        </svg>
                        <span class="">Messages</span>
                    </a>
                    <a href="" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        <span class=""> Calendrier</span>
                    </a>
                    <a href="" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="">Tableau</span>
                    </a>
                    <a href="" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                        </svg>
                        <span class="">Utilisateurs</span>
                    </a>
                    <a href="{{ route('logout') }}" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z"></path>
                        </svg>
                        <span class="">Deconnexion</span>
                    </a>
                </div>
            </div>
        </div>
        <div class=" py-4 h-screen md:block  mx-auto px-3 rounded-md  relative overflow-x-auto transition-transform duration-300 ease-in-out">
            <form method="POST" action="{{ route('create-artisan') }}" class="bg-white p-5 rounded-lg ">
                @csrf
                <div class="flex flex-col border-2 p-2 border-black">
                    <p class="text-xl flex-wrap text-center font-bold text-red-600">FICHE D’IDENTIFICATION ET DE REFERENCEMENT DES PROFESSIONNELS DE METIER</p>
                    <p class="text-sm text-center font-italic  text-gray-800">Fiche à remplir et retourner physiquement ou par mail à ksira2015@yahoo.fr ou par WhatsApp aux 07 68 24 40 61</p>
                    <div class="flex justify-center flex-row flex-wrap mt-4">
                        <p class="mx-2 py-4 font-bold">DATE : </p>
                        <input type="date" value="{{ $artisan->fiche->date_fiche }}" class="rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none" name="dateRecensement">
                        <p class="mx-2 py-4 font-bold">FICHE N°:</p>
                        <input type="number" class="rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none" name="ficheRecensement" value="{{ $artisan->fiche->num_fiche }}">
                        <p class="mx-2 py-4 font-bold">Code : KS- </p>
                        <input type="text" class="rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none" value="{{ $artisan->fiche->code_fiche }}" name="codeRecensement" placeholder="" />
                    </div>

                </div>

                <div class=""></div>
                <div class="grid md:grid-cols-3 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="NomDeLagentRecenseur" value="{{ $artisan->agent->nom_agent }}" id="Agent" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Agent" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Agent</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="tel" value="{{ $artisan->agent->contact_agent}}" name="contactRecenseur" id="Contact" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Contact" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contact</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="ZoneRecenseur" value="{{ $artisan->agent->zone_agent }}" id="Zone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Zone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Zone</label>
                    </div>

                </div>
                <div class="grid md:grid-cols-3 md:gap-6">
                    <h2 class="font-bold uppercase underline">IDENTIFICATION ARTISAN</h2>
                </div>
                <div class="grid md:grid-cols-4 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="NomArtisan" value="{{ $artisan->nom }}" id="Nom" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Nom" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="PrenomArtisan" value="{{ $artisan->prenom }}" id="Prenom" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Prenom" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prénom</label>

                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="date" name="DateNaissanceArtisan" value="{{ $artisan->dtnaissance }}" id="Date_de_naissance" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Date_de_naissance" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date de naissance</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="LieuNaissanceArtisan" value="{{ $artisan->lieuNaissance}}" id="Agent" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Lieu_de_Naissance" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Lieu de Naissance</label>

                    </div>
                </div>
                <div class="grid md:grid-cols-3 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="ProfessionArtisan" value="{{ $artisan->profession }}" id="Profession" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Profession" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Profession</label>

                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="AnneeExperienceProfessionnelleArtisan" value="{{ $artisan->an_exp_prof}}" id="An_exp_prof" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="An_exp_prof" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Année d’expérience professionnelle</label>

                    </div>
                    @if($artisan->sexe=="Homme")
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="flex items-center w-1/2  gap-x-3">
                            <input id="Femme" name="sexeartisan" value="Femme" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="Femme" class="block text-sm font-medium leading-6 text-gray-900">Femme</label>
                        </div>
                        <div class="flex items-center w-1/2 gap-x-3">
                            <input id="Homme" checked name="sexeartisan" value="Homme" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="Homme" class="block text-sm font-medium leading-6 text-gray-900">Homme</label>
                        </div>
                    </div>
                    @else
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="flex items-center w-1/2  gap-x-3">
                            <input id="Femme" checked name="sexeartisan" value="Femme" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="Femme" class="block text-sm font-medium leading-6 text-gray-900">Femme</label>
                        </div>
                        <div class="flex items-center w-1/2 gap-x-3">
                            <input id="Homme" name="sexeartisan" value="Homme" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="Homme" class="block text-sm font-medium leading-6 text-gray-900">Homme</label>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="grid md:grid-cols-5 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6">
                        <label class="font-medium absolute text-base pt-4 text-gray-500 dark:text-gray-400 duration-300">Avez-vous un registre de métier ?</label>
                        @error('registre')
                        <p class="text-red-600 absolute duration-300 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        @if ($artisan->registre_metier=="Oui")
                        <div class="flex items-center w-1/2  gap-x-3">
                            <input id="registre" checked name="registre" value="Oui" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="registre" class="block text-sm font-medium leading-6 text-gray-900">Oui</label>
                        </div>
                        <div class="flex items-center w-1/2 gap-x-3">
                            <input id="registre" name="registre" value="Non" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="registre" class="block text-sm font-medium leading-6 text-gray-900">Non</label>
                        </div>
                        @else
                        <div class="flex items-center w-1/2  gap-x-3">
                            <input id="registre" name="registre" value="Oui" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="registre" class="block text-sm font-medium leading-6 text-gray-900">Oui</label>
                        </div>
                        <div class="flex items-center w-1/2 gap-x-3">
                            <input id="registre" checked name="registre" value="Non" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="registre" class="block text-sm font-medium leading-6 text-gray-900">Non</label>
                        </div>
                        @endif

                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="AnneeProfession" value="{{$artisan->an_prof }}" id="An_exp_prof" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="An_exp_prof" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Année de profession</label>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="telephone" name="Contact" id="Contact" value="{{$artisan->contact }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Contact" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contact</label>

                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="email" name="email" id="mail" value="{{$artisan->email }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">E- mail</label>
                        @error('email')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-3 mt-4 md:gap-6">
                    <h2 class="font-bold uppercase underline"> Lieu d’habitation</h2>
                </div>
                <div class="grid md:grid-cols-3 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="VilleArtisan" id="Ville" value="{{$artisan->habitation->ville }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Ville" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ville</label>

                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="CommuneArtisan" id="Commune" value="{{$artisan->habitation->commune }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Commune" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Commune</label>

                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="QuartierArtisan" id="Quartier" value="{{$artisan->habitation->quartier }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Quartier" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quartier</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-8 md:gap-6">
                    <div class="flex items-center col-span-4 gap-x-3">
                        <label class="font-medium absolute text-base pt-4 text-gray-500 dark:text-gray-400 duration-300">Situation matrimoliale ?</label>
                    </div>
                    @if ($artisan->habitation->situation_matrimoliale=="Marié")
                    <div class="flex items-center mt-4 col-span-2 gap-x-3">
                        <input id="Marie" checked value="Marié" name="Situation" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Marie" class="block text-sm font-medium leading-6 text-gray-900">Marié</label>
                    </div>
                    <div class="flex items-center col-span-2 mt-4 gap-x-3">
                        <input value="Célibataire" name="Situation" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Célibataire" class="block text-sm font-medium leading-6 text-gray-900">Célibataire</label>
                    </div>
                    @else
                    <div class="flex items-center mt-4 col-span-2 gap-x-3">
                        <input id="Marie" value="Marié" name="Situation" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Marie" class="block text-sm font-medium leading-6 text-gray-900">Marié</label>
                    </div>
                    <div class="flex items-center col-span-2 mt-4 gap-x-3">
                        <input value="Célibataire" checked name="Situation" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Célibataire" class="block text-sm font-medium leading-6 text-gray-900">Célibataire</label>
                    </div>
                    @endif

                    <div class="flex items-center col-span-4 gap-x-3">
                        <label for="Regime" class="font-medium absolute text-base pt-4 text-gray-500 dark:text-gray-400 duration-300">Régime matrimoliale ?</label>
                    </div>
                    @if ($artisan->habitation->regime_matrimoliale=="Communauté de bien")
                    <div class="flex items-center col-span-2 mt-4 gap-x-3">
                        <input id="Regime" checked name="Regime" value="Communauté de bien" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Regime" class="block text-sm font-medium leading-6 text-gray-900">Communauté de bien</label>
                    </div>
                    <div class="flex items-center col-span-2 mt-4 gap-x-3">
                        <input id="Séparation" name="Regime" value="Séparation de bien" type="radio" value="Séparation de bien" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Séparation" class="block text-sm font-medium leading-6 text-gray-900">Séparation de bien</label>
                    </div>
                    @elseif ($artisan->habitation->regime_matrimoliale=="Séparation de bien")
                    <div class="flex items-center col-span-2 mt-4 gap-x-3">
                        <input id="Regime" name="Regime" value="Communauté de bien" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Regime" class="block text-sm font-medium leading-6 text-gray-900">Communauté de bien</label>
                    </div>
                    <div class="flex items-center col-span-2 mt-4 gap-x-3">
                        <input id="Séparation" checked name="Regime" value="Séparation de bien" type="radio" value="Séparation de bien" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Séparation" class="block text-sm font-medium leading-6 text-gray-900">Séparation de bien</label>
                    </div>
                    @else

                    <div class="flex items-center col-span-2 mt-4 gap-x-3">
                        <input id="Regime" name="Regime" value="Communauté de bien" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Regime" class="block text-sm font-medium leading-6 text-gray-900">Communauté de bien</label>
                    </div>
                    <div class="flex items-center col-span-2 mt-4 gap-x-3">
                        <input id="Séparation" name="Regime" value="Séparation de bien" type="radio" value="Séparation de bien" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Séparation" class="block text-sm font-medium leading-6 text-gray-900">Séparation de bien</label>
                    </div>

                    @endif
                </div>
                <div class="grid md:grid-cols-6 mt-5 md:gap-6">
                    <div class="relative col-span-2 z-0 w-full mb-6">
                        <label for="Assurance" class="font-medium absolute text-base pt-4 text-gray-500 dark:text-gray-400 duration-300">Avez-vous une Assurance Maladie ?</label>
                    </div>
                    @if ($artisan->habitation->assurance->nom_assurance =="CMU")
                    <div class="flex items-center gap-x-3">
                        <input id="CMU" checked name="Assurance" type="radio" value="CMU" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="CMU" class="block text-sm font-medium leading-6 text-gray-900">CMU</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="CNPS" name="Assurance" value="CNPS" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="CNPS" class="block text-sm font-medium leading-6 text-gray-900">CNPS</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="AUTREASSURANCE" name="Assurance" value="AUTREASSURANCE" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="AUTREASSURANCE" class="block text-sm font-medium leading-6 text-gray-900">AUTRE</label>
                    </div>
                    @elseif($artisan->habitation->assurance->nom_assurance =="CNPS")
                    <div class="flex items-center gap-x-3">
                        <input id="CMU" name="Assurance" type="radio" value="CMU" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="CMU" class="block text-sm font-medium leading-6 text-gray-900">CMU</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="CNPS" name="Assurance" checked value="CNPS" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="CNPS" class="block text-sm font-medium leading-6 text-gray-900">CNPS</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="AUTREASSURANCE" name="Assurance" value="AUTREASSURANCE" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="AUTREASSURANCE" class="block text-sm font-medium leading-6 text-gray-900">AUTRE</label>
                    </div>
                    @elseif($artisan->habitation->assurance->nom_assurance =="non renseigné")
                    <div class="flex items-center gap-x-3">
                        <input id="CMU" name="Assurance" type="radio" value="CMU" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="CMU" class="block text-sm font-medium leading-6 text-gray-900">CMU</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="CNPS" name="Assurance" checked value="CNPS" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="CNPS" class="block text-sm font-medium leading-6 text-gray-900">CNPS</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="AUTREASSURANCE" checked name="Assurance" value="AUTREASSURANCE" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="AUTREASSURANCE" class="block text-sm font-medium leading-6 text-gray-900">AUTRE</label>
                    </div>
                    @else
                    <div class="flex items-center gap-x-3">
                        <input id="CMU" name="Assurance" type="radio" value="CMU" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="CMU" class="block text-sm font-medium leading-6 text-gray-900">CMU</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="CNPS" name="Assurance" checked value="CNPS" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="CNPS" class="block text-sm font-medium leading-6 text-gray-900">CNPS</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="AUTREASSURANCE" name="Assurance" value="AUTREASSURANCE" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="AUTREASSURANCE" class="block text-sm font-medium leading-6 text-gray-900">AUTRE</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="CMU" name="Assurance" type="radio" value="CMU" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="CMU" class="block text-sm font-medium leading-6 text-gray-900">CMU</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="CNPS" name="Assurance" checked value="CNPS" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="CNPS" class="block text-sm font-medium leading-6 text-gray-900">CNPS</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="AUTREASSURANCE" checked name="Assurance" value="AUTREASSURANCE" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="AUTREASSURANCE" class="block text-sm font-medium leading-6 text-gray-900">AUTRE</label>
                    </div>
                    @endif
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="autre" id="autre" value="{{ $artisan->habitation->assurance->nom_assurance}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="autre" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Autre</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="numeroCnps" id="numcnps" value="{{ $artisan->habitation->assurance->numero_assurance }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="numcnps" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">N° CNPS</label>

                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="Agence" id="Agence" value="{{ $artisan->habitation->assurance->agence_assurance  }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Agence" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Agence de rattachement</label>
                    </div>
                </div>

                <div class="grid md:grid-cols-8 mt-5 md:gap-6">
                    <div class="relative col-span-3 z-0 w-full mb-6">
                        <label for="Affiliation" class="font-medium absolute text-base pt-4 text-gray-500 dark:text-gray-400 duration-300">Etes-vous affilié à une banque ou microfinance ?</label>
                    </div>
                    @if ($artisan->habitation->finances->etat_finance == "Oui")
                    <div class="flex items-center gap-x-3">
                        <input id="Oui" checked name="etatFinance" value="Oui" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Oui" class="block text-sm font-medium leading-6 text-gray-900">Oui</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="Non" name="etatFinance" value="Non" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Non" class="block text-sm font-medium leading-6 text-gray-900">Non</label>
                    </div>
                    @elseif ($artisan->habitation->finances->etat_finance == "Non")
                    <div class="flex items-center gap-x-3">
                        <input id="Oui" name="etatFinance" value="Oui" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Oui" class="block text-sm font-medium leading-6 text-gray-900">Oui</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="Non" name="etatFinance" value="Non" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Non" checked class="block text-sm font-medium leading-6 text-gray-900">Non</label>
                    </div>
                    @else
                    <div class="flex items-center gap-x-3">
                        <input id="Oui" name="etatFinance" value="Oui" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Oui" class="block text-sm font-medium leading-6 text-gray-900">Oui</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="Non" name="etatFinance" value="Non" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Non" checked class="block text-sm font-medium leading-6 text-gray-900">Non</label>
                    </div>
                    @endif

                    <div class="relative col-span-3 z-0 w-full mb-6 group">
                        <input type="text" name="nomfinance" id="nomfinance" value="{{ $artisan->habitation->finances->nom_finance }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="nomFinance" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Si oui la(les)quelles ?</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-8 mt-5 md:gap-6">
                    <div class="relative col-span-3 z-0 w-full mb-6">
                        <label class="font-medium absolute text-base pt-4 text-gray-500 dark:text-gray-400 duration-300">Etes-vous affilié à une organisation professionnelle ?</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="reponseorganitionoui" name="reponseOrganition" value="Oui" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="reponseorganitionoui" class="block text-sm font-medium leading-6 text-gray-900">Oui</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="reponseorganitionNon" name="reponseOrganition" value="Non" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="reponseorganitionNon" class="block text-sm font-medium leading-6 text-gray-900">Non</label>
                    </div>
                    <div class="relative col-span-3 z-0 w-full mb-6 group">
                        <input type="organisation" name="NomOrganisation" id="organisation" value="{{$artisan->habitation->organisation->nom_organisation}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="organisation" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Si oui la(les)quelles ?</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="NbreEnfant" id="NbreEnfant" value="{{$artisan->habitation->charge->nbr_enfant}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="NbreEnfant" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nbre d’enfant à charge :</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="NbreFille" id="NbreFille" value="{{$artisan->habitation->charge->nbr_fille}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="NbreFille" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fille</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="NbreGarcon" value="{{$artisan->habitation->charge->nbr_garcon}}" id="NbreFille" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="NbreGarcon" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Garçon</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="Scolaire" id="Scolaire" value="{{$artisan->habitation->charge->scolarise}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Scolaire" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Scolarisé</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-3 mt-4 md:gap-6">
                    <h2 class="font-bold uppercase underline">IDENTIFICATION DE L’ACTIVITE</h2>
                </div>
                <div class="grid md:grid-cols-2 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="Activite_1" id="Activite" value="{{$artisan->habitation->activite->activite1}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Activite" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Activité 1</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="denomination" value="{{$artisan->habitation->activite->denomination}}" id="DENOMINATION" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="DENOMINATION" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">DENOMINATION:</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="Localisation_1" id="Localisation1" value="{{$artisan->habitation->activite->localisation1}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Localisation1" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Localisation 1</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="numero_rccm" value="{{$artisan->habitation->activite->num_rccm}}" id="num_rccm" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="num_rccm" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">RCCM N°</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="Activite_2" id="Activité2" value="{{$artisan->habitation->activite->activite2}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Activité2" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Activité 2</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="numeroDeLaDfe" id="num_dfe" value="{{$artisan->habitation->activite->numero_de_la_dfe}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="num_dfe" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">DFE N°</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="Localisation_2" value="{{$artisan->habitation->activite->localisation2}}" id="Localisation2" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Localisation_2" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Localisation 2</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="numeroCnpsActivite" value="{{$artisan->habitation->activite->num_cnps}}" id="numcnps" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="numcnps" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">N° CNPS</label>
                    </div>
                    <div class="relative col-span-full z-0 w-full mb-6 group">
                        <input type="text" name="Projet" id="Projet" value="{{$artisan->habitation->activite->projet}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Projet" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Projet / Besoin en équipement</label>
                    </div>
                    <div class="relative  z-0 w-full mb-6 group">
                        <input type="text" name="CoutEstimatifEnChiffre" value="{{$artisan->habitation->activite->cout_estimatif_en_lettre}}" id="CoutestimatifEnchiffre" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="CoutestimatifEnchiffre" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Coût estimatif (En chiffre FCFA)</label>
                    </div>
                    <div class="relative  z-0 w-full mb-6 group">
                        <input type="text" name="CoutEstimatifEnLettre" value="{{$artisan->habitation->activite->cout_estimatif_en_chiffre}}" id="Agent" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="CoutestimatifEnlettre" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Coût estimatif (En lettre)</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-3 mt-4 md:gap-6">
                    <h2 class="font-bold uppercase underline">INFORMATIONS PARRAINS</h2>
                </div>
                <div class="grid md:grid-cols-3 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="NomDuParrain" value="{{$artisan->parrain->nom_parrain}}" id="NomParrain" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="NomParrain" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="PrenomDuParrain" value="{{$artisan->parrain->prenom_parrain}}" id="PrenomParrain" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="PrenomParrain" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prenom</label>
                    </div>
                    <div class="grid md:grid-cols-3 mt-2 md:gap-6">
                        <div class="relative z-0 w-full">
                            <label for="sexeParrain" class="font-medium absolute text-base pt-4 text-gray-500 dark:text-gray-400 duration-300">Sexe</label>
                        </div>
                        @if ($artisan->parrain->sexe_parrain=="Femme")
                        <div class="flex items-center gap-x-3">
                            <input id="FemmeParrain" checked name="sexeDuParrain" value="Femme" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="FemmeParrain" class="block text-sm font-medium leading-6 text-gray-900">Femme</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="HommeParrain" name="sexeDuParrain" value="Homme" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="HommeParrain" class="block text-sm font-medium leading-6 text-gray-900">Homme</label>
                        </div>
                        @else

                        <div class="flex items-center gap-x-3">
                            <input id="FemmeParrain" name="sexeDuParrain" value="Femme" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="FemmeParrain" class="block text-sm font-medium leading-6 text-gray-900">Femme</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="HommeParrain" checked name="sexeDuParrain" value="Homme" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="HommeParrain" class="block text-sm font-medium leading-6 text-gray-900">Homme</label>
                        </div>

                        @endif

                    </div>
                    <div class="relative z-0 col-span-2 w-full mb-6 group">
                        <input type="text" name="ProfessionDuParrain" value="{{$artisan->parrain->profession_parrain}}" id="Professionparrain" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Professionparrain" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Profession</label>
                    </div>
                    <div class="relative z-0 col-span-full w-full mb-6 group">
                        <input type="text" name="Appreciation_du_bureau" value="{{$artisan->parrain->appreciation_parrain}}" id="Appreciation_du_bureau" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Appreciation_du_bureau" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Appréciation du bureau</label>
                    </div>
                    <div class="flex items-center col-span-full gap-x-3">
                        <input checked id="checkbox-1" type="checkbox" value="checked" name="checked" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label class="block text-sm font-medium leading-6 text-gray-900">J’autorise K-SIRA sarl à partager ces informations avec ses partenaires dans le cadre du développement de mes activités et pour mon bien-être.</label>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="reset" class="rounded-md bg-white px-3 py-2 text-sm font-semibold border-1 text-red-600 shadow-2xl hover:bg-red-600 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 duration-150 ease-in-out focus-visible:outline-indigo-600">Suppression</button>
                    <button type="reset" class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold border-1 text-white shadow-2xl hover:bg-orange-600 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 duration-150 ease-in-out focus-visible:outline-indigo-600">Modifier</button>
                    <button type="submit" class="rounded-md px-3 py-2 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" style="background-color: #006A4E">Imprimer</button>
                </div>
        </div>
        </form>
    </div>
</body>
</html>

