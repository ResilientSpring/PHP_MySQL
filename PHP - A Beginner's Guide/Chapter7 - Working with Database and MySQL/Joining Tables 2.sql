SELECT songs.song_title, artists.artist_name, ratings.rating_name
FROM songs, artists, ratings
WHERE foreign_key_song_artist = artist_id
AND foreign_key_song_rating = rating_id
AND rating_id >= 4
AND artist_country != "US";