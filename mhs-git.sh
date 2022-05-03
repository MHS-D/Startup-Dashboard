git add .

echo 'Enter commit message:'

read commit

git commit -m "$commit"

echo 'Enter branch name:'

read branch

git push origin $branch

