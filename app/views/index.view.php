<!DOCTYPE html>
<html lang="en" class="h-full">
    <?php include __DIR__ . '/partials/header.php'; ?>

    <body class="flex flex-col h-full leading-normal tracking-normal text-white" style="font-family: 'Source Sans Pro', sans-serif;">
        <!--Nav-->
        <nav id="header" class="w-full z-30 top-0 text-white bg-indigo-500">

            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">

                <div class="pl-4 flex items-center">
                    <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"  href="#">
                        MVC
                    </a>
                </div>

                <div class="block lg:hidden pr-4">
                    <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>
            </div>

            <hr class="border-b border-blue-800 opacity-25 my-0 py-0" />
        </nav>

        <section class="flex-1 container mx-auto p-8 bg-white border-b py-8">
            <div class="container max-w-5xl mx-auto m-8">
                <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">Title</h1>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
            </div>
        </section>

        <?php include __DIR__ . '/partials/footer.php'; ?>
    </body>
</html>
