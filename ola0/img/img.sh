#!/bin/bash

rm small/*
for file in originals/*;
do
  convert $file -resize 1000x1000 small/`basename $file`
done
