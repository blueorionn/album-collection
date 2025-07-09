<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Login | Music Appp</title>
    <meta name="description" content="Login Page for Music Album Collection Site">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="h-full w-full">
        <section class="bg-gray-50">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <?php if (!empty($error)): ?>
                    <div class="w-full sm:max-w-md rounded py-2.5 px-4 mb-6 bg-red-600">
                        <span class="text-lg font-semibold text-gray-100"><?= $error ?? '' ?></span>
                    </div>
                <?php endif; ?>
                <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                            Sign in to your account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="/auth/login" method="post">
                            <div>
                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                                <input
                                    type="text"
                                    name="username"
                                    id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                    placeholder="your_username"
                                    required="" />
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                    required="" />
                            </div>
                            <button
                                type="submit"
                                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Sign in
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>