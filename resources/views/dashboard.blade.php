<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-900">

                    <main class="flex w-full h-full shadow-lg rounded-3xl">
                        <section class="flex flex-col w-2/12 bg-dark rounded-l-3xl">
                          <div class="w-16 mx-auto mt-12 mb-20 p-4 bg-indigo-600 rounded-2xl text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                            </svg>
                          </div>
                          <nav class="relative flex flex-col py-4 items-center">
                            <a href="#" class="relative w-16 p-4 bg-purple-100 text-purple-900 rounded-2xl mb-4">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                  d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                              </svg>
                              <span
                                class="absolute -top-2 -right-2 bg-red-600 h-6 w-6 p-2 flex justify-center items-center text-dark rounded-full">3</span>
                            </a>
                        
                          </nav>
                        </section>
                        <section class="flex flex-col pt-3 w-4/12 bg-dark-900 h-full overflow-y-scroll">
                          <label class="px-3">
                            <input class="rounded-lg p-4 bg-gray-100 transition duration-200 focus:outline-none focus:ring-2 w-full"
                              placeholder="Search..." />
                          </label>

                          <ul class="mt-6">
                            <li class="py-5 border-b px-3 transition hover:bg-indigo-100">
                              <a href="#" class="flex justify-between items-center">
                                <p class="text-light text-gray-400">Form. Maulana</p>
                                <p class="text-md text-gray-400">23m ago</p>
                              </a>
                              <div class="text-md italic text-gray-400 mt-4 mb-0.2">You have been invited!</div>
                            </li>
                            
                          </ul>
                        </section>
                        <section class="w-6/12 px-4 flex flex-col bg-dark rounded-r-3xl">
                          <div class="flex justify-between items-center h-48 border-b-2 mb-8">
                            <div class="flex space-x-4 items-center">
                              <div class="h-12 w-12 rounded-full overflow-hidden">
                                <img src="https://bit.ly/2KfKgdy" loading="lazy" class="h-full w-full object-cover" />
                              </div>
                              <div class="flex flex-col">
                                <p class="text-light text-gray-400">Form. Maulana</p>
                                <p class="text-light text-gray-400">Dubject</p><br>
                                <p class="text-light text-gray-400">Date</p>
                              </div>
                            </div>
                            <div>
                              <ul class="flex text-gray-400 space-x-4">
                                <li class="w-6 h-6">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                  </svg>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <section>
                            <h1 class="font-bold text-2xl">We need UI/UX designer</h1>
                            <article class="mt-8 text-gray-500 leading-7 tracking-wider">
                              <p>Hi Akhil,</p>
                              <p>Design and develop enterprise-facing UI and consumer-facing UI as well as
                                REST API
                                backends.Work with
                                Product Managers and User Experience designers to create an appealing user experience for desktop web and
                                mobile web.</p>
                              <footer class="mt-12">
                                <p>Thanks & Regards,</p>
                                <p>Alexandar</p>
                              </footer>
                            </article>
                          </section>

                        </section>
                      </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
