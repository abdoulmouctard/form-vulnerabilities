
DROP TABLE IF EXISTS users;

CREATE TABLE users
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    fullname VARCHAR(100),
    email VARCHAR(100) NOT NULL UNIQUE
);


DROP TABLE IF EXISTS investigations;

CREATE TABLE investigations
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    user_id INTEGER NOT NULL,
    country VARCHAR(100),
    lockdown VARCHAR(100),
    deaths_per_day INT,
    total_deaths INT,
    comment TEXT(1000),
    FOREIGN KEY(user_id) REFERENCES users(id)
);

INSERT INTO users
    (fullname, email)
VALUES
    ("USER 1", "user-1@test.io"),
    ("USER 2", "user-2@test.io");