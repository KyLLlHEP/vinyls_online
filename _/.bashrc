alias rm='rm -i'
alias cp='cp -i'
alias mv='mv -i'
alias ll='ls -l'

if [ -f /etc/bashrc ]; then
. /etc/bashrc
fi

PS1='[\u@hosting]$ '
