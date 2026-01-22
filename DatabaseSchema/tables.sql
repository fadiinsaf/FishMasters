CREATE SEQUENCE user_id_seq;
CREATE TABLE app_user (
    id_user INTEGER PRIMARY KEY DEFAULT nextval('user_id_seq'),
    email VARCHAR(150) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    photo_profil VARCHAR(255) NOT NULL,
    role user_role NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
