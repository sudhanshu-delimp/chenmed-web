WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-12-23 12:24:07

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.26
- Server software: Apache/2.4.51 (Debian)

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/content/uploads/Playbook-–-1-Dark-Blue@2x.png
- destination: [doc-root]/content/webp-express/webp-images/uploads/Playbook-–-1-Dark-Blue@2x.png.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 80
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/content/uploads/Playbook-–-1-Dark-Blue@2x.png
- destination: [doc-root]/content/webp-express/webp-images/uploads/Playbook-–-1-Dark-Blue@2x.png.webp
- alpha-quality: 80
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 85
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (the cwebp binary was not found at path: cwebp, or it had missing library dependencies)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: version: *1.1.0*
- Executing: [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed* (the cwebp binary was not found at path: [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static, or it had missing library dependencies)
- Executing: [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: version: *0.6.1*
Binaries ordered by version number.
- [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64: (version: 1.1.0)
- [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64: (version: 0.6.1)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Quality: 85. 
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -metadata none -q 85 -alpha_q '80' -m 6 -low_memory '[doc-root]/content/uploads/Playbook--1-Dark-Blue@2x.png' -o '[doc-root]/content/webp-express/webp-images/uploads/Playbook--1-Dark-Blue@2x.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
cannot open input file '[doc-root]/content/uploads/Playbook--1-Dark-Blue@2x.png'
Error! Could not process file [doc-root]/content/uploads/Playbook--1-Dark-Blue@2x.png
Error! Cannot read input picture file '[doc-root]/content/uploads/Playbook--1-Dark-Blue@2x.png'

Exec failed (return code: 255)
Creating command line options for version: 0.6.1
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -metadata none -q 85 -alpha_q '80' -m 6 -low_memory '[doc-root]/content/uploads/Playbook--1-Dark-Blue@2x.png' -o '[doc-root]/content/webp-express/webp-images/uploads/Playbook--1-Dark-Blue@2x.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
cannot open input file '[doc-root]/content/uploads/Playbook--1-Dark-Blue@2x.png'
Error! Could not process file [doc-root]/content/uploads/Playbook--1-Dark-Blue@2x.png
Error! Cannot read input picture file '[doc-root]/content/uploads/Playbook--1-Dark-Blue@2x.png'

Exec failed (return code: 255)

**Error: ** **Failed converting. Check the conversion log for details.** 
Failed converting. Check the conversion log for details.
cwebp failed in 324 ms

*Trying: vips* 

**Error: ** **Required Vips extension is not available.** 
Required Vips extension is not available.
vips failed in 7 ms

*Trying: imagemagick* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/content/uploads/Playbook-–-1-Dark-Blue@2x.png
- destination: [doc-root]/content/webp-express/webp-images/uploads/Playbook-–-1-Dark-Blue@2x.png.webp
- alpha-quality: 80
- encoding: "auto"
- log-call-arguments: true
- metadata: "none"
- quality: 85
- use-nice: true

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
- low-memory: false
- max-quality: 85
- method: 6
- skip: false

The following options were supplied but are ignored because they are not supported by this converter:
- near-lossless
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Version: ImageMagick 6.9.11-60 Q16 x86_64 2021-01-25 https://imagemagick.org
Quality: 85. 
using nice
Executing command: nice convert -quality '85' -strip -define webp:alpha-quality=80 -define webp:method=6 '[doc-root]/content/uploads/Playbook--1-Dark-Blue@2x.png' 'webp:[doc-root]/content/webp-express/webp-images/uploads/Playbook--1-Dark-Blue@2x.png.webp.lossy.webp' 2>&1

*Output:* 
convert-im6.q16: unable to open image `[doc-root]/content/uploads/Playbook--1-Dark-Blue@2x.png': No such file or directory @ error/blob.c/OpenBlob/2924.
convert-im6.q16: no images defined `webp:[doc-root]/content/webp-express/webp-images/uploads/Playbook--1-Dark-Blue@2x.png.webp.lossy.webp' @ error/convert.c/ConvertImageCommand/3229.

return code: 1

**Error: ** **The exec call failed** 
The exec call failed
imagemagick failed in 39 ms

*Trying: graphicsmagick* 

**Error: ** **gmagick is not installed** 
gmagick is not installed
graphicsmagick failed in 9 ms

*Trying: ffmpeg* 

**Error: ** **ffmpeg is not installed (cannot execute: "ffmpeg")** 
ffmpeg is not installed (cannot execute: "ffmpeg")
ffmpeg failed in 9 ms

*Trying: wpc* 

**Error: ** **Missing URL. You must install Webp Convert Cloud Service on a server, or the WebP Express plugin for Wordpress - and supply the url.** 
Missing URL. You must install Webp Convert Cloud Service on a server, or the WebP Express plugin for Wordpress - and supply the url.
wpc failed in 8 ms

*Trying: ewww* 

**Error: ** **Missing API key.** 
Missing API key.
ewww failed in 8 ms

*Trying: imagick* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/content/uploads/Playbook-–-1-Dark-Blue@2x.png
- destination: [doc-root]/content/webp-express/webp-images/uploads/Playbook-–-1-Dark-Blue@2x.png.webp
- alpha-quality: 80
- encoding: "auto"
- log-call-arguments: true
- metadata: "none"
- quality: 85

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
- low-memory: false
- max-quality: 85
- method: 6
- skip: false

The following options were supplied but are ignored because they are not supported by this converter:
- near-lossless
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Quality: 85. 
Reduction: 69% (went from 6478 bytes to 1994 bytes)

Converting to lossless
Reduction: 60% (went from 6478 bytes to 2576 bytes)

Picking lossy
imagick succeeded :)

Converted image in 510 ms, reducing file size with 69% (went from 6478 bytes to 1994 bytes)
