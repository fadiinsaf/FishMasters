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