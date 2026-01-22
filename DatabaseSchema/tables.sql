CREATE SEQUENCE user_id_seq;
CREATE TABLE app_user (
    id_user INTEGER PRIMARY KEY DEFAULT nextval('user_id_seq'),
    email VARCHAR(150) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    photo_profil VARCHAR(255) NOT NULL,
    role user_role NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
CREATE TABLE admin (
) INHERITS (app_user);

CREATE TABLE fan (
    loyalty_points INTEGER DEFAULT 0
) INHERITS (app_user);


CREATE TABLE fisherman (
    club VARCHAR(100),
    region VARCHAR(100),
    type_peche VARCHAR(155)
) INHERITS (app_user);

CREATE TABLE category (
    id_category SERIAL PRIMARY KEY,
    name_category VARCHAR(100),
    environment env_type
);
CREATE TABLE team (
    id_team SERIAL PRIMARY KEY,
    name VARCHAR(100) UNIQUE,
    logo_url VARCHAR(255)
);

CREATE TABLE competition (
    id_competition SERIAL PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    date_debut TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_fin TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    capacite_max INTEGER,
    lieux_competition VARCHAR(200),
    description_comp VARCHAR(700),
    status_competion competition_status NOT NULL,
    category_id INTEGER REFERENCES category(id_category),
    date_start TIMESTAMP,
    location VARCHAR(200)
);
CREATE TABLE espece (
    id_espece SERIAL PRIMARY KEY,
    name_espece VARCHAR(100),
    min_size FLOAT,
    coefficient FLOAT DEFAULT 1.0
);
ALTER TABLE fisherman ADD PRIMARY KEY (id_user);
ALTER TABLE admin ADD PRIMARY KEY (id_user);
ALTER TABLE fan ADD PRIMARY KEY (id_user);

CREATE TABLE prise (
    id_prise SERIAL PRIMARY KEY,
    fisherman_id INTEGER REFERENCES fisherman(id_user), -- Note: Référence logique vers fisherman
    competition_id INTEGER REFERENCES competition(id_competition),
    espece_id INTEGER REFERENCES espece(id_espece),
    poids FLOAT,
    taille FLOAT,
    date_prise TIMESTAMP,
    status_valid prise_status NOT NULL,
    photo VARCHAR(100)
);
CREATE TABLE followed (
    id_followed SERIAL PRIMARY KEY,
    fan_id INTEGER REFERENCES fan(id_user), 
    id_target INTEGER NOT NULL, 
    type_table target_type_follow NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT unique_follow UNIQUE(fan_id, id_target, type_table)
);
CREATE TABLE liked (
    id SERIAL PRIMARY KEY,
    fan_id INTEGER REFERENCES fan(id_user) ON DELETE CASCADE,
    id_target INTEGER NOT NULL,
    type_table target_type_like NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT unique_like UNIQUE(fan_id, id_target, type_table)
);

CREATE TABLE team_member (
    id_team INTEGER REFERENCES team(id_team) ON DELETE CASCADE,
    id_fisherman INTEGER REFERENCES fisherman(id_user) ON DELETE CASCADE,
    role_in_team VARCHAR(50) DEFAULT 'membre', -- ex: 'capitaine', 'membre'
    joined_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id_team, id_fisherman) -- Un pêcheur ne peut pas être deux fois dans la même équipe
);

CREATE TABLE inscription (
    id_inscription SERIAL PRIMARY KEY,
    competition_id INTEGER REFERENCES competition(id_competition) ON DELETE CASCADE,
    fisherman_id INTEGER REFERENCES fisherman(id_user) ON DELETE CASCADE,
    
    
    team_id INTEGER REFERENCES team(id_team) ON DELETE SET NULL DEFAULT NULL,
    
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_inscription UNIQUE(competition_id, fisherman_id)
);
    -- Si ce champ est NULL, le pêcheur participe en INDIVIDUEL.
    -- S'il est rempli, il participe pour cette ÉQUIPE.

CREATE TABLE prise_comment (
    id_comment SERIAL PRIMARY KEY,
    fan_id INTEGER REFERENCES fan(id_user),
    id_prise INTEGER  REFERENCES prise(id_prise),
    content_com TEXT NOT NULL,
    is_approved BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE notification (
    id_notification SERIAL PRIMARY KEY,
    fan_id INTEGER REFERENCES fan(id_user) ON DELETE CASCADE,
    title VARCHAR(150) NOT NULL, 
    message TEXT NOT NULL,       
    
    id_target INTEGER,           
    type_target target_type_follow,     -- 'prise', 'competition', 'fisherman'
    
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
