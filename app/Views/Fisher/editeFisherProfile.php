<!DOCTYPE html>
<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Mon Profil - <?= htmlspecialchars($fisherman['prenom'] ?? '') ?>
        <?= htmlspecialchars($fisherman['nom'] ?? '') ?> - FishMaster</title>
    <?php require_once __DIR__ . "/../Components/FisherHeaderScript.php" ?>
</head>

<body class="bg-background-light dark:bg-background-dark text-text-main dark:text-white font-display min-h-screen">

    <?php require_once __DIR__ . "/../Components/FisherHeader.php" ?>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <div
            class="bg-gradient-to-r from-primary/10 to-orange-100 dark:from-primary/5 dark:to-gray-900 rounded-2xl p-6 mb-8 shadow-sm border border-primary/20">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                <div class="flex items-start gap-4">
                    <div class="relative">
                        <div class="w-24 h-24 md:w-28 md:h-28 rounded-full bg-cover bg-center border-4 border-white dark:border-gray-800 shadow-lg"
                            style="background-image: url('<?= !empty($fisherman['photo_profil']) ? htmlspecialchars($fisherman['photo_profil']) : 'https://ui-avatars.com/api/?name=' . urlencode(($fisherman['prenom'] ?? '') . '+' . ($fisherman['nom'] ?? '')) . '&background=random&size=256' ?>');">
                        </div>
                        <span
                            class="absolute -bottom-2 -right-2 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full shadow-md">
                            PRO
                        </span>
                    </div>

                    <div class="pt-2">
                        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white">
                            <?= htmlspecialchars($fisherman['prenom'] ?? '') ?>
                            <?= htmlspecialchars($fisherman['nom'] ?? '') ?>
                        </h1>
                        <div class="flex flex-wrap items-center gap-2 mt-2">
                            <span
                                class="inline-flex items-center gap-1 px-3 py-1 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-full text-sm">
                                <span class="material-symbols-outlined text-primary text-[16px]">location_on</span>
                                <?= htmlspecialchars($fisherman['region'] ?? 'Non spécifié') ?>
                            </span>
                            <span
                                class="inline-flex items-center gap-1 px-3 py-1 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-full text-sm">
                                <span class="material-symbols-outlined text-primary text-[16px]">phishing</span>
                                <?= htmlspecialchars($fisherman['type_peche'] ?? 'Non spécifié') ?>
                            </span>
                            <?php if (!empty($fisherman['club'])): ?>
                            <span
                                class="inline-flex items-center gap-1 px-3 py-1 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-full text-sm">
                                <span class="material-symbols-outlined text-primary text-[16px]">groups</span>
                                <?= htmlspecialchars($fisherman['club']) ?>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div
                    class="grid grid-cols-2 md:grid-cols-4 gap-4 bg-white/60 dark:bg-gray-800/60 backdrop-blur-sm p-4 rounded-xl border border-white/30 dark:border-gray-700/30">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-primary"><?= $statistics['total_catches'] ?? 0 ?></div>
                        <div class="text-xs text-gray-600 dark:text-gray-400">Prises</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-primary">
                            <?= number_format($statistics['total_weight'] ?? 0, 1) ?>kg</div>
                        <div class="text-xs text-gray-600 dark:text-gray-400">Poids total</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-primary"><?= $statistics['competitions_joined'] ?? 0 ?>
                        </div>
                        <div class="text-xs text-gray-600 dark:text-gray-400">Compétitions</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-primary"><?= $statistics['teams_joined'] ?? 0 ?></div>
                        <div class="text-xs text-gray-600 dark:text-gray-400">Équipes</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <div class="lg:col-span-2 space-y-8">

                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <div
                        class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-900/50">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-bold text-gray-900 dark:text-white flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[20px]">edit</span>
                                Modifier Mon Profil
                            </h2>
                            <span
                                class="text-xs px-3 py-1 bg-primary/10 text-primary rounded-full font-medium">Pro</span>
                        </div>
                    </div>

                    <form method="POST" action="index.php?action=updateProfile" enctype="multipart/form-data"
                        class="p-6 space-y-6">
                        <?php if (isset($_SESSION['success'])): ?>
                        <div class="p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                            <?= htmlspecialchars($_SESSION['success']);
                                unset($_SESSION['success']); ?>
                        </div>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['error'])): ?>
                        <div class="p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                            <?= htmlspecialchars($_SESSION['error']);
                                unset($_SESSION['error']); ?>
                        </div>
                        <?php endif; ?>

                        <input type="hidden" name="current_photo"
                            value="<?= htmlspecialchars($fisherman['photo_profil'] ?? '') ?>">

                        <div
                            class="flex items-center gap-4 p-4 bg-gray-50 dark:bg-gray-900/50 rounded-xl border border-gray-200 dark:border-gray-700">
                            <div class="flex-shrink-0">
                                <label for="photo" class="cursor-pointer">
                                    <div class="w-16 h-16 rounded-full bg-cover bg-center border-2 border-white dark:border-gray-700 shadow-sm"
                                        style="background-image: url('<?= !empty($fisherman['photo_profil']) ? htmlspecialchars($fisherman['photo_profil']) : 'https://ui-avatars.com/api/?name=' . urlencode(($fisherman['prenom'] ?? '') . '+' . ($fisherman['nom'] ?? '')) . '&background=random&size=128' ?>');">
                                    </div>
                                </label>
                                <input type="file" name="photo" id="photo" class="hidden" accept="image/*">
                            </div>
                            <div class="flex-1">
                                <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Photo de profil
                                </h3>
                                <p class="text-xs text-gray-600 dark:text-gray-400 mb-2">JPG, PNG ou GIF. Max 2MB.</p>
                                <div class="flex gap-2">
                                    <label for="photo"
                                        class="cursor-pointer text-xs px-3 py-1.5 bg-primary hover:bg-orange-600 text-white rounded-lg font-medium transition-colors">
                                        Changer
                                    </label>
                                    <button type="submit" formaction="index.php?action=deletePhoto" name="delete_photo"
                                        class="text-xs px-3 py-1.5 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg font-medium transition-colors">
                                        Supprimer
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
                                    for="prenom">
                                    Prénom *
                                </label>
                                <input type="text" id="prenom" name="prenom"
                                    value="<?= htmlspecialchars($fisherman['prenom'] ?? '') ?>" required
                                    class="w-full px-4 py-3 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
                                    for="nom">
                                    Nom *
                                </label>
                                <input type="text" id="nom" name="nom"
                                    value="<?= htmlspecialchars($fisherman['nom'] ?? '') ?>" required
                                    class="w-full px-4 py-3 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
                                    for="email">
                                    Email *
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="material-symbols-outlined text-gray-400">mail</span>
                                    </div>
                                    <input type="email" id="email" name="email"
                                        value="<?= htmlspecialchars($fisherman['email'] ?? '') ?>" required
                                        class="w-full pl-12 pr-4 py-3 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
                                    for="region">
                                    Région
                                </label>
                                <select id="region" name="region"
                                    class="w-full px-4 py-3 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                    <option value="">Sélectionner une région</option>
                                    <?php foreach ($regions as $region): ?>
                                    <option value="<?= htmlspecialchars($region) ?>"
                                        <?= ($fisherman['region'] ?? '') == $region ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($region) ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
                                    for="fishing_style">
                                    Style de pêche
                                </label>
                                <select id="fishing_style" name="fishing_style"
                                    class="w-full px-4 py-3 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                    <option value="">Sélectionner un style</option>
                                    <?php foreach ($fishingStyles as $style): ?>
                                    <option value="<?= htmlspecialchars($style) ?>"
                                        <?= ($fisherman['type_peche'] ?? '') == $style ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($style) ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
                                    for="club">
                                    Club/Association
                                </label>
                                <input type="text" id="club" name="club"
                                    value="<?= htmlspecialchars($fisherman['club'] ?? '') ?>"
                                    placeholder="Ex: Bassmaster Elite Series, Club de Pêche Sportive..."
                                    class="w-full px-4 py-3 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
                                    for="bio">
                                    Biographie
                                </label>
                                <textarea id="bio" name="bio" rows="4" maxlength="500"
                                    placeholder="Parlez-nous de votre expérience, vos spécialités, vos plus belles prises..."
                                    class="w-full px-4 py-3 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 focus:ring-2 focus:ring-primary focus:border-transparent transition-all resize-none"><?= htmlspecialchars($fisherman['bio'] ?? '') ?></textarea>
                                <div class="flex justify-between mt-2">
                                    <span class="text-xs text-gray-500">Décrivez-vous en quelques mots</span>
                                    <span class="text-xs text-gray-500"><span
                                            id="bio-counter"><?= strlen($fisherman['bio'] ?? '') ?></span>/500
                                        caractères</span>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 dark:border-gray-700 pt-6">
                            <h3
                                class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">verified</span>
                                Mes Sponsors
                            </h3>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <?php foreach ($sponsors as $sponsor): ?>
                                <div
                                    class="flex items-center gap-2 px-3 py-2 bg-primary/10 border border-primary/20 rounded-lg text-sm">
                                    <span class="material-symbols-outlined text-primary text-[16px]">verified</span>
                                    <span
                                        class="font-medium text-gray-900 dark:text-white"><?= htmlspecialchars($sponsor) ?></span>
                                    <a href="index.php?action=removeSponsor&sponsor=<?= urlencode($sponsor) ?>"
                                        class="ml-1 hover:text-red-500 transition-colors" title="Retirer">
                                        <span class="material-symbols-outlined text-[14px]">close</span>
                                    </a>
                                </div>
                                <?php endforeach; ?>

                                <?php if (empty($sponsors)): ?>
                                <p class="text-sm text-gray-500 italic">Aucun sponsor pour le moment</p>
                                <?php endif; ?>
                            </div>

                            <div class="flex gap-2">
                                <input type="text" id="sponsor_name" name="sponsor_name" placeholder="Nom du sponsor"
                                    class="flex-1 px-4 py-3 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                <button type="submit" formaction="index.php?action=addSponsor"
                                    class="px-6 py-3 bg-primary hover:bg-orange-600 text-white font-semibold rounded-xl shadow-sm shadow-primary/30 transition-all flex items-center gap-2">
                                    <span class="material-symbols-outlined">add</span>
                                    Ajouter
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-end gap-3 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <button type="reset"
                                class="px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-xl font-semibold transition-colors">
                                Annuler
                            </button>
                            <button type="submit"
                                class="px-8 py-3 bg-primary hover:bg-orange-600 text-white font-semibold rounded-xl shadow-md shadow-primary/30 transition-all active:scale-95">
                                Sauvegarder les modifications
                            </button>
                        </div>
                    </form>
                </div>

                <?php if (!empty($recentCatches)): ?>
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <div
                        class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-900/50">
                        <h2 class="text-lg font-bold text-gray-900 dark:text-white flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[20px]">catch</span>
                            Mes Dernières Prises
                        </h2>
                    </div>
                    <div class="divide-y divide-gray-200 dark:divide-gray-700">
                        <?php foreach ($recentCatches as $catch): ?>
                        <div class="p-4 hover:bg-gray-50 dark:hover:bg-gray-900/50 transition-colors">
                            <div class="flex items-start justify-between">
                                <div>
                                    <div class="flex items-center gap-2 mb-1">
                                        <span
                                            class="text-sm font-semibold text-gray-900 dark:text-white"><?= htmlspecialchars($catch['name_espece'] ?? 'Espèce inconnue') ?></span>
                                        <?php if ($catch['status_valid'] == 'validated'): ?>
                                        <span
                                            class="text-xs px-2 py-0.5 bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300 rounded-full">✓
                                            Validée</span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex items-center gap-4 text-sm text-gray-600 dark:text-gray-400">
                                        <span class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[16px]">scale</span>
                                            <?= number_format($catch['poids'] ?? 0, 1) ?> kg
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[16px]">straighten</span>
                                            <?= number_format($catch['taille'] ?? 0, 1) ?> cm
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                                            <?= date('d/m/Y', strtotime($catch['date_prise'])) ?>
                                        </span>
                                    </div>
                                    <?php if (!empty($catch['competition_name'])): ?>
                                    <p class="text-xs text-gray-500 mt-2">Compétition:
                                        <?= htmlspecialchars($catch['competition_name']) ?></p>
                                    <?php endif; ?>
                                </div>
                                <?php if (!empty($catch['photo'])): ?>
                                <div class="w-16 h-16 rounded-lg bg-cover bg-center border border-gray-300 dark:border-gray-600"
                                    style="background-image: url('<?= htmlspecialchars($catch['photo']) ?>');"></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
                        <a href="#"
                            class="text-primary hover:text-orange-600 font-medium text-sm flex items-center gap-1 justify-center">
                            Voir toutes mes prises
                            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </a>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <div class="space-y-8">

                <?php if (!empty($teams)): ?>
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <div
                        class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-900/50">
                        <h2 class="text-lg font-bold text-gray-900 dark:text-white flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[20px]">diversity</span>
                            Mes Équipes
                        </h2>
                    </div>
                    <div class="p-6 space-y-4">
                        <?php foreach ($teams as $team): ?>
                        <div
                            class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-900/50 rounded-xl border border-gray-200 dark:border-gray-700">
                            <?php if (!empty($team['logo_url'])): ?>
                            <div class="w-12 h-12 rounded-full bg-cover bg-center border border-gray-300 dark:border-gray-600"
                                style="background-image: url('<?= htmlspecialchars($team['logo_url']) ?>');"></div>
                            <?php else: ?>
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                                <span
                                    class="text-primary font-bold text-lg"><?= strtoupper(substr($team['name'], 0, 2)) ?></span>
                            </div>
                            <?php endif; ?>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 dark:text-white">
                                    <?= htmlspecialchars($team['name']) ?></h4>
                                <p class="text-xs text-gray-600 dark:text-gray-400 capitalize">
                                    <?= htmlspecialchars($team['role_in_team']) ?></p>
                            </div>
                            <span class="text-xs px-2 py-1 bg-primary/10 text-primary rounded-full">Depuis
                                <?= date('m/Y', strtotime($team['joined_at'])) ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
                        <a href="#"
                            class="text-primary hover:text-orange-600 font-medium text-sm flex items-center gap-1 justify-center">
                            Rejoindre une équipe
                            <span class="material-symbols-outlined text-[18px]">add</span>
                        </a>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (!empty($competitions)): ?>
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <div
                        class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-900/50">
                        <h2 class="text-lg font-bold text-gray-900 dark:text-white flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[20px]">trophy</span>
                            Mes Compétitions
                        </h2>
                    </div>
                    <div class="p-6 space-y-4">
                        <?php foreach ($competitions as $comp): ?>
                        <div
                            class="p-4 bg-gradient-to-r from-gray-50 to-white dark:from-gray-900/50 dark:to-gray-800 rounded-xl border border-gray-200 dark:border-gray-700">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-2">
                                <?= htmlspecialchars($comp['title']) ?></h4>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-gray-600 dark:text-gray-400 flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                                    <?= date('d/m/Y', strtotime($comp['date_debut'])) ?>
                                </span>
                                <span class="px-2 py-1 text-xs rounded-full 
                                    <?= $comp['status_competion'] == 'active' ? 'bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300' : ($comp['status_competion'] == 'upcoming' ? 'bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300' :
                                            'bg-gray-100 text-gray-800 dark:bg-gray-900/30 dark:text-gray-300') ?>">
                                    <?= $comp['status_competion'] ?>
                                </span>
                            </div>
                            <p class="text-xs text-gray-500 mt-2 truncate">
                                <?= htmlspecialchars($comp['description_comp'] ?? '') ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <div
                    class="bg-gradient-to-br from-primary/5 to-orange-50 dark:from-primary/10 dark:to-gray-900/50 rounded-2xl border border-primary/20 p-6">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">analytics</span>
                        Mes Statistiques
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-700 dark:text-gray-300">Plus grosse prise</span>
                            <span
                                class="font-bold text-gray-900 dark:text-white"><?= number_format($statistics['biggest_catch'] ?? 0, 1) ?>
                                kg</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-700 dark:text-gray-300">Taux de validation</span>
                            <span class="font-bold text-gray-900 dark:text-white">95%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-700 dark:text-gray-300">Membre depuis</span>
                            <span
                                class="font-bold text-gray-900 dark:text-white"><?= date('Y', strtotime($fisherman['created_at'])) ?></span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-700 dark:text-gray-300">Classement mondial</span>
                            <span class="font-bold text-primary">#<?= rand(100, 1000) ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
    const bioTextarea = document.getElementById('bio');
    const bioCounter = document.getElementById('bio-counter');

    if (bioTextarea && bioCounter) {
        bioTextarea.addEventListener('input', function() {
            bioCounter.textContent = this.value.length;
        });
    }

    const photoInput = document.getElementById('photo');
    if (photoInput) {
        photoInput.addEventListener('change', function(e) {
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const preview = document.querySelector('[style*="background-image"]');
                    if (preview) {
                        preview.style.backgroundImage = `url('${event.target.result}')`;
                    }
                }
                reader.readAsDataURL(e.target.files[0]);
            }
        });
    }
    </script>
</body>

</html>