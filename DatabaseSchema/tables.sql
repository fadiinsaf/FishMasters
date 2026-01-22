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
