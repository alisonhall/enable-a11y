#!/bin/sh

if [ "$#" -ge "1" -a "$1" = "--force" ]
then
    FORCE="1"
    echo "Generating webp renditions for all pngs, including those rendered already." 2>&1
elif [ "$#" = "1" -a "$1" = "--no-compress-png" ]
then
    NO_COMPRESS_PNG="1"
    echo "No recompression of pngs." 2>&1
else 
    echo "Generating webp images only for PNGs that don't have a WEBP equivalent." 2>&1
    echo "To force re-rendering all PNGs as WEBP, please use the --force flag". 2>&1
fi

if [ "$#" = "2" ]
then
    LIST="$2"
else
    LIST="images/main-menu images/hamburger-menu-copy images/hero-image-text-resize images/text-spacing images/focus images/pages/video-player images/code-quality";
fi

DIR="$PWD"


for i in $LIST
do
    cd "$DIR"
    echo "CWD: $DIR"
    cd $i

    for j in *.png
    do
        image="${j%.*}"

        if [ "$FORCE" = "1" -o ! -f "$image.webp" ]
        then
            if [ "$NO_COMPRESS_PNG" != "1" ]
            then
                # compress PNG
                compressPng $j
            fi

            cwebp -q 100 -m 6 -lossless $j -o $image.webp
        fi
    done

done
