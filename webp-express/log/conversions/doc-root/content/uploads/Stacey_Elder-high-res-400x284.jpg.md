WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-12-23 12:52:01

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.26
- Server software: Apache/2.4.51 (Debian)

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/content/uploads/Stacey_Elder-high-res-400x284.jpg
- destination: [doc-root]/content/webp-express/webp-images/uploads/Stacey_Elder-high-res-400x284.jpg.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- default-quality: 70
- encoding: "auto"
- max-quality: 80
- metadata: "none"
- near-lossless: 60
- quality: "auto"
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/content/uploads/Stacey_Elder-high-res-400x284.jpg
- destination: [doc-root]/content/webp-express/webp-images/uploads/Stacey_Elder-high-res-400x284.jpg.webp
- default-quality: 70
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- max-quality: 80
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: "auto"
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
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
Quality of source is 82. This is higher than max-quality, so using max-quality instead (80)
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '[doc-root]/content/uploads/Stacey_Elder-high-res-400x284.jpg' -o '[doc-root]/content/webp-express/webp-images/uploads/Stacey_Elder-high-res-400x284.jpg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/content/webp-express/webp-images/uploads/Stacey_Elder-high-res-400x284.jpg.webp.lossy.webp'
File:      [doc-root]/content/uploads/Stacey_Elder-high-res-400x284.jpg
Dimension: 400 x 284
Output:    8724 bytes Y-U-V-All-PSNR 41.67 46.45 45.75   42.71 dB
           (0.61 bpp)
block count:  intra4:        340  (75.56%)
              intra16:       110  (24.44%)
              skipped:         0  (0.00%)
bytes used:  header:             80  (0.9%)
             mode-partition:   1585  (18.2%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    4185 |     234 |     185 |     122 |    4726  (54.2%)
 intra16-coeffs:  |     369 |     193 |      55 |     184 |     801  (9.2%)
  chroma coeffs:  |    1262 |      78 |      41 |     124 |    1505  (17.3%)
    macroblocks:  |      68%|       8%|       6%|      18%|     450
      quantizer:  |      23 |      18 |      13 |      11 |
   filter level:  |       7 |       4 |       2 |      14 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    5816 |     505 |     281 |     430 |    7032  (80.6%)

Success
Reduction: 47% (went from 16 kb to 9 kb)

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
nice [doc-root]/content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -metadata none -q 80 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/content/uploads/Stacey_Elder-high-res-400x284.jpg' -o '[doc-root]/content/webp-express/webp-images/uploads/Stacey_Elder-high-res-400x284.jpg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/content/webp-express/webp-images/uploads/Stacey_Elder-high-res-400x284.jpg.webp.lossless.webp'
File:      [doc-root]/content/uploads/Stacey_Elder-high-res-400x284.jpg
Dimension: 400 x 284
Output:    57180 bytes (4.03 bpp)
Lossless-ARGB compressed size: 57180 bytes
  * Header size: 2649 bytes, image data size: 54506
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=10

Success
Reduction: -251% (went from 16 kb to 56 kb)

Picking lossy
cwebp succeeded :)

Converted image in 982 ms, reducing file size with 47% (went from 16 kb to 9 kb)
