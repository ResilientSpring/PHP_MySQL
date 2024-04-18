SELECT songs.song_title, songs.song_id, songs.foreign_key_song_rating,
       songs.foreign_key_song_artist FROM songs ORDER BY song_title
       LIMIT 2,7;