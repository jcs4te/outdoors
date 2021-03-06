# $FreeBSD: src/share/skel/dot.profile,v 1.19.2.2 2002/07/13 16:29:10 mp Exp $
#
# .profile - Bourne Shell startup script for login shells
#
# see also sh(1), environ(7).
#

# remove /usr/games and /usr/X11R6/bin if you want
PATH=/sbin:/bin:/usr/sbin:/usr/bin:/usr/games:/usr/local/sbin:/usr/local/bin:/usr/X11R6/bin:$HOME/bin; export PATH

# Setting TERM is normally done through /etc/ttys.  Do only override
# if you're sure that you'll never log in via telnet or xterm or a
# serial line.
# Use cons25l1 for iso-* fonts
# TERM=cons25; 	export TERM

BLOCKSIZE=K;	export BLOCKSIZE
EDITOR=vi;   	export EDITOR
PAGER=more;  	export PAGER
CVSROOT=$HOME/cvsroot; export CVSROOT

# set ENV to a file invoked each time sh is started for interactive use.
ENV=$HOME/.shrc; export ENV

[ -x /usr/games/fortune ] && /usr/games/fortune freebsd-tips

#PS1="\u@\h \[\e[33m\]\W\[\e[0m\] \[\`if [[ \$? = "0" ]]; then echo '\e[32m=)\e[0m'; else echo '\e[31m=(\e[0m' ; fi\`\] "

PS1="\[\e[32;1m\]\u@\H \[\e[36;1m\]\w \[\e[0m\] \\n$ "



alias l=ls
alias s="cd .."
alias cvs="cvs -q"
