import tkinter as tk
from tkinter import ttk
import pafy
import vlc

class YouTubePlayer(tk.Tk):
    def __init__(self, video_url):
        super().__init__()
        self.title("YouTube Video Player")
        self.geometry("800x600")
        self.configure(bg='black')

        # Convert shorts URL to standard YouTube URL
        video_url = self.convert_shorts_url(video_url)

        # Create a VLC player
        self.instance = vlc.Instance()
        self.player = self.instance.media_player_new()

        # Get video from YouTube
        video = pafy.new(video_url)
        best = video.getbest()
        playurl = best.url

        # Set up VLC player
        media = self.instance.media_new(playurl)
        self.player.set_media(media)

        # Create a frame for the video
        self.video_frame = ttk.Frame(self, width=800, height=450)
        self.video_frame.pack(pady=20)
        self.player.set_hwnd(self.video_frame.winfo_id())

        # Create a label for the title
        self.title_label = tk.Label(self, text=video.title, bg='black', fg='white', font=('Helvetica', 16))
        self.title_label.pack(pady=10)

        # Create play button
        self.play_button = tk.Button(self, text="Play", command=self.play_video, bg='green', fg='white')
        self.play_button.pack(side=tk.LEFT, padx=10)

        # Create pause button
        self.pause_button = tk.Button(self, text="Pause", command=self.pause_video, bg='yellow', fg='black')
        self.pause_button.pack(side=tk.LEFT, padx=10)

        # Create stop button
        self.stop_button = tk.Button(self, text="Stop", command=self.stop_video, bg='red', fg='white')
        self.stop_button.pack(side=tk.LEFT, padx=10)

    def convert_shorts_url(self, url):
        if "youtube.com/shorts/" in url:
            video_id = url.split("/")[-1].split("?")[0]
            return f"https://www.youtube.com/watch?v={video_id}"
        return url

    def play_video(self):
        self.player.play()

    def pause_video(self):
        self.player.pause()

    def stop_video(self):
        self.player.stop()

if __name__ == "__main__":
    video_url = "https://youtube.com/shorts/QZTORHS6D9s?si=VZvQ3qHpb2dSNlNc"
    app = YouTubePlayer(video_url)
    app.mainloop()