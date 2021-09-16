sleep $(($(date -f - +%s- <<< $'tomorrow 07:00\nnow')0))

bash all.sh | lp
