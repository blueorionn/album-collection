CREATE TABLE
    IF NOT EXISTS music (
        id VARCHAR(36) PRIMARY KEY,
        title VARCHAR(255) UNIQUE,
        singer VARCHAR(50),
        director VARCHAR(50) NULL,
        duration DECIMAL(5, 2),
        genre VARCHAR(50),
        publication_year INT UNSIGNED,
        publisher VARCHAR(100) NULL
    );

INSERT INTO
    music (
        id,
        title,
        singer,
        director,
        duration,
        genre,
        publication_year,
        publisher
    )
VALUES
    (
        'e8c7c561-bc25-46f2-8b27-5ea8d42a9c5e',
        'Somebody''s Watching Me',
        'Rockwell, Michael Jackson and Jermaine Jackson',
        '',
        3.36,
        'Synth-funk, synth-pop, new wave, R&B',
        1983,
        'Motown Records'
    ),
    (
        '1b51175e-2b9a-453c-9a93-93d2e0115a0c',
        'On & On',
        'Cartoon',
        '',
        3.36,
        'Electro House, Progressive House',
        2015,
        'Monstercat'
    ),
    (
        '689357c7-dbc3-4fab-b152-5121c1add3cb',
        'Mortals',
        'Warriyo, featuring Laura Brehm',
        '',
        3.49,
        'Future Trap',
        2016,
        'NoCopyrightSounds (NCS)'
    ),
    (
        '694f0f55-4ffc-4315-a54e-23fa3793feb1',
        'Like a Prayer',
        'Madonna',
        'Mary Lambert',
        5.39,
        'Pop rock, Gospel, Funk',
        1989,
        'Sire Records, Warner Bros. Records'
    ),
    (
        '6162b986-f211-482a-95d4-716816080ed9',
        'Running Up That Hill',
        'Kate Bush',
        'David Garfath',
        4.58,
        'Synth-pop, New wave, Art pop, Art rock',
        1985,
        'EMI Records'
    );