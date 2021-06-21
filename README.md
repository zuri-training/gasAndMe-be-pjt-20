# gasAndMe-be-pjt-20
gasAndMe-fe-pjt-20 GasAndMe description: This is a proposed solution (Web and Mobile App) for LPG(Cooking Gas) retailing across Africa. The switch from other cooking means to gas is growing rapidly and the retailers are still largely separated from the final consumers in Africa. This solution would provide a meeting point for Bulk Seller, Retailers and Final Consumers. It is expected to ease and enhance the productivity of the LPG sector and business.

> ## Tech Stack
The stacks used for the project include:

| <b><u>Technology</u></b> | 
| :---         | 
| **` PHP`** | 
| **`Laravel`** | 
| **`MYSQL`** | 

### Setting up your workspace

Before running this app, locally make sure you have the following software installed:

-   XAMPP or it's equivalent
-   NPM
-   Composer

Now, follow this steps to start contributing:

1. Fork the main repository and then clone the forked copy using 
```
 git clone https://github.com/<YOUR-GITHUB-USERNAME>/gasAndMe-be-pjt-20.git
```

2. Run `cd gasAndMe-be-pjt-20`

3. Add the main repo as your "upstream" remote so you can always have an updated code from the main source code with ease, to do this make sure you have CDed into the project from your terminal, and then run the command

```
 git remote add upstream https://github.com/zuri-training/gasAndMe-be-pjt-20.git
```

4. Run `composer install`
5. Run `php artisan key:generate --show` to retrieve a base64 encoded string for Laravel's `APP_KEY` in `.env`
6. Run `php artisan serve` from your terminal and the app will be running on `http://127.0.0.1:8000/`

#
> ## Contributing to the project

Some important things to note as you try to make a contribution


- `What you are working on should be assigned to you as an issue.`

- `Link your pull request to the issue.`

- `Leave a clear description on your pull requestes.`

<b>WORKING ON AN ISSUE</b>

When you have been assigned an issue, to start working, from the main branch of your local repo create a new branch with a similar name to the issue assigned. For example, if one is assigned an issue for creating user tabel as issue 64, he/she might create a branch by running
 
```
 git checkout main
```
the command above is to make sure you are creating a branch from your main branch, then run the following command

```
 git checkout -b 64-create-user_table
```
After creating a branch, you should go ahead and make your changes on only the files you need to. When you are satisfied with you solution, commit the changes to your branch by running

```
 git add .
```
followed by

```
 git commit -m "Commit message"
```
And then 
```
 git pull upstream main
```
It is important to note that you are not only required to commit when you have arrived at your solution but as often as you feel you should save your current changes.
It is also important to pull from the main repo everyday, to avoid unresolvable conflicts with the command

```
 git pull upstream main
```

You can finish off by pushing to the same branch in your remote repository by running

```
 git push -u origin <Name-of-branch>
```
if you are pushing to that branch subsequently, you can omit the branch name and the `-u` flag, just run

```
 git push
```

<b>MAKING A PULL REQUEST</b>

When you have pushed the work to its branch on your repo, follow the following steps to create a pull request 

- `Switch to the branch you worked on`

- `Click the dropdown labelled contribute and then click open pull request`

- `Leave a clear description on your pull requestes and link the issue assigned to close it automatically`
