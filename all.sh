echo "###############################"
echo "###############################"
echo "                    "$(date)
bash meteo.sh
php feed.php | fold -w 40 | sed 's/^/                /'
echo "-----------------------" | sed 's/^/                /'
echo "Lezioni di oggi: " | sed 's/^/                /'
cat orari/$(date +"%a") | sed 's/^/                /'
