<!DOCTYPE html>
<html class="light" lang="en">

<head>

    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Fisher Profile Settings - ProAngler</title>
    <?php require_once __DIR__ . "/../Components/FisherHeaderScript.php"?>

</head>

<body
    class="bg-background-light dark:bg-background-dark text-[#181411] dark:text-white font-display h-screen w-full overflow-hidden flex flex-col">

    <div class="flex flex-1 h-full overflow-hidden">

        <main class="flex-1 flex flex-col min-w-0 bg-background-light dark:bg-background-dark">

            <?php require_once __DIR__ . "/../Components/FisherHeader.php" ?>


            <div class="flex-1 overflow-y-auto custom-scrollbar">

                <div class="max-w-4xl mx-auto w-full py-10 px-6 sm:px-8">
                    <form class="space-y-8" method="POST" action="">

                        <div
                            class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-gray-200 dark:border-gray-800 pb-6">
                            <div>
                                <h2 class="text-lg font-bold text-slate-800 dark:text-white">General Information</h2>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Manage your public profile and
                                    fishing preferences.</p>
                            </div>
                            <div class="flex gap-3">
                                <a href=""
                                    class="px-4 py-2 text-slate-600 dark:text-slate-300 font-medium hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-colors"
                                    type="button">Discard</a>
                                <button
                                    class="px-5 py-2 bg-primary hover:bg-orange-600 text-white font-bold rounded-lg shadow-md shadow-orange-500/20 transition-all active:scale-95"
                                    type="submit">Save Changes</button>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-start gap-8">
                            <div class="relative group flex-shrink-0">
                                <div class="size-32 rounded-full bg-cover bg-center border-4 border-white dark:border-[#2d2d2d] shadow-md"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBNyxgtKbPPiIqVZRzDI84Va-JuVYnDt7Ozb-Qcwr8dvI7nXQuWVzQlmbT0_cifyRAw4ZUuLXQ3nIyr0ylFcF_LD3y4ZoeW5IuqHjjdQI73pY40FArj0mx-IgYpksPukHg_srtItBSv2iaQG4NSGUJS-8ZSdReu0MSsHtQRzaCr-occcyifpHJi29txAS7LlKvILyE6P6pS5cS8oM-ZC9WBoaLiMd2zPsutJSzW6NVdIiPvgj6EFOGEA65BOInSy7Dgw4Zmg1YVfP9i');">
                                </div>
                                <button
                                    class="absolute bottom-1 right-1 p-2 bg-white dark:bg-[#333] rounded-full border border-gray-200 dark:border-gray-600 text-gray-600 dark:text-gray-300 hover:text-primary transition-colors shadow-sm"
                                    title="Change photo" type="button">

                                    <label for="picture"
                                        class="material-symbols-outlined text-[20px]">photo_camera</label>
                                    <input type="file" name="picture" id="picture" class="hidden">

                                </button>
                            </div>
                            <div class="flex-1 pt-2">
                                <h3 class="text-base font-bold text-slate-800 dark:text-white mb-2">Profile Photo</h3>
                                <p class="text-sm text-gray-500 mb-4 max-w-md">This will be displayed on your profile
                                    and in competition leaderboards. Recommended size: 400x400px.</p>
                                <div class="flex flex-wrap gap-3">
                                    <label for="picture"
                                        class="px-4 py-2 bg-white dark:bg-[#1e1e1e] border border-gray-200 dark:border-gray-700 rounded-lg text-sm font-medium text-slate-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 hover:border-gray-300 dark:hover:border-gray-600 transition-colors"
                                        type="button">Upload New</label>
                                    <button
                                        class="px-4 py-2 text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/10 rounded-lg text-sm font-medium transition-colors"
                                        type="button">Remove Photo</button>
                                </div>
                            </div>
                        </div>

                        <hr class="border-gray-200 dark:border-gray-800" />

                        <section
                            class="bg-white dark:bg-[#1e1e1e] rounded-xl shadow-sm border border-[#f5f2f0] dark:border-gray-800 overflow-hidden">
                            <div
                                class="px-6 py-4 border-b border-[#f5f2f0] dark:border-gray-800 bg-gray-50/50 dark:bg-[#252525]">
                                <h3 class="text-base font-bold text-slate-800 dark:text-white flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-[20px]">person</span>
                                    Personal Details
                                </h3>
                            </div>
                            <div class="p-6 md:p-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-gray-300 mb-1.5"
                                        for="firstName">First Name</label>
                                    <input
                                        class="block w-full rounded-lg border-gray-200 dark:border-gray-700 bg-white dark:bg-[#252525] text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 sm:text-sm py-2.5 transition-shadow"
                                        id="firstName" type="text" value="Alex" name="name" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-gray-300 mb-1.5"
                                        for="lastName">Last Name</label>
                                    <input
                                        class="block w-full rounded-lg border-gray-200 dark:border-gray-700 bg-white dark:bg-[#252525] text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 sm:text-sm py-2.5 transition-shadow"
                                        id="lastName" type="text" value="Morgan" name="" />
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-slate-700 dark:text-gray-300 mb-1.5"
                                        for="email">Email Address</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span
                                                class="material-symbols-outlined text-gray-400 text-[18px]">mail</span>
                                        </div>
                                        <input
                                            class="block w-full pl-10 rounded-lg border-gray-200 dark:border-gray-700 bg-white dark:bg-[#252525] text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 sm:text-sm py-2.5 transition-shadow"
                                            id="email" type="email" value="alex.morgan@proangler.com" />
                                    </div>
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-slate-700 dark:text-gray-300 mb-1.5"
                                        for="bio">Bio</label>
                                    <textarea
                                        class="block w-full rounded-lg border-gray-200 dark:border-gray-700 bg-white dark:bg-[#252525] text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 sm:text-sm py-2.5 transition-shadow resize-none"
                                        id="bio" placeholder="Tell us a bit about yourself..." rows="4"></textarea>
                                    <p class="mt-1 text-xs text-gray-500 text-right">0/300 characters</p>
                                </div>
                            </div>
                        </section>

                        <section
                            class="bg-white dark:bg-[#1e1e1e] rounded-xl shadow-sm border border-[#f5f2f0] dark:border-gray-800 overflow-hidden">
                            <div
                                class="px-6 py-4 border-b border-[#f5f2f0] dark:border-gray-800 bg-gray-50/50 dark:bg-[#252525]">
                                <h3 class="text-base font-bold text-slate-800 dark:text-white flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-[20px]">phishing</span>
                                    Angler Profile
                                </h3>
                            </div>
                            <div class="p-6 md:p-8 space-y-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-gray-300 mb-1.5"
                                        for="club">Club Affiliation</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span
                                                class="material-symbols-outlined text-gray-400 text-[18px]">groups</span>
                                        </div>
                                        <input
                                            class="block w-full pl-10 rounded-lg border-gray-200 dark:border-gray-700 bg-white dark:bg-[#252525] text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 sm:text-sm py-2.5 transition-shadow"
                                            id="club" placeholder="e.g. Bassmaster Elite Series" type="text" />
                                    </div>
                                    <p class="mt-1.5 text-xs text-gray-500">The official fishing club or organization
                                        you represent in competitions.</p>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label
                                            class="block text-sm font-medium text-slate-700 dark:text-gray-300 mb-1.5"
                                            for="region">Home Region</label>
                                        <select
                                            class="block w-full rounded-lg border-gray-200 dark:border-gray-700 bg-white dark:bg-[#252525] text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 sm:text-sm py-2.5 transition-shadow"
                                            id="region">
                                            <option>North America - East Coast</option>
                                            <option>North America - West Coast</option>
                                            <option>North America - Central</option>
                                            <option>Europe</option>
                                            <option>Asia Pacific</option>
                                            <option>South America</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label
                                            class="block text-sm font-medium text-slate-700 dark:text-gray-300 mb-1.5"
                                            for="style">Primary Fishing Style</label>
                                        <select
                                            class="block w-full rounded-lg border-gray-200 dark:border-gray-700 bg-white dark:bg-[#252525] text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 sm:text-sm py-2.5 transition-shadow"
                                            id="style">
                                            <option>Freshwater Bass</option>
                                            <option>Fly Fishing</option>
                                            <option>Saltwater Inshore</option>
                                            <option>Saltwater Offshore</option>
                                            <option>Ice Fishing</option>
                                            <option>Carp Fishing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pt-4 border-t border-gray-100 dark:border-gray-700">
                                    <span
                                        class="block text-sm font-medium text-slate-700 dark:text-gray-300 mb-3">Sponsors</span>
                                    <div class="flex flex-wrap gap-3">
                                        <div
                                            class="flex items-center gap-2 px-3 py-1.5 bg-gray-100 dark:bg-gray-800 rounded-full text-xs font-medium text-gray-700 dark:text-gray-300">
                                            <span class="material-symbols-outlined text-[16px]">verified</span>
                                            Shimano
                                            <button class="ml-1 hover:text-red-500" type="button"><span
                                                    class="material-symbols-outlined text-[14px]">close</span></button>
                                        </div>
                                        <div
                                            class="flex items-center gap-2 px-3 py-1.5 bg-gray-100 dark:bg-gray-800 rounded-full text-xs font-medium text-gray-700 dark:text-gray-300">
                                            <span class="material-symbols-outlined text-[16px]">verified</span>
                                            Cabela's
                                            <button class="ml-1 hover:text-red-500" type="button"><span
                                                    class="material-symbols-outlined text-[14px]">close</span></button>
                                        </div>
                                        <button
                                            class="flex items-center gap-1 px-3 py-1.5 border border-dashed border-gray-300 dark:border-gray-600 rounded-full text-xs font-medium text-gray-500 hover:text-primary hover:border-primary transition-colors"
                                            type="button">
                                            <span class="material-symbols-outlined text-[16px]">add</span>
                                            Add Sponsor
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="flex justify-end pt-4 pb-12 sm:hidden">
                            <button
                                class="w-full py-3 bg-primary hover:bg-orange-600 text-white font-bold rounded-lg shadow-md transition-all"
                                type="submit">Save Changes</button>
                        </div>

                    </form>
                </div>
            </div>

        </main>

    </div>

</body>

</html>