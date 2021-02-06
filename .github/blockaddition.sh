#!/bin/bash  
echo "This is a script that is ment to ease the way to add new custom gutenberg blocks (ACF blocks)"
echo "What do you want the block to be named?"
printf "Full name: "
read full_name
printf "Slug: "
read slug
printf "Description: "
read description
printf "Icon: "
read icon
printf "Keyword (Comma-seperated): "
read keyword
printf "Category: "
read category
printf "Remember to import CSS & Global JS to src/js/index.js and src/css/style.css"