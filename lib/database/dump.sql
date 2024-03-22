-- Dump Test Database

CREATE TABLE colors(
    id      INTEGER PRIMARY KEY,
    name    VARCHAR(50) NOT NULL,
    hexCode VARCHAR(9) NOT NULL DEFAULT "#000000"
);

CREATE TABLE users(
    id    INTEGER PRIMARY KEY,
    name  VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE user_colors (
    user_id  INTEGER NOT NULL,
    color_id INTEGER NOT NULL,

    PRIMARY KEY(user_id, color_id),

    CONSTRAINT
        user_constraint
    FOREIGN KEY(user_id) REFERENCES
        users(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,

    CONSTRAINT
        color_constraint
    FOREIGN KEY(color_id) REFERENCES
        colors(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

INSERT INTO
    users(name, email)
VALUES
    ('Foo Bar', 'foo@bar'),
    ('Bar Baz', 'bar@baz'),
    ('Baz Foo', 'baz@foo');

INSERT INTO
    colors(name)
VALUES
    ('Blue'),
    ('Red'),
    ('Yellow'),
    ('Green');

/*
    SELECT
        users.name, users.email, user_colors.color_id AS colors
    FROM
        users INNER JOIN user_colors
    ON
        users.id = user_colors.user_id
    AND
        users.id = 6;
*/