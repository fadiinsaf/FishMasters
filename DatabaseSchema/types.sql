CREATE TYPE user_role AS ENUM ('admin', 'fisherman', 'fan','visitor');
CREATE TYPE env_type AS ENUM ('mer', 'lacs','barrages','rivières');
CREATE TYPE competition_type AS ENUM ('individuel', 'equipe');
CREATE TYPE target_type_like AS ENUM ('fisherman', 'competition', 'prise');
CREATE TYPE prise_status AS ENUM ('en_attente', 'valide', 'rejete');
CREATE TYPE competition_status AS ENUM ('valable', 'saturée');
CREATE TYPE target_type_follow AS ENUM ('fisherman', 'competition', 'prise');