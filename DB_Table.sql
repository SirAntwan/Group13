CREATE TABLE 'songs' (
  'songID' varchar(5) NOT NULL,
  'songName' varchar(50) NOT NULL,
  'genre' varchar(50) NOT NULL,
  'artist' varchar(50) NOT NULL,
  'songLength' INT(4) NOT NULL,
  'ratings' varchar(10) NOT NULL,
  'releaseYear' INT(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
 
ALTER TABLE 'songs'
 ADD PRIMARY KEY('songID');
COMMIT;

INSERT INTO 'songs' ('songID', 'songName', 'genre', 'artist', 'songLength', 'ratings', 'releaseYear') VALUES
('1', 'Starboy', 'Alternative R&B', 'The Weeknd', 230, '9.1/10', 2016);