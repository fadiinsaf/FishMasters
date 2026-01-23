<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Competition Podium View - ProFish Manager</title>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;family=Noto+Sans:wght@300..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "text-main": "#181411",
                        "text-sub": "#8c725f",
                    },
                    fontFamily: {
                        "display": ["Lexend", "Noto Sans", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: { "DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px" },
                    boxShadow: {
                        'podium': '0 25px 50px -12px rgba(0, 0, 0, 0.15)',
                    }
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-main dark:text-white overflow-x-hidden min-h-screen flex flex-col">
<!-- Top Navigation -->
<header class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e6dfdb] dark:border-b-[#3a2d25] px-10 py-3 bg-white dark:bg-[#1a110a]">
<div class="flex items-center gap-4">
<div class="size-8 text-primary">
<span class="material-symbols-outlined text-3xl">phishing</span>
</div>
<h2 class="text-text-main dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">ProFish Tournament Manager</h2>
</div>
<div class="flex flex-1 justify-end gap-8">
<div class="hidden md:flex items-center gap-9">
<a class="text-text-main dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Tournaments</a>
<a class="text-text-main dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Anglers</a>
<a class="text-text-main dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Leagues</a>
<a class="text-text-main dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Rules</a>
</div>
<div class="flex gap-2">
<button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-opacity-90 transition-opacity">
<span class="truncate">Dashboard</span>
</button>
<button class="flex size-10 cursor-pointer items-center justify-center rounded-xl bg-[#f5f2f0] dark:bg-[#3a2d25] text-text-main dark:text-white hover:bg-gray-200 dark:hover:bg-[#4a3d35] transition-colors">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="flex size-10 cursor-pointer items-center justify-center rounded-full bg-[#f5f2f0] dark:bg-[#3a2d25] overflow-hidden">
<div class="bg-cover bg-center w-full h-full" data-alt="User profile avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBKnX3K6XtPhWpA0UtiPJ56QnxVmhuvLn8T4-FBHElnc33P4U-PfK1pC5OyOUHYR74TuFdHRfMt-Q85ptZsbvfQp-Q4yIhKtUp8QmxB7amvKEzSZMLC7aNdgk3pFeFW8KszVTHbEkcrOYXfz9KsNpfC7OgBBajxCM32jyDC0gzY82jlmjKFITaVZKYpW1LiGwx27rD6PjxKSZqJJ3iPytwNc-j82iDJKfJ9QSNfIIXBl1LXtccnmigFRx6qhX1LP24a1DWrvCLdbJKw");'></div>
</button>
</div>
</div>
</header>
<main class="flex-1 flex flex-col items-center w-full px-4 sm:px-8 py-8">
<div class="max-w-[1200px] w-full flex flex-col gap-8">
<!-- Page Heading & Actions -->
<div class="flex flex-wrap justify-between items-end gap-4 border-b border-[#e6dfdb] dark:border-[#3a2d25] pb-6">
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2 text-primary font-bold text-sm uppercase tracking-wider">
<span class="material-symbols-outlined text-lg">trophy</span>
                        Official Results
                    </div>
<h1 class="text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">2023 Bassmaster Elite Series</h1>
<div class="flex items-center gap-2 text-text-sub dark:text-gray-400 text-base font-normal">
<span class="material-symbols-outlined text-lg">location_on</span>
<span>Lake Okeechobee, FL</span>
<span class="w-1 h-1 rounded-full bg-current mx-1"></span>
<span>June 12-15, 2023</span>
</div>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 h-10 px-4 bg-white dark:bg-[#3a2d25] border border-[#e6dfdb] dark:border-[#524136] rounded-xl text-sm font-bold text-text-main dark:text-white hover:bg-gray-50 dark:hover:bg-[#4a3d35] transition-colors">
<span class="material-symbols-outlined text-lg">share</span>
                        Share Results
                    </button>
<button class="flex items-center gap-2 h-10 px-4 bg-primary text-white rounded-xl text-sm font-bold shadow-lg shadow-primary/30 hover:bg-primary/90 transition-colors">
<span class="material-symbols-outlined text-lg">download</span>
                        Download PDF
                    </button>
</div>
</div>
<!-- Podium Section -->
<div class="relative w-full min-h-[500px] flex flex-col items-center justify-end py-10 rounded-3xl overflow-hidden bg-gradient-to-b from-white to-[#f5f2f0] dark:from-[#23170f] dark:to-[#1a110a] shadow-inner border border-[#e6dfdb] dark:border-[#3a2d25]">
<!-- Background decorative elements -->
<div class="absolute inset-0 opacity-30 dark:opacity-10 pointer-events-none" style="background-image: radial-gradient(circle at 50% 0%, #f97415 0%, transparent 60%);"></div>
<div class="relative z-10 flex items-end justify-center gap-4 md:gap-8 w-full max-w-4xl px-4">
<!-- 2nd Place -->
<div class="flex flex-col items-center w-1/3 max-w-[240px] group">
<div class="relative mb-4 transition-transform duration-300 group-hover:-translate-y-2">
<div class="w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-[#C0C0C0] shadow-xl overflow-hidden bg-white">
<div class="w-full h-full bg-cover bg-center" data-alt="Portrait of 2nd place winner Mike Iaconelli" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuABPIagG4976jAUqSTJNKXvks9hkFa8AU9HBpM3Jr6g3-kYiSMB9YukprJ7y8qer_shWxMs7A2OvihM5QShxYku9n42-MBwORRSYlU-Y31ey2YcnEXGQbUuY_dyDkQvbtueSkLF28tTuTcUO7SQ76jygjVw9p3htbp-H9etf1X3_dreenUBgDoXLzRizOVdW-kGkFevj2GQThqWZlRZL0PN6Shfb_RwwqwLLu2Rfj8qCuebxtVYWegurDbLHouKODjN6tgDAZWD_tbQ");'></div>
</div>
<div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-[#C0C0C0] text-white text-xs font-bold px-3 py-1 rounded-full shadow-md whitespace-nowrap">
                                2ND PLACE
                            </div>
</div>
<div class="text-center mb-2">
<h3 class="font-bold text-lg md:text-xl leading-tight">Mike Iaconelli</h3>
<p class="text-sm text-text-sub dark:text-gray-400">Team Toyota</p>
</div>
<div class="w-full h-32 md:h-48 bg-gradient-to-t from-[#C0C0C0] to-[#E8E8E8] dark:from-[#5a5a5a] dark:to-[#8a8a8a] rounded-t-xl shadow-podium flex items-start justify-center pt-4 relative">
<div class="text-4xl font-black text-white opacity-80">2</div>
</div>
<div class="mt-4 bg-white dark:bg-[#3a2d25] rounded-xl px-4 py-2 shadow-sm border border-gray-100 dark:border-gray-700 text-center w-full">
<p class="text-xs uppercase text-text-sub dark:text-gray-400 font-bold">Total Weight</p>
<p class="text-xl font-bold text-text-main dark:text-white">22.4 <span class="text-sm font-normal text-text-sub">lbs</span></p>
</div>
</div>
<!-- 1st Place -->
<div class="flex flex-col items-center w-1/3 max-w-[280px] z-20 -mx-2 md:mx-0 group">
<div class="relative mb-6 transition-transform duration-300 group-hover:-translate-y-3">
<div class="absolute -top-10 left-1/2 -translate-x-1/2 text-[#FFD700] drop-shadow-md animate-bounce">
<span class="material-symbols-outlined text-5xl">emoji_events</span>
</div>
<div class="w-32 h-32 md:w-40 md:h-40 rounded-full border-[6px] border-[#FFD700] shadow-2xl overflow-hidden bg-white ring-4 ring-primary/20">
<div class="w-full h-full bg-cover bg-center" data-alt="Portrait of 1st place winner Kevin VanDam" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD4QL-K4cy4QvUOwxeary0iHJTX0RXxqD9X0lxX3lIFgvdro2c-IA2Hpnlc5lkSpy-dDQfrRS9X9lzfQrGhtXYnkr8_hDsrZvqLPXSmvCTVOkYBabOztfuceztHesQ8m2iYGjbHeC8EEY5CbkLuSDL8kMVv4EmArAwifnsAGvPGKjC7p48fnK_1ZI0iwOdZuNXItSv52v4gMtKbvuln-ZQLGDxggf1vvaNfFjpnhW7jBjZvjS3egACGhVG3r5iInqrUU5jmgT8X3YNp");'></div>
</div>
<div class="absolute -bottom-4 left-1/2 -translate-x-1/2 bg-[#FFD700] text-[#744F00] text-sm font-black px-4 py-1.5 rounded-full shadow-lg whitespace-nowrap border-2 border-white dark:border-[#23170f]">
                                CHAMPION
                            </div>
</div>
<div class="text-center mb-3">
<h3 class="font-black text-xl md:text-2xl leading-tight">Kevin VanDam</h3>
<p class="text-sm text-text-sub dark:text-gray-400">Nitro Boats</p>
</div>
<div class="w-full h-48 md:h-64 bg-gradient-to-t from-[#FFD700] to-[#FFF4B8] dark:from-[#bfa100] dark:to-[#ffeaa7] rounded-t-xl shadow-podium flex items-start justify-center pt-6 relative overflow-hidden">
<!-- Confetti effect overlay on podium base -->
<div class="absolute inset-0 opacity-30" style="background-image: radial-gradient(#ffffff 2px, transparent 2px); background-size: 20px 20px;"></div>
<div class="text-6xl font-black text-[#744F00] dark:text-[#3d2900] opacity-80 relative z-10">1</div>
</div>
<div class="mt-4 bg-primary text-white rounded-xl px-6 py-3 shadow-lg shadow-primary/20 text-center w-full transform scale-110">
<p class="text-xs uppercase font-bold opacity-90">Winning Weight</p>
<p class="text-3xl font-black">24.5 <span class="text-lg font-medium">lbs</span></p>
</div>
</div>
<!-- 3rd Place -->
<div class="flex flex-col items-center w-1/3 max-w-[240px] group">
<div class="relative mb-4 transition-transform duration-300 group-hover:-translate-y-2">
<div class="w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-[#CD7F32] shadow-xl overflow-hidden bg-white">
<div class="w-full h-full bg-cover bg-center" data-alt="Portrait of 3rd place winner Rick Clunn" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBWEcZagGsVTdAKHiQVMtJb6eCfpzZQu5V6zJFWiBvT4cIfPxKqRDdgjzgqopjLDYljO5MPCygodWGnKGEMES2_M0YACqLsfHoafnPJypzxRT1hPVYZRPUKgKKpUbSRdfuaMIWlje739xBrv9W6r5Y71TsKeaT1m6bmWdAgFWQU5mrodJXHVYc_7bbtT6d4fuusHRDYi0-KMzAdLqwtF3ArcdpP6OtN9VQrXdUC9WqBSLTXmOvwtxbmF5rJggK9xFr3GsaHthrVPs6d");'></div>
</div>
<div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-[#CD7F32] text-white text-xs font-bold px-3 py-1 rounded-full shadow-md whitespace-nowrap">
                                3RD PLACE
                            </div>
</div>
<div class="text-center mb-2">
<h3 class="font-bold text-lg md:text-xl leading-tight">Rick Clunn</h3>
<p class="text-sm text-text-sub dark:text-gray-400">Luck E Strike</p>
</div>
<div class="w-full h-24 md:h-36 bg-gradient-to-t from-[#CD7F32] to-[#F5Cba7] dark:from-[#8a5522] dark:to-[#d68f56] rounded-t-xl shadow-podium flex items-start justify-center pt-4 relative">
<div class="text-4xl font-black text-white opacity-80">3</div>
</div>
<div class="mt-4 bg-white dark:bg-[#3a2d25] rounded-xl px-4 py-2 shadow-sm border border-gray-100 dark:border-gray-700 text-center w-full">
<p class="text-xs uppercase text-text-sub dark:text-gray-400 font-bold">Total Weight</p>
<p class="text-xl font-bold text-text-main dark:text-white">21.8 <span class="text-sm font-normal text-text-sub">lbs</span></p>
</div>
</div>
</div>
</div>
<!-- Stats & Breakdown Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Winner Detailed Stats -->
<div class="lg:col-span-2 flex flex-col gap-4">
<h3 class="text-xl font-bold text-text-main dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">analytics</span>
                        Performance Breakdown
                    </h3>
<div class="bg-white dark:bg-[#23170f] rounded-2xl border border-[#e6dfdb] dark:border-[#3a2d25] overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-[#f8f7f5] dark:bg-[#2c2018] border-b border-[#e6dfdb] dark:border-[#3a2d25]">
<th class="p-4 text-xs font-bold uppercase text-text-sub dark:text-gray-400">Rank</th>
<th class="p-4 text-xs font-bold uppercase text-text-sub dark:text-gray-400">Angler</th>
<th class="p-4 text-xs font-bold uppercase text-text-sub dark:text-gray-400">Total Fish</th>
<th class="p-4 text-xs font-bold uppercase text-text-sub dark:text-gray-400">Biggest Catch</th>
<th class="p-4 text-xs font-bold uppercase text-text-sub dark:text-gray-400">Net Score</th>
<th class="p-4 text-xs font-bold uppercase text-text-sub dark:text-gray-400"></th>
</tr>
</thead>
<tbody class="divide-y divide-[#e6dfdb] dark:divide-[#3a2d25]">
<tr class="hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors">
<td class="p-4">
<div class="size-8 rounded-full bg-[#FFD700] text-[#744F00] flex items-center justify-center font-bold text-sm">1</div>
</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-cover bg-center" data-alt="Small avatar of Kevin VanDam" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBDmIKwA9V2wYbiMscpZcyP27PyhUZZKWKOly6sCGCnjRPN8ZE7_NcRvghiETPXjGUOGc1bHbLKXcOcYb0pJvAMK0Q5OJTexom5AzNf48yBkgC0cE-UWGGYUAHeyRwDCM7K4Ki4X4v8_Clu3Av18NyZo0lwDOmAHG0EP_vvKRob_wHNpgcnfnWLhIVLpQUj1RHMNce3JJHJxfcMEKcFIR07JiomysG5emoLs-mPUos_0yASdnX5Yl3VuI5IHjO2Nihyk6Uc8y2k39XJ");'></div>
<div>
<p class="font-bold text-text-main dark:text-white">Kevin VanDam</p>
<p class="text-xs text-text-sub dark:text-gray-400">USA</p>
</div>
</div>
</td>
<td class="p-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-text-sub text-lg">set_meal</span>
<span class="font-bold">5 / 5</span>
</div>
</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
                                                8.2 lbs
                                            </span>
</td>
<td class="p-4">
<span class="text-xl font-bold text-primary">24.5</span> <span class="text-xs text-text-sub">lbs</span>
</td>
<td class="p-4 text-right">
<button class="text-text-sub hover:text-primary transition-colors">
<span class="material-symbols-outlined">visibility</span>
</button>
</td>
</tr>
<tr class="hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors">
<td class="p-4">
<div class="size-8 rounded-full bg-[#C0C0C0] text-white flex items-center justify-center font-bold text-sm">2</div>
</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-cover bg-center" data-alt="Small avatar of Mike Iaconelli" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBaGE936hZTpbAi8ZIhqAqTQTbiywfIFwgdP_R-uM91vUojw0XV1KlXg66HAeCRKqZ5cVpdeh4qrKEJKsDyJWZDyDZYbMvSLOI4a0SHPpaTwGky8CG4XUBJaGcZM_P66ceWmccDemfmpAJL7RRKa4q4X9GN4LxZsXTkjgOX-YeQjMa9TJvT5XUFI1Gxj6HgbOpCprGDG3JBIC6UMF5FEGCw-i-NwYHCEOHlVQEz4tEGHe8ogzipRWe_7YvDHFTxaa7rXKFvU20FHtUt");'></div>
<div>
<p class="font-bold text-text-main dark:text-white">Mike Iaconelli</p>
<p class="text-xs text-text-sub dark:text-gray-400">USA</p>
</div>
</div>
</td>
<td class="p-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-text-sub text-lg">set_meal</span>
<span class="font-bold">5 / 5</span>
</div>
</td>
<td class="p-4">
<span class="font-medium">6.5 lbs</span>
</td>
<td class="p-4">
<span class="text-xl font-bold text-text-main dark:text-white">22.4</span> <span class="text-xs text-text-sub">lbs</span>
</td>
<td class="p-4 text-right">
<button class="text-text-sub hover:text-primary transition-colors">
<span class="material-symbols-outlined">visibility</span>
</button>
</td>
</tr>
<tr class="hover:bg-primary/5 dark:hover:bg-primary/10 transition-colors">
<td class="p-4">
<div class="size-8 rounded-full bg-[#CD7F32] text-white flex items-center justify-center font-bold text-sm">3</div>
</td>
<td class="p-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-cover bg-center" data-alt="Small avatar of Rick Clunn" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDFW9BE6tQlkFOgqnU4igKKDo21ZGTwGtreobtKZgFkR0uxeaAmvaCEZV91whk3EoiHQu-7lnxoevJqTnbEWEYcEF4SkNvBs40knWoZRKtBQrSpdpJwTCkt9xWgVkVlZdTG-maAwO4N6FoG4ezpssJjyHoxAlDvZdssITeJ0Zs8ZzL69Yug5ZekSWvYqn2tAHleMrBTzFvC1WHxg_EGuJw4qiy3ozLkeXHDqMBVMfDkCwNmCACryHYovLvLDLS9Q4jRCFhXkPRx3hGG");'></div>
<div>
<p class="font-bold text-text-main dark:text-white">Rick Clunn</p>
<p class="text-xs text-text-sub dark:text-gray-400">USA</p>
</div>
</div>
</td>
<td class="p-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-text-sub text-lg">set_meal</span>
<span class="font-bold">5 / 5</span>
</div>
</td>
<td class="p-4">
<span class="font-medium">5.8 lbs</span>
</td>
<td class="p-4">
<span class="text-xl font-bold text-text-main dark:text-white">21.8</span> <span class="text-xs text-text-sub">lbs</span>
</td>
<td class="p-4 text-right">
<button class="text-text-sub hover:text-primary transition-colors">
<span class="material-symbols-outlined">visibility</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!-- Highlight Cards / Media -->
<div class="flex flex-col gap-4">
<h3 class="text-xl font-bold text-text-main dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">photo_camera</span>
                        Event Highlights
                    </h3>
<div class="bg-white dark:bg-[#23170f] rounded-2xl border border-[#e6dfdb] dark:border-[#3a2d25] p-4 flex flex-col gap-4">
<div class="flex justify-between items-center">
<h4 class="font-bold text-sm uppercase text-text-sub">Big Bass of the Day</h4>
<span class="text-xs bg-primary/10 text-primary px-2 py-1 rounded-md font-bold">New Record</span>
</div>
<div class="rounded-xl overflow-hidden aspect-video bg-gray-100 relative group cursor-pointer">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Angler holding a large bass fish" style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 50%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQ78KryMBmf2Xahfv4hKKI67Ml8V0Y0uoM9hdOT4oey4jVqoiJQpLHLs-XWFv_b4_xYs3q0u6qywVFB7D2Bh9VB0DAfZFEsaMYpwuPsTVG0abfKNtHJwGDgmFCP8nuM4AbR6l3hMTt6N9MfYuxDBwlM6MRDZW-FGyXYdc8rk4V2RjOalfVOznoqjObrTbjthPJmjtQe6YhdsaCKXfq4eKSOIthJguOXbVMJmziBNVaRs9yhMRFP8Zq6eh7GEKyR3mq4M_O4ktAMDh_");'></div>
<div class="absolute bottom-3 left-3 text-white">
<p class="font-bold text-lg">8.2 lbs Largemouth</p>
<p class="text-xs opacity-90">Caught by Kevin VanDam</p>
</div>
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-white">zoom_in</span>
</div>
</div>
</div>
<div class="bg-primary/5 dark:bg-primary/10 rounded-2xl border border-primary/20 p-5 flex flex-col gap-3">
<h4 class="font-bold text-lg text-primary">Winning Pattern</h4>
<p class="text-sm text-text-main dark:text-gray-300 leading-relaxed">
                            Kevin VanDam focused on shallow grass lines using a chartreuse spinnerbait. The cloud cover in the morning proved crucial for the larger bites.
                        </p>
<div class="mt-2 pt-3 border-t border-primary/10 flex gap-2">
<span class="text-xs font-semibold px-2 py-1 bg-white dark:bg-[#3a2d25] rounded border border-gray-200 dark:border-gray-700">Shallow Grass</span>
<span class="text-xs font-semibold px-2 py-1 bg-white dark:bg-[#3a2d25] rounded border border-gray-200 dark:border-gray-700">Spinnerbait</span>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Simple Footer -->
<footer class="w-full bg-white dark:bg-[#1a110a] border-t border-[#e6dfdb] dark:border-[#3a2d25] py-8 mt-8">
<div class="max-w-[1200px] mx-auto px-8 flex flex-col md:flex-row justify-between items-center gap-6">
<div class="flex items-center gap-2 opacity-70">
<span class="material-symbols-outlined">copyright</span>
<span class="text-sm font-medium">2023 ProFish Tournament Manager</span>
</div>
<div class="flex gap-8 grayscale opacity-50">
<!-- Sponsor Logos Placeholders -->
<div class="h-8 w-20 bg-contain bg-no-repeat bg-center" data-alt="Nike Sponsor Logo" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBb36Hs90a8Av1GnGB0PRdLAjJXeh2Gq6qgHrcSBxQRpaSx_202EQyNkxArt_JW2DwlDk4wqQ4aDzkWUH-FLeTEbnTNLwisEssBsgsE1ehcDjeABtVRt3ONGwSoKBCrAQtgEtCPv8SPx0iEbe2HjbTnwzRZSv9LW27sFrQebXvSTfVU5R1o-5gaxPLwDn669w3uqNjWXQLAPZytH4qVUQh588ggkrPKfqVFW0l90EmFp69d2o4SA-DitF3DOZOow3Y-gwj0TaTRPMJT');"></div>
<div class="h-8 w-20 bg-contain bg-no-repeat bg-center" data-alt="Adidas Sponsor Logo" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDyWlNM3kU2Xft0ywTOugkZSL8b7PN8saqi4uLLiAeHWV5SuMmGj_Fwvbkgurc3Nvu1SpeDe8VkJWkx3LkO1Ra4E_0QblisZ1V-95XXRoxUYdog3issXXHJtpfJvT_nSdmKHES333QecV7-YvYNJBWKk215s0ID8TasT2fm_72qm-IsARZ2USS7FV2s574LJ3yyClvEXUf3Q5_scJVDdAay3UantqWy3cut_38chJXq4A60C5q95mzOSy2J8k9-vt8-m5QJqolzSUma');"></div>
<div class="h-8 w-20 bg-contain bg-no-repeat bg-center" data-alt="Under Armour Sponsor Logo" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBzUxwV8qFIlxJGLF_kE9lPCahVIJP16H7LybVl_qp_2LadTVudAyG2mHEFDxPpJ59L7NcoyMw5lAearWir_i3RiQG7R3lInHbPdu5G-sSpBRQGM34iC9C-4ywwJ0jdhIXpeOe8bOifNsnltEQmJRRFZHvdlG78DKDEOUgY3kbATLpeyXAkj8HxGktMMhBc_hxjT4YJLgiz_4lIMCflrOGqlZsG-QxmMIkilFFpnM6gSatbHOQIm8AazzJqEw1oF-w5pXqof7AK45aO');"></div>
</div>
</div>
</footer>
</body></html>