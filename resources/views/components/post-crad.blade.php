@props(['post'])

<article
{{$attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])}}>
<div class="py-6 px-5">
    <div>
        <img src="./images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
    </div>

    <div class="mt-8 flex flex-col justify-between">
        <header>
            <div class="space-x-2">
              <x-category-button :category="$post->category" />
            </div>

            <div class="mt-4">
                <h1 class="text-3xl">
                    <a href="/posts/{{ $post->slug}}">
                        {{$post->title}}
                    </a>
                </h1>

                <span class="mt-2 block text-gray-400 text-xs">
                    Published <time>1 day ago</time>
                </span>
            </div>
        </header>

        <div class="text-sm mt-4">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <p class="mt-4">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
        </div>

        <footer class="flex justify-between items-center mt-8">
            <div class="flex items-center text-sm">
                <img src="./images/lary-avatar.svg" alt="Lary avatar">
                <div class="ml-3">
                    <h5 class="font-bold">Lary Laracore</h5>
                    <h6>Mascot at Laracasts</h6>
                </div>
            </div>

            <div>
                <a href="#"
                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                >Read More</a>
            </div>
        </footer>
        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="./images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
        </section>
        </body>



    </div>
</div>
</article>