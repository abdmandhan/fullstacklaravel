<x-guest-layout>
    <main>
        <section class="absolute w-full h-full">
            <div class="absolute top-0 w-full h-full bg-gray-100"
                style="background-image: url(./assets/img/register_bg_2.png); background-size: 100%; background-repeat: no-repeat;">
            </div>
            <div class="container h-full px-4 mx-auto">
                <div class="flex items-center content-center justify-center h-full">
                    <div class="w-full px-4 lg:w-4/12">
                        <div
                            class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-green-400 border-0 rounded-lg shadow-lg">
                            <div class="pt-4 text-lg font-bold text-center">
                                Login
                            </div>
                            <div class="flex-auto px-4 py-6 mb-0 rounded-t lg:px-10">
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="relative w-full mb-3">
                                        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                                            for="grid-password">Email</label>
                                        <input type="email"
                                            class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow focus:outline-none focus:ring"
                                            placeholder="Email" style="transition: all 0.15s ease 0s;" name="email" />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                                            for="grid-password">Password</label>
                                        <input type="password"
                                            class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow focus:outline-none focus:ring"
                                            placeholder="Password" style="transition: all 0.15s ease 0s;"
                                            name="password" />
                                    </div>
                                    <div class="mt-6 text-center">
                                        <button
                                            class="w-full px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase bg-gray-900 rounded shadow outline-none active:bg-gray-700 hover:shadow-lg focus:outline-none"
                                            type="submit" style="transition: all 0.15s ease 0s;">
                                            Sign In
                                        </button>
                                    </div>
                                    <div class="mt-4 text-sm">
                                        Didn't have account? Let's <a class="font-bold underline"
                                            href="{{ route('register')}}">Create One</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="flex flex-wrap mt-6">
                            <div class="w-1/2">
                                <a href="#pablo" class="text-gray-300"><small>Forgot password?</small></a>
                            </div>
                            <div class="w-1/2 text-right">
                                <a href="#pablo" class="text-gray-300"><small>Create new account</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="absolute bottom-0 w-full pb-6 bg-gray-100">
                <div class="container px-4 mx-auto">
                    <hr class="mb-6 border-green-700 border-b-1" />
                    <div class="flex flex-wrap items-center justify-center md:justify-between">
                        <div class="w-full px-4 md:w-4/12">
                            <div class="py-1 text-sm font-semibold ">
                                Copyright © 2021
                                <a href="https://www.qiblat.id"
                                    class="py-1 text-sm font-semibold hover:text-gray-400">Qiblat
                                    Indonesia</a>
                            </div>
                        </div>
                        <div class="w-full px-4 md:w-8/12">
                            <ul class="flex flex-wrap justify-center list-none md:justify-end">
                                <li>
                                    <a href="https://www.qiblat.id"
                                        class="block px-3 py-1 text-sm font-semibold hover:text-gray-400">Qiblat
                                        Indonesia
                                        Tim</a>
                                </li>
                                <li>
                                    <a href="https://www.qiblat.id"
                                        class="block px-3 py-1 text-sm font-semibold hover:text-gray-400">About
                                        Us</a>
                                </li>
                                <li>
                                    <a href="http://www.qiblat.id"
                                        class="block px-3 py-1 text-sm font-semibold hover:text-gray-400">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
    </main>
</x-guest-layout>
