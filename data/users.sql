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