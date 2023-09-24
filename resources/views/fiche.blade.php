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
                        </h2>
                        <p class="text-xs text-gray-500 text-center">{{ $user->grade }}</p>
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
        <div class=" py-4 h-screen md:block  mx-auto px-3 rounded-md  relative overflow-x-auto transition-transform duration-300 ease-in-out">
            @if(session('success'))
            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0  0  1  0  2 Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Success alert!</span> {{session('success')}}.
                </div>
            </div>
            @endif
            @if(session('error'))
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium">Danger alert!</span> {{session('error')}}.
                </div>
              </div>
            @endif
            <form method="POST" action="{{ route('create-artisan') }}" class="bg-white dark:bg-gray-900 p-5 rounded-lg ">
                @csrf
                <div class="flex flex-col items-center border-2 p-2 border-black dark:border-white">
                    <p class="text-xl flex-wrap text-center font-bold text-red-600">REPERTOIRE D’IDENTIFICATION ET DE REFERENCEMENT DES PROFESSIONNELS DE METIER</p>
                    <div class="flex flex-row flex-wrap mt-4">
                        <p class="mx-2 py-4 dark:text-white font-bold">DATE : </p>
                        <input readonly type="date" value="{{ date('Y-m-d') }}" value="{{ old('dateRecensement') }}" class="rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none" name="dateRecensement">
                        <p class="mx-2 py-4 dark:text-white font-bold">FICHE N°:</p>
                        <input readonly type="number" class="rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none" name="ficheRecensement" value="{{ $numfiche}}">
                        <p class="mx-2 py-4 dark:text-white font-bold">Code : KS- </p>
                        <input readonly type="text" class="rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none" readonly value="{{ $code }}" name="codeRecensement" min="03" placeholder="" value="2023-05" /><span class="py-4"></span>
                    </div>
                    @if($errors->any())
                    <div class="grid md:grid-cols-4 md:gap-6">
                        @error('dateRecensement')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                        @error('ficheRecensement')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                        @error('codeRecensement')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                        @error('zoneRecensement')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                        @error('ordreRecensement')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    @endif
                </div>
                <div class="grid md:grid-cols-3 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="NomDeLagentRecenseur" value="{{ $user->Agent->nom_agent}}" id="Agent" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Agent" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Agent</label>
                        @error('NomDeLagentRecenseur')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div hidden class="relative z-0 w-full mb-6 group">
                        <input type="text" name="agent_id" value="{{ $user->agent->user_id }}" id="Agent" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Agent" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Agent</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="tel" value="{{ $user->Agent->contact_agent }}" name="contactRecenseur" id="Contact" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Contact" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contact</label>
                        @error('contactRecenseur')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="ZoneRecenseur" value="{{ old('ZoneRecenseur') }}" id="Zone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Zone" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Zone</label>
                        @error('ZoneRecenseur')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-3 md:gap-6">
                    <h2 class="font-bold dark:text-white  uppercase underline">IDENTIFICATION ARTISAN</h2>
                </div>
                <div class="grid md:grid-cols-4 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="NomArtisan" value="{{ old('NomArtisan') }}" id="Nom" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Nom" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom</label>
                        @error('NomArtisan')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="PrenomArtisan" value="{{ old('PrenomArtisan') }}" id="Prenom" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Prenom" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prénom</label>
                        @error('PrenomArtisan')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="date" name="DateNaissanceArtisan" value="{{ old('DateNaissanceArtisan') }}" id="Date_de_naissance" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Date_de_naissance" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date de naissance</label>
                        @error('DateNaissanceArtisan')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="LieuNaissanceArtisan" value="{{ old('LieuNaissanceArtisan') }}" id="Agent" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Lieu_de_Naissance" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Lieu de Naissance</label>
                        @error('LieuNaissanceArtisan')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-3 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input name="ProfessionArtisan" type="text" value="{{ old('ProfessionArtisan') }}" id="Profession" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Profession" />
                        <label for="Profession" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"></label>
                        @error('ProfessionArtisan')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="AnneeExperienceProfessionnelleArtisan" value="{{ old('AnneeExperienceProfessionnelleArtisan') }}" id="An_exp_prof" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="An_exp_prof" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Année d’expérience professionnelle</label>
                        @error('AnneeExperienceProfessionnelleArtisan')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="flex items-center w-1/2  gap-x-3">
                            <input id="Femme" name="sexeartisan" value="Femme" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="Femme" class="block text-sm font-medium leading-6 dark:text-white text-gray-900">Femme</label>
                        </div>
                        <div class="flex items-center w-1/2 gap-x-3">
                            <input id="Homme" name="sexeartisan" value="Homme" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="Homme" class="block text-sm font-medium leading-6 dark:text-white text-gray-900">Homme</label>
                        </div>
                    </div>

                </div>
                <div class="grid md:grid-cols-5 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6">
                        <label class="font-medium absolute text-base pt-4 dark:text-white  duration-300">Avez-vous un registre de métier ?</label>
                        @error('registre')
                        <p class="text-red-600 absolute duration-300 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="flex items-center w-1/2  gap-x-3">
                            <input id="registre" name="registre" value="Oui" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="registre" class="block text-sm font-medium leading-6 dark:text-white text-gray-900">Oui</label>
                        </div>
                        <div class="flex items-center w-1/2 gap-x-3">
                            <input id="registre" name="registre" value="Non" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="registre" class="block text-sm font-medium leading-6 dark:text-white text-gray-900">Non</label>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="AnneeProfession" value="{{ old('AnneeProfession') }}" id="An_exp_prof" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="An_exp_prof" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Année de profession</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="telephone" name="Contact" id="Contact" value="{{ old('Contact') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Contact" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contact</label>
                        @error('Contact')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="email" name="email" id="mail" value="{{ old('email') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="email" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">E- mail</label>
                        @error('email')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-3 mt-4 md:gap-6">
                    <h2 class="font-bold uppercase dark:text-white underline"> Lieu d’habitation</h2>
                </div>
                <div class="grid md:grid-cols-3 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="VilleArtisan" id="Ville" value="{{ old('VilleArtisan') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Ville" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ville</label>
                        @error('VilleArtisan')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="CommuneArtisan" id="Commune" value="{{ old('CommuneArtisan') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Commune" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Commune</label>
                        @error('CommuneArtisan')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="QuartierArtisan" id="Quartier" value="{{ old('QuartierArtisan') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Quartier" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quartier</label>
                        @error('QuartierArtisan')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-8 md:gap-6">
                    <div class="flex items-center col-span-4 gap-x-3">
                        <label class="font-medium absolute text-base pt-4 dark:text-white  duration-300">Situation matrimoliale ?</label>
                        @error('Situation')
                        <p class="text-red-600 absolute duration-300 mb-8 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center mt-4 col-span-2 gap-x-3">
                        <input id="Marie" value="Marié" name="Situation" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Marie" class="block text-sm font-medium leading-6 dark:text-white text-gray-900">Marié</label>
                    </div>
                    <div class="flex items-center col-span-2 mt-4 gap-x-3">
                        <input value="Célibataire" name="Situation" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Célibataire" class="block text-sm font-medium dark:text-white leading-6 text-gray-900">Célibataire</label>
                    </div>
                    <div class="flex items-center col-span-4 gap-x-3">
                        <label for="Regime" class="font-medium absolute text-base pt-4 dark:text-white  duration-300">Régime matrimoliale ?</label>
                        @error('Regime')
                        <p class="text-red-600 absolute duration-300 mb-8 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center col-span-2 mt-4 gap-x-3">
                        <input id="Regime" name="Regime" value="Communauté de bien" type="radio" class="h-4 w-4 dark:text-white border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Regime" class="block text-sm font-medium leading-6 dark:text-white  text-gray-900">Communauté de bien</label>
                    </div>
                    <div class="flex items-center col-span-2 mt-4 gap-x-3">
                        <input id="Séparation" name="Regime" value="Séparation de bien" type="radio" value="Séparation de bien" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Séparation" class="block text-sm font-medium leading-6 dark:text-white text-gray-900">Séparation de bien</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-6 mt-5 md:gap-6">
                    <div class="relative col-span-2 z-0 w-full mb-6">
                        <label for="Assurance" class="font-medium absolute text-base pt-4 dark:text-white  duration-300">Avez-vous une Assurance Maladie ?</label>
                        @error('Assurance')
                        <p class="text-red-600 absolute duration-300 mb-8 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="CMU" name="Assurance" type="radio" value="CMU" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="CMU" class="block text-sm font-medium leading-6 dark:text-white text-gray-900">CMU</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="CNPS" name="Assurance" value="CNPS" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="CNPS" class="block text-sm font-medium dark:text-white leading-6 text-gray-900">CNPS</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="AUTREASSURANCE" name="Assurance" value="AUTREASSURANCE" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="AUTREASSURANCE" class="block text-sm dark:text-white font-medium leading-6 text-gray-900">AUTRE</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="autre" id="autre" value="{{ old('autre') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="autre" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Autre</label>
                        @error('autre')
                        <p class="text-red-600 absolute duration-300 mb-8 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-2 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="numeroCnps" id="numcnps" value="{{ old('numeroCnps') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="numcnps" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">N° CNPS</label>
                        @error('numeroCnps')
                        <p class="text-red-600 absolute duration-300 mb-8 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="Agence" id="Agence" value="{{ old('Agence') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Agence" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Agence de rattachement</label>
                        @error('Agence')
                        <p class="text-red-600 absolute duration-300 mb-8 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-8 mt-5 md:gap-6">
                    <div class="relative col-span-3 z-0 w-full mb-6">
                        <label for="Affiliation" class="font-medium absolute text-base pt-4 dark:text-white  duration-300">Etes-vous affilié à une banque ou microfinance ?</label>
                        @error('etatFinance')
                        <p class="text-red-600 absolute mt-10 duration-300 italic text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="Oui" name="etatFinance" value="Oui" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Oui" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Oui</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="Non" name="etatFinance" value="Non" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="Non" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Non</label>
                    </div>
                    <div class="relative col-span-3 z-0 w-full mb-6 group">
                        <input type="text" name="nomfinance" id="nomfinance" value="{{ old('nomfinance') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="nomFinance" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Si oui la(les)quelles ?</label>
                        @error('nomFinance')
                        <p class="text-red-600 italic text-xs duration-150 ease-in-out">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-8 mt-5 md:gap-6">
                    <div class="relative col-span-3 z-0 w-full mb-6">
                        <label class="font-medium absolute text-base pt-4 dark:text-white  duration-300">Etes-vous affilié à une organisation professionnelle ?</label>
                        @error('reponseOrganition')
                        <p class="text-red-600 absolute mt-10 duration-300 italic text-sm">{{ $message }}</p>
                        @enderror
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
                        <input type="organisation" name="NomOrganisation" id="organisation" value="{{ old('NomOrganisation') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="organisation" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Si oui la(les)quelles ?</label>
                        @error('NomOrganisation')
                        <p class="text-red-600 italic text-xs  duration-150 ease-in-out">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-4 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="NbreEnfant" id="NbreEnfant" value="{{ old('NbreEnfant') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="NbreEnfant" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre d’enfant à charge </label>
                        @error('NbreEnfant')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="NbreFille" id="NbreFille" value="{{ old('NbreFille') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="NbreFille" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fille</label>
                        @error('NbreFille')
                        <p class="text-red-500 italic text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="NbreGarcon" value="{{ old('NbreGarcon') }}" id="NbreFille" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="NbreGarcon" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Garçon</label>
                        @error('NbreGarcon')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="Scolaire" id="Scolaire" value="{{ old('Scolaire') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Scolaire" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Scolarisé</label>
                        @error('Scolaire')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-3 mt-4 md:gap-6">
                    <h2 class="font-bold uppercase dark:text-white underline">IDENTIFICATION DE L’ACTIVITE</h2>
                </div>
                <div class="grid md:grid-cols-2 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="Activite_1" id="Activite" value="{{ old('Activite_1') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Activite" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Activité 1</label>
                        @error('Activite_1')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="denomination" value="{{ old('denomination') }}" id="DENOMINATION" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="DENOMINATION" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">DENOMINATION:</label>
                        @error('denomination')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="Localisation_1" id="Localisation1" value="{{ old('Localisation_1') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Localisation1" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Localisation 1</label>
                        @error('Localisation_1')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="numero_rccm" value="{{ old('numero_rccm') }}" id="num_rccm" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="num_rccm" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">RCCM N°</label>
                        @error('numero_rccm')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="Activite_2" id="Activité2" value="{{ old('Activite_2') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Activité2" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Activité 2</label>
                        @error('Activite_2')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="numeroDeLaDfe" id="num_dfe" value="{{ old('numeroDeLaDfe') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="num_dfe" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">DFE N°</label>
                        @error('numeroDeLaDfe')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="Localisation_2" value="{{ old('Localisation_2') }}" id="Localisation2" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Localisation_2" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Localisation 2</label>
                        @error('Localisation_2')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="numeroCnpsActivite" value="{{ old('numeroCnps') }}" id="numcnps" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="numcnps" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">N° CNPS</label>
                        @error('numeroCnpsActivite')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative col-span-full z-0 w-full mb-6 group">
                        <input type="text" name="Projet" id="Projet" value="{{ old('Projet') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Projet" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Projet / Besoin en équipement</label>
                        @error('Projet')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative  z-0 w-full mb-6 group">
                        <input type="text" name="CoutEstimatifEnChiffre" value="{{ old('CoutEstimatifEnChiffre') }}" id="CoutestimatifEnchiffre" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="CoutestimatifEnchiffre" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Coût estimatif (En chiffre FCFA)</label>
                        @error('CoutEstimatifEnChiffre')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative  z-0 w-full mb-6 group">
                        <input type="text" name="CoutEstimatifEnLettre" value="{{ old('CoutEstimatifEnLettre') }}" id="Agent" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="CoutestimatifEnlettre" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Coût estimatif (En lettre)</label>
                        @error('CoutEstimatifEnLettre')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-3 mt-4 md:gap-6">
                    <h2 class="font-bold dark:text-white uppercase underline">INFORMATIONS PARRAINS</h2>
                </div>
                <div class="grid md:grid-cols-3 mt-5 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="NomDuParrain" value="{{ old('NomDuParrain') }}" id="NomParrain" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="NomParrain" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom</label>
                        @error('NomDuParrain')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="PrenomDuParrain" value="{{ old('PrenomDuParrain') }}" id="PrenomParrain" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="PrenomParrain" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prenom</label>
                        @error('PrenomDuParrain')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid md:grid-cols-3 mt-2 md:gap-6">
                        <div class="relative z-0 w-full">
                            <label for="sexeParrain" class="font-medium absolute text-base pt-4 dark:text-white  duration-300">Sexe</label>
                            @error('sexeDuParrain')
                            <p class="text-red-600 absolute mt-10 duration-300 italic text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="FemmeParrain" name="sexeDuParrain" value="Femme" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="FemmeParrain" class="block text-sm font-medium leading-6 dark:text-white text-gray-900">Femme</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="HommeParrain" name="sexeDuParrain" value="Homme" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="HommeParrain" class="block text-sm font-medium leading-6 dark:text-white text-gray-900">Homme</label>
                        </div>
                    </div>
                    <div class="relative z-0 col-span-2 w-full mb-6 group">
                        <input type="text" name="ProfessionDuParrain" value="{{ old('ProfessionDuParrain') }}" id="Professionparrain" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Professionparrain" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Profession</label>
                        @error('ProfessionDuParrain')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative z-0 col-span-full w-full mb-6 group">
                        <input type="text" name="Appreciation_du_bureau" value="{{ old('Appreciation_du_bureau') }}" id="Appreciation_du_bureau" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="Appreciation_du_bureau" class="peer-focus:font-medium absolute text-sm dark:text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Appréciation du bureau</label>
                        @error('Appreciation_du_bureau')
                        <p class="text-red-600 italic text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center col-span-full gap-x-3">
                        <input checked id="checkbox-1" type="checkbox" value="checked" name="checked" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600  dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="Homme" class="block text-sm dark:text-white font-medium leading-6 text-gray-900">J’autorise K-SIRA sarl à partager ces informations avec ses partenaires dans le cadre du développement de mes activités et pour mon bien-être.</label>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="reset" class="rounded-md bg-white px-3 py-2 text-sm font-semibold border-1 text-red-600 shadow-2xl hover:bg-red-600 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 duration-150 ease-in-out focus-visible:outline-indigo-600">Annuler</button>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" style="background-color: #006A4E">Sauvegarder</button>
                </div>
        </div>
        </form>
    </div>
</body>
</html>
