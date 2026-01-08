import { createRoot } from "react-dom/client";
import AudioPlayer from "react-h5-audio-player";
import "react-h5-audio-player/lib/styles.css";
const songplayer = document.getElementById("songplayer-widget");
createRoot(songplayer).render(
    <div className="d-flex flex-column">
        <img
            src={document.getElementById("song-img").value}
            style={{
                width: 300,
                borderTopLeftRadius: 30,
                borderTopRightRadius: 30,
            }}
            alt=""
        />
        <AudioPlayer
            src={document.getElementById("songplayer-audio").value}
            onPlay={(e) => console.log("onPlay")}
        />
    </div>
);
