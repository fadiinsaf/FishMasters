 <!DOCTYPE html>
<html class="light" lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Annuaire des Pêcheurs - ProFish</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&family=Noto+Sans:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
                    fontFamily: { "display": ["Lexend", "sans-serif"] },
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#181411] dark:text-white font-display">
    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
        
        <header class="flex items-center justify-between border-b border-[#e6dfdb] dark:border-[#3e2c21] bg-white dark:bg-[#1e140d] px-10 py-3 sticky top-0 z-50">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-4">
                    <div class="size-8 text-primary font-bold text-2xl">PF</div>
                    <h2 class="text-lg font-bold">ProFish</h2>
                </div>
                <nav class="hidden lg:flex items-center gap-9">
                    <a class="text-sm font-medium hover:text-primary" href="index.php?action=tournaments">Tournois</a>
                    <a class="text-sm font-medium hover:text-primary" href="index.php?action=rankings">Classements</a>
                    <a class="text-sm font-medium text-primary" href="index.php?action=fishermen">Pêcheurs</a>
                </nav>
            </div>
        </header>

        <main class="flex-1 flex justify-center py-8 px-4 sm:px-10 lg:px-20">
            <div class="flex flex-col max-w-[1400px] flex-1 w-full gap-8">
                
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div>
                        <h1 class="text-3xl font-bold tracking-tight mb-2">Annuaire des Pêcheurs</h1>
                        <p class="text-[#8c725f]">Découvrez les meilleurs pêcheurs professionnels de la saison.</p>
                    </div>
                    <div class="flex p-1 bg-white dark:bg-[#1e140d] border border-[#e6dfdb] rounded-xl shadow-sm">
                        <button class="px-6 py-2 rounded-lg bg-primary text-white text-sm font-bold">Individuel</button>
                        <button class="px-6 py-2 rounded-lg text-[#8c725f] text-sm font-medium">Équipes</button>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-[280px_1fr] gap-8">
                    
                    <aside class="w-full space-y-6">
                        <div class="bg-white dark:bg-[#1e140d] rounded-xl border border-[#e6dfdb] dark:border-[#3e2c21] p-6 shadow-sm">
                            <h3 class="font-bold text-lg flex items-center gap-2 mb-6">
                                <span class="material-symbols-outlined text-primary">tune</span> Filtres
                            </h3>
                            </div>
                    </aside>

                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                        
                        <?php if (!empty($fishermen)): ?>
                            <?php foreach ($fishermen as $f): ?>
                            <div class="group bg-white dark:bg-[#1e140d] rounded-xl border border-[#e6dfdb] dark:border-[#3e2c21] shadow-sm overflow-hidden hover:shadow-md transition-all flex flex-col">
                                <div class="h-48 w-full bg-cover bg-center relative" style="background-image: url('https://api.dicebear.com/7.x/initials/svg?seed=<?= urlencode($f['nom_complet']) ?>');">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                    <div class="absolute bottom-3 left-3">
                                        <span class="bg-primary text-white text-xs font-bold px-2 py-1 rounded">PRO</span>
                                    </div>
                                </div>

                                <div class="p-5 flex flex-col flex-1">
                                    <h3 class="text-xl font-bold mb-1 group-hover:text-primary transition-colors">
                                        <?= htmlspecialchars($f['nom_complet']) ?>
                                    </h3>
                                    <p class="text-sm text-[#8c725f] flex items-center gap-1 mb-4">
                                        <span class="material-symbols-outlined text-[16px]">location_on</span> 
                                        <?= htmlspecialchars($f['region'] ?? 'Région inconnue') ?>
                                    </p>

                                    <div class="grid grid-cols-2 gap-2 py-3 border-t border-b border-[#e6dfdb] dark:border-[#3e2c21] mb-4 bg-gray-50 dark:bg-[#2a1e16] rounded-lg text-center">
                                        <div>
                                            <span class="block text-xs font-bold text-[#8c725f] uppercase">Points</span>
                                            <span class="block text-lg font-bold text-primary"><?= number_format($f['score_total'] ?? 0) ?></span>
                                        </div>
                                        <div class="border-l border-[#e6dfdb]">
                                            <span class="block text-xs font-bold text-[#8c725f] uppercase">Rang</span>
                                            <span class="block text-lg font-bold">#<?= $f['rank'] ?? '?' ?></span>
                                        </div>
                                    </div>

                                    <a href="index.php?action=profile&id=<?= $f['id'] ?>" class="mt-auto w-full py-2.5 rounded-lg bg-primary hover:bg-orange-600 text-white text-sm font-bold flex items-center justify-center gap-2 transition-colors">
                                        Voir Profil
                                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                    </a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p class="col-span-full text-center py-10 text-gray-500">Aucun pêcheur trouvé dans la base de données.</p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>