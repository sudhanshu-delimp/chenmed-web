WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-12-23 12:23:20

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.26
- Server software: Apache/2.4.51 (Debian)

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/content/uploads/Main-Banner-Minimized-1-768x210.png
- destination: [doc-root]/content/webp-express/webp-images/uploads/Main-Banner-Minimized-1-768x210.png.webp
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
- source: [doc-root]/content/uploads/Main-Banner-Minimized-1-768x210.png
- destination: [doc-root]/content/webp-express/webp-images/uploads/Main-Banner-Minimized-1-768x210.png.webp
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
nice [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -metadata none -q 85 -alpha_q '80' -m 6 -low_memory '[doc-root]/content/uploads/Main-Banner-Minimized-1-768x210.png' -o '[doc-root]/content/webp-express/webp-images/uploads/Main-Banner-Minimized-1-768x210.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/content/webp-express/webp-images/uploads/Main-Banner-Minimized-1-768x210.png.webp.lossy.webp'
File:      [doc-root]/content/uploads/Main-Banner-Minimized-1-768x210.png
Dimension: 768 x 210
Output:    2390 bytes Y-U-V-All-PSNR 52.88 49.70 50.88   51.81 dB
           (0.12 bpp)
block count:  intra4:         77  (11.46%)
              intra16:       595  (88.54%)
              skipped:        29  (4.32%)
bytes used:  header:             56  (2.3%)
             mode-partition:    620  (25.9%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |      12 |       6 |      15 |      20 |      53  (2.2%)
 intra16-coeffs:  |      63 |       0 |      15 |     547 |     625  (26.2%)
  chroma coeffs:  |     137 |      13 |      58 |     802 |    1010  (42.3%)
    macroblocks:  |      10%|       1%|       4%|      86%|     672
      quantizer:  |      20 |      20 |      16 |      12 |
   filter level:  |       7 |       5 |       3 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     212 |      19 |      88 |    1369 |    1688  (70.6%)

Success
Reduction: 96% (went from 55 kb to 2 kb)

Converting to lossless
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
Trying to convert by executing the following command:
nice [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -metadata none -q 85 -alpha_q '80' -near_lossless 60 -m 6 -low_memory '[doc-root]/content/uploads/Main-Banner-Minimized-1-768x210.png' -o '[doc-root]/content/webp-express/webp-images/uploads/Main-Banner-Minimized-1-768x210.png.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/content/webp-express/webp-images/uploads/Main-Banner-Minimized-1-768x210.png.webp.lossless.webp'
File:      [doc-root]/content/uploads/Main-Banner-Minimized-1-768x210.png
Dimension: 768 x 210
Output:    39892 bytes (1.98 bpp)
Lossless-ARGB compressed size: 39892 bytes
  * Header size: 1245 bytes, image data size: 38622
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM
  * Precision Bits: histogram=3 transform=3 cache=9

Success
Reduction: 29% (went from 55 kb to 39 kb)

Picking lossy
cwebp succeeded :)

Converted image in 905 ms, reducing file size with 96% (went from 55 kb to 2 kb)
