<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Fisher &amp; Team Directory - ProFish</title>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f97415",
                        "background-light": "#f8f7f5",
                        "background-dark": "#23170f",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#181411] dark:text-white font-display">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#e6dfdb] dark:border-[#3e2c21] bg-white dark:bg-[#1e140d] px-10 py-3 sticky top-0 z-50">
<div class="flex items-center gap-8">
<div class="flex items-center gap-4">
<div class="size-8 text-primary">
<svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M24 18.4228L42 11.475V34.3663C42 34.7796 41.7457 35.1504 41.3601 35.2992L24 42V18.4228Z" fill="currentColor" fill-rule="evenodd"></path>
<path clip-rule="evenodd" d="M24 8.18819L33.4123 11.574L24 15.2071L14.5877 11.574L24 8.18819ZM9 15.8487L21 20.4805V37.6263L9 32.9945V15.8487ZM27 37.6263V20.4805L39 15.8487V32.9945L27 37.6263ZM25.354 2.29885C24.4788 1.98402 23.5212 1.98402 22.646 2.29885L4.98454 8.65208C3.7939 9.08038 3 10.2097 3 11.475V34.3663C3 36.0196 4.01719 37.5026 5.55962 38.098L22.9197 44.7987C23.6149 45.0671 24.3851 45.0671 25.0803 44.7987L42.4404 38.098C43.9828 37.5026 45 36.0196 45 34.3663V11.475C45 10.2097 44.2061 9.08038 43.0155 8.65208L25.354 2.29885Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">ProFish</h2>
</div>
<div class="hidden lg:flex items-center gap-9">
<a class="text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Tournaments</a>
<a class="text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Rankings</a>
<a class="text-sm font-medium leading-normal text-primary" href="#">Fishers</a>
<a class="text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">News</a>
</div>
</div>
<div class="flex flex-1 justify-end gap-4 sm:gap-8">
<label class="hidden sm:flex flex-col min-w-40 !h-10 max-w-64">
<div class="flex w-full flex-1 items-stretch rounded-xl h-full">
<div class="text-[#8c725f] flex border-none bg-[#f5f2f0] dark:bg-[#2a1e16] items-center justify-center pl-4 rounded-l-xl border-r-0">
<span class="material-symbols-outlined text-[24px]">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-inherit focus:outline-0 focus:ring-0 border-none bg-[#f5f2f0] dark:bg-[#2a1e16] focus:border-none h-full placeholder:text-[#8c725f] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" placeholder="Search fishers..." value=""/>
</div>
</label>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-primary hover:bg-orange-600 transition-colors text-white text-sm font-bold leading-normal tracking-[0.015em]">
<span class="truncate">Sign In</span>
</button>
</div>
</header>
<main class="flex-1 flex justify-center py-8 px-4 sm:px-6 md:px-10 lg:px-20">
<div class="flex flex-col max-w-[1400px] flex-1 w-full gap-8">
<div class="flex flex-col md:flex-row items-center justify-between gap-6">
<div>
<h1 class="text-3xl font-bold tracking-tight text-[#181411] dark:text-white mb-2">Fisher &amp; Team Directory</h1>
<p class="text-[#8c725f] dark:text-[#a08c7a] max-w-2xl">Browse the top ranked professional anglers and teams competing in this season's major tournaments.</p>
</div>
<div class="flex p-1 bg-white dark:bg-[#1e140d] border border-[#e6dfdb] dark:border-[#3e2c21] rounded-xl shadow-sm">
<button class="px-6 py-2 rounded-lg bg-primary text-white text-sm font-bold shadow-sm transition-all">
                            Individual Fishers
                        </button>
<button class="px-6 py-2 rounded-lg text-[#8c725f] dark:text-[#a08c7a] hover:bg-background-light dark:hover:bg-[#2a1e16] text-sm font-medium transition-all">
                            Teams
                        </button>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-[280px_1fr] gap-8 items-start">
<aside class="w-full lg:sticky lg:top-24 space-y-6">
<div class="bg-white dark:bg-[#1e140d] rounded-xl border border-[#e6dfdb] dark:border-[#3e2c21] shadow-sm p-6">
<div class="flex items-center justify-between mb-6">
<h3 class="font-bold text-lg flex items-center gap-2">
<span class="material-symbols-outlined text-primary">tune</span>
                                    Filters
                                </h3>
<button class="text-xs font-bold text-primary hover:underline">Reset</button>
</div>
<div class="mb-6">
<h4 class="text-sm font-bold uppercase tracking-wider text-[#8c725f] dark:text-[#a08c7a] mb-3">Region</h4>
<select class="w-full rounded-lg border-[#e6dfdb] dark:border-[#3e2c21] bg-background-light dark:bg-[#2a1e16] text-sm focus:ring-primary focus:border-primary">
<option>All Regions</option>
<option>North America</option>
<option>Europe</option>
<option>Asia Pacific</option>
</select>
</div>
<div class="mb-6">
<h4 class="text-sm font-bold uppercase tracking-wider text-[#8c725f] dark:text-[#a08c7a] mb-3">Style</h4>
<div class="space-y-2">
<label class="flex items-center gap-3 cursor-pointer group">
<input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm group-hover:text-primary transition-colors">Bass Fishing</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm group-hover:text-primary transition-colors">Fly Fishing</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm group-hover:text-primary transition-colors">Saltwater</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm group-hover:text-primary transition-colors">Ice Fishing</span>
</label>
</div>
</div>
<div>
<h4 class="text-sm font-bold uppercase tracking-wider text-[#8c725f] dark:text-[#a08c7a] mb-3">Ranking Tier</h4>
<div class="space-y-2">
<label class="flex items-center gap-3 cursor-pointer group">
<input checked="" class="border-gray-300 text-primary focus:ring-primary h-4 w-4" name="tier" type="radio"/>
<span class="text-sm group-hover:text-primary transition-colors">All Tiers</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="border-gray-300 text-primary focus:ring-primary h-4 w-4" name="tier" type="radio"/>
<span class="text-sm group-hover:text-primary transition-colors">Pro Elite (Top 50)</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="border-gray-300 text-primary focus:ring-primary h-4 w-4" name="tier" type="radio"/>
<span class="text-sm group-hover:text-primary transition-colors">Semi-Pro</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="border-gray-300 text-primary focus:ring-primary h-4 w-4" name="tier" type="radio"/>
<span class="text-sm group-hover:text-primary transition-colors">Amateur</span>
</label>
</div>
</div>
</div>
</aside>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
<div class="group bg-white dark:bg-[#1e140d] rounded-xl border border-[#e6dfdb] dark:border-[#3e2c21] shadow-sm overflow-hidden hover:shadow-md hover:border-primary/30 transition-all duration-300 flex flex-col">
<div class="h-48 w-full bg-cover bg-center relative" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCHN9jMYAOkfU7hiH_8h7B2jNyLxv7p3H2-QwpZsWq4tb76UHPYqv2A7ygwdld0N_dir0abZbkz4n8f2IdSMwHOyZ7foIKD2PR6YHJylHpmDWh5eQfwLjAaDNiN_iUYmRl9Q1tjC-JH95y3TRi4mnHIIqtzqqUZQvV-RgnVzusokJlk3Dz3_HiDB4EJvR1trf_i8Mn6uOXblpduUtO7QNaza12M8wt8K2pnl6gLnttQZYVeeX5qRKVczEWeIHyBAiX-QErH5SL393Le");'>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<div class="absolute bottom-3 left-3 right-3 flex justify-between items-end">
<span class="bg-primary text-white text-xs font-bold px-2 py-1 rounded">PRO</span>
<div class="size-8 rounded-full bg-white flex items-center justify-center p-1">
<span class="material-symbols-outlined text-black text-[18px]">workspace_premium</span>
</div>
</div>
</div>
<div class="p-5 flex flex-col flex-1">
<h3 class="text-xl font-bold text-[#181411] dark:text-white mb-1 group-hover:text-primary transition-colors">John 'The Hook' Doe</h3>
<p class="text-sm text-[#8c725f] dark:text-[#a08c7a] mb-4 flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">location_on</span> Austin, TX
                                </p>
<div class="grid grid-cols-2 gap-2 py-3 border-t border-b border-[#e6dfdb] dark:border-[#3e2c21] mb-4 bg-background-light/50 dark:bg-[#2a1e16]/50 rounded-lg px-2">
<div class="text-center border-r border-[#e6dfdb] dark:border-[#3e2c21]">
<span class="block text-xs font-bold text-[#8c725f] dark:text-[#a08c7a] uppercase tracking-wider">Points</span>
<span class="block text-lg font-bold text-primary">2,450</span>
</div>
<div class="text-center">
<span class="block text-xs font-bold text-[#8c725f] dark:text-[#a08c7a] uppercase tracking-wider">Rank</span>
<span class="block text-lg font-bold text-[#181411] dark:text-white">#4</span>
</div>
</div>
<button class="mt-auto w-full py-2.5 rounded-lg bg-primary hover:bg-orange-600 text-white text-sm font-bold transition-colors flex items-center justify-center gap-2">
                                    View Profile
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
<div class="group bg-white dark:bg-[#1e140d] rounded-xl border border-[#e6dfdb] dark:border-[#3e2c21] shadow-sm overflow-hidden hover:shadow-md hover:border-primary/30 transition-all duration-300 flex flex-col">
<div class="h-48 w-full bg-cover bg-center relative" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAcd385CksU7EpJnHn79hSY1Unfssd55vzwGmHNXbrn4CV3Kv1USigRyVr-iYcchhkvkcFsSpfK2uCo4DeO-YoKQTlLzdGcyqMzinlEkmqiM9Uu_x6-kFjusev9lSzOEBBq-S7bOOTE3G3Z50HDc0hm-D54wtJUC9RFKvPMdZVWmM3ckm6E1V-iRMKBdbPCqmRVzv0FkD7Bw08vsa9Nr4swQuGYsWQvJP5egTzdrEjxftbrCzMEg51RHMimWORslUOxxiD7kzvS_e7a");'>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<div class="absolute bottom-3 left-3 right-3 flex justify-between items-end">
<span class="bg-primary text-white text-xs font-bold px-2 py-1 rounded">PRO</span>
<div class="size-8 rounded-full bg-white flex items-center justify-center p-1">
<span class="material-symbols-outlined text-black text-[18px]">sailing</span>
</div>
</div>
</div>
<div class="p-5 flex flex-col flex-1">
<h3 class="text-xl font-bold text-[#181411] dark:text-white mb-1 group-hover:text-primary transition-colors">Sarah Jenkins</h3>
<p class="text-sm text-[#8c725f] dark:text-[#a08c7a] mb-4 flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">location_on</span> Miami, FL
                                </p>
<div class="grid grid-cols-2 gap-2 py-3 border-t border-b border-[#e6dfdb] dark:border-[#3e2c21] mb-4 bg-background-light/50 dark:bg-[#2a1e16]/50 rounded-lg px-2">
<div class="text-center border-r border-[#e6dfdb] dark:border-[#3e2c21]">
<span class="block text-xs font-bold text-[#8c725f] dark:text-[#a08c7a] uppercase tracking-wider">Points</span>
<span class="block text-lg font-bold text-primary">2,105</span>
</div>
<div class="text-center">
<span class="block text-xs font-bold text-[#8c725f] dark:text-[#a08c7a] uppercase tracking-wider">Rank</span>
<span class="block text-lg font-bold text-[#181411] dark:text-white">#12</span>
</div>
</div>
<button class="mt-auto w-full py-2.5 rounded-lg bg-primary hover:bg-orange-600 text-white text-sm font-bold transition-colors flex items-center justify-center gap-2">
                                    View Profile
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
<div class="group bg-white dark:bg-[#1e140d] rounded-xl border border-[#e6dfdb] dark:border-[#3e2c21] shadow-sm overflow-hidden hover:shadow-md hover:border-primary/30 transition-all duration-300 flex flex-col">
<div class="h-48 w-full bg-cover bg-center relative" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCH17JRseMM5Xc-JK5xPRauqxKOAjqw9SvZ6qnOymSFoBKLe12FkN1rGH2HY_CkDwpfEXIMEuivTtLntqGFpKHUjKP7rxUuYLXqKB8ZLpL34gyzpbjF7iF-7Zu4KuFlIsmoHJrynC3kZvlIocHbycpdf4V9ca6LCeDQFgKLyMssmTLGQr4D3WyDEHILh3fYAXKZoK5uEDuhNvAILgmwizOFPpcT5k0MZfiw_qEYGAWdN8XCbn9DVOGAD3mVUwyMUgPwG0FjLmw4wm3I");'>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<div class="absolute bottom-3 left-3 right-3 flex justify-between items-end">
<span class="bg-gray-600 text-white text-xs font-bold px-2 py-1 rounded">SEMI-PRO</span>
<div class="size-8 rounded-full bg-white flex items-center justify-center p-1">
<span class="material-symbols-outlined text-black text-[18px]">anchor</span>
</div>
</div>
</div>
<div class="p-5 flex flex-col flex-1">
<h3 class="text-xl font-bold text-[#181411] dark:text-white mb-1 group-hover:text-primary transition-colors">Mike Ross</h3>
<p class="text-sm text-[#8c725f] dark:text-[#a08c7a] mb-4 flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">location_on</span> Seattle, WA
                                </p>
<div class="grid grid-cols-2 gap-2 py-3 border-t border-b border-[#e6dfdb] dark:border-[#3e2c21] mb-4 bg-background-light/50 dark:bg-[#2a1e16]/50 rounded-lg px-2">
<div class="text-center border-r border-[#e6dfdb] dark:border-[#3e2c21]">
<span class="block text-xs font-bold text-[#8c725f] dark:text-[#a08c7a] uppercase tracking-wider">Points</span>
<span class="block text-lg font-bold text-primary">1,890</span>
</div>
<div class="text-center">
<span class="block text-xs font-bold text-[#8c725f] dark:text-[#a08c7a] uppercase tracking-wider">Rank</span>
<span class="block text-lg font-bold text-[#181411] dark:text-white">#45</span>
</div>
</div>
<button class="mt-auto w-full py-2.5 rounded-lg bg-primary hover:bg-orange-600 text-white text-sm font-bold transition-colors flex items-center justify-center gap-2">
                                    View Profile
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
<div class="group bg-white dark:bg-[#1e140d] rounded-xl border border-[#e6dfdb] dark:border-[#3e2c21] shadow-sm overflow-hidden hover:shadow-md hover:border-primary/30 transition-all duration-300 flex flex-col">
<div class="h-48 w-full bg-cover bg-center relative" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCNGcyR9O_Zxs1gvQ0FHZBuhD2HCyDr_9qUOE6JQxC4uLmJltjwMHuBIWxV3k6KG9LChtrKoJJQx-yN-tEN6YH6uE0XR88tbgwvrvxVZIyG6ZlWdlI9bmBMvbHryYdgzv88qlBWuXJ6O0qrUeaDoLiRrYbejqK0q1LxpMyOHfiOHHEdINyUit_CHUS4av0qji5r04-V9t4LxAQZpuNBV_p3lcjkwVyClqNXEdc8Et815TnZ41xpA_mehYqITGrRyz1LIT40V4cLFaX7");'>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<div class="absolute bottom-3 left-3 right-3 flex justify-between items-end">
<span class="bg-primary text-white text-xs font-bold px-2 py-1 rounded">PRO</span>
<div class="size-8 rounded-full bg-white flex items-center justify-center p-1">
<span class="material-symbols-outlined text-black text-[18px]">kayaking</span>
</div>
</div>
</div>
<div class="p-5 flex flex-col flex-1">
<h3 class="text-xl font-bold text-[#181411] dark:text-white mb-1 group-hover:text-primary transition-colors">David Chen</h3>
<p class="text-sm text-[#8c725f] dark:text-[#a08c7a] mb-4 flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">location_on</span> Vancouver, BC
                                </p>
<div class="grid grid-cols-2 gap-2 py-3 border-t border-b border-[#e6dfdb] dark:border-[#3e2c21] mb-4 bg-background-light/50 dark:bg-[#2a1e16]/50 rounded-lg px-2">
<div class="text-center border-r border-[#e6dfdb] dark:border-[#3e2c21]">
<span class="block text-xs font-bold text-[#8c725f] dark:text-[#a08c7a] uppercase tracking-wider">Points</span>
<span class="block text-lg font-bold text-primary">2,305</span>
</div>
<div class="text-center">
<span class="block text-xs font-bold text-[#8c725f] dark:text-[#a08c7a] uppercase tracking-wider">Rank</span>
<span class="block text-lg font-bold text-[#181411] dark:text-white">#8</span>
</div>
</div>
<button class="mt-auto w-full py-2.5 rounded-lg bg-primary hover:bg-orange-600 text-white text-sm font-bold transition-colors flex items-center justify-center gap-2">
                                    View Profile
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
<div class="group bg-white dark:bg-[#1e140d] rounded-xl border border-[#e6dfdb] dark:border-[#3e2c21] shadow-sm overflow-hidden hover:shadow-md hover:border-primary/30 transition-all duration-300 flex flex-col">
<div class="h-48 w-full bg-cover bg-center relative" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCqWOm8zw7Jx8Exlp1sK_mEGov0-C-7ejWnfP-R5il-UKjUCf-68SRV9oiV1CjTEt58CZs2VWvCPD79PfIOT_RGXGha4SyK3oe0GZqywqB88lGLgTwVZxIBHW0HgwrZPHfu_Un-v9bq9PV1J3ZsbC3IdAMoWPpw2KwSx9Hp9ge1zXvkLEptoroalF0Sc9rlhcyxrEbUcnBCJsuH7nqssr8_2zGS4j5WQAyb2Bc8eNSMl401jBvFZdvAQHbAGLX5mCDu0w-vGmIMn8Jo");'>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<div class="absolute bottom-3 left-3 right-3 flex justify-between items-end">
<span class="bg-primary text-white text-xs font-bold px-2 py-1 rounded">PRO</span>
<div class="size-8 rounded-full bg-white flex items-center justify-center p-1">
<span class="material-symbols-outlined text-black text-[18px]">water_drop</span>
</div>
</div>
</div>
<div class="p-5 flex flex-col flex-1">
<h3 class="text-xl font-bold text-[#181411] dark:text-white mb-1 group-hover:text-primary transition-colors">Elena Rodriguez</h3>
<p class="text-sm text-[#8c725f] dark:text-[#a08c7a] mb-4 flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">location_on</span> San Diego, CA
                                </p>
<div class="grid grid-cols-2 gap-2 py-3 border-t border-b border-[#e6dfdb] dark:border-[#3e2c21] mb-4 bg-background-light/50 dark:bg-[#2a1e16]/50 rounded-lg px-2">
<div class="text-center border-r border-[#e6dfdb] dark:border-[#3e2c21]">
<span class="block text-xs font-bold text-[#8c725f] dark:text-[#a08c7a] uppercase tracking-wider">Points</span>
<span class="block text-lg font-bold text-primary">2,510</span>
</div>
<div class="text-center">
<span class="block text-xs font-bold text-[#8c725f] dark:text-[#a08c7a] uppercase tracking-wider">Rank</span>
<span class="block text-lg font-bold text-[#181411] dark:text-white">#2</span>
</div>
</div>
<button class="mt-auto w-full py-2.5 rounded-lg bg-primary hover:bg-orange-600 text-white text-sm font-bold transition-colors flex items-center justify-center gap-2">
                                    View Profile
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
<div class="group bg-white dark:bg-[#1e140d] rounded-xl border border-[#e6dfdb] dark:border-[#3e2c21] shadow-sm overflow-hidden hover:shadow-md hover:border-primary/30 transition-all duration-300 flex flex-col">
<div class="h-48 w-full bg-[#f0f0f0] dark:bg-[#2a1e16] flex items-center justify-center relative">
<span class="material-symbols-outlined text-6xl text-[#e6dfdb] dark:text-[#3e2c21]">person</span>
<div class="absolute bottom-3 left-3 right-3 flex justify-between items-end">
<span class="bg-gray-600 text-white text-xs font-bold px-2 py-1 rounded">AMATEUR</span>
</div>
</div>
<div class="p-5 flex flex-col flex-1">
<h3 class="text-xl font-bold text-[#181411] dark:text-white mb-1 group-hover:text-primary transition-colors">Tom Baker</h3>
<p class="text-sm text-[#8c725f] dark:text-[#a08c7a] mb-4 flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">location_on</span> Chicago, IL
                                </p>
<div class="grid grid-cols-2 gap-2 py-3 border-t border-b border-[#e6dfdb] dark:border-[#3e2c21] mb-4 bg-background-light/50 dark:bg-[#2a1e16]/50 rounded-lg px-2">
<div class="text-center border-r border-[#e6dfdb] dark:border-[#3e2c21]">
<span class="block text-xs font-bold text-[#8c725f] dark:text-[#a08c7a] uppercase tracking-wider">Points</span>
<span class="block text-lg font-bold text-primary">850</span>
</div>
<div class="text-center">
<span class="block text-xs font-bold text-[#8c725f] dark:text-[#a08c7a] uppercase tracking-wider">Rank</span>
<span class="block text-lg font-bold text-[#181411] dark:text-white">#104</span>
</div>
</div>
<button class="mt-auto w-full py-2.5 rounded-lg bg-primary hover:bg-orange-600 text-white text-sm font-bold transition-colors flex items-center justify-center gap-2">
                                    View Profile
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
</div>
</main>
</div>

</body></html>