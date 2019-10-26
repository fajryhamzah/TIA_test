PATH_FOLDER="/tmp/mig33/inner.folder"

for file in "$PATH_FOLDER"/*.txt
do
	mv "$file" "$PATH_FOLDER/$(basename $file .txt).dat"
done