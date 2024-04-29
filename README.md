## Flask Application with Video Player

This Flask application serves a webpage containing a video player capable of playing an M3U8 stream. It utilizes the Video.js library for HTML5 video playback.

### 1. Flask Application Setup

The Flask application is set up with a single route:

```python
@app.route('/')
def index():
    # Render the HTML template containing the video player
    return render_template('index.html', m3u8_url='https://edge7-sof.live.mmcdn.com/live-hls/amlst:_mary_chili-sd-8cedeb447acf029ebf620fc6483683c299167cb4f4c0bb85ed87287c6470a539_trns_h264/chunklist_w1306483979_b3096000_t64RlBTOjI0LjA=.m3u8')
```

This route (`'/'`) renders the `index.html` template and passes the M3U8 URL as a variable (`m3u8_url`) to the template.

### 2. HTML Template (index.html)

The HTML template contains the structure for the webpage and integrates the Video.js library for video playback. It uses the provided M3U8 URL to play the stream.

#### Head Section

- The head section includes necessary meta tags and sets the title of the webpage.

#### Video Player Section

- The video player section includes the Video.js player setup.
- The provided M3U8 URL (`{{ m3u8_url }}`) is used as the video source.
- The player falls back to displaying a message for browsers that don't support HTML5 video.

### 3. Running the Application

To run the Flask application, execute the script. By default, it runs on `http://127.0.0.1:5000/`. You can access this URL in your web browser to view the webpage with the embedded video player.

### Dependencies

- Flask: The Flask web framework is used to create the web application.
- Video.js: The Video.js library is used for HTML5 video playback.

---

This documentation provides an overview of how the Flask application works, how to run it, and the dependencies it relies on. It's a simple setup for serving an M3U8 stream using Flask and integrating it into a web page with a video player.
