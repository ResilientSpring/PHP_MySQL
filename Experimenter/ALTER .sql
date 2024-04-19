ALTER TABLE songs
    ADD FOREIGN KEY (foreign_key_song_artist) REFERENCES artists(artist_id);