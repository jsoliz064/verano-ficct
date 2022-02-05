<!DOCTYPE html>
<html lang="en">
@extends('plantilla.app')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/dist/output.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">


    <title>Contáctanos</title>
</head>

<body>

    <div>
        <div style="background-color: #7f1d1d; overflow:hidden;" class="">

            <div class="card_1">
                <x-table>
                    <div class="card card-title mt-8 p-6 bg-gray-800 text-white">
                        <h1 class="font-bold text-3xl underline text-center py-12">Contáctanos</h1>
                    </div>

                </x-table>
            </div>

            <div class="cont">


                <div class="card_2">

                    <div class=" card card-body">

                        <div class="h-full md:w-full pt-8 ">
                            <div
                                class="bg-gradient-to-r from-blue-400 to-indigo-500 rounded-2xl text-white p-8 text-center h-72 max-w-sm mx-auto">
                                <h2 class="text-3xl mb-3">Desarrollador Frontend</h2>
                                <!--<p class="text-lg">
                                    <b class="font-bold"> Edad:</b> 21 años
                                </p>-->
                                <p class="text-lg">
                                    <b class="font-bold"> Carrera:</b> Ingeniería en Sistemas
                                </p>
                                <p class="text-lg">
                                    <b class="font-bold"> Semestre:</b> Séptimo
                                </p>

                            </div>
                            <div
                                class="bg-white py-8 px-10 text-center rounded-md shadow-lg transform -translate-y-20 sm:-translate-y-24 max-w-xs mx-auto">
                                <h2 class="font-semibold text-2xl mb-6">Contactar</h2>
                                <img class="w-40 h-40 object-cover rounded-full mx-auto shadow-lg"
                                    src="{{ asset('imagenes/diego.jpg') }}" alt="User avatar">
                                <p class="capitalize text-xl mt-1">Diego Hurtado Vargas</p>
                                <span
                                    class="flex items-center border rounded-full w-24 pr-2 justify-center mx-auto mt-2 mb-12">
                                    <div class="bg-green-400 rounded-full w-2.5 h-2.5 block mr-2"></div>Activo
                                </span>
                                <div style="white-space: nowrap">
                                    <a href="https://wa.me/59171310964?text=Hola,%20necesito%20ayuda" target="_blank">
                                        <button
                                            class="rounded-md bg-gradient-to-r from-blue-400 to-indigo-500 text-xl text-white pt-3 pb-4 px-8 inline">
                                            Enviar un mensaje <i class="fa fa-whatsapp" aria-hidden="true"></i></button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="card_3">

                    <div class="card card-body">

                        <div class="mx-5 h-full grid place-content-center">
                            <div
                                class="mt-8 bg-gradient-to-r from-blue-400 to-indigo-500 rounded-2xl text-white p-8 text-center h-72 max-w-sm mx-auto">
                                <h2 class="text-3xl mb-3">Desarrollador Backend</h2>
                                <!--<p class="text-lg">
                                    <b class="font-bold"> Edad:</b> 22 años
                                </p>-->
                                <p class="text-lg">
                                    <b class="font-bold"> Carrera:</b> Ingeniería en Sistemas
                                </p>
                                <p class="text-lg">
                                    <b class="font-bold"> Semestre:</b> Octavo
                                </p>

                            </div>
                            <div
                                class="bg-white py-8 px-10 text-center rounded-md shadow-lg transform -translate-y-20 sm:-translate-y-24 max-w-xs mx-auto">
                                <h2 class="font-semibold text-2xl mb-6">Contactar</h2>
                                <img class="w-40 h-40 object-cover rounded-full mx-auto shadow-lg"
                                    src="{{ asset('imagenes/daniel2.png') }}" alt="User avatar">
                                <p class="capitalize text-xl mt-1">José Daniel Soliz</p>
                                <span
                                    class="flex items-center border rounded-full w-24 pr-2 justify-center mx-auto mt-2 mb-12">
                                    <div class="bg-green-400 rounded-full w-2.5 h-2.5 block mr-2"></div>Activo
                                </span>
                                <div style="white-space: nowrap">
                                    <button
                                        class="rounded-md bg-gradient-to-r from-blue-400 to-indigo-500 text-xl text-white pt-3 pb-4 px-8 inline">
                                        Enviar un mensaje <i class="fa fa-whatsapp" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card_4">

                    <div class="card card-body">

                        <div class="mx-5 h-full grid place-content-center">
                            <div
                                class="mt-8 bg-gradient-to-r from-blue-400 to-indigo-500 rounded-2xl text-white p-8 text-center h-72 max-w-sm mx-auto">
                                <h2 class="text-3xl mb-3">Desarrollador Frontend</h2>
                                <!--<p class="text-lg">
                                    <b class="font-bold"> Edad:</b> 21 años
                                </p>-->
                                <p class="text-lg">
                                    <b class="font-bold"> Carrera:</b> Ingeniería en Sistemas
                                </p>
                                <p class="text-lg">
                                    <b class="font-bold"> Semestre:</b> Séptimo
                                </p>

                            </div>
                            <div
                                class="bg-white py-8 px-10 text-center rounded-md shadow-lg transform -translate-y-20 sm:-translate-y-24 max-w-xs mx-auto">
                                <h2 class="font-semibold text-2xl mb-6">Contactar</h2>
                                <img class="w-40 h-40 object-cover rounded-full mx-auto shadow-lg"
                                    src="{{ asset('imagenes/luishiño.png') }}" alt="User avatar">
                                <p class="capitalize text-xl mt-1">Luishiño Pericena</p>
                                <span
                                    class="flex items-center border rounded-full w-24 pr-2 justify-center mx-auto mt-2 mb-12">
                                    <div class="bg-green-400 rounded-full w-2.5 h-2.5 block mr-2"></div>Activo
                                </span>
                                <div style="white-space: nowrap">
                                    <a href="https://t.me/user12p" target="_blank">
                                        <button
                                            class="rounded-md bg-gradient-to-r from-blue-400 to-indigo-500 text-xl text-white pt-3 pb-4 px-8 inline">
                                            Enviar un mensaje <i class="fa fa-telegram" aria-hidden="true"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/contact2.js') }}"></script>

</body>


</html>
