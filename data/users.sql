CREATE TABLE 
    IF NOT EXISTS users (
        id VARCHAR(36) PRIMARY KEY,
        first_name VARCHAR(255) UNIQUE,
        last_name VARCHAR(255) NULL,
        username VARCHAR(255) UNIQUE,
        password VARCHAR(60),
        role VARCHAR(255),
        created_at DATETIME
    );

INSERT INTO
    users (
        id,
        first_name,
        last_name,
        username,
        password,
        role,
        created_at
    )
VALUES
    (
        '1c83c337-1061-4238-8dc7-0fd0c517fd6f',
        'ray',
        '',
        'ray',
        '$2b$12$9d9nAunm7j0Vhqt8KDifDuPHHFiP1vswH9gW4L9Jg.lWhaszRibrm',
        'admin',
        NOW()
    )