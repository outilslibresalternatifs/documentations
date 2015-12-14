#!/bin/bash

rm small/*
# for image in *.jpg *.png *.gif; 
for file in originals/*;
do
  convert $file -resize 1000x1000 small/`basename $file`
done
