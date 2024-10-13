#VR to 2D Video Converter – PHP, Python, and Node.js
This repository showcases three different implementations (PHP, Python, and Node.js) to convert Virtual Reality (VR) videos into normal 2D videos. Each implementation interacts with an external API endpoint provided by Sinhcoms.

#What Does This Repository Do?
VR Video Conversion: Converts VR videos (such as side-by-side or top-bottom formats) into regular 2D videos.
API-Driven: Utilizes the API endpoint https://api.sinhcoms.com/video/vr-2d/ to handle the conversion process.
Multiple Languages: Provides examples in PHP, Python, and Node.js, making it easy to integrate the conversion functionality into your preferred stack.
Why Is This Useful?
With the growing popularity of VR content, many users or systems may still require standard 2D video formats for display, processing, or playback. This repository demonstrates how to connect to the API that processes VR videos and delivers a converted 2D video. The scripts are kept simple and ready for integration into larger systems or stand-alone use cases.

#Features:
PHP: A simple script using cURL to interact with the API.
Python: A script leveraging the requests library to communicate with the API.
Node.js: An Express.js-based server that offers a local API endpoint to convert VR videos.
API Integration: Works with the https://api.sinhcoms.com/video/vr-2d/ API, which performs the actual VR-to-2D conversion.
Who Is This For?
Developers: Looking to integrate VR-to-2D video conversion into their applications.
Enthusiasts: Wanting a flexible solution to convert VR content.
Projects: Needing multi-language examples to handle video format conversions.

This repository provides implementations in **PHP**, **Python**, and **Node.js** to convert VR (Virtual Reality) videos into normal 2D videos by interacting with the API endpoint at [https://api.sinhcoms.com/video/vr-2d/](https://api.sinhcoms.com/video/vr-2d/).

## Table of Contents

- [Introduction](#introduction)
- [API Endpoint](#api-endpoint)
- [Technologies](#technologies)
- [How to Use](#how-to-use)
  - [Using the PHP Script](#using-the-php-script)
  - [Using the Python Script](#using-the-python-script)
  - [Using the Node.js Server](#using-the-nodejs-server)
- [License](#license)

## Introduction

The `VR to 2D Video Converter` is a simple project that allows users to convert VR videos (side-by-side or top-bottom format) to normal 2D videos using the API endpoint provided by [Sinhcoms](https://api.sinhcoms.com/video/vr-2d/). You can integrate this API into your project using PHP, Python, or Node.js.

## API Endpoint

The external API that this project uses is:

You can provide a VR video URL as a query parameter to get a converted 2D video.

## Technologies

This project includes scripts in the following languages:

- **PHP**: A simple script using `cURL`.
- **Python**: A script using the `requests` library.
- **Node.js**: A small Express.js server that makes API calls.

## How to Use

### 1. Using the PHP Script

To use the PHP script, place the `convert.php` file in your PHP server directory.

- Example Usage:

```bash
http://yourserver.com/php/convert.php?videoUrl=<video_url>


2. Using the Python Script
Install the required package:

bash
pip install requests
Run the Python script by passing the video URL as an argument:

bash
python python/convert.py <video_url>
The converted video will be saved as output.mp4.

3. Using the Node.js Server
Install the required dependencies:

bash
npm install express axios
Run the Node.js server:

bash
node node/server.js
You can then access the API locally:

bash
http://localhost:3000/convert?videoUrl=<video_url>
