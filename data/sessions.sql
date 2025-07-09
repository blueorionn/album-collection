CREATE TABLE 
    IF NOT EXISTS sessions (
        session_id VARCHAR(36) PRIMARY KEY,
        user_id VARCHAR(36),
        username VARCHAR(255),
        creation_date DATETIME,
        expiry_date DATETIME
    );