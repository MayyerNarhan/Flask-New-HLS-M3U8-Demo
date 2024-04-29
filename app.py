from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def index():
    # Render the HTML template containing the video player
    return render_template('index.html', m3u8_url='https://edge7-sof.live.mmcdn.com/live-hls/amlst:_mary_chili-sd-8cedeb447acf029ebf620fc6483683c299167cb4f4c0bb85ed87287c6470a539_trns_h264/chunklist_w1306483979_b3096000_t64RlBTOjI0LjA=.m3u8')

if __name__ == '__main__':
    app.run(debug=True)
