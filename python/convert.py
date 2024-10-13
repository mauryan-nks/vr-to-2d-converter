import requests
import sys

# Check if the video URL is provided?
if len(sys.argv) < 2:
    print("Usage: python convert.py <videoUrl>")
    sys.exit(1)
api_url = "https://api.sinhcoms.com/video/vr-2d/"
video_url = sys.argv[1]
response = requests.get(api_url, params={'videoUrl': video_url})
if response.status_code == 200:
    with open('output.mp4', 'wb') as f:
        f.write(response.content)
    print("Conversion complete: output.mp4")
else:
    print("Failed to convert the video. Error:", response.text)
