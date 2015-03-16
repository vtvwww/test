#Îñíîâû Git. Ïîäêëþ÷åíèå ê GitHub
#https://www.youtube.com/watch?v=2VQfRn1H8HE

Hello/ These are my changes.
121212

Welcome to Git (version 1.8.1.2-preview20130201)


Run 'git help git' to display the help index.
Run 'git help <command>' to display help for specific commands.
supervisor@VTV-HOME ~
$ cd D:/testgit
supervisor@VTV-HOME /d/testgit
$ git init
Initialized empty Git repository in d:/testgit/.git/
supervisor@VTV-HOME /d/testgit (master)
$ git config --global
usage: git config [options]

Config file location
    --global              use global config file
    --system              use system config file
    --local               use repository config file
    -f, --file <file>     use given config file

Action
    --get                 get value: name [value-regex]
    --get-all             get all values: key [value-regex]
    --get-regexp          get values for regexp: name-regex [value-regex]
    --replace-all         replace all matching variables: name value [value_regex]
    --add                 add a new variable: name value
    --unset               remove a variable: name [value-regex]
    --unset-all           remove all matches: name [value-regex]
    --rename-section      rename section: old-name new-name
    --remove-section      remove a section: name
    -l, --list            list all
    -e, --edit            open an editor
    --get-color <slot>    find the color configured: [default]
    --get-colorbool <slot>
                          find the color setting: [stdout-is-tty]

Type
    --bool                value is "true" or "false"
    --int                 value is decimal number
    --bool-or-int         value is --bool or --int
    --path                value is a path (file or directory name)

Other
    -z, --null            terminate values with NUL byte
    --includes            respect include directives on lookup

supervisor@VTV-HOME /d/testgit (master)
$ git config --global username
error: key does not contain a section: username
supervisor@VTV-HOME /d/testgit (master)
$ git config --global username vtvwww
error: key does not contain a section: username
supervisor@VTV-HOME /d/testgit (master)
$ git config --global user.name "vtvwww"
supervisor@VTV-HOME /d/testgit (master)
$ git config --global user.email "vtv.www@gmail.com"
supervisor@VTV-HOME /d/testgit (master)
$ echo # test >> README.md

supervisor@VTV-HOME /d/testgit (master)
$ git add README.md
fatal: pathspec 'README.md' did not match any files
supervisor@VTV-HOME /d/testgit (master)
$ git commit -m "first commit"
# On branch master
#
# Initial commit
#
# Untracked files:
#   (use "git add <file>..." to include in what will be committed)
#
#       1.txt
nothing added to commit but untracked files present (use "git add" to track)
supervisor@VTV-HOME /d/testgit (master)
$ git add README.md
fatal: pathspec 'README.md' did not match any files
supervisor@VTV-HOME /d/testgit (master)
$ git add 1.txt
supervisor@VTV-HOME /d/testgit (master)
$ git add 1.txt
supervisor@VTV-HOME /d/testgit (master)
$ git commit -m "first commit"
[master (root-commit) 71e6f2e] first commit
 1 file changed, 2 insertions(+)
 create mode 100644 1.txt
supervisor@VTV-HOME /d/testgit (master)
$ git remote add origin https://github.com/vtvwww/test.git
supervisor@VTV-HOME /d/testgit (master)
$ git push -u origin master
Username for 'https://github.com': vtvwwww
Password for 'https://vtvwwww@github.com':
fatal: Authentication failed
supervisor@VTV-HOME /d/testgit (master)
$ git push -u origin master
Username for 'https://github.com': vtvwww
Password for 'https://vtvwww@github.com':
Counting objects: 3, done.
Writing objects: 100% (3/3), 223 bytes, done.
Total 3 (delta 0), reused 0 (delta 0)
To https://github.com/vtvwww/test.git
 * [new branch]      master -> master
Branch master set up to track remote branch master from origin by rebasing.
supervisor@VTV-HOME /d/testgit (master)
$ git commit -m "commit #2"
# On branch master
# Changes not staged for commit:
#   (use "git add <file>..." to update what will be committed)
#   (use "git checkout -- <file>..." to discard changes in working directory)
#
#       modified:   1.txt
#
no changes added to commit (use "git add" and/or "git commit -a")
supervisor@VTV-HOME /d/testgit (master)
$ > tets.php
supervisor@VTV-HOME /d/testgit (master)
$ git push origin master
Username for 'https://github.com': vtvwww
Password for 'https://vtvwww@github.com':
Everything up-to-date
supervisor@VTV-HOME /d/testgit (master)
$ git pull test master
Cannot pull with rebase: You have unstaged changes.
Please commit or stash them.
supervisor@VTV-HOME /d/testgit (master)
$ git commit -m "commit #2"
# On branch master
# Changes not staged for commit:
#   (use "git add <file>..." to update what will be committed)
#   (use "git checkout -- <file>..." to discard changes in working directory)
#
#       modified:   1.txt
#
no changes added to commit (use "git add" and/or "git commit -a")
supervisor@VTV-HOME /d/testgit (master)
$ git push origin master
Username for 'https://github.com': vtvwww
Password for 'https://vtvwww@github.com':
Everything up-to-date
supervisor@VTV-HOME /d/testgit (master)
$ git add index.php
supervisor@VTV-HOME /d/testgit (master)
$ git status
# On branch master
# Changes to be committed:
#   (use "git reset HEAD <file>..." to unstage)
#
#       new file:   index.php
#
# Changes not staged for commit:
#   (use "git add <file>..." to update what will be committed)
#   (use "git checkout -- <file>..." to discard changes in working directory)
#
#       modified:   1.txt
#
supervisor@VTV-HOME /d/testgit (master)
$ git commit -m "index.php"
[master 76dd1de] index.php
 1 file changed, 3 insertions(+)
 create mode 100644 index.php
supervisor@VTV-HOME /d/testgit (master)
$ git push test master
fatal: 'test' does not appear to be a git repository
fatal: Could not read from remote repository.

Please make sure you have the correct access rights
and the repository exists.
supervisor@VTV-HOME /d/testgit (master)
$ git push origin master
Username for 'https://github.com': vtvwww
Password for 'https://vtvwww@github.com':
Counting objects: 4, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (2/2), done.
Writing objects: 100% (3/3), 286 bytes, done.
Total 3 (delta 0), reused 0 (delta 0)
To https://github.com/vtvwww/test.git
   71e6f2e..76dd1de  master -> master
supervisor@VTV-HOME /d/testgit (master)
$ git pull test master
Cannot pull with rebase: You have unstaged changes.
Please commit or stash them.
supervisor@VTV-HOME /d/testgit (master)
$ git add .
supervisor@VTV-HOME /d/testgit (master)
$ git status
# On branch master
# Changes to be committed:
#   (use "git reset HEAD <file>..." to unstage)
#
#       modified:   1.txt
#       new file:   css/style.css
#       new file:   help.php
#
supervisor@VTV-HOME /d/testgit (master)
$ git commit -m "create new files"
[master 7d20fab] create new files
 3 files changed, 8 insertions(+), 1 deletion(-)
 create mode 100644 css/style.css
 create mode 100644 help.php
supervisor@VTV-HOME /d/testgit (master)
$ git push test master
fatal: 'test' does not appear to be a git repository
fatal: Could not read from remote repository.

Please make sure you have the correct access rights
and the repository exists.
supervisor@VTV-HOME /d/testgit (master)
$ git push origin master
Username for 'https://github.com': vtvwww
Password for 'https://vtvwww@github.com':
To https://github.com/vtvwww/test.git
 ! [rejected]        master -> master (non-fast-forward)
error: failed to push some refs to 'https://github.com/vtvwww/test.git'
hint: Updates were rejected because the tip of your current branch is behind
hint: its remote counterpart. Merge the remote changes (e.g. 'git pull')
hint: before pushing again.
hint: See the 'Note about fast-forwards' in 'git push --help' for details.
supervisor@VTV-HOME /d/testgit (master)
$ git pull origin master
remote: Counting objects: 3, done.
remote: Compressing objects: 100% (2/2), done.
remote: Total 3 (delta 0), reused 0 (delta 0), pack-reused 0
Unpacking objects: 100% (3/3), done.
From https://github.com/vtvwww/test
 * branch            master     -> FETCH_HEAD
First, rewinding head to replay your work on top of it...
Applying: create new files
supervisor@VTV-HOME /d/testgit (master)
$ git status
# On branch master
# Your branch is ahead of 'origin/master' by 2 commits.
#   (use "git push" to publish your local commits)
#
nothing to commit, working directory clean
supervisor@VTV-HOME /d/testgit (master)
$ git push origin master
Username for 'https://github.com': vtvwww
Password for 'https://vtvwww@github.com':
Counting objects: 6, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (2/2), done.
Writing objects: 100% (4/4), 428 bytes, done.
Total 4 (delta 0), reused 0 (delta 0)
To https://github.com/vtvwww/test.git
   0d264b2..989158a  master -> master
supervisor@VTV-HOME /d/testgit (master)
$
