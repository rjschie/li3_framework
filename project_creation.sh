#!/usr/bin/env bash

ProjectName=$1

# mkdir $ProjectName

git clone git@github.com:rjschie/li3_framework.git $ProjectName
rm -rf $ProjectName/.git
rm $ProjectName/project_creation.sh
mkdir /Users/ryanschie/_Web/_design/_Projects/$ProjectName
ln -s /Users/ryanschie/_Web/_design/_Projects/$ProjectName $ProjectName/_design
sed -i '' "s/li3_framework/$ProjectName/g" $ProjectName/config.codekit
mv $ProjectName/.idea/li3_framework.iml $ProjectName/.idea/$ProjectName.iml
sed -i '' "s/li3_framework/$ProjectName/g" $ProjectName/.idea/.name
sed -i '' "s/li3_framework/$ProjectName/g" $ProjectName/.idea/modules.xml
sed -i '' "s/li3_framework/$ProjectName/g" $ProjectName/.idea/workspace.xml
cd $ProjectName
git init 
git add -A && git commit -m "Initial Commit"