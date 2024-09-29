<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../public/css/output.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../public/css/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
</head>

<body>
    <div class="pt-10 text-center">
        <h2 class="text-2xl font-bold">COLEÇÃO 2</h2>
        <p class="text-gray-500">descrição da coleção... descrição da coleção... descrição da coleção...</p>
    </div>

    <section class="py-8 antialiased bg-gray-50 dark:bg-gray-900 md:py-12">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="grid gap-4 mb-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">

                <!-- PRODUTO -->
                <div
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="w-full h-56">
                        <a href="#">
                            <img class="h-full mx-auto dark:hidden" src="https://placehold.co/600" alt="">
                            <img class="hidden h-full mx-auto dark:block" src="https://placehold.co/600" alt="">
                        </a>
                    </div>

                    <div class="pt-6">
                        <div class="flex items-center justify-between gap-4 mb-4">
                            <span
                                class="me-2 rounded bg-purple-100 px-2.5 py-0.5 text-xs font-medium text-purple-800 dark:bg-purple-900 dark:text-purple-300">
                                15% de Desconto</span>

                            <div class="flex items-center justify-end gap-1">
                                <button type="button" data-tooltip-target="tooltip-quick-look-2"
                                    class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Ver Produto </span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"></path>
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    </svg>
                                </button>
                                <div id="tooltip-quick-look-2" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(634.444px, -875.556px);"
                                    data-popper-placement="top">
                                    Ver Produto
                                    <div class="tooltip-arrow" data-popper-arrow=""
                                        style="position: absolute; left: 0px; transform: translate(43.3333px, 0px);">
                                    </div>
                                </div>

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites-2"
                                    class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Adicionar aos favoritos </span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z">
                                        </path>
                                    </svg>
                                </button>
                                <div id="tooltip-add-to-favorites-2" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(651.111px, -875.556px);"
                                    data-popper-placement="top">
                                    Adicionar aos favoritos
                                    <div class="tooltip-arrow" data-popper-arrow=""
                                        style="position: absolute; left: 0px; transform: translate(66.6667px, 0px);">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Nome
                            do Produto</a>
                        <div class="flex items-center gap-2 mt-2">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>

                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>

                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>

                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>

                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>
                            </div>

                            <p class="text-sm font-medium text-gray-900 dark:text-white">4.9</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(1,233)</p>
                        </div>

                        <ul class="flex items-center gap-4 mt-2">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m7.171 12.906-2.153 6.411 2.672-.89 1.568 2.34 1.825-5.183m5.73-2.678 2.154 6.411-2.673-.89-1.568 2.34-1.825-5.183M9.165 4.3c.58.068 1.153-.17 1.515-.628a1.681 1.681 0 0 1 2.64 0 1.68 1.68 0 0 0 1.515.628 1.681 1.681 0 0 1 1.866 1.866c-.068.58.17 1.154.628 1.516a1.681 1.681 0 0 1 0 2.639 1.682 1.682 0 0 0-.628 1.515 1.681 1.681 0 0 1-1.866 1.866 1.681 1.681 0 0 0-1.516.628 1.681 1.681 0 0 1-2.639 0 1.681 1.681 0 0 0-1.515-.628 1.681 1.681 0 0 1-1.867-1.866 1.681 1.681 0 0 0-.627-1.515 1.681 1.681 0 0 1 0-2.64c.458-.361.696-.935.627-1.515A1.681 1.681 0 0 1 9.165 4.3ZM14 9a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z">
                                    </path>
                                </svg>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Mais Popular</p>
                            </li>

                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z">
                                    </path>
                                </svg>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Melhor Preço</p>
                            </li>
                        </ul>

                        <div class="flex items-center justify-between gap-4 mt-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">R$0,00</p>

                            <button type="button"
                                class="inline-flex items-center rounded-lg bg-purple-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-purple-800 focus:outline-none focus:ring-4  focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                                <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6">
                                    </path>
                                </svg>
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                </div>
                <!-- FIM DO PRODUTO -->

                <!-- PRODUTO -->
                <div
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="w-full h-56">
                        <a href="#">
                            <img class="h-full mx-auto dark:hidden" src="https://placehold.co/600" alt="">
                            <img class="hidden h-full mx-auto dark:block" src="https://placehold.co/600" alt="">
                        </a>
                    </div>

                    <div class="pt-6">
                        <div class="flex items-center justify-between gap-4 mb-4">
                            <span
                                class="me-2 rounded bg-purple-100 px-2.5 py-0.5 text-xs font-medium text-purple-800 dark:bg-purple-900 dark:text-purple-300">
                                15% de Desconto</span>

                            <div class="flex items-center justify-end gap-1">
                                <button type="button" data-tooltip-target="tooltip-quick-look-2"
                                    class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Ver Produto </span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"></path>
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    </svg>
                                </button>
                                <div id="tooltip-quick-look-2" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(634.444px, -875.556px);"
                                    data-popper-placement="top">
                                    Ver Produto
                                    <div class="tooltip-arrow" data-popper-arrow=""
                                        style="position: absolute; left: 0px; transform: translate(43.3333px, 0px);">
                                    </div>
                                </div>

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites-2"
                                    class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Adicionar aos favoritos </span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z">
                                        </path>
                                    </svg>
                                </button>
                                <div id="tooltip-add-to-favorites-2" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(651.111px, -875.556px);"
                                    data-popper-placement="top">
                                    Adicionar aos favoritos
                                    <div class="tooltip-arrow" data-popper-arrow=""
                                        style="position: absolute; left: 0px; transform: translate(66.6667px, 0px);">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Nome
                            do Produto</a>
                        <div class="flex items-center gap-2 mt-2">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>

                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>

                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>

                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>

                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>
                            </div>

                            <p class="text-sm font-medium text-gray-900 dark:text-white">4.9</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(1,233)</p>
                        </div>

                        <ul class="flex items-center gap-4 mt-2">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m7.171 12.906-2.153 6.411 2.672-.89 1.568 2.34 1.825-5.183m5.73-2.678 2.154 6.411-2.673-.89-1.568 2.34-1.825-5.183M9.165 4.3c.58.068 1.153-.17 1.515-.628a1.681 1.681 0 0 1 2.64 0 1.68 1.68 0 0 0 1.515.628 1.681 1.681 0 0 1 1.866 1.866c-.068.58.17 1.154.628 1.516a1.681 1.681 0 0 1 0 2.639 1.682 1.682 0 0 0-.628 1.515 1.681 1.681 0 0 1-1.866 1.866 1.681 1.681 0 0 0-1.516.628 1.681 1.681 0 0 1-2.639 0 1.681 1.681 0 0 0-1.515-.628 1.681 1.681 0 0 1-1.867-1.866 1.681 1.681 0 0 0-.627-1.515 1.681 1.681 0 0 1 0-2.64c.458-.361.696-.935.627-1.515A1.681 1.681 0 0 1 9.165 4.3ZM14 9a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z">
                                    </path>
                                </svg>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Mais Popular</p>
                            </li>

                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z">
                                    </path>
                                </svg>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Melhor Preço</p>
                            </li>
                        </ul>

                        <div class="flex items-center justify-between gap-4 mt-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">R$0,00</p>

                            <button type="button"
                                class="inline-flex items-center rounded-lg bg-purple-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-purple-800 focus:outline-none focus:ring-4  focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                                <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6">
                                    </path>
                                </svg>
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                </div>
                <!-- FIM DO PRODUTO -->

                <!-- PRODUTO -->
                <div
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="w-full h-56">
                        <a href="#">
                            <img class="h-full mx-auto dark:hidden" src="https://placehold.co/600" alt="">
                            <img class="hidden h-full mx-auto dark:block" src="https://placehold.co/600" alt="">
                        </a>
                    </div>

                    <div class="pt-6">
                        <div class="flex items-center justify-between gap-4 mb-4">
                            <span
                                class="me-2 rounded bg-purple-100 px-2.5 py-0.5 text-xs font-medium text-purple-800 dark:bg-purple-900 dark:text-purple-300">
                                15% de Desconto</span>

                            <div class="flex items-center justify-end gap-1">
                                <button type="button" data-tooltip-target="tooltip-quick-look-2"
                                    class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Ver Produto </span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"></path>
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    </svg>
                                </button>
                                <div id="tooltip-quick-look-2" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(634.444px, -875.556px);"
                                    data-popper-placement="top">
                                    Ver Produto
                                    <div class="tooltip-arrow" data-popper-arrow=""
                                        style="position: absolute; left: 0px; transform: translate(43.3333px, 0px);">
                                    </div>
                                </div>

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites-2"
                                    class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Adicionar aos favoritos </span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z">
                                        </path>
                                    </svg>
                                </button>
                                <div id="tooltip-add-to-favorites-2" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(651.111px, -875.556px);"
                                    data-popper-placement="top">
                                    Adicionar aos favoritos
                                    <div class="tooltip-arrow" data-popper-arrow=""
                                        style="position: absolute; left: 0px; transform: translate(66.6667px, 0px);">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Nome
                            do Produto</a>
                        <div class="flex items-center gap-2 mt-2">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>

                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>

                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>

                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>

                                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                    </path>
                                </svg>
                            </div>

                            <p class="text-sm font-medium text-gray-900 dark:text-white">4.9</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(1,233)</p>
                        </div>

                        <ul class="flex items-center gap-4 mt-2">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m7.171 12.906-2.153 6.411 2.672-.89 1.568 2.34 1.825-5.183m5.73-2.678 2.154 6.411-2.673-.89-1.568 2.34-1.825-5.183M9.165 4.3c.58.068 1.153-.17 1.515-.628a1.681 1.681 0 0 1 2.64 0 1.68 1.68 0 0 0 1.515.628 1.681 1.681 0 0 1 1.866 1.866c-.068.58.17 1.154.628 1.516a1.681 1.681 0 0 1 0 2.639 1.682 1.682 0 0 0-.628 1.515 1.681 1.681 0 0 1-1.866 1.866 1.681 1.681 0 0 0-1.516.628 1.681 1.681 0 0 1-2.639 0 1.681 1.681 0 0 0-1.515-.628 1.681 1.681 0 0 1-1.867-1.866 1.681 1.681 0 0 0-.627-1.515 1.681 1.681 0 0 1 0-2.64c.458-.361.696-.935.627-1.515A1.681 1.681 0 0 1 9.165 4.3ZM14 9a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z">
                                    </path>
                                </svg>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Mais Popular</p>
                            </li>

                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z">
                                    </path>
                                </svg>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Melhor Preço</p>
                            </li>
                        </ul>

                        <div class="flex items-center justify-between gap-4 mt-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">R$0,00</p>

                            <button type="button"
                                class="inline-flex items-center rounded-lg bg-purple-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-purple-800 focus:outline-none focus:ring-4  focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                                <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6">
                                    </path>
                                </svg>
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                </div>
                <!-- FIM DO PRODUTO -->
            </div>
        </div>
        </div>
        </div>
        <!-- Filter modal -->
        <form action="#" method="get" id="filterModal" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto h-modal md:inset-0 md:h-full"
            aria-hidden="true">
            <div class="relative w-full h-full max-w-xl md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 rounded-t md:p-5">
                        <h3 class="text-lg font-normal text-gray-500 dark:text-gray-400">Filters</h3>
                        <button type="button"
                            class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="filterModal">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="px-4 md:px-5">
                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                                data-tabs-toggle="#myTabContent" role="tablist">
                                <li class="mr-1" role="presentation">
                                    <button
                                        class="inline-block pb-2 pr-1 text-blue-600 border-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 dark:border-blue-500"
                                        id="brand-tab" data-tabs-target="#brand" type="button" role="tab"
                                        aria-controls="profile" aria-selected="true">Marcas</button>
                                </li>
                                <li class="mr-1" role="presentation">
                                    <button
                                        class="inline-block px-2 pb-2 text-gray-500 border-gray-100 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300 dark:border-transparent dark:text-gray-400 dark:border-gray-700"
                                        id="advanced-filers-tab" data-tabs-target="#advanced-filters" type="button"
                                        role="tab" aria-controls="advanced-filters" aria-selected="false">Filtros
                                        Avançados</button>
                                </li>
                            </ul>
                        </div>
                        <div id="myTabContent">
                            <div class="grid grid-cols-2 gap-4 md:grid-cols-3" id="brand" role="tabpanel"
                                aria-labelledby="brand-tab">
                                <div class="space-y-2">
                                    <!-- FILTRAR: LETRA A -->
                                    <h5 class="text-lg font-medium text-black uppercase dark:text-white">A</h5>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo</label>
                                    </div>
                                </div>
                                <!-- FIM FILTRAR: LETRA A -->
                                <!-- FILTRAR: LETRA B -->
                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium text-black uppercase dark:text-white">B</h5>
                                    <div class="flex items-center">
                                        <input id="beats" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for="beats"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo
                                            2</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="beats" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for="beats"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo
                                            2</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="beats" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for="beats"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo
                                            2</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="beats" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for="beats"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo
                                            2</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="beats" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for="beats"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo
                                            2</label>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium text-black uppercase dark:text-white">C</h5>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo3</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo3</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo3</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="corsair" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for="corsair"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo3</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo3</label>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium text-black uppercase dark:text-white">D</h5>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo4</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo4</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo4</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo4</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo4</label>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium text-black uppercase dark:text-white">E</h5>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo5</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo5</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo5</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo4</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo4</label>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium text-black uppercase dark:text-white">F</h5>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo5</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo5</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo5</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo5</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="" type="checkbox" value=""
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                        <label for=""
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exemplo5</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FILTROS AVANÇADOS INICIO -->
                        <div class="hidden space-y-4" id="advanced-filters" role="tabpanel"
                            aria-labelledby="advanced-filters-tab">
                            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                                <div class="grid grid-cols-2 gap-3">
                                    <div>
                                        <label for="preco-minimo"
                                            class="block text-sm font-medium text-gray-900 dark:text-white">Preço
                                            Mínimo</label>
                                        <input id="preco-minimo" type="range" min="0" max="100000" value="300" step="1"
                                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                    </div>

                                    <div>
                                        <label for="preco-maximo"
                                            class="block text-sm font-medium text-gray-900 dark:text-white">Preço
                                            Máximo</label>
                                        <input id="preco-maximo" type="range" min="0" max="100000" value="3500" step="1"
                                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                    </div>

                                    <div class="flex items-center justify-between col-span-2 space-x-2">
                                        <input type="number" id="input-precominimo" value="300" min="0" max="100000"
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
                                            placeholder="" required="">

                                        <div class="text-sm font-medium shrink-0 dark:text-gray-300">para</div>

                                        <input type="number" id="input-precomaximo" value="3500" min="0" max="100000"
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
                                            placeholder="" required="">
                                    </div>
                                </div>
                            </div>
                            <div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                                <div>
                                    <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Cores</h6>
                                    <div class="space-y-2">
                                        <div class="flex items-center">
                                            <input id="azul" type="checkbox" value=""
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="azul"
                                                class="flex items-center ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-purple-600"></div>
                                                Azul
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="azul" type="checkbox" value=""
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="azul"
                                                class="flex items-center ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-purple-600"></div>
                                                Azul
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="azul" type="checkbox" value=""
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="azul"
                                                class="flex items-center ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-purple-600"></div>
                                                Azul
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="azul" type="checkbox" value=""
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="azul"
                                                class="flex items-center ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-purple-600"></div>
                                                Azul
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="azul" type="checkbox" value=""
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="azul"
                                                class="flex items-center ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-purple-600"></div>
                                                Azul
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Avaliações</h6>
                                    <div class="space-y-2">
                                        <div class="flex items-center">
                                            <input id="cinco-estrelas" type="radio" value="" name="avaliacoes"
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="cinco-estrelas" class="flex items-center ml-2">
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Uma estrela</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Duas estrelas</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Third star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Quatro estrelas</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Cinco estrelas</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="quatro-estrelas" type="radio" value="" name="avaliacoes"
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="quatro-estrelas" class="flex items-center ml-2">
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Uma estrela</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Duas estrelas</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Tres estrelas</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Quatro estrelas</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Cinco estrelas</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="tres-estrelas" type="radio" value="" name="avaliacoes" checked=""
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="tres-estrelas" class="flex items-center ml-2">
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Uma estrela</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Duas estrelas</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Third star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Quatro estrelas</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Cinco estrelas</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="duas-estrelas" type="radio" value="" name="avaliacoes"
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="duas-estrelas" class="flex items-center ml-2">
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>First star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Second star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Third star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fourth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fifth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="uma-estrela" type="radio" value="" name="avaliacoes"
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="uma-estrela" class="flex items-center ml-2">
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>First star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Second star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Third star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fourth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fifth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Tamanho</h6>
                                    <div class="space-y-2">
                                        <div class="flex items-center">
                                            <input id="tamanho-p" type="checkbox" value=""
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="tamanho-p"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">P</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="tamanho-m" type="checkbox" value=""
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="tamanho-m"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">M</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="tamanho-g" type="checkbox" value=""
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="tamanho-g"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">G</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="tamanho-gg" type="checkbox" value=""
                                                class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-purple-600">
                                            <label for="tamanho-gg"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">GG</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="flex items-center p-4 space-x-4 rounded-b dark:border-gray-600 md:p-5">
                        <button type="submit"
                            class="rounded-lg bg-purple-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 dark:bg-purple-700 dark:hover:bg-purple-800 dark:focus:ring-purple-800">Mostrar
                            resultados</button>
                        <button type="reiniciar"
                            class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-purple-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Resetar</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    </div>

    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script defer src="../../public/js/sidebar.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script defer src="../../public/js/owlcarousel.js"></script>

</body>

</html>