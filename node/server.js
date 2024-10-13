import express from 'express';
import axios from 'axios';

const app = express();
const port = 3000;

app.get('/convert', async (req, res) => {
  const videoUrl = req.query.videoUrl;
  if (!videoUrl) {
    return res.status(400).send('Please provide a valid videoUrl.');
  }

  try {
    const apiUrl = 'https://api.sinhcoms.com/video/vr-2d/';
    const response = await axios.get(apiUrl, {
      params: { videoUrl }
    });

    res.setHeader('Content-Type', 'video/mp4');
    res.send(response.data);
  } catch (error) {
    res.status(500).send('Error converting video: ' + error.message);
  }
});

app.listen(port, () => {
  console.log(`Server running at http://localhost:${port}`);
});
