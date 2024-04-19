SELECT songs.song_id, songs.song_title, artists.artist_name
FROM songs, artists WHERE foreign_key_song_artist = artists.artist_id;